<?php
    $host='localhost';
    $user='root';
    $password='';
    $dbname='formulaire';
    $port='3308';

    try {
        $data = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $password);
        $data->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode to exceptions
        echo "Connexion établie";
    } catch (PDOException $e) {
        echo "La connexion a échoué : " . $e->getMessage();
    }

    if (isset($_POST['nom']) && isset($_POST['email'])) {
        try {
            $inser = $data->prepare("INSERT INTO `firstweb`(`nom`, `email`) VALUES(:nom, :email)");

            $inser->bindValue(':nom', $_POST['nom']);
            $inser->bindValue(':email', $_POST['email']);

            // Execute the insertion query
            $inser->execute();

            echo "<br> Données insérées avec succès";
        } catch (PDOException $e) {
            echo "Erreur lors de l'insertion : " . $e->getMessage();
        }
    } else {
        echo "Variables non déclarées";
    }
?>