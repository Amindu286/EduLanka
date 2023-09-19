<?php

$host = "localhost";
$user = "phpuser";
$password = "php123";
$db = "schoolproject";

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

session_start();

if(isset($_POST['upload'])){
    $file = $_FILES['image']['name'];
    $target_path = "uploads/"; 

    $query = "INSERT INTO announcements(image) VALUES('$file')";
    $res = mysqli_query($conn, $query);

    if($res){
        move_uploaded_file($_FILES['image']['tmp_name'], $target_path . $file);
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduLanka</title>

    <!--favicon-->
        <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
        <link rel="manifest" href="./favicon/site.webmanifest">
        <link rel="mask-icon" href="./favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

    <!--styles-->
    <style>

        section {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="Submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 15px;
            cursor: pointer;
        }

        input[type="Submit"]:hover {
            background-color: #0056b3;
        }

        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        .announcements{
            background-color:#fdedff;
        }

        .grid_image{
            width:85%;
            height:auto;
            margin-top:20px;
        }

        .grid_column{
            background-color:#fdedff;
        }

        .text{
            font-family: 'Cormorant Garamond';
        }



    </style>



    <link rel="stylesheet" href=" Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!--Swiper Js-->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

</head>
<body>
    
    <header>
        <a href="#" class="brand">EduLanka</a>
        
        <div class="navigation">
            <div class="navigation-items">
                <a href="#">Home</a>
                <a href="#about-content">About</a>
                <a href="#contact">Contact</a> 
                <a href="login.php">Login</a> 
            </div>
        </div>
    </header>


    
      
    <section class="home">
        <video class="video-slide" src="images\home3.mp4" autoplay muted loop>

        </video>
        <div class="content">
            <h1>Discover  <br><span>Your Learning Path</span></h1>
            <p>Embark on a journey of knowledge and growth as you explore our curated learning paths. Whether you aspire to become an engineer, an artist, a scientist, or a writer, our carefully designed paths will lead you step-by-step towards your desired skills and knowledge. Each learning path is thoughtfully structured, combining essential courses, practical exercises, and real-world applications to provide a comprehensive and engaging learning experience.</p>
            <a href="#about-content">Read More</a>
        </div>
        <div class="slider-navigation">
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  
<!-- cards -->
<div class="features">
    <div class="card">
      <div class="card-inner">
        <div class="card-front">
          <img src="images/interactive_cour-removebg-preview.png" alt="Icon 1">
          <h3>Interactive Courses</h3>
        </div>
        <div class="card-back">
          <p>Engaging and interactive courses with multimedia content to enhance the learning experience.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-inner">
        <div class="card-front">
          <img src="images/progress-removebg-preview.png" alt="Icon 2">
          <h3>Progress Tracking</h3>
        </div>
        <div class="card-back">
          <p>Track your learning progress with detailed insights and performance analytics.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-inner">
        <div class="card-front">
          <img src="images/collaboration-removebg-preview.png" alt="Icon 3">
          <h3>Collaboration Tools</h3>
        </div>
        <div class="card-back">
          <p>Communicate and collaborate with instructors and other learners through discussions and messaging.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-inner">
        <div class="card-front">
          <img src="images/mobile-removebg-preview.png" alt="Icon 4">
          <h3>Mobile Accessibility</h3>
        </div>
        <div class="card-back">
          <p>Access courses and learning materials on the go using mobile devices.</p>
        </div>
      </div>
    </div>
  </div>
  <br>
<br>
<br>
<br>

<section class="about-section" style="background-image: url('images/about.jpg'); background-size: cover; background-position: center;" >
    <div class="about-content" id="about-content">
      <h2>About Us</h2>
      <p>We are a passionate team of educators and developers dedicated to providing the best learning experience for students of all ages. Our mission is to make education accessible and enjoyable, fostering a love for learning in every student.</p>
    </div>
  </section>

  <br>
  

<section class="container testimonials__Container mySwiper">
    <h1><center>Students' Testimonials</h1>
    <div class="swiper-wrapper">
        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="images/s1 (1).jpg">
            </div>
            <div class="testimonial__info">
                <h5>Dilan perera</h5>
                <small>Student</small>
            </div>
            <div class="testimonial__body">
                <p>
                    The courses offered on this LMS have been a game-changer for my learning experience. The interactive lessons, clear instructions, and engaging quizzes helped me grasp complex concepts with ease. Thanks to this platform, I've gained the confidence to excel in my studies and beyond.
                </p>
            </div>
        </article>

        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="images/s1 (2).jpg" alt="Profile Picture">
            </div>
            <div class="testimonial__info">
                <h5>Dasuni Peris</h5>
                <small>Student</small>
            </div>
            <div class="testimonial__body">
                <p>
                    I've tried several online learning platforms, but this LMS stands out from the rest. The user-friendly interface and organized course materials make navigating through lessons a breeze. The discussion forums allowed me to interact with peers and instructors, creating a supportive learning community that kept me motivated.
                </p>
            </div>
        </article>

        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="images/s3.jpg">
            </div>
            <div class="testimonial__info">
                <h5>Anna Silva</h5>
                <small>Student</small>
            </div>
            <div class="testimonial__body">
                <p>
                    As a busy professional, finding time for learning can be challenging. However, this LMS's flexibility has been a lifesaver. With the option to access course materials at my own pace, I can balance work, family, and studies seamlessly. The variety of courses available has also allowed me to explore new interests and enhance my skill set.
                </p>
            </div>
        </article>

        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="images/s1 (3).jpg">
            </div>
            <div class="testimonial__info">
                <h5>Tharindu </h5>
                <small>Student</small>
            </div>
            <div class="testimonial__body">
                <p>
                    I used to feel overwhelmed by traditional classroom settings, but this LMS has transformed my learning journey. The multimedia-rich content and interactive simulations bring subjects to life, making learning enjoyable and effective. I appreciate the instant feedback from quizzes, which helps me identify areas for improvement.
                </p>
            </div>
        </article>

        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="images/s2.jpg">
            </div>
            <div class="testimonial__info">
                <h5>Vinu Dias</h5>
                <small>Student</small>
            </div>
            <div class="testimonial__body">
                <p>
                    I never considered myself a tech-savvy person, but this LMS's user-friendly interface made me feel at ease right from the start. The well-structured courses and comprehensive study materials cater to different learning styles, making it easy to stay engaged. I've achieved academic success and owe much of it to this fantastic platform.
                </p>
            </div>
        </article>

    </div>
    <div class="swiper-pagination"></div>
</section>

<div class="container mt-4">
<section class="announcements">

<center>
    <h2>Announcements</h2>
    <?php
        $sel = "SELECT * FROM announcements";
        $que = mysqli_query($conn, $sel);

        if(mysqli_num_rows($que) < 1){
            echo "<h3 class='text-center'>NO ANNOUNCEMENTS</h3>";
            }

        while($row = mysqli_fetch_array($que)){
               echo "<img src='uploads/".$row['image']."' class='my-3' style='width:50%; height:auto;'>";
        }
    ?>

<center>
</section>

</div>

<br>
<br>

  <div class="row">
    <div class="col-sm">
    <section>
        <h1 id="contact" class="text">
            Contact us
        </h1>
        <h5 class="text">
            Help us to improve
        </h5>
        <br>
        <br>

        <div class="admission">
            <form action="data_check.php" method="POST">
                <div>
                    <label for="name" class="text">Name</label>
                    <input type="text" name="name" id="name">
                </div>

                <div>
                    <label for="school" class="text">School</label>
                    <input type="text" name="school" id="school">
                </div>

                <div>
                    <label for="email" class="text">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>

                <div>
                    <label for="message" class="text">Message</label>
                    <textarea name="message" id="message" rows="5"></textarea>
                </div>

                <div>
                    <input type="Submit" name="apply">
                </div>
            </form>
        </div>
    </section>
    </div>
    <div class="col-sm" class="grid_column">
      <img src="images/some.jpg" alt="Studenet" class="grid_image">
      <center>
      <h2 class="text pt-4">Explore the New World and help us to Expand Ourselves</h2>
      <p class="text pt-4">We value your feedback and are committed to enhancing your learning experience. Please share your suggestions and ideas for improving our LMS dashboard, so we can continue to provide you with the best tools for your educational journey..</p>
      </center>
    </div>
  </div>



<section class="team">
    <h2><center>Meet Our Expert Teachers</h2><br><br>
    <div class="container team__container">
        <article class="team__member">
            <div class="team__member-image">
                <img src="images/t1 (1).jpg">
            </div>
            <div class="team__member-info">
                <h4>Mrs.Tharushi Slina</h4>
                <p>Maths Teacher</p>
            </div>
            <div class="team__member-socials">
                <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
            </div>
        </article>

        <article class="team__member">
            <div class="team__member-image">
                <img src="images/t1 (2).jpg">
            </div>
            <div class="team__member-info">
                <h4>Mr.Nalin Dissanayake</h4>
                <p>Science Teacher</p>
            </div>
            <div class="team__member-socials">
                <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin"></i></a>
            </div>
        </article>

        <article class="team__member">
            <div class="team__member-image">
                <img src="images/t1 (3).jpg">
            </div>
            <div class="team__member-info">
                <h4>Mr.Sahan Perera</h4>
                <p>English Teacher</p>
            </div>
            <div class="team__member-socials">
                <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin"></i></a>
            </div>
        </article>

        <article class="team__member">
            <div class="team__member-image">
                <img src="images/t1 (4).jpg">
            </div>
            <div class="team__member-info">
                <h4>Mrs.Sehani Konara</h4>
                <p>Primary Teacher</p>
            </div>
            <div class="team__member-socials">
                <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin"></i></a>
            </div>
        </article>
    </div>
</section>


<br>

  <footer class="footer">
    <div class="footer-content">
      <div class="contact-info">
        <h3>Contact Us</h3>
        <p>Email: edulanka@gmail.com</p>
        <p>Phone: (+94)77 564 0931</p>
      </div>
      <div class="social-media">
        <h3>Follow Us</h3>
        <div class="social-icons">
          <a href="#" class="icon-link"><i class="fab fa-facebook"></i></a>
          <a href="#" class="icon-link"><i class="fab fa-twitter"></i></a>
          <a href="#" class="icon-link"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
    <p class="footer-text">&copy; 2023 EduLanka. All rights reserved.</p>
  </footer>
  

    <script type="text/javascript">
        const btns = document.querySelectorAll(".nav-btn")
        var sliderNav = function(manual){
            btns.forEach((btn) => {
                btn.classList.remove("active")
            }); 
            btns[manual].classList.add("active");
        }

        btns.forEach((btn, i)=>{
            btn.addEventListener("click", () => {
                sliderNav(i);
            });
        });
    </script>

   
   <script src="index.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

   <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
        },
        //when window width is >=600px
        breakpoints: {
            600:{
                slidesPerView: 2
            }
        }
    });
  </script>

</body>
</html>