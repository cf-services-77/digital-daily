<?php

    /**
     * ENV LOCAL FILE
     */
    include '../../env.php';


    /**
     * DATA REQUEST
     */
    $gender = $_POST['gender'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    /**
     * DB CONNECTION
     */
    try {
        $pdo = new PDO("mysql:host=$servername;port=$port;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $request = "INSERT INTO contact (gender, firstname, lastname, email, subject, message) VALUES (:gender, :firstname, :lastname, :email, :subject, :message)";
        $stmt = $pdo->prepare($request);
        $stmt->execute([
            'gender' => $gender,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'subject' => $subject,
            'message' => $message
        ]);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    header("Location: $host");
    exit;

?>