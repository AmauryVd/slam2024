<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio</title>
</head>
<body>
<nav>
    <ol>
      <a  href="index.php#accueil">Accueil</a>
      <a  href="index.php#Apropos">A propos</a>
      <a  href="index.php#competences">Compétences</a>
      <a  href="index.php#experience">Expérience</a>
      <a  href="index.php#contact">Contact</a>    
    </ol>
   </nav>

   <main>
   <section id="accueil">
      <h1>PORTFOLIO</h1>
      <a name="accueil">Accueil</a>
      <div class='elm'>
   <p align="center"></p>
   <!--<img class="photodemoi" src="moi.jpg"         !!!!!!!              -->
</div>
     <a name="Apropos">A Propos</a>

<!--php A propos -->     
    <?php  
    
   $data=yaml_parse_file('apropos.yml');
    
           echo '<p>'.$data['sujet']['description'].'</p>';
            
        foreach($data['sujet']['description'] as $paragraphe){
            echo '<p>'.$paragraphe.'</p>';
        }
    ?>

     <a name="competences">Compétences</a>

<!-- php Competences -->
    <?php
        $content=file_get_contents('competences.yaml');
        $yamlContent=yaml_parse_file($content);
        $competences=$yamlContent['competences'][0];
        $competences2=$yamlContent['competences'][1];
        $competences3=$yamlContent['competences'][2];
        $competences4=$yamlContent['competences'][3];
        $competences5=$yamlContent['competences'][4];
            echo "<ul class='elm'>";
            echo "<li>$competences</li>";
            echo "<li>$competences2</li>";
            echo "<li>$competences3</li>";
            echo "<li>$competences4</li>";
            echo "<li>$competences5</li>";
            echo "</ul>";
    ?>


<a name="experience">Expérience</a>
<div class='elm'>

<!-- php Experiences -->
<?php
$content=file_get_contents('competenceyaml.yaml');
        $yamlContent=yaml_parse_file($content);
        $competences=$yamlContent['Experiences'];
        $experiencepro=$yamlContent['stages'][0];
        $experiencepro2=$yamlContent['stages'][1];
        echo  $competences=$yamlContent['Experiences'];
        echo "<ul>";
        echo "<li>$experiencepro</li>";
        echo "<li>$experiencepro2</li>";  
        echo "</ul>"
        ?>
</div>

<a name="contact">Contact</a>
<div class='elm'>

<?php
$competences=$yamlContent['formulaire'];
echo $yamlContent["formulaire"]["texteformlaire"];
?>

<form name="mon-formulaire1" action="page-envoi.php" method="post">
<p>
   Votre prénom :<br />
   <input type="text" name="prenom" value="" />
</p>
<p>
   Votre nom :<br />
   <input type="text" name="nom" value="" />
</p>
<p>
   Votre adresse mail :<br />
   <input type="text" name="mail" value="" />
</p>
<p>
   Votre objet :<br />
   <input type="text" name="objet" value="" />
</p>
<p>
   Votre message :<br />
   <textarea name="message" rows="6" cols="40">...</textarea>
</p>
<p>
   <input type="submit" value="Envoyer" />
   <input type="reset" value="Annuler" />
</p>
</form>

<?php
$content=file_get_contents('competenceyaml.yaml');
        $yamlContent=yaml_parse_file($content);
        $competences=$yamlContent['formulaire'];
        echo '<img id="logoformulaire" src="'.$yamlContent["formulaire"]["image"].'" />';
        $content=file_get_contents('competenceyaml.yaml');
        $yamlContent=yaml_parse_file($content);
?>
    </div>
    </main>
</body>
</html>