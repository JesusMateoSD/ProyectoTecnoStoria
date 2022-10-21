var ordenmedica = document.getElementById('ordenmedica')
    var ordenElegidas = []

    function elegirOrden(element) {
      if (element.checked) {
        ordenElegidas.push(element.value)
      } else {
        ordenElegidas.splice(ordenElegidas.indexOf(element.value), 1)
      }
      ordenmedica.innerHTML = ordenElegidas.join(', ')
    }