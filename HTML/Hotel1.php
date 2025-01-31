<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avenra Hotel</title>
    <link rel="stylesheet" href="../CSS/Style.css">
    <link rel="stylesheet" href="../CSS/Hotel1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../Js/Hotel1.js" defer></script>
</head>

<body style=" height: 6vh;
margin-top: 0%;">
    <!-- This is header section -->
    <header>
        <div class="front-row">
        <div class="logo-section"><a href="../HTML/Home.php"><img src="../images/Dream new.png" style="width:425px; height: 140px; margin-top: 5px;"></a></div>
            <div class="login-section">
                <div class="btn-packs">
                    <div class="log">
                        <span ><a style="color: black;text-align: center;
                            padding:8px 0 0 0;font-family: 'Koulen', cursive; font-size: 25px; font-weight: 30px;" href="../HTML/Login.php">log-in</a></span>
                    </div>
                    <div class="log">
                        <span><a a style="color: black;text-align: center;
                            padding:8px 0 0 0;font-family: 'Koulen', cursive; font-size: 25px; font-weight: 30px;" href="../HTML/Register.php">register</a></span>
                    </div>
                    <div class="avatar">
                        
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-section">
            <ul class="nav">
            <li><a href="../HTML/Home.php">Home</a></li>
                <li><a href="../HTML/TypesOfWeddings.php">Types Of Wedding</a></li>
                <li><a href="../HTML/hotel.php">Hotel</a></li>
                <li><a href="../HTML/aboutus.php">About us</a></li>
                <li class="bookNow"> <a href="../HTML/reservation.php">Make Reservations</a> </li>
            </ul>
        </div>
    </header>
    <br><br><br><br><br><br><br><br><br><br>

    <div class="row">
        <div class="card">
          <h2 style="font-size: 50px">AVENRA HOTEL</h2>
          <!-- <h5>Title description, Dec 7, 2017</h5> -->
        </div>
    </div>
    
    <div class="row">
        <div class="leftcolumn">
    
          <div class="card">
            <div class="hotelimg" style="height:370px;">
              <img src="../images/avenra1.jpg" height="100%" width="100%">
            </div>
          </div>
    
          <div class="card">
            <!-- <ul>
                <li><a class="active" href="#details">Details</a></li>
                <li><a href="#hallsavailable">Halls Available</a></li>
                <li><a href="#pandv">Photos and Videos</a></li>
                <li><a href="#wrireview">Write a Review</a></li>
            </ul> -->
            <br>
            <p id="details">
              <br>
              <h3 style="font-size: 30px; font-weight: bold;">DETAILS</h3><br><br>
              <p style="font-size: 20px">The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. 
                Conveniently situated in the Negombo City part of Negombo, this property puts you close to attractions and interesting dining options. 
                Don't leave before paying a visit to the famous The Angurukaamulla Temple. Rated with 5 stars, this high-quality property provides guests with access to restaurant, 
                indoor pool and steamroom on-site.</p>
             <br> <br>
              <h4 style="font-size: 30px;">Facilities</h4> <br><br>
              <ul style=" font-size: 20px;" class="normal">
              
                <li>- Front desk [24-hour]</li><br><br>
                <li>- Airport transfer</li><br><br>
                <li>- Bicycle rental</li><br><br>
                <li>- Valet parking</li><br><br>
                <li>- Swimming pool [indoor]</li><br><br>
                <li>- Sauna</li><br><br>
                <li>- Free Wi-Fi in all rooms!</li><br><br>
                <li>- Check-in/out [express]</li><br><br>
              </ul> 
            </p>
            <br><br>
            <p id="hallsavailable">
              <br>
              <h3 style="font-size: 30px;font-weight: bold;"">Halls Available</h3><br><br>
              <ul>
              <li style="font-size: 25px">- Garden Hall </li><br><br><br>
              <li style="font-size: 25px">- Beach Hall</li><br><br><br>
              <li style="font-size: 25px">- Bayfonte Hall</li><br><br><br>
              <li style="font-size: 25px">- One33one Hall</li><br><br><br>
              <li style="font-size: 25px">- Gangaara Hall</li>
            </ul>
            
            <p id="pandv">
              <br> <br> <br>
              <h3 style="font-size: 30px;font-weight: bold;"">Photos and Videos</h3>
              <!-- The five columns -->
              <br><br><br>
                <div class="row">
                  <div class="column">
                    <img src="../images/avenra1.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
                  </div>
                  <div class="column">
                    <img src="../images/avenra2.jpg" alt="Snow" style="width:100%" onclick="myFunction(this);">
                  </div>
                  <div class="column">
                    <img src="../images/avenra3.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
                  </div>
                  <div class="column">
                    <img src="../images/avenra4.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
                  </div>
                  <div class="column">
                    <img src="../images/avenra5.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
                  </div>
                </div>
    
    
                <div class="container">
                  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                  <img id="expandedImg" style="width:100%">
                  <div id="imgtext"></div>
                </div>
            </p>
    <br>  <br>  <br>  <br>  <br> 
            <span style="font-size: 30px; font-weight:bold" class="heading">User Ratings</span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <br><br>
          <p style="font-size: 25px">5 average based on 254 reviews.</p>
          <br><br>
          <hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>150</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>63</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>20</div>
  </div>
