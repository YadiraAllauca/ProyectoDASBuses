# Safey — transporte interprovincial

Proyecto académico de equipo desarrollado para Diseño y Arquitectura de
Software. Explora la búsqueda de viajes y la venta de pasajes de buses en
Ecuador desde aplicaciones Android y paneles web para distintos usuarios.

Este repositorio reúne el trabajo de los clientes y una versión de los servicios
PHP. Combina pantallas de prototipo con algunas integraciones HTTP implementadas.
**No es un sistema de venta operativo: la autenticación de los clientes y el
flujo de compra móvil están incompletos.**

## Alcance implementado

| Componente | Qué contiene | Qué falta |
| --- | --- | --- |
| Pasajeros · Android | Consulta de viajes con Volley, listado y detalle; navegación por las pantallas de compra y perfil | Autenticación, registro, filtros e historial conectados; reserva y compra persistidas |
| Conductores · Android | Pantallas y navegación de interfaz | Integración con usuarios, viajes y pasajeros del backend |
| Administración · web | Consultas y formularios conectados para cooperativas y frecuencias | Autenticación, autorización y completar los flujos anunciados en las interfaces |
| Oficinistas · web | Pantallas de gestión y un formulario conectado para agregar buses | Venta y reportes conectados; autenticación y autorización |
| Servicios · PHP | Endpoints de flota, rutas, usuarios y ventas sobre MySQL | Validación consistente, consultas parametrizadas, permisos y consistencia transaccional |

En particular, la pantalla de pago exitoso es parte del prototipo de navegación:
no confirma un cobro ni una reserva. La pantalla QR muestra una imagen fija y
no genera un boleto. Las integraciones existentes no han sido verificadas
contra el servidor original durante esta revisión.

## Organización y tecnologías

```text
appBuses/            App Android de pasajeros: Kotlin, XML, View Binding, Volley
appBusesDriver/      Prototipo Android de conductores: Kotlin, XML, View Binding
frontendweb/
  frontwebadmin/     Panel PHP con Bootstrap, jQuery y EasyUI
  frontendoficinista/ Panel PHP de oficinistas
Servicios/          Endpoints PHP con mysqli y respuestas JSON
docs/               Estado de las integraciones y guía de revisión local
```

La separación por cliente permitió trabajar en distintas interfaces dentro del
mismo proyecto. La integración quedó parcial: los clientes no comparten una
configuración de API y varios flujos solo recorren pantallas. Ese límite es
relevante para entender el estado del código.

## Relación con el repositorio de servicios

[ServiciosProyectoDAS](https://github.com/YadiraAllauca/ServiciosProyectoDAS)
contiene otra versión del backend Safey con más endpoints. `Servicios/` es una
copia independiente, no un submódulo ni una dependencia sincronizada.

En esta versión faltan endpoints que los clientes referencian, entre ellos
`listarViajesDiarios.php`, `listarFrecuenciaNoCooperativa.php` y
`agregarFrecuenciasCooperativa.php`. No basta con desplegar esta carpeta para
reproducir las integraciones. Tampoco basta con copiar la otra versión: se
deben contrastar los contratos y el esquema de datos.

Este repositorio ofrece la vista general del proyecto; el repositorio de
servicios aporta el contexto específico del backend.

## Cómo revisar el proyecto

- [Estado técnico e integraciones pendientes](docs/estado-del-proyecto.md)
- [Configuración y revisión local](docs/revision-local.md)

Las aplicaciones se abren como proyectos Android independientes. Los paneles
web y los servicios requieren PHP; las consultas necesitan MySQL y un esquema
que no está incluido en este repositorio. No se proporciona una demo pública
ni una instalación completa reproducible.

La conexión PHP usa `DB_HOST`, `DB_USER`, `DB_PASSWORD` y `DB_NAME` del entorno;
[.env.example](.env.example) contiene valores de ejemplo. Los archivos de
conexión versionados ya no contienen credenciales literales. Las credenciales
que estuvieron en commits anteriores permanecen en el historial: si siguen
vigentes, deben rotarse.

## Limitaciones

Los formularios de login de los clientes no verifican credenciales. Los
endpoints de negocio tampoco comprueban permisos, y muchas consultas SQL
interpolan entradas del cliente. Las ventas aceptan importes proporcionados
por el cliente y no coordinan cabecera, detalles y disponibilidad en una
transacción. El código no debe usarse para cuentas o compras reales.

Las pruebas Android son las de plantilla; no hay pruebas automatizadas de los
flujos de negocio ni CI. La revisión documental no equivale a una validación
de compilación o funcionamiento de extremo a extremo.

## Autoría

Safey es un trabajo de equipo. El historial registra contribuciones de
Yadira Allauca, ArmijosThais, diana9519, Eldinosaur y Keybrish. Los nombres
corresponden a las identidades presentes en Git; no implican autoría individual
de todos los módulos ni un reparto de responsabilidades basado en cantidad de
commits.

## Licencia

El repositorio no incluye una licencia de uso para el código del equipo. La
descripción como proyecto académico no concede por sí sola permisos de
reutilización. Las bibliotecas de terceros conservan sus propios avisos y
licencias.
