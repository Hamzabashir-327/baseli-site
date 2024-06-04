
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>autohoulto</title>
  <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!--font icon--->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
   <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
  const revealElements = document.querySelectorAll('.reveal-element');

  function revealOnScroll() {
    revealElements.forEach(function(element) {
      const elementTop = element.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;

      // Check if the element is in the viewport
      if (elementTop < windowHeight * 0.75) {
        element.classList.add('reveal-visible');
      } else {
        element.classList.remove('reveal-visible');
      }
    });
  }

  // Call revealOnScroll on page load and scroll
  revealOnScroll();
  window.addEventListener('scroll', revealOnScroll);
});
  </script>
  <div class="MyDiv">
    <section class="header">
      <div class="container">
        <div class="row reveal-element">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="main-div-1">
              <div class="logo">
                <div class="logo-img">
                <img src="Images/Vector-Smart-Object.png" alt="">
                </div>
                  <div class="AboutUS-RightText icon-box">
                      <i class="call"><img src="Images/top-call.png"></i>
                      <div class="IconText">
                        <h5>Puhelinnumero</h5>
                        <p><a href="tel:+47 333 78 901">+47 333 78 901</a></p>
                      </div>
                    </div>
              </div>
            </div>
          </div>
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                      <div class="main-nav">
                        <ul>
                          <li><a href="autohoulto.php">Etusivu</a></li>
                          <li><a href="contact-page.php">Asiakaspalvelu</a></li>
                          <li><a href="#">Yritys</a></li>
                          <li><a href="#">Huoltotarjoukset</a></li>
                          <li><a href="#">Merkkikohtaiset</a></li>
                          <li><a href="#">huollot</a></li>
                          <li><a href="#">Huoltopalvelut</a></li>
                          <li><a href="#">Korjaamopalvelut</a></li>
                          <li><a href="#">Palvelut</a></li>
                          <li><a href="#">Kysy Whatsapilla</a></li>
                          <li><a href="#">Varaa huolto</a></li>           
                        </ul>
                      </div>
        </div>
        </div>
      </div>
    </section>
    <section class="section-3">
      <div class="container">
        <div class="row reveal-element">
          
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                      <div class="car-img">
                        <img src="Images/Image.png" alt="">
                      </div>
                      <div class="text-img">
                        <h1>Renkaidenvaihto veloituksetta kaikkien<br> huoltojen ja korjausten yhteydessä</h1>
                      </div>
                      <div class="btn-div">
                        <a href="#">Read More</a>
                      </div>
        </div>
      </div>
    </section>
    <section class="section-4">
      <div class="container">
        <div class="row reveal-element">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="main-col">
                      <div class="left-box">
                        <img src="Images/Vector-Smart-Object1.png" alt="">
                        <h2>Huollon yhteydessä talvirenkaiden vaihto veloituksetta.</h2>
                        <p>Tarjoamme 22.10 – 30.11.2018 välisenä aikana talvirenkaiden vaihdon veloituksetta huollon ja korjauksen yhteydessä.</p>
                      </div>
                      <div class="right-box"> 
                        <img src="Images/Vector-Smart-Object2.png" alt="">
                        <h2>Auton vuosikatsastus edesä?<br> Katsastuspalvelu 74€.</h2>
                        <p>Konalan Autohuollon katsastuspalvelu sisältää katsastustarkastuksen, pakokaasumittauksen, asioimisen katsastusasemalla, sekä<br>
