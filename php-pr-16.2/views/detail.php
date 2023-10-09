<?php include 'header.php'?>
<section class="py-5 ">
    <div class="container bg-info-subtle">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body border-3 border-dark">
                    <img src="<?php echo $product['image'];?>" alt="">
                </div>
                <div class="col-md-8 fw-bold">
                    <h3><?php echo $product['name'];?></h3>
                    <hr/>
                    <p><?php echo $product['description'];?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'?>
