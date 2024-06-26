<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: #dbf1f0;
    }
    .navi{
        /* border-radius: 40px; */
       background-color: #dbf1f0;
       display: block;
       width: 94%;
       height: 82px;
       margin: 0px -25px;
       padding: 0px 20px;
       position: fixed;
       width: 100%;
    top: 0;
    z-index: 1000;
    }
    nav ul{
        padding-top: 14px;
        float: right;
    }
    .navbar li{
        text-decoration-color: aqua;
        list-style: none;
        display: inline-block;
        padding: 0px 40px;
    }
    .navbar li a{
        color: rgb(0, 0, 0);
        text-decoration: none;
        font-weight: bold;
        font-size: 22px;
        padding: 23px 20px;
    }
    .button{
      background-color: rgb(138, 17, 244);
        color: white;
        font-weight: bold;
        font-size: medium;
        margin: -40px 60px 0px 45px;
        border-radius: 6px;
        padding: 9px 25px;
        cursor: pointer;
    }
    .button:hover:nth-child(1){
            transform: scale(1.1);
        }
    .bttn{
      background-color: rgb(138, 17, 244);
        color: white;
        font-weight: bold;
        font-size: medium;
        margin: -40px 60px 0px 13px;
        border-radius: 6px;
        padding: 9px 25px;
        cursor: pointer;
    }
    .bttn:hover:nth-child(1){
            transform: scale(1.1);
        }
    .navbar li a:hover,
    .navbar li a:active{
        color: rgb(138, 17, 244);
        transition: all 0.4s ease 0s ;
        text-decoration: underline;
    }
    nav .logo{
      float: left;
      /* text-decoration: underline; */
      font-family: verdana;
      font-weight: bold;
      color: rgb(0, 0, 0);
      font-size: 25px;
      margin: -16px 0px 0px 0px;
      padding: 0px 145px;
    }
    nav .logo:hover,
    .nav li a:active{
        color: rgb(138, 17, 244);
    }
    hr{
    margin-top: 29px;
    }
    .cap{
        margin: -19px 10px 10px -40px;
        font-size: 15px;
    }
    .log{
        width: 50px;
    height: 50px;
    margin: 9px 0px 0px -415px;
    }
    .quote{
        font-size: 36px;
        font-weight: bolder;
        font-family: verdana;
        margin: 195px 10px 10px 145px;
        background-image: linear-gradient(to right, rgb(110, 54, 110), indigo, blue, green, yellow, orange, red);
-webkit-background-clip: text;
color: transparent;
    }
    .quote2{
        font-family: FreeMono, monospace;
       
        margin: -5px 0px 0px 145px;
        font-weight: 600;
        font-size: 25px;
        color: #035857;
    }
    .quote2:hover{
      background-image: linear-gradient(to right, rgb(110, 54, 110), indigo, blue, green, yellow, orange, red);
-webkit-background-clip: text;
color: transparent;
    }
    /* .btn{
        background-color: rgba(186, 104, 69, 0.97);
        color: white;
        font-weight: bold;
        font-size: 14px;
        margin: 32px -25px 25px 201px;
        border-radius: 20px;
        padding: 12px 30px;
        cursor: pointer;
    } */

    .btn {
  background: linear-gradient(to right, rgb(255, 102, 0), darkorange);
  color: white;
  margin: 50px -25px 25px 201px;
  --width: 173px;
  --height: calc(var(--width) / 3);
  width: var(--width);
  height: var(--height);
  text-align: center;
  line-height: var(--height);
  font-size: calc(var(--height) / 2.5);
  font-family: sans-serif;
  letter-spacing: 0.2em;
  border: 1px solid rgb(181, 17, 6);
  border-radius: 2em;
  transform: perspective(500px) rotateY(-15deg);
  text-shadow: 6px 3px 2px rgba(0, 0, 0, 0.2);
  box-shadow: 2px 0 0 5px rgba(0, 0, 0, 0.2);
  transition: 0.5s;
  position: relative;
  overflow: hidden;
  cursor: pointer;
  
}

.btn:hover {
  transform: perspective(500px) rotateY(15deg);
  text-shadow: -6px 3px 2px rgba(0, 0, 0, 0.2);
  box-shadow: -2px 0 0 5px rgba(0, 0, 0, 0.2);
}

.btn::before {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  background: linear-gradient(to right, transparent, white, transparent);
  left: -100%;
  transition: 0.5s;
}

