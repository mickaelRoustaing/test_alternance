<?php 
$codePostal = $_POST['postal'];
$departement = substr($codePostal,0,2);

if($departement == 31){ 
    echo("<div>Toulouse</div>");
 
}else if($departement == 33){
    echo("<div>Bordeaux</div>");
}else {
    echo("<div>Code postal inconnu</div>");
}
?>
<style>
    div{
        padding: 10px;
        text-align:center; 
        margin-left:auto;
        margin-right: auto;
        background-color: #edf3f2;
        width: 200px;
        height: 70px;
        font-size: 30px;
    }
</style>