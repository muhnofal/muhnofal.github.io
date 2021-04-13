<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Portfolio</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<style>

    .video{
        width: 100%;
        padding-right: 5px;
    }

    iframe{
        display: block;
        border-style: none;
        width: 250px;
        height: 250px;
        margin: 0 auto;
    }

    /* // Small devices (landscape phones, 576px and up) */
    @media (min-width: 320px) {
    
        .title{
            font-family: MADE TOMMY Outline;
            font-size: 50px;
            margin-top: 20px;
        }

        .desc{
            font-size: 12px;
        }

        .video-title{
            font-size: 18px;
            text-align: center;
        }

        .video-desc{
            font-size: 12px;
            text-align: center;
        }

        .instagram-desc{   
            font-size: 12px;
            text-align: center;
        }

        .instagram-image{
            width: 75px;
        }

        .itsme-image{
            width: 50%;
        }

        .itsme-desc{
            font-size: 13px;
        }

        .youtube-image{
            width: 75px;
        }

        
        .break{
            display: none;
        }

    }

        /* // Small devices (landscape phones, 576px and up) */
    @media (min-width: 576px) {
        
        .title{
            font-family: MADE TOMMY Outline;
            font-size: 70px;
        }

        .desc{
            font-size: 18px;
        }

        .youtube-video{
            width: 80%
        }
        

    }

        /* // Medium devices (tablets, 768px and up) */
    @media (min-width: 768px) {
        .title{
            font-family: MADE TOMMY Outline;
            font-size: 55px;
            padding-right: 20px;
        }

        .desc{
            font-size: 12px;
            padding-right: 10px;
        }
        
        p{
            font-size: 15px;
        }

        .youtube-video{
            width: 100%
        }

        /* .video-title{
            font-size: 25px;
            text-align: left;
        }

        .video-desc{
            font-size: 15px;
            text-align: left;
        } */
        

    }

        /* // Large devices (desktops, 992px and up) */
    @media (min-width: 992px) {

        .title{
            font-family: MADE TOMMY Outline;
            font-size: 70px;
            padding-right: 15px;
        }

        .desc{
            font-size: 15px;
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

        .desc{
            font-size: 15px;
            padding-left: 20px;
        }

        .video-title{
            font-size: 25px;
            text-align: left;
        }

        .video-desc{
            font-size: 15px;
            text-align: left;
        }

        .instagram-desc{   
            font-size: 20px;
            text-align: center;
        }

        .instagram-image{
            margin-top: 30px;
            width: 100px;
        }

        .itsme-image{
            width: 60%;
        }

        .itsme-desc{
            font-size: 15px;
        }

        .youtube-video{
            width: 100%
        }

        .break{
            display: block;
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
        <li class="nav-item active">
          <a class="nav-link" href="video-portfolio.php">Video - portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="it-portfolio.php">IT - portfolio</a>
        </li>
      </ul>

    </div>
  </nav>
</div>

<!-- navbar -->

<!-- video gabut -->

<div class="container-fluid" style="background-color: #161E22; color: white;">
    <div class="container pb-5 pt-3" style="color: white">

        <!-- video gabut -->
        <div class="row mx-md-n5">
        
            <div class="col-md-12 justify-content-center align-self-center text-center" style="color: #C3C3C3">
                <h1 class="title"> Video Gabut </h1>
                <p class="mt-3 desc"> Video Gabut adalah video yang saya bikin durasinya sekitar 1 menitan. Konteksnya bisa apa ajah, bisa berupa video berstory atau buat gegayaan doang. Sesekali saya suka ikut kontes video 1 menitan, ya walaupun gk pernah menang :'). Saya biasa upload video gabut itu di Instagram.</p>
            
            </div>

        </div>
        <!-- video gabut -->

        <!-- video1 -->
        <div class="row mx-md-n5 mt-3 pl-3 pr-3">

            <div class="col-md-6 pl-4 justify-content-center align-self-center">
                <video autobuffer preload="auto" controls class="video card-img-top">
                        <source src="assets/video1.mp4" type="video/mp4">
                        <source src="assest/video1.ogg" type="video/ogg">
                        Your browser does not support HTML video.
                </video>
            </div>

            <div class="col-md-6 mt-3 pr-4 justify-content-center align-self-center" style="color: #C3C3C3;">
                <h4 class="card-text video-title"> "Rubik's Cube" </h4>
                <p class="video-desc">Video ini saya terinspirasi dari anime Monogatari. Iya saya terinspirasi dari anime, orang mah biasanya terinspirasi dari film ini malah anime.</p>
                <p class="video-desc">Video ini menjelaskan bagaimana seseorang yang belum pernah main rubik. Emang idenya agak aneh dan simple banget, tapi yang saya tekankan disini adalah parody dari anime Monogatarinya.</p>
            </div>

        </div>
        <!-- video1 -->

        <!-- video2 -->
        <div class="row mx-md-n5 mt-5 pl-3 pr-3">

            <div class="col-md-6 pl-4 order-md-6 justify-content-center align-self-center">
                <video autobuffer preload="auto" controls class="video card-img-top">
                        <source src="assets/video2.mp4" type="video/mp4">
                        <source src="assest/video2.ogg" type="video/ogg">
                        Your browser does not support HTML video.
                </video>
            </div>

            <div class="col-md-6 mt-3 pr-4 justify-content-center align-self-center" style="color: #C3C3C3;">
                <h4 class="card-text video-title"> "Coding" </h4>
                <p class="video-desc">Video ini terinspirasi ketika saya baru pertama kali belajar coding, susah weh, akhirnya saya bikinlah video tentang diri saya yg error mulu klo ngoding</p>
                <p class="video-desc">Video ini menjelaskan bagaimana seseorang (saya) sedang kesusahan dengan codingnya, alias error mulu, akhirnya dia pun memutuskan mabar daripada ngoding, ehe.</p>
            </div>

        </div>
        <!-- video2 -->

        <!-- instagram -->
        <div class="row mt-5 justify-content-center" style="color: #C3C3C3;">
          <a href="https://www.instagram.com/muh_naufalll/" target="_blank"> <img src="assets/instagram.png" alt="" class="instagram-image"> </a>
        </div>
        <div class="row mt-3 justify-content-center" style="color: #C3C3C3;">
            <p class="instagram-desc"> Saya biasa upload video gabut di ig, jadi kalo berkenan <br> silahkan diliat - liat </p>
        </div>
        <!-- instagram -->

    </div>
</div>
<!-- video gabut -->

<!-- its me channel -->
<div class="container-fludi" style="background-color: #F8F8F8;">

    <div class="container pb-5 pt-3">
        <!-- video tutorial -->
        <div class="row mx-md-n5">
        
            <div class="col-md-12 justify-content-center align-self-center text-center" style="color: #161E22">
                <h1 class="title">Video Tutorial</h1>
                <p class="mt-3 desc"> Selain Video gabut, saya juga bikin channel tentang tutorial video editing di Youtube, ya walaupun skill juga masih pas - pasan, <br class="break"> tapi kalo niatnya berbagi kenapa enggak ya kan.</p>
            
            </div>

        </div>
        <!-- video tutorial -->

        <!-- its me channel -->
        <div class="row mx-md mt-5">

            <div class="col-md-6 justify-content-center align-self-center text-center">
                <img src="assets/itsme.png" alt="" class="itsme-image">
            </div>
            
            <div class="col-md-6 mt-3 justify-content-center align-self-center text-center">
                <p class="itsme-desc"> Channel yang dibikin pas kelas 3 SMA, dan pernah mogok karena belom terlalu niat, tapi sekarang udah mulai lumayan niat (mudah-mudahan). </p>
            </div> 
        
        </div>
        <!-- its me channel -->

        <!-- youtube video -->
        <div class="row mx-md mt-5">

            <div class="col-md-6 mt-4">
                <iframe src="https://www.youtube.com/embed/3pMUWYNKZPA" class="youtube-video">
                </iframe>
            </div>

            <div class="col-md-6 mt-4">
                <iframe src="https://www.youtube.com/embed/m4wZxUKGXH0" class="youtube-video">
                </iframe>
            </div>

            
            <div class="col-md-6 mt-4">
                <iframe src="https://www.youtube.com/embed/BEQ-D7K4M5E" class="youtube-video">
                </iframe>
            </div>

            
            <div class="col-md-6 mt-4">
                <iframe src="https://www.youtube.com/embed/vsUd3T-jytg" class="youtube-video">
                </iframe>
            </div>

        </div>
        <!-- youtube video -->

        <div class="row mt-5 justify-content-center" style="color: #C3C3C3;">
          <a href="https://www.youtube.com/channel/UCBSzQaZh1V0_6hK1gpVBB4g" target="_blank"> <img src="assets/youtube-icon.png" alt="" class="instagram-image"> </a>
        </div>

        <div class="row mt-3 justify-content-center" style="color: #161E22;">
            <p class="instagram-desc"> Silahkan berkunjung  jika kalian suka sama editing </p>
        </div>

    </div>


</div>
<!-- its me channel -->

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

</div>
</div>
    
</body>
</html>