	<!-- Main Page Heading -->
	<div>
	<a name="tProducts"></a>
	<div class="col-12 text-center mt-5">
		<h1 class="text-dark pt-4">Featured Products</h1>
		<div class="border-top border-primary w-25 mx-auto my-3"></div>
		<p class="lead">For all of the people that choose health</p>
	</div>
    <!-- Main Page Heading End -->


    <!-- Products -->
	<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['btnDeleteProduct'])){
            $deletedProduct = $product->deleteProduct($_POST['productID']);
        } else if(isset($_POST['btnStock'])){
			$stockChanged = $product->changeStock($_POST['productID'], $_POST['productStock']);
		}
	}
    ?>

	<div class="container my-5">
		<div class="row py-4">

			<div class="col-md-6 my-4 ">
				<img src="img/farmer-angus.PNG" alt="" class="w-100">
			</div>

			<div class="col-md-6 my-4 ">
				<h4 class="mt-4 mb-1 ">Farmer Angus</h4>
				<p>Local grass fed, pasture-reared beef producers</p>
			</div>
		</div>

		<?php foreach($product_item as $item){
			if($item['supplierID'] == 1){
				$stock = $item['productStock'];?>
					<script>
               			setStock(<?=$stock?>);
			 		</script>

		<div class="row py-2">
			<div class="col-md-6 product">
					<h4><?php echo $item['productName'] ?></h4>	
					<h4 class = "text-primary"><script>document.write(getStock());</script></h4>
			</div>

			<div class="col-md-6">
            <form method="post">
                <input type="hidden" name="productID" value="<?php echo $item['productID']; ?>">
				<input type="hidden" name="productStock" value="<?php echo $item['productStock']; ?>">
                <!-- <button type="submit" name="btnDeleteProduct" class="btn btn-danger font-size-12 float-md-right mx-5">Delete</button> -->
				<button type="submit" name="btnStock" class="btn btn-primary font-size-12 float-md-right mx-5">Stock</button>
            </form>
				<h4 class="float-md-right"><?php echo $item['productPrice'] ?></h4>
			</div>
		</div>
		<?php }}?>
	</div>

	<div class="border-top border-secondary w-50 mx-auto my-3"></div>

	<div class="container my-5">
		<div class="row py-4">

			<div class="col-md-6 my-4 ">
				<img src="img/breadbar.PNG" alt="" class="w-100">
			</div>

			<div class="col-md-6 my-4 ">
				<h4 class="mt-4 mb-1 ">Bread Bar</h4>
				<p>Artisan Bakery</p>
			</div>
		</div>

		<?php foreach($product_item as $item){
			if($item['supplierID'] == 2){
				$stock = $item['productStock'];?>
					<script>
               			setStock(<?=$stock?>);
			 		</script>

		<div class="row py-2">
			<div class="col-md-6 product">
					<h4><?php echo $item['productName'] ?></h4>	
					<h4 class = "text-primary"><script>document.write(getStock());</script></h4>
			</div>

			<div class="col-md-6">
            <form method="post">
                <input type="hidden" name="productID" value="<?php echo $item['productID']; ?>">
				<input type="hidden" name="productStock" value="<?php echo $item['productStock']; ?>">
                <!-- <button type="submit" name="btnDeleteProduct" class="btn btn-danger font-size-12 float-md-right mx-5">Delete</button> -->
				<button type="submit" name="btnStock" class="btn btn-primary font-size-12 float-md-right mx-5">Stock</button>
            </form>
				<h4 class="float-md-right"><?php echo $item['productPrice'] ?></h4>
			</div>
		</div>
		<?php }}?>
	</div>

	<div class="border-top border-secondary w-50 mx-auto my-3"></div>

	<div class="container my-5">
		<div class="row py-4">

			<div class="col-md-6 my-4 ">
				<img src="img/camphill-dairy.PNG" alt="" class="w-100">
			</div>

			<div class="col-md-6 my-4 ">
				<h4 class="mt-4 mb-1 ">Camphill Dairy</h4>
				<p>Dairy products: Natural milk & yoghurt, cheeses, feta, labaneh and créme fraiche</p>
			</div>
		</div>

		<?php foreach($product_item as $item){
			if($item['supplierID'] == 3)
			{$stock = $item['productStock'];?>
				<script>
					   setStock(<?=$stock?>);
				 </script>

	<div class="row py-2">
		<div class="col-md-6 product">
				<h4><?php echo $item['productName'] ?></h4>	
				<h4 class = "text-primary"><script>document.write(getStock());</script></h4>
		</div>

		<div class="col-md-6">
		<form method="post">
			<input type="hidden" name="productID" value="<?php echo $item['productID']; ?>">
			<input type="hidden" name="productStock" value="<?php echo $item['productStock']; ?>">
			<!-- <button type="submit" name="btnDeleteProduct" class="btn btn-danger font-size-12 float-md-right mx-5">Delete</button> -->
			<button type="submit" name="btnStock" class="btn btn-primary font-size-12 float-md-right mx-5">Stock</button>
		</form>
			<h4 class="float-md-right"><?php echo $item['productPrice'] ?></h4>
		</div>
	</div>
	<?php }}?>
