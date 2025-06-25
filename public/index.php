<?php
include "pages/pages.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="static/css/style.css" />
    <title>Validation System</title>
</head>
<body>
    <header>
    <?php
    
    foreach($paginas as $key => $value){
        echo "<a href='?page=$key'>".ucfirst($key)."</a>";
    }
    
    ?>
    <button id="tema">Trocar tema</button>
    </header>
    <section>
    <?php
    
    $pagina = (isset($_GET["page"]) ? $_GET["page"] : "home");
    
    if(!array_key_exists($pagina, $paginas)){
        $pagina = "home";
    }
    
    echo $paginas[$pagina];
    
    ?>
    </section>
    <script src="static/js/tema.js"></script>
</body>
</html>
