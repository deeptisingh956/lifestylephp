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
        require 'include/header.php'
        ?>
        </br></br></br></br>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <form method="post" action="login_submit.php">
                                <div class="form-group">
                                    <input type="text" name="email" placeholder="E-mail" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Password" class="form-control">
                                </div>
                            </form>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <div class="panel-footer">
                            Don't have an account? <a href="signup.html">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="f-bottom">
            <div class="container">
                <center>
                    Copyright © Lifestyle Store. All Rights Reserved and Contact Us: +91 90000 00000
                </center>
            </div>
        </footer>
    </body>
</html>

