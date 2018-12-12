<?php
echo 'hello world'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/Styles.css">
    <link rel="shortcut icon" href="Images/csdc-2.png" type="image/x-icon">
    <script src="JS/Index.js"></script>
    <title>CSDC Systems Solutions Limited / Welcome</title>
</head>
<body>
     <header>
            <img src="https://37kxlava5a84obgo1lii2e63-wpengine.netdna-ssl.com/wp-content/uploads/2017/05/csdc-logo.png" alt="CSDC Inc" id="logo" data-height-percentage="73" data-actual-width="140" data-actual-height="70">
          <div class="container">
               <div id="branding">
                <h1 id="left"> <span class="highlight">CSDC</span> Systems Solutions Limited</h1>     
               </div>
               <nav>
                   <ul>
                       <li class="current"><a href="index.html"> Home</a></li>
                       <li><a href="Pages/about.html">About</a></li>
                       <li><a href="/Pages/service.html">Clients</a></li>
                       <li><a href="/Pages/casestudy.html">Team</a></li>
                   </ul>
               </nav>
          </div> 
     </header>

     <section id="showcase">
         <div class="container">
              <h1>Introducing TUBA</h1>
              <div id="transparent">
              <p id="blue">TUBA is a web based systems development platform for Government Agencies responsible for ensuring compliance to rules and regulations. It helps develop complex systems without resorting to large team based development projects, custom developed codes, and associated sustenance costs and risks.</p>
            </div>
              </div>
     </section>
              <section id="newsletter">
                  <div class="container">
                     <h1>Welcome to TUBA <br> Please sign in your name</h1>
                     <form action="php" method="POST">
                         <input type="name" placeholder="Enter Name..." required class="form-class">
                         <form action="php">
                            <input type="password" placeholder="Enter Password..." required class="form-class">
                         <button type="submit" class="button-1">Enter</button>
                     </form>
                  </div>
              </section>

              <section id="boxes">
                    <div class="container">
                        <p id="client">Our Partners</p>
                      <!-- <div class="box">
                          <img src="/Images/csdc-2.png " alt="" srcset="">
                          <h3>CSDC</h3>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, eos.</p>
                      </div> -->
                      <div class="box">
                            <img src="/Images/FIRS.png" alt="" srcset="">
                            <h3>Federal Internal Revenue Services</h3>
                            <p>The Federal Inland Revenue Service is responsible for assessing, collecting and accounting for tax and other revenues accruing to the Federal Government.</p>
                        </div>
                        <div class="box">
                                <img src="/Images/Lirs.jpg" alt="" srcset="">
                                <h3>Lagos State Internal Revenue Services</h3>
                                <p>As Lagos State moves towards meeting the needs of a mega city, LIRS continues to position itself as the major funding arm of the state government by putting in place structures that will ensure collection of the proper amount of tax revenue at the least cost.</p>
                            </div>
                            <div class="box">
                                <img src="/Images/ondo.png" alt="" srcset="">
                                <h3>Ondo State Board of Internal Revenue Services</h3>
                                <p>Widening and deepening internally generated revenue to adequately fund recurrent expenditure and Institutionalizing a robust and effective payment platform capable of propelling internally generated revenue into a pivot for public finance</p>
                            </div>
                            <div class="box">
                                <img src="/Images/kwara.png" alt="" srcset="">
                                <h3>Kwara State Board of Internal Revenue Services</h3>
                                <p>To serve the residents of Kwara State using the most convenient strategies that will add value and integrity to the revenue mobilization process and actualize the developmental objectives of the Government.</p>
                            </div>
                    </div>
              </section>
     <footer>
         <p>CSDC systems solutions limited, Copyright &copy; 2018</p>
     </footer>
</body>
</html>