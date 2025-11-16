# 🚌 Sistema de Gestión de Transporte Público - DAS Buses

![Kotlin](https://img.shields.io/badge/Kotlin-0095D5?style=for-the-badge&logo=kotlin&logoColor=white)
![Android](https://img.shields.io/badge/Android-3DDC84?style=for-the-badge&logo=android&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

Sistema integral de gestión de transporte público que permite la administración completa de cooperativas de buses, frecuencias, viajes, venta de boletos y gestión de usuarios a través de múltiples plataformas.

## 📋 Descripción

Sistema completo desarrollado para la gestión de transporte público que integra aplicaciones móviles Android para pasajeros y conductores, interfaces web para administradores y oficinistas, y una API REST en PHP para la comunicación entre todos los componentes.

## ✨ Características Principales

### 📱 Aplicación Móvil para Pasajeros
- Búsqueda de viajes por origen, destino y filtros avanzados
- Selección de asientos disponibles
- Compra de boletos con código QR
- Historial de viajes y compras
- Gestión de perfil de usuario
- Sistema de autenticación seguro

### 🚗 Aplicación Móvil para Conductores
- Gestión de viajes asignados
- Visualización de pasajeros por viaje
- Control de rutas y frecuencias

### 💻 Panel Web Administrativo
- Gestión completa de cooperativas
- Administración de buses y asientos
- Configuración de frecuencias y rutas
- Gestión de paradas
- Asignación de frecuencias a cooperativas
- Control de viajes diarios

### 🏢 Panel Web para Oficinistas
- Venta de boletos
- Consulta de viajes disponibles
- Gestión de usuarios socios
- Reportes y consultas

## 🏗️ Arquitectura del Sistema

```
┌─────────────────┐     ┌─────────────────┐
│  App Pasajeros  │     │  App Conductores│
│    (Android)    │     │    (Android)    │
└────────┬────────┘     └────────┬────────┘
         │                       │
         └───────────┬───────────┘
                     │
         ┌───────────▼───────────┐
         │    API REST (PHP)     │
         │   Servicios Backend   │
         └───────────┬───────────┘
                     │
         ┌───────────▼───────────┐
         │   Base de Datos MySQL │
         └───────────────────────┘
                     │
         ┌───────────┴───────────┐
         │                       │
┌────────▼────────┐    ┌────────▼────────┐
│ Panel Admin Web │    │ Panel Oficinista│
│     (PHP)       │    │     (PHP)       │
└─────────────────┘    └─────────────────┘
```

## 🛠️ Tecnologías Utilizadas

### Frontend Móvil
- **Kotlin** - Lenguaje de programación
- **Android SDK** - Framework de desarrollo
- **Material Design** - Diseño de interfaz
- **View Binding** - Binding de vistas
- **Navigation Component** - Navegación entre pantallas
- **Volley** - Cliente HTTP para peticiones REST
- **Picasso/Glide** - Carga de imágenes

### Frontend Web
- **PHP** - Lenguaje del servidor
- **Bootstrap 5.2** - Framework CSS
- **jQuery EasyUI** - Componentes UI
- **JavaScript** - Interactividad

### Backend
- **PHP** - API REST
- **MySQL** - Base de datos relacional
- **JSON** - Formato de intercambio de datos
- **CORS** - Control de acceso cross-origin

## 📁 Estructura del Proyecto

```
ProyectoDASBuses/
│
├── appBuses/                    # App Android para Pasajeros
│   ├── app/
│   │   ├── src/main/
│   │   │   ├── java/           # Código fuente Kotlin
│   │   │   └── res/            # Recursos (layouts, imágenes)
│   │   └── build.gradle
│   └── build.gradle
│
├── appBusesDriver/              # App Android para Conductores
│   ├── app/
│   │   ├── src/main/
│   │   │   ├── java/           # Código fuente Kotlin
│   │   │   └── res/            # Recursos
│   │   └── build.gradle
│   └── build.gradle
│
├── frontendweb/
│   ├── frontwebadmin/          # Panel Web Administrativo
│   │   ├── controllers/        # Controladores PHP
│   │   ├── views/              # Vistas PHP
│   │   ├── servicios/          # Modelos de datos
│   │   └── css/                # Estilos
│   │
│   └── frontendoficinista/     # Panel Web para Oficinistas
│       ├── controllers/
│       ├── views/
│       ├── servicios/
│       └── css/
│
└── Servicios/                   # API REST Backend
    ├── conexionBDLocal.php     # Conexión BD local
    ├── conexionBDRemota.php    # Conexión BD remota
    ├── buscarViaje.php         # Búsqueda de viajes
    ├── listarFrecuencias.php   # Listado de frecuencias
    ├── venta_boleto.php        # Proceso de venta
    └── ...                     # Otros servicios
```

## 🚀 Instalación y Configuración

### Requisitos Previos

- **Android Studio** (Arctic Fox o superior)
- **JDK 8** o superior
- **Servidor Web** (Apache/Nginx)
- **PHP 7.4** o superior
- **MySQL 5.7** o superior
- **Gradle** 7.0 o superior

### Configuración de la Base de Datos

1. Crear la base de datos MySQL:
```sql
CREATE DATABASE id20780986_proyecto_buses_das;
```

2. Importar el esquema de la base de datos (si está disponible)

3. Configurar las credenciales:
   - Copiar los archivos de ejemplo: `conexionBDLocal.php.example` y `conexionBDRemota.php.example`
   - Renombrarlos eliminando la extensión `.example`
   - Editar con tus credenciales reales
   - **Importante**: Estos archivos están en `.gitignore` y no se subirán al repositorio

### Configuración de las Aplicaciones Android

1. Clonar el repositorio:
```bash
git clone [URL_DEL_REPOSITORIO]
cd ProyectoDASBuses
```

2. Abrir `appBuses` o `appBusesDriver` en Android Studio

3. Configurar la URL del servidor en `Constants.kt`:
```kotlin
const val BASE_URL = "http://tu-servidor.com/Servicios/"
```

4. Sincronizar el proyecto con Gradle

5. Ejecutar la aplicación en un dispositivo o emulador

### Configuración del Backend PHP

1. Copiar la carpeta `Servicios/` al directorio web del servidor:
```bash
cp -r Servicios/ /var/www/html/
```

2. Configurar permisos:
```bash
chmod -R 755 /var/www/html/Servicios/
```

3. Asegurar que PHP tenga habilitadas las extensiones:
   - `mysqli`
   - `json`
   - `mbstring`

### Configuración de los Paneles Web

1. Copiar las carpetas `frontwebadmin/` y `frontendoficinista/` al servidor web

2. Configurar las rutas de los servicios en los controladores PHP

3. Acceder a través del navegador:
   - Panel Admin: `http://tu-servidor.com/frontwebadmin/`
   - Panel Oficinista: `http://tu-servidor.com/frontendoficinista/`

## 🔒 Gestión de Archivos Sensibles y .gitignore

### Archivos Protegidos

El proyecto incluye un archivo `.gitignore` configurado para proteger información sensible y evitar subir archivos innecesarios al repositorio.

#### Archivos que NO se suben al repositorio:

- **Credenciales de Base de Datos**: `conexionBDLocal.php` y `conexionBDRemota.php`
- **Archivos de configuración local**: `.env`, `config.php`
- **Archivos de build**: `build/`, `*.apk`, `*.aab`
- **Archivos de IDE**: `.idea/`, `*.iml`
- **Archivos temporales**: `*.log`, `*.cache`, `*.tmp`
- **Archivos de sistema**: `.DS_Store`, `Thumbs.db`

### Configuración Inicial

1. **Configurar conexiones a base de datos**:

   Los archivos de conexión están excluidos del repositorio por seguridad. Debes crear tus propios archivos basándote en los ejemplos:

   ```bash
   # Copiar los archivos de ejemplo
   cp Servicios/conexionBDLocal.php.example Servicios/conexionBDLocal.php
   cp Servicios/conexionBDRemota.php.example Servicios/conexionBDRemota.php
   ```

2. **Editar los archivos de conexión** con tus credenciales:

   ```php
   // Servicios/conexionBDLocal.php
   $host = "localhost";
   $dbUsuario = "tu_usuario";
   $dbContraseña = "tu_contraseña";
   $dbNombre = "nombre_base_datos";
   ```

3. **Verificar que los archivos no se suban al repositorio**:

   ```bash
   # Verificar qué archivos están siendo ignorados
   git status --ignored
   
   # Verificar que los archivos de conexión no aparezcan
   git check-ignore -v Servicios/conexionBDLocal.php
   ```

### Estructura del .gitignore

El `.gitignore` está organizado en secciones:

- **Archivos Sensibles**: Credenciales y configuraciones
- **Android**: Build files, Gradle, IDE
- **PHP**: Logs, cache, temporales
- **Sistema Operativo**: Archivos del sistema
- **Backup y Temporales**: Archivos de respaldo

### Buenas Prácticas

✅ **Hacer**:
- Usar archivos `.example` como plantillas
- Documentar las variables de entorno necesarias
- Revisar el `.gitignore` antes de hacer commit
- Nunca hacer commit de credenciales reales

❌ **No hacer**:
- Subir archivos con credenciales reales
- Modificar el `.gitignore` para incluir archivos sensibles
- Compartir credenciales en el código o documentación pública

### Si accidentalmente subiste archivos sensibles

Si ya subiste archivos con credenciales al repositorio:

```bash
# 1. Eliminar del historial de Git (cuidado: esto reescribe el historial)
git filter-branch --force --index-filter \
  "git rm --cached --ignore-unmatch Servicios/conexionBDLocal.php" \
  --prune-empty --tag-name-filter cat -- --all

# 2. Forzar push (solo si es necesario y tienes permiso)
# git push origin --force --all

# 3. Cambiar las credenciales en la base de datos inmediatamente
```

**Nota**: Si el repositorio es público, considera las credenciales como comprometidas y cámbialas inmediatamente.

## 📱 Funcionalidades por Módulo

### Módulo de Pasajeros (App Android)
- ✅ Registro e inicio de sesión
- ✅ Búsqueda de viajes con múltiples filtros
- ✅ Visualización de buses disponibles
- ✅ Selección de asientos
- ✅ Compra de boletos
- ✅ Generación de código QR
- ✅ Historial de compras
- ✅ Gestión de perfil

### Módulo de Conductores (App Android)
- ✅ Autenticación de conductores
- ✅ Visualización de viajes asignados
- ✅ Listado de pasajeros por viaje
- ✅ Información de rutas

### Módulo Administrativo (Web)
- ✅ CRUD de cooperativas
- ✅ CRUD de buses
- ✅ CRUD de frecuencias
- ✅ CRUD de paradas
- ✅ Gestión de asientos
- ✅ Asignación de frecuencias a cooperativas
- ✅ Control de viajes diarios
- ✅ Gestión de usuarios socios

### Módulo de Oficinistas (Web)
- ✅ Venta de boletos
- ✅ Consulta de viajes
- ✅ Gestión de usuarios
- ✅ Reportes de ventas

## 🔐 Seguridad

- Autenticación mediante sesiones PHP
- Validación de datos en servidor
- CORS configurado para APIs
- Conexiones seguras a base de datos
- Sanitización de inputs

## 📝 Notas de Desarrollo

- El proyecto utiliza arquitectura MVC en los módulos web
- Las aplicaciones Android siguen el patrón de Activities
- La comunicación entre componentes se realiza mediante JSON
- Se implementan servicios RESTful para la API

## 🤝 Contribuciones

Este es un proyecto académico/educativo. Las contribuciones son bienvenidas siguiendo las mejores prácticas de desarrollo.

## 📄 Licencia

Este proyecto es de uso educativo/académico.

## 👨‍💻 Autor

Desarrollado como parte del proyecto DAS (Diseño y Arquitectura de Software)

