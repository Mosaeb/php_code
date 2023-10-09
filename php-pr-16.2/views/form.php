<?php include 'header.php'?>

<section class="py-5 bg-info-subtle ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto ">
                <div class="card border-3 border-dark">
                    <div class="card-header fw-bold border-3 border-dark">
                        Full Information Program
                    </div>
                    <div class="card-body ">
                        <form action="web.php" method="post">
                        <div class="row mb-3">
                            <label for="" class="col-md-3 fw-bold">First Name:</label>
                            <div class="col-md-9">
                                <input type="text" name="first_name" class="form-control fw-bold border-3  border-dark">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3 fw-bold">Last Name:</label>
                            <div class="col-md-9">
                                <input type="text"  name="last_name" class="form-control fw-bold border-3  border-dark">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3 fw-bold">Email:</label>
                            <div class="col-md-9">
                                <input type="email" name="email" class="form-control fw-bold border-3  border-dark">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3 fw-bold">Full Information:</label>
                            <div class="col-md-9">
                                <input type="email"  value="<?php echo isset($_GET['result']) ? $_GET['result'] : ''; ?>" class="form-control fw-bold border-3  border-dark">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-9">
                                <input type="submit" name="print_information" class="btn btn-info border-3  border-dark" value="Print Information">
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'?>