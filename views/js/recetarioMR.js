document.getElementById("modelos").onchange = function() {
  alerta()
};

function alerta() {
  var request = new XMLHttpRequest();
  request.responseType = 'json';
  request.open("POST", "views/modules/modelor.php");
  request.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200){
      document.getElementById("recetario").value = this.response.modelo;
    }
  };

  var myForm = document.getElementById("myForm");
  var formData = new FormData(myForm);

  request.send(formData);
}