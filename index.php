
<?php
include ("config.php");
$msg='';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];

    // $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO person ( name, email, phone, comment) VALUES ('$name','$email','$phone', '$comment')";

    if ($conn->query($sql) === TRUE) {
        $msg= "details sent successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Website | CodingNepal</title>
    <!-- Linking CSS File -->
    <link rel="stylesheet" href="./first.css" />
    <!-- Fontawesome link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>

<body>
    <!-- Header & Navbar -->
    <header class="bg-dark fixed-top">
        <nav class="container-xxl navbar navbar-expand-lg py-3 bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold fs-3" href="#">Vivek Kumar Tripathi</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#skills">SKILLS</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#portfolio">PORTFOLIO</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#about">ABOUT</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#cv">CURRICULUM VITAE</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#contact">CONTACT</a>
                        </li>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero or Showcase Section -->
    <section class="hero d-flex flex-column align-items-center justify-content-center">
        <div class="text-center">
            <h1 class="h1 text-white fw-medium fst-italic">Vivek Kumar Tripathi</h1>
            <h2 class="display-3 text-white fw-bold">Information & Computer Systems <br /> student</h2>
            <a href="#skills" class="btn btn-lg fs-6 fw-medium mt-5 btn-primary p-3">TELL ME MORE</a>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="container py-5" id="skills">
        <div class="row mt-4 py-3">
            <div class="col-12 d-flex flex-column text-center justify-content-center">
                <h2>SKILLS</h2>
                <h5 class="text-secondary fw-normal py-2 fst-italic">Continuously improving my skills and knowledge in
                    the field.</h5>
            </div>
        </div>
        <div class="row d-flex justify-content-between mx-0">
            <div class="card mt-5 d-flex flex-column align-items-center text-center bg-white p-4" style="width: 25rem">
                <i
                    class="text-white bg-primary d-flex align-items-center justify-content-center fs-2 rounded-circle fa-solid fa-cart-shopping"></i>
                <h3 class="mt-4 h4">Front-end Development</h3>
                <p class="text-center">Proficient in HTML, CSS, and JavaScript. Experienced in responsive web design,
                    building user-friendly interfaces, and using modern frameworks like ReactJS.</p>
            </div>
            <div class="card mt-5 d-flex flex-column align-items-center text-center bg-white p-4" style="width: 25rem">
                <i
                    class="text-white bg-primary d-flex align-items-center justify-content-center fs-2 rounded-circle fa-solid fa-laptop"></i>
                <h3 class="mt-4 h4">Back-end Development</h3>
                <p class="text-center">Skilled in server-side programming using technologies like Node.js and Express.
                    Experience working with databases such as MongoDB and MySQL.</p>
            </div>
            <div class="card mt-5 d-flex flex-column align-items-center text-center bg-white p-4" style="width: 25rem">
                <i
                    class="text-white bg-primary d-flex align-items-center justify-content-center fs-2 rounded-circle fa-solid fa-mobile-screen-button"></i>
                <h3 class="mt-4 h4">Mobile App Development</h3>
                <p class="text-center">Proficient in developing mobile apps for iOS and Android using frameworks like
                    React Native. Experienced in building engaging and intuitive mobile user interfaces.</p>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="container py-5" id="portfolio">
        <div class="row mt-4 py-3">
            <div class="col-12 d-flex flex-column text-center justify-content-center">
                <h2>PORTFOLIO</h2>
                <h5 class="text-secondary fw-normal py-2 fst-italic">A collection of projects I've worked on.</h5>
            </div>
            <div class="row mt-5 mx-0 justify-content-center align-items-center">
                <div class="col-lg-3 px-md-3 px-0 col-md-4 col-12 card-wrapper">
                    <a href="http://127.0.0.1:5500/samsung.html">
                        <div class="card mt-4">
                            <img src="https://cdn.dribbble.com/userupload/3772713/file/still-fc903bb220a0746203642bc9bce89e08.png?resize=400x0"
                                class="img-fluid" alt="portfolio-img">
                            <div class="card-body text-center">
                                <h6 class="card-title">E-commerce Website</h6>
                                <p class="card-text text-secondary">HTML/CSS/JavaScript</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 px-md-3 px-0 col-md-4 card-wrapper">
                    <a href="http://127.0.0.1:5500/landing%20page.html">
                        <div class="card mt-4">
                            <img src="https://cdn4.vectorstock.com/i/1000x1000/64/18/landing-page-template-responsive-design-vector-26606418.jpg"
                                class="img-fluid" alt="portfolio-img">
                            <div class="card-body text-center">
                                <h6 class="card-title">Responsive Landing Page</h6>
                                <p class="card-text text-secondary">HTML/CSS/Javascript</p>
                            </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 px-md-3 px-0 col-md-4 card-wrapper">
                <a href="http://127.0.0.1:5500/Travel/Travel.html">
                    <div class="card mt-4">
                        <img src="https://www.wildstone.in/cdn/shop/articles/Things-You-Should-Keep-In-Mind-While-Traveling.jpg?v=1660050621"
                            class="img-fluid" alt="portfolio-img">
                        <div class="card-body text-center">
                            <h6 class="card-title">Traveling web </h6>
                            <p class="card-text text-secondary">HTML/CSS/JavaScript</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 px-md-3 px-0 col-md-4 card-wrapper">
                <a href="http://127.0.0.1:5500/blogining.html">
                    <div class="card mt-4">
                        <img src="https://images04.nicepage.com/feature/461183/website-blog.jpg" class="img-fluid"
                            alt="portfolio-img">
                        <div class="card-body text-center">
                            <h6 class="card-title">Blog Website</h6>
                            <p class="card-text text-secondary">HTML/CSS/PHP</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 px-md-3 px-0 col-md-4 card-wrapper">
                <a href="http://127.0.0.1:5500/task%20manager.html">
                    <div class="card mt-4">
                        <img src="https://themeforest.img.customer.envatousercontent.com/files/411228393/00_Preview_Image.jpg.jpg?auto=compress%2Cformat&fit=crop&crop=top&w=590&h=300&s=ab5628456fb816f75a868ed8e09da319"
                            class="img-fluid" alt="portfolio-img">
                        <div class="card-body text-center">
                            <h6 class="card-title">Task Management website</h6>
                            <p class="card-text text-secondary">HTML/CSS/Javascript</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 px-md-3 px-0 col-md-4 card-wrapper">
                <a href="http://127.0.0.1:5500/GYM%20web/GYM.html">
                    <div class="card mt-4">
                        <img src="https://www.mindlabpro.com/cdn/shop/articles/Nootropics_for_Bodybuilding_1024x1024.jpg?v=1583863634" class="img-fluid"
                            alt="portfolio-img">
                        <div class="card-body text-center">
                            <h6 class="card-title">GYM website</h6>
                            <p class="card-text text-secondary">HTML/CSS</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="container py-5" id="about">
        <div class="row mt-4 py-3">
            <div class="col-12 d-flex flex-column text-center">
                <h2>ABOUT</h2>
                <h5 class="text-secondary fw-normal py-2 fst-italic">Learn more about me, my background, and what
                    motivates me.</h5>
            </div>
        </div>
        <div class="row flex-row-reverse flex-md-row mt-5 pt-5">
            <div class="col-9 col-md-5 text-md-end">
                <h5>2018-2021</h5>
                <h5>Early Passion for Technology</h5>
                <p>From an early age, I became fascinated with computers and programming. Starting with basic HTML and
                    CSS, I gradually expanded my skills to include JavaScript and various frameworks.</p>
            </div>
            <div class="col-3 col-md-2 img text-center">
                <img class="rounded-circle border border-5 border-dark-subtle img-fluid"
                    src="https://passionfortechnology.buzzsprout.com/rails/active_storage/representations/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBCRGczVFFJPSIsInB1ciI6ImJsb2JfaWQifX0=--941855ec89a2d742b04a64042c9f01351f9d688a/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdDem9MWm05eWJXRjBTU0lJYW5CbkJqb0dSVlE2QzNKbGMybDZaVWtpRHpFME1EQjRNVFF3TUY0R093WlVPZ3huY21GMmFYUjVTU0lMWTJWdWRHVnlCanNHVkRvTFpYaDBaVzUwU1NJT01UUXdNSGd4TkRBd0Jqc0dWRG9NY1hWaGJHbDBlV2xWT2c5amIyeHZjbk53WVdObFNTSUpjMUpIUWdZN0JsUT0iLCJwdXIiOiJ2YXJpYXRpb24ifX0=--2988f93682a0ae3bc1135941ca8def16a6a8d668/Passion_For_Technology.jpg"
                    alt="img">
            </div>
        </div>
        <div class="row justify-content-md-end mt-5 pt-5">
            <div class="col-3 col-md-2 img text-center">
                <img class="rounded-circle border border-5 border-dark-subtle img-fluid"
                    src="https://thumbs.dreamstime.com/b/career-development-concept-photo-business-hands-holding-blackboard-writing-89576490.jpg"
                    alt="img">
            </div>
            <div class="col-9 col-md-5">
                <h5>2020-2024</h5>
                <h5>Higher Education and Career Growth</h5>
                <p>During my university years, I studied computer science and gained hands-on experience through
                    internships and freelance projects. This period fueled my passion for creating innovative solutions
                    and solving complex problems.</p>
            </div>
        </div>
        <div class="row flex-row-reverse flex-md-row mt-5 pt-5">
            <div class="col-9 col-md-5 text-md-end">
                <h5>2019-Present</h5>
                <h5>Professional Excellence and Continuous Learning</h5>
                <p>Throughout my career, I have consistently sought opportunities to refine my skills and stay updated
                    with the latest technologies. I strive for excellence in every project I undertake and aim to
                    deliver valuable and impactful results.</p>
            </div>
            <div class="col-3 col-md-2 img text-center">
                <img class="rounded-circle border border-5 border-dark-subtle img-fluid"
                    src="https://c8.alamy.com/comp/P1DYHY/continuous-learning-word-cloud-concept-on-white-background-P1DYHY.jpg"
                    alt="img">
            </div>
        </div>
        <div class="row justify-content-md-end mt-5 pt-5">
            <div class="col-3 col-md-2 img text-center">
                <img class="rounded-circle border border-5 border-dark-subtle img-fluid"
                    src="https://production.listennotes.com/podcasts/future-tense-world-in-2050-diplomatic-courier-tTvoUwfLiSu-F2vPiM1CEwB.1400x1400.jpg"
                    alt="img">
            </div>
            <div class="col-9 col-md-5">
                <h5>Future</h5>
                <h5>Continuing to Make a Difference</h5>
                <p>I am committed to leveraging my skills and expertise to contribute to meaningful projects that have a
                    positive impact on society. I am eager to take on new challenges and collaborate with talented
                    individuals to create innovative solutions.</p>
            </div>
        </div>
        <div class="row justify-content-md-center mt-5 pt-5">
            <div class="col-3 col-md-2 d-flex justify-content-center hire-text">
                <h2
                    class="h4 d-flex justify-content-center align-items-center bg-primary text-white rounded-circle border border-5 border-dark-subtle">
                    <span class="d-none d-md-block">Your<br>Next<br>Hire</span>
                </h2>
            </div>
        </div>
    </section>

    <!-- Curriculum Vitae Section -->
    <section class="container py-5" id="cv">
        <div class="row mt-4 py-3">
            <div class="col-12 d-flex flex-column text-center">
                <h2>CURRICULUM VITAE</h2>
                <h5 class="text-secondary fw-normal py-2 fst-italic">A small sampling of some of the projects I've
                    worked on as a student of the ICS program.</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mt-5 order-lg-0 order-1 text-center">
                <img class="img-fluid rounded-circle border border-5 border-dark-subtle" src="./vivek_logo_7.png"
                    alt="profile-img">
                <h2 class="mt-3">Vivek Kumar Tripathi</h2>
                <ul class="list-unstyled contact-info">
                    <li><i class="fas fa-envelope me-2"></i> vivekkumartripathiarts@gmail.com</li>
                    <li><i class="fas fa-phone me-2"></i> 91+ 7888944066</li>
                    <li><i class="fas fa-map-marker-alt me-2"></i> Your Address</li>
                </ul>
                <ul class="social-icons my-5 d-flex justify-content-center">
                    <a href="#"
                        class="bg-primary mx-2 text-white d-flex align-items-center justify-content-center text-decoration-none rounded-circle"><i
                            class="fa-brands fa-twitter"></i></a>
                    <a href="#"
                        class="bg-primary mx-2 text-white d-flex align-items-center justify-content-center text-decoration-none rounded-circle"><i
                            class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"
                        class="bg-primary mx-2 text-white d-flex align-items-center justify-content-center text-decoration-none rounded-circle"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                </ul>
                <h5>Technical Skills</h5>
                <ul class="list-unstyled">
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>C</li>
                    <li>C++</li>
                    <li>PHP</li>
                    <li>JAVA</li>
                    <!-- Add or remove skills as needed -->
                </ul>
                <h5>Personal Interests</h5>
                <ul class="list-unstyled">
                    <li>Codeing</li>
                    <li>Learning</li>
                    <li>Sports</li>
                    <li>Music</li>
                    <li>Traveling</li>
                    <li>Make new Friend</li>
                    <!-- Add or remove interests as needed -->
                </ul>
            </div>
            <div class="col-lg-7 order-lg-1 order-0 mt-5 text-start">
                <h3>Profile</h3>
                <hr>
                <p>Write a brief description of yourself, your background, and your goals. Highlight your key strengths
                    and experiences.</p>
                <h3>Highlights of Qualifications</h3>
                <hr>
                <ul>
                    <li>BCA</li>
                    <li>12th</li>
                    <li>10th</li>
                    <!-- Add or remove qualifications as needed -->
                </ul>
                <h3>Education</h3>
                <hr>
                <dl>
                    <dt>2021 - 2024</dt>
                    <dd>SSG PG Pareek College</dd>
                    <dd>BCA(Bachelor of Computer Application)</dd>
                </dl>
                <!-- <h3>Additional Courses & Training</h3> -->
                <hr>
                <dl>
                    <dt>2020 - 2021</dt>
                    <dd>12th</dd>
                    <dd>BSF Senior Secondary School(Jalandhar, Punjab) </dd>
                </dl>
                <!-- <h3>Additional Courses & Training</h3> -->
                <hr>
                <dl>
                    <dt>2018 - 2019</dt>
                    <dd>10th</dd>
                    <dd>BSF Senior Secondary School(Jalandhar, Punjab) </dd>
                </dl>
                <h3>Work Experience</h3>
                <hr>
                <dl>
                    <dt>1 April 2021 to 1 July 2021</dt>
                    <dd>Jr. Web Developer</dd>
                    <dd>Technology Fact</dd>
                    <!-- Add or remove work experience entries as needed -->
                </dl>
                <!-- <h3>Work Experience</h3> -->
                <hr>
                <dl>
                    <dt>12 July 2021 to 07 August 2023</dt>
                    <dd>Sr. Web Developer</dd>
                    <dd>Redient Security</dd>
                    <!-- Add or remove work experience entries as needed -->
                </dl>
                <!-- <h3>Extracurricular Activities</h3>
                <hr>
                <dl>
                    <dt>Organization Name</dt>
                    <dd>Role/Position</dd>
                    <dd>Details of your involvement and contributions</dd>
                </dl> -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5" id="contact">
        <div class="container-xxl py-5">
            <div class="col-12 d-flex flex-column text-center justify-content-center">
                <h2 class="text-white">CONTACT ME</h2>
                <h5 class="text-white fw-normal py-2 fst-italic">Interested if I'd be the right fit for your team? Fill
                    in this form and I will respond within 24-48 hours.</h5>
            </div>
            <div class="row pt-4 mt-5">
                <div class="col-12">
                    <form action="" method="POST">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Enter Name*"
                                        name="name" required>
                                    <label for="floatingInput">Enter Name*</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingEmail"
                                        placeholder="Enter Email*" name="email" required>
                                    <label for="floatingEmail">Enter Email*</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingPassword"
                                        placeholder="Enter Phone*" name="phone" required>
                                    <label for="floatingPassword">Enter Phone*</label>
                                </div>
                            </div>
                            <div class="form-floating col-lg-6">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingMessage"
                                    style="height: 205px" name="comment" required></textarea>
                                <label for="floatingMessage" class="px-4">Enter Message*</label>
                            </div>
                            <div class="col-12 mt-5 d-flex justify-content-center">
                                <button class="btn btn-lg btn-outline-light">SEND MESSAGE</button>
                            </div>
                            <?php echo "<p class='text-center color-red'>$msg</p>" ?>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div
            class="container-xxl flex-wrap pt-3 d-flex align-items-center justify-content-center justify-content-md-between">
            <p>Copyright © 2023 Vivek Kumar Tripathi</p>
            <ul class="social-icons d-flex">
                <a href="#"
                    class="bg-primary mx-2 text-white d-flex align-items-center justify-content-center text-decoration-none rounded-circle"><small><i
                            class="fa-brands fa-twitter"></i></small></a>
                <a href="#"
                    class="bg-primary mx-2 text-white d-flex align-items-center justify-content-center text-decoration-none rounded-circle"><small><i
                            class="fa-brands fa-facebook-f"></i></small></a>
                <a href="https://www.linkedin.com/in/vivek-kumar-tripathi-542839227/"
                    class="bg-primary mx-2 text-white d-flex align-items-center justify-content-center text-decoration-none rounded-circle"><small><i
                            class="fa-brands fa-linkedin-in"></i></small></a>
            </ul>
        </div>
    </footer>

    <!-- Bootstrap script link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>