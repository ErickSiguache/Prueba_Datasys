@extends('index')

@section('tituloPagina', 'Calculadora en Laravel 8')

@section('contenido')
    <div class="grid text-center calculadora">
        <h2> Calculadora </h2>
        <div class="g-col-6 g-col-md-4">
            <form method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label"></label>
                    <label for="title" class="form-label"> Primer valor: </label>
                    <input type="text" name="numero1"  class="form-control">
                </div>
                @error('numero1')
                    <h6 class="alert alert-danger"> {{ $message }} </h6>
                @enderror
                <div class="mb-3">
                    <label for="title" class="form-label"> Segundo valor: </label>
                    <input type="text" name="numero2" class="form-control">
                </div>
                @error('numero2')
                    <h6 class="alert alert-danger"> {{ $message }} </h6>
                @enderror
                <div class="mb-3">
                    <select id="valor" name="valor" class="form-select" aria-label="Default select example">
                        <option value="" selected>------Seleccionar------</option>
                        <option value="+"> Suma </option>
                        <option value="-"> Resta </option>
                        <option value="*"> Multiplicacion </option>
                        <option value="/"> Division </option>
                    </select>
                </div>
                <input type="submit" onclick="{{ route('calculos') }}" class="btn btn-primary  name="sumar" value="=" title="Sumar">
                @if (session('success'))
                   <h6 class="alert alert-success"> {{session('success')}} </h6>
                @endif
            </form>
        </div>
    </div><h6></h6>
    <div class="grid text-center calculadora">
        <h4> El resultado del proceso es: {{$valores['response']}} </h4>
    </div>

@endsection

