<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel
# 🔐 Laboratorio #2 - Implementación del Login en Laravel

## 📋 Tabla de Contenidos
- [Introducción](#introducción)
- [Requisitos Previos](#requisitos-previos)
- [Arquitectura MVC](#arquitectura-mvc)
- [Instalación y Configuración](#instalación-y-configuración)
- [Base de Datos](#base-de-datos)
- [Resultados del Laboratorio](#resultados-del-laboratorio)
- [Dificultades y Soluciones](#dificultades-y-soluciones)
- [Referencias](#referencias)
- [Información del Desarrollador](#información-del-desarrollador)

---

## 🎯 Introducción

Este laboratorio tiene como objetivo implementar un sistema de autenticación completo en Laravel utilizando el patrón de arquitectura **Modelo-Vista-Controlador (MVC)**. Se implementó un módulo de login funcional que incluye registro de usuarios, inicio de sesión, cierre de sesión y recuperación de contraseña.

### Objetivo del Laboratorio
Desarrollar y comprender la implementación de un sistema de autenticación en Laravel, aplicando las mejores prácticas del framework y el patrón MVC.

### Arquitectura MVC en Laravel

#### 📁 Estructura de Carpetas Principales

- **`app/Http/Controllers/`** - Controladores
  - Contienen la lógica de negocio de la aplicación
  - Gestionan las peticiones HTTP y coordinan la interacción entre modelos y vistas
  - Ejemplo: `LoginController.php`, `RegisterController.php`

- **`routes/`** - Rutas
  - Define las URLs disponibles en la aplicación
  - Archivo principal: `web.php` para rutas web
  - Conecta las URLs con los controladores correspondientes

- **`resources/views/`** - Vistas
  - Contienen la interfaz de usuario (HTML, CSS, JS)
  - Utilizan el motor de plantillas Blade de Laravel
  - Archivos con extensión `.blade.php`

- **`app/Models/`** - Modelos
  - Representan las tablas de la base de datos
  - Implementan la lógica de acceso a datos usando Eloquent ORM
  - Ejemplo: `User.php`

---

## 💻 Requisitos Previos

### Prerrequisitos del Ecosistema de Desarrollo

#### Tecnologías Requeridas

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=composer&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Apache](https://img.shields.io/badge/Apache-D22128?style=for-the-badge&logo=apache&logoColor=white)
![VSCode](https://img.shields.io/badge/VS_Code-007ACC?style=for-the-badge&logo=visual-studio-code&logoColor=white)

#### Software Necesario

| Componente | Versión Mínima | Descripción |
|------------|----------------|-------------|
| **PHP** | 8.0 o superior | Lenguaje de programación |
| **Composer** | Última versión estable | Gestor de dependencias de PHP |
| **Laravel** | 10.x | Framework PHP |
| **Servidor Web** | Apache o Nginx | Servidor HTTP |
| **Base de Datos** | MySQL 5.7+ / MariaDB | Sistema de gestión de bases de datos |
| **Entorno de Desarrollo** | XAMPP / Laragon / WampServer | Stack de desarrollo local |
| **Editor de Código** | Visual Studio Code | Editor recomendado |
| **Node.js & NPM** | 16.x o superior | Para compilar assets frontend |

#### Sistema Operativo
- ✅ Windows 10/11
- ✅ macOS
- ✅ Linux (Ubuntu, Debian, etc.)

---

## 🚀 Instalación y Configuración

### 1️⃣ Creación del Proyecto Laravel

```bash
# Opción 1: Usando Laravel Installer
laravel new login-project

# Opción 2: Usando Composer
composer create-project laravel/laravel login-project

# Navegar al directorio del proyecto
cd login-project
```

### 2️⃣ Instalación de Dependencias

```bash
# Instalar dependencias de PHP
composer install

# Instalar dependencias de Node.js
npm install
```

### 3️⃣ Configuración del Archivo .env

```bash
# Copiar el archivo de configuración de ejemplo
cp .env.example .env

# Generar la clave de aplicación
php artisan key:generate
```

**Configuración de la base de datos en `.env`:**

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=LabLaravelLogin7
DB_USERNAME=root
DB_PASSWORD=
```

### 4️⃣ Instalación del Paquete de Autenticación

#### Laravel UI (Bootstrap) - Utilizado en este laboratorio

```bash
# Instalar Laravel UI
composer require laravel/ui

# Generar scaffolding de autenticación con Bootstrap
php artisan ui bootstrap --auth

# Instalar y compilar assets
npm install && npm run dev
```

### 5️⃣ Migraciones de Base de Datos

```bash
# Ejecutar todas las migraciones
php artisan migrate

# Si necesitas rehacer las migraciones
php artisan migrate:fresh

# Ver el estado de las migraciones
php artisan migrate:status
```

### 6️⃣ Iniciar el Servidor de Desarrollo

```bash
# Iniciar el servidor de Laravel
php artisan serve

# El servidor estará disponible en:
# http://127.0.0.1:8000
```

---

## 🗄️ Base de Datos

### Configuración del Entorno

1. **Creación de la Base de Datos**
   ```sql
   CREATE DATABASE LabLaravelLogin7 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   ```

2. **Configuración en .env**
   - Se configuraron las credenciales de conexión a MySQL
   - Puerto: 3306
   - Host: 127.0.0.1 (localhost)
   - Base de datos: `LabLaravelLogin7`

### Migraciones Ejecutadas

Las siguientes tablas fueron creadas mediante las migraciones de Laravel:

| Tabla | Descripción | Campos Principales |
|-------|-------------|-------------------|
| `users` | Almacena información de usuarios registrados | id, name, email, password |
| `password_reset_tokens` | Tokens para recuperación de contraseña | email, token, created_at |
| `failed_jobs` | Registro de trabajos fallidos en cola | id, connection, queue, payload |
| `personal_access_tokens` | Tokens de acceso personal (API) | id, tokenable_type, tokenable_id |

#### Comandos Utilizados para las Migraciones

```bash
# Crear las tablas en la base de datos
php artisan migrate

# Ver las migraciones ejecutadas
php artisan migrate:status

# Rollback de última migración (si es necesario)
php artisan migrate:rollback

# Reiniciar todas las migraciones
php artisan migrate:fresh
```

### 📦 Respaldo de Base de Datos

Se incluye un respaldo de la base de datos en el directorio `/database/backups/`:
- Archivo: `LabLaravelLogin7backup.sql`
- Fecha de creación: 28 de septiembre de 2025

**Comando para crear el backup:**
```bash
mysqldump -u root -p LabLaravelLogin7 > database/backups/LabLaravelLogin7.sql
```

**Comando para restaurar el backup:**
```bash
mysql -u root -p LabLaravelLogin7 < database/backups/LabLaravelLogin7backup.sql
```

---

## 🎨 Resultados del Laboratorio

### Funcionalidades Implementadas

✅ **Registro de nuevos usuarios** - Formulario con validación completa  
✅ **Inicio de sesión** - Autenticación con email y contraseña  
✅ **Cierre de sesión seguro** - Logout con protección CSRF  
✅ **Recuperación de contraseña** - Sistema de reset por email  
✅ **Protección de rutas** - Middleware de autenticación  
✅ **Validación de formularios** - Mensajes de error personalizados  
✅ **Dashboard protegido** - Panel solo accesible para usuarios autenticados  
✅ **Diseño responsive** - Compatible con dispositivos móviles  

### Capturas de Pantalla

#### 🔑 Página de Login
![Página de Login](Imagenes/login.png)
*Interfaz moderna y atractiva para el inicio de sesión*

#### 📝 Página de Registro
![Página de Registro](Imagenes/register.png)
*Formulario de registro con validación en tiempo real*

#### 📊 Dashboard
![Dashboard del Usuario](/dashboard.Imagenespng)
*Panel principal después de autenticación exitosa*

#### 🎨 Diseño Mejorado
- Gradientes modernos en colores morado y azul
- Efectos hover en botones y tarjetas
- Iconos de Bootstrap Icons integrados
- Diseño centrado y espacioso
- Sombras suaves para profundidad

---

## ⚠️ Dificultades y Soluciones

### Problema 1: Error en las Migraciones - SQLSTATE[HY000] [1049]

**Descripción:** Al ejecutar `php artisan migrate` aparecía el error "Base de datos no encontrada".

**Causa:** La base de datos `LabLaravelLogin7` no existía en MySQL.

**Solución:**
```bash
# Crear la base de datos manualmente en MySQL
mysql -u root -p
CREATE DATABASE LabLaravelLogin7 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
EXIT;

# Luego ejecutar las migraciones
php artisan migrate
```

### Problema 2: Conflicto con el Puerto 8000

**Descripción:** El puerto 8000 ya estaba siendo utilizado por otra aplicación.

**Error mostrado:**
```
Failed to listen on 127.0.0.1:8000 (reason: Address already in use)
```

**Solución:**
```bash
# Opción 1: Usar un puerto diferente
php artisan serve --port=8001

# Opción 2: Cerrar el proceso que usa el puerto 8000
# En Windows
netstat -ano | findstr :8000
taskkill /PID [número_del_proceso] /F

# En Linux/Mac
lsof -ti:8000 | xargs kill -9
```

### Problema 3: Error en la Instalación de NPM Dependencies

**Descripción:** Errores al ejecutar `npm install` con mensaje de dependencias incompatibles.

**Error mostrado:**
```
npm ERR! code ERESOLVE
npm ERR! ERESOLVE unable to resolve dependency tree
```

**Solución:**
```bash
# Limpiar caché de npm
npm cache clean --force

# Eliminar node_modules y package-lock.json
rm -rf node_modules package-lock.json

# Reinstalar con flag legacy-peer-deps
npm install --legacy-peer-deps

# O usar forzado
npm install --force
```

### Problema 4: Configuración Incorrecta del .env

**Descripción:** La aplicación no se conectaba a la base de datos mostrando "Access denied for user".

**Solución:**
```bash
# 1. Verificar credenciales en .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=LabLaravelLogin7
DB_USERNAME=root
DB_PASSWORD=

# 2. Limpiar caché de configuración
php artisan config:clear
php artisan cache:clear

# 3. Reiniciar el servidor
php artisan serve
```

### Problema 5: Assets CSS/JS no se Cargan Correctamente

**Descripción:** Los estilos de Bootstrap no se aplicaban en las vistas de login y registro.

**Causa:** Los assets no fueron compilados después de instalar Laravel UI.

**Solución:**
```bash
# Compilar assets en modo desarrollo
npm run dev

# O compilar y dejar observando cambios
npm run watch

# Para producción
npm run build
```

### Problema 6: Error de Token CSRF Mismatch

**Descripción:** Al enviar formularios aparecía el error "419 | Page Expired".

**Causa:** El token CSRF había expirado o no se estaba enviando correctamente.

**Solución:**
```php
// Verificar que en las vistas Blade exista:
@csrf

// En el layout principal verificar:
<meta name="csrf-token" content="{{ csrf_token() }}">
```

---

## 📚 Referencias

### Documentación Oficial

1. **Laravel - Authentication Documentation**
   - URL: https://laravel.com/docs/10.x/authentication
   - Descripción: Guía oficial completa sobre la implementación de autenticación en Laravel 10.x
   - Uso: Consulta principal para entender el sistema de autenticación

2. **Laravel UI Package - GitHub Repository**
   - URL: https://github.com/laravel/ui
   - Descripción: Repositorio oficial del paquete Laravel UI con ejemplos de scaffolding
   - Uso: Instalación y configuración del paquete de autenticación

3. **Laravel Database Migrations**
   - URL: https://laravel.com/docs/10.x/migrations
   - Descripción: Documentación sobre migraciones de base de datos en Laravel
   - Uso: Creación y gestión de tablas mediante migraciones

### Tutoriales y Recursos Adicionales

4. **Styde.net - Curso de Laravel en Español**
   - URL: https://styde.net/laravel/
   - Descripción: Tutoriales completos de Laravel en español, desde básico hasta avanzado
   - Uso: Refuerzo de conceptos y resolución de dudas en español

5. **Laracasts - Laravel Authentication Series**
   - URL: https://laracasts.com/series/laravel-authentication
   - Descripción: Video tutoriales profesionales sobre autenticación en Laravel
   - Uso: Aprendizaje visual paso a paso

6. **Stack Overflow - Laravel Community**
   - URL: https://stackoverflow.com/questions/tagged/laravel
   - Descripción: Comunidad activa para resolver problemas específicos
   - Uso: Búsqueda de soluciones a errores encontrados

---

## 👨‍💻 Información del Desarrollador

<div align="center">

### 🎓 Desarrollado por

**Nombre:** Amanda Carolina Green McCoy  
**Correo:** amanda.green@utp.ac.pa 
**Cédula:** 8-1023-1761 
**Curso:** Ingeniería Web  
**Código del Curso:** 0690
**Grupo:** ISF132  
**Instructor del Laboratorio:** Ing. Irina Fong

---

### 🏛️ Institución Académica

**Universidad Tecnológica de Panamá**  
Facultad de Sistemas Computacionales 
Campus Victor Levis Sasso  
Licenciatura en Ingeniería de Software

---

### 📅 Información del Laboratorio

| Detalle | Información |
|---------|-------------|
| **Laboratorio** | #2 - Implementación del Login en Laravel |
| **Fecha de Inicio** | 22 de septiembre de 2025 |
| **Fecha de Ejecución** | 28 de septiembre de 2025 |
| **Fecha de Entrega** | 29 de septiembre de 2025 |
| **Semestre** | II Semestre 2025 |

---

### 📞 Contacto

[![GitHub](https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/tu-usuario)
[![Email](https://img.shields.io/badge/Email-D14836?style=for-the-badge&logo=gmail&logoColor=white)](mailto:tu.correo@estudiante.utp.ac.pa)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://linkedin.com/in/tu-perfil)



**© 2025 - Universidad Tecnológica de Panamá**  
*Todos los derechos reservados*

</div>