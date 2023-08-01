
// variabili
let titleInput = document.getElementById('titleInput');
let articleInput = document.getElementById('articleInput');
let nameRegister = document.getElementById('nameRegister');
let emailRegister = document.getElementById('emailRegister');
let passwordRegister = document.getElementById('passwordRegister');
let password_confirmationRegister = document.getElementById('password_confirmationRegister');





//funzioni ed eventi

function validShort(target){
    if(target.value.length < 3){
        target.classList.add('is-invalid');
    } else {
        target.classList.remove('is-invalid');
        target.classList.add('is-valid');
    }
}

function validLong(target){
    if(target.value.length < 8){
        target.classList.add('is-invalid');
    } else {
        target.classList.remove('is-invalid');
        target.classList.add('is-valid');
    }
}

function validEmail(target){
    if(!target.value.includes('@')){
        target.classList.add('is-invalid');
    } else {
        target.classList.remove('is-invalid');
        target.classList.add('is-valid');
    } 
    
}

function validPassword(target1, target2){
    if(target1.value !== target2.value)
    {target1.classList.add('is-invalid');
} else {
    target1.classList.remove('is-invalid');
    target1.classList.add('is-valid');

}}

addEventListener('input', ()=> {
    validShort(titleInput);
});
addEventListener('input', ()=>{
    validLong(articleInput);
});
addEventListener('input', ()=> {
    validShort(nameRegister);
});
addEventListener('input', ()=> {
    validLong(passwordRegister);
});
addEventListener('input', ()=> {
    validEmail(emailRegister);
});
addEventListener('input', ()=> {
    validPassword(password_confirmationRegister, passwordRegister);
});




