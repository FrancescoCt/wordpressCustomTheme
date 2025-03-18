<?php 
//Function that returns html component to be recalled in functions.php
function my_custom_cardsAdvanced($arrayCardsImages){
?>
     
    <div class="container mt-5 d-flex justify-content-between align-items-center">

            <?php 
            for ($i = 0; $i < count($arrayCardsImages); $i++) {
            ?>

                    <div class="card cardAdvanced mb-3" style="width: 18rem;">
                        <a href="<?php echo htmlspecialchars($arrayCardsImages[$i]['href']) ?>" class="text-primary-custom">
                            <img src="<?php echo htmlspecialchars($arrayCardsImages[$i]['url']) ?>" class="card-img-top">
                            <!-- <div class="card-body"> -->
                                <!-- <h5 class="card-title">Card title</h5> -->
                                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            <!-- </div> -->
                            <div class="cardAdvanced-overlay">
                                <?php echo htmlspecialchars($arrayCardsImages[$i]['title']) ?>
                            </div>
                        </a>
                    </div>

            <?php
            }
            ?>

    </div>

<?php 
}
?>