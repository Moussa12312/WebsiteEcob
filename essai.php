<?php
if (isset($_POST['nom']) &&
        isset($_POST['prenom']) &&
        isset($_POST['email']) &&
        isset($_POST['phone']) && 
        isset($_POST['dte']) &&
        isset($_POST['nationalite']) &&
        isset($_POST['niveau_etude']) &&
        isset($_POST['formation'])) {
        try{
            $insertion = $data->prepare("INSERT INTO mission 
            VALUES (:nom,:prenom,:email,:phone,:nationalite,:dte,:niveau_etude,:formation,)");

            $insertion->bindValue(':nom', $_POST['nom']); 
            $insertion->bindValue(':prenom', $_POST['prenom']); 
            $insertion->bindValue(':email', $_POST['email']);
            $insertion->bindValue(':phone', $_POST['phone']);
            $insertion->bindValue(':nationalite', $_POST['nationalite']);
            $insertion->bindValue(':dte', $_POST['dte']);
            $insertion->bindValue(':niveau_etude', $_POST['niveau_etude']);
            $insertion->bindValue(':formation', $_POST['formation']);

            $insertion->execute();
            $verification = $insertion->rowCount();

            if ($verification) {
                echo "Insertion réussie";
            } else {
                echo "Échec de l'insertion";
            }
        }

        catch(PDOException $e){
            echo " <br> Erreur verifier vos donnees".$e->getMessage();
        }

    }
    else{
        echo" <br> Variables non declarer faite attention la prochaine fois";
    }
    ?>
