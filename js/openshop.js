openShop("1")
function openShop(carID) {
  var i;
  var x = document.getElementsByClassName("car");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x = document.getElementsByClassName("test");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" light-grey", "");
  }
  document.getElementById(carID).style.display = "block";
  event.currentTarget.className += " light-grey";
}