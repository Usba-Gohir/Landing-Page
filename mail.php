<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    $mailheader = "From:" . $name . "<" . $email . ">\r\n";

    $recipient = "usba.gohir@gmail.com";

    if (mail($recipient, $service, $country, $message, $mailheader)) {
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <title>Simple Landing Page</title>
        </head>
        <body>
            <div class="container">
                <div class="taskbar">
                    <header>
                        <nav>
                            <ul>
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </nav>
                    </header>
                </div>
               
                <div class="content">
                    <main>
                        <!-- Other sections and content -->
                        
                        <section class="contact-content-section" id="contact">
                            <div class="contact-container">
                                <h1>Send Your Request</h1>
                                <p>Email sent successfully!</p>
                            </div>
                            <div class="content-info">
                                <h1>Reach Us</h1>
                                <p>Email: <a href="mailto:usba.gohir@gmail.com">usba.gohir@gmail.com</a></p>
                                <p>Phone: <a href="tel:4379983066">437-998-3066</a></p>
                            </div>
                        </section>
                        
                        <footer>
                            <!-- ... Footer content ... -->
                        </footer>
                    </main>
                </div>
            </div>
            <script src="script.js"></script>
        </body>
        </html>';
    } else {
        echo "Error sending email.";
    }
}
?>
