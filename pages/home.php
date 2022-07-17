<?php
include "includes/header.php"
?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php
                foreach ($allNews as $news) {
                ?>
                <div class="col-md-3 mt-3">
                    <a href="action.php?page=news-details&id=<?php echo $news['id']; ?>" class="text-dark" style="text-decoration: none;">
                        <div class="card">
                            <img src="assets/img/<?php echo $news['image']?>" class="card-img-top" alt="" />
                            <div class="card-body">
                                <h4><?php echo $news['title']?></h4>
                                <p style="font-size: 15px"><?php echo $news['author_name']?></p>
                                <p><?php echo $news['short_description']?></p>
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-success text-capitalize float-end">Read more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php
include "includes/footer.php"
?>