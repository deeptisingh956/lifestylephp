<!DOCTYPE html>
<?php
include 'include/common.php';
?>
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
        require 'include/header.php';
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our LifeStyle Store !</h1>
                <p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/camera.jpg" alt="camera" class="image-responsive"/>
                        <div class="caption">
                            <h1>Canon Es</h1>
                            <p>Price: 30,000</p>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/download.jpg" alt="camera" class="image-responsive"/>
                        <div class="caption">
                            <h1>Nikon</h1>
                            <p>Price: 29,999.00</p>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/download_1.jpg" alt="canon" class="image-responsive"/>
                        <div class="caption">
                            <h1>Canon 2500</h1>
                            <p>Price: 38,000.00</p>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/download_2.jpg" alt="lumix"/>
                        <div class="caption">
                            <h1>Lumix</h1>
                            <p>Price: 36,999.00</p>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/watch.jpg" alt="titan #1010" class="image-responsive"/>
                        <div class="caption">
                            <h1>Titan #1010</h1>
                            <p>Price: 6000.00</p>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/download_3.jpg" alt="titan 212" class="image-responsive"/>
                        <div class="caption">
                            <h1>Titan 212</h1>
                            <p>Price: 3000.00</p>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/download_4.jpg" alt="Milan" class="image-responsive"/>
                        <div class="caption">
                            <h1>Milan</h1>
                            <P>Price: 4,999.00</P>
                        </div>
                         <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                   
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/images.jpg" alt="Rolex" class="image-responsive"/>
                        <div class="caption">
                            <h1>Rolex</h1>
                            <P>Price: 14,999.00</P>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/download_5.jpg" alt="H&W" class="image-responsive"/>
                        <div class="caption">
                            <h1>H&W</h1>
                            <p>Price: 2,221.00</p>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/images_1.jpg" alt="Luis Phil" class="image-responsive"/>
                        <div class="caption">
                            <h1>Luis Phil</h1>
                            <p>Price: 1,999.00</p>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/images_2.jpg" alt="John Zok" class="image-responsive"/>
                        <div class="caption">
                            <h1>John Zok</h1>
                            <p>Price: 2,221</p>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/shirt.jpg" alt="Jhalsani" class="image-responsive"/>
                        <div class="caption">
                            <h1>Jhalsani</h1>
                            <p>Price: 2,991</p>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                    
                </div>
            </div>
        </div>
        <?php
          include 'include/footer.php';
        ?>
    </body>
</html>
