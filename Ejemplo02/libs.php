<script type="text/javascript">
function init(){
var tablero= ['nfl1.jpg','nfl2.jpg,nfl3.jpg'];
tablero.sort(function() {return 0.5 - Math.random()
});

console.log(tablero[0]);
console.log(tablero[1]);
console.log(tablero[2]);
     
var tabla= document.getElementById("tablero");
var celdas=tabla.getElementsByTagName("td");


var nfl1= document.createElement("img");
nfl1.setAttribute("src", tablero[0]);

var nfl1= document.createElement("img");
nfl1.setAttribute("src", tablero[0]);

var nfl1= document.createElement("img");
nfl1.setAttribute("src", tablero[1]);

var nfl1= document.createElement("img");
nfl1.setAttribute("src",tablero[2]);

celdas[0].appendChild(nfl1);
}

</script>
    