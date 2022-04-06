<?php
//comentario de una linea
/*varias lineas
*/
#comentario

//variables
#$String= "variable tipo string";
#$int= 10;
#$double=5.2;



#echo "<h1>Programacion Computacional IV</h1>" 
   if (isset($_POST["enviar"])){
    //echo "<script>alert('Clic')</script>";
    $idioma = $_POST["idioma"];
    //echo $idioma;
    INCLUDE "pages/" . $idioma . ".php";
  }else{
    INCLUDE "pages/es.php";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.php"><?php  echo NAME_SITE; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="#" href="/index.php"><?php  echo HOME; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pagina.php"><?php  echo PAGE; ?></a>
        </li>
      </ul>
      <span class="navbar-text">
        <form action= "" method="POST">
        <select name="idioma" id="">
          <option value="en">English</option>
          <option value="es">Spanish</option>  
        </select>   
        <input type="submit" name="enviar" value="Seleccionar"/>
      </form>
      </span>
    </div>
  </div>
</nav>

