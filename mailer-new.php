<?php 
        if(isset($_POST['submit'])){
            $to = "aktywneobozy@gmail.com"; // this is your Email address
            $from = $_POST['email']; // this is the sender's Email address
            $name = $_POST['name'];
            $last_name = $_POST['last_name'];
            $address_street = $_POST['address_street'];
            $tel = $_POST['tel'];
            $text = $_POST['message'];
            $quantity = $_POST['quantity'];
            $select = $_POST['select'];
            $subject = "Nowe zgłoszenie od $name";
            $subject2 = "Dziękujemy za zgłoszenie. ";
            $message = "" . "\n\n" . "" . $text . "\n\n". $tel . "\n\n". $_POST['select'];
            $message2 = "Wkrótce otrzymacie Państwo maila ze szczegółami. Dziękujemy" . "\n\n" . "";

            $headers = "From:" . $from;
            $headers2 = "From:" . $to;

            $headers .= "MIME-Version: $from\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

            mail($to,$subject,$message,$headers);
            mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
            echo "Din mail er sendt " . $name . " " . " " . ". Du har valgt følgende vinduer: " . $select;
    
            if (empty($name)  OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: http://www.aktywneobozy.com.pl/index.php?success=1#form");
                exit;
            }
            header("Location: http://www.aktywneobozy.com.pl/index.php?success=1#form");
    
        }
?>