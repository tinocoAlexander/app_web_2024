function operaciones() {
    let n1 = parseInt(document.getElementById("n1").value);
    let n2 = parseInt(document.getElementById("n2").value);
    let tipoope = document.getElementById("tipo").value;
    let ope;
    let signo;

    if (!isNumber(n1) || !isNumber(n2)) {
        alert("Introduce números válidos");
        return
    }

    switch (tipoope) {
        case "suma": 
            ope = n1 + n2;
            signo = "+"
            break;
        case "resta": 
            ope = n1 - n2;
            signo = "-"
            break;
        case "multiplicacion": 
            ope = n1 * n2;
            signo = "*"
            break;
        case "division": 
            if (n2 !== 0) {
                ope = n1 / n2;
                signo = "/"
            } else {
                ope = "Error: División por cero";
            }
            break;
        default:
            ope = "Operación no válida";
    }

    document.getElementById("resultado").innerHTML = `Resultado: <h2> ${n1} ${signo} ${n2} = ${ope} </h2>`;
}

function isNumber(n){
    return !isNaN(parseInt(n)) && isFinite(n);
}