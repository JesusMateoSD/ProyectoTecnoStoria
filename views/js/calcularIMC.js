function cal() {
  try {
    var a = document.f.pesokg.value,
    b = document.f.tallacm.value;

    document.f.imc.value = a / (b * b);
    var c = document.f.imc.value;
    if (c < 18.5) {
      document.f.lectura.value = "Insuficiencia Ponderal";
    } else if (c >= 18.5 && c <= 24.9) {
      document.f.lectura.value = "Peso Normal";
    } else if (c >= 25 && c <= 29.9) {
      document.f.lectura.value = "Sobrepeso";
    } else if (c >= 30 && c <= 34.9) {
      document.f.lectura.value = "Obesidad I";
    } else if (c >= 35 && c <= 39.9) {
      document.f.lectura.value = "Obesidad II";
    } else if (c >= 40) {
      document.f.lectura.value = "Obesidad III";
    }
  } catch (e) {

  }
}