<!DOCTYPE html">
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Accueil" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css" text="text/css">
    <script type="text/javascript" src="contact.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <title>Folio</title>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<body>



<?php
$pageAllowed = ["accueil", "competence", "experience", "formation","contact","apropos"];
$page = isset($_GET["page"]) ? $_GET["page"] : "accueil";


include_once("menu.php");
include_once($page.'.php');    



        ?>


</body>

</html>