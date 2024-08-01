
let form = document.getElementById('form');

document.addEventListener("DOMContentLoaded", function (){
    form.addEventListener('submit', corregirValores);
});

function corregirValores(evento){

evento.preventDefault();

let title = document.getElementById('title');
let description = document.getElementById('description');


let corregirTitle = document.getElementById('corregirTitle');
let corregirDescription = document.getElementById('corregirDescription');

let validar = true;

if(title.value.trim() === "" || !/^[a-zA-Z0-9\s.,!¡?¿@#$%^&*()\-_=+\[\]{}|\\:;"'<>,~`]{1,45}$/.test(title.value)){
    title = document.getElementById('title').style.border = "1px red solid";
    corregirTitle.style.color = 'red';
    corregirTitle.innerHTML = "El titulo tiene que tener entre 1 y 25 caracteres";
    validar = false;
}
else{
    title = document.getElementById('title').style.border = "1px green solid";
    corregirTitle.innerHTML = "";
    validar = true;
}

if(description.value.trim() === "" || !/^[a-zA-Z0-9\s.,!¡?¿@#$%^&*()\-_=+\[\]{}|\\:;"'<>,~`]{1,100}$/.test(description.value)){
    description = document.getElementById('description').style.border = "1px red solid";
    corregirDescription.style.color = 'red';
    corregirDescription.innerHTML = "La descripción tiene que tener entre 1 y 100 caracteres";
    validar = false;
}
else{
    description = document.getElementById('description').style.border = "1px green solid";
    corregirDescription.innerHTML = "";    
    validar = true;
}


if(validar === true){
form.submit();
}


}