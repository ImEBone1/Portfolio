/* MOBILE MENU */

function toggleMenu(){
  const menu = document.getElementById("menu");
  if(menu){
    menu.classList.toggle("show");
  }
}


/* DARK / LIGHT MODE */

function toggleMode(){

  document.body.classList.toggle("light");

  // Change Icon
  const icon = document.getElementById("modeIcon");

  if(document.body.classList.contains("light")){
    icon.className = "fa fa-moon-o"; // dark icon
  }else{
    icon.className = "fa fa-sun-o"; // light icon
  }
}
