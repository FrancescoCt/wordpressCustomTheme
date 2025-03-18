<?php 
//Function that returns html component to be recalled in functions.php
function my_custom_mainSections($arraySectionsMainInfo){
?>
    <main class="container mt-5">

        <?php  
            $output = '';
            foreach ($arraySectionsMainInfo as $section) {
                $output .= '<section class="custom-section row">';
                if($section['img'] != ""){
                    $output .= '<div class="col-lg-5 zoom-container">';
                    $output .= '        <img class="img-fluid" src="' . htmlspecialchars($section['img']) . '" alt="Immagine' . htmlspecialchars($section['title']) . '">';
                    $output .= '</div>';
                    $output .= '<div class="col-lg-7 bg-light rounded border p-2">';
                }else{
                    $output .= '<div class="col-lg-12 bg-light rounded border p-2">';
                }
                $output .= '<h2 class="text-center text-primary-custom p-2">' . htmlspecialchars($section['title']) . '</h2>';
                foreach ($section['lines'] as $line) {
                    $output .= '<p class="text-primary-custom text-center p-2">' . htmlspecialchars($line) . '</p>';
                }
                $output .= '<p class="text-center"> <a class="btn btn-custom" href='. htmlspecialchars($section['href']) .'>Contattaci!</a></p>';
                $output .= '</div>';
                $output .= '</section>';
            }
            echo $output;
        //Sample:
        //     <section class="vision">
        //          <h2 class="text-center">Vision</h2>
        //          <p>Contribuire a rendere il turismo più sostenibile e in armonia con la natura.</p>
        //      </section>
        ?>
    </main>

<?php 
}
?>