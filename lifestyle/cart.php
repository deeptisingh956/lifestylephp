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
        require 'include/header.php';
        ?>
        <div class="container">
            <div class="col-md-8">
                <table class="table-bordered table-responsive">
                    <thead>
                        <tr>
                            <td>Item Number</td>
                            <td>Item Name</td>
                            <td>Price</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href="success.html" class="btn btn-primary">Confirm Order</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php
        include 'include/footer.php';
        ?>
    </body>
</html>

