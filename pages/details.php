<?php
include "includes/header.php"
?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card card-body border-0">
                        <h3><?php echo $newsDetails['title'] ?></h3>
                        <p style="font-size: 15px;">Author: <?php echo $newsDetails['author_name'] ?></p>
                        <img src="assets/img/<?php echo $newsDetails['image'] ?>" alt="" class="w-100" style="height: 400px" />
                    </div>
                    <div>
                        <p><?php echo $newsDetails['long_description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include "includes/footer.php"
?>