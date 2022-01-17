<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['submit'])){
               $productAdded = $product->addProduct($_POST['productPrice'],$_POST['productName'], 1, $_POST['supplier']);
               if(!isset($productAdded)){
                ?>
                <script>
                alert("Add Failed! Please try again");
                </script>
              <?php  
            }
            
            
        }
		}
    ?>
    <div id="register">
        <div class="container py-5">
            <div id="register-row" class="row justify-content-center align-items-center">
                <div id="register-column" class="col-md-6">
                    <div id="register-box" class="col-md-12">
                        <form id="register-form" class="form" action="" method="post">
                            <h3 class="register-center">Add Product</h3>
                            <div class="form-group">
                                <label for="productName" >Product Name:</label><br>
                                <input type="text" name="productName" id="productName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="productPrice" >Price:</label><br>
                                <input type="text" name="productPrice" id="productPrice" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="supplier">Supplier:</label><br>
                                <input type="text" name="supplier" id="supplier" class="form-control">
                            </div>
                            <div class="form-group">
                                <br>
                                <input type="submit" name="submit" class="btn btn-dark btn-md" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="border-top border-secondary w-50 mx-auto my-3"></div>

    <h1>Suppliers</h1>
        <div class="col-sm-9 ">
        <table class="table table-striped">
        <thead>
        <tr>
         <th scope="col">supplierID</th>
         <th scope="col">Name</th>
         <th scope="col">Contact</th>
        </tr>
        </thead>
        <tbody>
            <?php
                foreach($Order->getData('supplier') as $item):
            ?>
            <?php
                echo "<tr><td>".$item['supplierID']."</td><td>".$item['supplierName']."</td><td>".$item['supplierContactNo'];
            ?>
            <?php
                endforeach;
            ?>                 
        </div>

    

</body>