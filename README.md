# Phishing de Pagina de Facebook

## Descripción
El phishing es un tipo común de ciberataque que se dirige a las personas a través del correo electrónico, mensajes de texto, llamadas telefónicas y otras formas de comunicación. El término phishing en inglés se pronuncia igual que la palabra fishing, literalmente pescar. Un ataque de phishing tiene como objetivo engañar al destinatario para que realice la acción deseada por el atacante, como revelar información financiera, credenciales de acceso al sistema u otra información sensible.
Este archivo es parte de un ejercicio educativo diseñado para aumentar la conciencia sobre el phishing y ayudar a los usuarios a reconocer las señales de posibles ataques. No se debe utilizar con Fines maliciosos o ilegales.
Por lo cual este archivo no se podra abrir desde la nube y todo se tendra que hacer de manera local.

## Vector inicial
- En este caso seria la ingeniería social que es un conjunto de técnicas que utilizan los ciberdelincuentes para manipular a las personas y obtener información confidencial. Estas tácticas se aplican en la comunicación directa con la víctima y apelan a sus emociones y sesgos cognitivos.
- Una aplicacion en la vida real es poner el url que queremos donde las personas tienen tendencia a ir a visistar en este caso facebook, una vez puesta en algun prefil nuestro por ejemplo en YouTube en la seccion de vinculos puedes poner en donde diga facebook un acortador de url si la persona no lee la direccon hacia donde fue reenviada no se dara cuenta.
- Como un extra es posible modificar una seccion del codigo para que el boton de inciar sesion cuando sea presionado sea reeviado a la pagina principal de facebook original. Pero por motivos eticos no se incluye esa parte de codigo en este codigo.
## Instrucciones de Uso

### 1. Requisitos Previos

- Tener Xammp con los servicios de Apache y MySQL preferiblemente o tener los servicios de programas siguientes:
* Tener instalado algun servidor de php.
* Tener un editor de mysql.

### 2. Instalacion
- En caso de tener Xammp seguir las siguientes intrucciones en caso de no tener instalarla utilizando su equivalente.
* La carpeta Prueba-Facebook debe de estar dentro de la carpeta htdocs un ejemplo de ruta donde debe de estar es: C:\xampp\htdocs\
* Una vez guardada la carpeta en la ruta ejecute Xammp y encienda los servicios de Apache y MySQL.
* Dentro de su navegador en escriba en el navegador http://localhost/Prueba-Facebook/ deberia de estar la representacion de la pagina de Facebook.
* Despues escriba en otra pestaña de su navegador la siguiente ruta: http://localhost/phpmyadmin/index.php una vez adentro verifique que exista una base de datos llamada registro en caso de no aparecer usted mismo puede crearla, en caso de crearla debe tener la siguientes caracteristicas: crear una tabla llamada datos con los siguientes datos; campo id. tipo int(9), not null, autoincremental, campo correo, tipo varchar(50), no nulo, campo contraseña, tipo varchar(20), no nulo.
* Una vez ahi usted puede ver que si usted rellena los campos de correo y contraseña dentro de la pagina de fishing de facebook y presionando el boton de iniciar sesion puede ver en la tabla de MySQL que los datos fueron guardados dentro de la base de datos de manera satisfactoria.

