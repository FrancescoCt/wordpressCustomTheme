<?php 
//Function that returns html component to be recalled in functions.php
function my_custom_carousel($arrayImagesUrls){
?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php 
                for ($i = 0; $i < count($arrayImagesUrls); $i++) {
                    if($i == 0){
                       echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.htmlspecialchars($i).'" class="active"></li>';
                    }else{
                        echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.htmlspecialchars($i).'"></li>';
                    }
                }
            ?>
        </ol>
        <div class="carousel-inner">
            <?php 
                for ($i = 0; $i < count($arrayImagesUrls); $i++) {
                    if($i == 0){
                       echo '<div class="carousel-item active">';
                       echo '<img class="d-block w-100" src="'.htmlspecialchars($arrayImagesUrls[$i]).'" alt="CarouselImage'.$i.'">';
                       echo '</div>';
                    }else{
                       echo '<div class="carousel-item">';
                       echo '<img class="d-block w-100" src="'.htmlspecialchars($arrayImagesUrls[$i]).'" alt="CarouselImage'.$i.'">';
                       echo '</div>';
                    }
                }
            ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<?php 
}

?>