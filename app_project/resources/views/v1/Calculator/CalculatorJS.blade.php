@extends('index')

@section('tituloPagina', 'Calculadora en Laravel 8')

@section('contenido')
    <div class="card">
        <div class="screen">
            <div style="screen:none" id="valor1"></div>
            <div id="valor2"></div>
        </div>
        <div class="btn-cal btn-cal-radius btn-clean">
            <button  onclick="{{ 'display.borrarTodo()' }}">C</button>
        </div>
        <div class="screen2">
            <div id="app"> </div>
        </div>
        <div class="btn-cal btn-cal-radius">
            <button onclick="{{ 'display.borrar()' }}">&larr;</button>
        </div>
        <div class="btn-cal btn-cal-radius">
            <button class="numero">7</button>
        </div>
        <div class="btn-cal btn-cal-radius">
            <button class="numero">8</button>
        </div>
        <div class="btn-cal btn-cal-radius">
            <button class="numero">9</button>
        </div>
        <div class="btn-cal btn-cal-radius">
            <button class="operador" value="sumar">+</button>
        </div>
        <div class="btn-cal btn-cal-radius">
            <button class="numero">4</button>
        </div>
        <div class="btn-cal btn-cal-radius">
            <button class="numero">5</button>
        </div>
        <div class="btn-cal btn-cal-radius">
            <button class="numero">6</button>
        </div>
        <div class="btn-cal btn-cal-radius">
            <button class="operador" value="restar">-</button>
        </div>
        <div class="btn-cal btn-cal-radius">
            <button class="numero">1</button>
        </div>
        <div class="btn-cal btn-cal-radius">
            <button class="numero">2</button>
        </div>
        <div class="btn-cal btn-cal-radius">
            <button class="numero">3</button>
        </div>
        <div class="btn-cal btn-cal-radius">
            <button class="operador" value="multiplicar">*</button>
        </div>
        <div class="btn-cal btn-cal-radius">
            <button class="numero">0</button>
        </div>
        <div class="btn-cal btn-cal-radius">
            <button class="numero">.</button>
        </div>
        <div class="btn-cal btn-cal-radius">
            <button class="operador" value="dividir">/</button>
        </div>
        <div class="btn-cal btn-cal-radius btn-equal">
            <button class="operador" value="igual">=</button>
        </div>

    </div>
@endsection
