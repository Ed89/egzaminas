<!doctype html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.google.com/specimen/Exo"/>
        <title>Document</title>
    </head>
    <body>
        <header>
            <div class="header">
                <div class="header-div">
                    <a href="#"></a><img src="images/logo.png" alt="logo">
                </div>
            </div>
        </header>

        <main  class="pad-left">
            <div>
                <h1 style="color:#2c3e50; text-height: 32px; font-weight: bold">Naujausi kursai</h1>
            </div>
            <section>

                <div class="card">
                    <img src="images/php.jpg" alt="php">
                    <div class="card-text">
                        <h3>PHP Pagrindai</h3>
                        <p class="card-autor">Autorius</p>
                        <hr>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...... </p>
                        <hr>
                    </div>
                    <div class="card-com-star">
                        <div class="card-star">
                            <div></div>
                            <p>4</p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="card-comment">
                            <span class="fa fa-comment"></span>
                            <p>15</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="images/css.jpg" alt="css">
                    <div class="card-text">
                        <h3>HTML/CSS Ivadas</h3>
                        <p class="card-autor">Autorius</p>
                        <hr>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...... </p>
                        <hr>
                    </div>
                    <div class="card-com-star">
                        <div class="card-star">
                            <div></div>
                            <p>4</p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="card-comment">
                            <span class="fa fa-comment"></span>
                            <p>27</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="images/git.jpg" alt="git">
                    <div class="card-text">
                        <h3>Pazintis Su GIT</h3>
                        <p class="card-autor">Autorius</p>
                        <hr>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...... </p>
                        <hr>
                    </div>
                    <div class="card-com-star">
                        <div class="card-star">
                            <div></div>
                            <p>3</p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="card-comment">
                            <span class="fa fa-comment"></span>
                            <p>9</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="images/js.jpg" alt="js">
                    <div class="card-text">
                        <h3>JavaScript Zaliems</h3>
                        <p class="card-autor">Autorius</p>
                        <hr>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...... </p>
                        <hr>
                    </div>
                    <div class="card-com-star">
                        <div class="card-star">
                            <div></div>
                            <p>4</p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <div class="card-comment">
                            <span class="fa fa-comment"></span>
                            <p>9</p>
                        </div>
                    </div>
                </div>




            </section>
        </main>


        <div class="naujienos pad-left">
            <form action="" name="Form">
                <h2 style="color:#2c3e50;text-height: 32px; font-weight: bold"">Sekite naujienas</h2>
                <p>Norite gauti pranesimus apie naujus kursus? Uzsisakykite musu naujienlaisku!</p>
                <label for="fname">Vardas:</label><br>
                <input class="input-text" type="text" id="fname" name="fname" value=""><br>
                <label for="lemail">El.pastas:</label><br>
                <input class="input-text"  type="email" id="lname" name="lemail" value=""><br><br>
                <input class="input-btn" type="submit" id="submit" value="Uzsisakyti" onclick="alerted();">
            </form> 
        </div>
        <br>
        <hr>
        <p class="pad-left">&copy; 2021 Eduardas Brazauskas</p>
        <script src="script.js"></script>
    </body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

