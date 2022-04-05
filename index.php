<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lee Hi - Blog</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>
	<!-- start head ini -->
	<div class="head">
		<h1>Lee Hi - Artistics</h1>
		<a href="">HOME</a>
		<a href="portofolio.php">PORTFOLIO</a>
		<a href="index.php#About">ABOUT</a>
	</div>
	<!-- end head -->

	<!-- Start info -->
	<div class="info">
		<div class="grid-1">
			<img src="img/leehi_1.jpg" width="650" class="leehi_1">
		</div>
		<div class="grid-2">
				<a href=""><img src="img/19.jpg" class="img2" width="200" height="200 "></img></a>
				<a href=""><img src="img/8.jpg" class="img2" width="200" height="200"></img></a>
				<a href=""><img src="img/15.jpg" class="img3" width="200" height="200"></img></a>
				<a href=""><img src="img/17.jpg" class="img3" width="200" height="200"></img></a>
		</div>
	</div>
	<!-- End info -->

	 

	<!-- Start album -->
 <div class="bordered">
 	<h2 class="h2" style="text-align: center;">Album</h2>
		<div class="album">
			<figure>
				<a href="https://www.joox.com/id/search/first%20love%20lee%20hi" target="_blank"> <img src="img/first_love.jpg" class="img4" width="200" height="200 "></img></a>
				 <figcaption>First Love</figcaption>	
				  </figure>
			<figure>
				 <a href="https://www.joox.com/id/album/QJHpa9UVTv7wdf64UjBNYw==" target="_blank"><img src="img/seoulite.jpg" class="img4" width="200" height="200"></img></a>
				 <figcaption>Seoulite</figcaption>	
			</figure>
			<figure>
				 <a href="https://www.joox.com/id/single/ckU+p8YRR7Dz_kAsutIsTA==" target="_blank"><img src="img/japan_debut_album-2018.jpg" class="img4" width="200" height="200"></img></a>
				 <figcaption>Japan Debut Album 2018</figcaption>	
			</figure>
			<figure>
				<a href="https://www.joox.com/id/album/JvyRgiUR2hrgvb3sfN9PXA==" target="_blank"><img src="img/24.jpg" class="img4" width="200" height="200"></img></a>
				 <figcaption>24 &deg; C</figcaption>	
			</figure>
			<figure>
					<a href="https://www.joox.com/id/album/MXRMGW8oOcJNQhHZZyf5fg==" target="_blank"><img src="img/only.png" class="img4" width="200" height="200"></img></a>
				 <figcaption>4 Only</figcaption>	
			</figure>
		</div>
	</div>
 
	<!-- End album -->
		<div class="info">
		<div class="grid-4">
			<span>'Apakah penting membandingkan siapa yang lebih baik antara aku atau yang lainnya?'</span><br>
			<br>
		</div>
		<div class="grid-2">
				<a href=""><img src="img/leho.jpg" class="img2" width="200" height="200 "></img></a>
				<a href=""><img src="img/bre.png" class="img2" width="200" height="200"></img></a>
				<a href=""><img src="img/16.jpeg" class="img3" width="200" height="200"></img></a>
				<a href=""><img src="img/18.jpg" class="img3" width="200" height="200"></img></a>
			</div>
		</div>
		  <div class="contact" id="Contact">
    <br>
    <h2>Contact Us</h2><br>
    <div class="footer-dark" id="About">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div><br>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>SMK Adi Sanggoro</h3>
                        <p></p>
                    </div>
                    <div class="col item social"><a href="https://web.facebook.com/annissa.srknd"><i class="icon ion-social-facebook"></i></a><a href="https://twitter.com/leehi_hi"><i class="icon ion-social-twitter"></i></a><a href="https://wa.wizard.id/38cf76" target="_blank"><i class="icon ion-social-whatsapp"></i></a><a href="https://www.instagram.com/anisasrknd/"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">By-AnisaSrknd © 2022</p>
            </div>
        </footer>
    </div>
   <br>
  </div>
 
<script>
function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " opacity-off";
}
</script>
</body>
</html>