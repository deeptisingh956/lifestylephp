<?php
require 'include/common.php';
if(isset($_SELECT['email']))
    header('location: product.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LifeStyle Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="index.css" type="text/css">
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        include 'include/header.php' ;
        ?>
        <div id="banner-image">
            <div class="container">
                <div id="banner-content">
				<h1>We sell lifestyle here!</br></h1>
				<p>Get upto 50% discount on branded shirts, watches, cameras etc. </br></p>
                                <a href="products.php"><button type="submit" class="btn btn-danger btn-lg-active">Shop Now</button></a>
                </div>
            </div>
        </div>
		 <div class="container">
            <div class="row">
                <div class="col-sm-4">
                        <a href="products.php">
                            <div class="thumbnail">
                                <img src="image/camera.jpg" alt="camera" class="image-responsive"/>
                                <h1>Camera</h1>
                                <p>Choose among the best available in world</p>
                            </div>
                        </a>
                </div>
                <div class="col-sm-4">
                    <a href="products.php">
                        <div class="thumbnail">
                            <img src="image/shirt.jpg" alt="Shirt"/>
                            <h1>Shirts</h1>
                            <p>Our exquisite collection of shirts</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="products.php">
                        <div class="thumbnail">
                            <img src="image/watch.jpg" alt="Watch"/>
                            <h1>Watches</h1>
                            <p>Choose among the best available in the world</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <?php
          include 'include/footer.php';
        ?>
    </body>
</html>

