let monedaInicio = document.getElementById('monedaInicio');
let monedaFinal = document.getElementById('monedaFinal');
let cantidadInput = document.getElementById('cantidad');
let resultadoConversion = document.getElementById('conversion');
let botonConvertir = document.querySelector('input[type="button"]');
let contenedorImagen = document.querySelector('.image');

let tasasDeCambio = {
    Dolar: { Euro: 0.85, Mexicano: 20.0, Dolar: 1 },
    Euro: { Dolar: 1.18, Mexicano: 23.5, Euro: 1 },
    Mexicano: { Dolar: 0.05, Euro: 0.043, Mexicano: 1 }
};

function convertir() {
    let monedaDe = monedaInicio.value;
    let monedaA = monedaFinal.value;
    let cantidad = parseFloat(cantidadInput.value);

    if (isNaN(cantidad) || cantidad <= 0) {
        resultadoConversion.textContent = "Por favor, ingresa una cantidad válida.";
        return;
    }

    if (monedaDe == monedaA){
        resultadoConversion.textContent = "La moneda a la que se quiere convertir tiene que ser distinta";
        return;
    }

    let tasa = tasasDeCambio[monedaDe][monedaA];
    let resultado = (cantidad * tasa).toFixed(2);

    resultadoConversion.textContent = `${cantidad} ${monedaDe} = ${resultado} ${monedaA}`;

    mostrarImagen(monedaA);
}

function mostrarImagen(moneda) {
    const imagenes = {
        Dolar: 'img/estados-unidos.png',
        Euro: 'img/espania.png',
        Mexicano: 'img/mexico.png'
    };

    contenedorImagen.innerHTML = `<img src="${imagenes[moneda]}" alt="${moneda}" style="width:100px; height:100px; margin-top:10px;">`;
}

botonConvertir.addEventListener('click', convertir);
