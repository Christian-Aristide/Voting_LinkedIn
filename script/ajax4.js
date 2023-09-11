// On actualise automatique le chat en utilisant AJAX
var box4 = document.querySelector('#b4');
setInterval(function(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            box4.innerHTML = this.responseText;
        }
    };
    xhttp.open("GET","../function/includes/script4.php" , true); // récupération de la page message
    xhttp.send()
},1000) // Actualiser le chat tous les 500 ms