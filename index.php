
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 

</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">My Portfolio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>

  <!-- Hero section -->
  <header class="jumbotron text-center">
        <h1 class="display-4">Hello, I'm Jean Ayen</h1>
        <p class="lead">A passionate web developer ready to create amazing websites and applications.</p>
        <a class="btn btn-primary btn-lg" href="portfolio.php" role="button">My Project</a>
    </header>

    <!-- Skills section -->
    <section class="container mt-5">
        <h2>Skills</h2>
        <div class="row">
            <div class="col-md-4">
                <h4>Front-end</h4>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>Bootstrap</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Back-end</h4>
                <ul>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>Node.js</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Other</h4>
                <ul>
                    <li>Git</li>
                    <li>Responsive Design</li>
                    <li>Problem Solving</li>
                </ul>
            </div>
        </div>
    </section>


<div class="container mt-5">
    <section id="about">
        <h2>About Me</h2>
        <p>Meet the extraordinary individual who effortlessly blends charisma with kindness, making every interaction a memorable experience. With a heart as vast as their intellect, this beacon of positivity illuminates any room they enter. A connoisseur of laughter, a maestro of empathy, and a virtuoso of understanding, they navigate the intricate symphony of human connections with finesse. An advocate for joy, this bio-engineered ray of sunshine spreads warmth and good vibes wherever they go. Get ready to be inspired, uplifted, and, most importantly, loved by the one and only embodiment of infectious positivity..</p>
    </section>

    <section id="portfolio" class="container mt-5">
        <h2>Portfolio</h2>
        <!-- Add your projects here -->

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <img src="jean.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://twitter.com/JeanAyen194243" target="_blank"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/profile.php?id=100074733617993" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/jeanny122621/" target="_blank"><i class="bi bi-instagram"></i></a>
                </div>
       </div>
       7?
    </section>

         <!-- Contact CTA -->
    <section id="contact" class="jumbotron text-center bg-light mt-5">
        <h2>Contact Me</h2>
        <p>Ready to start your project? Let's get in touch!</p>
        <a class="btn btn-primary btn-lg" href="#contact-form" role="button">Contact Now</a>
    </section>

    <!-- Bootstrap JS and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
