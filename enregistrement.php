<?php
require("connexion.php");
$conn=mysqli_connect($server,$username,$password,$bd) or die ("probleme server connexion de base de donnee!!!");
$npermis=$_POST["npermis"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
// $genre=$_POST["genre"];
$sql="select * from evaluation  where numpermis='$npermis'";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res)==1)
   echo "num permis existe deja!!";
else{
    $sql1="insert into evaluation values ('$npermis','$nom','$prenom';)";
    if (mysqli_affected_rows($conn)!=-1)
    echo "testeur ajoutee avec success !!!";
}
mysqli_close($conn);
?>
