/**
 * Escribir un programa que muestre por consola los números del 1 al 100, sustituyendo
   los múltiplos de 3 por la palabra “hola”, los múltiplos de 5 por “mundo” y los múltiplos de
   ambos, es decir, los múltiplos de 3 y 5 (o de 15), por la palabra “holamundo”.
*/

//Comando de ejecucion: node .\multiplos.js

// Codigo en JavaScript

for (var i = 1; i <= 100; i++){
    //% tiene como significado una: Asignación de residuo
    if(i % 15 == 0){
        console.log("Hola Mundo");
    }else if(i % 3 == 0){
        console.log("Hola");
    }else if(i % 5 == 0){
        console.log("Mundo");
    }else{
        console.log(i);
    }
}