<!DOCTYPE html>
<html lang="en">


  <body>

  <?php
	    	include("Navigation.php");
	  ?>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/Qoutes-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>Motivational Qoutes</h1>
              <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    
    <div class="container row">
    <?php
        require 'db_connection.php';

            $sql = "select * from qoutes";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                 ?>              
 
       
    

      <!-- <div class="row text-center text-lg-left"> -->      
            <div class="col-md-4">
              <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="admin_images/qoutes/<?php echo $row["qid"]?>_qoutes.jpg" alt="">
              </a>
            </div>

            
    
            <!-- <div class="col-lg-3 col-md-4 col-xs-6">
              <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="admin_images/qoutes/<?php echo $row["qid"]?>_qoutes.jpg" alt="">
              </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
              <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="admin_images/qoutes/<?php echo $row["qid"]?>_qoutes.jpg" alt="">
              </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
              <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="admin_images/qoutes/<?php echo $row["qid"]?>_qoutes.jpg" alt="">
              </a>
            </div>
          </div> -->
    <!-- </div> -->

    

                <?php
                }
            } else {
                echo "0 results";
            }

        ?>
       
    </div>
    <article>
      <div class="container">
       
      <div class="container">

      <h1 class="my-4 text-center text-lg-left">Motivational Qoutes</h1>

      <div class="row text-center text-lg-left">

        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
          </a>
        </div>
      </div>
      </div>

      </div>
    </article>

    <hr>

    <?php
	    	include("Footer.php");
      ?>
      
  </body>

</html>
