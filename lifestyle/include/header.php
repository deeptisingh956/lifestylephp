<nav class="nav navbar-inverse">        
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">LifeStyle Store</a>
                </div>
                <div class=" navbar-right collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav">
                        <?php
                        if(isset($_SESSION['email']))
                        {?>
                            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>cart</a></li>
                            <li><a href="setting.php"><span class="glyphicon glyphicon-user"></span>settings</a></li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>logout</a></li>
                            
                        <?php
                        }
                        else
                        {?>
                            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign up</a></li>
                        <?php 
                        }
                        ?>
                    </ul>
                </div>
            </div>
</nav>