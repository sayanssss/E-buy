<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
?>
<!--php code end-->


<!--HTML code start start-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-BUY</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" type="x-icon" href="https://images.freeimages.com/images/large-previews/01a/technology-background-1632715.jpg">
  </head>
  <body class="hero">
    <header>
      <!--nav1 start-->
      <nav class="nav1">
        <div class="left">
          <img src="logo.jpg" alt="">
          
        </div>
        <div class="middle">
          <input type="text" placeholder="  type here">
          <button>Search</button>


        </div>
        <div class="right">
          <div class="right1">
            <svg xmlns="http://www.w3.org/2000/sv" width="25" height="25" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
            <h5> User</h5>
          </div>
          <div class="right1">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-cart4" viewBox="0 0 16 16">
              <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
            </svg>
            <h5>Cart</h5>
          </div>
          <div class="right1">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-heart-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
            </svg>
            <h5>Wishlist</h5>
          </div>
           
        </div>
      </nav>
      <!--nav1 end-->

      

      <!--nav2 start-->
      <nav class="nav2">
        <ul>
          <li><a href="#"><i class="fa fa-home"></i> home</a></li>
          <li><a href="#"><i class="fa fa-user"></i> Tech</a></li>
          <li><a href="#"><i class="fa fa-users"></i> Accessories</a></li>
          <li><a href="#"><i class="fa fa-calendar-check-o"></i> Special offers</a></li>
          <li><a href="#"><i class="fa fa-search"></i> Find</a></li>
          <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-gift-fill" viewBox="0 0 16 16">
            <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zm6 4v7.5a1.5 1.5 0 0 1-1.5 1.5H9V7h6zM2.5 16A1.5 1.5 0 0 1 1 14.5V7h6v9H2.5z"/>
          </svg> Gift Card</a></li>
          <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-smartwatch" viewBox="0 0 16 16">
            <path d="M9 5a.5.5 0 0 0-1 0v3H6a.5.5 0 0 0 0 1h2.5a.5.5 0 0 0 .5-.5V5z"/>
            <path d="M4 1.667v.383A2.5 2.5 0 0 0 2 4.5v7a2.5 2.5 0 0 0 2 2.45v.383C4 15.253 4.746 16 5.667 16h4.666c.92 0 1.667-.746 1.667-1.667v-.383a2.5 2.5 0 0 0 2-2.45V8h.5a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5H14v-.5a2.5 2.5 0 0 0-2-2.45v-.383C12 .747 11.254 0 10.333 0H5.667C4.747 0 4 .746 4 1.667zM4.5 3h7A1.5 1.5 0 0 1 13 4.5v7a1.5 1.5 0 0 1-1.5 1.5h-7A1.5 1.5 0 0 1 3 11.5v-7A1.5 1.5 0 0 1 4.5 3z"/>
          </svg> Watch</a></li>
          <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-laptop-fill" viewBox="0 0 16 16">
            <path d="M2.5 2A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
          </svg> Laptop</a></li>
          
          <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-phone-fill" viewBox="0 0 16 16">
            <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
          </svg> Mobiles</a></li>
          <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-question-square-fill" viewBox="0 0 16 16">
            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.496 6.033a.237.237 0 0 1-.24-.247C5.35 4.091 6.737 3.5 8.005 3.5c1.396 0 2.672.73 2.672 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.105a.25.25 0 0 1-.25.25h-.81a.25.25 0 0 1-.25-.246l-.004-.217c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.803 0-1.253.478-1.342 1.134-.018.137-.128.25-.266.25h-.825zm2.325 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
          </svg> Support</a></li>
          <li><a href="signup.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
            <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
          </svg> Sign up</a></li>
          <li><a  href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
          </svg> Logout</a></li>
        </ul>
      </nav>
      <!--nav2 end-->

      <!--side nav-->
      <section id="sidenav">
        <ul>
          <li><a href="#"><i class="fa fa-home"></i> home</a></li>
          <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-gift-fill" viewBox="0 0 16 16">
            <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zm6 4v7.5a1.5 1.5 0 0 1-1.5 1.5H9V7h6zM2.5 16A1.5 1.5 0 0 1 1 14.5V7h6v9H2.5z"/>
          </svg> Gift Card</a></li>
          <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-smartwatch" viewBox="0 0 16 16">
            <path d="M9 5a.5.5 0 0 0-1 0v3H6a.5.5 0 0 0 0 1h2.5a.5.5 0 0 0 .5-.5V5z"/>
            <path d="M4 1.667v.383A2.5 2.5 0 0 0 2 4.5v7a2.5 2.5 0 0 0 2 2.45v.383C4 15.253 4.746 16 5.667 16h4.666c.92 0 1.667-.746 1.667-1.667v-.383a2.5 2.5 0 0 0 2-2.45V8h.5a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5H14v-.5a2.5 2.5 0 0 0-2-2.45v-.383C12 .747 11.254 0 10.333 0H5.667C4.747 0 4 .746 4 1.667zM4.5 3h7A1.5 1.5 0 0 1 13 4.5v7a1.5 1.5 0 0 1-1.5 1.5h-7A1.5 1.5 0 0 1 3 11.5v-7A1.5 1.5 0 0 1 4.5 3z"/>
          </svg> Watch</a></li>
          <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-laptop-fill" viewBox="0 0 16 16">
            <path d="M2.5 2A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
          </svg> Laptop</a></li>
          
          <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-phone-fill" viewBox="0 0 16 16">
            <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
          </svg> Mobiles</a></li>
          <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-question-square-fill" viewBox="0 0 16 16">
            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.496 6.033a.237.237 0 0 1-.24-.247C5.35 4.091 6.737 3.5 8.005 3.5c1.396 0 2.672.73 2.672 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.105a.25.25 0 0 1-.25.25h-.81a.25.25 0 0 1-.25-.246l-.004-.217c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.803 0-1.253.478-1.342 1.134-.018.137-.128.25-.266.25h-.825zm2.325 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
          </svg> Support</a></li>
          <li><a href="signup.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
            <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
          </svg> Sign up</a></li>
        </ul>
      </section>
      <i class="fa fa-anchor" id="menubar"></i>
      <!--sidenav end-->
    </header>

    <!--carousel start-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imge/3-HP-Omen-15.png" class="d-block w-100" alt="imge/3-HP-Omen-15.png">
        </div>
        <div class="carousel-item">
          <img src="imge/carsoul image (1).png" class="d-block w-100" alt="imge/carosol (4).png">
        </div>
        <div class="carousel-item">
          <img src="imge/carsoul3 (1).png" class="d-block w-100" alt="imge/carosol 2.png">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon"  aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!--carousel end-->
    <!--round prodct-->
    <section class="round">
      <div class="round1">
        <h2>RECOMMENDED  PRODUCTS</h2>

      </div>
      <div class="round2">
        <img src="https://cdn.mos.cms.futurecdn.net/7fhdrdEhVie6e5q4jJHFJS-1200-80.jpeg" alt="">
        <h5>Laptop</h5>
      </div>
      <div class="round2">
        <img src="https://staticimg.titan.co.in/Titan/Catalog/1805QM01_1.jpg?impolicy=pqmed&imwidth=640" alt="">
        <h5>Watch</h5>
      </div>
      <div class="round2">
        <img src="https://assets.reedpopcdn.com/g502x_f9QuuM8.jpeg/BROK/resize/1200x1200%3E/format/jpg/quality/70/g502x_f9QuuM8.jpeg" alt="">
        <h5>Mouse</h5>
      </div>
      <div class="round2">
        <img src="https://media.wired.com/photos/5f862593a50a226585bee266/191:100/w_2400,h_1256,c_limit/Gear-Keyboard-452883322.jpg" alt="">
        <h5>Keyboard</h5>
      </div>
      <div class="round2">
        <img src="https://cdn.mos.cms.futurecdn.net/q5UfaGNrEwWgTWH2iUdKMU.jpg" alt="">
        <h5>Mobiles</h5>
      </div>
      <div class="round2">
        <img src="https://img.freepik.com/free-photo/pink-headphones-wireless-digital-device_53876-96804.jpg?w=2000" alt="">
        <h5>Headset</h5>
      </div>
    </section>
    <!--big card-->
    <section class="card0">
      <div class="card01">
        <h3>Most search smart phone ....</h3>
        <div>
          <img src="https://indianexpress.com/wp-content/uploads/2022/12/OnePlus-11-5G-1.jpg" alt="">
          <h6>One plus 11 5g</h6>
        </div>
        <div>
          <img src="https://akm-img-a-in.tosshub.com/sites/visualstory/stories/2023_01/story_17870/assets/2.jpeg?time=1673446340" alt="">
          <h6>Iqoo 11 5g</h6>
        </div>
        <div>
          <img src="https://www.91-cdn.com/hub/wp-content/uploads/2021/10/Redmi_Note_11.jpg" alt="">
          <h6>redmi note 11 pro</h6>
        </div>
        <div >
          <img src="https://mobiledrop.in/wp-content/uploads/2022/07/OPPO-Reno-8-Pro-5G_Image.jpg" alt="">
          <h6>oppo reno 8 pro</h6>
        </div>

      </div>

      <div class="card01">
        <h3>Most search laptop....</h3>
        <div>
          <img src="https://images.moneycontrol.com/static-mcnews/2022/11/alienware.jpg?impolicy=website&width=770&height=431" alt="">
          <h6>Alienware X15 R2</h6>
        </div>
        <div>
          <img src="https://akm-img-a-in.tosshub.com/indiatoday/styles/medium_crop_simple/public/2022-12/2.jpg?VersionId=LdCFFgTbjQ3xXQMeeRf2XAGpg4rs6lXN" alt="">
          <h6>HP Pavilion 14</h6>
        </div>
        <div>
          <img src="https://images.acer.com/is/image/acer/HELIOS_500_KSP_8_Large?$responsive$" alt="">
          <h6>Predator Helios 500</h6>
        </div>
        <div >
          <img src="https://static.digit.in/default/96adf0e03504d3297359e5e4edbea80184b3f3a9.jpeg" alt="">
          <h6>Acer Nitro 5 gaming</h6>
        </div>
      </div>

      <div class="card01">
        <h3>Recommended accessories..</h3>
        <div>
          <img src="https://www.canbuyornot.com/wp-content/uploads/2022/07/Sony_WH1000XM5-1.jpg" alt="">
          <h6>Sony WH 1000XM5</h6>
        </div>
        <div>
          <img src="https://cdn.shopify.com/s/files/1/0508/6747/0494/products/pdp_gallery_01_main_6788ebdd-5fb3-4bfe-a3e5-2900ff6cf5ba_large@2x.png?v=1645628100" alt="">
          <h6>Kone XP Air</h6>
          </div>
        <div>
          <img src="https://www.erdshoppe.com/wp-content/uploads/2021/12/ERD-TC-21-USBDOCK-2-Amp-Mobile-Charger-with-Detachable-Cable-White-2.jpg" alt="">
          <h6>ERD TC-21 USBDOCK 2</h6>
        </div>
        <div >
          <img src="https://rukminim1.flixcart.com/image/832/832/l4bn5ow0/watch/i/x/c/1-men-s-steel-chain-rb02-silver-black-daniel-jubile-men-original-imagf92rxeqpbeyy.jpeg?q=70" alt="">
          <h6>New Model Analog</h6>
        </div>
      </div>


    </section>
      
    <section class="new">
      <div class="prodct">
        <h2>NEW <span>PRODUCT</span></h2>
        <P>New Arrivals Tech Product In Our Store</P>
      </div>
    </section>
    <section class="phone">
      <div class="smartphone">
        <h2>SMART  PHONE</h2>
      </div>
    </section>
    <!--card start-->
    <!--phone 1 start-->
    <div class="card-container">
      <div class="card">
        <div>
          <img src="https://m.media-amazon.com/images/I/61dNAU6PgxL._SX679_.jpg" alt="i">
          <button class="card-btn">add to wishlist</button>
        </div>
        <h5>Google Pixel 6a 5G (8GB,128GB)</h5>
        <span>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </span>
        <p>₹ 29,999</p>
        <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
      </div>
      <div class="card">
        <div>
          <img src="https://m.media-amazon.com/images/I/817wzcDRQAL._SX679_.jpg" alt="imge/produc">
          <button class="card-btn">add to wishlist</button>
        </div>
        <h5> Samung Galaxy S21 (8GB,128GB)</h5>
        <span>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </span>
        <p>₹ 44,999</p>
        <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
      </div>
      <div class="card">
        <div>
          <img src="https://oasis.opstatics.com/content/dam/oasis/page/2022/operation/aug/0804/n20se/N20SE_Blue.png" alt="imge/product/phone/google pixel 6a.png">
          <button class="card-btn">add to wishlist</button>
        </div>
        <h5>OnePlus Nord n20 5g (6GB,128GB)</h5>
        <span>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </span>
        <p>₹ 15,490</p>
        <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
      </div>
      <div class="card">
        <div>
          <img src="https://image.oppo.com/content/dam/oppo/in/mkt/homepage/new-navi/1025/reno8-pro-glazed-green.png.thumb.webp" alt="imge/product/phone/google pixel 6a.png">
          <button class="card-btn">add to wishlist</button>
        </div>
        <h5>Oppo Reno 8 pro (8GB,128GB)</h5>
        <span>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-full"></i>
        </span>
        <p>₹ 45,899</p>
        <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
      </div>
    </div>
    <!--phone 1 end-->

    <!--phone 2 start-->
    <div class="card-container">
      <div class="card">
        <div>
          <img src="imge/product/phone/poco c31.png" alt="imge/product/phone/google pixel 6a.png">
          <button class="card-btn">add to wishlist</button>
        </div>
        <h5>Poco c31 4G (4GB,64GB)</h5>
        <span>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-full"></i>
        </span>
        <p>₹ 7,989</p>
        <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
      </div>
      <div class="card">
        <div>
          <img src="imge/product/phone/realme-9-pro.png" alt="imge/product/phone/google pixel 6a.png">
          <button class="card-btn">add to wishlist</button>
        </div>
        <h5>Realme 9 pro 5G(8GB,128GB)</h5>
        <span>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </span>
        <p>₹ 21,949</p>
        <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
      </div>
      <div class="card">
        <div>
          <img src="imge/product/phone/realme-9i.png" alt="imge/product/phone/google pixel 6a.png">
          <button class="card-btn">add to wishlist</button>
        </div>
        <h5>Realme-9i 4g (6GB,128GB)</h5>
        <span>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </span>
        <p>₹ 19,599</p>
        <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
      </div>
      <div class="card">
        <div>
          <img src="imge/product/phone/redmi10 prime.png" alt="imge/product/phone/google pixel 6a.png">
          <button class="card-btn">add to wishlist</button>
        </div>
        <h5>Redmi note 10 prime(6GB)</h5>
        <span>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </span>
        <p>₹ 12,599</p>
        <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
      </div>
      
    </div> 
     
  
    <!--phone 2 end-->
    <!--laptop start-->
    <section class="phone">
      <div class="smartphone">
        <h2>LAPTOP AND DESKTOP</h2>
      </div>
    </section>
    <div class="card-container">
      <div class="card2">
        <div>
          <img  src="https://sathya.in/media/85988/catalog/sam%20lap%2017.png" alt="imge/product/phone/google pixel 6a.png">
          <button class="card-btn">add to wishlist</button>
        </div>
        <h5>XPS 13 Laptop</h5>
        <h6>10th Generation Intel Core i5-1021U 13.3 inches 8GB RAM, 512GB SSD, Full HD Windows 10 Laptop, 1.32kg</h6>
        <span>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </span>
        <p>₹ 1,07,400</p>
        <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
      </div>
      <div class="card2">
        <div>
          <img src="https://images.jdmagicbox.com/quickquotes/images_main/dell-alienware-17-area-51-9thgeneration-corei9-9900k-32gb-ram-1tb-512gb-ssd-8gb-rtx-2080-graphics-17-3-inches-fhd-display-gaming-laptop-176532518-o9dpo.jpg" alt="imge/product/phone/google pixel 6a.png">
          <button class="card-btn">add to wishlist</button>
        </div>
        <h5>Dell Alienware x15</h5>
        <h6>Intel i9-12900H, Win11+MSO'21 , 32GB, 1TB SSD, NVIDIA RTX 3080 Ti (16GB GDDR6)</h6>
        <span>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </span>
        <p>₹ 3,56,090</p>
        <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
      </div>
      <div class="card2">
        <div>
          <img src="https://cdn1.smartprix.com/rx-isv5wV9Be-w1200-h1200/sv5wV9Be.jpg" alt="imge/product/phone/google pixel 6a.png">
          <button class="card-btn">add to wishlist</button>
        </div>
        <h5>MSI Gaming GF63</h5>
        <h6>Intel 11th Gen. i7-11800H, 40CM FHD 144Hz (8GB/512GB NVMe SSD/Nvidia GTX1650 4GB) </h6>
        <span>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </span>
        <p>₹ 59,599</p>
        <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
      </div>
      <div class="card2">
        <div>
          <img src="https://m.media-amazon.com/images/I/81bc8mA3nKL._SL1500_.jpg" alt="imge/product/phone/google pixel 6a.png">
          <button class="card-btn">add to wishlist</button>
        </div>
        <h5>Acer Nitro 5</h5>
        <h6>Intel  i5-11400H, FHD 144Hz IPS Display (NVIDIA GeForce RTX 3050 , 8GB, 256GB SSD)</h6>
        <span>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </span>
        <p>₹ 85,590</p>
        <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
      </div>
    </div>
    <div class="card-container"> 
      <div class="card2">
        <div>
          <img src="https://m.media-amazon.com/images/I/615K+WN67AL.jpg" alt="imge/product/phone/google pixel 6a.png">
          <button class="card-btn">add to wishlist</button>
        </div>
        <h5>ASUS ROG Strix Scar </h5>
        <h6> Intel Core i7-10875H 10th Gen, RTX 2080 GDDR6 8GB Graphics,(16GB/1TB SSD), G732LXS-HG010T</h6>
        <span>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </span> 
        <p>₹ 2,18,395</p>
        <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
      </div>
      <div class="card2">
        <div>
          <img src="https://laptopmedia.com/wp-content/uploads/2021/11/4-10.jpg" alt="imge/product/phone/google pixel 6a.png">
          <button class="card-btn">add to wishlist</button>
        </div>
        <h5>HP Pavilion 14</h5>
        <h6>AMD Ryzen 5-5625U 8GB RAM/512GB SSD , IPS Micro-Edge Display/Radeon/B&O Audio)</h6>
        <span>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </span>
        <p>₹ 54,999</p>
        <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
      </div>
      <div class="card2">
        <div>
          <img src="https://images-cdn.ubuy.co.in/633b11ae9fd918253e664ebf-laptop-hp-pavilion-gaming-layar-full-hd.jpg" alt="imge/product/phone/google pixel 6a.png">
          <button class="card-btn">add to wishlist</button>
        </div>
        <h5>HP Pavilion Gaming</h5>
        <h6>10th Gen Intel Core i5 Processor,  (16GB/512GB SSD + 32GB Optane/144 Hz/NVIDIA GTX 1650 4GB)</h6>
        <span>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </span>
        <p>₹ 79,500</p>
        <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
      </div>
      <div class="card2">
        <div>
          <img src="https://inventstore.in/wp-content/uploads/2022/07/MacBook-Air-M2.png" class="product-thumb" alt="">
          <button class="card-btn">add to wishlist</button>
        </div>
        <h5>MacBook Air M2</h5>
        <h6>M2 chip: 13.6-inch Liquid Retina Display, 8GB RAM, 256GB SSD , Backlit Keyboard,HD Camera.</h6>
        <span>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </span>          
        <p>₹ 1,04,599</p>  
        <a href="payment page/payment page.html" target="_blank"><button>BUY NOW</button></a>
      </div>
    </div>
        
    <!--TECH ACCESSORIES-->
    <section class="product"> 
      <h2 class="product-category">TECH ACCESSORIES</h2>
      <button class="pre-btn"><img src="imge/arrow.png" alt=""></button>
      <button class="nxt-btn"><img src="imge/arrow.png" alt=""></button>
      <div class="product-container">
        <div class="product-card">
            <div class="product-image">
              <span class="discount-tag">50% off</span>
              <img src="https://cdn.shopify.com/s/files/1/0309/3679/3226/products/B07W5T9ZCV.PT05_800x.jpg?v=1628503377" class="product-thumb" alt="">
              <button class="card-btn">add to wishlist</button>
            </div>
            <div class="product-info">
                <h6>Cosmic Byte G2050 RGB 7.1 Surround Sound USB Gaming Headphone for PS5</h6>
                <span>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <p>₹ 1,583</p>
                <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
              </div>
          </div>
        <div class="product-card">
            <div class="product-image">
              <span class="discount-tag">50% off</span>
              <img src="https://www.allround-pc.com/wp-content/uploads/2021/10/Razer-Kraken-V3-HyperSense-Beitragsbild.jpg" class="product-thumb" alt="">
              <button class="card-btn">add to wishlist</button>
            </div>
            <div class="product-info">
              <h6>Redgear Cosmo 7,1 Usb Gaming Wired Over Ear Headphones With Virtual Surround Sound </h6>
              <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </span>
              <p>₹ 1,699</p>
              <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
            </div>
          </div>
        <div class="product-card">
            <div class="product-image">
              <span class="discount-tag">50% off</span>
              <img src="https://m.media-amazon.com/images/I/712heS410cS.jpg" class="product-thumb" alt="">
              <button class="card-btn">add to wishlist</button>
            </div>
            <div class="product-info">
              <h6>Zebronics Zeb-Blitz USB Gaming Wired On Ear Headphones with Mic with Dolby Atmos</h6>
              <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </span>
              <p>₹ 2,349</p>
              <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
            </div>
          </div>
        <div class="product-card">
            <div class="product-image">
              <span class="discount-tag">50% off</span>
              <img src="https://vlebazaar.in/image/cache/catalog/Redgear-Cloak-Wired-RGB-Gaming-Headphones-with-Microphone-for-PC-B07T9FV/Redgear-Cloak-Wired-RGB-Gaming-Headphones-with-Microphone-for-PC-B07T9FV9YP-2-550x550.jpg" class="product-thumb" alt="">
              <button class="card-btn">add to wishlist</button>
            </div>
            <div class="product-info">
              <h6>Zebronics Zeb-8 BIT Premium Gaming Headphones with 50mm Drivers, Gaming Grade</h6>
              <span>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </span>
              <p>₹ 1,687</p>
              <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
            </div>
          </div>
        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">50% off</span>
                <img src="https://images.indianexpress.com/2021/06/Corsair-Mechanical-Keyboard.jpg" class="product-thumb" alt="">
                <button class="card-btn">add to wishlist</button>
              </div>
            <div class="product-info">
                <h6>Redragon Dyaus K509 Wired Semi Mechanical Gaming Keyboard with 7 RGB Backlit Colors on Keys </h6>
                <span>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <p>₹ 1,090</p>
                <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
              </div>
          </div>
        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">50% off</span>
                <img src="https://thumbs.dreamstime.com/b/gaming-keyboard-rgb-light-white-mechanical-backlight-212226943.jpg" class="product-thumb" alt="">
                <button class="card-btn">add to wishlist</button>
              </div>
            <div class="product-info">
                <h6>Redragon Kumara K552-RGB LED Backlit USB Mechanical Keyboard Without Numlock Keys</h6>
                <span>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <p>₹ 2,990</p>
                <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
              </div>
          </div>
        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">50% off</span>
                <img src="https://webapi3.adata.com/storage/product/mage_480x850.jpg" class="product-thumb" alt="">
                <button class="card-btn">add to wishlist</button>
              </div>
            <div class="product-info">
                <h6>HyperX Alloy Core RGB USB Membrane Gaming Keyboard - Black (HX-KB5ME2-US)</h6>
                <span>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-full"></i>
                </span>
                <p>₹ 4,139</p>
                <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
              </div>
          </div>
        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">50% off</span>
                <img src="http://cdn.shopify.com/s/files/1/0287/1138/7195/products/EM100_133e6c3f-50c0-443e-8f4a-9b3e01199a38.jpg?v=1666591436" class="product-thumb" alt="">
                <button class="card-btn">add to wishlist</button>
              </div>
            <div class="product-info">
                <h6>Zebronics Zeb-Transformer-M Optical USB Gaming Mouse with LED Effect(Black)</h6>
                <span>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <p>₹ 1,349</p>
                <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
              </div>
          </div>
        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">50% off</span>
                <img src="https://www.pcgamesn.com/wp-content/sites/pcgamesn/2022/06/Best-gaming-mouse-550x309.jpg" class="product-thumb" alt="">
                <button class="card-btn">add to wishlist</button>
              </div>
            <div class="product-info">
                <h6>SteelSeries Rival 5 USB Gaming Mouse (FPS, 18,000 CPI TrueMove Air Optical Sensor)</h6>
                <span>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <p>₹ 6,396</p>
                <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
              </div>
          </div>
        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">50% off</span>
                <img src="https://assets.reedpopcdn.com/g502x_f9QuuM8.jpeg/BROK/thumbnail/1600x900/format/jpg/quality/80/g502x_f9QuuM8.jpeg" class="product-thumb" alt="">
                <button class="card-btn">add to wishlist</button>
              </div>
            <div class="product-info">
                <h6>HyperX Pulsefire Raid RGB USB 2.0 Gaming Mouse with Optical DPI Adjustable Omron Switch for Gamers</h6>
                <span>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <p>₹ 3,990</p>
                <button><a href="payment page/payment page.html" target="_blank">BUY NOW</a></button>
              </div>
          </div>
      </div>
    </section>

    <footer>
      <div>
        <h4>Download our app</h4>
        <p>Get it in android and ios both </p>
        <button><a ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google-play" viewBox="0 0 16 16">
          <path d="M14.222 9.374c1.037-.61 1.037-2.137 0-2.748L11.528 5.04 8.32 8l3.207 2.96 2.694-1.586Zm-3.595 2.116L7.583 8.68 1.03 14.73c.201 1.029 1.36 1.61 2.303 1.055l7.294-4.295ZM1 13.396V2.603L6.846 8 1 13.396ZM1.03 1.27l6.553 6.05 3.044-2.81L3.333.215C2.39-.341 1.231.24 1.03 1.27Z"/>
        </svg> play store</a></button>
        <button><a ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-apple" viewBox="0 0 16 16">
          <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"/>
          <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"/>
        </svg> app store</a></button>

      </div>
      <div>
        <img src="logo.jpg" alt="">
        <p>@Desgin by Sayan Sarkar</p>
        
      </div>
      <div>
        <h4>Usefull Links</h4>
        <p>Couppons</p>
        <p>Blog post</p>
        <p>Oders</p>
        <p>Delivery</p>
      </div>
      <div>
        <h4>Usefull Links</h4>
        <p>Facebook</p>
        <p>Instagram</p>
        <p>Twitter</p>
        <p>Youtube</p>
      </div>
    </footer>
    <script src="script.js"> </script>
    <script src="shoppingcart.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body> 
</html>
