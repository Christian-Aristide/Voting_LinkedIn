const four = document.getElementById("sectionFour");
const five = document.getElementById("sectionFive");
const six = document.getElementById("sectionSix");
const seven = document.getElementById("sectionSeven");
const award = document.querySelector("#infos > a:nth-child(2)");
const apropos = document.querySelector("#infos > a:nth-child(1)");
const sFour = document.getElementById("sFour");
const sFive = document.getElementById("sFive");
const sSix = document.getElementById("sSix");
const sSeven = document.getElementById("sSeven");
const toggleMenu = document.getElementById("toggleMenu"); //icone du menu sur mobile
const infos = document.getElementById("infos");
var ref = false; //repère pour savoir si le menu est visible ou pas

document.getElementById("now").innerHTML = new Date().getFullYear().toString(); //facultatif

toggleMenu.addEventListener("click", () => {  //pour afficher ou cacher le menu sur mobile
  ref ? infos.style.display = "none" : infos.style.display = "flex";
  ref = !ref;
});

const array = [four, five, six, seven]; //tableau pour les slides, le tableau contient chaque catégorie pour les votes
var index = 0;  //index pour le tableau

const prev = document.getElementsByClassName("prev"); //flèche pour slider à droite
const next = document.getElementsByClassName("next");  //       slider à gauche

five.style.display = "none";  //par défaut je n'affiche pas ces sections parce que c'est le javascript qui doit les afficher
six.style.display = "none";
seven.style.display = "none";

Array.from(prev).forEach(elem => { //le code pour slider à gauche
  elem.addEventListener("click", (event) => {
    index--;
    if(index < 0) { //essayez de comprendre ce block if :)
      index = array.length - 1;
    }
    array.forEach(elem => {
      elem.style.display="none";
    });
    array[index].style.display = "flex";
  });
});

Array.from(next).forEach(elem => { //le code pour slider à droite 
  elem.addEventListener("click", (event) => {
    index++;
    if(index > array.length - 1) { //essayez de comprendre ce block if :)
      index = 0;
    }
    array.forEach(elem => {
      elem.style.display="none";
    });
    array[index].style.display = "flex";
  });
});

sFour.addEventListener("click", () => {
  array.forEach(elem => {
    elem.style.display="none";
  });
  four.style.display = "flex";
  index = 0;
});

sFive.addEventListener("click", () => {
  array.forEach(elem => {
    elem.style.display="none";
  });
  five.style.display = "flex";
  index = 1;
});

sSix.addEventListener("click", () => {
  array.forEach(elem => {
    elem.style.display="none";
  });
  six.style.display = "flex";
  index = 2;
});

sSeven.addEventListener("click", () => {
  array.forEach(elem => {
    elem.style.display="none";
  });
  seven.style.display = "flex";
  index = 3;
});

award.addEventListener("click", () => {
  document.getElementById("first").style.display = "none";
  document.getElementById("second").style.display = "flex";
});

apropos.addEventListener("click", () => {
  document.getElementById("first").style.display = "flex";
  document.getElementById("second").style.display = "none";
});