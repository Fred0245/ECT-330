<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de l'entreprise</title>

    <style>

body{
    padding: 0px;
    margin: 0px;
    text-align: center;
    background-image: url('../FICHIERS_CSS_PROJET/bg2.png');

}
input{
    margin-right: 100px;
    margin-bottom: 30px;
    margin-left: 100px;
    height: 30px;
    width: 300px;
    position: relative;
}
form{
    display: inline;

}
input[type='submit']{
    margin: 20px;
}



input:hover{
    border-bottom: 4px solid green;
    position: relative;
}
#btn_connexion{
    background-color: green;
    width: 300px;
    margin: 40px;
    font-size: 20px;
    border-radius: 5px;
    border: none;

}

#btn_connexion:hover{
    background-color: orange;
    box-shadow: 10px 10px 10px gray;
    cursor: pointer;



}
#btn_annuler_compte{
    background-color: red;
    width: 300px;
    margin: 40px;
    font-size: 20px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
}
a{
    text-decoration: none;
    color: white;
    background-color: blue;
    padding: 10px 20px;
    cursor: pointer;

}
#latitude{
    margin-left: 220px;
    height: 30px;
    width: 200px;
}
#longitude{
    margin-right: 220px;
    height: 30px;
    width: 200px;
}
a:hover{
    box-shadow: 2px 5px 7px black;
}
#btn_connexion,#btn_annuler_compte{
    height: 40px;
}




    </style>

</head>

<body>

    <div>


        <form action="" method="POST" id="form">
            <h2>Informations de l'entreprise</h2>

            <input type="text" name="nom_entreprise" id="nom_entreprise" placeholder="nom de l'Entreprise">
            <input type="text" name="type_entreprise" id="type_entreprise" placeholder="type d'Entreprise"><br>

            <input type="email" name="email_entreprise" id="email_entreprise" placeholder="Email de l'Entreprise">
            <input type="password" name="password_entreprise" id="password_entreprise" placeholder="Mot De Passe"><br>

            <input type="text" name="pays_entreprise" id="pays_entreprise" placeholder="Votre Pays">
            <input type="text" name="ville_entreprise" id="ville_entreprise"
                placeholder="Votre Ville d'emplacement"><br>


            <input type="number" name="latitude" id="latitude" placeholder="la latitude de l'entreprise" step="any">
            <a href="https://www.coordonnees-gps.fr/" target="_blank">Recherche coordonnées</a>
            <input type="number" name="longitude" id="longitude" placeholder="la longitude de l'Entreprise"
                step="any"><br>

            <input type="text" name="contact_entreprise" id="contact_entreprise" placeholder="Contact de l'entreprise">
            <input type="number" name="boite_postal" id="boite_postal" placeholder="Boite Postal BP :">
            <br>
            <textarea rows="10" cols="80" name="description_entreprise"
                placeholder="une pétite description"></textarea><br>


            <!-- boutton d'enregistrement d'une entreprise -->
            <input type="submit" name="enregistrement" value="Créer" id="btn_connexion">

        </form>

        <!-- boutton d'annulation de conception d'une entrprise -->
        <form action="" method="POST">
            <input type="submit" name="annulation_création_compte" value="annuler la création" id="btn_annuler_compte">

        </form>


    </div>




</body>

</html>
