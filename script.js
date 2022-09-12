function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    document.getElementById('encabezado').style.backgroundColor = "rgba(0,0,0,0.4)";
    document.getElementById('Crear_cita').style.color = "rgba(0,0,0,0.4)";
    
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "rgb(82, 193, 197)";
    document.getElementById('encabezado').style.backgroundColor = "rgb(97, 131, 182)";
    document.getElementById('Crear_cita').style.color = "rgb(97, 131, 182)";
}