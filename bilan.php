<?php
require("connexion.php");
$conn=mysqli_connect($server,$username,$password,$bd) or die ("probleme server connexion de base de donnee!!!!");
// $list=$_POST["list"];
// $securite=$_POST["securite"];
// $conduite=$_POST["conduite"];
// $confort=$_POST["confort"];
$res=mysqli_query($conn,"select 'list',securite,conduite,confort from evaluation ");
$nb=mysqli_num_rows($res);
?>
<table border="1">
<tr>
    <th>Modéle</th>
    <th>Sécurité</th>
    <th>conduite</th>
    <th>Confort</th>
    <th>Nbr tests</th>
</tr>

<?php
for ($i=0;$i<$nb;$i++){
    $ch=mysqli_fetch_array($res);
    ?>
    <td><?php echo $ch['list']?></td>
    <td><?php echo $ch['securite']?></td>
    <td><?php echo $ch['conduite']?></td>
    <td><?php echo $ch['confort']?></td>
    <td><?php echo $ch[4]=0+1+3?></td>
<?php
}
?>
</table>