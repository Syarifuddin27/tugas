<!doctype html>
<html lang="en">
  <head>
    <style type="text/css">
        .up{
            text-transform: capitalize;
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Tugas</title>
  </head>
  <body>
    <?php 
        $pages = array(
            "anagram"   => "ANAGRAM",
            "unique"    => "UNIQUI",
            "compress"  => "COMPRESS",
            "swap"      => "SWAP",
            "segitiga"  => "SEGITIGA PASCAL",
            "sorting"   => "SORTING ARRAY",
        );


    ?>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                </li>
              <?php foreach ($pages as $pageId => $pageTitle): ?>
              <li class="nav-item
                <?php if ($_GET['halaman'] == $pageId){active;}?>
              ">
                <a class="nav-link" href="?halaman=<?=$pageId?>"><?=$pageTitle?></a>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </nav>


    	<div class="card">
    		<?php  
                if (isset($_GET['halaman'])) 
                {

                    if ($_GET['halaman']=="home") {
                        include 'anagram.php';
                    }
                    if ($_GET['halaman']=="anagram") {
                        include 'anagram.php';
                    }
                    elseif($_GET['halaman'] == "unique"){
                        include 'unique.php';
                    }
                    elseif($_GET['halaman'] == "compress"){
                        include 'compress.php';
                    }
                    elseif($_GET['halaman'] == "swap"){
                        include 'swap.php';
                    }
                    elseif($_GET['halaman'] == "segitiga"){
                        include 'segitiga.php';
                    }
                    elseif($_GET['halaman'] == "sorting"){
                        include 'sorting.php';
                    }
                } else {
                    include 'home.php';
                }
            ?>

            <?php  
                include 'post.php';
            ?>
    	</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $('ul li a').click(function(){ $('li a').removeClass("active"); $(this).addClass("active"); });
    </script>
  </body>
</html>