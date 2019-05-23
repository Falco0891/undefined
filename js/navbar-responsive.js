function myFunction() {
  var x = document.getElementById("navbar");
  if (x.className === "navigatie") {
    x.className += " responsive";
  } else {
    x.className = "navigatie";
  }
}
