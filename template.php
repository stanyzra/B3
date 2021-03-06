<!DOCTYPE html>
<html>
<head>
  <title>W3.CSS Template</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="js/jquery-3.3.1.min.js"></script>
  <script>

  </script>
  <style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
  body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
  }

  /* Create a Parallax Effect */
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  /* First image (Logo. Full height) */
  .bgimg-1 {
    background-image: url("imagens/parallax1.jpg");
    min-height: 100%;
  }

  /* Second image (Portfolio) */
  .bgimg-2 {
    background-image: url();
    min-height: 400px;
  }

  /* Third image (Contact) */
  .bgimg-3 {
    background-image: url();
    min-height: 400px;
  }

  .w3-wide {letter-spacing: 10px;}
  .w3-hover-opacity {cursor: pointer;}

  /* Turn off parallax scrolling for tablets and phones */
  @media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
      background-attachment: scroll;
    }
  }
</style>
</head>
<body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar" id="myNavbar">
      <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
      <a href="#home" class="w3-bar-item w3-button w3-text-black">HOME</a>
      <a href="#about" class="w3-bar-item w3-button w3-hide-small w3-text-black"><i class="fa fa-user"></i> ABOUT</a>
      <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small w3-text-black"><i class="fa fa-th"></i> SISTEMA</a>
      <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-text-black"><i class="fa fa-envelope"></i> CONTACT</a>
      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
        <i class="fa fa-search"></i>
      </a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
      <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
      <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">SISTEMA</a>
      <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
      <a href="#" class="w3-bar-item w3-button">SEARCH</a>
    </div>
  </div>

  <!-- First Parallax Image with Logo Text -->
  <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
      <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><span class="w3-hide-small">B3</span></span>
    </div>
  </div>

  <!-- Container (About Section) -->
  <div class="w3-content w3-container w3-padding-64" id="about">
    <h3 class="w3-center">ABOUT US</h3>
    <p class="w3-center"><em>Organização de eventos</em></p>
    <p>Se desejas criar e organizar um evento com facilidade, está no lugar certo. A B3 fornece todas as ferramentas necessárias para a realização de eventos e é totalmente gratuito.</p>
    <div class="w3-row">
      <div class="w3-col m6 w3-center w3-padding-large">
        <p><b><i class="fa fa-user w3-margin-right"></i>4Dev's</b></p><br>
        <p>coloca a logo aqui zé, só que extendida pra caber certinho</p>
        <img src="/eita.jpeg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">

      </div>

      <!-- Hide this text on small devices -->
      <div class="w3-col m6 w3-hide-small w3-padding-large">
        <p>Nós somos a 4Dev's, uma equipe desenvolvedora de Softwares para Web e estudantes do 4º ano de Informática do IFPR - Campus Paranavaí. </p>
      </div>
    </div>
    <br><br><br><br><br><br><br><br>

    <!-- Second Parallax Image with Portfolio Text -->
    <div class="w3-content w3-container w3-padding-35" id="portfolio">
      <br><br>
      <h1 class="w3-center">Sistema</h1>
    </div>

    <div id="menu-centro">
      <?php
      include("menu.php")
      ?>
    </div>


    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
      <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
      <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption" class="w3-opacity w3-large"></p>
      </div>
    </div>

    <!-- Third Parallax Image with Portfolio Text -->


    <!-- Container (Contact Section) -->
    <div class="w3-content w3-container w3-padding-64" id="contact">
      <h3 class="w3-center">ONDE NÓS TRABALHAMOS</h3>
      <p class="w3-center"><em>Seu feedback nos ajudaria muito!</em></p>

      <div class="w3-row w3-padding-32 w3-section">
        <div class="w3-col m4 w3-container">
          <!-- Add Google Maps -->
          <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
        </div>
        <div class="w3-col m8 w3-panel">
          <div class="w3-large w3-margin-bottom">
            <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Paranavaí, PR<br>
            <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone:+00 00000000<br>
            <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> 4devsContact@gmail.com<br>
          </div>
          <p>Nos mande uma mensagem:</p>
          <form action="/action_page.php" target="_blank">
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Nome" required name="Name">
              </div>
              <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
              </div>
            </div>
            <input class="w3-input w3-border" type="text" placeholder="Mensagem" required name="Message">
            <button class="w3-button w3-black w3-right w3-section" type="submit">
              <i class="fa fa-paper-plane"></i> ENVIAR MENSAGEM
            </button>
          </form>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
      <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
      <div class="w3-xlarge w3-section">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
      </div>
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
    </footer>

    <!-- Add Google Maps -->
    <script>
    function myMap()
    {
      myCenter=new google.maps.LatLng(41.878114, -87.629798);
      var mapOptions= {
        center:myCenter,
        zoom:12, scrollwheel: false, draggable: false,
        mapTypeId:google.maps.MapTypeId.ROADMAP
      };
      var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

      var marker = new google.maps.Marker({
        position: myCenter,
      });
      marker.setMap(map);
    }

    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }

    // Change style of navbar on scroll
    window.onscroll = function() {myFunction()};
    function myFunction() {
      var navbar = document.getElementById("myNavbar");
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
      } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
      }
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function toggleFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
  <!--
  To use this code on your website, get a free API key from Google.
  Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
