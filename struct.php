<!DOCTYPE html>
<html>
<head>
  <title>Pravalia cu mobila</title>
  <div class="relative">
    <div id="logo">
    <a href="index.php">
      <img src="logo.png" alt="logo" width="400px" height="95px">
      </a>
  </div>
  </div>
 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.0.1/tailwind.min.css'>
</head>


<body>
<div class="topnav">
 <div class="subnav">
   <button class="subnavbtn"><i class="fa fa-bars"> Mobila</i></button>
    <div class="subnav-content">
      <a href="mobila dormitor.php">Mobila Dormitor</a>
      <a href="mobila hol.php">Mobila Hol</a>
      <a href="mobila living.php">Mobila Living</a>
      <a href="accesorii bucatarie.php">Accesorii bucatarie</a>
      <a href="baie.php">Baie</a>
      <a href="birouri de acasa.php">Birouri de acasa</a>
    </div>
  </div>   

  <a class="fa fa-phone"> Contact</a>
  <a class="fa fa-info-circle"> Informatii</a>
  <a class="fa fa-legal"> Termeni si conditii</a>
  <a class="fa fa-wrench"> Servicii</a>
  <a class="fa fa-copyright"> Scurt istoric</a>

  <?php
    session_start();
    if (isset($_SESSION['username'])) {
        echo '<a href="#">Welcome, ' . $_SESSION['username'] . '</a>';
        echo '<a class="fa fa-sign-out" href="logout.php">Deconectare</a>';
    } else {
        echo '<a class="fa fa-sign-in" href="login.html">Conectare</a>';
        echo '<a class="fa fa-sign-out" href="signup.php">Inregistrare</a>';
    }
  ?>
</div>
<?php
   function generateCard($imgUrl, $title, $price, $description, $dimensions, $material) {
    echo "
    <div class='card card-item lg:w display: inline-block'>
        <div class='bg-white shadow-xl rounded-lg overflow-hidden'>
            <div class='bg-cover bg-center h-56 p-4' style='background-image: url($imgUrl)'>
            </div>
            <div class='p-4'>
                <p class='uppercase tracking-wide text-sm font-bold text-gray-700'>$title</p>
                <p class='text-3xl text-gray-900'>$$price</p>
                <p class='text-gray-700'>$description</p>
            </div>
            <div class='flex p-4 border-t border-gray-300 text-gray-700'>
                <div class='flex-1 inline-flex items-center'>
                    <p><span class='text-gray-900 font-bold'>$dimensions</span> Dimensions</p>
                </div>
                <div class='flex-1 inline-flex items-center'>
                    <p><span class='text-gray-900 font-bold'>$material</span> Material</p>
                </div>
            </div>
        </div>
    </div>
    ";
}
    ?>
</body>
</html>

