<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Predictor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Stock predictor</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="welcome.php">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="team.html">Team</a>
        
        </li>
        <li class="nav-item">
          <a class="nav-link" href="searchbox\SearchBox.html">Search</a>
        </li>
      </ul>
  
    <div class="navbar-collapse collapse">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
    <a href="logout.php" class="btn btn-dark">Logout</a>
        </li>
    <li class="nav-item active">
          <a class="nav-link" href="#"> <img src="https://img.icons8.com/officel/16/000000/user.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
        </li>
    </ul>
    </div>
  
  
    </div>
  </nav>
  <br>
  
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>WatchList</h4>
                    </div>
                    <div class="card-body">

                        <form action="checkbox.php" method="POST">

                            <div class="form-group mb-3">
                                <input type="checkbox" name="brands[]" value="BRITANNIA"> BRITANNIA<br>
                                <input type="checkbox" name="brands[]" value="INDUSINDBK"> INDUSINDBK <br>
                                <input type="checkbox" name="brands[]" value="COALINDIA"> COALINDIA <br>
                                <input type="checkbox" name="brands[]" value="WIPRO"> WIPRO <br>
                                <input type="checkbox" name="brands[]" value="BHARTIARTL"> BHARTIARTL <br>
                                <input type="checkbox" name="brands[]" value="ICICIBANK"> ICICIBANK  <br>
                                <input type="checkbox" name="brands[]" value="TATASTEEL">  TATASTEEL<br>
                                <input type="checkbox" name="brands[]" value="RELIANCE"> RELIANCE <br>
                                <input type="checkbox" name="brands[]" value="TECHM"> TECHM <br>
                                <input type="checkbox" name="brands[]" value="BAJAJ-AUTO.NS"> BAJAJ-AUTO.NS <br>
                                <input type="checkbox" name="brands[]" value="HDFCLIFE">HDFCLIFE  <br>
                                <input type="checkbox" name="brands[]" value="TATACONSUM">TATACONSUM  <br>
                                <input type="checkbox" name="brands[]" value="BAJFINANCE"> BAJFINANCE <br>
                                <input type="checkbox" name="brands[]" value="LT"> LT <br>
                                <input type="checkbox" name="brands[]" value="HINDALCO">HINDALCO  <br>
                                <input type="checkbox" name="brands[]" value="TCS"> TCS <br>
                                <input type="checkbox" name="brands[]" value="NESTLEIND"> NESTLEIND <br>
                            <input type="checkbox" name="brands[]" value="NTPC.NS">NTPC  <br>
                            <input type="checkbox" name="brands[]" value="ULTRACEMCO">ULTRACEMCO  <br>
                            <input type="checkbox" name="brands[]" value="SHREECEM"> SHREECEM <br>
                            <input type="checkbox" name="brands[]" value="CIPLA"> CIPLA <br>
                            <input type="checkbox" name="brands[]" value="TITAN"> TITAN <br>
                            <input type="checkbox" name="brands[]" value="HEROMOTOCO"> HEROMOTOCO <br>
                            <input type="checkbox" name="brands[]" value="KOTAKBANK"> KOTAKBANK <br>
                            <input type="checkbox" name="brands[]" value="BAJAJFINSV"> BAJAJFINSV <br>
                            <input type="checkbox" name="brands[]" value="ITC"> ITC <br>
                            <input type="checkbox" name="brands[]" value="MARUTI"> MARUTI <br>
                            <input type="checkbox" name="brands[]" value="APOLLOHOSP"> APOLLOHOSP <br>
                            <input type="checkbox" name="brands[]" value="MM">MM <br>
                             <input type="checkbox" name="brands[]" value="ONGC"> ONGC <br>
                              <input type="checkbox" name="brands[]" value="SBIN">  SBIN<br>
                              <input type="checkbox" name="Del[]" value="DELETE">DELETE ALL<br>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="save_multiple_checkbox" class="btn btn-primary">Add to WatchList</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>