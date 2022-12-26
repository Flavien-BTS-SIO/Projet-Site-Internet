<!DOCTYPE html>
<html lang="fr">
<section class ="contact"></section>
<head>
  <meta charset="utf-8">
  <title>Contact</title>
 
  <?
  
  $AdresseMail="flavien.jarry@sts-sio-caen.info";

if(isset($_POST['envoyer'])) {
    
    if(empty($_POST['mail'])) {
        echo "Le champ mail est vide";
    } else {
        
      if(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i",$_POST['mail'])){
            echo "L'adresse mail entrée est incorrecte";
        }else{
            
            if(empty($_POST['sujet'])) {
                echo "Le champ sujet est vide";
            }else{
                
                if(empty($_POST['message'])) {
                    echo "Le champ message est vide";
                }else{
                    
                    
                    $Entetes = "MIME-Version: 1.0\r\n";
                    $Entetes .= "Content-type: text/html; charset=UTF-8\r\n";
                    $Entetes .= "From: Nom de votre site <".$_POST['mail'].">\r\n";
                    $Entetes .= "Reply-To: Nom de votre site <".$_POST['mail'].">\r\n";
                    
                    $Mail=$_POST['mail']; 
                    $Sujet='=?UTF-8?B?'.base64_encode($_POST['sujet']).'?=';
                    $Message=htmlentities($_POST['message'],ENT_QUOTES,"UTF-8");
                    
                    if(mail($AdresseMail,$Sujet,nl2br($Message),$Entetes)){
                        echo "Le mail à été envoyé avec succès!";
                    } else {
                        echo "Une erreur est survenue, le mail n'a pas été envoyé";
                    }
                }
            }
        }
    }
}

?>
<div class=color>
    <section class=card-contact></br>
    <h3>Vous souhaitez me contacter ?</h3></br>
    <form action="contact.php" method="post">
    Mail: <input type="text" name="mail" value="" />
    <br />
    Sujet: <input type="text" name="sujet" value="" />
    <br />
    Message: <textarea name="message" cols="40" rows="20"></textarea>
    <br />
    <input type="submit" name="envoyer" value="Envoyer" />
  </form>
    </section>
</div>

</html>



