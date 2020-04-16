/**
 * Primero, cargaremos todas las dependencias de JavaScript de este proyecto, 
 * que incluyen Vue y otras bibliotecas. Es un excelente punto de partida cuando 
 * se crean aplicaciones web robustas y potentes con Vue y Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * 
 *El siguiente bloque de código puede usarse para registrar automáticamente sus 
 *componentes Vue. Analizará recursivamente este directorio en busca de los 
 *componentes Vue y los registrará automáticamente con su "nombre base".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * A continuación, crearemos una nueva instancia de aplicación Vue y la adjuntaremos 
 * a la página. Luego, puede comenzar a agregar componentes a esta aplicación o 
 * personalizar el andamiaje de JavaScript para satisfacer sus necesidades únicas
*/

const app = new Vue({
    el: '#app',
});

var formularioRegistro = document.querySelector('#theForm');
var selectName = formularioRegistro.elements[1];
var selectSurname = formularioRegistro.elements[2];
var selectUsername = formularioRegistro.elements[3];
var selectEmail = formularioRegistro.elements[4];
var selectPaises = formularioRegistro.elements[5];
var selectProvincias = formularioRegistro.elements[6];
var selectPassword = formularioRegistro.elements[8];
var selectPasswordConfirm = formularioRegistro.elements[9];

selectName.onblur = function(){
    if(this.value.trim() == ''){
        alert('El nombre es obligatorio');
    }else if(this.value.length < 3 && this.value > 12){
        alert('El nombre debe tener entre 3 y 12 caracteres');
    }
}

selectSurname.onblur = function(){
    if(this.value.trim() == ''){
        alert('El apellido es obligatorio');
    }else if(this.value.length < 3 && this.value > 12){
        alert('El apellido debe tener entre 3 y 12 caracteres');
    }
}

selectUsername.onblur = function(){
    if(this.value.trim() == ''){
        alert('El nombre de usuario es obligatorio');
    }else if(this.value.length < 3 && this.value > 12){
        alert('El nombre de usuario debe tener entre 3 y 12 caracteres');
    }
}

var regexMail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

selectEmail.onblur = function(){
    if(this.value.trim() == ''){
        alert('El email es obligatorio');
    }else if(!regexMail.test(this.value)){
        alert('El email no tiene el formato correcto');
    }
}

selectPassword.onblur = function(){
    if(this.value.trim() == ''){
        alert('Escribe una contraseña');
}

formularioRegistro.onsubmit = function(){
    if(selectName.value.trim() == '' || selectSurname.value.trim() == '' || selectUsername.value.trim() == '' || selectEemail.value.trim() == '' || selectPassword.value.trim() == '' || selectPasswordConfirm.value.trim() == ''){
        alert('Completa todos los campos');
}
}

var option = document.createElement('option');
var optionText = document.createTextNode('Elegir país');
option.append(optionText);
selectPaises.append(option);

var xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET", "http://pilote.techo.org/?do=api.getPaises", true);
xmlhttp.send();
xmlhttp.onreadystatechange = function() { 
    if (this.readyState == 4 && this.status == 200) {
		var options = JSON.parse(this.responseText);
		var contenido = options.contenido;
        for(const pais in contenido){
			    var option = document.createElement('option');
                var optionText = document.createTextNode(pais);
                option.append(optionText);
				selectPaises.append(option);
				var value = contenido[pais];
				option.setAttribute("value",value);
		}
		}
		}

selectPaises.onchange = function(){
        var optionPais = this.options[this.selectedIndex];
        var value = optionPais.getAttribute("value");
        if (value == 1){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "http://pilote.techo.org/?do=api.getRegiones?idPais=1", true);
            xmlhttp.send();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                var options = JSON.parse(this.responseText);
                var contenido = options.contenido;
                for( const provincia in contenido){
                    var option = document.createElement('option');
                    var optionText = document.createTextNode(provincia);
                    option.append(optionText);
                    selectProvincias.append(option);
                }
            }
            }
            }
        }
    }