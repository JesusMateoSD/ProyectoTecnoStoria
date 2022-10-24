function alertap() {
    var request = new XMLHttpRequest();
    request.responseType = 'json';
    request.open("POST", "views/modules/consultapaciente.php");
    request.onreadystatechange = function() {
        if(this.readyState === 4 && this.status === 200) {
            document.getElementById("paciente").value = this.response.paciente;
            document.getElementById("telefono").value = this.response.telefono;
        }
    };
    var myForm = document.getElementById("myForm");
    var formData = new FormData(myForm);
    request.send(formData);
}
