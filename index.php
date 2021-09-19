<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="icon" href="favicon.ico">

    <title>The Dream Bank</title>
  </head>

  <body>
  <div class="pp"> 
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" >
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>DREAM BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
              
              </div>
            </div>

      <!-- Activity section -->
      <div class="row activity text-center">
                  <div class="col-md act">
                  <img src="img/user1.png" class="img-fluid" width="100px" height="100px">
                    <br>
                    <a href="createuser.php"><button style="background-color : #150050;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer1.png" class="img-fluid" width="100px" height="100px">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #150050;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/abc.png" class="img-fluid" width="100px" height="100px">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #150050;">Transaction History</button></a>
                  </div>
            </div>
    </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>PRITI NAGASHENKRE</b> <br></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</div> 
</body>
</html>