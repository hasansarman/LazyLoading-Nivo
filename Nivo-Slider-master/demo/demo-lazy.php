<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link rel="stylesheet" href="../themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../themes/pascal/pascal.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../themes/orman/orman.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <style type="text/css">
      .theme-default #slider {
        width: 100%;
        height: 200px;

      }
      .theme-default #slider2 {
          width: 100%;
          height: 200px;

      }
      .theme-default #slider3 {
          width: 25%;
          height: 200px;

      }
      .theme-default #slider4 {
          width: 25%;
          height: 200px;

      }
      #header {
        width: 25%;

        font-size: 150%;

      }
      SMALL {
        font-size: 80%;
      }
      SPAN.code {
        display: inline;
        font-family: monospace;
      }
      STRONG {
        font-weight: bold;
      }
      #imgload_txt {
        color: #c00;
      }
      #imgshow_txt {
        color: #00c;
      }
    </style>
</head>
<body>

    <div id="wrapper" style="width: 100% !important; height: 200px !important;">
    
        <?php
        session_start();
        $temp= $_GET['arr'];
      //  print_r($_SESSION[$_GET['arr']]);
        if(isset($_SESSION[$_GET['arr']])){
            $arr=$_SESSION[$_GET['arr']];
        }
       ?>

        <div class="slider-wrapper theme-default">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
                <!-- You can use `src` attribute to specify a smaller image to pass HTML validation - or to provide a default image for non-javascript users. -->

              <?php
              if(isset($arr)){
              foreach($arr as $a){
                  if(strlen($a[2])>22){
                      $rest = substr($a[2], 0, 22);
                      $rest=$rest."...";
                  }
                  else $rest=$a[2]."...";
                  ?>
                  <img src="images/large/gray.png" data-src="<?php echo "../../images/".$a[1]?>" alt="" title="<?php echo $rest?>">
                <?php
              }}
              ?>


            </div>


        </div>


    </div>
    <script type="text/javascript" src="scripts/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="../jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        var imgload = $('#imgload_txt'),
            imgshow = $('#imgshow_txt');
        $('#slider').nivoSlider({
          pauseOnHover: false,
          pauseTime: 6000,
          onImageLoad: function(img) {
            imgload.hide();
            imgload.text(img.data('src'));
            imgload.fadeIn();
          },
          onImageChange: function(img) {
            imgshow.hide();
            imgshow.text(img.data('src'));
            imgshow.fadeIn();
          }
        });

    });
    </script>
</body>
</html>