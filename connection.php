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
                <button class="navig" onclick="window.location.href ='acceuil.php'">HOMME</button>
                <button class="navig" onclick="window.location.href ='contact.php'">FEMME</button>
                <button class="navig" onclick="window.location.href ='contact.php'">ENFANT</button>
               
            </div>

            <div class="element-search">
                <input type="search"  class="sch" placeholder="rechercher des articles et des marques">
                <i class="fa-solid fa-search"></i>
            </div>
            
            <div class="elements-icone">
                <button class="navig" onclick="window.location.href ='acceuil.php'"><i class="fa-solid fa-house"></i></button>
                <button class="navig" onclick="window.location.href ='contact.php'"><i class="fa-regular fa-heart"></i></button>
                <button class="navig" onclick="window.location.href ='contact.php'"><i class="fa-solid fa-bag-shopping"></i></button>
                <button class="navig" onclick="window.location.href ='contact.php'"><i class="fa-regular fa-user"></i></button>
                
                
            </div>

        </div>

        <div class="article">
            <button class="btn-navig">NOUVEAUTES</button>
            <button class="btn-navig">TAILLES</button>
            <button class="btn-navig">MARQUES</button>
            <button class="btn-navig">MARQUES</button>
            <button class="btn-navig">MARQUES</button>
            <button class="btn-navig">SELECTIONS</button>
            <button class="btn-navig">SELECTIONS</button>
            <button class="btn-navig">PROMOTIONS</button>
            <button class="btn-navig">PROMOTIONS</button>
        </div>
            
        
        <div class="elements">

            <div class="right-element">
                <form action="" method="GET">
                    <h4>CONNECTION</h4>
                    <hr>
                   
                   
                    <label>PSEUDO</label>
                    <input type="name" placeholder="entrez votre pseudo">

                    <label>MOT DE PASSE</label>
                    <input type="password" placeholder="entrer le mot de pass">
                    entrez le mot de passe enregistré lors de l'inscription
                    
                    <input type="submit" value="Se connecter">
                    <p>Vous n'avez pas encore un compte ? <a href="inscription.php">Inscription</a></p>

                </form>
            
            </div>

        </div>

        
       


    </div>
  
    
</body>
</html>