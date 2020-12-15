<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="css/monportfolio.css" media="screen">
        <meta charset= "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script src="https://kit.fontawesome.com/7b54ad429c.js" crossorigin="anonymous"></script>
        <title>Joao REIS / Portfolio / Web Devellopeur</title>
    </head>
        <body>
        
        <?php include "header.php";?>
        
            
        <div class="corp">    
            
            <section id="NomDebut">
                <div id="box">
                    <h1 id="nom">Joao REIS</h1>
                    <p id="dev">Developpeur Web</p>
                </div>
               
                </div>
            </section>

            <section id="portfolio">
                <h2>Portfolio</h2>
                    <div id="images">
                        <img src="images/pic02.jpg">
                        <img src="images/pic04.jpg">
                        <img src="images/pic03.jpg">
                        
                    </div>
            </section>

            <section id="competences">
                <h2>Competences</h2>
                
                <div class="Bars">
                    <div id="htmlcss">
                        <h3>HTML</h3>
                        <div class="progressBar"></div>

                        <h3>CSS</h3>
                        <div class="progressBar"></div>
                    </div>
                    <div id="jsphp">
                        <h3>JavaScript</h3>
                        <div class="progressBar1"></div>

                        <h3>PHP</h3>
                        <div class="progressBar2"></div>
                    </div>
                </div>

                
            </div>

            </section>

            <section id="formations">
                <h2>Formations</h2>

            </section>

            <section id="a_propos">
                <h2>A Propos</h2>
                <p id="propos">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </section>


        </div>

        <footer>
            <a href="www.facebook.com"><i class="fab fa-facebook-square fa-2x"></i></a>
            <a href="www.twitter.com"><i class="fab fa-twitter-square fa-2x"></i></a>
            <a href="www.linkidin.com"><i class="fab fa-linkedin fa-2x"></i></a>
            <!-- Trigger/Open The Modal -->
                <button id="myBtn">Open Modal</button>

                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <p>Some text in the Modal..</p>
                    </div>

                </div>
            <div id="copyright">
                <p id="copy">Copyright</p>
            </div>
        </footer>
       
        <script type="text/javascript" src="monportfolio.js"></script>

        </body>
</html>