<!doctype html>
<html lang="en">
  <head>
    <title>Money Care</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <br><br><br>
                  <h1>Welcome to Money Care</h1>
                  <h3>Save money for your Future</h3>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank1.jpg" class="img-fluid pt-2">
              </div>
            </div><br><br>

      <!-- Activity section -->
            <div class="row activity text-center">

                  <div class="col-md act">
                    <img src="img/money.jpeg" class="img-fluid" style="width: 200px; height: 200px;">
                    <br>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.jpg" class="img-fluid" style="width: 200px; height: 200px;">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
      <div><br><br><br></div>
      <?php
        include 'config.php';
        if(isset($_POST['submit'])){
          $name=$_POST['name'];
          $email=$_POST['email'];
          $number=$_POST['number'];
          $comment=$_POST['comment'];
          $sql="insert into contactus(name,email,phone,comments) values('{$name}','{$email}','{$number}','{$comment}')";
          $result=mysqli_query($conn,$sql);
          if($result){
                    echo "<script> alert('Hurray! User created');
                                    window.location='transfermoney.php';
                          </script>";
                          
          }
        }
      ?>

      <section class="contactus" id="contact" >
        <div class="container headings text-center">
            <h1 class="center" style="font-weight: bold;text-align: center;">CONTACT US</h1>
            <p>We're Here To Help And Answer Any Questions You Might Have.We Look Forward To Hearing From You</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offet-md-2-col col-1">
                    <form action="index.php">
                        <div class="form-group">
                          
                          <input type="text" class="form-control" placeholder="Enter name" id="username" name="name" required autocomplete="off">
                        </div>
                        
                            <div class="form-group">
                              
                              <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" required autocomplete="off">
                            </div>
                            
                                <div class="form-group">
                                  
                                  <input type="number" class="form-control" placeholder="Enter mobile number" id="mobile" name="number" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="comment">Comment:</label>
                                    <textarea class="form-control" rows="4" id="comment" placeholder="Your Comments" name="comment"></textarea>
                                  </div>
                                  <div class="formbutton" style="display: flex;justify-content: center;">
                        <button type="submit" >Submit</button></div>
                      </form>     
                </div>
            </div>
        </div>
       </section>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>SHIVANI G S</b> <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>