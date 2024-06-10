<?php
    $server='localhost';
    $dbname='ecob';
    $user='root';
    $password='';
    $port='3308';

    try{
        $data= new PDO("mysql:host=$server;port=$port;dbname=$dbname",$user, $password);
        echo "Connexion réussie ";
    }
    catch(PDOException $e){
        echo "Connexion échouée ".$e->getMessage();
    }

    if (isset($_POST['nom']) &&
        isset($_POST['prenom']) &&
        isset($_POST['email']) &&
        isset($_POST['phone']) && 
        isset($_POST['dte']) &&
        isset($_POST['nationalite']) &&
        isset($_POST['niveau_etude']) &&
        isset($_POST['formation'])) {
        
        $insertion = $data->prepare("INSERT INTO mission VALUES (:nom, :prenom, :email, :phone, :nationalite, :dte, :niveau_etude, :formation)");

        $insertion->bindValue(':nom', $_POST['nom']); 
        $insertion->bindValue(':prenom', $_POST['prenom']); 
        $insertion->bindValue(':email', $_POST['email']);
        $insertion->bindValue(':phone', $_POST['phone']);
        $insertion->bindValue(':nationalite', $_POST['nationalite']);
        $insertion->bindValue(':dte', $_POST['dte']);
        $insertion->bindValue(':niveau_etude', $_POST['niveau_etude']);
        $insertion->bindValue(':formation', $_POST['formation']);

        $verification = $insertion->execute();

        if ($verification) {
            echo "Insertion réussie";
        } else {
            echo "Échec de l'insertion";
        }
      
    }
    else{
        echo "Variables non déclarées, faites attention la prochaine fois";
    }
?>