</div>
          </div>
        </div>
    
        <div class="rightcolumn">
          <div class="card">
            <h3 style="font-size: 30px;">LOCATION</h3>
            <br> <br>
            <div class="location" style="height:250px;">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15868.204321447964!2d80.1111567!3d6.1238282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x63d0808cbc80cc8f!2sAvenra%20Beach%20Hotel!5e0!3m2!1sen!2slk!4v1652380511108!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <br><br>
          <div class="card">
            <h3 style="font-size: 30px;">CONTACT</h3>
            <!-- <hr class="rule"> -->
            <div class="contact"><br><br>
              <ul>
                <li>Website : https://www.avenrahotels.com/ </li><br><br><br>
                <li>Address : Avenra Garden Hotel, Avenra Group, Negombo, Sri Lanka</li><br><br><br>
                <li>Email : info@avenragardenhotel.com</li><br><br><br>
                <li>Contact No : +94 312 228 000 / +94 312 228 100</li><br>
              </ul>
            </div>
          </div>
          <br><br>
          <div style="height: 110vh" class="card">
            <h3></h3>
            <div class="fakeimg" style="height:10px;"><img style="height: 200px; width: 400px;" src="../images/Hall1.png"></div><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="fakeimg" style="height:100px;"><img style="height: 200px; width: 400px;" src="../images/hall3.jpg"></div><br><br><br><br><br><br><br><br>
            <div class="fakeimg" style="height:100px;"><img style="height: 200px; width: 400px;" src="../images/hall 2.png"> </div>
          </div>
        </div>
    </div>

    <footer class="sticky-footer">
      <div class="txt-area">
          <p class="text-1"> <a style="color: rgb(7, 6, 6);
              font-size: 20px;
              font-weight: 800;
              margin: 0 -130px;
            
              position: relative;
          margin-left: 200px;
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: row;
          height: 50px;
          width: 400px;letter-spacing: 3px;" href="../HTML/contactus.php">Contact US</a> </p>
          <p id="divider">|</p>
          <p class="text-1"><a style="color: rgb(7, 6, 6);
              font-size: 20px;
              font-weight: 800;
              margin: 0 10px;
             
              position: relative;
          margin-left: -130px;
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: row;
          height: 50px;
          width: 400px;letter-spacing: 3px;" href="../HTML/Feedback.php">Feedback</a></p>
      </div>
      <div class="social-icons">
          <div class="fb">
              <i class="fa-brands fa-facebook-square"></i>
          </div>
          <div class="twitter">
              <i class="fa-brands fa-twitter-square"></i>
          </div>
          <div class="insta">
              <i class="fa-brands fa-instagram-square"></i>
          </div>
          <div class="google">
              <i class="fa-brands fa-google-plus-square"></i>
          </div>
      </div>
  </footer>


</html>

