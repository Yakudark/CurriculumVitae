<!-- <?php
session_start();
if (isset($_POST['send'])) {
    // variable extraction
    extract($_POST);
    // check variables and assign error messages    
    if (
        isset($nom) && $nom != "" &&
        isset($email) && $email != "" &&
        isset($sujet) && $sujet != "" &&
        isset($message) && $message != ""
    ) {
        // send email
        // receiver email address
        $to = "vianney.giovannelli.simplon@gmail.com";
        $subject = "Vous avez reçu un message de : " . $email;

        $message = "
            <p>Vous avez reçu un messade de <strong>" . $email . "</strong></p>
            <p><strong>Nom : </strong>" . $nom . "</p>
            <p><strong>Sujet : </strong>" . $sujet . "</p>
            <p><strong>Message : </strong>" . $message . "</p>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <.$email.>' . "\r\n";

        $send = mail($to, $subject, $message, $headers);

        // success message
        if ($send) {
            $_SESSION['success_message'] = "Votre message a bien été envoyé";
            //redirection
            header("location:index.php#contact");
        } else {
            $info = "Votre message n'a pas pu être envoyé";
        }
    } else {
        // error message
        $info = "Veuillez remplir tous les champs";
    }
}
?> -->