<?php
require('connexion.php');
$conn=mysqli_connect($server,$username,$password,$bd) or die ("probleme server");
$npermis=$_POST["npermis"];
$list=$_POST["list"];
$Conduite=$_POST["Conduite"];
$securite=$_POST["securite"];
$Confort=$_POST["Confort"];
// $robot=$_POST["robot"];
$sql="select * from testeur where numpermis='$npermis';";
// echo $sql;
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)==0){
    echo  "Testeur non inscrit";
}else{
    $sql1="select * from evaluation where numpermis='$npermis' and idmodele='$list';";
    // echo $sql1;
    $res1=mysqli_query($conn,$sql1);
    if (mysqli_num_rows($res1)==1){
        echo "Vous avez déjà testé ce modèle!!";
    }else{
        $d=date('Y-m-d');
        $sql2="insert into evaluation values ('$npermis','$list','$Conduite','$securite','$Confort';)";
        if (mysqli_affected_rows($conn)==1)
        echo "evaluationenregistree avec success!!!";
    }
}
?>
