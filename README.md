# EventsExample
En este ejemplo, cuando el usuario crea una Orden, el controlador despacha el objeto creado, y se genera un Evento (contiene el objeto), este es escuchado por otra clase (Listeners), y se encarga de crear una Factura, utilizando la clave foranea de la Orden y otros datos. Con esto logramos una comunicacion asíncrona, en cual sistema no se detiene si los responsables de realizar la tarea en Listeners demora un tiempo no deseado. Por ultimo la factura creada, impacta en la BD. Recomenacion: Si bien Events y Listeners, funciona para todo. Una buena practica es delegar las operaciones de CRUD utilizando Observadores (los observer, se encargan de observar cualquier impacto en la bd, por lo tanto, son ellos los encargados de realizar las operaciones del CRUD), y con esto logramos un desacoplamiento en el controlador (le quitamos responsabilidad).
 foto del circuito de Events y Listeners
 
![WhatsApp Image 2023-09-20 at 01 42 16](https://github.com/juanlti/EventsExample/assets/47389717/1021d76a-0b5d-4adb-b6a1-3f4bcad4bffb)




![WhatsApp Image 2023-09-20 at 01 42 17](https://github.com/juanlti/EventsExample/assets/47389717/39c745e9-1f51-44a5-adfb-1fb8c98acf91)