katsastusmaksun.</p>
                      </div>
                  </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <div class="contact reveal-element">
            <h1>OTA YHTEYTTA</h1>
            <input type="text" class="inputfeild" placeholder="Nimi *" name="">
            <input typen="text" class="inputfeild" placeholder="Rekisteriumero *" name="">
            <input type="text" class="inputfeild" placeholder="Kilometrimäärä" name="">
            <input type="text" class="inputfeild" placeholder="Sähköposti *" name="">
            <textarea rows="7" class="textarea-1" name="textarea">Kerro lyhyesti huoltotarpeesi... *</textarea>
                        <div class="btn-div-form">
                        <a href="#">Lähetä</a>
                      </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-5">
      <div class="comtainer">
        <div class="row reveal-element m-0">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 m-0 ">
            <div class="btn-links">
              <a href="#">VOLVO HUOLTO</a>
              <a href="#">VOLVO HUOLTO</a>
              <a href="#">VOLVO HUOLTO</a>
            </div>
            <div class="btn-links">
              <a href="#">VOLVO HUOLTO</a>
              <a href="#">VOLVO HUOLTO</a>
              <a href="#">VOLVO HUOLTO</a>
            </div>
            <div class="btn-links">
              <a href="#">VOLVO HUOLTO</a>
              <a href="#">VOLVO HUOLTO</a>
              <a href="#">VOLVO HUOLTO</a>
            </div>
            <div class="btn-links">
              <a href="#">VOLVO HUOLTO</a>
              <a href="#">VOLVO HUOLTO</a>
              <a href="#">VOLVO HUOLTO</a>
            </div>
            <div class="btn-links-lg">
              <h2>RENKAIDENVAIHTO VELOITUKSETTA HUOLLON/KORJAUKSEN YHTEYDESSÄ</h2>
              <a href="#">Autohuolto Konala huoltotilillä 30-60 päivää maksuaikaa huoltoihin ja korjauksiin. Lue lisää.</a>
              <p>Autohuolto Konala huoltaa kaikki automerkit ja mallit yli 15 vuoden kokemuksella<br>
              Autohuolto Konala huoltaa kaikki autot merkistä, mallista tai ajetuista kilometreistä riippumatta. Yli 15 vuoden<br>
                            kokemuksen lisäksi laadukkaat tuotteet ja varaosat takaavat asiakkaillemme aina laadukkaan lopputuloksen.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
        <section class="section-6">
          <div class="container">
            <div class="row reveal-element">
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="div-sec-6">
                  <div class="img-div-6">
                  <img src="Images/Vector-Smart-Object3.png" alt="">
                  </div>
                  <h3>AUTOHUOLLOT</h3>
                  <a href="">Read More</a>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="div-sec-6">
                  <div class="img-div-6">
                  <img src="Images/Vector-Smart-Object4.png" alt="">
                  </div>
                  <h3>MÄÄRÄAIKAISHUOLLOT</h3>
                  <a href="">Read More</a>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="div-sec-6">
                  <div class="img-div-6">
                  <img src="Images/Vector-Smart-Object5.png" alt="">
                  </div>
                  <h3>ILMASTOINTIHUOLTO</h3>
                  <a href="">Read More</a>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="div-sec-6">
                  <div class="img-div-6">
                  <img src="Images/Vector-Smart-Object6.png" alt="">
                  </div>
                  <h3>ÖLJYNVAIHTO</h3>
                  <a href="">Read More</a>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="div-sec-6">
                  <div class="img-div-6">
                  <img src="Images/Vector-Smart-Object7.png" alt="">
                  </div>
                  <h3>JARRUHUOLTO</h3>
                  <a href="">Read More</a>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="div-sec-6">
                  <div class="img-div-6">
                  <img src="Images/Vector-Smart-Object8.png" alt="">
                  </div>
                  <h3>JAKOHIHNAN VAIHTO</h3>
                  <a href="">Read More</a>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="div-sec-6">
                  <div class="img-div-6">
                  <img src="Images/Vector-Smart-Object9.png" alt="">
                  </div>
                  <h3>OBD MITTAUS</h3>
                  <a href="">Read More</a>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="div-sec-6">
                  <div class="img-div-6">
                  <img src="Images/Vector-Smart-Object11.png" alt="">
                  </div>
                  <h3>KORJAAMOPALVELUT</h3>
                  <a href="">Read More</a>
                </div>
              </div>
                       
            </div>
          </div>
        </section>
        <section class="address">
          <div class="container">
            <div class="row reveal-element">
              <div class="col-lg-12">
                <div class="address-main">
                  <h1>EMTE OY AVOINNA</h1>
                  <hr>
                  <div class="AboutUS-RightText icon-box1">
                      <i class="time"><img src="Images/time.png"></i>
                      <div class="IconText1">
                        <h5>ma-pe 07:30-17:00</h5>
                      </div>
                </div>
                <div class="AboutUS-RightText icon-box1">
                      <i class="time"><img src="Images/loc.png"></i>
                      <div class="IconText1">
                        <h5>Ristipellontie 17 HELSINKI </h5>
                      </div>
                </div>
                <p>Emte Oy puhelinpalvelu palvelee vuoden jokaisena päivänä 07:00 - 20:00.</p>
                <div class="AboutUS-RightText icon-box2">
                      <i class="cont"><img src="Images/1.png"></i>
                      <div class="IconText2">
                        <h5>010 31 52 840</h5>
                      </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </section>
       <section class="footer">
        <div class="container">
          <div class="row reveal-element">
            <div class="logo-footer">
                  <img src="Images/Vector-Smart-Object10.png">
                </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="AboutUS-RightText icon-box3">
                      <i class="foot"><img src="Images/-.png"></i>
                      <div class="IconText3">
                        <h5>010 3152 840 (8,35 snt/puhelu + 16,69 snt/min)</h5>
                      </div>
                </div>
                <div class="AboutUS-RightText icon-box3">
                      <i class="foot"><img src="Images/msg-.png"></i>
                      <div class="IconText3">
                        <h5>asiakaspalvelu@autohuoltokonala.fi</h5>
                      </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="AboutUS-RightText icon-box3">
                      <i class="foot"><img src="Images/loc-red-.png"></i>
                      <div class="IconText3">
                        <h5>Ristipellontie 17 00390 HELSINKI</h5>
                      </div>
                </div>
                <div class="AboutUS-RightText icon-box3">
                      <i class="foot"><img src="Images/time-red-.png"></i>
                      <div class="IconText3">
                        <h5>Avoinna: ma - pe 7:30 - 17:00</h5>
                      </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="AboutUS-RightText icon-box3">
                      <i class="foot"><img src="Images/gg.png"></i>
                      <div class="IconText3">
                        <h5>Laskutusohjeet </h5>
                      </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="whatsapp-link">
                  <a aria-label="Chat on WhatsApp" href="https://wa.me/045 1860 497"> <img class="wa-img" alt="Chat on WhatsApp" src="Images/whatsapp.png" />Kysy tarjous WhatsApilla 045 1860 497</a>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="copy-right">
                  <h4>© 2021 Emte Oy. Privacy Policy.</h4>
                </div>
            </div>
          </div>
        </div>
       </section>

  </div>
</body>
</html>
