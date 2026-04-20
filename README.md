# Desarrollo web con PHP, HTML y CSS: Creando un sistema de reserva de producto

El objetivo de este proyecto es desarrollar un sistema de reserva de productos, donde los usuarios puedan registrar su solicitud a través de un formulario web. Implementarás un backend en PHP que validará y almacenara los datos en una base de datos MySQL, garantizando que las reservas cumplan con las reglas establecidas.

**Requisitos del Proyecto**

1. <u>Creación de la Interfaz Web:</u> Diseñar una página HTML/CSS con una imagen del producto y un formulario con los siguientes campos:

    - Nombre (input de texto libre)
    - Apellidos (input de texto libre)
    - Correo electrónico (input de tipo email)
    - Número de productos a reservar (select con opciones: 1, 2, 3)

2. <u>Base de Datos:</u> Crear una base de datos con una tabla de reservas que contenga los siguientes campos:

    - Correo (Primary Key, debe ser único)
    - Nombre
    - Apellidos
    - Número de productos reservados

3. <u>Lógica en PHP:</u> 

    - Procesar los datos del formulario en PHP
    - Realizar validaciones:

- Asegurar que todos los campos estén completos.

- Validar que el número de productos esté entre 1 y 3.

- Comprobar que el correo no esté duplicado en la base de datos.

    - Insertar los datos en la base de datos si cumplen con los requisitos.
    - Mostrar una página de confirmación de reserva en caso de éxito.
    - Si hay errores, redirigir al formulario con un mensaje indicando el problema


**Entrega:** Sube en el apartado habilitado a continuación un archivo RAR o ZIP con la estructura de directorios completa, incluyendo:

    - Todos los archivos HTML, CSS y PHP necesarios.
    - El script SQL para la creación de la base de datos y tabla.
    
Completar este proyecto te ayudará a reforzar tus conocimientos en desarrollo backend con PHP, validaciones de formularios y bases de datos. ¡Mucho ánimo y a programar!