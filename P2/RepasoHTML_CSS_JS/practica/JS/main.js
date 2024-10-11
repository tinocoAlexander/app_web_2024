// Estees un comentario de una linea

/* Esto es un comentario
en varias
lineas
*/

//alerta
//alert("Soy una ventana de alerta")

//variables

var nombre = "Dagoberto Fiscal Gurrola";
let nombre2 = "Daniel el travieso"
let edad = 20
let logica = true
let estatura = 1.80

//Mostrar en pantalla con write
let concatenacion = "La persona: "+nombre2+" tiene la edad de "+edad;
//document.write("<h1>"+concatenacion+"</h1><br>");
//document.write("La persona: "+nombre2+" tiene la edad de "+edad);

//Mostrar en pantalla con document.getElementById
let datos = document.getElementById("informacion");
datos.innerHTML=`
    <br>
    <hr>
    <h1>La persona: ${nombre2}, tiene una altura de ${edad} años</h1>
    <hr>
    <br>
`;

let datos2 = document.getElementById("informacion2");
datos2.innerHTML=`
    <h2>La edad es: ${edad} </h2>
`;

//condicionales if
if (estatura>=1.90)
    //document.write("Es una persona alta")
    datos.innerHTML+=`
    <hr>
    <h3>Es una persona alta</h3>
    <hr>
    `;
else
    //document.write("Es una persona de estatura promedio")
    datos.innerHTML+=`
    <hr>
    <h3>Es una persona de estatura promedio</h3>
    <hr>
    `;
