<html>
<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['btnCancelOrder'])){
            $deletedOrder = $Order->cancelOrder($_POST['orderID']);
        } else if(isset($_POST['btnDeliver'])){
            $deletedOrder = $Order->delivered($_POST['orderID']);
        } else if(isset($_POST['btnPending'])){
            $deletedOrder = $Order->pending($_POST['orderID']);
        }
	}
?>
<body>
    
<h1>Orders</h1>
        <div class="col-sm-9 ">
        <table class="table table-striped">
        <thead>
        <tr>
         <th scope="col">orderID</th>
         <th scope="col">customerID</th>
         <th scope="col">productID</th>
         <th scope="col">Quantity</th>
         <th scope="col">Cost</th>
         <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
            <?php
                foreach($Order->getOrderDetails() as $item):
            ?>
            <form method="post">
            <input type="hidden" id = "orderID" name="orderID" value="<?php echo $item['orderID']; ?>">
            <?php
                echo "<tr><td>".$item['orderID']."</td><td>".$item['customerID']."</td><td>".$item['productID']."</td><td>".$item['quantity']."</td><td>R".
                $item['orderCost']."</td><td>".$item['orderStatus']."</td><td><button type='submit' name='btnCancelOrder' class='btn btn-danger font-size-12'>Cancel</button></td>"."</td><td><button type='submit' name='btnDeliver' class='btn btn-success font-size-12'>Delivered</button></td>"."</td><td><button type='submit' name='btnPending' class='btn btn-primary font-size-12'>Pending</button></td>";
            ?>
            </form>
            <?php
                endforeach;
            ?>
        
        </tbody>
        </table> 
        <br>
        <h1>Customers</h1>
        <div class="col-sm-9 ">
        <table class="table table-striped">
        <thead>
        <tr>
         <th scope="col">customerID</th>
         <th scope="col">name</th>
         <th scope="col">email</th>
         <th scope="col">contact</th>
        </tr>
        </thead>
        <tbody>
            <?php
                foreach($Order->getData('customer') as $item):
            ?>
            <form method="post">
            <input type="hidden" id = "orderID" name="orderID" value="<?php echo $item['orderID']; ?>">
            <?php
                echo "<tr><td>".$item['customerID']."</td><td>".$item['customerName']."</td><td>".$item['customerEmail']."</td><td>".$item['customerContact'];
            ?>
            </form>
            <?php
                endforeach;
            ?>                 
        </div>

    

</body>
</html>