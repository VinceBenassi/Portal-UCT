# Rediseño Portal Estudiante

Este proyecto esta dirigido al rediseño de las interfaces y de ciertos modulos de la plataforma estudiantil de la universidad catolica de temuco, la cual al contar con una plataforma cuyo diseño no es visualmente agradable para el usuario necesita una remodelación, a lo cual esta avocado este proyecto, cabe destacar que las tecnologias que se usaran para este rediseño seran:

<br>

- Laravel 8
- SQL server
- Boostrap
- HTML
- PHP
- Dialogflow Api

<br>

## Para implementar dichas herramientas y/o tecnologias los pasos para su correcta instalación 

<br>
Descargamos la versiòn de php que deseamos utilizar
accediendo al siguiente link
<br>

```
https://www.php.net/downloads.php
```

<br>

Posterior a este paso procedemos a descargar de la misma forma composer accediendo al siguiente link 

```
https://getcomposer.org/
```
Instalamos laravel 8 para windows o linux segun corresponda siguiendo las intrucciones de este repositorio de github, dicho repositorio contiene las intrucciones basicas asi como la verificaciòn de la funcionalidad de las herramientas intaladas hasta el momento.

```
https://github.com/devfy-space/laravel-desde-cero
```
<br>

Ademas debemos instalar SQL Server, asi como un manjeador de entorno llamado dBeaver.

```
https://dbeaver.io/download/
```
<br>

## Visualización plataforma portal estudiante
<p>
    El nuevo diseño de la plataforma estudiantil cuenta con diversos matices los cuales muestran una mejora en torno a la plataforma original, para empezar el diseño es mucho mas agradable, en vista de celular, siendo este ultimo  responsivo
<p>
<br>
<img width="950" alt="Screen Shot 2019-12-16 at 5 59 47 PM" src='https://cdn.discordapp.com/attachments/624718436261560323/1029810460486291466/unknown.png'>
<br>


## Configuración y uso del chatbot
<p>
    dentro de las nuevas funciones se puede observar un pequeño apartado el cual es el chartbot, dicho elemento   fue desarrollado mediante el uso de inteligencia artificial y la api de google clud Dialogflow
<p>

```
https://dialogflow.cloud.google.com/
```

<br>


## Dialogflow:
<br>
dicha herramienta es propiedad de google cloud por lo cual una de sus ventajas es que permite el trabajo colaborativo con cuentas de google
<br>
 
<img width="950" alt="Screen Shot 2019-12-16 at 5 59 47 PM" src='https://cdn.discordapp.com/attachments/624718436261560323/1029815008697262100/unknown.png'>

<br>
dialogflow nos permite usar de manera instintiva la creación de agents los cuales seran los encargados de manejar las acciones de consultas solicitadas mas tarde

<br>

<img width="950" alt="Screen Shot 2019-12-16 at 5 59 47 PM" src='https://cdn.discordapp.com/attachments/624718436261560323/1029815683938259044/unknown.png'>

<br>

dentro de la sección entities sera donde crearemos y definiremos las palabras claves asi como las la estructura de el lenguaje natural que recibira como parametro de entrada nuestro agente

<br>

<img width="950" alt="Screen Shot 2019-12-16 at 5 59 47 PM" src='https://cdn.discordapp.com/attachments/624718436261560323/1029816250873938000/unknown.png'>

<br>

luego se debe proceder al apartado de intents donde definiremos las palabras de entrenamiento que tendra el bot asi como sus posibles respuestas

<br>

<img width="950" alt="Screen Shot 2019-12-16 at 5 59 47 PM" src='https://cdn.discordapp.com/attachments/624718436261560323/1029816716814975007/unknown.png'>



<br>

Para finalizar solamente dirijase al apartado de integrations y defina el lugar donde dejara funcional su bot

<img width="950" alt="Screen Shot 2019-12-16 at 5 59 47 PM" src='https://cdn.discordapp.com/attachments/1036462454550577192/1040459299878612992/image.png'>

<br>

Los puntos marcados de color amarillo son los mas comunes donde se habilitan este tipo de bots, pero si solo deseas agregar dicha función en un html o una pagina web base te recomendamos usar la integración marcada con rojo, ya que para usar esta solo deberas pichar dicha opción y copiar codigo de html que esta entrega

<br>

Si no deseas mejorar tu bot es decir darle un diseño personalizado con la herramienta Blahbox que tiene google cloud, entonces ignora estos pasos, ya que su configuración ya esta completa.

<br>

Luego de configurar todos los componenetes del lenguaje natural nos deberemos dirigir al apartado de project ID, ya que en este punto debemos dirigirnos al area remarcada dando click en dicho apartado, ya que para una mejor configuración es recomendable habilitar las claves de acceso de la api.

<img width="950" alt="Screen Shot 2019-12-16 at 5 59 47 PM" src='https://cdn.discordapp.com/attachments/1036462454550577192/1040456715486892052/image.png'>

Luego de encontrarnos en dicha configuración nos dirigiremos al apartado de credenciales en donde debemos crear una nueva credencial, para asi de este modo generar un archivo .json el cual contendra nuestra configuración de lenguaje natural.


<img width="950" alt="Screen Shot 2019-12-16 at 5 59 47 PM" src='https://cdn.discordapp.com/attachments/1036462454550577192/1040461451720142959/image.png'>

<img width="950" alt="Screen Shot 2019-12-16 at 5 59 47 PM" src='https://cdn.discordapp.com/attachments/1036462454550577192/1040462152420577311/image.png'>

<br>

ya con nuestra clave adquirida en formato json ahora nos vamos a dirijir al siguiente enlace

```
https://manage.blahbox.net/
```

En este sitio se configurara la apariencia personalizada de nuestro bot, es decir la forma en la que queremos que este se vea en el sitio web, dentro de esta pagina podemos observar que se nos solicita la key de configuración del lenguaje la cual obtuvimos anteriormente, en este apartado de la pagina deberemos definir que nuestro bot fue entrenado en dialogflow para no tener problemas de compatibilidad

<br>

<img width="950" alt="Screen Shot 2019-12-16 at 5 59 47 PM" src='https://cdn.discordapp.com/attachments/1036462454550577192/1041779029495255071/image.png'>

<br>

Luego de configurar nuestro bot procedemos a realizar el diseño paso a paso segun nos indique la pagina, ya que esta cuenta con un tutorial interno que nos dira el paso a paso que debemos seguir


<img width="950" alt="Screen Shot 2019-12-16 at 5 59 47 PM" src='https://cdn.discordapp.com/attachments/1036462454550577192/1041780523279863858/image.png'>