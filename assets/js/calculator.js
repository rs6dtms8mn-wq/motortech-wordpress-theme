document.addEventListener(

"DOMContentLoaded",

function(){

function calculate(){

let car =

Number(

document.getElementById("carType").value

);

let wheel =

Number(

document.getElementById("wheelSize").value

);

let extra =

Number(

document.getElementById("extra").value

);

let total =

car + wheel + extra;

document.getElementById("price").innerHTML =

total;

}

document

.querySelectorAll(".calc-form select")

.forEach(

function(select){

select.addEventListener(

"change",

calculate

);

});

});