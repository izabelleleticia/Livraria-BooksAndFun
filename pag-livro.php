<!DOCTYPE html> <!--Tag para identificar o HTML5-->
<html lang="pt-br"> <!--Linguagem da página-->
 
<head>
    <meta charset="UTF-8"> <!--Padronização da língua-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Autoriza a codificação para responsividade-->
    <!-- <link rel="shortcut icon" href="img/logo_077.png" type="image/x-icon"> -->
    <title>Home - BooksAndFun</title> <!--Titulo da Guia-->
    <!--RESET SEMPRE O PRIMEIRO LINK-->
    <link rel="stylesheet" href="css/reset.css">
 
    <!--Animação do Carrossel Slick-->
 
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
 
     <!--Animação do video-->
    <link rel="stylesheet" href="css/lity.css">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
       
    <!--MINHA FOLHA DE ESTILO SEMPRE SERÁ O ÚLTIMO LINK-->
    <link rel="stylesheet" href="css/estilo.css">
</head>
 
<body>
    <header>
<?php require_once('conteudo/menu.php');?>
    </header>
<main>
<?php require_once('conteudo/pg-livro.php');?>

</main>