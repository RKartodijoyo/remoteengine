<!DOCTYPE html>
<html>
<head>
<title>REMOTE ENGINE CAT</title>
<!-- Include file Bootstrap disini -->
<!-- CSS -->
<link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet'>
<link rel="stylesheet" href="css/template-homepage.css">
<!-- JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<!-- Include tag META disini -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<!-- Wrapper -->
<div id="wrapper">

<!-- NAVBAR -->
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="#" class="d-inline-block align-top" alt="">
    REMOTE ENGINE ALARM
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> REFRESH<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" onclick="reloadPage();"><i class="fa fa-home" aria-hidden="true" ></i> SILENCE</a>
      </li>
<li class="nav-item active">
        <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> RESET<span class="sr-only">(current)</span></a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
</button>
    </form>
  </div>
</nav>

<div id="hp-post">
  <div class="row justify-content-around m-1">
<!-- POST-GRID -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webhmi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, NAMA, STATUS1,STATUS2,WARNA FROM alarm";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {

      if($row["ID"]%4==1){?>
          <div class="row justify-content-around m-1">
    <div class="hp-grid-post col-md border-secondary m-2">
      <h2><div class="hp-judul-post text-capitalize"><?php echo $row["NAMA"]; ?> </div></h2>
      <img src="<?php if($row["STATUS1"]==1 &&$row["WARNA"]==1){echo "kuning.png";}
     elseif($row["STATUS1"]==1 &&$row["WARNA"]==0){echo "merah.png";}else{echo "hitam.png";}?>" class="mx-auto d-block" alt="Tumbhnail" >

    </div>

             <?php
   }
   elseif($row["ID"]%4==0){ ?><div class="hp-grid-post col-md border-secondary m-2">

     <h2><div class="hp-judul-post text-capitalize"><?php echo $row["NAMA"]; ?> </div></h2>
     <img src="<?php if($row["STATUS1"]==1 &&$row["WARNA"]==1){echo "kuning.png";}
    elseif($row["STATUS1"]==1 &&$row["WARNA"]==0){echo "merah.png";}else{echo "hitam.png";}?>" class="mx-auto d-block" alt="Tumbhnail" >
</div>
   </div><?php }
   else{ ?><div class="hp-grid-post col-md border-secondary m-2">
     <h2><div class="hp-judul-post text-capitalize"><?php echo $row["NAMA"]; ?> </div></h2>
     <img src="<?php if($row["STATUS1"]==1 &&$row["WARNA"]==1){echo "kuning.png";}
    elseif($row["STATUS1"]==1 &&$row["WARNA"]==0){echo "merah.png";}else{echo "hitam.png";}?>" class="mx-auto d-block" alt="Tumbhnail" >

   </div><?php }
 }

} else {
    echo "0 results";
}
$conn->close();
?>
</div>

</div>



<!-- Footer -->
<footer class="bg-dark">
    <span class="text-light"><center>Powered by @ <a href="http://github.com/rkartodijoyo" target="_blank">Rizaldi</a> 2019</center></span>

</footer>
</div>
</body>
</html>
