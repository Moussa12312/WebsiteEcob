<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
    <link rel="stylesheet" href="style.css">
    <title>Ecole de Business Bilingue</title>
</head>

<style type="text/css">

    body {
    margin: 0;
    padding: 0;
    }

    .menu_bar {
    background-color: rgb(17, 30, 69);
    height: 80px;
    width: 98.5%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 10px; 
    }

    p{
    font-size: 12pt;
    }

    .log {
    color: #fbfafa;
    font-size: 35px; 
    margin: 0;
    }

    .log span {
    color: crimson;
    font-size: 27;
    }

    .menu {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
    }


    .menu li {
    padding: 0 10px; 
    position: relative;
    }


    .menu li a {
    color: #f9f9f9;
    text-decoration: none;
    font-size: 18px; 
    transition: color 0.3s; 
    }

    .formation {
    display: none;
    position: absolute;
    background-color: rgb(17, 30, 69);
    width: 200px; 
    padding: 10px;
    }

    .formation li {
    margin: 5px 0;
    font-size:18px;
    }

    .menu li:hover > .formation { 
    display: block;
    }


    .menu li:hover > a {
    color: rgb(226, 69, 61);
    }

    /* menu responsive */
    /* @media(max-width: 1200px){

    } */

    .icon {
    display: none;
    cursor: pointer;
    }

    .Presentation{
        background-color: #42413f; 
        color: white;   
        padding-top: 50px ;   
    }

    .menu_bar .menu .info .formation li a{
        font-size: 18px; 
    }

    a{
        color:blue;
        text-decoration:none;
    }

    .formation li {
        margin: 5px 0;
        font-size: 14px;
    }

    .try{
        display: flex;
        margin-right: -100px;

    }

    .tro{
        justify-content:space-between;
        flex-wrap:wrap;
        font-size: 30pt;
        font-family:bell MT;
        color:black;
    }

    .tro .try .tru img{

        margin-left:150px;
        padding-top:-10px;
        width: 400px;
        height:250px;
        border-radius: 100px 70px 30px 70px;
    }

    .tro p{
        font-size:20px;
        margin-top:-45px;
    }

    .intro{
        background-color:white;
        text-align:left;      
        border :1px solid;
        padding-top:1px;
        border-color: white;
        border-radius:20%;     
        margin-left:170px;
        margin-right:200px;
        margin-bottom:90px;
        padding-right:90px;
        padding-left:70px; 
        
    }

    .intro img{
        text-align: left;
        padding-top:-40px;
        width: 60px;
        height: 50px;
    }

    /* .intr{
        background-color:white;
        border :1px solid;
        border-color: white;
        border-radius:20%;
        margin-left:170px;
        margin-right:250px;
        margin-bottom:90px;
        padding-right:90px;
        padding-left:70px; 
    }

    .int{
        border :1px solid;
        background-color:white;

        border-color: white;
        border-radius:20%;
        margin-left:170px;
        margin-right:250px;
        margin-bottom:90px;
        padding-right:90px;
        padding-left:70px;        
    } */

    .icon{
            display: flex;
            margin-right:10px;
            margin-top:-20px;
            font-size: 40px;
            text-align: right;
            align-items: center;
            background-color: black;
            display:none;
            
    }

