<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@500&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>./assets/css/style.css"> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">

    <title>Prueba Productos</title>
</head>

<body>
    <header class="header">
        <div class="container-fluid gx-5 py-3">
            <div class="row">
                <div class="header_bar col-2">
                    <a href="#" class="text-warning">
                        <img class="logo" src="<?php echo get_template_directory_uri();?>/assets/img/icon-menu.svg" alt="menu icon">
                    </a>
                </div>
                <div class="logo col-5 col-md-2 px-2 px-md-4">
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/basket.svg" width="50%" alt="logo">
                    </a>
                </div>
                <div class="header_menu col-6 col-md-5 text-center">
                    <ul>
                        <li class="header__item current"><a href="#">Todos</a></li>
                        <li class="header__item"><a href="#">Productos</a></li>
                        <li class="header__item"><a href="#">Otros</a></li>
                    </ul>
                </div>
                <div class="header_card col-5 col-md-1">
                    <a href="#" class="registro">
                        Registrate
                    </a>
                    <a href="#" class="header__link active">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/header-empty-card.svg" alt="cart">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main class="container">
        <div class="container">