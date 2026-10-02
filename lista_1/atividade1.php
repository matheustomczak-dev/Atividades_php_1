<form method="post">
    <input type="number" name = "x" placeholder="Digite o numero x">
    <input type="number" name = "y" placeholder="Digite o numero y">

    <button>Calcular</button>

</form>




<?php

function calcular($x , $y){
} 

if (isset($_POST["x"])){
    echo calcular($_POST["x"], $_POST["y"]);

}

?>