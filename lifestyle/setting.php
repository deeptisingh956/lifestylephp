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
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <h1>Change Password</h1>
                    <form>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Old password" name="Old password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password" name="New Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Re-type new password" name="Re-type new password">
                        </div>
                    </form>
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
            </div>
                </div>
            </div>
        </div>
        <?php
        include 'include/footer.php';
        ?>
    </body>
</html>


