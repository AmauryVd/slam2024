<?php
$content=file_get_contents('yaml.yaml');
$yamlContent=yaml_parse($content);
$competences=$yamlContent['compétences'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<ul class='elm'>";
    foreach($competences as $comp){
        echo "<li>$comp</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
