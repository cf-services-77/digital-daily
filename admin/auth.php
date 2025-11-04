<?php

    /**
     * START SESSION
     */
    session_start();


    /**
     * ENV LOCAL FILE
     */
    include '../env.php';


    /**
     * DB CONNECTION
     */
    try {
        $pdo = new PDO("mysql:host=$servername;port=$port;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $request = "SELECT * FROM user";
        $stmt = $pdo->query($request);
        $stmt->execute();
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];

        $_SESSION['auth'] = $user && $_POST['password'] == $user['password'];
        $_SESSION['invalid'] = !$_SESSION['auth'];
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    header("Location: $host/admin");
    exit;