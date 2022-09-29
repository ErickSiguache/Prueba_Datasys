class DataCapture {
    constructor(DataCaptureNum1, DataCaptureNum2) {
        this.DataCaptureNum2 = DataCaptureNum2;
        this.DataCaptureNum1 = DataCaptureNum1;
        this.calculador = new CalculatorService();
        this.operatortype = undefined;
        this.Num2 = '';
        this.Num1 = '';
        this.signos = {
            sumar: '+',
            dividir: '%',
            multiplicar: 'x',
            restar: '-',
        }
    }

    borrar() {
        this.Num2 = this.Num2.toString().slice(0,-1);
        this.imprimirValores();
    }

    borrarTodo() {
        this.Num2 = '';
        this.Num1 = '';
        const displaytotalfinal = document.getElementById('totalfinal');
        displaytotalfinal.innerHTML = '';
        this.operatortype = undefined;
        this.imprimirValores();
    }

    borrarTodoMas() {
        this.Num2 = '';
        this.Num1 = '';
        this.operatortype = undefined;
        this.imprimirValores();
    }

    computar(tipo) {
        this.operatortype !== 'igual' && this.calcular();
        this.operatortype = tipo;
        this.Num1 = this.Num2 || this.Num1;
        this.Num2 = '';
        this.imprimirValores();
    }

    agregarNumero(numero) {
        console.log(numero)
        if(numero === '.' && this.Num2.includes('.')) return
        this.Num2 = this.Num2.toString() + numero.toString();

        this.imprimirValores();
    }

    imprimirValores() {
        this.DataCaptureNum2.textContent = `${this.Num2}`;
        this.DataCaptureNum1.textContent = `${this.Num1} ${this.signos[this.operatortype] || ''}`;
    }

    calcular() {
        const Num1 = parseFloat(this.Num1);
        const Num2 = parseFloat(this.Num2);

        if( isNaN(Num2)  || isNaN(Num1) ) return
        this.Num2 = this.calculador[this.operatortype](Num1, Num2);
        borrarTodoMas();
    }
}