.btn:hover::before {
  left: 100%;
}



    .container {
    text-align: center;
  }
  
  #rotatableImage {
    max-width: 100%;
    max-height: 400px;
    transition: transform 0.5s ease;
  }

  .contain {
    text-align: center;
  }
  
  #rotatable {
    max-width: 100%;
    max-height: 400px;
    transition: transform 0.5s ease;
  }

  .co {
    text-align: center;
  }
  
  #ro {
    max-width: 100%;
    max-height: 400px;
    transition: transform 0.5s ease;
  }
  .mob{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    float:right;
    width: 40%;
    margin: -635px 110px 0px 0px;
  }

  .backcirc{
    width: 470px;
    height: 470px;
    background-color: #c8cfd4;
    border-radius: 50%;
    position: absolute;
    top: 56%;
    left: 73%;
    transform: translate(-50%, -50%);
    z-index: -1;
  }

  hr{
    margin-top: -5px;
  }

  .features{
    margin: 135px 0px 0px 170px;
    font-family: verdana;
    font-weight: bold;
    font-size: 27px;
    /* text-shadow: 4px 4px 2px rgba(150, 150, 150, 1); */
    background-image: linear-gradient(to right, rgb(233, 103, 233), indigo, blue, green, yellow, orange, red);
-webkit-background-clip: text;
color: transparent;
text-decoration: underline;
  }

  .instantloan{
    width: 4%;
    margin: 35px 0px 0px 210px;
  }

  .ipl{
    margin: -49px 0px 0px 300px;
    font-family: Quicksand,sans-serif;
    font-size: 30px;
    
  }
  
  .loyaltyreward{
    width: 4%;
    margin: 55px 0px 0px 210px;
  }

  .lrp{
    margin: -49px 0px 0px 300px;
    font-family: Quicksand,sans-serif;
    font-size: 30px;
  }

  .secureloan{
    width: 4%;
    margin: 55px 0px 0px 210px;
  }

  .sypl{
    margin: -45px 0px 0px 300px;
    font-family: Quicksand,sans-serif;
    font-size: 30px;
  }

  .personalloan{
    width: 4%;
    margin: 55px 0px 0px 210px;
  }
  .plfy{
    margin: -45px 0px 0px 300px;
    font-family: Quicksand,sans-serif;
    font-size: 30px;
  }

  .bimg{
    width: 32%;
    float: right;
    margin: -476px 150px 0px 0px;
  }

  
 
  
  .howworks{
    float: right;
    margin: 200px -420px 0px 0px;
    font-size: 20px;
    font-family: verdana;
  }
  .aim{
    float: right;
    margin: 330px -451px 0px 0px;
    font-size: 20px;
    font-family: verdana;
    color: #035857;
  }
  .aim h3:hover{
    background-image: linear-gradient(to right, rgb(233, 103, 233), indigo, blue, green, yellow, orange, red);
-webkit-background-clip: text;
color: transparent;
  }
  .aim h3:hover:nth-child(1){
            transform: scale(1.3);
        }
    .a{
      background-image: linear-gradient(to right, violet, indigo, blue, green, yellow, orange, red);
-webkit-background-clip: text;
color: transparent;
    }
  .clo{
    float: right;
    margin: 440px -491px 0px 0px;
    font-size: 20px;
    font-family: verdana;
    color: #035857;
  }
  .clo h3:hover{
    background-image: linear-gradient(to right, violet, indigo, blue, green, black, orange, red);
-webkit-background-clip: text;
color: transparent;
  }
  .clo h3:hover:nth-child(1){
            transform: scale(1.3);
        }
    .b{
      background-image: linear-gradient(to right, violet, indigo, blue, green, black, orange, red);
-webkit-background-clip: text;
color: transparent;
    }
  .getf{
    float: right;
    margin: 550px -704px 0px 0px;
    font-size: 20px;
    font-family: verdana;
    color: #035857;
  }
  .getf h3:hover{
    background-image: linear-gradient(to right, violet, indigo, blue, green, yellow, orange, red);
-webkit-background-clip: text;
color: transparent;
  }
  .getf h3:hover:nth-child(1){
            transform: scale(1.3);
        }
    .c{
      background-image: linear-gradient(to right, violet, indigo, blue, green, yellow, orange, red);
-webkit-background-clip: text;
color: transparent;
    }
  .lordworks{
    width: 33%;
    margin: 205px 0px 0px 110px;
  }


 
  .img12{
      width:15%;
      margin: 210px 0px 0px 320px;
  }
  .quote12{
    font-size: 2.25rem;
    font-family: Verdana;
    font-weight: bold;
    color: #035857;
    margin: 50px 0px 0px 220px;
  }
  .quote13{
    font-size: 2.25rem;
    font-family: Verdana;
    font-weight: bold;
    color: #035857;
    margin: 10px 0px 0px 240px;
  }
  .quote14{
    margin: 50px 0px 0px 247px;
    font-size: 25px;
    /* font-weight: bold; */
    font-family: "medium-font";
    
  }
  .quote15{
    margin: 15px 0px 0px 358px;
    font-size: 25px;
    /* font-weight: bold; */
  }
  .phone{
    float: right;
    width: 32%;
    height: 80vh;
    margin: -550px 160px 0px 0px;
  }

  .partner{
    font-size: 2.25rem;
    text-align: center;
    color: #035857;
    font-family: verdana;
    font-weight: bold;
    margin-top: 130px;
  }

  .pinfo{
    font-size: 23px;
    color: #000000;
    font-family: verdana;
    font-weight: bold;
  }
  .pin{
    font-size: 16px;
    font-family: verdana;
  }
  .pi{
    margin-top:10px ;
    margin-left: 150px;
  }

  .pinfo2{
    font-size: 23px;
    color: #000000;
    font-family: verdana;
    font-weight: bold;
  }
  .pin2{
    font-size: 16px;
    font-family: verdana;
  }
  .pi2{
    float: none;
    margin-top: -201px;
    margin-left: 41%;
  }

  .pinfo3{
    font-size: 23px;
    color: #000000;
    font-family: verdana;
    font-weight: bold;
  }
  .pin3{
    font-size: 16px;
    font-family: verdana;
  }
  .pi3{
    margin-top:-213px;
    margin-right: 150px;
    float: right;
  }

  
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);





