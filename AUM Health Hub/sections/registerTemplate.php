<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
			if($_POST['password'] == $_POST['confirm_password']){
               $customerAdded = $product->addCustomer($_POST['name'],$_POST['email'], $_POST['password'], $_POST['contact']);
               if(isset($customerAdded)){
                header("location: login.php");
            }
            ?>
               <script>
               alert("register failed! Please try again");
               </script>
             <?php   
            }
			
		}
    ?>
    <div id="register">
        <div class="container py-5">
            <div id="register-row" class="row justify-content-center align-items-center">
                <div id="register-column" class="col-md-6">
                    <div id="register-box" class="col-md-12">
                        <form id="register-form" class="form" action="" method="post">
                            <h3 class="register-center">Register</h3>
                            <div class="form-group">
                                <label for="name" >Name:</label><br>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email" >Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Contact Number:</label><br>
                                <input type="text" name="contact" id="contact" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password:</label><br>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                            </div>
                            <div class="form-group">
                                <br>
                                <input type="submit" name="submit" class="btn btn-dark btn-md" value="submit">
                            </div>
                            <div id="login-link" class="text-right">
                                <a href="login.php">Already have an account?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>