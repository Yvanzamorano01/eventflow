<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENT WEBSITE</title>
   <!-- <link rel="stylesheet" href="style.css"> -->
   <!-- <script defer src="main.js"></script> -->
    <style>
        /* /Home section/ */

body {
    /* background-color:white; */
    font-family: arial, sans-serif;
    justify-content: center;
    padding-top: 10px;
    font-size: 15px;
    align-content:center;  
    margin-left: 1rem;
    position: absolute;
    left: 100px;
} 

header {
    background-color: #fff;
    width: 1100px;
    text-align: center;
    justify-content: center;
    padding-right: 7rem;
}

span{
    color: #f17617;
}

.header-left {
    background-color: #fff;
}

.top-header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 50px 50px 50px 50px;
    background-color: #fff;
}

.header-right {
    color: white;
    text-decoration: none;
    margin-left: 50px;
    font-size: 18px;
    display: flex;
}

.inscrire {
    padding-right: 50px;
}

nav a {
    text-decoration: none;
    color: #333;
    background-color: #fff;
    margin-right: 40px;
    font-size: 18px;
}

nav a:hover{
    text-decoration: underline;
}

button {
    background-color: orange;
    color: black;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
}

button:hover{
    background-color: bisque;
}

.content {
    margin-top: 30px;
    margin-bottom: 50px;
    text-align: center;
}

h1 {
    font-size: 24px;
}

p {
    font-size: 16px;
}

.main-content {
    display: flex;
    /* max-width: 100px; */
    width: 1300px;
    height: 400px;
    justify-content: space-evenly;
    border-radius: 20px;
}

.left {
    flex: 1;
    flex-grow: 1;
    padding: 20px;
    margin-left: 20px;
    text-align: center;
    background-color: #edebea;
    border-radius: 20px 0px 0px 20px;
}

.right {
    flex: 1;
    flex-grow: 1;
    padding: 20px;
    background-color: #e0e0e0;
    border-radius: 0px 20px 20px 0px;
    background-image: url(./img/qr_code.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}


.left_p {
    font-size: 20px;
    font-weight: bold;
    padding-top: 50px;
    padding-bottom: 50px;
}


/* /Display of events section/ */
.first{
    text-align: center;
    background-color: #fff;
}

.body1{
    padding: 0;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 150vh;
    overflow: hidden;
}

.img_container  img, .img_container2  img, .img_container3  img{
    width: 300px;
    height: 175px;
    object-fit: cover;
    border-radius: 8px;
}

.card, .card2, .card3 {
    border: 1px solid #f5f4fe;
    width: 300px;
    height: 360px;
    margin-left: 10px;
    border-radius: 8px;
    box-shadow: 1px;
    background-color: #f5f4fe;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5); 
}

div > h3{
    text-align: center;
}

.third, .third2, .third3 {
    background-color: #fbb00f;
    font-size: 0.85rem;
    width: 90px;
}

.rectangle, .rectangle2, .rectangle3 {
    margin-left: 0.30rem;
}

.square, .square2, .square3 {
    background: #fbb00f;
    width: 60px;
    height: 90px;
    border-radius: 10px;
    transform: rotate(-106deg);
    box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.5); /* Shadow effect */
    color:black;
    text-align: center;
    font-family: Arial, sans-serif;
    display: flex;
    text-align: center;
    justify-content: center;
    padding: 1rem;
    padding-bottom: 10rem;
    position: relative;
    left: 105px;
    bottom: 185px;
    font-size: 18px;
    margin-left: 4rem;
    margin-top: 4rem;
    background-color: #FFA500;  
    padding: 20px; 
    box-shadow: 5px 5px 15px rgba(0,0,0,0.2);
    padding-left: 1rem;
    margin-right: 20px;
} 

.more, .more2, .more3 {
    transform: rotate(100deg);
    color:black; 
    margin: 5px 0; 
    
} 

.more2 h3{
    text-align: center;
}

li:not(:last-child){
    margin-bottom: 0.5rem;
    
}

li{
    list-style-type: none;
} 

.clock[alt="icon"]{
    width: 27px;
    height: 22px;
    position: relative;
}

.more2 h3{
    text-align: center;
}
li:not(:last-child){
    margin-bottom: 0.5rem;
    
}
li{
    list-style-type: none;
} 

    .clock[alt="icon"]{
    width: 27px;
    height: 22px;
    position: relative;
} 

/*  .align{
    display: inline-block;

 } */  

