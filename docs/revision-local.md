# Revisión local

Esta guía describe los requisitos y límites de la copia del repositorio. No
es un procedimiento de despliegue público: faltan el esquema MySQL y parte de
los endpoints, y los flujos tienen problemas conocidos de autenticación.

## Conexión PHP

Se requiere PHP con `mysqli`, `json` y `session`. Algunas vistas web usan cURL,
por lo que también requieren la extensión `curl`.

Los endpoints incluyen `Servicios/conexionBDRemota.php`. Ese archivo y
`conexionBDLocal.php` delegan en `conexionBD.php`, que lee las mismas cuatro
variables del entorno. El nombre local/remoto no selecciona otra base de datos:
la configuración del proceso determina la conexión.

1. Obtener y revisar el esquema correspondiente a esta versión. No se incluye
   un SQL ni una migración en el repositorio; crear únicamente una base local
   con datos sintéticos.
2. Desde la raíz, copiar `.env.example` a `.env` y completar `DB_HOST`, `DB_USER`,
   `DB_PASSWORD` y `DB_NAME`. Ninguna puede estar vacía.
3. Configurar esas variables en el proceso PHP. El proyecto no lee `.env`
   automáticamente. Para una shell POSIX y un archivo local de confianza:

   ```sh
   set -a
   . ./.env
   set +a
   php -S 127.0.0.1:8000 -t Servicios
   ```

   El archivo se interpreta como código de shell; usa tus propios valores
   entre comillas simples como en el ejemplo.
4. Consultar un endpoint de lectura como `listarFrecuencias.php`. Esto solo
   verifica esa consulta y su conexión, no los flujos de usuarios o ventas.

No es necesario copiar o renombrar los archivos `.php.example`: se conservan
por compatibilidad con la estructura anterior. Los archivos PHP de conexión
se versionan sin secretos; `.env` y sus variantes locales están ignorados.

Si falta configuración o falla la conexión, se devuelve HTTP 500 y un error
genérico. Los detalles de la conexión no se muestran al cliente. Los errores
de consulta de los endpoints no están cubiertos por ese manejo.

## Android

`appBuses/` y `appBusesDriver/` son proyectos Gradle independientes. Su
configuración declara `compileSdk 32`, `targetSdk 32` y `minSdk 24`. Para
compilarlos se necesitan el SDK y un JDK compatible con sus versiones de
Gradle y del plugin Android; esta revisión no verificó esa combinación.

Abrir cada carpeta por separado en Android Studio permite inspeccionar los
layouts y el código. El flujo de pasajeros usa `java.time` en el listado con
una anotación para API 26, aunque el mínimo declarado es 24: esa compatibilidad
tampoco está validada y la anotación no impide por sí sola ejecutar en API 24.

Antes de ejecutar consultas, revisar la URL escrita en
`appBuses/app/src/main/java/dev/android/appbuses/MainActivity.kt`. No existe
`BASE_URL` en `Constants.kt`. El endpoint `listarViajesDiarios.php` que necesita
esa pantalla no está en esta copia de `Servicios/`.

Cambiar la URL no conecta las pantallas de login, registro o compra; esos flujos
siguen siendo prototipos. La app de conductores tampoco carga datos del backend.

## Paneles web

Las vistas contienen direcciones del servidor original. Antes de ejecutarlas,
revisar todas las peticiones y acciones de formulario para apuntarlas a un
entorno local propio. Servir las carpetas con PHP no cambia sus URLs.

Las rutas principales están en `frontendweb/frontwebadmin/` y
`frontendweb/frontendoficinista/`. Sus formularios de login no autentican a un
usuario y no deben interpretarse como una barrera de acceso.

## Comprobaciones pendientes

Las pruebas Android incluidas comprueban la suma de dos números y el nombre
del paquete. No verifican los flujos del proyecto. No hay una suite PHP ni una
base de prueba. Una comprobación de sintaxis PHP o una compilación Android,
cuando estén disponibles esas herramientas, tampoco validan por sí solas las
integraciones con MySQL y los clientes.
