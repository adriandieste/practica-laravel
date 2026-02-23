# Aplicación Web en Laravel con Autenticación, CRUD y Traducciones

## Descripción General

Esta es una aplicación web desarrollada con Laravel que implementa un sistema completo de autenticación de usuarios, gestión de alumnos mediante CRUD, y soporte para múltiples idiomas (Español, Inglés y Francés).

## Características Principales

### 1. Estructura y Diseño
- Diseño moderno basado en componentes Blade HTML
- Utiliza Tailwind CSS para los estilos
- Componentes reutilizables: Layout principal, Header, Navegación y Footer
- Interfaz responsiva y adaptable a diferentes dispositivos

### 2. Autenticación
- Sistema de autenticación seguro con Laravel Fortify
- Registro de nuevos usuarios
- Inicio de sesión
- Cierre de sesión
- Interfaz adaptativa según el estado de autenticación

### 3. Gestión de Alumnos (CRUD)
- **Crear**: Formulario para agregar nuevos alumnos
- **Leer**: Tabla paginada con listado de alumnos
- **Actualizar**: Edición de información de alumnos
- **Eliminar**: Eliminación con confirmación mediante SweetAlert2
- Validación de formularios con mensajes de error
- Confirmación de acciones con SweetAlert2
- Paginación automática (10 alumnos por página)

### 4. Campos de Alumno
- Nombre (obligatorio)
- Email (obligatorio, único)
- Teléfono (opcional)
- Dirección (opcional)

### 5. Traducciones Multiidioma
- Español (es)
- Inglés (en)
- Francés (fr)
- Selector de idioma en la aplicación
- El idioma se mantiene al navegar

### 6. Gestión de Proyectos
- Se cargan datos de proyectos inicialmente mediante seeders
- Accesible desde la navegación principal

## Requisitos para la Ejecución

### Requisitos del Sistema
- PHP 8.2 o superior
- Composer
- Node.js y npm
- Base de datos (MySQL, PostgreSQL, SQLite, etc.)
- Git

### Dependencias PHP
- Laravel 12
- Laravel Fortify para autenticación
- Otros paquetes incluidos en composer.json

### Dependencias JavaScript
- Tailwind CSS 4.0
- Alpine.js
- SweetAlert2

## Pasos para la Instalación

### 1. Clonar el Repositorio
```bash
git clone <URL_DEL_REPOSITORIO>
cd practica-laravel
```

### 2. Instalar Dependencias PHP
```bash
composer install
```

### 3. Configurar el Archivo .env
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Instalar Dependencias JavaScript
```bash
npm install
```

### 5. Ejecutar Migraciones y Seeders
```bash
php artisan migrate
php artisan db:seed
```

### 6. Compilar Assets
```bash
npm run build
```

### 7. Iniciar el Servidor
```bash
php artisan serve
npm run dev
```

La aplicación estará disponible en `http://localhost:8000`

## Estructura del Proyecto

```
practica-laravel/
├── app/
│   ├── Models/
│   │   ├── Alumno.php
│   │   └── Proyecto.php
│   └── Http/
│       ├── Controllers/
│       │   ├── AlumnoController.php
│       │   └── LocalizationController.php
│       └── Middleware/
│           └── SetLocale.php
├── database/
│   ├── migrations/
│   │   ├── create_alumnos_table.php
│   │   └── create_proyectos_table.php
│   └── seeders/
│       └── ProyectoSeeder.php
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php
│   │   ├── components/
│   │   │   ├── header.blade.php
│   │   │   ├── nav.blade.php
│   │   │   └── footer.blade.php
│   │   ├── alumnos/
│   │   │   ├── index.blade.php
│   │   │   ├── create.blade.php
│   │   │   └── edit.blade.php
│   │   ├── welcome.blade.php
│   │   └── dashboard.blade.php
│   ├── lang/
│   │   ├── es/
│   │   │   ├── messages.php
│   │   │   └── alumnos.php
│   │   ├── en/
│   │   │   ├── messages.php
│   │   │   └── alumnos.php
│   │   └── fr/
│   │       ├── messages.php
│   │       └── alumnos.php
│   └── css/
│       └── app.css
├── routes/
│   └── web.php
├── bootstrap/
│   └── app.php
└── config/
    └── app.php
```

## Explicación de Funcionalidades Principales

### Autenticación
La autenticación es manejada por Laravel Fortify. Los usuarios pueden registrarse, iniciar sesión y cerrar sesión. Las rutas protegidas requieren autenticación.

### CRUD de Alumnos
- **Index**: Muestra una tabla paginada de alumnos
- **Create**: Formulario para crear un nuevo alumno
- **Store**: Guarda el alumno en la base de datos
- **Edit**: Formulario para editar un alumno existente
- **Update**: Actualiza los datos del alumno
- **Delete**: Elimina un alumno con confirmación

### Traducciones
El sistema utiliza el middleware `SetLocale` para detectar y establecer el idioma. Los usuarios pueden cambiar de idioma mediante el selector en el header.

### Componentes Blade
- **Layout**: Template principal con estructura HTML común
- **Header**: Información del usuario y selector de idioma
- **Nav**: Navegación principal
- **Footer**: Pie de página con información y enlaces

## Uso del Sistema

### Crear un Alumno
1. Inicia sesión
2. Ve a la sección "Alumnos" en el menú
3. Haz clic en "Crear Alumno"
4. Completa el formulario y haz clic en "Guardar"

### Editar un Alumno
1. Ve a la sección "Alumnos"
2. Haz clic en el icono de editar en la fila del alumno
3. Actualiza los datos y haz clic en "Guardar"

### Eliminar un Alumno
1. Ve a la sección "Alumnos"
2. Haz clic en el icono de eliminar
3. Confirma la eliminación en el diálogo de SweetAlert2

### Cambiar Idioma
1. Haz clic en el icono de globo en el header
2. Selecciona el idioma deseado
3. La interfaz se actualiza al nuevo idioma

## Control de Versiones (Git)

El proyecto utiliza Git para el control de versiones. Todos los cambios se registran con commits descriptivos.

### Commits Diarios
Después de cada sesión de trabajo, realiza:
```bash
git add .
git commit -m "Descripción clara de los cambios realizados"
git push
```

## Mejoras Implementadas

✅ Protección de rutas mediante middleware  
✅ Validación de formularios con mensajes traducidos  
✅ Diseño con Tailwind CSS  
✅ Control de errores básico  
✅ Commits descriptivos en Git  
✅ SweetAlert2 para confirmaciones  
✅ Paginación de datos  
✅ Sistema multiidioma completo  

## Pruebas

### Usuario de Prueba
- Email: test@example.com
- Contraseña: password

Después de ejecutar `php artisan db:seed`, puedes usar estas credenciales para iniciar sesión.

## Contacto y Soporte

Para preguntas o problemas, por favor crea un issue en el repositorio o contacta al equipo de desarrollo.

---

**Versión**: 1.0  
**Última actualización**: Febrero 2026  
**Desarrollado con**: Laravel 12, Tailwind CSS, Alpine.js

