// On actualise automatique le chat en utilisant AJAX
var box2 = document.querySelector('#b2');
setInterval(function(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            box2.innerHTML = this.responseText;
        }
    };
    xhttp.open("GET","../function/includes/script2.php" , true); // récupération de la page message
    xhttp.send()
},500) // Actualiser le chat tous les 500 ms