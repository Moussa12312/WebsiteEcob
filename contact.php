<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
  <link rel="stylesheet" href="conta.css">
  <title>Document</title>
</head>
<body>
    <nav class="menu_bar1">
        <ul class="mail">
            <li class="mai"><i class='bx bx-envelope' ></i> Email: ecob@gmail.com</li>
            <li><i class='bx bxs-phone'></i>Contact: 67-66-66-37/77-66-66-37</li>
            <li><i class='bx bxs-map'></i>Localisation: SOTUBA ACI</li>
        </ul>
    </nav>
    <nav>
        <div class="menu_bar">
            
            <h5 class="log">ECOB<span>University </span></h5>
            
            
            <ul class="menu">
                <li><a href="website.php">ACCEUIL</a></li>

                <li class="info"><a href="#">INFORMATION</a>
                    <ul class="formation">
                        <li><a href="organi.php"><h6>Organigramme</h6></a></li>
                        <li><a href="presentation.php"><h6>Presentation</h6></a></li>
                        <li><a href="organisa.php"><h6>Organisation</h6></a></li>
                        <li><a href="regle.php"><h6>Reglement</h6></a></li>
                    </ul>
                </li>       
                <li><a href="formation.php">FORMATION</a>
                    <ul class="formation">
                        <li><a href="programme.php"><h6>DUT </h6></a></li>
                        <li><a href="licence.php"><h6>LICENCE </h6></a></li>
                        <li><a href="master.php"><h6>MASTER</h6></a></li>
                        <li><a href="anglais.php"><h6>ANGLAIS</h6></a></li>
                    </ul>
                </li>

                <li><a href="tarif.php">TARIF</a></li>
                    
                <li><a href="inter.php">A PROPOS</a></li>

                <li><a href="contact.php">CONTACT</a></li>

                <li><a href="admission.php">ADMISSION</a></li>

                <div class="icon">
                    <i class="fas fa-bars"></i> <!-- Font Awesome bars icon -->
                </div>
               
            </ul>    
            
        </div>
    </nav>
    <div class="principale">
        <div class="prince">
            <h1>NOUS CONTACTER </h1>
        </div>
      </div>

    <section>
    
        <h2>contacter-nous</h2>
        <form action="web.php" method="post">
            <input placeholder="Nom" name="nom"><br>
            <input placeholder="email" name="email"><br>
            <textarea placeholder="Votre message ici..."></textarea><br>
            <button>Envoyer</button>

        </form>
    </section>
</body>
</html>