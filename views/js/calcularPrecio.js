function cal() {
  try {
    var a = parseInt(document.f.valor.value),
        b = parseInt(document.f.cantidad.value);
       // c = parseInt(document.f.total.value);
  //  document.f.total.value = a * b - (b*c );
    document.f.total.value = a * b;
   
  } catch (e) {
  }
}