</div>

	<div class="border-top border-secondary w-50 mx-auto my-3"></div>

	<div class="container my-5">
		<div class="row py-4">

			<div class="col-md-6 my-4 ">
				<img src="img/camphill-bakery.PNG" alt="" class="w-100">
			</div>

			<div class="col-md-6 my-4 ">
				<h4 class="mt-4 mb-1 ">Camphill Bakery</h4>
			</div>
		</div>

		<?php foreach($product_item as $item){
			if($item['supplierID'] == 4){
				$stock = $item['productStock'];?>
					<script>
               			setStock(<?=$stock?>);
			 		</script>

		<div class="row py-2">
			<div class="col-md-6 product">
					<h4><?php echo $item['productName'] ?></h4>	
					<h4 class = "text-primary"><script>document.write(getStock());</script></h4>
			</div>

			<div class="col-md-6">
            <form method="post">
                <input type="hidden" name="productID" value="<?php echo $item['productID']; ?>">
				<input type="hidden" name="productStock" value="<?php echo $item['productStock']; ?>">
                <!-- <button type="submit" name="btnDeleteProduct" class="btn btn-danger font-size-12 float-md-right mx-5">Delete</button> -->
				<button type="submit" name="btnStock" class="btn btn-primary font-size-12 float-md-right mx-5">Stock</button>
            </form>
				<h4 class="float-md-right"><?php echo $item['productPrice'] ?></h4>
			</div>
		</div>
		<?php }}?>
	</div>

	<div class="border-top border-secondary w-50 mx-auto my-3"></div>
	
	<div class="container my-5">
		<div class="row py-4">

			<div class="col-md-6 my-4 ">
				<img src="img/aquaponics.PNG" alt="" class="w-100">
			</div>

			<div class="col-md-6 my-4 ">
				<h4 class="mt-4 mb-1 ">Aquaponics</h4>
			</div>
		</div>

		<?php foreach($product_item as $item){
			if($item['supplierID'] == 5){
				$stock = $item['productStock'];?>
					<script>
               			setStock(<?=$stock?>);
			 		</script>

		<div class="row py-2">
			<div class="col-md-6 product">
					<h4><?php echo $item['productName'] ?></h4>	
					<h4 class = "text-primary"><script>document.write(getStock());</script></h4>
			</div>

			<div class="col-md-6">
            <form method="post">
                <input type="hidden" name="productID" value="<?php echo $item['productID']; ?>">
				<input type="hidden" name="productStock" value="<?php echo $item['productStock']; ?>">
                <!-- <button type="submit" name="btnDeleteProduct" class="btn btn-danger font-size-12 float-md-right mx-5">Delete</button> -->
				<button type="submit" name="btnStock" class="btn btn-primary font-size-12 float-md-right mx-5">Stock</button>
            </form>
				<h4 class="float-md-right"><?php echo $item['productPrice'] ?></h4>
			</div>
		</div>
		<?php }}?>
	</div>

	<div class="border-top border-secondary w-50 mx-auto my-3"></div>
	
	<div class="container my-5">
		<div class="row py-4">

			<div class="col-md-6 my-4 ">
				<img src="img/microgreen.PNG" alt="" class="w-100">
			</div>

			<div class="col-md-6 my-4 ">
				<h4 class="mt-4 mb-1 ">Melkbos Microgreens</h4>
				<p>Five Day, Self-harvesting Trays</p>
			</div>
		</div>

		<?php foreach($product_item as $item){
			if($item['supplierID'] == 6){
				$stock = $item['productStock'];?>
					<script>
               			setStock(<?=$stock?>);
			 		</script>

		<div class="row py-2">
			<div class="col-md-6 product">
					<h4><?php echo $item['productName'] ?></h4>	
					<h4 class = "text-primary"><script>document.write(getStock());</script></h4>
			</div>

			<div class="col-md-6">
            <form method="post">
                <input type="hidden" name="productID" value="<?php echo $item['productID']; ?>">
				<input type="hidden" name="productStock" value="<?php echo $item['productStock']; ?>">
                <!-- <button type="submit" name="btnDeleteProduct" class="btn btn-danger font-size-12 float-md-right mx-5">Delete</button> -->
				<button type="submit" name="btnStock" class="btn btn-primary font-size-12 float-md-right mx-5">Stock</button>
            </form>
				<h4 class="float-md-right"><?php echo $item['productPrice'] ?></h4>
			</div>
		</div>
		<?php }}?>
	</div>
	</div>
	<!-- Products end -->