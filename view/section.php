<?php
session_start(); // Démarrer la session

if (!isset($_SESSION['id'])) {
    // L'utilisateur est connecté, redirigez-le vers le tableau de bord
    header("Location: ../index.php");
    exit(); // Assurez-vous de sortir du script après la redirection
}
?>

<!DOCTYPE html>
<html lang="en-CI">
  <head>
    <meta charset="utf_8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="./style.css">
    <title>Section 2</title>
    <script src="https://kit.fontawesome.com/f31faae043.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  </head>

  <body>
    <div id="main">
      <nav>
        <img src="../asset/logo-linkedin.png" />
        <div>
          <span id="toggleMenu" class="mob">
            <i class="fa-solid fa-bars"></i>
          </span> 
          <ul id="infos">
            <a href="#"><li>A PROPOS</li></a>
            <a href="#"><li>AWARDS</li></a>
            <a href="#foot"><li>CONTACT</li></a>
            <a href="#"><li>PRENDRE SON TICKET D'ENTREE</li></a>
          </ul>
        </div>
      </nav> 
        <section id="sectionOne">
          <div id="first">
            <h1>LINKEDIN LOCAL ABIDJAN</h1>
            <p>19 Septembre 2023 / Palm Club Hôtel</p>
            <div>
                <a href="#">PRENDRE SON TICKET D'ENTREE</a>
                <a href="#">PASS D'ENTREE: <span>10.000FCFA</span></a>
            </div>
            <div class="btnSlide">
              <div id="f" class="oCircle">
                <div class="oSmCircle"></div>
              </div>
              <div class="oCircle">
                <div class="oSmCircle"></div>
              </div>
            </div>
          </div>
          
          <div id="second">
            <div>
              <h1>LINKEDIN LOCAL ABIDJAN AWARDS</h1>
              <p>Votre évènement inédit dédié à la valorisation de nos 
                experts et influenceurs LindekIn
              </p>
              <button>JE PASSE AU VOTE</button>
            </div>
            <div class="btnSlide">
              <div class="oCircle">
                <div class="oSmCircle"></div>
              </div>
              <div id="s" class="oCircle">
                <div class="oSmCircle"></div>
              </div>
            </div>
          </div>
          
        </section>
        <section id="sectionTwo">
            <div class="text">
              <h1>POURQUOI PARTICIPER A <span>LINKEDIN</span> LOCAL ABIDJAN</h1>
      
              <ul>
                <li>
                  <div class="bcircle"><div class="scircle"></div></div>
                  <span>Pour apprendre à trouver un emploi grâce à LinkedIn.</span>
                </li>
                <li>
                  <div class="bcircle"><div class="scircle"></div></div>
                  <span>Pour rencontrer nos amis virtuels et tisser des liens.</span>
                </li>
                <li>
                  <div class="bcircle"><div class="scircle"></div></div>
                  <span>Pour comprendre le fonctionnement de LinkedIn.</span>
                </li>
                <li>
                  <div class="bcircle"><div class="scircle"></div></div>
                  <span>Pour s'inspirer du parcours des autres.</span>
                </li>
              </ul>
      
              <p>LinkedIn local, un concept CREER en Australie approuvé par LinkedIn 
                  et repris dans plusieurs pays et qui est à sa quatrième édition en 
                  Côte d'Ivoire.
              </p>
      
              <div>
                <div class="date">
                  <i class="fa-solid fa-calendar-days"></i>
                  <p>SAMEDI 09 SEPTEMBRE 2023</p>
                </div> 
                <div class="localisation">
                  <i class="fa-solid fa-location-crosshairs"></i>
                  <p>PALM CLUB HÔTEL ABIDJAN COCODY</p>
                </div>  
              </div>
            </div>
            <div class="illus">
              <img src="../asset/groupe.png" />
            </div>
        </section>

          <div id="slide">
            <section id="sectionThree">
                <div class="top">
                  <img src="../asset/logo-awards.png" />
                  <h1>JE FAIS LE CHOIX DE MON INFLUENCEUR LINKEDIN LOCAL FAVORI</h1>
                </div>
                <div class="bottom">

                  <div class="categorie">
                    <a id="sFour" href="#sectionFour">  
                      <div class="catCircle">
                      Jeunes Producteurs de Contenus
                      </div>
                    </a>
                    <img src="../asset/plandetravail.png" />
                  </div>

                  <div class="categorie">
                    <a id="sFive" href="#sectionFive">  
                    <div class="catCircle">
                    Créateurs de contenus RH motivation Consultant
                    </div>
                    </a>
                    <img src="../asset/plandetravail.png" />
                  </div>
                  <div class="categorie">
                    <a id="sSix" href="#sectionSix">  
                    <div class="catCircle">
                    Coachs & Experts
                    </div>
                    </a>
                    <img src="../asset/plandetravail.png" />
                  </div>
                  <div class="categorie">
                    <a id="sSeven" href="#sectionSeven">  
                    <div class="catCircle">
                    Contributeurs LinkedIn
                    </div>
                    </a>
                    <img src="../asset/plandetravail.png" />
                  </div>
                </div>
              </section>
    
              <section id="sectionFour">
                <div class="top">
                  <img src="../asset/logo-awards.png" />
                  <h1>JEUNES PRODUCTEURS DE CONTENUS</h1>
                </div>
                
                <div class="prev"></div>
                <div class="next"></div> 
                
                <div class="bottom" id="b1">
                  <?php //include "../function/includes/script1.php"; ?>
                </div>
              </section>
    
              <section id="sectionFive">
                <div class="top">
                  <img src="../asset/logo-awards.png" />
                  <h1>CREATEURS DE CONTENUS RH / MOTIVATION / CONSULTANTS</h1>
                </div>
                
                <div class="prev"></div>
                <div class="next"></div>

                <div class="bottom" id="b2">
                  <?php //include "../function/includes/script2.php"; ?>
                </div>
              </section>
    
              <section id="sectionSix">
                <div class="top">
                  <img src="../asset/logo-awards.png" />
                  <h1>COACHS / EXPERTS</h1>
                </div>
                
                <div class="prev"></div>
                <div class="next"></div>

                <div class="bottom" id="b3">
                  <?php //include "../function/includes/script3.php"; ?>
                </div>
              </section>
    
              <section id="sectionSeven">
                <div class="top">
                  <img src="../asset/logo-awards.png" />
                  <h1>CONTRIBUTEURS LINKEDIN</h1>
                </div>
                
                <div class="prev"></div>
                <div class="next"></div>

                <div class="bottom" id="b4">
                  <?php //include "../function/includes/script4.php"; ?>
                </div>
              </section>
          </div> 
          <footer id="foot">
            <img src="../asset/logo-blanc-footer.png" />
            <div>
              <div class="contact">
                <h2>Contact Us</h2>
                <div>
                  <i class="fa-solid fa-phone-volume"></i><span>+225 07 48 42 47 25</span>
                </div>
                <div>
                  <i class="fa-solid fa-envelope"></i><span>studiosadinkra@gmail.com</span>
                </div>
                <div class="social">
                  <a href="https://facebook.com"><i class="fa-brands fa-square-facebook"></i></a>
                  <a href="https://instagram.com"><i class="fa-brands fa-square-instagram"></i></a>
                  <a href="https://twitter.com"><i class="fa-brands fa-square-x-twitter"></i></a>
                  <a href="https://linkedin.com"><i class="fa-brands fa-linkedin"></i></a>
                </div>
              </div>
              <div class="info">
                <h2>Information</h2>
                <div>
                  <ul>
                    <li>About Us</li>
                    <li>Services</li>
                    <li>Team</li>
                    <li>Projets</li>
                    <li>Coaching</li>
                  </ul>
                  <ul>
                    <li>Brandblog</li>
                    <li>Feedback</li>
                    <li>Supports</li>
                    <li>Terms & Condition</li>
                    <li>Privacy Policy</li>
                  </ul> 
                </div>
              </div>
              <div class="newsletter">
                <h2>Newsletter</h2>
                <form action="" method="POST">
                  <input type="text" name="name" placeholder="Votre Nom" />
                  <input type="text" name="email" placeholder="Votre Email" />
                  <button type="submit">Recevez nos actualités</button>
                </form>
              </div>
            </div>
            <div id="fBottom">
              <span>&copy; X3M Ideas Limited <span id="now"></span>. Politique De Confidentialité</span>
              <span>All Rights Reserved.</span>
            </div>
          </footer>    
    </div>
  </body>

  <script src="../script/script.js"></script>
  <script src="../script/ajax1.js"></script>
  <script src="../script/ajax2.js"></script>
  <script src="../script/ajax3.js"></script>
  <script src="../script/ajax4.js"></script>


</html>