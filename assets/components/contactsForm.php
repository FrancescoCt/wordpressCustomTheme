<?php 
//Function that returns html component to be recalled in functions.php
function my_custom_contactsForm(){
    //The server-side handling is defined in function.php under the databaseTables region
?>

<?php
if (isset($_POST['submit_form'])) {
    // It uses the wp database
    global $wpdb;
    $table_name = $wpdb->prefix . "feedback";

    $firstname = htmlspecialchars($_POST['firstname'], ENT_QUOTES, 'UTF-8');
    $lastname = htmlspecialchars($_POST['lastname'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $feedback = htmlspecialchars($_POST['feedback'], ENT_QUOTES, 'UTF-8');
    
    $wpdb->insert(
        $table_name,
        [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'feedback' => $feedback,
            'submitted_at' => current_time('mysql')
        ]
    );

    echo "<div class='alert alert-success'><p class='m-0 text-primary-custom'>Thanks for your feedback, ".$firstname." ". $lastname."!</p></div>";
    /*action="<?php echo get_template_directory_uri(); ?>/assets/actions/saveFeedback.php"*/
}
?>

<div id="messageContacts" class="mt-3"></div>
<div class="container mt-5 bg-light-custom my-5 border rounded">
        <form id="contactsForm" method="post" action="">
            <div class="row mb-3 p-2">
                <div class="col-lg-6">
                    <label for="firstname" class="text-primary-custom form-label">First Name</label>
                    <input type="text" class="form-control text-primary-custom" id="firstname" name="firstname" placeholder="Your name" required>
                </div>
                <div class="col-lg-6">
                <label for="lastname" class="text-primary-custom form-label">Lastname</label>
                <input type="text" class="form-control text-primary-custom" id="lastname" name="lastname" placeholder="Your lastname" required>
            </div>
            </div>
            <div class="row mb-3 p-2">
                <div class="col-lg-12 ">
                    <label for="email" class="text-primary-custom form-label">Email</label>
                    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control text-primary-custom" id="email" name="email" placeholder="Your email address" required>
                </div>
            </div>
            <div class="row mb-3 p-2">
                <div class="col-lg-12 ">
                    <label for="feedback" class="text-primary-custom form-label">Feedback</label>
                    <textarea class="form-control text-primary-custom" id="feedback" name="feedback" rows="4" placeholder="Let us know what you think!" required></textarea>
                </div>
            </div>
            <div class="row mb-3 p-2 text-center">
                <div class="col-lg-12 ">
                    <button type="submit" name="submit_form" class="btn btn-custom my-2">Send</button>
                </div>
            </div>
            
        </form>
    </div>
<?php 
}
?>