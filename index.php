<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Boiwala</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- bxSlider CSS file -->
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
<!-- Optional theme -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      .test{
        background: #545e66  center center;
        background-image: url("https://www.pubnub.com/static/images/structure/bg-footer.png");
        background-position-x: 50%;
        background-position-y: 50%;
        background-size: cover;
        background-repeat-x: initial;
        background-repeat-y: initial;
        background-attachment: initial;
        background-origin: initial;
        background-clip: initial;
        background-color: rgb(84, 94, 102);
        background-size: cover;
      }
      .play{
        z-index: 999; 
        top: 25%;
        left: 30%; 
        position: absolute;
        color:#1E252A;
        opacity: .7;
      }
      .cover{
        z-index: -999;
        width: 150px;
        height: 150px;
      }
      .bx-wrapper .bx-prev,.bx-wrapper .bx-next   {
        opacity: .5;
      }
      #top-list .container{
        margin-top: 3em;
      }
      .bxsliderBookTitle{
        height: 40px;
        text-align: center;
        color: #333333;
        font-weight: 400;
        text-decoration: none;
      }
      #top-list li a{
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">


            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="http://cdn.mysitemyway.com/etc-mysitemyway/icons/legacy-previews/icons/quilted-floral-icons-culture/032576-quilted-floral-icon-culture-gift-box-small.png" height="70" width="70" alt="brand"></a>
            </div>
         
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
               <form class="navbar-form navbar-left" role="search" id="form-search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-success sharp-corner">Submit</button>
                </form>
                <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Sign Up</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Drama</a></li>
                    <li><a href="#">Kids</a></li>
                    <li><a href="#">Mysteries</a></li>
                    <li><a href="#">Adventure</a></li>
                    <li><a href="#">Erotica</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Show All</a></li>
                  </ul>
                </li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Sign In</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->

          </div><!-- /.container-fluid -->
        </nav>
    </header>
    <!-- ---------------------------------------------------------------------------- -->


    <section id="banner">
      <div class="container">
        <div class="row jumbotron">
          
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
              <h1>Beautiful, simple and easy to use Boiwala.</h1>
              <p>Enjoy thousands of audiobooks directly to your mobile. Hand-pick your listening experiences among thousands of books in Bengali for free!</p>
              <p>
                  <a class="btn btn-primary btn-lg sharp-corner" href="https://play.google.com/store/apps/details?id=saokhue.vseldon.boihotennewnew" role="button">
                    <i class="fa fa-android fa-lg"></i>&nbsp;Download
                  </a>
              </p>
            </div>
            <div class="col-xs-9 col-sm-9 col-md-4 col-lg-4">
              <img src="http://if-boiwaladesign.rhcloud.com/images/app.png" alt="" class="img-responsive">
            </div>
            <div class="col-xs-3 col-sm-3 col-md-1 col-lg-1">
              <a class="primary" href="https://twitter.com/">
                <span class="fa-stack fa-3x ">
                  <!-- <i class="fa fa-square-o icon-stack-base fa-stack-2x"></i> -->
                  <i class="fa fa-twitter  icon-stack-base fa-stack-1x"></i>
                </span>
              </a>
              <a class="primary" href="https://www.facebook.com/">
                <span class="fa-stack fa-3x">
                  <!-- <i class="fa fa-square-o fa-stack-2x"></i> -->
                  <i class="fa fa-facebook fa-stack-1x"></i>
                </span>
              </a>
              <a class="primary" href="https://plus.google.com/">
                <span class="fa-stack fa-3x">
                  <!-- <i class="fa fa-square-o icon-muted fa-stack-2x"></i> -->
                  <i class="fa fa-google-plus fa-stack-1x"></i>
                </span>
              </a>
            </div>
          
          
        </div>
      </div>
    </section>
    <!-- ---------------------------------------------------------------------------- -->


    <section id="top-list">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="top-list-header">
              <div id="top-list-header-icon">
                  <i id="icon-thumbs-up" class="fa fa-thumbs-up fa-4x"></i>
              </div>
              <h1>Top List</h1>
              <p>Discover our directory today!</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <ul class="bxslider">
              <li>
                <a href="http://placehold.it/150/4caf50/000000" >
                  <img class="img-responsive cover"  src="http://lh3.googleusercontent.com/-ZM6kZkMBBJ8/Vr2aJXmvpMI/AAAAAAAAFwc/t8WeQT8j7rQ/s1600/Screenshot_2016-02-09-20-42-53.png" />
                  <i class="fa fa-play fa-5x play"></i>
                  <div class="bxsliderBookTitle">Masik Bosumoti</div>
                </a>
              </li>
              <li>
                <a href="http://placehold.it/150/6bbf50/000000">
                  <img class="img-responsive cover" src="http://lh3.googleusercontent.com/-cpPA2DXO_Vk/Vr2bZ4SAepI/AAAAAAAAFwo/aAVP-VS0Zys/s1600/IMG_20160209_215414.JPG" />
                  <i class="fa fa-play fa-5x play"></i>
                  <div class="bxsliderBookTitle">Uppnash Somogro</div>
                </a>
              </li>
              <li>
                <a href="http://placehold.it/150/accf32/000000">
                <img class="img-responsive cover" src="http://lh3.googleusercontent.com/-oJhHHA1J1YE/Vrjgn3p2TTI/AAAAAAAAFs4/imVtR-6tjP8/s640/IMG_20160208_221836.JPG" />
                <i class="fa fa-play fa-5x play"></i>
                <div class="bxsliderBookTitle">Chobir Chosma</div>
                </a>
              </li>
              <li>
                <a href="http://placehold.it/150/dca550/000000">
                <img class="img-responsive cover" src="https://lh6.ggpht.com/-8r-ru_WQNxY/UWEAoeJHpFI/AAAAAAAAAXA/WnzLGo7WceM/s400/Pandob-20.jpg" />
                <i class="fa fa-play fa-5x play"></i>
                <div class="bxsliderBookTitle">Pandob Goyenda</div>
                </a>
              </li>
              <li>
                <a href="http://placehold.it/150/254f50/000000">
                <img class="img-responsive cover" src="https://lh3.ggpht.com/-OuWM5r8M3ZQ/Ua1EiX7IQII/AAAAAAAAApA/DVvc-Hz9Nho/s400/image-88-1.jpg" />
                <i class="fa fa-play fa-5x play"></i>
                <div class="bxsliderBookTitle">Mishor Rohosho</div>
                </a>
              </li>
              <li>
                <a href="http://placehold.it/150/aaaf32/000000">
                <img class="img-responsive cover" src="http://lh3.googleusercontent.com/-Mv3pcCvLDbE/VrnfFvb1qrI/AAAAAAAAFtU/Q0VmXaKqbiA/s640/Screenshot_2016-02-08-21-58-44.png" />
                <i class="fa fa-play fa-5x play"></i>
                <div class="bxsliderBookTitle">Gonesh Thagorer Golpo</div>
                </a>
              </li>
              <li>
                <a href="http://placehold.it/150/99ae20/000000">
                <img class="img-responsive cover" src="http://lh3.googleusercontent.com/-Jy_s0fDattM/VrRjrSmyAiI/AAAAAAAAFis/Xr-VLlg3KXo/s640/IMG_20160205_142507.JPG" />
                <i class="fa fa-play fa-5x play"></i>
                <div class="bxsliderBookTitle">Ponchashti Vuter Golpo</div>
                </a>
              </li>
              <li>
                <a href="http://placehold.it/150/1caf50/000000">
                <img class="img-responsive cover" src="https://lh3.ggpht.com/-a1FX_agKE0g/UXYqlWfbdBI/AAAAAAAAAgY/5R68PeQWgLo/s400/feluda-samagra.jpeg" />
                <i class="fa fa-play fa-5x play"></i>
                <div class="bxsliderBookTitle">Feluda Somogro</div>
                </a>
              </li>
              <li>
                <a href="http://placehold.it/150/0bbf32/000000">
                <img class="img-responsive cover" src="https://lh3.ggpht.com/-osF7xQrxHoQ/UWIv_8HV-WI/AAAAAAAAAYo/LTq88IBC7Fc/s400/DBET0005.jpg" />
                <i class="fa fa-play fa-5x play"></i>
                <div class="bxsliderBookTitle">Pother Kata</div>
                </a>
              </li>
              <li>
                <a href="http://placehold.it/150/9cae20/000000">
                <img class="img-responsive cover" src="http://lh3.googleusercontent.com/-5OOOy2h2q9U/VriymS9ebUI/AAAAAAAAFrI/zXp86a-itWk/s640/IMG_20160208_120317.JPG" />
                <i class="fa fa-play fa-5x play"></i>
                <div class="bxsliderBookTitle">White Fan</div>
                </a>
              </li>
            </ul>

          </div>
        </div>
      </div>
      
    </section>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="js/jquery.bxslider.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.bxslider').bxSlider({
            minSlides: 2,
            maxSlides: 7,
            moveSlides: 1,
            slideWidth: 150,
            slideMargin: 15,
            auto: true,
            pause: 2000,
            speed: 2000
        });
      });
    </script>
  </body>
</html>