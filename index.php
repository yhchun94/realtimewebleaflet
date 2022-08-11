<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script src="swipe.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <title>Real Time Web Leaflet</title>
</head>

<style>
    a { text-decoration:none !important }
    a:hover { text-decoration:none !important }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        height: 600px;
        width: auto;
        padding: 70px 0px 0px 0px;
    }

    .image {
        display: block;
        margin-left: auto;
        margin-right: auto;
        height: 200px;
        width: 350px;
        padding: 0px 0px 0px 0px;
    }
    .image_list {
        display: block;
        margin-left: auto;
        margin-right: auto;
        height: 70px;
        width: 100px;
        margin: 17px 0px 10px 0px;
    }

    .modal.modal-center {
      text-align: center;
    }
    .modal-dialog.modal-center {
      display: inline-block;
      text-align: left;
      vertical-align: middle;
    }

    @keyframes run {
      from {
        width: 0px;
      }
      to {
        width: 100%;
      }
    }

    .bar {
      width: 0px;
      height: 10px; 
      background-color: rgb(179, 255, 0);
      animation-fill-mode: forwards;
    }

    .bar1 {
      animation-name: run;
      animation-duration: 400s;
      animation-delay: -100s;
      animation-timing-function: linear;
      animation-iteration-count: infinite;
    }

    .bar2 {
      animation-name: run;
      animation-duration: 600s;
      animation-delay: 0s;
      animation-timing-function: linear;
      animation-iteration-count: infinite;
    }

    .bar3 {
      animation-name: run;
      animation-duration: 2843s;
      animation-delay: 0s;
      animation-timing-function: linear;
      animation-iteration-count: infinite;
    }

    .bar4 {
      animation-name: run;
      animation-duration: 1099s;
      animation-delay: 0s;
      animation-timing-function: linear;
      animation-iteration-count: infinite;
    }

    .bar5 {
      animation-name: run;
      animation-duration: 1380s;
      animation-delay: 0s;
      animation-timing-function: linear;
      animation-iteration-count: infinite;
    }

    .bar6 {
      animation-name: run;
      animation-duration: 1440s;
      animation-delay: 0s;
      animation-timing-function: linear;
      animation-iteration-count: infinite;
    }

    .bar7 {
      animation-name: run;
      animation-duration: 960s;
      animation-delay: 0s;
      animation-timing-function: linear;
      animation-iteration-count: infinite;
    }

    .bar8 {
      animation-name: run;
      animation-duration: 600s;
      animation-delay: 0s;
      animation-timing-function: linear;
      animation-iteration-count: infinite;
    }
</style>

<body style="background-color: #92fc70;">

  <section data-role="page" id="swipeflick" class="eventPage" data-next="detail" data-prev="" data-dom-cache="true" style="background-color: #92fc70;">
    <header class="blog-header py-1" style="background-color: #fff; border-bottom: 1px solid #bbb;">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1 pl-5">
          <a class="text-muted" href="./index.php"><i class="bi bi-chevron-left"></i></a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="./index.php">작품정보</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center"></div>
      </div>
    </header>
    <div style="background-color: #92fc70;">
      <a href="./detail.php">
        <img src="cover_image.jpg" alt="cover image" class="center">
      </a>
    </div>
  </section>

  <script>
      jQuery.noConflict();
  </script>

</body>
</html>