<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <title>Formulaire post</title>
    </head>
    <body>
       
        
            <form action="cible.php" method="post" enctype="multipart/form-data" >
             <ul>
                  
              <li> <label for=""> Prenom : <input type="text" name="prenom"/> </label></li> <br />
              <li> <label for="">Nom : <input type="text" name="nom"/> </label></li> <br />
              <li> <label for="">Age: <input type="text" name="age"/> </label></li> <br />
              <li> <label for="sexe">sexe : <input type="radio" name="sexe" value="homme" id="homme"/> 
                    <label for="homme">Homme</label>  
                    <input type="radio" name="sexe" value="femme" id="femme" /> <label for="femme">femme</label> </label></li> <br />
              <li> <label for="">ville : <input type="text" name="ville"/> </label></li>  <br />
              <li> <label for="">loisirs:</label></li> <br >
               <li> <label for=""> Boxe </label> <input type="checkbox" name="loisirs" value="boxe"/>  </li>
                <li> <label for=""> Musculation</label> <input type="checkbox" name="loisirs" id="" value="musculation" />   </li>
                <li> <label for="">Basket</label> <input type="checkbox" name="loisirs" id="" value="basket" /></li>
               <li> <label for=""> Cinéma</label> <input type="checkbox" name="loisirs" id="" value="cinema" />  </li> 
               <li><input type="submit" name="cible.php" id="" value="valider" /></li>  <br>

            </form>
            <form action="cible_fichier.php" method="post" enctype="multipart/form-data">
                
            </form>
               <li> <input type="file" name="fichier" id="" value="" /></li><br>
                <li><input type="submit" id="" value="Envoyer le fichier"/></li><br >
             </ul>
            </form>



    </body>
</html>