.event1, .event2, .event3, .event4, .event5, .event6 {
    display: inline-block;
}

.deux{
    margin-bottom: 3rem;
}
main ,.deux{
    display: flex;
    justify-content: center;
    gap: 10px; /* Space between cards */
    margin: 3rem;
}
ol{
    padding-left: 10px;
}
img[alt="icon"]{
    width: 15px;
}
img[alt="icon2"]{
    width: 20px;
}
ol img[alt="icon2"]{
    padding-right: 9px;
}


/Contact us section/
#body{
    position: relative;
    right: 70px;
}

.contact{
    display: flex;
    gap: 30px;
    width: 1000px;
    padding-top: 80px;
    padding-left: 150px;
    align-items: center;
    margin-left: 50px;

}
.side1{
    background-color: rgb(244, 240, 236);
    padding: 20px;
    border-radius: 10px;
    column-gap: 10px;
    width: 300px;
    height: 380px;
    border:2px solid rgb(244, 240, 236);
}
.about{
    gap: 5px;
    padding: 1px; 
    margin-left: -22px;
    margin-right: -22px;
    margin-top: -22px;
    text-align: center;
    border:2px solid rgb(244, 240, 236);
    border-start-end-radius: 10px;
    border-top-left-radius: 10px;
}
.wel{
    font-size: 20px;
    text-align:left;
}
.add{
    gap: 5px;
    padding: 1px; 
    margin-left: -22px;
    margin-right: -22px;
    margin-top: -22px;
    border:2px solid rgb(244, 240, 236);
    border-start-end-radius: 10px;
    border-top-left-radius: 10px;
    text-align:center;
    justify-content:center;
}
.will{
    gap: 5px;
    padding: 1px; 
    margin-left: -12px;
    margin-right: -12px;
    margin-top: -12px;
    text-align:center;
    border:2px solid rgb(244, 240, 236);
    border-start-end-radius: 10px;
    border-top-left-radius: 10px;
}
.side11{
    background-color: rgb(244, 240, 236);
    padding: 20px;
    border-radius: 10px;
    column-gap: 10px;
    width: 300px;
    height: 380px;
    border:2px solid rgb(244, 240, 236);
}
.side2{
    background-color:rgb(244, 240, 236);
    padding: 10px;
    border-radius: 10px;
    width: 300px;
    height: 400px;
    border:2px solid rgb(244, 240, 236);
}
 
form{
    display: flex;
    flex-direction: column;
}
label{
    margin-top: 8px;
    color: #333;
}
input{
    padding: 15px;
    margin-top: 0px;
    border: 1px solid #fbfbf7;
    border-radius: 5px;
    color: #080808;
}
input:hover{
    background-color:#e0e5ec ;
    cursor:pointer;
}
h3{
    text-align: center;
    font-size: 15px;
}

.button1 {
    padding:  10px;
    margin-top: 10px;
    margin-left: 80px;
    background-color: orange;
    text-align: center;
    align-items: center;
    width: 100PX;
    border-radius: 15px;
    border: 1px solid #ffc672;
    color:rgb(10, 10, 10);
    cursor: pointer;
}

.button1 :hover{
    background-color: #e0e5ec;
    cursor: pointer;
}

.button1 :active{
    background-color: #090a0a;
    transform:scale(0.95);
}

#comment{
    font-size: 15px;
    font-family: Arial, Helvetica, sans-serif;
    width: 295px;
    height: 150px;
    border: 1px solid white;
    border-radius: 10px;
    margin-right: 10px;
    cursor: pointer;
}

#comment:hover{
    background-color: #fbfbf7;

}

footer{
    text-align: center;
    background-color: white;
    color: black;
    height: 37px;
    border-radius: 5px;
    font-size: 20px;
    padding-bottom: 1px;
    padding-top: 0px;
}


/* Advantages section */
.h1 {
    text-align: left; 
    margin-top: 40px;
}

.advantages {
    vertical-align: middle;
}

.advantage_1, .advantage_2, .advantage_3, .advantage_4, .advantage_5, .advantage_6, .advantage_7 {
    font-size: 17px;
    border: 1px solid rgb(254, 224, 203);
    border-radius: 10px;
    background-color: white;
    width: 250px;
    height: 25px;
    text-align: center;
    margin-left: 30px;
    margin-top: 55px;
    box-shadow: 0 1px 3px rgba(40, 46, 117, 0.601);
}

