console.log('Hola desde un archivo JS!');

const deleteButtons = document.getElementsByClassName("employees-delete-button");

Array.from(deleteButtons).forEach(element => {
    element.addEventListener('click', ()=> {
        let person = JSON.parse(element.dataset.person);

        if(window.confirm('¿Seguro que quieres eliminara a ' + person.name + '?')){
            fetch('/employees_delete.php', {
                method: 'DELETE',
                body: element.dataset.person
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
            })
        } else {
            console.log('no borrar');
        }
    })
})