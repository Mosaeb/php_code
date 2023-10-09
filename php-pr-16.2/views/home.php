<?php include 'header.php'?>
    <section class="py-5 bg-info-subtle">
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product){?>
                <div class="col-md-3 mb-5 h-100 ">
                    <div class="card border-3 border-dark">
                        <img src="<?php echo $product['image'];?>" alt="">
                        <div class="card-body">
                            <h5><?php echo $product['name'];?></h5>
                            <hr/>
                            <a href="web.php?page=detail&&id=<?php echo $product['id'];?>" class="btn btn-warning">Description</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php include 'footer.php'?>