.footer-distributed{
  background: #666;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 55px 50px;
  margin-top: 70px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
  display: inline-block;
  vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
  width: 40%;
}

/* The company logo */

.footer-distributed h3{
  color:  #ffffff;
  font: bold 36px verdana;
  margin: 0;
}

.footer-distributed h3 span{
  color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
  color:  #ffffff;
  margin: 35px 0 12px;
  padding: 0;
}

.footer-distributed .footer-links a{
  display:inline-block;
  line-height: 1.8;
  font-weight:700;
  text-decoration: none;
  font-size: 17px;
  color:  inherit;
  padding: 10px;
}

.footer-distributed .footer-company-name{
  color:  #222;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
  width: 35%;
}

.footer-distributed .footer-center i{
  background-color:  #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p{
  display: inline-block;
  color: #ffffff;
  font-weight:400;
  vertical-align: middle;
  margin:0;
}

.footer-distributed .footer-center p span{
  display:block;
  font-weight: normal;
  font-size:14px;
  line-height:2;
}

.footer-distributed .footer-center p a{
  color:  lightseagreen;
  text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
  width: 20%;
}

.footer-distributed .footer-company-about{
  line-height: 20px;
  color:  #92999f;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span{
  display: block;
  color:  #ffffff;
  font-size: 16px;
  font-weight: bold;
  margin-bottom: 20px;
}

/* .footer-distributed .footer-icons{
  margin-top: 25px;
}

.footer-distributed .footer-icons a{
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color:  #33383b;
  border-radius: 2px;

  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;

  margin-right: 3px;
  margin-bottom: 5px;
} */

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

  .footer-distributed{
    font: bold 14px sans-serif;
  }

  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right{
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }

  .footer-distributed .footer-center i{
    margin-left: 0;
  }

}


.insta{
  width: 35%;
    float: right;
    margin: 34px 40px 0px 0px;
    background-color: rgb(24 203 180);
    border-radius: 60px;
    padding: 14px;
}
.footer-icons{
  display:flex;

}
</style>
<body>
<div>
    <nav class="navi">
        <div class="logo">
         <p>LORD'S</p>
         <p class="cap">CAPITAL AND FINANCE</p>
        </div>
       
        <ul class="navbar">
            <li class="h"><a href="homepage1.php">Home</a></li>
            <!-- <li><a href="webskills2.html">Skills</a></li>
           
            <li><a href="webabout4.html">About</a></li> -->
            <a href="index.php"><button class="button">Login</button></a>
            <!-- <a href="#"><button class="bttn">Log In</button></a> -->
            
         </ul>
         <div> <img class="log" src="logo.png" alt="logo"></div>
     </nav>
 </div>
 <div>
  
 </div>
 <hr>

 
 <div class="quote">
    <p>We Make Money Lending</p>
    <p>Simplier, Faster, Safer for</p>
    <p>The Social Generation.</p>
 </div>
 <div class="quote2">
    <p>LORD's - A smarter way to borrow</p>
    <p>through your smartphones within a 2 days</p>
 </div>

 <div>
    <a href="knowmore.html"><button class="btn">Know  More ></button></a>
 </div>




 <div class="backcirc"></div>
    <div class="mob">
 <div class="container">
    <img id="rotatableImage" src="img3.png" alt="Rotatable Image">
  </div>

 
  <script>// Get the image element
    const rotatableImage = document.getElementById('rotatableImage');
    
    // Set the initial rotation to 270 degrees
    rotatableImage.style.transform = 'rotate(25deg)';
    </script>


