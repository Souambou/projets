<?php 
$con= new mysqli('localhost','root','','etrilabs');
if(isset($_GET['deleteid'])){
      
      $id=$_GET['deleteid'];

        $sql="delete from exolabs where id=$id";
        $resultat=mysqli_query($con,$sql);
         
        if($resultat){
           echo  'suppression effectué avec succès';
        }  
           else{
            die(mysql_error($con));
        }
}

?>