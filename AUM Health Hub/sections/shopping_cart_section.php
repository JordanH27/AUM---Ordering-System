<!-- Shopping cart section  -->
<?php 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['btnDelete'])){
            $deletedRecord = $Cart->deleteCart($_POST['productID']);
        }else if(isset($_POST['btnOrder'])){
            $orderAdded = $Order->addToOrders($_POST['customerID'], $_POST['orderCost']);
            foreach($product->getData('cart') as $item):
                foreach($product->getData('orders') as $order):
                    if($order['customerID'] == $item['customerID']){
                        $orderAdded2 = $Order->addToOP($item['productID'], $order['orderID'], $item['quantity']);
                    }
                endforeach;
            endforeach;
        }
    }
?>

<div class="container-fluid w-100 justify-content-center">
    <div class="col-12 text-center mt-5 ">
		<h1 class="text-dark pt-4">Shopping Cart</h1>
		<div class="border-top border-primary w-25 mx-auto my-3"></div>
		<p class="lead">Hope you enjoyed shopping</p>
	</div>

                <!--  shopping cart items   -->
                    <div class="row">
                        <div class="col-sm-9">
                            <?php 
                                foreach($product->getData('cart') as $item):
                                
                                $cart = $product->getProduct($item['productID']);
                                $quantity = $item['quantity'];?>
                                <script>
                                    setQuantity(<?=$quantity?>);
                                </script>
                                <?php
                                if (isset($_SESSION["customerID"])){
                                    if ( $item['customerID'] == $_SESSION["customerID"]){
                                $subTotal[] = array_map(function($item){
                                $price = $item['productPrice'];
                            ?>
                                <script>
                                    addToPrice(<?=$price?>);
                                </script>
                            <!-- cart item -->
                                <div class="row border-top py-3 mt-3">
                                    <div class="col-sm-8">
                                        <h5 class="font-baloo font-size-20"><?php echo $item['productName'];?></h5>
                                        <!-- <h6>from farmer angus</h6> -->

                                        <!-- product qty -->
                                            <div class="qty d-flex pt-2">
                                                <div class="d-flex font-rale w-26">
                                                    <form method="post">
                                                    <h5 class="font-baloo font-size-20" id = "quantityDisplay">Quantity: <script>document.write(getQuantity());</script></h5>
                                                    <script>
                                                        document.getElementById("quantity").value = getQuantity();
                                                        
                                                    </script>
                                                    <input type = "hidden"  id = "quantity" name = "quantity">   
                                                </div>
                            
                                                <input type = "hidden" value="<?php echo $item['productID']??0;?>" name = "productID">
                                                <button type="submit" name = "btnDelete" class="btn font-baloo text-danger px-5">Delete</button>
                                                <!-- </form> -->
                                            </div>
                                        <!-- !product qty -->

                                    </div>

                                    <div class="col-sm-2 text-right">
                                        <div class="font-size-20 text-danger font-baloo">
                                            R<span class="product_price"><?php echo $item['productPrice'];?></span>
                                        </div>
                                    </div>
                                </div>
                            <!-- !cart item -->
                            <?php
                                return $item['productPrice'];
                            
                             },$cart);
                            
                            }}
                                endforeach;
                                
                            ?>
                        </div> 
                        <!-- subtotal section-->
                        <div class="col-sm-3">
                            <div class="sub-total border text-center mt-2">
                                <div class="border-top py-4">
                                    <h5 class="font-baloo font-size-20">Subtotal:&nbsp; <span class="text-danger">R<span class="text-danger" id="deal-price"><script>document.write(getPrice());</script></span> </span></h5>                                                          
                                        <input type = "hidden" value="<?php echo $_SESSION["customerID"]??0;?>" name = "customerID">
                                        <input type = "hidden" id = "orderCost" name = "orderCost">
                                        <script>
                                            document.getElementById("orderCost").value = getPrice();
                                        </script>
                                        <button type="submit" name = "btnOrder" class="btn btn-primary btn-md">Proceed to Order</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- !subtotal section-->
                    </div>
                <!--  !shopping cart items   -->
            </div>
    <!-- !Shopping cart section  -->