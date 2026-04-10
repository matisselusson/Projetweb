
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ESIEA</title>
        <link rel="icon" type="image/png" href="../PHOTO/myLogo.png">
        <!-- j'inclu du CSS avec des styles -->
        <style>
            /* 
            
            de manière schématique : 

            selecteur {
                propriété : valeur;
                propriété : valeur;
                propriété : valeur;
            }

            */

            div {
                color: black;
            }

            span {
                color: green;
            }


                .myheader {
                   

display: flex;
  justify-content: space-between;
  align-items: center;

  padding: 10px;
  border: 5px solid;
  border-color: #000000;

  background-color: grey;
}
            .imageheader {
  width: 100px;
  height: auto;
}

        </style>
    </head>
    <body>
        <header class="myheader"><div>
            <img src="../PHOTO/myLogo.png" als="logo" class="imageheader"></div><div>Bienvenue chez "Evil corp"</div><div>
            <a href="connexion.php"> <img src="../PHOTO/Login.png" als="Login" class="imageheader"></a></div></header>


    </body>
</html>