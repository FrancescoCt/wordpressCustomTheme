<?php
function create_feedback_table() {
    global $wpdb;

    $table_name = $wpdb->prefix . "feedback";
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        firstname varchar(20) NOT NULL,
        lastname varchar(20) NOT NULL,
        email varchar(100) NOT NULL,
        feedback varchar(500) NOT NULL,
        submitted_at datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

// function handle_contacts_form(){
//     if (isset($_POST['submit_form'])) {
//         global $wpdb;

//         $table_name = $wpdb->prefix . "feedback"; // Nome della tabella (creata in un passaggio successivo)
        
//         $firstname = sanitize_text_field($_POST['firstname']);
//         $lastname = sanitize_text_field($_POST['lastname']);
//         $email = sanitize_email($_POST['email']);
//         $feedback = sanitize_textarea_field($_POST['feedback']);
        
//         $wpdb->insert(
//             $table_name,
//             [
//                 'firstname' => $firstname,
//                 'lastname' => $firstname,
//                 'email' => $email,
//                 'feedback' => $feedback,
//                 'submitted_at' => current_time('mysql')
//             ]
//         );

//         echo "<p>Grazie per il tuo messaggio!</p>";
//     }
// }


add_action('after_setup_theme', 'create_feedback_table');

?>