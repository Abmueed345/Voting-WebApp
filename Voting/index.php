<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Inside Slider</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        .button-container {
            display: flex;
            background-color: transparent;
            width: 380px;
            height: 60px;
            align-items: center;
            justify-content: space-around;
            border-radius: 10px;
            box-shadow: gray 0px 5px 15px,
                        gray 5px 10px 15px;
            transition: all 0.5s;
        }

        .button-container:hover {
            width: 400px;
            transition: all 0.5s;
        }

        .button {
            outline: 0 !important;
            border: 0 !important;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            transition: all ease-in-out 0.3s;
            cursor: pointer;
        }

        .button:hover {
            transform: translateY(-3px);
        }

        .icon {
            font-size: 20px;
        }

        /* Position the navbar inside the slider */
        .navbar {
            position: absolute;
            top: 20px;
            width: 100%;
            z-index: 10; /* Ensure it's above the slider */
            background-color: transparent; /* Semi-transparent background */
        }

        /* Adjust the image size for proper display */
        .carousel-item img {
            height: 800px; 
            object-fit: cover; /* Cover to maintain aspect ratio */
            width: 100%; /* Ensure full width */
            background-size: cover;
            background-position: center;
            
        }


        @media (max-width: 768px) {
            .carousel-item img {
                height: 400px; /* Adjust height for smaller screens */
            }

            .button {
                width: 40px; /* Smaller button size on mobile */
                height: 40px;
            }

            .button-container {
                width: 200px; /* Adjust width for mobile */
            }
        }

        @media (max-width: 576px) {
            .carousel-item img {
                height: 500px; /* Adjust height for extra small screens */
            }

            .button-container {
                width: 150px; /* Further reduce button container width */
            }
        }

        
.btn {
  width: 200px;
  height: 50px;
  border-radius: 5px;
  border: none;
  transition: all 0.5s ease-in-out;
  font-size: 20px;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  font-weight: 600;
  display: flex;
  align-items: center;
  background: #040f16;
  color: #f5f5f5;
}

.btn:hover {
  box-shadow: 0 0 20px 0px #2e2e2e3a;
}

.btn .icon {
  position: absolute;
  height: 40px;
  width: 70px;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: all 0.5s;
}

.btn .text {
  transform: translateX(55px);
}

.btn:hover .icon {
  width: 175px;
}

.btn:hover .text {
  transition: all 0.5s;
  opacity: 0;
}

.btn:focus {
  outline: none;
}

.btn:active .icon {
  transform: scale(0.85);
}

body{

    background-color: black;

}

.q1{


    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

    margin-top: 150px;

    color: white;

    font-size: 65px;

}

.q2{


    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

    color: white;

    font-size: 15px;

}



/* From Uiverse.io by Spacious74 */ 
.q3 {
  font-size: 1.4em;
  padding: 0.6em 0.8em;
  border-radius: 0.5em;
  border: none;
  background-color: #000;
  color: #fff;
  cursor: pointer;
  box-shadow: 2px 2px 3px #000000b4;
}

