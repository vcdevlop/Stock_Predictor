<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock predictor</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

   
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
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="about.html">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="team.html">Team</a>
      <li class="nav-item">
        <a class="nav-link" href="searchbox\Searchbox.html">Search</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="portfolio.php">Add In WatchList</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Watchlist.php">WatchList</a>
      </li>

     
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/officel/16/000000/user.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>
  </div>
</nav>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     
      <div class="content">
        <div class="info">
          <h2>Stock predictor <br><span>Be Creative!</span></h2>
          <p>“The stock market is a device to transfer money from the impatient to the patient.”

<br>    -Warren Buffett<br>

</p>
          <a href="searchbox\SearchBox.html" class="info-btn">Predict Stocks</a>
        </div>
      </div>
     

<img src="Images/tree.png" alt="Italian Trulli" style="width:500px;height:700px;position:absolute; right: 150px; top:90px;">
     
   
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script></footer>
   

  </body>

 
</html>
      <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
        body {
 background-image: url("Images/white.jpg");
  height:100px;
  width: 1530px;
 background-color: #cccccc;
}

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

section{
  position: relative;
  width: 100%;
  min-height: 00vh;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  background: url(bg.jpg)no-repeat;
  background-size: cover;
  background-position: center;
}

header{
  position: relative;
  top: 0;
  width: 100%;
  padding: 30px 100px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

header .logo{
  position: relative;
  color: #000;
  font-size: 30px;
  text-decoration: none;
  text-transform: uppercase;
  font-weight: 800;
  letter-spacing: 1px;
}

header .navigation a{
  color: #000;
  text-decoration: none;
  font-weight: 500;
  letter-spacing: 1px;
  padding: 2px 15px;
  border-radius: 20px;
  transition: 0.3s;
  transition-property: background;
}

header .navigation a:not(:last-child){
  margin-right: 30px;
}

header .navigation a:hover{
  background: #fff;
}

.content{
  max-width: 650px;
  margin: 60px 100px;
}

.content .info h2{
  color: #226A80;
  font-size: 55px;
  text-transform: uppercase;
  font-weight: 800;
  letter-spacing: 2px;
  line-height: 60px;
  margin-bottom: 30px;
}

.content .info h2 span{
  color: #fff;
  font-size: 50px;
  font-weight: 600;
}

.content .info p{
  font-size: 16px;
  font-weight: 500;
  margin-bottom: 40px;
}

.content .info-btn{
  color: #fff;
  background: #226A80;
  text-decoration: none;
  text-transform: uppercase;
  font-weight: 500;
  letter-spacing: 2px;
  padding: 10px 20px;
  border-radius: 5px;
  transition: 0.3s;
  transition-property: background;
}

.content .info-btn:hover{
  background: #0C4F60;
}

.media-icons{
  display: flex;
  padding: 130px 20px;
  justify-content: center;
  align-items: ;
  margin: auto;
}

.media-icons a{
  position: relative;
  color: #111;
  font-size: 25px;
  transition: 0.3s;
  transition-property: transform;
}

.media-icons a:not(:last-child){
  margin-right: 60px;
}

.media-icons a:hover{
  transform: scale(1.5);
}

label{
  display: none;
}

#check{
  z-index: 3;
  display: none;
}



@media (max-width: 960px){
  header .navigation{
    display: none;
  }

  label{
    display: block;
    font-size: 25px;
    cursor: pointer;
    transition: 0.3s;
    transition-property: color;
  }

  label:hover{
    color: #fff;
  }

  label .close-btn{
    display: none;
  }

  #check:checked ~ header .navigation{
    z-index: 2;
    position: fixed;
    background: rgba(114, 223, 255, 0.9);
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  #check:checked ~ header .navigation a{
    font-weight: 700;
    margin-right: 0;
    margin-bottom: 50px;
    letter-spacing: 2px;
  }

  #check:checked ~ header label .menu-btn{
    display: none;
  }

  #check:checked ~ header label .close-btn{
    z-index: 2;
    display: block;
    position: fixed;
  }

  label .menu-btn{
    position: absolute;
  }

  header .logo{
    position: absolute;
    bottom: -6px;
  }

  .content .info h2{
    font-size: 45px;
    line-height: 50px;
  }

  .content .info h2 span{
    font-size: 40px;
    font-weight: 600;
  }

  .content .info p{
    font-size: 14px;
  }
}

@media (max-width: 560px){
  .content .info h2{
    font-size: 35px;
    line-height: 40px;
  }

  .content .info h2 span{
    font-size: 30px;
    font-weight: 600;
  }

  .content .info p{
    font-size: 14px;
  }
}
      </style>