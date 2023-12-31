<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
    
</head>

<body>

    <div class="container1">
        <div class="navbar">
            <div class="elements-btn">
                <button class="navig" onclick="window.location.href ='contact.html'">HOMME</button>
                <button class="navig" onclick="window.location.href ='contact.html'">FEMME</button>
                <button class="navig" onclick="window.location.href ='contact.html'">ENFANT</button>
               
            </div>

            <div class="element-search">
                <input type="search" class="sch" placeholder="rechercher des articles et des marques">
            </div>
            
            <div class="elements-icone">
          
                <div class="dropdown">
                    <button class="dropbtn" onclick="window.location.href ='contact.html'"><i class="fa-regular fa-user"></i></button>
                        <div class="dropdown-content">
                            <a href="modifier.php">Mon compte</a>
                            <a href="modifier.php">Mes commandes</a>
                            <a href="connection.php">Connexion</a>
                            <a href="inscription.php">Ceer un compte</a> 
                        </div>
  
                </div>
                <button class="dropbtn" onclick="window.location.href ='contact.html'"><i class="fa-regular fa-heart"></i></button>
                <button class="dropbtn" onclick="window.location.href ='contact.html'"><i class="fa-solid fa-bag-shopping"></i></button>
                
            </div>



        </div>

        <div class="article">
            <button class="btn-navig">NOUVEAUTES</button>
            <button class="btn-navig">TAILLES</button>
            <button class="btn-navig">MARQUES</button>
            <button class="btn-navig">COULEURS</button>
            <button class="btn-navig">MARQUES</button>
            <button class="btn-navig">TYPES</button>
            <button class="btn-navig">PRIX</button> 
        </div>

        <div class="acceuil">  
            <p class="titre">Nouveautes<br> costumes surmesure<br> a la mode</p>
            <button class="btn-change" onclick="window.location.href ='contact.html'">DECOUVRIR</button>
        </div>

        <div class="bottom-content">
            <div class="block-left">
                <p>
                <button class="navig" onclick="window.location.href ='contact.html'">HOMME</button>
                <button class="navig" onclick="window.location.href ='contact.html'">FEMME</button>
                <button class="navig" onclick="window.location.href ='contact.html'">ENFANT</button>

                </p>
 
            </div>
            <div class="block-center">

            </div>

            <div class="block-right">

            </div>

            <div class="block-left">

            </div>

        </div>

    </div>
    
</body>
</html>