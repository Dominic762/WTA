
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dominic Peter</title>
    <!--font awesome cnd link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--custom css file link-->
    <link rel="stylesheet " href="style.css">
    <script>
        function showdate(){
            var d=new Date();
            var h=d.getHours();
            var m=d.getMinutes();
            var s=d.getSeconds();
            document.getElementById("client-date").innerHTML=(h+':'+m+':'+s);
            setTimeout(showdate,1000);
        }
    </script>
</head>
<body onload="showdate()">


<?php
      
    
?>




<!--header section-->
<header>
    <div class="user">
        <img src="c3.jpg"alt="">
        <h3 class="name">Dominic Peter</h3>
        <p class="post">Student at SJEC</p>
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="skills.php">Skills</a></li>
            <li><a href="certificate.html">Certifications</a></li>
            <li><a href="project.php"">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

</header>
<!--header ends-->

<p id="client-date" style="color:white;float:left;font-size:24px"></p>
<div class="visitor" style="color:white;float:right;font-size:24px;background-color:grey;width:;">
    <?php
      
      $c= file_get_contents("count.txt");
      echo "<p> VISITORS COUNT:"." ".$c." </p>";
       file_put_contents("count.txt",$c+1);
?>

   
    

</div>    


<!--home section starts-->
<section class="home" id="home">

    
    <h2>I'M   <span>Dominic Peter</span>  </h2>
    <p>As a passionate and dedicated computer science student, I am constantly driven by my love for problem-solving and my desire to contribute to the world of technology through
         innovation. With a strong foundation in programming and a deep understanding of algorithms, I have developed a solid skill set that allows me to approach complex challenges
        with confidence.
    </p>
        <a href="#about"><button class="btn"> ABOUT ME <i class="fas fa-user"></i></button></a>

</section>
<!--home section ends-->



<!--About section starts-->
<section class="about" id="about">
    <h1 class="heading"><span>about </span>Me</h1>
<div class="row">
    <div class="info">
        <h3>
            <span>name:<span>Dominic Peter</span>
        </h3>
        <h3>
            <span>age:<span>22</span>
        </h3>
        <h3>
            <span>Course:<span>B.E/B.Tech</span>
        </h3>
        <h3>
            <span>Branch:<span>Computer Science Engineering</span>
        </h3>
        <h3>
            <span>College:<span>St Joseph Engineering College</span>
        </h3>
        <h3>
            <span>Language:<span>Hindi, English</span>
        </h3>
        <a href="#"><button class="btn">Download CV <i class="fas fa-download"></i></button></a>

    </div>
    <div class="counter">
        <div class="box">
            <span>ICSE</span>
            <h3>St Teresa School</h3>
            <h3>Percentage:90%</h3>
        </div>
        <div class="box">
            <span>PUC</span>
            <h3>Christ Pre-University College</h3>
            <h3>Percentage:80%</h3>
        </div>
        <div class="box">
            <span>B.E/B.Tech</span>
            <h3>St Joseph Engineering College</h3>
            <h3>Percentage:70%</h3>
        </div>
        
    </div>
    </div>
</section>
<section class="contact">
<form action="#">
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="Your Email">
            <input type="text" placeholder="Your Address">
            <input type="number" placeholder="Phone Number">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea> 
            <div class="btn-box formBtn">
                <button type="submit" class="btn">Send Message</button>
            </div>
        </form>

</section>



<!--About section starts-->



<!--jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<!--custom js link-->
<script src="script.js"></script>

    
</body>
</html>
