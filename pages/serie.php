<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>MegaPlay | Série</title>

    <!-- MDB icon -->
    <link rel="icon" href="../img/brands/favicon.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!--Slick-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css" />
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <link rel="stylesheet" href="../css2/mdb.min.css" />
    <!-- PRISM -->
    <link rel="stylesheet" href="../dev/css/new-prism.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="../css/style.css" />
    <style>
        @media (min-width: 1400px) {

            main,
            header,
            #main-navbar {
                padding-left: 240px;
            }
        }
    </style>
</head>

<body>
    <!--Main Navigation-->
    <header>
        <!-- ****** inicio Sidenav left ******* -->
        <div id="sidenav-left-2" class="sidenav bg-sidenav width-sidenav" role="navigation" data-hidden="false" data-accordion="true">
            <a class="ripple d-flex justify-content-center py-4" href="#!" data-ripple-color="danger">
                <img id="MDB-logo" src="../img/brands/logo.png" alt="MDB Logo" draggable="false" style="width: 70%;" />
            </a>

            <ul class="sidenav-menu">
                <!--item 0-->
                <li class="sidenav-item">
                    <a class="sidenav-link"><i class="fab fa-buffer icon-sidenav"></i><span class="item-sidenav">Entreterimento</span></a>
                    <ul class="sidenav-collapse">
                        <li class="sidenav-item">
                            <a href="" class="sidenav-link item-sidenav sidenav-module">Apps&Jogos</a>
                        </li>
                        <li class="sidenav-item">
                            <a href="" class="sidenav-link item-sidenav sidenav-module">Filmes</a>
                        </li>
                        <li class="sidenav-item">
                            <a href="" class="sidenav-link item-sidenav sidenav-module">Música</a>
                        </li>
                    </ul>
                </li>
                <!-- fim item 0-->
                <li class="sidenav-item">
                    <!--item 1-->
                    <a class="sidenav-link link-active" href="index.php">
                        <i class="fas fa-home icon-sidenav "></i><span class="item-sidenav">INÍCIO</span></a>
                </li>
                <!--fim item 1 -->
                <!--item 2-->
                <li class="sidenav-item">
                    <a class="sidenav-link "><i class="fas fa-list icon-sidenav"></i><span class="item-sidenav">CATEGORIAS</span></a>
                    <ul class="sidenav-collapse">
                        <li class="sidenav-item">
                            <a href="category.php" class="sidenav-link item-sidenav sidenav-module">Drama</a>
                        </li>
                        <li class="sidenav-item">
                            <a href="category.php" class="sidenav-link item-sidenav sidenav-module">Suspense</a>
                        </li>
                        <li class="sidenav-item">
                            <a href="category.php" class="sidenav-link item-sidenav sidenav-module">Terror</a>
                        </li>
                        <li class="sidenav-item">
                            <a href="category.php" class="sidenav-link item-sidenav sidenav-module">Séries</a>
                        </li>
                        <li class="sidenav-item">
                            <a href="category.php" class="sidenav-link item-sidenav sidenav-module">Comédia</a>
                        </li>
                        <li class="sidenav-item">
                            <a href="category.php" class="sidenav-link item-sidenav sidenav-module">Romântico</a>
                        </li>
                        <li class="sidenav-item">
                            <a href="category.php" class="sidenav-link item-sidenav sidenav-module">Documentários</a>
                        </li>
                    </ul>
                </li>
                <!-- fim item 2-->


            </ul>
        </div>
        <!-- ******* fim Sidenav left ******* -->

        <!-- ******* inicio Navbar top ***** -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-sidenav fixed-top height-sidenav">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggler -->
                <button data-toggle="sidenav" data-target="#sidenav-left-2" class="btn shadow-0 p-0 mr-3 d-block d-xxl-none" aria-controls="#sidenav-left-2" aria-haspopup="true">
                    <i class="fas fa-bars fa-lg"></i>
                </button>

                <!-- Search form -->
                <form class="d-none d-md-flex input-group w-auto my-auto form-source-control">
                    <input autocomplete="off" type="search" class="form-control form-source-control rounded src-color" placeholder='Pesquise por música, álbum ou artista' style="min-width: 350px" />
                    <button class="input-group-text border-0 btn-submit"><i class="fas fa-search"></i></button>
                </form>

                <!-- Right links -->
                <ul class="navbar-nav ml-auto d-flex flex-row">
                    <!-- Avatar -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="square-photo" height="35" alt="" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">My profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                    <!--fim avatar-->
                    <!-- Icon -->
                    <li class="nav-item">
                        <a class="nav-link mr-3 mr-lg-0" href="#">
                            <span>Suzana Vieira</span>
                        </a>
                    </li>
                    <!-- Icon -->
                </ul>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- ******** fim Navbar top ********* -->
    </header>
    <!-- ------------------- fm Main Navigation--------------------- -->

    <!--Main layout-->
    <!-- initial carousel -->
    <div class="container-fluid container-fluid-gradient">
        <!--********************Artist banner************-->
        <div class="slider-banner">
            <?php

            $BGSlide = [
                [
                    "img" => "img05.jpg",
                ],  [
                    "img" => "img05.jpg",
                ],  [
                    "img" => "img05.jpg",
                ]

            ];
            $count = 1;

            foreach ($BGSlide as $BGList) {
            ?>


                <div class="banner-geral" style="background-image: url('../img/<?php echo $BGList['img'] ?>');">
                    <div class="artist-banner-gradient">
                        <div class="artist-banner-container container">
                            <!--close -->
                            <div class="modal-container-close">
                                <div class="modal-header">
                                    <h5 class="modal-title title-modal" id="ModalMusicLabel"></h5>
                                    <button type="button" class="btn-closeX" data-mdb-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <!-- fim close -->

                            <!----------photo-->
                            <div class="artist-banner-photo">
                                <a><i class="fas fa-play"></i></a>
                            </div>
                            <!---------fim photo-->
                            <!---------box-->
                            <div class="artist-banner-box container">
                                <div class="artist-content">
                                    <div class="content-business">
                                        <img src="img/brands/films/logo-hbo.jpg" alt="">
                                        <p>HBO</p>
                                    </div>
                                    <h1>game of thrones</h1>
                                    <h2>ação drama aventura</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nulla, consequatu similique voluptatibus.</p>
                                    <div class="artist-logo-play2">
                                        <button style="margin-right: 15px;" type="button" class="btn btn-secondary btn-starter" data-mdb-dismiss="modal">
                                            Play
                                        </button>
                                        <button type="button" class="btn btn-secondary btn-starter" data-mdb-dismiss="modal">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--------fim box-->
                        </div>
                    </div>
                </div>

            <?php
                $count++;
            }
            ?>
        </div>


        <!--****************fim Artist banner****************-->
    </div>
    <!-- initial carousel -->
    <section class="body-main">
        <div class="page-app-container">
            <div class="page-app-geral">

                <div class="container-fluid container-fluid-gradient">
                    <!--********************Artist banner************-->
                    <div class="artist-banner-geral" style="background-image: url('../img/img05.jpg ');">
                        <div class="artist-banner-gradient gradient-modal">

                        </div>
                    </div>
                    <!--****************fim Artist banner****************-->
                </div>
                <div class="page-app-container-md">
                    <!-- *********slide mini 1**********-->
                    <div class="text-single">
                        <h1>Temporadas</h1>
                    </div>

                    <!--fim title carousel top-->
                    <div class="hr"></div>
                    <!--slide php -->
                    <div class="slider-film container">
                        <?php

                        $SlideContent = [
                            [
                                "img" => "serie-1.jpg",
                                "temp" => "temporada 1",
                                "ep" => "10 episódios",
                                "rate" => "4,5"
                            ],  [
                                "img" => "serie-2.jpg",
                                "temp" => "temporada 2",
                                "ep" => "10 episódios",
                                "rate" => "4,6"
                            ],  [
                                "img" => "serie-3.jpg",
                                "temp" => "temporada 3",
                                "ep" => "10 episódios",
                                "rate" => "4,5"
                            ],  [
                                "img" => "serie-4.jpg",
                                "temp" => "temporada 4",
                                "ep" => "13 episódios",
                                "rate" => "4,9"
                            ],  [
                                "img" => "serie-5.png",
                                "temp" => "temporada 5",
                                "ep" => "12 episódios",
                                "rate" => "4,8"
                            ],  [
                                "img" => "serie-6.jpg",
                                "temp" => "temporada 6",
                                "ep" => "9 episódios",
                                "rate" => "4,7"
                            ],  [
                                "img" => "serie-7.jpg",
                                "temp" => "temporada 7",
                                "ep" => "10 episódios",
                                "rate" => "4,7"
                            ]

                        ];
                        $count = 1;

                        foreach ($SlideContent as $ContentList) {
                        ?>
                            <!--item 1-->
                            <div class="section-1-box ripple" data-ripple-color="light">
                                <div style="margin-bottom: 8px;" class="section-1-box-film" style="margin-bottom: 8px;">
                                    <img src="../img/brands/films/<?php echo $ContentList['img'] ?>" alt="">
                                </div>
                                <div class="serie-txt">
                                    <h1><?php echo $ContentList['temp'] ?></h1>
                                    <p style="color: #dd2476;"><?php echo $ContentList['ep'] ?></p>
                                    <p><?php echo $ContentList['rate'] ?><span style="margin-left: 5px;"><i class="fas fa-star"></i></span></p>
                                </div>
                            </div>
                            <!--fim item 1-->


                        <?php
                            $count++;
                        }
                        ?>

                    </div>
                    <!--slide php -->
                    <!-- **********fim slide mini 1********** -->

                    <!-- *********slide mini 2**********-->
                    <div class="text-single">
                        <h1>Episódios</h1>
                    </div>

                    <!--fim title carousel top-->
                    <div class="hr"></div>
                    <!--slide php -->
                    <div class="slider-ep container">
                        <?php

                        $SlideTwoContent = [
                            [
                                "img" => "ate.webp",
                                "name" => "Episódio 1",
                                "role" => "nome do episódio"
                            ],  [
                                "img" => "creed.webp",
                                "name" => "Episódio 2",
                                "role" => "nome do episódio"
                            ],  [
                                "img" => "john.webp",
                                "name" => "Episódio 3",
                                "role" => "nome do episódio"
                            ],  [
                                "img" => "lobo.webp",
                                "name" => "Episódio 4",
                                "role" => "nome do episódio"
                            ],  [
                                "img" => "resgate.webp",
                                "name" => "Episódio 5",
                                "role" => "nome do episódio"
                            ],  [
                                "img" => "tintin.webp",
                                "name" => "Episódio 6",
                                "role" => "nome do episódio"
                            ],  [
                                "img" => "venom.webp",
                                "name" => "Episódio 7",
                                "role" => "nome do episódio"
                            ]

                        ];
                        $count = 1;

                        foreach ($SlideTwoContent as $TwoContentList) {
                        ?>
                            <!--item 1-->
                            <div class="section-1-box ripple" data-ripple-color="light">
                                <div class="box-ep" style="background-image: url('../img/brands/films/<?php echo $TwoContentList['img'] ?>');">
                                </div>
                                <div class="ep-content">
                                    <div class="ep-text">
                                        <h1><?php echo $TwoContentList['name'] ?></h1>
                                        <p><?php echo $TwoContentList['role'] ?></p>
                                    </div>
                                    <div class="ep-play">
                                        <a href="#"><i class="fas fa-play"></i></a>
                                    </div>

                                </div>
                            </div>
                            <!--fim item 1-->

                        <?php
                            $count++;
                        }
                        ?>

                    </div>
                    <!--slide php -->
                    <!-- **********fim slide mini 2********** -->



                    <!-- *********slide mini 3**********-->
                    <div class="text-single">
                        <h1>Elenco</h1>
                    </div>

                    <!--fim title carousel top-->
                    <div class="hr"></div>
                    <!--slide php -->
                    <div class="slider-film container">
                        <?php

                        $SlideThreeContent = [
                            [
                                "img" => "ate.webp",
                                "name" => "Tom",
                                "role" => "ator principal"
                            ],  [
                                "img" => "creed.webp",
                                "name" => "Tom",
                                "role" => "ator principal"
                            ],  [
                                "img" => "john.webp",
                                "name" => "Tom",
                                "role" => "ator principal"
                            ],  [
                                "img" => "lobo.webp",
                                "name" => "Tom",
                                "role" => "ator principal"
                            ],  [
                                "img" => "resgate.webp",
                                "name" => "Tom",
                                "role" => "ator principal"
                            ],  [
                                "img" => "tintin.webp",
                                "name" => "Tom",
                                "role" => "ator principal"
                            ],  [
                                "img" => "venom.webp",
                                "name" => "Tom",
                                "role" => "ator principal"
                            ]

                        ];
                        $count = 1;

                        foreach ($SlideThreeContent as $ThreeContent) {
                        ?>
                            <!--item 1-->
                            <div class="section-1-box ripple" data-ripple-color="light">
                                <div class="section-1-box-film" style="margin-bottom: 8px;">
                                    <img src="../img/brands/films/<?php echo $ThreeContent['img'] ?>" alt="">
                                </div>
                                <div class="cast-role">
                                    <h1><?php echo $ThreeContent['name'] ?></h1>
                                    <p><?php echo $ThreeContent['role'] ?></p>
                                </div>
                            </div>
                            <!--fim item 1-->

                        <?php
                            $count++;
                        }
                        ?>

                    </div>
                    <!--slide php -->
                    <!-- **********fim slide mini 3********** -->
                    <div class="page-app-container" style="margin-top: 45px; padding: 0 2%;">
                        <div class="container-data">
                            <!--box1 -->
                            <div class="data-box">
                                <div class="data-icon">
                                    <i class="fas fa-server"></i>
                                </div>
                                <div class="data-text">
                                    <h1>tamanho do aplicativo</h1>
                                    <p>250MB</p>
                                </div>
                            </div>
                            <!--fim box1 -->
                            <!--box2 -->
                            <div class="data-box">
                                <div class="data-icon">
                                    <i class="fas fa-server"></i>
                                </div>
                                <div class="data-text">
                                    <h1>title</h1>
                                    <p>text</p>
                                </div>
                            </div>
                            <!--fim box2 -->
                            <!--box3 -->
                            <div class="data-box">
                                <div class="data-icon">
                                    <i class="fab fa-android"></i>
                                </div>
                                <div class="data-text">
                                    <h1>versão do software</h1>
                                    <p>7.1 ou mais</p>
                                </div>
                            </div>
                            <!--fim box3 -->
                        </div>
                        <h1>Minha avaliação</h1><br>
                        <!-- rate user -->
                        <div class="page-app-feed">
                            <!-- user-->
                            <div class="row-app-feed">
                                <div class="feed-user">
                                    <div class="feed-user-photo">
                                        <img src="../img/photo-artist/user.jpg" alt="">
                                    </div>
                                    <div class="feed-user-text star-avalia">
                                        <h1>fulano da silva</h1>
                                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                    </div>
                                </div>
                                <div class="feed-icons star-avalia">
                                    <a href="" style="margin:0 5px;"><i class="fas fa-trash"></i></a>
                                    <a href="" style="margin:0 5px;"><i class="fas fa-pen"></i></a>
                                </div>
                            </div>
                            <!--fim user-->
                            <div class="row-app-comment">
                                <div class="comment">
                                    <div class="form-outline">
                                        <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
                                    </div>
                                    <button style="margin: 15px 0;" type="button" class="btn btn-secondary btn-starter" data-mdb-dismiss="modal">
                                        PUBLICAR
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- fim rate user -->
                        <!--rate -->
                        <div class="rate-container">
                            <div class="rate-row">
                                <!--box -->
                                <div class="rate-box">
                                    <div class="rate-name">
                                        <div class="feed-user">
                                            <div class="feed-user-photo">
                                                <img src="../img/photo-artist/user.jpg" alt="">
                                            </div>
                                            <div class="feed-user-text">
                                                <h1>fulano da silva</h1>
                                                <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                            </div>
                                        </div>
                                        <div class="feed-icons">
                                            <div class="dropdown">
                                                <button class="dropdown-toggle btn btnfeed btn-floating" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item btn-options" href="#">Action</a></li>
                                                    <li><a class="dropdown-item btn-options" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item btn-options" href="#">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-txt">
                                        <p>lorem lorem lorem lorem loreeem ugfuyfv wwfwegs efweewgee</p>
                                    </div>

                                </div>
                                <!--fim box -->
                                <!--box 2-->
                                <div class="rate-box">
                                    <div class="rate-name">
                                        <div class="feed-user">
                                            <div class="feed-user-photo">
                                                <img src="../img/photo-artist/user.jpg" alt="">
                                            </div>
                                            <div class="feed-user-text">
                                                <h1>fulano da silva</h1>
                                                <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                            </div>
                                        </div>
                                        <div class="feed-icons">
                                            <div class="dropdown">
                                                <button class="dropdown-toggle btn btnfeed btn-floating" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item btn-options" href="#">Action</a></li>
                                                    <li><a class="dropdown-item btn-options" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item btn-options" href="#">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-txt">
                                        <p>lorem lorem lorem lorem loreeem ugfuyfv wwfwegs efweewgee</p>
                                    </div>

                                </div>
                                <!--fim box 2-->
                                <!--box 3 -->
                                <div class="rate-box">
                                    <div class="rate-name">
                                        <div class="feed-user">
                                            <div class="feed-user-photo">
                                                <img src="../img/photo-artist/user.jpg" alt="">
                                            </div>
                                            <div class="feed-user-text">
                                                <h1>fulano da silva</h1>
                                                <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                            </div>
                                        </div>
                                        <div class="feed-icons">
                                            <div class="dropdown">
                                                <button class="dropdown-toggle btn btnfeed btn-floating" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item btn-options" href="#">Action</a></li>
                                                    <li><a class="dropdown-item btn-options" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item btn-options" href="#">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-txt">
                                        <p>lorem lorem lorem lorem loreeem ugfuyfv wwfwegs efweewgee</p>
                                    </div>

                                </div>
                                <!--fim box 3-->
                            </div>
                            <div class="rate-row">
                                <!--box -->
                                <div class="rate-box">
                                    <div class="rate-name">
                                        <div class="feed-user">
                                            <div class="feed-user-photo">
                                                <img src="../img/photo-artist/user.jpg" alt="">
                                            </div>
                                            <div class="feed-user-text">
                                                <h1>fulano da silva</h1>
                                                <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                            </div>
                                        </div>
                                        <div class="feed-icons">
                                            <div class="dropdown">
                                                <button class="dropdown-toggle btn btnfeed btn-floating" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item btn-options" href="#">Action</a></li>
                                                    <li><a class="dropdown-item btn-options" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item btn-options" href="#">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-txt">
                                        <p>lorem lorem lorem lorem loreeem ugfuyfv wwfwegs efweewgee</p>
                                    </div>

                                </div>
                                <!--fim box -->
                                <!--box 2-->
                                <div class="rate-box">
                                    <div class="rate-name">
                                        <div class="feed-user">
                                            <div class="feed-user-photo">
                                                <img src="../img/photo-artist/user.jpg" alt="">
                                            </div>
                                            <div class="feed-user-text">
                                                <h1>fulano da silva</h1>
                                                <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                            </div>
                                        </div>
                                        <div class="feed-icons">
                                            <div class="dropdown">
                                                <button class="dropdown-toggle btn btnfeed btn-floating" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item btn-options" href="#">Action</a></li>
                                                    <li><a class="dropdown-item btn-options" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item btn-options" href="#">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-txt">
                                        <p>lorem lorem lorem lorem loreeem ugfuyfv wwfwegs efweewgee</p>
                                    </div>

                                </div>
                                <!--fim box 2-->
                                <!--box 3 -->
                                <div class="rate-box">
                                    <div class="rate-name">
                                        <div class="feed-user">
                                            <div class="feed-user-photo">
                                                <img src="../img/photo-artist/user.jpg" alt="">
                                            </div>
                                            <div class="feed-user-text">
                                                <h1>fulano da silva</h1>
                                                <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                            </div>
                                        </div>
                                        <div class="feed-icons">
                                            <div class="dropdown">
                                                <button class="dropdown-toggle btn btnfeed btn-floating" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item btn-options" href="#">Action</a></li>
                                                    <li><a class="dropdown-item btn-options" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item btn-options" href="#">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-txt">
                                        <p>lorem lorem lorem lorem loreeem ugfuyfv wwfwegs efweewgee</p>
                                    </div>

                                </div>
                                <!--fim box 3-->
                            </div>
                        </div>
                        <!--fim rate -->


                    </div>
                    <!-- *********slide mini 3**********-->
                    <div class="text-single">
                        <h1>Semelhantes</h1>
                    </div>

                    <!--fim title carousel top-->
                    <div class="hr"></div>
                    <!--slide php -->
                    <div class="slider-film container">
                        <?php

                        $SlideFourContent = [
                            [
                                "img" => "ate.webp"
                            ],  [
                                "img" => "creed.webp"
                            ],  [
                                "img" => "john.webp"
                            ],  [
                                "img" => "lobo.webp"
                            ],  [
                                "img" => "resgate.webp"
                            ],  [
                                "img" => "tintin.webp"
                            ],  [
                                "img" => "venom.webp"
                            ]

                        ];
                        $count = 1;

                        foreach ($SlideFourContent as $FourContent) {
                        ?>
                            <!--item 1-->
                            <div class="section-1-box ripple" data-mdb-ripple-color="light">
                                <div class="section-1-box-film">
                                    <img src="../img/brands/films/<?php echo $FourContent['img'] ?>" alt="">
                                </div>
                            </div>
                            <!--fim item 1-->

                        <?php
                            $count++;
                        }
                        ?>

                    </div>
                    <!--slide php -->
                    <!-- **********fim slide mini 3********** -->
                </div>
            </div>
        </div>

    </section>

    <!--Main layout-->




    <!--<script src="js/player.js"></script>-->
    <!-- ---------------------SCRIPTS----------------------- -->
    <!-- PRISM -->
    <script type="text/javascript" src="../dev/js/new-prism.js"></script>
    <!-- MDB SNIPPET -->
    <script type="text/javascript" src="../dev/js/dist/mdbsnippet.min.js"></script>
    <!-- jsMDB -->
    <script type="text/javascript" src="../js2/mdb2.min.js"></script>
    <script type="text/javascript" src="../js/mdb.min.js"></script>


    <!--Slick JS-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>
    <script type="text/javascript">
        $('.slider-initial').slick({
            dots: true,
            infinite: true,
            arrows: false,
            fade: true,
            speed: 200,
            cssEase: 'linear',
            autoplay: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
    <script type="text/javascript">
        $('.slider-banner').slick({
            dots: false,
            infinite: true,
            arrows: false,
            fade: true,
            speed: 200,
            cssEase: 'linear',
            autoplay: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
    <script type="text/javascript">
        $('.slider-film').slick({
            dots: false,
            infinite: true,
            speed: 200,
            autoplay: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1300,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: false
                    }
                },

                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: false
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
    <script type="text/javascript">
        $('.slider-ep').slick({
            dots: false,
            infinite: true,
            speed: 200,
            autoplay: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: false
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>


    <!-- Custom scripts -->
    <script type="text/javascript">
        const sidenavleft = document.getElementById("sidenav-left-2");
        const instance = mdb.Sidenav.getInstance(sidenavleft);

        let innerWidth = null;

        const setMode = (e) => {
            // Check necessary for Android devices
            if (window.innerWidth === innerWidth) {
                return;
            }

            innerWidth = window.innerWidth;

            if (window.innerWidth < 1400) {
                instance.changeMode("over");
                instance.hide();
            } else {
                instance.changeMode("side");
                instance.show();
            }
        };

        setMode();

        // Event listeners
        window.addEventListener("resize", setMode);
    </script>
</body>

</html>