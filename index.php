<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Info -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta name="description" content="Ricerca voli per ShippyPro">
	<meta name="author" content="Lanzi Daniele, 'The Network', Bootstrap & Jquery, VSCode & MacOS, Spotify & Sonos">
	<!-- Favicon -->
	<link href="https://www.gstatic.com/travel-trips-fe/travel_logo_32.png" rel="icon">
	
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- CSS (da inserire se si utilzza un foglio di stile esterno)-->
	<!-- <link href="#" rel="stylesheet" type="text/css" /> -->
	<link href="carousel.css" rel="stylesheet">

	<!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Inzio Styles Inline -->
	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
    	}

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
	<!-- FINE STYLES -->

	<title>Voli | ShippyPro-Challange</title>
</head>
	<!-- Apro php -->
		<?php
		// Includiamo il file una volta sola
			include_once 'select_print.class.php';
			$opt = new SelectPrint();
		?>
<!-- Inizio codice HTML -->
  <body>
    <header>
  <nav style="background-color: white; box-shadow: 0 4px 5px 0 rgba(0,0,0,0.14), 0 1px 10px 0 rgba(0,0,0,0.12), 0 2px 4px -1px rgba(0,0,0,0.2);" class="navbar navbar-expand-md fixed-top">
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
		<li>
			<svg class="mr-3" width="24px" height="24px" focusable="false" viewBox="0 0 24 24"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg>
		</li>
		<li>
			<img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="">
		</li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
		<svg class="mr-3" width="24px" height="24px" viewBox="0 0 24 24" focusable="false">
		<path d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z"></path></svg>
		<img class="gb_Ia gbii rounded-circle mr-1" src="https://lh3.googleusercontent.com/ogw/ADGmqu_WKwK5bm-znMOFayWz5wwwy6NDVUo9f3_dPrrfNA=s32-c-mo" srcset="https://lh3.googleusercontent.com/ogw/ADGmqu_WKwK5bm-znMOFayWz5wwwy6NDVUo9f3_dPrrfNA=s32-c-mo 1x, https://lh3.googleusercontent.com/ogw/ADGmqu_WKwK5bm-znMOFayWz5wwwy6NDVUo9f3_dPrrfNA=s64-c-mo 2x " alt="" aria-hidden="true" data-noaft="" data-atf="1">
      </form>
    </div>
  </nav>
</header>

<main role="main">

  <div>
	  <img width="100%" src="//www.gstatic.com/flights/app/illustration-flights-desktop.svg" alt="" jsan="8.src,0.alt" data-atf="1" jstcache="3641">
	  <div class="" jstcache="0"><div style="font: 400 56px/64px 'Google Sans Display',Roboto,Arial,sans-serif;
    text-align: center;" class="" jstcache="3643">Voli</div>
		<div class="card text-center m-5" style="box-shadow: 0 1px 3px rgba(60,64,67, 0.3), 0 4px 8px 3px rgba(60,64,67, 0.15);">
			<div class="card-header">
				Andata
			</div>
      <form action="" id="myform" method="get" class="needs-validation" novalidate>
        <div class="col-md-12 mb-3">
          <label for="id_airport"></label>
          <select name="id_airport" class="custom-select d-block w-100" id="id_airport">
            <?php echo $opt->ShowCountryDeparture(); ?>
          </select>
        </div>
        <div class="col-md-12 mb-3">
          <label for="code_arrival"></label>
          <select name="code_arrival" class="custom-select d-block w-100" id="code_arrival">
            <?php echo $opt->ShowCountryArrival(); ?>
          </select>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit" value="cerca">Cerca</button>
      </form>
      <div id="stampa">
        <?php
        echo $opt->PrintSearchDeparture();
        echo $opt->PrintSearch();
            ?>
		  </div>
			<div class="card-footer text-muted">
				
			</div>
  </div>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4 rounded p-2" style="box-shadow: inset 0 1px 3px rgba(60,64,67, 0.3), 0 4px 8px 3px rgba(60,64,67, 0.15);">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://italiansvstheworld.files.wordpress.com/2016/04/roma-lowcost.jpg">
        <h2>Roma – consigli per una vacanza lowcost</h2>
        <div style="height: 100px; overflow: scroll; cursor: ns-resize;" class="scrollable">
          <p>Non faccio mistero che la capitale sia una delle città che preferisco in assoluto, e non per una sorta di patriottismo latente, ma per un’oggettiva bellezza che me la fa eleggere come una (se non LA) città più bella del mondo. Ecco perché non avrebbe senso scriverne una guida, Roma è immensa e infinita, ogni angolo nasconde arte e storia e vedere tutto, o raccontarlo in un post, è assolutamente impossibile. Qui vi darò qualche dritta per risparmiare e schivare le Tourist Trap in agguato in ogni angolo della città immortale, e prepararvi al meglio per la vostra prossima vacanza!</p>
        <p>
        </div>
        <a class="btn btn-secondary mt-2" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 rounded p-2" style="box-shadow: inset 0 1px 3px rgba(60,64,67, 0.3), 0 4px 8px 3px rgba(60,64,67, 0.15);">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="http://guardoilmondodaunoblo.it/wp-content/uploads/2017/07/image1-43-770x512.jpg">
        <h2>Mini-Vacanza a Barcellona</h2>
        <div style="height: 100px; overflow: scroll; cursor: ns-resize;" class="scrollable">
          <p>Se siete in partenza per la prima volta verso la città di Gaudì, non potete sicuramente perdervi quelli che sono i luoghi simbolo di Barcellona, ovvero quelli che ne rappresentano l’anima e il cuore. I luoghi non per forza più turistici ma che sicuramente, almeno secondo noi, ne creano l’essenza: simboli artistici, storici, culturali e paesaggistici, per scoprire una delle città in assoluto più vive e colorate d’Europa!</p>
        <p>
        </div>
        <a class="btn btn-secondary mt-2" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 rounded p-2" style="box-shadow: inset 0 1px 3px rgba(60,64,67, 0.3), 0 4px 8px 3px rgba(60,64,67, 0.15);">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="http://www.doveandareinvacanza.com/wp-content/uploads/2013/01/londra-1.jpg">
        <h2>Londra meta ideale, ma cosa visitare?</h2>
        <div style="height: 100px; overflow: scroll; cursor: ns-resize;" class="scrollable">
          <p>Londra è una delle più grandi aree metropolitane d’ Europa, si presenta al visitatore con l’aspetto imponente dei suoi palazzi e dei suoi edifici pubblici tutti da visitare.</p>
        <p>
        </div>
        <a class="btn btn-secondary mt-2" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
<!-- Script Bootstrap -->
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
