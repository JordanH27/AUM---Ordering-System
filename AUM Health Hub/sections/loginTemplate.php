
<?php 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['submit'])){   
            foreach($product->getData('customer') as $customer):
                if($customer['customerEmail'] == $_POST['email'] && $customer['customerPassword'] == $_POST['password']){
                    if($customer['customerType'] == 1){
                        header("location: adminProducts.php");
                    }else if($customer['customerType'] == 0){
                        $_SESSION["customerID"] = $customer['customerID'];
                        header("location: index.php");
                    }
                    
                }
            endforeach; 
            ?>
                    <script>
                     alert("Login Failed! Please try again");
                    </script>
                    <?php
        }
               
    }
?>

    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center">Login</h3>
                            <div class="form-group">
                                <label for="email" >Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <br>
                                <input type="submit" name="submit" onclick="validate1();" class="btn btn-dark btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="register.php">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
