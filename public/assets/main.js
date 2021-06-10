console.log('Hola desde un archivo JS!');

const deleteButtons = document.getElementsByClassName("employees-delete-button");

Array.from(deleteButtons).forEach(element => {
    element.addEventListener('click', ()=> {
        let person = JSON.parse(element.dataset.person);
        console.log(person);
        if(window.confirm('¿Seguro que quieres eliminara a ' + person.name + '?')){
            console.log('borrar');
        } else {
            console.log('no borrar');
        }
    })
})