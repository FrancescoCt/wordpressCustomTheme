<?php
//Use this action for your form if you want to show a slightly different page
//(Not associated yet)
if (isset($_POST['submit_form'])) {
    //Load wordpress
    require_once('../../../../../wp-load.php');
    // It uses the wp database
    global $wpdb;
    $table_name = "wp_feedback"; // Nome della tabella (creata in un passaggio successivo)
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    
    $wpdb->insert(
        $table_name,
        [
            'firstname' => $firstname,
            'lastname' => $firstname,
            'email' => $email,
            'feedback' => $feedback,
            'submitted_at' => current_time('mysql')
        ]
    );

    echo "<p>Grazie per il tuo messaggio!</p>";
}
?>