.q4 {
  position: relative;
  padding: 3px;
  background: linear-gradient(90deg, #03a9f4, #f441a5);
  border-radius: 0.9em;
  transition: all 0.4s ease;
}

.q4::before {
  content: "";
  position: absolute;
  inset: 0;
  margin: auto;
  border-radius: 0.9em;
  z-index: -10;
  filter: blur(0);
  transition: filter 0.4s ease;
}

.q4:hover::before {
  background: linear-gradient(90deg, #03a9f4, #f441a5);
  filter: blur(1.2em);
}
.q4:active::before {
  filter: blur(0.2em);
}

.q5{

    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

    color: white;

    font-size: 12px;

    transition all 2s;

}

.q5:hover{

    
    border-bottom: 2px solid white;



}

.q6{

    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

    color: white;


    font-size: 60px;
    


}

.q7{

    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; 

    color: white;   

    font-size: 40px;

}

@import url('https://fonts.googleapis.com/css?family=Anton|Roboto');

.word {
  font-family: 'Anton', sans-serif;
  perspective: 1000px; 
}

.word span {
  cursor: pointer;
  display: inline-block;
  font-size: 60px;
  user-select: none;
  line-height: .8;
}

.word span:nth-child(1).active {
  animation: balance 1.5s ease-out;
  transform-origin: bottom left;
}

@keyframes balance {
  0%, 100% {
    transform: rotate(0deg);
  }
  
  30%, 60% {
    transform: rotate(-45deg);
  }
}

.word span:nth-child(2).active {
  animation: shrinkjump 1s ease-in-out;
  transform-origin: bottom center;
}

@keyframes shrinkjump {
  10%, 35% {
    transform: scale(2, .2) translate(0, 0);
  }
  
  45%, 50% {
    transform: scale(1) translate(0, -150px);
  }
  
  80% {
    transform: scale(1) translate(0, 0);
  }
}

.word span:nth-child(3).active {
  animation: falling 2s ease-out;
  transform-origin: bottom center;
}

@keyframes falling {
  12% {
    transform: rotateX(240deg);
  }
  
  24% {
    transform: rotateX(150deg);
  }
  
  36% {
    transform: rotateX(200deg);
  }
  
  48% {
    transform: rotateX(175deg);
  }
  
  60%, 85% {
    transform: rotateX(180deg);
  }
  
  100% {
    transform: rotateX(0deg);
  }
}

.word span:nth-child(4).active {
  animation: rotate 1s ease-out;
}

@keyframes rotate {
  20%, 80% {
    transform: rotateY(180deg);
  }
  
  100% {
    transform: rotateY(360deg);
  }
}

.word span:nth-child(5).active {
  animation: toplong 1.5s linear;
}

@keyframes toplong {
  10%, 40% {
    transform: translateY(-48vh) scaleY(1);
  }
  
  90% {
    transform: translateY(-48vh) scaleY(4);
  }
}

/* Other styles */
/* body {
  
  color: #fff;
  display: flex;
  font-family: 'Roboto', sans-serif;
  justify-content: center;
  align-items: center;
  flex-direction: row;
  height: 100vh;
  margin: 0;
} */

.fixed {
  position: fixed;
  top: 40px;
  left: 50%;
  transform: translateX(-50%);
}


.w1{

    margin-top: 50px;


}

.w2{

    margin-top: 150px;

}



/* From Uiverse.io by RodolpheANDRIEUX */ 
.cube-container {
  width: 200px;
  height: 200px;
  perspective: 800px;
  margin: 50px auto;

  margin-top: 250px;

  margin-bottom: 250px;

  transition: 0.8s ease-out;
}

.cube-container:hover {
  transform: scale(2);
}

.cube {
  position: relative;
  width: 100%;
  height: 100%;
  transform-style: preserve-3d;
  animation: rotate 8s infinite linear;
}

.face {
  --french: linear-gradient(
      to right,
      #0000ff,
      #ffffff,
      #ffffff,
      #ffffff,
      #ff0000
    )
    1;
  position: absolute;
  width: 200px;
  height: 200px;
  color: white;
  font-size: 18px;
  text-align: center;
  line-height: 200px;
  background: #000000cc;
  border: 2px solid;
  border-image: var(--french);
}

.front {
  transform: translateZ(150px);
}

.back {
  transform: rotateY(180deg) translateZ(150px);
}

.right {
  transform: rotateY(90deg) translateZ(150px);
}

.left {
  transform: rotateY(-90deg) translateZ(150px);
}

.top {
  transform: rotateX(90deg) translateZ(150px);
}

.bottom {
  transform: rotateX(-90deg) translateZ(150px);
}

@keyframes rotate {
  0% {
    transform: rotateX(0) rotateY(0) rotateZ(0);
  }

  100% {
    transform: rotateX(360deg) rotateY(360deg) rotateZ(360deg);
  }
}


.e3{
  font-size: 72px;
  background: -webkit-linear-gradient(90deg, #03a9f4, #f441a5);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}


/* From Uiverse.io by imPradhyumn */ 
.card {
  width: auto;
  height: 400px;
  box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
  background-color: black;
  position: relative;
  border: 2px solid  #03a9f4;
}

.remove-when-use {
  text-align: center;
  width: 100%;
  


  position: absolute;
  color: black;
  top: 85px;
  font-weight: bold;
}

.details > p {
  font-size: .8em;
  margin-top: .5em;
}

.details > label {
  font-weight: bold;
}

.details {
  color: white;
  box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
  width: 100%;
  background-color: rgba(0.8, 0.8, 0.8, 0.8);
  position: absolute;
  bottom: 0;
  height: 2.6em;
  transition: height .5s ease-in-out;
  padding: 0.6em;
  overflow: hidden;
}

.details:hover {

  background-color: rgba(0.8, 0.8, 0.8, 0.8);
  
}


.card:hover > .details {
  height: 6.7em;
}





/* From Uiverse.io by gharsh11032000 */ 
.form-container {
  
  background: black;
  border: 2px solid transparent;
  padding: 32px 24px;
  font-size: 14px;
  font-family: inherit;
  color: white;
  display: flex;
  flex-direction: column;
  gap: 20px;
  box-sizing: border-box;
  border-radius: 16px;
  box-shadow: gray 0px 54px 55px, gray 0px -12px 30px, gray 0px 4px 6px, gray 0px 12px 13px, gray 0px -3px 5px;
}

.form-container button:active {
  scale: 0.95;
}

.form-container .form {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.form-container .form-group {
  display: flex;
  flex-direction: column;
  gap: 2px;
}

.form-container .form-group label {
  display: block;
  margin-bottom: 5px;
  color: #717171;
  font-weight: 600;
  font-size: 12px;
}

.form-container .form-group input {
  width: 100%;
  padding: 12px 16px;
  border-radius: 8px;
  color: #fff;
  font-family: inherit;
  background-color: transparent;
  border: 1px solid #414141;
}

.form-container .form-group textarea {
  width: 100%;
  padding: 12px 16px;
  border-radius: 8px;
  resize: none;
  color: #fff;
  height: 96px;
  border: 1px solid #414141;
  background-color: transparent;
  font-family: inherit;
}

.form-container .form-group input::placeholder {
  opacity: 0.5;
}

.form-container .form-group input:focus {
  outline: none;
  border-color: #e81cff;
}

.form-container .form-group textarea:focus {
  outline: none;
  border-color: #e81cff;
}





.footer {
    background-color: #333;
    color: white;
    padding: 20px 0;
    text-align: center;
    border-radius: 50px 50px 0px 0px;
}

.footer-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.footer-links,
.footer-social,
.footer-info {
    margin: 10px;
    flex: 1 1 200px; /* Flex grow/shrink basis */
}

.footer-links h3,
.footer-social h3,
.footer-info h3 {
    margin-bottom: 10px;
}

.footer-links ul,
.footer-social ul {
    list-style: none;
    padding: 0;
}

.footer-links ul li,
.footer-social ul li {
    margin: 5px 0;
}

.footer-links a,
.footer-social a {
    color: #ffffff;
    text-decoration: none;
}

.footer-links a:hover,
.footer-social a:hover {
    text-decoration: underline;
}

.footer-bottom {
    margin-top: 20px;
    border-top: 1px solid #444;
    padding-top: 10px;
}




/* From Uiverse.io by david-mohseni */ 
.wrapper {
  display: inline-flex;
  list-style: none;
  height: 120px;
  width: 100%;
  padding-top: 40px;
  font-family: "Poppins", sans-serif;
  justify-content: center;
}

.wrapper .icon {
  position: relative;
  background: black;
  border-radius: 50%;
  margin: 10px;
  width: 50px;
  height: 50px;
  font-size: 18px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip {
  position: absolute;
  top: 0;
  font-size: 14px;
  background: #fff;
  color: #fff;
  padding: 5px 8px;
  border-radius: 5px;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip::before {
  position: absolute;
  content: "";
  height: 8px;
  width: 8px;
  background: #fff;
  bottom: -3px;
  left: 50%;
  transform: translate(-50%) rotate(45deg);
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .icon:hover .tooltip {
  top: -45px;
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
}

.wrapper .icon:hover span,
.wrapper .icon:hover .tooltip {
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
}

.wrapper .facebook:hover,
.wrapper .facebook:hover .tooltip,
.wrapper .facebook:hover .tooltip::before {
  background: #1877f2;
  color: #fff;
}

.wrapper .twitter:hover,
.wrapper .twitter:hover .tooltip,
.wrapper .twitter:hover .tooltip::before {
  background: #1da1f2;
  color: #fff;
}

.wrapper .instagram:hover,
.wrapper .instagram:hover .tooltip,
.wrapper .instagram:hover .tooltip::before {
  background: #e4405f;
  color: #fff;
}





    </style>
</head>
<body>

<!-- Carousel -->
 <!-- Carousel -->
<div class="container-fluid p-0 " id="home">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="assets/img/3562758.webp" class="d-block w-100" alt="Slide 1">

                <!-- Overlay text for the first slide -->
                <div class="carousel-caption d-none d-md-block text-left">
                    <h1 class="text-white q6 e3"><b>Welcome</b>
                    </h1>

                    
<div class="word mt-3 mb-3">
  <span class="e3"><b>A</b></span>
  <span class="e3"><b>M</b></span>
  <span class="e3"><b>S</b></span>
  <span class="e3"><b>P</b></span>
  <span class="e3"><b>O</b></span>
  <span class="e3"><b>R</b></span>
  <span class="e3"><b>T</b></span>
  <span class="e3"><b>S</b></span>
</div>


                    
                    <p class="text-white q8">Dive into the world of football like never before. Whether you’re a die-hard fan or a casual observer, we bring you the latest updates, in-depth analyses, match highlights, transfer news, and everything you need to stay connected to the beautiful game. From top leagues around the globe to local grassroots matches, AM Sports covers it all. Join our community of football enthusiasts, and let’s celebrate the sport that unites millions around the world!</p>
                

   
                    
                    <div class="q4 mt-4 ml-4 w-25">
                        <a href="login.php"><button class="q3 w-100">Login</button></a>
                    </div>

                </div>
            </div>
            
            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="assets/img/cristiano-ronaldo-2855-x-1776-background-r04vj63jzvo5d5l8.jpg" class="d-block w-100" alt="Slide 2">
          

                <!-- Overlay text for the first slide -->
                <div class="carousel-caption d-none d-md-block text-left">
                    <h1 class="text-white q6 e3"><b>Welcome</b>
                    </h1>
                    
                    <div class="word mt-3 mb-3">
  <span class="e3"><b>A</b></span>
  <span class="e3"><b>M</b></span>
  <span class="e3"><b>S</b></span>
  <span class="e3"><b>P</b></span>
  <span class="e3"><b>O</b></span>
  <span class="e3"><b>R</b></span>
  <span class="e3"><b>T</b></span>
  <span class="e3"><b>S</b></span>
</div>



                    <p class="text-white q8">Dive into the world of football like never before. Whether you’re a die-hard fan or a casual observer, we bring you the latest updates, in-depth analyses, match highlights, transfer news, and everything you need to stay connected to the beautiful game. From top leagues around the globe to local grassroots matches, AM Sports covers it all. Join our community of football enthusiasts, and let’s celebrate the sport that unites millions around the world!</p>
                
                    
                    <div class="q4 mt-4 ml-4 w-25">
                        <a href="login.php"><button class="q3 w-100">Login</button></a>
                    </div>
                </div>


            </div>
            
            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="assets/img/view-soccer-ball_23-2150887428.avif" class="d-block w-100" alt="Slide 3">
            

            <!-- Overlay text for the first slide -->
            <div class="carousel-caption d-none d-md-block text-left">
                    <h1 class="text-white q6 e3"><b>Welcome</b>
                    </h1>
            

                    <div class="word mt-3 mb-3">
  <span class="e3"><b>A</b></span>
  <span class="e3"><b>M</b></span>
  <span class="e3"><b>S</b></span>
  <span class="e3"><b>P</b></span>
  <span class="e3"><b>O</b></span>
  <span class="e3"><b>R</b></span>
  <span class="e3"><b>T</b></span>
  <span class="e3"><b>S</b></span>
</div>



                    <p class="text-white q8">Dive into the world of football like never before. Whether you’re a die-hard fan or a casual observer, we bring you the latest updates, in-depth analyses, match highlights, transfer news, and everything you need to stay connected to the beautiful game. From top leagues around the globe to local grassroots matches, AM Sports covers it all. Join our community of football enthusiasts, and let’s celebrate the sport that unites millions around the world!</p>
                
                    
                    <div class="q4 mt-4 ml-4 w-25">
                        <a href="login.php"><button class="q3 w-100">Login</button></a>
                    </div>
                </div>


        </div>
        
        <!-- Controls -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        
        <!-- Navbar inside the slider -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="assets/img/Am_sport__2_-removebg-preview.png" alt="Logo" width="150" height="150">
                </a>
                
                <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon">
                        <svg viewBox="0 0 175 80" width="40" height="40">
                            <rect width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                            <rect y="30" width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                            <rect y="60" width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                        </svg>
                    </span>
                    <span class="text">MENU</span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Navbar button container -->
                    <div class="button-container">
                        <button class="button">
                            <svg class="icon" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="5em" width="5em" >
                                <path d="M946.5 505L560.1 118.8l-25.9-25.9a31.5 31.5 0 0 0-44.4 0L77.5 505a63.9 63.9 0 0 0-18.8 46c.4 35.2 29.7 63.3 64.9 63.3h42.5V940h691.8V614.3h43.4c17.1 0 33.2-6.7 45.3-18.8a63.6 63.6 0 0 0 18.7-45.3c0-17-6.7-33.1-18.8-45.2zM568 868H456V664h112v204zm217.9-325.7V868H632V640c0-22.1-17.9-40-40-40H432c-22.1 0-40 17.9-40 40v228H238.1V542.3h-96l370-369.7 23.1 23.1L882 542.3h-96.1z"></path>
                            </svg>
                        </button>
                        <h6 class="q5 mt-3"><a href="#">Home</a></h6>

                        <button class="button">
                            <svg class="icon" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="5em" width="5em">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                        <h6 class="q5 mt-3"><a href="#search">Vote</a></h6>
                      
                        <button class="button">
                            <svg class="icon" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="5em" width="5em">
                                <path d="M12 2.5a5.5 5.5 0 0 1 3.096 10.047 9.005 9.005 0 0 1 5.9 8.181.75.75 0 1 1-1.499.044 7.5 7.5 0 0 0-14.993 0 .75.75 0 0 1-1.5-.045 9.005 9.005 0 0 1 5.9-8.18A5.5 5.5 0 0 1 12 2.5ZM8 8a4 4 0 1 0 8 0 4 4 0 0 0-8 0Z"></path>
                            </svg>
                        </button>
                        <h6 class="q5 mt-3"><a href="#about">About</a></h6>

                        <button class="button">
                            <svg class="icon" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="5em" width="5em">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                        </button>
                        <h6 class="q5 mt-3"><a href="#contact">Contact</a></h6>
                    </div>

                </div>
            </div>
        </nav>
    </div>
</div>


<div class="container">

<div class="row">

<div class="col-lg-6 col-md-12 col-sm-12 col-12">

<h3 class=" q1 e3" id="search">AM Sports</h3>

<p class="mt-5 q2">A hub where sports fans can actively participate in predicting and voting on live sports events, player performance, and rankings across multiple sports. The goal is to create a dynamic, interactive platform that engages users with real-time voting, leaderboards, and community discussions, allowing them to influence fan-driven outcomes.</p>



<div class="q4 mt-4">
  <a href="information.php"><button class="q3 w-100"  >Cast Your Vote</button></a>
</div>



</div>
<div class="col-lg-6 col-md-12 col-sm-12 col-12">

<div class="w1"><img src="assets/img/football-trophy-floating-with-golden-hour-lighting-black-ba_873925-718384-removebg-preview.png" alt="" width="100%" height="auto"></div>

</div>


</div>

</div>

<!-- About of website -->

<div class="container w2">


<div class="row mt-5">

<div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto mt-5">


<div class="word mt-3 mb-3 text-white text-center" id ="about">
  <span class="e3"><b>A</b></span>
  <span class="e3"><b>b</b></span>
  <span class="e3"><b>o</b></span>
  <span class="e3"><b>u</b></span>
  <span class="e3"><b>t</b></span>
  <span class="e3"><b>U</b></span>
  <span class="e3"><b>s</b></span>
</div>



<p class="mt-5  text-white">
Digital voting systems are becoming increasingly important in our modern world due to their ability to enhance accessibility, efficiency, and security in the voting process. By allowing people to cast their votes from any location using digital devices, these systems make participation more convenient and inclusive, especially for those with disabilities or who live in remote areas.

The speed and accuracy of digital voting systems provide significant advantages over traditional paper-based methods. Votes can be counted almost instantaneously, reducing the time required to announce results and ensuring greater transparency in the process. In addition, these systems utilize advanced security measures such as encryption and authentication, minimizing the risks of fraud, tampering, or multiple voting.

Digital voting systems are also cost-effective, as they reduce the need for physical ballots, voting booths, and manual labor. This not only cuts operational costs but also reduces the environmental impact by minimizing paper use and lowering the carbon footprint of elections.

Another key benefit is the transparency that digital voting platforms can offer. With real-time auditing capabilities, votes can be tracked and verified, increasing trust in the process without compromising voter privacy. By making voting easier and more secure, digital systems encourage broader participation, fostering greater engagement in democratic processes.

As societies continue to embrace technology, digital voting systems represent a critical step in modernizing elections and decision-making, ensuring that these processes remain relevant, secure, and efficient in an increasingly digital world.</p>



</div>



</div>




</div>





</div>

<div class="container">

<h1 class="e3 text-center text-white mt-5"><b>Now, Vote</b></h1>

<div class="row">






<div class="col-lg-12 col-md-12 col-sm-12 col-12">


<div class="cube-container">
  <div class="cube">
    <div class="face front">

    <img src="assets/img/soccer-cristiano-ronaldo-wallpaper-preview.jpg" alt="" width="100%" height="100%">

    </div>
    <div class="face back">

    
    <img src="assets/img/962473.jpg" alt="" width="100%" height="100%">


    </div>
    <div class="face right">

    
    <img src="assets/img/8d373b104564221.Y3JvcCwxNDQwLDExMjYsMCw3MTY.png" alt="" width="100%" height="100%">



    </div>
    <div class="face left">

    
    <img src="assets/img/HD-wallpaper-paul-pogba-manchester-united-fc-french-footballer-midfielder-goal-joy-portrait-premier-league-england-famous-footballers-creative-art-football-pogba.jpg" alt="" width="100%" height="100%">


    </div>
    <div class="face top">


    <img src="assets/img/kylian-mbappe-4k-digital-art-zda6d0obbc6g9tsu.jpg" alt="" width="100%" height="100%">


    </div>
    <div class="face bottom">

    <img src="assets/img/HD-wallpaper-goncalo-guedes-portuguese-footballer-striker-valencia-cf-white-stone-background-la-liga-spain.jpg" alt="" width="100%" height="100%">


    </div>
  </div>
</div>



</div>


</div>

</div>


<div class="container mt-5 mb-5">


<h1 class="e3 text-center  mt-5"><b>Nominations</b></h1>


<div class="row">

<div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">

<div class="card">
  <div class="remove-when-use">
    <img src="assets/img/football-form-cristiano-ronaldo-player-wallpaper-thumb-removebg-preview.png" alt="" width="100%" height="100%">
  </div>
  <div class="details">
    <label>Cristiano Ronaldo</label>
    <p>
    Ronaldo represents Portugal in international football.
      <br>
      <i>Portugal win Euro 2016 and the UEFA Nations League 2019.</i>
    </p>
  </div>
</div>


</div>

<div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">

<div class="card">
  <div class="remove-when-use">
  <img src="assets/img/soccer-lionel-messi-fc-barcelona-wallpaper-preview-removebg-preview.png" alt="" width="100%" height="100%">
  </div>
  <div class="details">
    <label>Lionel Andrés Messi </label>
    <p>
    Messi represents Argentina in international football.
      <br>
      <i>Messi led Argentina to victory in the 2021 Copa América and the 2022 FIFA World Cup.</i>
    </p>
  </div>
</div>


</div>

<div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">

<div class="card">
  <div class="remove-when-use">
  <img src="assets/img/HD-wallpaper-paul-pogba-manchester-united-fc-french-footballer-midfielder-goal-joy-portrait-premier-league-england-famous-footballers-creative-art-football-pogba-removebg-preview.png" alt="" width="100%" height="100%">
  </div>
  <div class="details">
    <label>Paul Labile Pogba</label>
    <p>
    Pogba represents France in international football.
      <br>
      <i>Pogba was a key player in France's 2018 FIFA World Cup victory.</i>
    </p>
  </div>
</div>


</div>


<div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">

<div class="card">
  <div class="remove-when-use">
  
  <img src="assets/img/kylian-mbappe-4k-digital-art-zda6d0obbc6g9tsu-removebg-preview.png" alt="" width="100%" height="100%">
  

  </div>
  <div class="details">
    <label>Kylian Mbappé Lottin</label>
    <p>
    Mbappé represents France in international football.
      <br>
      <i>He was particularly praised for his speed and scoring ability, and he became the second teenager after Pelé to score in a World Cup final.</i>
    </p>
  </div>
</div>


</div>


<div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">

<div class="card">
  <div class="remove-when-use">
  
  
  <img src="assets/img/HD-wallpaper-goncalo-guedes-portuguese-footballer-striker-valencia-cf-white-stone-background-la-liga-spain-removebg-preview.png" alt="" width="100%" height="100%">
  

  </div>
  <div class="details">
    <label>Gonçalo Manuel Ganchinho Guedes</label>
    <p>
    Guedes represents Portugal in international football.
      <br>
      <i>He has contributed to Portugal's attacking lineup and was part of the squad that won the UEFA Nations League in 2019.</i>
    </p>
  </div>
</div>


</div>

<div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">

<div class="card">
  <div class="remove-when-use">
  
  
  <img src="assets/img/1327049-removebg-preview.png" alt="" width="100%" height="100%">
  

  </div>
  <div class="details">
    <label>Neymar da Silva Santos Júnior</label>
    <p>
    Neymar represents Brazil in international football.
      <br>
      <i>He was a key player in Brazil's 2018 Copa Libertadores victory.</i>
    </p>
  </div>
</div>


</div>


</div>


</div>


<div class="container mt-5" id ="contact">

<div class="row mt-5">
  <div class="col-lg-8 col-md-12 col-sm-12 col-12 mt-5 m-auto">

  <h1 class="e3 text-center mt-5"><b>Contact Us</b></h1>
  
<div class="form-container mt-5">
      <form class="form">
        <div class="form-group">
          <label for="email">Company Email</label>
          <input type="text" id="email" name="email" required="">
        </div>
        <div class="form-group">
          <label for="textarea">How Can We Help You?</label>
          <textarea name="textarea" id="textarea" rows="10" cols="50" required=""></textarea>
        </div>
        <div class="q4 mt-4 ml-4 w-25">
                        <button class="q3 w-100">Submit</button>
                    </div>
      </form>
    </div>




  </div>
</div>







</div>



<footer class="footer mt-5">
        <div class="footer-container">
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#search">Search</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="https://facebook.com" target="_blank">Facebook</a></li>
                    <li><a href="https://twitter.com" target="_blank">Twitter</a></li>
                    <li><a href="https://instagram.com" target="_blank">Instagram</a></li>
                    <li><a href="https://linkedin.com" target="_blank">LinkedIn</a></li>
                </ul>
            </div>
            <div class="footer-info">
                <h3>Contact Us</h3>
                <p>Email: abmueed204@gmail.com</p>
                <p>Phone: +92 317 2428287</p>
            </div>
        </div>
        <div class="footer-bottom">

        
<ul class="wrapper">
  <li class="icon facebook">
    <span class="tooltip">Facebook</span>
    <svg
      viewBox="0 0 320 512"
      height="1.2em"
      fill="currentColor"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
      ></path>
    </svg>
  </li>
  <li class="icon twitter">
    <span class="tooltip">Twitter</span>
    <svg
      height="1.8em"
      fill="currentColor"
      viewBox="0 0 48 48"
      xmlns="http://www.w3.org/2000/svg"
      class="twitter"
    >
      <path
        d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429"
      ></path>
    </svg>
  </li>
  <li class="icon instagram">
    <span class="tooltip">Instagram</span>
    <svg
      xmlns="http://www.w3.org/2000/svg"
      height="1.2em"
      fill="currentColor"
      class="bi bi-instagram"
      viewBox="0 0 16 16"
    >
      <path
        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
      ></path>
    </svg>
  </li>
</ul>


            <p>&copy; 2024 Your Website AM Sports. All Rights Reserved. Design by @Abdul mueed</a>.</p>
        </div>
    </footer>






<script>
    const spans = document.querySelectorAll('.word span');

spans.forEach((span, idx) => {
  span.addEventListener('click', (e) => {
    e.target.classList.add('active');
  });
  span.addEventListener('animationend', (e) => {
    e.target.classList.remove('active');
  });
  
  // Initial animation
  setTimeout(() => {
    span.classList.add('active');
  }, 750 * (idx+1))
});
</script>


</body>
</html>
