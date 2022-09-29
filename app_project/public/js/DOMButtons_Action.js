const DataCaptureNum1 = document.getElementById('valor1');
const DataCaptureNum2 = document.getElementById('valor2');
const btnNumeros = document.querySelectorAll('.numero');
const btnOperadores = document.querySelectorAll('.operador');

const datacapture = new DataCapture(DataCaptureNum1, DataCaptureNum2);

btnNumeros.forEach(boton => {
    boton.addEventListener('click', () => datacapture.agregarNumero(boton.innerHTML));
});

btnOperadores.forEach(boton => {
    boton.addEventListener('click', () => datacapture.computar(boton.value))
});
