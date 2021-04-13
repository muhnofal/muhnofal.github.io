<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Portfolio</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <style>


        .video{
            width: 100%;
            padding-right: 5px;
        }

        .carousel-indicators{
            position: static;
        }

        .certi-desc{
            font-size: 12px;
        }

        .certificate-image{
              width: 100%;
        }

        .project-image{
            filter: drop-shadow(2px 2px 5px black);
            width: 100%
        }

        /* // Small devices (landscape phones, 576px and up) */
        @media (min-width: 320px) {
            .title{
                font-family: MADE TOMMY Outline;
                font-size: 50px;
                margin-top: 20px;
            }

            .project-title{
                font-size: 18px;
                text-align: center;
             }

            .project-desc{
                font-size: 12px;
                text-align: center;
            }

            .desc{
                font-size: 12px;
            }

        }

            /* // Small devices (landscape phones, 576px and up) */
        @media (min-width: 576px) {
            .title{
                font-family: MADE TOMMY Outline;
                font-size: 70px;
            }
        }

            /* // Medium devices (tablets, 768px and up) */
        @media (min-width: 768px) {
            .title{
                font-family: MADE TOMMY Outline;
                font-size: 55px;
                padding-right: 20px;
          }

          
          .certificate-image{
                width: 60%;
            }

        }

            /* // Large devices (desktops, 992px and up) */
        @media (min-width: 992px) {
            .title{
                font-family: MADE TOMMY Outline;
                font-size: 70px;
                padding-right: 15px;
           }
        }

            /* Extra large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) {
            .title{
                font-family: MADE TOMMY Outline;
                font-size: 70px;
                padding-left: 20px;
            }

            .certificate-image{
                width: 50%;
            }

            .desc{
                font-size: 20px;
            }

            .project-title{
                font-size: 25px;
                text-align: left;
            }

            .project-desc{
                font-size: 15px;
                text-align: left;
            }

        }

    </style>

</head>
<body>
    
<!-- navbar -->

<div class="container-fluid" style="background-color: #161E22">
  <nav class="navbar navbar-expand-md navbar-dark bg-transparent">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="video-portfolio.php">Video - portfolio</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="it-portfolio.php">IT - portfolio</a>
        </li>
      </ul>

    </div>
  </nav>
</div>

<!-- navbar -->

<!-- certificate -->
<div class="container-fluid" style="background-color: #161E22; color: white;">
    <div class="container pb-5 pt-3" style="color: white">
        <!-- Certificate -->
        <div class="row mx-md-n5">
        
            <div class="col-md-12 justify-content-center align-self-center text-center" style="color: #C3C3C3">
                <h1 class="title">Certificate</h1>

                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            
                            <div class="carousel-item active">
                                <img src="assets/certi-1.png" class="d-block certificate-image " alt="..." style="margin: auto;">
                                
                                <div class="mt-3">
                                    <h5>Sertifikat Kelulusan Dicoding</h5>
                                    <p class="certi-desc">Mempelajari tentang bahasa Kotlin sebagai bahasa untuk memulai pembuatan aplikasi android</p>
                                </div>

                            
                            </div>

                            <div class="carousel-item">
                                <img src="assets/certi-2.png" class="d-block certificate-image" alt="..." style="margin: auto;">
                                <div class="mt-3">
                                    <h5>Sertifikat Kelulusan Dicoding</h5>
                                    <p class="certi-desc">Mempelajari tentang prinsip SOLID, berguna untuk menyempurnakan penulisan code</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                            <img src="assets/certi-3.png" class="d-block certificate-image justify-content-center center" alt="..." style="margin: auto;">
                                <div class="mt-3">
                                    <h5>Sertifikat Kelulusan Dicoding</h5>
                                    <p class="certi-desc">Mempelajari tentang dasar - dasar membuat aplikasi android sederhana dengan Android Studio</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                            <img src="assets/certi-4.png" class="d-block certificate-image justify-content-center center" alt="..." style="margin: auto;">
                                <div class="mt-3">
                                    <h5>Sertifikat Kelulusan Dicoding</h5>
                                    <p class="certi-desc"> Mempelajari Pembuatan aplikasi dengan kesulitan menengah </p>
                                </div>
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                        </ol>

                    </div>
            
            </div>

        </div>
    </div>
</div>
<!-- certificate -->

<!-- it portfolio -->
<div class="container-fludi" style="background-color: #F8F8F8;">
    <div class="container pb-5 pt-3">
        
        <div class="row mx-md-n5">
            <div class="col-md-12 justify-content-center align-self-center text-center" style="color: #161E22">
                <h1 class="title">Project</h1>
                <p class="mt-3 desc"> Berikut adalah beberapa project kecil yang pernah saya buat</p>
            
            </div>
        </div>

        <!-- project 1 -->
        <div class="row mx-md-n5 mt-3 pl-3 pr-3">

            <div class="col-md-6 pl-4 justify-content-center align-self-center">
                <video autobuffer preload="auto" controls class="video card-img-top">
                        <source src="assets/lets-edit.mp4" type="video/mp4">
                        <source src="assest/lets-edit.ogg" type="video/ogg">
                        Your browser does not support HTML video.
                </video>
            </div>

            <div class="col-md-6 mt-3 pr-4 justify-content-center align-self-center" style="color: #161E22;">
                <h4 class="card-text project-title"> Let's Edit </h4>
                <p class="project-desc">Let's Edit adalah aplikasi untuk menemukan layanan video editor. Dalam proyek ini saya yang mimpin timnya, saya dibagian mendesain UI aplikasi dan juga yang mengimplementasikannya di aplikasi (Android studio). Project ini tuh pas saya semester 4, dan tentunya aplikasinya masih jelek banget </p>
            </div>

        </div>
        <!-- project 1 -->

        <!-- project 2 -->
        <div class="row mx-md-n5 mt-5 pl-3 pr-3">

            <div class="col-md-6 pl-4 order-md-6 justify-content-center align-self-center">
                <img src="assets/beeflix.png" alt="" class="project-image">
            </div>

            <div class="col-md-6 mt-3 pr-4 justify-content-center align-self-center" style="color: #161E22;">
                <h4 class="card-text project-title"> Beeflix </h4>
                <p class="project-desc">Beeflix adalah proyek ujian tengah semester yang diberikan waktu 1 minggu untuk penyelesaiannya. Dalam proyek ini saya menggunakan framework Laravel PHP, framework CSS Bootstrapp dan menggunakan MySQL untuk databasenya</p>
            </div>

        </div>
        <!-- project 2 -->

        <!-- project 3 -->
        <div class="row mx-md-n5 mt-5 pl-3 pr-3 mb-5">

            <div class="col-md-6 pl-4 justify-content-center align-self-center">
                <iframe width="560" height="315" class="video card-img-top" src="https://www.youtube.com/embed/0V9TR1TZQOo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="col-md-6 mt-3 pr-4 justify-content-center align-self-center" style="color: #161E22;">
                <h4 class="card-text project-title"> Plants vs Zombie </h4>
                <p class="project-desc">Project ini adalah project akhir membuat game. Disini saya bersama tim mengambil game plants vs zombie, kemudian kami meremakenya dengan menambah beberapa fitur. Salah satu fitur yang kami tambahkan adalah skill tanaman. Setiap tanaman memiliki skill, sehingga ketika kita menekan tanaman tersebut, maka tanaman tersebut bisa mengeluarkan skill.</p>
            </div>

        </div>
        <!-- project 3 -->

        <div class="row mx-md-n5" style="margin-top: 10%">
            <div class="col-md-12 justify-content-center align-self-center text-center" style="color: #161E22">
                <h1 class="font-weight-bold github-text"> GITHUB </h1>
                <a href="https://github.com/muhnofal?tab=repositories" target="_blank"> <img src="assets/github-icon.png" alt="" class="mt-3 github-icon"> </a> 
                <p class="mt-4 github-desc"> Dan masih ada beberapa project yang saya upload di github, jika berkenan silahkan mampir</p>
            </div>
        </div>

    </div>
</div>
<!-- it portfolio -->

<!-- copyright -->
<div class="container-fluid" style="background-color: #161E22">

  <div class="container" style="color: white">

    <div class="row mx-md-n5">
      
      <div class="col-md-12 text-center" style="color: #C3C3C3">
        <p class="mt-3">© 2021, M. Naufal</p>
      </div>

    </div>


  </div>
    
</div>
<!-- copyright -->


</body>
</html>