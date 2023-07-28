
// variabili
let titleInput = document.getElementById('titleInput');
let articleInput = document.getElementById('articleInput');

const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')




//funzioni ed eventi

addEventListener('input', ()=>{
    if(titleInput.value.length < 3){
        titleInput.classList.add('is-invalid');
    } else {
        titleInput.classList.remove('is-invalid');
        titleInput.classList.add('is-valid');
    }
});
addEventListener('input', ()=>{
    if(articleInput.value.length < 10){
        articleInput.classList.add('is-invalid');
    } else {
        articleInput.classList.remove('is-invalid');
        articleInput.classList.add('is-valid');
    }
});
myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
  });