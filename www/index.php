<?php
include ("index2.php");
pre_r($_POST);
?>
<!DOCTYPE html>
<html lang="fr">
  

   <head>
      <meta charset='utf-8'>
      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      <title>BIKE</title>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel='stylesheet' type='text/css' media='screen' href='./main.css'>
      <!--script src='main.js'></script-->
      <script src="https://kit.fontawesome.com/f044dd7b33.js" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   </head>
   <body>

     

      <header>
         <section class="background">
            <nav class="navbar navbar-expand-lg navbar-light" id="navibar">
               <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                     data-bs-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="collapsibleNavbar">
                     <ul class="navbar-nav justify-content-center w-100">
                        <li class="nav-item">
                           <button id="click">ABOUT US</button>
                        </li>
                        <li> . </li>
                        <li class="nav-item">
                           <button id="click1">WORK</button>
                        </li>
                        <img src="./Images/logo-a.png" width="80" height="80" alt="Logo">
                        <li class="nav-item">
                           <button id="click2">SHOP</button>
                        </li>
                        <li> . </li>
                        <li class="nav-item">
                           
                                   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
   Contact
 </button>
 
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Formulaire d'enregistrement</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
          <!-- form -->

          <!-- action et methode ajoutée -->
         <form action="index.php" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp">
             
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1">
            </div>
           
            <button type="submit" class="btn btn-primary">Enregistrer</button>
          </form>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         
       </div>
     </div>
   </div>
 </div>
                        </li>
                     </ul>
                     <!--J'ai rajouté les liens en id pour naviguer vers les  différentes parties de la page.-->
                  </div>
               </div>
            </nav>
         </section>
      </header>
      <div id="about">
      </div>
      <section class="text">
         <div class="entete">
            <img src="./images/logo-b.png" alt="" class="logob">
            <h3>A NEW GENERATION OF VINTAGE BIKE</h3>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of type
            and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
            into electronic typesetting, remaining essentially unchanged.
         </div>
      </section>
      <section>
         <div class="row">
            <div class="col-md-8 col-sm-12" id="logo-3">
               <img src="./Images/logo-c.png" alt="" class="logoc">
            </div>
            <div class="col-md-4 col-sm-12">
               <div class="p-2" id="p2">
                  <div class="olivia">
                     <img src="./Images/logo-d.png" alt="">
                     <h3>VINTAGE OLIVIA</h3>
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                     the
                     industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of
                     type
                     and scrambled it to make a type specimen book. It has survived.
                  </div>
               </div>
               <div class="imageC-fluid">
                  <div class="logo4"><img src="./Images/Image-C.png" class="imagec" alt=""></div>
               </div>
            </div>
         </div>
      </section>
      <div id="work">
      </div>
      <section>
         <div class="row">
            <div class="col-md-4 col-sm-12">
               <div class="p-2" style="line-height: 1.5em;">
                  <div style="position: relative; top: 1.563rem;">
                     <img src="./Images/Logo-f.png" alt="">
                     <h3>LA BORIOSA</h3>
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                     the
                     industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of
                     type
                     and scrambled it to make a type specimen book. It has survived.
                  </div>
               </div>
               <div class="imageE-fluid">
                  <img src="./Images/Image-E.png" alt="">
               </div>
            </div>
            <div class="col-md-8 col-sm-12" id="logo2">
               <img src="./Images/Logo-g.png" alt="" style="height: 6vw; top: 10vw; position: relative;">
            </div>
         </div>
      </section>
      <section>
         <!-- 4ème section représentant la ligne d'image avec le texte au milieu  -->
         <div class="row">
            <div class="col-md-4 col-sm-12" id="logoi">
               <!-- 1ère cologne de 4 de large affichant une image en fond d'écran avec un logo au milieu-->
               <img src="./Images/Image-i.png" class="logo-i" alt="">
               <!--insertion logo-->
            </div>
            <div class="col-md-4 col-sm-12">
               <!-- 2ème cologne de 4 représentant la cologne du milieu et qui contient un texte et une image-->
               <div class="p-2" style="padding: 10%">
                  <div style="position: relative; top: 1.563rem;">
                     <img src="./Images/Logo-j.png" alt="">
                     <!--logo au dessus du texte-->
                     <h3>RETRÒ BIKE - M. HULOT</h3>
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                     the
                     industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of
                     type
                     and scrambled it to make a type specimen book. It has survived.
                  </div>
               </div>
               <div class="imageH-fluid">
                  <!--image qui suit le texte-->
                  <img src="./Images/Image-H.png" class="imagec" alt="">
               </div>
            </div>
            <div class="col-md-4 col-sm-2" id="image-g"></div>
            <!--dernière cologne de la section contenant une image en background-->
         </div>
      </section>
      <div id="shop">
      </div>
      <section>
         <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"
            style="height: 20vw; background-color: #f7f7f7;">
            <div class="carousel-indicators">
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
            </div>
            <br><br><br><br>
            <img src="./Images/Logo-L-Twitter.png" alt="">
            <br><br>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <h4>AOD New York @aod<span style="color: gray;"> / 35 min</span></h4>
                  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut tellus ac nulla semper rhoncus.
                     Nullam a odio portitor, dictum turpis vitae, pretium ante amet.
                  </p>
               </div>
               <div class="carousel-item">
                  <h4>AOD New York @aod<span style="color: gray;"> / 35 min</span></h4>
                  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut tellus ac nulla semper rhoncus.
                     Nullam a odio portitor, dictum turpis vitae, pretium ante amet.
                  </p>
               </div>
               <div class="carousel-item">
                  <h4>AOD New York @aod<span style="color: gray;"> / 35 min</span></h4>
                  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut tellus ac nulla semper rhoncus.
                     Nullam a odio portitor, dictum turpis vitae, pretium ante amet.
                  </p>
               </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
               data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
               data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
         </div>
      </section>
      <section>
         <div class="imagesx">
            <div class="col-md-4 col-sm-12">
               <div class="imagalign">
                  <img src="./Images/Image-i.png" alt="">
                  <img src="./Images/Image-J.png" alt="">
               </div>
               <div class="imageH-fluid"><img src="./Images/Image-K.png" class="imagec" alt=""></div>
            </div>
            <div class="col-md-4 col-sm-12">
               <div class="imagalign">
                  <img src="./Images/Image-L.png" alt="">
                  <img src="./Images/Image-M.png" alt="">
               </div>
            </div>
            <div class="col-md-4 col-sm-12" style="background-color: #64c29e;">
               <div class="col-md-4 col-sm-2">
                  <div style="position: absolute;">
                     <div style="position: relative; top: 5em; left: 10em;">
                        <img src="./images/Logo-O-Velo.png" alt=""><br>
                        <img src="./images/Logo-N-shopNow.png" alt="">
                     </div>
                  </div>
               </div>
               <div class="imagalign" style="position:relative; top: 50%;">
                  <img src="./images/Image-N.png" alt="">
                  <img src="./images/Image-O.png" alt="">
               </div>
            </div>
         </div>
      </section>
      <section>
         <div style="background-color: rgba(29, 27, 27, 0.904); max-width: 100%;">
            <div class="text-center">
               <button type="button" class="btn btn-primary btn-block btn-light btn-outline-dark btn-lg"
                  style="color: white;"><a href="./shop.html">Online Shop</a></button>
            </div>
         </div>
      </section>
      <div id="contact">
      </div>
      <section style="margin-bottom:1.563rem;" class="col-md-12 col-md-offset-3 sign-up">
         <div class="container" style="align-content: center;">
            <h2 class="logo-header"
               style="background-image: url(./Images/logo-a.png); background-repeat: no-repeat;text-align: center; color: #848789; letter-spacing: 1px; font-size: 24px; font-weight: 300; padding-top: 120px; margin: 70px 0 40px 0; font-style: italic;">
               Stay on the saddle!
            </h2>
            <p style="text-align: center; color:gray;"></p>
            <form action="/action_page.php" style="text-align: center;">
            <input type="email" id="email" name="email" placeholder="Enter your email..."
               style="height:8vh; width:47vh;">
            <input type="submit" value="GO"
               style="margin-top:10px;height:4.688rem; width:7.813rem; color:white; background-color:#64c29e;border-color: #64c29e; margin-bottom: 6%;">
         </div>
         <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
   Register
 </button>
 
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Formulaire d'enregistrement</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
          <!-- form -->
          <form action="index.php" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp">
             
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1">
            </div>
           
            <button type="submit" class="btn btn-primary">Enregistrer</button>
          </form>
        
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         
       </div>
     </div>
   </div>
 </div>
      </section>
      <footer>
         <div class="container">
            <div class="row align-items-start">
               <div class="col-md-4 col-sm-2" style="text-align: left; color: gray; line-height: 80px;">
                  <div class="newyork"><strong> AOD New York</strong></div>
                  <div class="avenue">2250 Lexington Avenue</div>
                  <div class="domain">New York, NY 10035-info@domain.com</div>
               </div>
               <div class="col-md-4 col-sm-2" id="logo">
                  <span class="twitter"><i class="fa-brands fa-twitter"></i></span>
                  <span class="facebook"><i class="fa-brands fa-facebook"></i></span>
                  <span class="pinterest"><i class="fa-brands fa-pinterest"></i></span>
                  </id>
               </div>
               <div class="col-md-4 col-sm-2" id="signature" style="color: gray;">
                  <span class="sign">Handcrafted by GGBEP</span>
               </div>
            </div>
         </div>
      </footer>
      
      <script src="main.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
         crossorigin="anonymous"></script>
   </body>
</html>

