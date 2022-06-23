
<?php 
include 'config.php';

session_start();

?>

<!DOCTYPE html>
<!-- Designined by Yashvi Jhade -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Yashvi Jhade Portfolio </title>
    <link rel="stylesheet" href="style2.css">
    <!-- Fontawesome CDN Link for social media icons etc.-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <!-- Move to up button -->
  <div class="scroll-button">
    <a href="#home"><i class="fas fa-arrow-up"></i></a>
  </div>
  <!-- navgaition menu -->
  <nav>
    <div class="navbar">
      <div class="logo"><a href="#">Purrrhaps!</a></div>
      <ul class="menu">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#contact">Contact</a></li>
          <div class="cancel-btn">
            <i class="fas fa-times"></i>
          </div>
      </ul>
      <div class="media-icons">
        <a href="https://www.facebook.com/yashvi.jhade.3" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/YashviJhade" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/yashvi_jhade_/" target="_blank"><i class="fab fa-instagram-square"></i></a>
        <a href="logout.php">Logout</a>
      </div>
    </div>
    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </nav>

<!-- Home Section Start -->
 <section class="home" id="home">
   <div class="home-content">
     <div class="text">
       <div class="text-one">Hello,</div>
       <div class="text-two">I'm Yashvi Jhade</div>
       <div class="text-three">A Computer Science Engineering Student</div>
       <div class="text-four">Of MIT-WPU, Pune</div>
   </div>
 </section>

<!-- About Section Start -->
<section class="about" id="about">
  <div class="content">
    <div class="title"><span>About Me</span></div>
  <div class="about-details">
    <div class="left">
      <img src="images/about.jpg" alt="">
    </div>
    <div class="right">
      <div class="topic">The secret to getting ahead is getting started!</div>
      <p>My name is Yashvi Jhade. I am an engineering student and I am a design-enthusiast, looking forward to make a career in designing. Currently freelancing in graphic design.</p>
      <div class="button">
        <button onclick="window.open('CV.pdf','_blank')">Download CV</button>
        <!-- <button>
        <a href="Design CV.pdf" target="_blank">Download CV</a>
      </button> -->
        <!-- <button>Download CV</button> -->
      </div>
    </div>
  </div>
  </div>
</section>

<!-- My Skill Section Start -->
<!-- Section Tag and Other Div will same where we need to put same CSS -->
<section class="skills" id="skills">
 <div class="content">
   <div class="title"><span>My Skills</span></div>
   <div class="skills-details">
     <div class="text">
       <div class="topic">Skills Reflects Our Knowledge</div>
       <p>GRAPHIC DESIGN- ILLUSTRATOR, COREL DRAW. (HANDS-ON)</p>
       <p>UI UX- FIGMA, PROTO.IO</p>
       <p>VIDEO EDITING- BASIC PREMIERE PRO</p>
       <p>CODING-JAVA, CSS, HTML, C, PHP, MYSQL, MongoDB</p>
       <div class="video">
        <iframe width="420" height="315"
        src="https://www.youtube.com/embed/YqQx75OPRa0?autoplay=1&mute=1">
        </iframe>
       </div>
     </div>
     <table>
      <thead>
        <tr>
        <th>Skills</th>
        <th>Completed</th>
        <th>Experience</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <td>HTML</td>
        <td>80%</td>
        <td>2 year</td>
        </tr>
        <tr>
        <td>CSS</td>
        <td>90%</td>
        <td>2 year</td>
        </tr>
        <tr>
        <td>JS</td>
        <td>60%</td>
        <td>1 year</td>
        </tr>
      </tbody>
      </table>
   </div>
 </div>
</section>


<!-- Contact Me section Start -->
<section class="contact" id="contact">
  <div class="content">
    <div class="title"><span>Contact Me</span></div>
    <div class="text">
      <span>E-mail: jhadeyashvi@gmail.com</span>
    </div>
    <div class="main-fillform">
      <div class="main-agileinfo">
        <div class="agileits-top">
          <form action="#" method="post">
            <input class="text" type="text" name="Name" placeholder="Name" required="">
            <input class="text" type="text" name="poc" placeholder="Purpose of Contact" required="">
            <div class="clear"> </div>
            </div>
            <!-- <input type="submit" value="Let's Chat"> -->
            <div class="contact_button">
            <button onclick="window.open('mailto:jhadeyashvi@gmail.com.com?subject=I would like to HIRE YOU!&body=Hello there!','_blank')">Hire Me!</button>
            <!-- <a href="mailto:jhadeyashvi@gmail.com.com?subject=I saw your web app&body=I would like to HIRE YOU!">Let's Chat</a> -->
            </div>
          </form>
        </div>
      </div>
    </div>
      </div>
    </div>
</div>
</section>

<!-- Footer Section Start -->
<footer>
  <div class="text">
    <span>Created By <a href="#">Yashvi Jhade</a></span>
  </div>
</footer>

  <script src="script.js"></script>
</body>
</html>
