<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DIGITAL Daily</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    </head>
    <body>
        <?php

            /**
             * START SESSION
             */
            session_start();


            /**
             * ENV LOCAL FILE
             */
            include '../env.php';


            if (!$_SESSION['auth']) { ?>

                <div class="connection p-5">
                    <div style="border-radius: 5px; color: #062932ff; background-color: #aadef2ff; width: fit-content; margin: 30px auto; padding: 20px 50px;">
                        <h3 style="text-align: center;">Connexion</h3>
                    </div>
                    <?php 
                    
                        if ($_SESSION['invalid']) { ?>

                            <div class="p-3 mt-4 mb-4" style="border-radius: 5px; color: #320606ff; background-color: #f2aaaaff;">
                                <h4>Invalid credentials</h4>
                            </div>

                        <?php }

                    ?>
                    <form action="auth.php" method="post">
                        <div class="form-group mb-4">
                            <label for="email-input">E-mail</label>
                            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="email-input">Mot de passe</label>
                            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
                        </div>
                        <button type="submit" class="btn btn-success">Se connecter</button>
                    </form>
                </div>
            <?php } else {

                /**
                 * DB CONNECTION
                 */
                try {
                    $pdo = new PDO("mysql:host=$servername;port=$port;dbname=$dbname;charset=utf8", $username, $password);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                    $request = "SELECT * FROM contact";
                    $stmt = $pdo->query($request);

                    // Récupération de toutes les lignes
                    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
                } catch (PDOException $e) {
                    echo "Erreur : " . $e->getMessage();
                }

                ?> 
                
                <div class="content p-5 bg-light">
                    <h2 style="margin-left: 50px;">Tous les message</h2>

                    <?php foreach ($contacts as $contact) { ?>

                        <div class="message-item shadow-sm bg-white m-3 p-3">
                            <h4><?= $contact['gender'] . ' ' . $contact['firstname'] . ' ' . $contact['lastname'] ?></h4>
                            <h6><?= $contact['email'] ?></h6>
                            <h5><strong><?= $contact['subject'] ?></strong></h5>
                            <p><?= $contact['message'] ?></p>
                        </div>

                    <?php } ?>

                </div>

            <?php }
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </body>
</html>