// On actualise automatique le chat en utilisant AJAX
var box3 = document.querySelector('#b3');
setInterval(function(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            box3.innerHTML = this.responseText;
        }
    };
    xhttp.open("GET","../function/includes/script3.php" , true); // récupération de la page message
    xhttp.send()
},500) // Actualiser le chat tous les 500 ms