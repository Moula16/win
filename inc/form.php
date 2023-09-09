<?php

$errors = [
    'firstNameError' => '',
    'lasttNameError' => '',
    'emailError' => '',
];
    if (isset($_POST['submit'])) {
    
        $firstName = ($_POST['firstName'])?$_POST['firstName']:NULL;
        $lastName =( $_POST['lastName'])? $_POST['lastName']:NULL;
        $email = ($_POST['email'])?$_POST['email']:NULL;
        
        if (empty($firstName)) {
            $errors['firstNameError'] = 'Please enter First Name';
        }
        if (empty($lastName)) {
            $errors['lasttNameError'] = 'Please enter Last Name';
        }
        if (empty($email)) {
            $errors['emailError'] = 'Please enter your Email';
        }
        else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $errors['emailError'] = 'Please enter a valid email';
        }

        if (!array_filter($errors)) {
            $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
            $lasttName = mysqli_real_escape_string($conn, $_POST['lastName']);
            $email     = mysqli_real_escape_string($conn, $_POST['email']);

            $query = "SELECT * FROM users WHERE email = '$email'";
            $result = $conn->query($query);
            if ($result->num_rows > 0) {
                $errors['emailError'] = "The email address $email is already in use.";
            }else {
                $query =  "INSERT INTO users(firstName, lastName, email)
                           VALUES ('$firstName','$lasttName','$email')";
                $conn->query($query);
                header('location:' . $_SERVER['PHP_SELF']);
            } 
    }
}  