.advantage_2, .advantage_3, .advantage_4, .advantage_5, .advantage_6, .advantage_7 {
    margin-left: 60px;
    margin-top: 20px;
}

.advantage_3 {
    margin-left: 90px;
}

.advantage_4 {
    margin-left: 120px;
}

.advantage_5 {
    margin-left: 150px;
}

.advantage_6 {
    margin-left: 180px;
}

.advantage_7 {
    margin-left: 210px;
}


/* Responsive */
/* Responsive adjustments */

/* For screens smaller than 964px */
@media (max-width: 964px) {
    header {
        padding: 0 20px;
    }

    .top-header-content {
        flex-direction: column;
        padding: 12px;
    }

    header .menu {
        display: none;
    }

    .toggle_menu {
        display: flex;
        height: 40px;
        width: 40px;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .toggle_menu::before, .toggle_menu::after {
        content: "";
        height: 3px;
        width: 28px;
        background-color: #27ae60;
        border-radius: 6px;
        transition: 0.5s;
    }

    .toggle_menu.active::before {
        transform: translateY(0) rotate(135deg);
        box-shadow: 0 0 0 #27ae60;
    }

    .toggle_menu.active::after {
        transform: translateY(0) rotate(-135deg);
    }

    header .menu.responsive {
        display: flex;
        position: absolute;
        top: 50px;
        left: 0;
        width: 100%;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    header .menu.responsive li {
        margin: 15px 0;
    }

    .main-content {
        flex-direction: column;
    }

    .left, .right {
        margin-left: 0;
        padding: 10px;
    }

    .events .event {
        width: 45%;
        margin: 10px 0;
    }

    .events .event img {
        height: 150px;
    }

    .contact {
        flex-direction: column;
        padding-left: 0;
    }

    .side1, .side11, .side2 {
        width: 100%;
        height: auto;
        margin: 10px 0;
    }

    .button1 {
        width: 100%;
        margin-left: 0;
    }

    #comment {
        width: 100%;
    }
}

/* For screens smaller than 580px */
@media (max-width: 580px) {
    .events .event {
        width: 100%;
        margin: 5px 0;
    }

    .events .event img {
        height: 100px;
    }

    .contact {
        padding-left: 0;
    }

    .side1, .side11, .side2 {
        width: 100%;
        height: auto;
        margin: 10px 0;
    }

    .button1 {
        width: 100%;
        margin-left: 0;
    }

    #comment {
        width: 100%;
    }
}

    </style>
</head>

