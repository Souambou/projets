<?php 
$con = new mysqli('localhost','root','','etrilabs');
$id=$_GET['updateid'];

if(isset($_POST['modifier']))
{
     if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['age']))   
     {   
        
        $nom =$_POST['nom'];
        $prenom =$_POST['prenom'];
        $age =$_POST['age'];
       
         if(!empty($_FILES)){

            $file_name = $_FILES['fichier']['name'];
            $file_extension = strrchr($file_name,"."); 

        
            $file_tmp_name = $_FILES['fichier']['tmp_name'];
             $file_dest ='files/'.$file_name;
             $extension_autorise=array('.jpg','.jpeeg','.png');

         
         if(in_array($file_extension,$extension_autorise)){
             if(move_uploaded_file($file_tmp_name, $file_dest));  
            

             $sql="update exolabs set nom='$nom',prenom='$prenom',age='$age'  where id=$id";

             $resultat=mysqli_query($con,$sql);

             if($resultat)
             {  

               $erreur='Mise à jour effectué avec succès      <a href="admin.php">voir</a>'; 

             }      
                else 
                {
                     die(mysqli_error($con));
                }

         }   
         
        
           else{
                   $erreur= 'l\'extension de votre fichier est invalide';
              }
            
        }

     }  
       
        else     {
                $erreur ="veillez renseigner tous les champs";
                } 

       }
?>

 <!doctype html>
<html lang="en">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="projet/css/bootstrap.css ">  
    <link rel="stylesheet" href="projet/css/bootstrap.min.css">  
    <link rel="stylesheet" href="projet/css/bootstrap-grid.css">
    <link rel="stylesheet" href="projet/css/bootstrap.css.map">
    <link rel="stylesheet" href="projet/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="projet/js/bootstrap.bundle.min.js.map">
    <link rel="stylesheet" href="projet/js/bootstrap.js">   
    <link rel="stylesheet" href="projet/js/bootstrap.min.js"> 
    <link rel="stylesheet" href="projet/js/bootstrap.js.map"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="projet/css/animate.css">
    <link rel="stylesheet" href="projet/css/magnific-popup.css">
    <link rel="stylesheet" href="projet/css/font-awesome.min.css">
    <link rel="stylesheet" href="new_style.css">

    <title>exercice etrilabs</title>
  </head>
  <body>   
<div class="container" style="width:600px">
<?php 
if(isset($erreur)) { ?>
<div class="alert alert-danger" style="font-weight: bolder; font-size: 18px"><?=$erreur ?></div>

<?php  } ?>
</div>
<h1 class="wow fadeInUp" data-wow-delay="0.9s">.</h1>
        <section>
        <div class="container py-5">
           <div class="col-md-12 col-sm-6 mx-auto"> 
             <div class="card bg-dark text-light">
            <div class="card-header">
           <h1 class=" wow fadeInUp b-title fs-2" style="text-align:center; color:'white">Mettre à jour les informations</h1>
           </div> 

              <div class=" wow fadeInUp card-body border-top border-danger"> 
              <form  method="POST" action=""  enctype="multipart/form-data">
                  <div class="field">
                  <label for="pseudo" class="form-label"> nouveau nom:</label> 
                  <div class="input-group mb-3">
                            
                   <input type="text" name="nom" class="form-control" placeholder="entrer votre nom" aria-label="Username"   aria-describedby="basic-name">
                   </div>  
                  </div> 

                  <div class="field">
                  <label for="prenom" class="form-label"> nouveau Prénoms:</label> 
                  <div class="input-group mb-3">
                           
                   <input type="text" name="prenom" class="form-control" placeholder="entrer votre prénom"  aria-label="Username" aria-describedby="basic-name">
                   </div>


                   <div class="field">
                  <label for="age" class="form-label"> nouvel âge:</label> 
                  <div class="input-group mb-3">
                           
                   <input type="number" name="age" class="form-control" placeholder="entrer votre age"  aria-label="Username" aria-describedby="basic-name">
                   </div>

                  
                  <div class="field">
                  <label for="photo" class="form-label"> Nouvelle photo:</label> 
                  <div class="input-group mb-3">
                           
                   <input type="file" name="fichier" class="form-control" placeholder="choisir la photo"  aria-label="Username" aria-describedby="basic-name">
               </div>      
             <button type="submit"name="modifier" class="btn btn-danger">Modifier</button>
                
              </form> 
            
              </div>
            </div>
        </div>
        </div>
        
   </section>   


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="projet/js/bootstrap.bundle.min.js" ></script>
    <script src="projet/js/jquery.js"></script>
<script src="projet/js/bootstrap.min.js"></script>
<script src="projet/js/jquery.parallax.js"></script>
<script src="projet/js/smoothscroll.js"></script>
<script src="projet/js/jquery.magnific-popup.min.js"></script>
<script src="projet/js/magnific-popup-options.js"></script>
<script src="projet/js/wow.min.js"></script>
<script src="projet/js/custom.js"></script>  
    <script src="projet/js/bootstrap.min.js"></script>
</html>