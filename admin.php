
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

    <div class="container">

      <button class="btn btn-primary my-5 align-items-center"><a href="" class="text-light"> Liste des étudiants</a> </button>
      <br><br>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NOM</th>
            <th scope="col">PRENOM</th>
            <th scope="col">AGE</th>
            <th scope="col">SUPPRIMER/MODIFIER</th>
          </tr>
        </thead>
        <tbody>

        <?php 
        $con= new mysqli('localhost','root','','etrilabs');
        $sql="SELECT * FROM exolabs";
        $resultat = mysqli_query($con,$sql);
        if($resultat){
              $row=mysqli_fetch_assoc($resultat); 
              while($row=mysqli_fetch_assoc($resultat)){
                //mysql_fetch_assoc lit une ligne de resultat mysql dans un tableau associatif
                  $id=$row['id'];
                  $nom=$row['nom'];
                  $prenom=$row['prenom'];
                  $age=$row['age'];

                  

                  echo ' 
                  <tr>
                  <th scope="row">'.$id.'</th>
                  <td>'.$nom.'</td>
                  <td>'.$prenom.'</td>
                  <td>'.$age.'</td>
                  <td>
                  <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Supprimer</a></button>
                <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Modifier</a></button>
                </td>
                </tr>';
                
                
              }
        }
        ?>
      </thead>
      </tbody>
      </table>
      
    </div>

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