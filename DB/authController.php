<?php
session_start();

require 'constants.php';

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, "restore1");

if ($conn->connect_error)
{
    die('Database error:' . $conn->connect_error);
}

$errors = array();
$errors1 = array();
$email = "";

if (isset($_POST['send-button']))
{
    $email = $_POST['email'];
    $forename = $_POST['forename'];
    $surname = $_POST['surname'];
    $message = $_POST['message'];

    // Validation
    if (empty($email))
    {
        $errors['email'] = "Email address is required!";
    }

    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $errors['email2'] = "Invalid Email address!";
    }

    if (empty($forename))
    {
        $errors['forename'] = "Forename is required!";
    }

    if (empty($surname))
    {
        $errors['surname'] = "Surname is required!";
    }

    if (empty($surname))
    {
        $errors['surname'] = "Message is required!";
    }

    $emailQuery = "SELECT * FROM users WHERE email=? LIMIT 1";
    $stmt = $conn->prepare($emailQuery);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;

    if (count($errors) === 0)
    {
        $sql = "INSERT INTO users(email,forename,surname, message) VALUES (?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssss', $email, $forename, $surname, $message);

        if ($stmt->execute())
        {
            $user_id = $conn->insert_id;
            $_SESSION['id'] = $user_id;
            $_SESSION['email'] = $email;
            $_SESSION['forename'] = $forename;
            $_SESSION['surname'] = $surname;
            $_SESSION['message'] = $message;
            $_SESSION['errorMessage'] = "Message sent successfully!";

            header('location: contact.php?status=success');

            exit();

        }
        else
        {
            $errors['db_error'] = "Database error: failed to register!";
        }
    }
}
?>
