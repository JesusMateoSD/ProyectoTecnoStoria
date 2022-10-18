// document.getElementById("profesional").onchange = function(){alerta()};
function alerta() {
  var request = new XMLHttpRequest();
  request.responseType = 'json';
  request.open("POST", "views/modules/registrop.php");
    request.onreadystatechange = function() {
      if(this.readyState === 4 && this.status === 200) {
        document.getElementById("docp").value = this.response.registro;
      }
    };
    var myForm = document.getElementById("myForm");
    var formData = new FormData(myForm);
    request.send(formData);
}