/* ---Card deuxieme------- */

    .card {

        position: relative;
        width: 300px;
        height: 200px;
        background-color: #f2f2f2;
        border-radius: 10px;       
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        perspective: 1000px;
        box-shadow: 0 0 0 5px #ffffff80;
        transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  
    }

    .card img {
        width: 400px;
        fill: #333;
        transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(255, 255, 255, 0.2);
    }

    .card__content {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding: 20px;
        box-sizing: border-box;
        background-color: #f2f2f2;
        transform: rotateX(-90deg);
        transform-origin: bottom;
        transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .card:hover .card__content {
        transform: rotateX(0deg);
    }

    .card__title {
        margin: 0;
        font-size: 24px;
        color: #333;
        font-weight: 700;
    }

    .card:hover img {
        scale: 0;
    }

    .card__description {
        margin: 10px 0 0;
        font-size: 20px;
        color: black;
        /* line-height: 1.4; */
    }

    .card__description p{
        font-size: 1.5em;
    }

    .card{
        display:none;
    }

    .iconn .icon1 a{
        list-style:none;
        text-decoration:none;
    }
    /* --------Responsive--------- */
    @media screen and (max-width: 1000px){
        .try{
        display: block;
        }
        .tre{
            display: block;
        }
        .tra{
            display: block;
        }
        .tro{
            display:none;
        }
        .card{
            display:flex;
            margin-left:350px ;
        }
    }
    @media screen and (max-width: 969px){
        /* .menu_bar {
            flex-direction: column;
            align-items: center;
            display:flex;
        } */
        h1{
            font-size: 3em;
        }
        h3{
            font-size: 1.9em;
        }
        .menu li{
            display: none;
            width: 100%;
            text-align: center;
            padding: 0;
            font-size: 18px;
        }
        .icon{
            display: flex;
            margin-right: 10px;
            margin-left: 600px;
            margin-top:-20px;
            padding-top:-30px;
            font-size: 40px;
            text-align: right;
            align-items: center;
            background-color: wlite;
        }
        .icon i{
            margin-top:-20px
        }
    }
    @media screen and (max-width: 772px){
        .icon{
            display: flex;
            margin-right: 10px;
            margin-left: 300px;
            margin-top:-20px;
            padding-top:-30px;
            font-size: 40px;
            /*text-align: right;
            align-items: center;*/
            
        }
        .icon i{
            margin-top:-20px
        }
    }


</style>
<body>  
    <nav>
        <div class="menu_bar">
            
            <h5 class="log">ECOB<span>University </span></h5>
            
            
            <ul class="menu">
                <li><a href="website.php">ACCEUIL</a></li>

                <li class="info"><a href="#">INFORMATION</a>
                    <ul class="formation" style='font-size:18pxk'>
                        <li><a href="organi.php"><h6>Organigramme</h6></a></li>
                        <li><a href="presentation.php"><h6>Presentation</h6></a></li>
                        <li><a href="organisa.php"><h6>Organisation</h6></a></li>
                        <li><a href="regle.php"><h6>Reglement Interieur</h6></a></li>
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
                    
                <li><a href="inter.php">A PROPOS</a></li>

                <li><a href="contact.php">CONTACT</a></li>

                <li><a href="admission.php">ADMISSION</a></li>

                <div class="icon">
                    <i class='bx bx-menu bx-flip-horizontal' style='color:#eceef2' ></i>
                </div>
               
            </ul>    
            
        </div>
    </nav>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get icon and menu elements
            var menuIcon = document.getElementById('menuIcon');
            var menuItems = document.getElementById('menuItems');

            // Add click event listener to the icon
            menuIcon.addEventListener('click', function() {
                // Toggle the 'active' class on the menu items
                menuItems.classList.toggle('active');
            });
        });
    </script>

        <!-- photo principale de notre site web -->
    
        <div class="principale">
            <h1>Ecole de Business Bilingue </h1>
            <div class="trait1"></div>
            <h3>En marche vers l'excellence</h3>
        </div>

    <!-- presentation de l'entreprise ciblé -->

    <section class="Presentation">
    <div class="tro">
        <div class="try">
            <div class="tru">
                <img src="li.jpg" alt="photo1">
            </div>
            <div class="intro">       
                <h6><img src="looo.jpg" alt="" widht="30px" height="50px">DUT</h6>
                <p>DUT niveau bac +2</p>

                <br><p><a href="admission.php">  Inscrire <i class='bx bx-right-arrow-alt'></i></a></p>
            </div>
           
        </div>
        <div class="tre">
            <div class="try">
                <div class="tru">
                    <img src="ouy.jpg" alt="photo2">
                </div>
                <div class="intro">       
                    <h6><img src="looo.jpg" alt="" widht="30px" height="50px">LICENCE</h6>
                    <p>LICENCE niveau bac +3</p>

                    <br><p><a href="admission.php">  Inscrire <i class='bx bx-right-arrow-alt'></i></a></p>
                </div>
            </div>
        </div>
        <div class="tra">
            <div class="try">
                <div class="tru">
                    <img src="ali.jpg" alt="photo1">
                </div>
                <div class="intro">            
                    <h6><img src="looo.jpg" alt="" widht="30px" height="50px">MASTER</h6>
                    <p>MASTER niveau bac +5</p>

                    <br><p><a href="admission.php">  Inscrire <i class='bx bx-right-arrow-alt'></i></a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="tri">
        <div class="card">
             <img src="li.jpg" alt="tri">
        <div class="card__content">
            <p class="card__title">PROGRAMME</p>
            <p class="card__description"> 
                <h6><img src="looo.jpg" alt="" widht="30px" height="50px">DUT</h6>
                <p>DUT niveau bac +2</p>
                 <br><p><a href="admission.php">  Inscrire <i class='bx bx-right-arrow-alt'></i></a></p>
            </p>
        </div>
        </div>

    </div>
        
        <div class="prestation">
            <div class="image">
                <h4>Nous trouver</h4>
                <a href="https://goo.gl/maps/RuQvxx93xnmbQjmNA"><img src="photo/carte1.jpg" alt="sa" width="200px" height="200px"></a>
            </div>
             <div class="image">
                <h4>Fassade EcoB</h4>
                <a href="#"><img src="photo/photo1.jpg" alt="ext" width="200px" height="200px"></a>
            </div>
            <div class="image">
                <h4>Interieur EcoB</h4>
                <a href="#"><img src="photo/Picture1.jpg" alt="int" width="200px" height="200px"></a>
            </div>
        </div>
    </section>
    <!-- <section id="extra">
        <h2>Nos Voyage Extra...</h2>
        <ul>
            <li id="Siby"><p>Siby </p></li>
            <li id="Selingue"><p>Selingue </p></li>
            <li id="Koulikoro"><p>Koulikoro </p></li>            
        </ul><br>
       
    </section> -->
    <!-- <section id="inscri">
        <div class="cv">
            <h2>Rejoigner nous en cliquant ce lien <a href="admission.php" class="as">inscrire</a></h2><br>
            <a href="admission.php"><input type="submit" value="S'INSCRIR" class="env"></a>

        </div>


    </section> -->
    <footer>
        <div class="loo">
            <img src="looo.jpg" alt=" Ecob" width="90px" height="80px">
        </div>
        <div class="trait2"></div><br><br>
        <div class="iconn">
            <div class="icon1">
                <span>2024 groupeIgEcoB</span>
                <a href="https://www.facebook.com/ecob.debamako"><i class='bx bxl-facebook-circle'></i></a>
                <i class='bx bxl-linkedin-square'></i>
                <a href="https://www.instagram.com/invites/contact/?i=11phrapkdhqpj&utm_content=ugw91x6 "><i class='bx bxl-instagram' ></i></a>
                <a href=" https://wa.me/message/MCU26UUKD7XWK1 "><i class='bx bxl-whatsapp' ></i></a>
            </div>
            
        </div> 

    </footer>
</body>
</html>