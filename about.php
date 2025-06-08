<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>nosotros</title>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


   <link rel="stylesheet" href="css/styless.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Sobre nosotros</h3>
   <p> <a href="home.php">inicio</a> / acerca de </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Por que elegirnos?</h3>
         <p>Somos los líderes en venta de libros en la ciudad de México, con más de +100,000 ventas mensuales, a los precios más bajos del mercado y con los envíos más rápidos, además de beneficios para clientes frecuentes.</p>
         <p></p>
         <a href="contact.php" class="btn">contactanos</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">calificaciones</h1>

   <div class="box-container">

      <div class="box">
         <img src="image/engineer.jpg" alt="">
         <p> Muy buen servicio y muy rápido, mi pedido llego el mismo día.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>space engineer</h3>
      </div>

      <div class="box">
         <img src="image/walle.jpg" alt="">
         <p>Muy buena interfaz fácil de utilizar y entender.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Wall-eto</h3>
      </div>

      <div class="box">
         <img src="image/cris.jpg" alt="">
         <p>Precios muy asequibles y productos de calidad, llegaron empaquetados sin daño alguno.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Chrizadore</h3>
      </div>

      <div class="box">
         <img src="image/matias.jpg" alt="">
         <p>  Servicio rápido y muy práctico.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Matias</h3>
      </div>

      <div class="box">
         <img src="image/lol.png" alt="">
         <p>Excelente sitio, muy rápido y perfecto para hacer compras sin tener una computadora.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Chronos TG</h3>
      </div>

      <div class="box">
         <img src="image/chai.png" alt="">
         <p> Tiene libros que en otras librerías se encuentran agotados, muy útil para estas situaciones.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Chairong</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">autores</h1>

   <div class="box-container">

      <div class="box">
         <img src="image/rodo.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <h3>Rodolfo AL</h3>
      </div>

      <div class="box">
         <img src="image/dan.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="https://mensajerolldm.org/presentacion-dan-bequer-rodriguez-hernandez/" class="fab fa-instagram"></a>
         </div>
         <h3>Dan RH</h3>
      </div>

      <div class="box">
         <img src="image/mau.webp" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <h3>Mauricio HC</h3>
      </div>

      <div class="box">
         <img src="image/jorge.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <h3>Jorge GC</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>


<script src="js/script.js"></script>

</body>
</html>