<div class="contain">
    <img id="rotatable" src="img2.png" alt="Rotatable Image">
  </div>

 
  <script>// Get the image element
    const rotatable = document.getElementById('rotatable');
    
    // Set the initial rotation to 270 degrees
    rotatable.style.transform = 'rotate(25deg)';
    </script>

<div class="co">
    <img id="ro" src="img1.png" alt="Ro">
  </div>

 
  <script>// Get the image element
    const ro = document.getElementById('ro');
    
    // Set the initial rotation to 270 degrees
    ro.style.transform = 'rotate(25deg)';
    </script>
    </div>
 
   
    <div class="features">
      <h1>Features You’d Love</h1>
    </div>
    <div>
      <img class="instantloan" src="instantloan.png" alt="instantloan">
      <h2 class="ipl">Instant Personal Loans</h2>
    </div>
    <div>
      <img class="loyaltyreward" src="loyaltyreward.png" alt="loyaltyreward">
      <h2 class="lrp">Loyalty Rewards Program</h2>
    </div>
    <div>
      <img class="secureloan" src="secureloan.png" alt="secureloan">
      <h2 class="sypl">Secure Your Personal Loan</h2>
    </div>
    <div>
      <img class="personalloan" src="personalloan.png" alt="personalloan">
      <h2 class="plfy">Personal Loans For You</h2>
    </div>

    <div>
      <img class="bimg" src="phone1.svg" alt="bimg">
    </div>


   
    <div class="howworks">
      <h2>How a Personal Loan with</h2>
      <h2> Lord's Captial & Finance Works</h2>
    </div>
    <div class="aim">
      <h3 class="a">Apply in Minutes</h3>
      <p>Get many Loan options Based on your needs</p>
    </div>
    <div class="clo">
      <h3 class="b">Choose a Loan Amount</h3>
      <p>Select amount, interest options you like the best</p>
    </div>
    <div class="getf">
      <h3 class="c">Get Funded</h3>
      <p>Once your Loan is Funded,We'll send the money straight to your bank</p>
      <p>account or pay your creditors directly.</p>
    </div>

    <div>
      <img class="lordworks" src="lordworks.svg" alt="lordworks">
    </div>

   

    <div>
      <p class="partner">Our Lending Partners</p>
    </div>
    <div class="pi">
    <div class="pinfo">
      <p>Nodal officer details:</p> </div>
      <div class="pin">
      <p>Mr. Suraj Deshmukh</p>
      <p>Phone: 01142610483</p>
      <p>Timings for contact: 10AM to 6PM,</p>
      <p>Monday to Saturday*</p>
    </div>
  </div>

  <div class="pi2">
    <div class="pinfo2">
      <p>Nodal officer details:</p> </div>
      <div class="pin2">
      <p>Mr. Uttkarsh Shah</p>
      <p>Phone: 01142610483</p>
      <p>Timings for contact: 10AM to 6PM,</p>
      <p>Saturday*</p>
    </div>
  </div>

  <div class="pi3">
    <div class="pinfo3">
      <p>Nodal officer details:</p> </div>
      <div class="pin3">
      <p>Mr. Gaurav Mali</p>
      <p>Phone: 01142610483</p>
      <p>Timings for contact: 10AM to 6PM,</p>
      <p>Saturday*</p>
    </div>
  </div>

  <!-- <div class="footer">
    <p>Contact</p>
    <p>FAQs</p>
    <p>Privacy Policy</p>
    <p>Terms of Services</p>
  </div> -->

  
<footer class="footer-distributed">

      <div class="footer-left">

        <h3>LORD'S<span> Captial & Finance</span></h3>

        <p class="footer-links">
          <a href="homepage1.html" class="link-1">Home</a>
          
         
          
          <a href="contactpage.html">Contact</a>
        </p>

      
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Mundhwa - Kharadi Rd,</span> Amanora Park Town, Hadapsar, Pune</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+91-83083 26267</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:pratappawar8698567744@gmail.com">Lordscapital&finance@company.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the company</span>
          A new age lending company that strives to “make lending Money smarter
        </p>

        <div class="footer-icons">

          <a href="https://www.instagram.com/_pratap_2.0?igsh=OGQ5ZDc2ODk2ZA=="><img class="insta" src="insta.png" alt=""></a>
          <a href="https://www.facebook.com/pratap.pawar.712714"><img class="insta" src="facebook.png" alt=""></a>
          <a href="#"><img class="insta" src="linkedin.png" alt=""></a>
          <a href="https://x.com/_Pratap_7744?t=NrsdsdA4PejmZ-NP_921UQ&s=09"><img class="insta" src="twitter.png" alt=""></a>

        </div>

      </div>

    </footer>
</body>
</html>
 