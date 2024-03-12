<?php require_once('includes/header.php'); ?>
<body>

  <div class="everything">
    <section id="navbar">
      <!-- navbar -->
      <?php require_once('includes/nav.php'); ?>
    </section>
  <!-- logo section -->

  <!-- blog section -->

  <section id="blog-section">
    <div class="container py-5">
      <div class="col-md-12 ">
        <h1 class="text-center mt-5">Latest Blog Posts</h1>
        <img class="img-fluid" src="./img/Beige Modern Application Letter Guide Blog Banner (1).png" alt=""
          height="10px" width="800px">
      </div>
    </div>

    <div class=" text-center mt-5 hw">
      <span>Dec 27, 2022 </span>
      <h5 class=""><a href="" class="text-dark text-decoration-none fw-bold">How to Start a Blog for Your Business in 3
          Easy Steps</a></h5>
      <p class="fs-5">Interested in learning how to start a business? Did you know you can start a blog and <br> turn
        that into a business? I’ve been blogging… </p>
    </div>


    
  </section>
  <footer class="footer p-5 mt-5">
    <div class="container text-light">
        <div class="row">
            <div class="col-md-4">
                <h5>About Us</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="social-icons t">
                    <a href="https://www.facebook.com/glorychinenye.chukwu?mibextid=ZbWKwL"><i class="fab fa-facebook text-danger"></i></a>
                    <a href="https://x.com/GGlowrei?t=Dd5ijB1YXjd1jyn3XsUylw&s=09"><i class="fab fa-twitter text-danger"></i></a>
                    <a href="https://www.linkedin.com/in/chinenye-chukwu-351848296?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin text-danger"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <p>Email: <a class="text-danger text-danger text-decoration-none" href="glorychinenyechukwu@gmail.com">glorychinenyechukwu@gmail.com</a></p>
                <p>Phone: <a href="" class="text-danger text-decoration-none">+234 816 738 0336</a></p>
                <p>Address: 123 Main Street, City, Country</p>
            </div>
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php" class="text-decoration-none text-danger">Home</a></li>
                    <li><a href="about.php" class="text-decoration-none text-danger">About</a></li>
                    <li><a href="blog.php" class="text-decoration-none text-danger">blog</a></li>
                    <li><a href="contact.php" class="text-decoration-none text-danger">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ">
                <div class="newsletter-form">
                    <h5>Subscribe to our Newsletter</h5>
                    <form action="#" method="post">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Your Email Address" aria-label="Your Email Address" aria-describedby="button-addon2">
                            <button class="btn btn-danger" type="button" id="button-addon2">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <p>&copy; 2024 Your Investment Company. All rights reserved.</p>
                <p><a href="#" class="text-decoration-none text-danger">Terms of Service</a> | <a href="#" class="text-decoration-none text-danger">Privacy Policy</a> | <a href="#" class="text-decoration-none text-danger">Legal Disclaimer</a></p>
            </div>
        </div>
    </div>
  </footer>
  </div>

</body>
<script src="./bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
<script src="./js/script.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    once: true,
    duration: 2000,
  }
  );
</script>

</html>