<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>MegaPlay | Filmes</title>

  <!-- MDB icon -->
  <link rel="icon" href="img/brands/favicon.png" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!--Slick-->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <link rel="stylesheet" href="css2/mdb.min.css" />
  <!-- PRISM -->
  <link rel="stylesheet" href="dev/css/new-prism.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/style.css" />
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
        <img id="MDB-logo" src="img/brands/logo.png" alt="MDB Logo" draggable="false" style="width: 70%;" />
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
              <li><a class="dropdown-item" href="profile.php">Meu Perfil</a></li>
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
          "img" => "img01.jpg",
          "title" => "Filme 1",
          "text" => "lorem ispum dolor sit amet"
        ],  [
          "img" => "img01.jpg",
          "title" => "filme 2",
          "text" => "lorem ispum dolor sit amet"
        ],  [
          "img" => "img01.jpg",
          "title" => "filme 3",
          "text" => "lorem ispum dolor sit amet"
        ]

      ];
      $count = 1;

      foreach ($BGSlide as $BGList) {
      ?>




        <div class="banner-geral" style="background-image: url('img/<?php echo $BGList['img'] ?>');">
          <div class="artist-banner-gradient">
            <div class="artist-banner-container container-fluid">
              <!----------photo-->
              <div class="artist-banner-photo">

              </div>
              <!---------fim photo-->
              <!---------box-->
              <div class="banner-box container-fluid">
                <h1><?php echo $BGList['title'] ?></h1>
                <br>
                <div class="artist-banner-controls">
                  <button type="button" class="btn btn-danger btn-floating btn-artist"><i class="fas fa-play"></i></button>
                  <button type="button" class="btn btn-danger btn-floating btn-artist"><i class="far fa-heart"></i></button>
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
    <section class="section-1">

      <!--title carousel top-->
      <!--include -->
      <div class="text-single">
        <h1>Continuar Assistindo</h1>

      </div>

      <!--fim title carousel top-->
      <div class="hr"></div>

      <!------------------------CAROUSEL top------------------------>
      <div style="margin-bottom: 50px;" class="slider-1 container-fluid">

        <!--slide php -->
        <?php

        $HeadSlide = [
          [
            "img" => "avenged.png",
            "app" => "so far away",
            "dev" => "avenged sevenfold",
            "rev" => "fas fa-star"
          ],  [
            "img" => "nirvana.jpg",
            "app" => "come as you are",
            "dev" => "nirvana",
            "rev" => "fas fa-star"
          ],  [
            "img" => "oasis.png",
            "app" => "wonderwall",
            "dev" => "oasis",
            "rev" => "fas fa-star"
          ],  [
            "img" => "alice.jpg",
            "app" => "man in the box",
            "dev" => "alice in chains",
            "rev" => "fas fa-star"
          ],  [
            "img" => "metallica.jpg",
            "app" => "fade to black",
            "dev" => "metallica",
            "rev" => "fas fa-star"
          ],  [
            "img" => "rock.jpg",
            "app" => "melhores do rock",
            "dev" => "",
            "rev" => "fas fa-star"
          ],  [
            "img" => "red.jpg",
            "app" => "californication",
            "dev" => "red hot chili pepers",
            "rev" => "fas fa-star"
          ]

        ];
        $count = 1;

        foreach ($HeadSlide as $slide) {
        ?>

          <!--item 1-->
          <div  class="section-1-box ripple" data-mdb-ripple-color="light">
            <div class="section-1-box-banner" style="background-image: url('img/photo-music/<?php echo $slide['img'] ?>');">
              <!--conteudo-->
              <a class="pages/film.php" data-mdb-ripple-color="dark">
                <div class="box-photo-content">
                </div>
              </a>
              <!--fim conteudo-->
            </div>
        </div>
          <!--fim item 1-->
        <?php
          $count++;
        }
        ?>

        <!--slide php -->
      </div>
      <!--FIM CAROUSEL-->
      <!-----------------------------fim CAROUSEL top---------------------------------------->

      <!-- *********slide mini 1**********-->
      <div class="text-single2">
        <h1>filmes mais recomendados</h1>
      </div>

      <!--fim title carousel top-->
      <div class="hr"></div>
      <!--slide php -->
      <div class="slider-2 container-fluid">
        <?php

        $SlideFilm1 = [
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
          ],[
            "img" => "ate.webp"
          ],  [
            "img" => "creed.webp"
          ],  [
            "img" => "john.webp"
          ]

        ];
        $count = 1;

        foreach ($SlideFilm1 as $FilmList1) {
        ?>
          <!--item 1-->
          <a href="pages/film.php" class="section-1-box ripple" data-mdb-ripple-color="light">
            <div class="section-1-box-film">
              <img src="img/brands/films/<?php echo $FilmList1['img'] ?>" alt="">
            </div>
        </a>
          <!--fim item 1-->
        <?php
          $count++;
        }
        ?>

      </div>
      <!--slide php -->
      <!-- **********fim slide mini 1********** -->
      <!-- *********slide mini 2**********-->
      <div class="text-single2">
        <h1>filmes populares</h1>
      </div>

      <!--fim title carousel top-->
      <div class="hr"></div>
      <!--slide php -->
      <div class="slider-2 container-fluid">
        <?php

        $SlideFilm2 = [
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
          ],[
            "img" => "ate.webp"
          ],  [
            "img" => "creed.webp"
          ],  [
            "img" => "john.webp"
          ]

        ];
        $count = 1;

        foreach ($SlideFilm2 as $FilmList2) {
        ?>
          <!--item 1-->
            <a href="pages/film.php" class="section-1-box ripple" data-mdb-ripple-color="light">
              <div class="section-1-box-film">
                <img src="img/brands/films/<?php echo $FilmList2['img'] ?>" alt="">
              </div>
        </a>
            <!--fim item 1-->

          <?php
          $count++;
        }
          ?>

      </div>
      <!--slide php -->
      <!-- **********fim slide mini 2********** -->
      <!-- *********slide mini 3**********-->
      <div class="text-single2">
        <h1>filmes mais avaliados</h1>
      </div>

      <!--fim title carousel top-->
      <div class="hr"></div>
      <!--slide php -->
      <div class="slider-2 container-fluid">
        <?php

        $SlideFilm3 = [
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
          ],[
            "img" => "ate.webp"
          ],  [
            "img" => "creed.webp"
          ],  [
            "img" => "john.webp"
          ]
        ];
        $count = 1;

        foreach ($SlideFilm3 as $FilmList3) {
        ?>
          <!--item 1-->
          <a href="pages/film.php" class="section-1-box ripple" data-mdb-ripple-color="light">
            <div class="section-1-box-film">
              <img src="img/brands/films/<?php echo $FilmList3['img'] ?>" alt="">
            </div>
        </a>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

      </div>
      <!--slide php -->
      <!-- **********fim slide mini 3********** -->

      <!-- *********slide mini 4**********-->
      <div class="text-single2">
        <h1>filmes mais assistidos</h1>
      </div>
      <div class="hr"></div>
      <!--slide php -->
      <div class="slider-2 container-fluid">
        <?php

        $SlideFilm4 = [
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
          ],[
            "img" => "ate.webp"
          ],  [
            "img" => "creed.webp"
          ],  [
            "img" => "john.webp"
          ]

        ];
        $count = 1;

        foreach ($SlideFilm4 as $FilmList4) {
        ?>
          <!--item 1-->
          <a href="pages/film.php" class="section-1-box ripple" data-mdb-ripple-color="light">
            <div class="section-1-box-film">
              <img src="img/brands/films/<?php echo $FilmList4['img'] ?>" alt="">
            </div>
        </a>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

      </div>
      <!--slide php -->
      <!-- **********fim slide mini 4********** -->
      <!-- *********slide mini 5**********-->
      <div class="text-single2">
        <h1>filmes de suspense</h1>
      </div>
      <div class="hr"></div>
      <!--slide php -->
      <div class="slider-2 container-fluid">
        <?php

        $SlideFilm5 = [
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
          ],[
            "img" => "ate.webp"
          ],  [
            "img" => "creed.webp"
          ],  [
            "img" => "john.webp"
          ]

        ];
        $count = 1;

        foreach ($SlideFilm5 as $FilmList5) {
        ?>
          <!--item 1-->
          <a href="pages/film.php" class="section-1-box ripple" data-mdb-ripple-color="light">
            <div class="section-1-box-film">
              <img src="img/brands/films/<?php echo $FilmList5['img'] ?>" alt="">
            </div>
        </a>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

      </div>
      <!--slide php -->
      <!-- **********fim slide mini 5********** -->
      <!-- *********slide mini 6**********-->
      <div class="text-single2">
        <h1>filmes de terror</h1>
      </div>
      <div class="hr"></div>
      <!--slide php -->
      <div class="slider-2 container-fluid">
        <?php

        $SlideFilm6 = [
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
          ],[
            "img" => "ate.webp"
          ],  [
            "img" => "creed.webp"
          ],  [
            "img" => "john.webp"
          ]

        ];
        $count = 1;

        foreach ($SlideFilm6 as $FilmList6) {
        ?>
          <!--item 1-->
          <a href="pages/film.php" class="section-1-box ripple" data-mdb-ripple-color="light">
            <div class="section-1-box-film">
              <img src="img/brands/films/<?php echo $FilmList6['img'] ?>" alt="">
            </div>
        </a>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

      </div>
      <!--slide php -->
      <!-- **********fim slide mini 6********** -->

      <!-- *********slide mini 7**********-->
      <div class="text-single2">
        <h1>séries mais populares</h1>
      </div>
      <div class="hr"></div>
      <!--slide php -->
      <div class="slider-2 container-fluid">
        <?php

        $SlideFilm7 = [
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
          ],[
            "img" => "ate.webp"
          ],  [
            "img" => "creed.webp"
          ],  [
            "img" => "john.webp"
          ]

        ];
        $count = 1;

        foreach ($SlideFilm7 as $FilmList7) {
        ?>
          <!--item 1-->
          <a href="pages/serie.php" class="section-1-box ripple" data-mdb-ripple-color="light">
            <div class="section-1-box-film">
              <img src="img/brands/films/<?php echo $FilmList7['img'] ?>" alt="">
            </div>
        </a>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

      </div>
      <!--slide php -->
      <!-- **********fim slide mini 7********** -->
      <!-- *********slide mini 8**********-->
      <div class="text-single2">
        <h1>séries mais populares</h1>
      </div>
      <div class="hr"></div>
      <!--slide php -->
      <div class="slider-2 container-fluid">
        <?php

        $SlideFilm8 = [
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
          ],[
            "img" => "ate.webp"
          ],  [
            "img" => "creed.webp"
          ],  [
            "img" => "john.webp"
          ]

        ];
        $count = 1;

        foreach ($SlideFilm8 as $FilmList8) {
        ?>
          <!--item 1-->
          <a href="pages/serie.php" class="section-1-box ripple" data-mdb-ripple-color="light">
            <div class="section-1-box-film">
              <img src="img/brands/films/<?php echo $FilmList8['img'] ?>" alt="">
            </div>
        </a>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

      </div>
      <!--slide php -->
      <!-- **********fim slide mini 8********** -->
      <!-- *********slide mini 9**********-->
      <div class="text-single2">
        <h1>séries mais avaliadas</h1>
      </div>

      <!--fim title carousel top-->
      <div class="hr"></div>
      <!--slide php -->
      <div class="slider-2 container-fluid">
        <?php

        $SlideFilm9 = [
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
          ],[
            "img" => "ate.webp"
          ],  [
            "img" => "creed.webp"
          ],  [
            "img" => "john.webp"
          ]

        ];
        $count = 1;

        foreach ($SlideFilm9 as $FilmList9) {
        ?>
          <!--item 1-->
          <a href="pages/serie.php" class="section-1-box ripple" data-mdb-ripple-color="light">
            <div class="section-1-box-film">
              <img src="img/brands/films/<?php echo $FilmList9['img'] ?>" alt="">
            </div>
        </a>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

      </div>
      <!--slide php -->
      <!-- **********fim slide mini 9********** -->
      <!-- *********slide mini 10**********-->
      <div class="text-single2">
        <h1>séries de suspense</h1>
      </div>

      <!--fim title carousel top-->
      <div class="hr"></div>
      <!--slide php -->
      <div class="slider-2 container-fluid">
        <?php

        $SlideFilm10 = [
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
          ],[
            "img" => "ate.webp"
          ],  [
            "img" => "creed.webp"
          ],  [
            "img" => "john.webp"
          ]

        ];
        $count = 1;

        foreach ($SlideFilm10 as $FilmList10) {
        ?>
         <!--item 1-->
         <a href="pages/serie.php" class="section-1-box ripple" data-mdb-ripple-color="light">
            <div class="section-1-box-film">
              <img src="img/brands/films/<?php echo $FilmList10['img'] ?>" alt="">
            </div>
        </a>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

      </div>
      <!--slide php -->
      <!-- **********fim slide mini 10********** -->

      <!-- *********slide mini 11**********-->
      <div class="text-single2">
        <h1>séries de ficção</h1>
      </div>

      <!--fim title carousel top-->
      <div class="hr"></div>
      <!--slide php -->
      <div class="slider-2 container-fluid">
        <?php

        $SlideFilm11 = [
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
          ],[
            "img" => "ate.webp"
          ],  [
            "img" => "creed.webp"
          ],  [
            "img" => "john.webp"
          ],[
            "img" => "ate.webp"
          ],  [
            "img" => "creed.webp"
          ],  [
            "img" => "john.webp"
          ]

        ];
        $count = 1;

        foreach ($SlideFilm11 as $FilmList11) {
        ?>
          <!--item 1-->
          <a href="pages/serie.php" class="section-1-box ripple" data-mdb-ripple-color="light">
            <div class="section-1-box-film">
              <img src="img/brands/films/<?php echo $FilmList11['img'] ?>" alt="">
            </div>
        </a>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

      </div>
      <!--slide php -->
      <!-- **********fim slide mini 11********** -->

      <!-- *********slide mini 12**********-->
      <div class="text-single2">
        <h1>séries de romance</h1>
      </div>

      <!--fim title carousel top-->
      <div class="hr"></div>
      <!--slide php -->
      <div class="slider-2 container-fluid">
        <?php

        $SlideFilm12 = [
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
          ],[
            "img" => "ate.webp"
          ],  [
            "img" => "creed.webp"
          ],  [
            "img" => "john.webp"
          ]

        ];
        $count = 1;

        foreach ($SlideFilm12 as $FilmList12) {
        ?>
         <!--item 1-->
         <a href="pages/serie.php" class="section-1-box ripple" data-mdb-ripple-color="light">
            <div class="section-1-box-film">
              <img src="img/brands/films/<?php echo $FilmList12['img'] ?>" alt="">
            </div>
        </a>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

      </div>
      <!--slide php -->
      <!-- **********fim slide mini 12********** -->
    </section>
    </div>
  </section>
  <!--Main layout-->




  <!--<script src="js/player.js"></script>-->
  <!-- ---------------------SCRIPTS----------------------- -->
  <!-- PRISM -->
  <script type="text/javascript" src="dev/js/new-prism.js"></script>
  <!-- MDB SNIPPET -->
  <script type="text/javascript" src="dev/js/dist/mdbsnippet.min.js"></script>
  <!-- jsMDB -->
  <script type="text/javascript" src="js2/mdb2.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>


  <!--Slick JS-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>
  <script type="text/javascript">
    $('.slider-1').slick({
      dots: false,
      infinite: false,
      speed: 300,
      autoplay: false,
      slidesToShow: 6,
      slidesToScroll: 1,
      responsive: [{
          breakpoint: 1700,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        },
        {
          breakpoint: 1100,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        },
        {
          breakpoint: 768,
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
    $('.slider-2').slick({
      dots: false,
      infinite: false,
      speed: 300,
      autoplay: false,
      slidesToShow: 7,
      slidesToScroll: 1,
      responsive: [{
          breakpoint: 1700,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 1300,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1
           
          }
        },

        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
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