<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="css/style.css">

        <title>Nagy Márk</title>
    </head>
    <body>
        <div class="container">
          <div class="hero">
            <ion-icon name="code-outline" class="code animate__animated animate__headShake animate__infinite animate__slow"></ion-icon>
            <h2>Hogy ki vagyok én?</h2>
            <p>Hadd mutatkozzam be!</p>
            <a href="#content"><ion-icon class="animate__animated animate__bounce animate__infinite animate__slow" name="arrow-down-outline" size="large"></ion-icon></a>
          </div>
          <div class="row"  id="content">

              <h2>Nagy Márk</h2>
              <div class="col-md-4">
                <img src="assets/me.jpg" alt="Nagy Márk">
              </div>
              <div class="col-md-8">
                <div class="panel p-3">
                  <h4>Rólam</h4>
                  <p>Üdvözlöm! Nagy Márk vagyok, egy <span class="age"></span> éves srác. Kiskorom óta érdekel a programozás, csak akkor még Multi Theft Auto, Metin2 és Minecraft szerverek készítésére próbáltam fordítani minden figyelmem.</p>
                  <p>Szeretek mindenbe belekóstolni, a kihívásokat sem kerülöm. Próbálok lépést tartani az új technológiákkal.</p>

                  <h5>Tanulmányaim</h5>
                  <p>Programtervező informatikus<br><span class="year">2017-2021</span><br>Kaposvári Szakképzési Centrum Ady Endre Technikum és Gimnázium</p>
                  <div class="line"></div>
                  <p>Irodai informatikus<br><span class="year">2020-2021</span><br>Kaposvári Szakképzési Centrum Ady Endre Technikum és Gimnázium</p>

              </div>
            </div>
          </div>
            <div class="row mt-3">
              <div class="col-md-8">
                <div class="panel p-3">
                  <h5>Képességeim</h5>
                  <span>HTML+CSS</span>
                  <div class="skills html mb-3">85%</div>
                  <span>JS</span>
                  <div class="skills js mb-3">80%</div>
                  <span>PHP</span>
                  <div class="skills php mb-3">65%</div>
                  <span>C#</span>
                  <div class="skills c mb-3">60%</div>
                  <span>LUA</span>
                  <div class="skills lua mb-3">80%</div>
                  <span>Adobe Photoshop + Illustrator</span>
                  <div class="skills adobe mb-3">80%</div>

                </div>
                
            </div>
            <div class="col-md-4">
              <div class="panel p-3 contact">
                <h5>Elérhetőségeim</h5>
                <p><ion-icon size="small" name="call-outline"></ion-icon> Telefon: +36306670890</p>
                <p><ion-icon size="small" name="mail-outline"></ion-icon> Email: mrkhungary@gmail.com</p>
                <p><ion-icon size="small" name="logo-facebook"></ion-icon> Facebook: <a href="https://www.facebook.com/mrkhungary">Katt ide!</a></p>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-12">
              <div class="panel p-3">
                <h5>Projectjeim</h5>
                  <div class="project">
                    <div class="col-md-2">
                      <img src="assets/koz.PNG" alt="közössegi szolgálat" style="width: 100%">
                    </div>
                    <div class="col-md-10">
                      <h5>Iskolai Közösségi szolgálat</h5>
                      <p>Az iskolám számára készített weboldal, mely a közösségi szolgálatok nyilvántatrásáért felelős. A diákok ezen a felületen tudnak jelentkezni. Nyelv: <span>PHP+JS</span></p>
                      <p>Élő demo: <a href="https://www.ady-nagyatad.hu/kozossegiszolgalat">https://www.ady-nagyatad.hu/kozossegiszolgalat</a></p>
                    </div>

                  </div>
                  <div class="project">
                    <div class="col-md-2">
                      <img src="assets/shop.PNG" alt="közössegi szolgálat" style="width: 80%">
                    </div>
                    <div class="col-md-10">
                      <h5>NodeJS + ReactJS Webshop</h5>
                      <p>Gyakorlásként készített webshopom. Még fejlesztés alatt áll.</p>
                      <p>Nyelv:<span>NodeJS+ReactJS</span></p>
                      
                    </div>

                  </div>
                  <div class="project">
                    <div class="col-md-2" style="display: flex;max-width: 40%;">

                        <img src="assets/easy/1.PNG" alt="EasyConf" id="myImg" style="width: 100%">
                        <img src="assets/easy/2.PNG" alt="EasyConf" style="width: 100%">
                    </div>

                    <div class="col-md-12">
                      <h5>EasyConf - Router kezelő</h5>
                      <p>Kezdetleges weboldalam amelyet több router együttes módosítására hoztam létre. Az oldal SSH-n keresztül kommunikál az útválasztókkal.</p>
                      <p>Nyelv:<span>NodeJS+PUG</span></p>
                    </div>

                  </div>
              </div>           
          </div>
          <div class="modal">
            <span class="close">&times;</span>
            <img class="modal-content">
          </div>
          <footer class="text-center m-3">Made with love by Mark</footer>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