<body>
    <header>
        <div class="top-header-content">
            <div class="header-left">
                <img src="img/1-removebg-preview.png" alt="ticket" width="100px" height="100px">
            </div>
            <div class="header-center">
                <nav>
                    <a href="#accueil">Accueil</a>
                    <a href="#events">Evenements</a>
                    <a href="#contact">Contacts</a>
                </nav>
            </div>
            <div class="header-right">
                <div class="inscrire">
                    <button onclick="location.href='{{ route('register') }}'">S'inscrire</button>
                </div>
                <div class="connecter">
                    <button onclick="location.href='{{ route('login') }}'">Se connecter</button>
                </div>
            </div>
        </div>
    </header>

    <section id="#accueil">
        <div class="content">
            <h1>
                Buy ton ticket un tour!!!!!!!
            </h1>
            <p>
                Yo mola j'ai mon ticket et toi?<br>
                Mais qu'est ce que tu attend!?
            </p>
            <button>Acheter</button>
        </div>
        <div class="main-content">
            <div class="left">
                <h1 class="left_h1">Tu as un evenement ?</h1>
                <p class="left_p">Ne stresses pas!!!<br>Envoie nous ton ticket!!!</p>
                <button>Vend ton ticket</button>
            </div>
            <div class="right">
                <!-- <img src="img/.jpeg" alt="qr-code" width="600px" height="410px"> -->
            </div>
        </div>
    </section>


    <section id="#events" class="body1">
        <header class="first">
            <h1> Ne rate pas ceci Mola!!! </h1>
        </header>

        <main>
                <div class="event1">
                <div class="section1">
                    <div class="card">
                        <div class="img_container">
                            <div><img src="img/rose.png" alt="super star"></div>
                        </div>
                            <h3>Concert Cysoul</h3> 
                            <div class="align">
                            <div class="second">
                                <ol>
                                <li><img src="img/calendar.png" alt="icon">&nbsp;&nbsp;&nbsp;16/08/2024</li>
                                <li><img src="img/clock.png" alt="icon"> &nbsp;&nbsp;&nbsp;A partir de 20h</li>
                                <li><img src="img/pin.jpeg" alt="icon2">Stade Japoma</li>
                                </ol>
                                </div>
                            <div class="rectangle">
                                <p class="third"> 10 ticket restant</p>
                            </div>
                                <div class="square">
                                    <section class="more">
                                        <h3> Pass</h3>
                                        <!-- <p> premium: &nbsp; &nbsp;&nbsp; 15000fcfa</p>
                                        <p> couple: &nbsp; &nbsp;&nbsp; 10000fcfa</p>
                                        <p> single: &nbsp; &nbsp;&nbsp; 5000fcfa</p> --> 
                                    </section>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
                
            <div class="event2">
                <div class="section2">
                    <div class="card2">
                        <div class="img_container2">
                            <div> <img src="img/football.jpeg" alt="super star"></div>
                        </div>
                            <h3>Concert Cysoul</h3> 
                            <div class="align">
                            <div class="second">
                                <ol>
                                <li> <img src="img/calendar.png" alt="icon">&nbsp;&nbsp;&nbsp;16/08/2024</li>
                                <li> <img src="img/clock.png" alt="icon">&nbsp;&nbsp;&nbsp;A partir de 20h</li>
                                <li> <img src="img/pin.jpeg" alt="icon2">Stade Japoma</li>
                                
                                </ol>
                                </div>
                            <div class="rectangle2">
                                <p class="third2"> 10 ticket restant</p>
                            </div>
                                <div class="square2">
                                    <section class="more2">
                                        <h3> Pass</h3>
                                        <!-- <p> premium: &nbsp; &nbsp;&nbsp; 15000fcfa</p>
                                        <p> couple: &nbsp; &nbsp;&nbsp; 10000fcfa</p>
                                        <p> single: &nbsp; &nbsp;&nbsp; 5000fcfa</p> --> 
                                    </section>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            
            
            <div class="event3">
                <div class="section2">
                    <div class="card3">
                        <div class="img_container3">
                            <div> <img src="img/OIP.jpeg" alt="super star"></div>
                        </div>
                            <h3>Concert Cysoul</h3> 
                            <div class="align">
                            <div class="second">
                                <ol>
                                <li> <img src="img/calendar.png" alt="icon">&nbsp;&nbsp;&nbsp;16/08/2024</li>
                                <li><img src="img/clock.png" alt="icon">&nbsp;&nbsp;&nbsp;A partir de 20h</li>
                                <li> <img src="img/pin.jpeg" alt="icon2">Stade Japoma</li>
                                
                                </ol>
                                </div>
                            <div class="rectangle3">
                                <p class="third3"> 10 ticket restant</p>
                            </div>
                                <div class="square3">
                                    <section class="more3">
                                        <h3> Pass</h3>
                                        <!-- <p> premium: &nbsp; &nbsp;&nbsp; 15000fcfa</p>
                                        <p> couple: &nbsp; &nbsp;&nbsp; 10000fcfa</p>
                                        <p> single: &nbsp; &nbsp;&nbsp; 5000fcfa</p> --> 
                                    </section>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </main>
    
        <div class="deux">
            <div class="event4">
                <div class="section2">
                    <div class="card">
                        <div class="img_container">
                            <div> <img src="img/R.gif" alt="super star"></div>
                        </div>
                            <h3>Concert Cysoul</h3> 
                            <div class="align">
                            <div class="second">
                                <ol>
                                <li><img src="img/calendar.png" alt="icon">&nbsp;&nbsp;&nbsp;16/08/2024</li>
                                <li><img src="img/clock.png" alt="icon">&nbsp;&nbsp;&nbsp;A partir de 20h</li>
                                <li><img src="img/pin.jpeg" alt="icon2">Stade Japoma</li>
                                
                                </ol>
                                </div>
                            <div class="rectangle">
                                <p class="third"> 10 ticket restant</p>
                            </div>
                                <div class="square">
                                <section class="more">
                                    <h3> Pass</h3>
                                    <!-- <p> premium: &nbsp; &nbsp;&nbsp; 15000fcfa</p>
                                    <p> couple: &nbsp; &nbsp;&nbsp; 10000fcfa</p>
                                    <p> single: &nbsp; &nbsp;&nbsp; 5000fcfa</p> --> 
                                </section>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        
            <div class="event5">
                <div class="section2">
                    <div class="card">
                        <div class="img_container">
                            <div> <img src="img/basketball.gif" alt="super star"></div>
                        </div>
                            <h3>Concert Cysoul</h3> 
                            <div class="align">
                            <div class="second">
                                <ol>
                                <li><img src="img/calendar.png" alt="icon">&nbsp;&nbsp;&nbsp;16/08/2024</li>
                                <li><img src="img/clock.png" alt="icon">&nbsp;&nbsp;&nbsp;A partir de 20h</li>
                                <li><img src="img/pin.jpeg" alt="icon2">Stade Japoma</li>
                                
                                </ol>
                                </div>
                            <div class="rectangle">
                                <p class="third"> 10 ticket restant</p>
                            </div>
                                <div class="square">
                                    <div class="more">
                                        <h3> Pass</h3>
                                        <!-- <p> premium: &nbsp; &nbsp;&nbsp; 15000fcfa</p>
                                        <p> couple: &nbsp; &nbsp;&nbsp; 10000fcfa</p>
                                        <p> single: &nbsp; &nbsp;&nbsp; 5000fcfa</p> --> 
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            
        
            <div class="event6">
                <div class="section2">
                    <div class="card">
                        <div class="img_container">
                            <div> <img src="img/party.gif" alt="super star"></div>
                        </div>
                            <h3>Concert Cysoul</h3> 
                            <div class="align">
                            <div class="second">
                                <ol>
                                <li><img src="img/calendar.png" alt="icon">&nbsp;&nbsp;&nbsp;16/08/2024</li>
                                <li><img src="img/clock.png" alt="icon">&nbsp;&nbsp;&nbsp;A partir de 20h</li>
                                <li><img src="img/pin.jpeg" alt="icon2">Stade Japoma</li>
                                
                                </ol>
                                </div>
                            <div class="rectangle">
                                <p class="third"> 10 ticket restant</p>
                            </div>
                                <div class="square">
                                    <div class="more">
                                        <h3> Pass</h3>
                                        <!-- <p> premium: &nbsp; &nbsp;&nbsp; 15000fcfa</p>
                                        <p> couple: &nbsp; &nbsp;&nbsp; 10000fcfa</p>
                                        <p> single: &nbsp; &nbsp;&nbsp; 5000fcfa</p> --> 
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="advantage_site">
        <h1 class="h1">
            <b>Pourquoi nous choisir?</b>
        </h1>
        <div class="advantages">
            <div class="advantage_1">
               <b>Intéraction et engagement</b>
            </div>
            <div class="advantage_2">
                <b>Inscriptions 24/7</b>
            </div>
            <div class="advantage_3">
               <b>Inscriptions Éfficaces</b>
            </div>
            <div class="advantage_4">
                <b>Données Sécurisées</b>
            </div>
            <div class="advantage_5">
                <b>Gestion simplifiée</b>
            </div>
            <div class="advantage_6">
               <b>Visibilité accrue</b>
            </div>
            <div class="advantage_7">
                <b>Processus Écologique</b>
            </div>
        </div>
    </section>

    <section id="body" class="contact">
        <section class="side1">
            <div class="about">
                <h4>ABOUT US</h4>
            </div>
            <div class="wel">
                <p>Welcome to <span>EventFlow</span>, your go-to platform for booking tickets to the most exciting events around!
                    Whether you're looking for concerts, sport games, shows, or any other live experience, we got your
                    covered. Our misssion is to make it convenient for you to find and book your favourite events, all
                    in one place.</p>
                <p>Join us in creating unforgettable memories!</p>
            </div>
        </section>
        <section class="side11">
            <div class="add">
                <h4>ADDRESS</h4>
            </div>
            <P> CAMEROON DOUALA</P>
            <h4>CONTACT</h4>
            <p>TEL: (+237) 690048061/ 679073854</p>
            <p>EMAIL:OURS@gmail.com</p>
        </section>
        <section class="side2">
            <form>
                <div class="will">
                    <h3>WE'RE OPEN FOR ANY COMMENT</h3>
                </div>
                <label for="email">EMAIL :</label>
                <input type="email" id="email" placeholder="Enter your email..."><br/>
                <label for="comment">COMMENT :</label>
                <textarea id="comment" placeholder="Write your comment..."></textarea>
                <button class="button1" type="submit">summit</button>
            </form>
        </section>
    </section>
    <footer>
        <p>2024 &copy; <span>EventFlow</span>, ALL RIGHTS RESERVED.</p>
    </footer>
    
</body>

</html>