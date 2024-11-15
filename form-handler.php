$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject']; 
$message = $_POST['message'];

$email_from = 'stem4earth.info@gmail.com';
$email_subject = 'New Form Submission';


$email_body = "User Name: $name.\n" .
              "User Email: $visitor_email.\n"
              "User Message: $message.\n";

$to = 'rawidullahslc@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

// Use the mail function to send the email
mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");
?>