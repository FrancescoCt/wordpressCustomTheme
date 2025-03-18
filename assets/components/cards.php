<?php 
//Function that returns html component to be recalled in functions.php
function my_custom_cards($arrayCardsImages){
?>
    <div class="container my-5">
        <div class="row">
        <?php 
            for ($i = 0; $i < count($arrayCardsImages); $i++) {
        ?>
            <div class="col-lg-4">
                <div class="card mb-4 bg-light-custom zoom-container">
                    <a href="<?php echo htmlspecialchars($arrayCardsImages[$i]['href']) ?>" class="text-primary-custom">
                        <?php 
                        echo '<img src="'.htmlspecialchars($arrayCardsImages[$i]['url']).'" class="card-img-top" alt="CardImage '.htmlspecialchars($i).'">';
                        ?>
                        <div class="card-body">
                             <h5 class="card-title text-primary-custom"> <?php echo htmlspecialchars($arrayCardsImages[$i]['title'])?></h5>
                             <p class="card-text bg-light p-2 rounded border"><?php echo htmlspecialchars($arrayCardsImages[$i]['description'])?></p>
                        </div>
                    </a>
                </div>
            </div>
        
        <?php
            }
        ?>
        </div>
    </div>

<?php 
}
?>