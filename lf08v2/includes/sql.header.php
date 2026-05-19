<!DOCTYPE html>  
<html lang="de">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>LF08 v2</title>  
    <link rel="stylesheet" href="../includes/styles.css">
    <link rel="stylesheet" href="https://utensils.samwwilliam.de/highlight/styles/default.min.css">
    <script src="https://utensils.samwwilliam.de/highlight/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
    <link rel="stylesheet" href="../includes/font-awesome.min.css">
</head>

<?php 
$section_beginn = "<div class='section'>";
$section_ende = "</div>";
?>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/includes/database.php"); ?>

<body>
<div class="container">
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/includes/seitenleiste.php"); ?>

<div class="main-content">
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/includes/navigation.php"); ?>
<pre><code class="sql">