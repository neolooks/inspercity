<!DOCTYPE html>
<html lang="en">
<?php
	    	include("Navigation.php");
	  ?>

  <body>

 
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>Motivational Stories</h1>
              <h2 class="subheading">Problems look mighty small from 150 miles up</h2>

            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">


    <!--get data from db -->
    <?php
        require 'db_connection.php';

            $sql = "select * from stories ";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                 ?>
                  <!-- Project One -->
                  <div class="row">
                    <div class="col-md-7">
                      <a href="#">
                        <img class="img-fluid rounded mb-3 mb-md-0" src="admin_images/stories/<?php echo $row["sid"]?>_stories.jpg" alt="">
                      </a>
                    </div>
                    <div class="col-md-5">
                    <h3> <?php echo  $row["sid"] ?></h3>
                      <h3> <?php echo  $row["title"] ?></h3>
                      <p><?php echo  $row["content"] ?></p>
                      <p><?php echo  $row["reference"] ?></p>
                      <a class="btn btn-primary" href="#">View Project</a>
                    </div>
                  </div>
                  <!-- /.row -->
                  
                <hr>
                <?php
                // strip tags to avoid breaking any html

                }
            } else {
                echo "0 results";
            }

        ?>


      <!-- /.row -->

     



      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.container -->


    <hr>

    <?php
	    	include("Footer.php");
      ?>
      
  </body>

</html>
