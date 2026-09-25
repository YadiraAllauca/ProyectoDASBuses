# Estado del proyecto

Revisión estática del código realizada el 24 de septiembre de 2026. Se conserva
el alcance académico original y se documenta qué está conectado y qué es
prototipo. No se hicieron peticiones al servidor original ni se utilizaron
credenciales de su base de datos.

## Aplicaciones Android

En `appBuses`, `MainActivity.kt` consulta viajes mediante Volley y entrega los
resultados al adaptador. El detalle recibe el modelo seleccionado. La URL está
escrita en esa Activity; `utils/Constants.kt` solo define la clave del modelo
que se pasa entre pantallas, no una URL base.

`LoginActivity` y `RegisterActivity` navegan a la pantalla principal sin
validar o registrar usuarios. `FilterMenuActivity` muestra una ventana sin
aplicar filtros. Las pantallas de historial y perfil no están conectadas a
servicios de usuario.

El flujo `PaymentActivity → SeatActivity → FileActivity →
PaymentSuccessfulActivity → QRCodeActivity` es navegación de interfaz.
El selector de archivos muestra el nombre del documento elegido, pero no lo
sube. No se registra una venta ni se confirma un pago. El QR es una imagen
del layout, no un código generado para una compra.

`appBusesDriver` contiene pantallas sin integración HTTP para autenticar al
conductor o cargar sus viajes y pasajeros. Su manifest inicia directamente
`MainActivity`.

## Paneles web

Hay integración mediante cURL, formularios y AJAX para algunas operaciones de
cooperativas, frecuencias y buses. Otras vistas son formularios o tablas sin
persistencia conectada, incluida la nueva venta del panel de oficinistas.

Los formularios de login redirigen al panel cuando reciben el botón de envío,
sin comprobar usuario y contraseña. Llamar a `session_start()` en el panel
no sustituye la validación de identidad y permisos.

Los archivos llamados modelos resuelven rutas de vistas. Las peticiones HTTP
también aparecen dentro de las vistas; la separación de responsabilidades no
es completa.

## Contratos y configuración

Las direcciones del antiguo servidor están incrustadas en la Activity de
pasajeros y en varias vistas web. No existe una configuración compartida.
Antes de ejecutar una interfaz contra otro servidor, se deben revisar sus
direcciones y el contrato de cada endpoint.

Los clientes referencian servicios ausentes de esta copia:

| Endpoint | Uso en el cliente |
| --- | --- |
| `listarViajesDiarios.php` | Listado principal de viajes en Android |
| `listarFrecuenciaNoCooperativa.php` | Consulta de frecuencias en el panel administrativo |
| `agregarFrecuenciasCooperativa.php` | Acción de un formulario del panel administrativo |

La versión separada de ServiciosProyectoDAS tampoco debe tratarse como un
reemplazo automático. Hay diferencias entre archivos del mismo nombre y se
necesita comprobar parámetros, tipos y respuestas.

## Seguridad y consistencia pendientes

- `Servicios/login.php` asigna una sesión antes de comprobar las credenciales;
  los endpoints de negocio no verifican sesión, rol o propiedad del recurso.
- Registro y login escriben o comparan las contraseñas recibidas directamente,
  sin hashing en esos flujos.
- Numerosas consultas interpolan parámetros GET o POST. Una consulta preparada
  en login no protege el resto de los servicios.
- Algunos errores incluyen SQL y detalles de MySQL en la respuesta.
- `generarVenta.php` e `ingresarDetalleVenta.php` aceptan importes del cliente.
  Las operaciones están separadas y no usan una transacción compartida.
- `listarAsientosDisponibles.php` consulta el estado del asiento por bus sin
  contrastarlo con las ventas de un viaje concreto.

No se inspeccionó el esquema externo ni posibles restricciones o triggers.
Por ello, no se afirma que esta revisión haya probado una doble venta en el
sistema desplegado; lo que falta en PHP son las garantías para impedirla.

## Credenciales y alcance del mantenimiento

Los archivos de conexión estaban rastreados por Git aunque figuraran en
`.gitignore`. Sus valores literales se sustituyeron por variables de entorno;
los nombres antiguos se conservan como puntos de entrada a una conexión común.
Los ejemplos antiguos también delegan en esa conexión.

Eliminar los valores de la versión actual no borra el historial. Si las
credenciales anteriores siguen activas, deben rotarse en la base de datos.
Esta revisión no las utilizó, no las rotó y no reescribió commits anteriores.

El mantenimiento ajusta documentación y configuración. No completa las
pantallas de prototipo ni corrige los endpoints de autenticación, permisos,
SQL o ventas. Los errores de conexión ahora son genéricos; los errores de
consulta emitidos por cada endpoint siguen pendientes.

## Qué haría falta para continuar el desarrollo

1. Recuperar un esquema versionado y datos sintéticos, y acordar una sola
   fuente del contrato API entre ambos repositorios.
2. Implementar autenticación, hashing y autorización compartida, y actualizar
   los clientes para usar ese contrato.
3. Parametrizar consultas y calcular precios en el servidor. Definir reservas
   por viaje y, si corresponde, por tramo; hacer atómica la compra.
4. Conectar un recorrido completo de búsqueda, reserva y consulta del boleto
   antes de ampliar las demás interfaces.
5. Probar permisos, reintentos de compra, fallos parciales y reservas concurrentes.

No hay tests de negocio ni CI. No se compiló Android ni se ejecutó PHP en esta
revisión porque no están disponibles el SDK Android y el intérprete PHP en
el entorno utilizado.
