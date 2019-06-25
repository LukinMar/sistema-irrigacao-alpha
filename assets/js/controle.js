function toggleTemperature() {
  if (document.getElementById("celsius").style.display == "inline") {
    document.getElementById("celsius").style.display = "none";
    document.getElementById("fahrenheit").style.display = "inline";
  } else {
    document.getElementById("celsius").style.display = "inline";
    document.getElementById("fahrenheit").style.display = "none";
  }
}
