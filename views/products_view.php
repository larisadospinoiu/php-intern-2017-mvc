<div class="err404">
<div id="container" class="clear">
        <!-- content body -->

    <?php //include "views/partials/slider.php"; ?>


</div>

<div class="container">


    <ul class="tabs">
        <li class="tab-link current" data-tab="tab-1">Software</li>
        <li class="tab-link" data-tab="tab-2">Hardware</li>
        <li class="tab-link" data-tab="tab-3">Services</li>
    </ul>

    <div id="tab-1" class="tab-content current">

        <?php

//        echo '<pre>';
//        print_r($products);
//        die;

        if($products){
            foreach($products as $product) {

			if ($product['job']=="Software"){
                echo
                '
                <div class="product">
				<div class="row">
				<div class="col-md-5 ddd">
				<h1> '.$product['name'].' </h1>
                <p>Price:  '.$product['price'].' </p>
				<p> '.$product['details'].' </p>
				</div>
				<div class="col-md-6 hhh">
                <img src="assets/images/'.$product['imagine'].'" alt="">
				</div>
                <div style="clear:both;"></div>
                </div>
                </div>
                ';
            }
        }
	}
        ?>


        <div style="clear:both;"></div>
    </div>
    <div id="tab-2" class="tab-content">
	<?php
      if($products){
            foreach($products as $product) {

			if ($product['job']=="Hardware"){
                echo
                '
                <div class="product">
				<div class="row">
				<div class="col-md-5 ddd">
				<h1> '.$product['name'].' </h1>
                <p>Price:  '.$product['price'].' </p>
				<p> '.$product['details'].' </p>
				</div>
				<div class="col-md-6 hhh">
                <img src="assets/images/'.$product['imagine'].'" alt="">
				</div>
                <div style="clear:both;"></div>
                </div>
                </div>
                ';
            }
        }
	}
        ?>


        <div style="clear:both;"></div>   
    </div>
    <div id="tab-3" class="tab-content">
        <?php
      if($products){
            foreach($products as $product) {

			if ($product['job']=="Services"){
                echo
                '
                <div class="product">
				<div class="row">
				<div class="col-md-5 ddd">
				<h1> '.$product['name'].' </h1>
                <p>Price:  '.$product['price'].' </p>
				<p> '.$product['details'].' </p>
				</div>
				<div class="col-md-6 hhh">
                <img src="assets/images/'.$product['imagine'].'" alt="">
				</div>
                <div style="clear:both;"></div>
                </div>
                </div>
                ';
            }
        }
	}
        ?>
        <div style="clear:both;"></div>
    </div>

</div>
</div>