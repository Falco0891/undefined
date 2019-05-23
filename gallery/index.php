<!DOCTYPE html>
<html>
  <head>
    <script src="../js/navbar.js" type="text/javascript"></script>
    <script src="../js/navbar-responsive.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><!-- eindstylesheet t.b.v. bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Pepe</title>
  </head>

  <body>
    <header>
      <nav id="navbar">
        <ul>
          <li> <a href="../index.html">Home</a> </li>
          <li> <a href="../history/index.html">History</a> </li>
          <li> <a href="index.php">gallery</a> </li>
          <li> <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">other</a> </li>
        </ul>
      </nav>
    </header>
<br>
<br><br><br>


      <div class="container">



 <div class="container gallery-container">

     <h1 class="text-center">Gallery</h1>


     <div class="tz-gallery">

         <div class="row mb-3">
             <div class="col-md-4">
                 <div class="card">
                     <a class="lightbox" href="images/park.jpg">
                     <img src="../style/images/placeholder.jpeg" alt="Park" id="img1" class="card-img-top">
                     </a>
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="card">
                     <a class="lightbox" href="images/benches.jpg">
                     <img src="../style/images/placeholder.jpeg" alt="Park" class="card-img-top">
                     </a>
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="card">
                     <a class="lightbox" href="images/bridge.jpg">
                     <img src="../style/images/placeholder.jpeg" alt="Park" class="card-img-top">
                     </a>
                 </div>
             </div>
         </div>
           <div class="row">
             <div class="col-md-4">
                 <div class="card">
                     <a class="lightbox" href="images/coast.jpg">
                     <img src="../style/images/placeholder.jpeg" alt="Park" class="card-img-top">
                     </a>
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="card">
                     <a class="lightbox" href="images/rails.jpg">
                     <img src="../style/images/placeholder.jpeg" alt="Park" class="card-img-top">
                     </a>
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="card">
                     <a class="lightbox" href="images/rocks.jpg">
                     <img src="../style/images/placeholder.jpeg" alt="Park" class="card-img-top">
                     </a>
                 </div>
             </div>

         </div>

     </div>

 </div>

 </div>


 <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" role="button">Upload!</button>

  <!-- Modal -->
  <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        </div>
        <div id="form1">
         <form action="../upload.php" method="post" enctype="multipart/form-data">
             Select image to upload:
             <input type="file" name="fileToUpload" id="fileToUpload">
             <input type="submit" value="Upload Image" name="submit">
         </form>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value="Upload Image" name="submit">
          </form>
        </div>
      </div>
    </div>
  </div>


 <?php
    require_once '../dbconfig.php';
    $sqlQuery = "SELECT image FROM images";
    $result = $conn->query($sqlQuery);
    while($rows = $result->fetch_assoc()) {

      ?>
      <div class="item"><img src="../uploads/<?php echo $rows ['image']; ?>"></div>
  <?php } ?>

</div>





</div>
