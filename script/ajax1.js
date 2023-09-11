// On actualise automatique le chat en utilisant AJAX
var box1 = document.querySelector('#b1');
setInterval(function(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            box1.innerHTML = this.responseText;
        }
    };
    xhttp.open("GET","../function/includes/script1.php" , true); // récupération de la page message
    xhttp.send()
},500) // Actualiser le chat tous les 500 ms