

<?php require_once('includes/header.php'); ?>
<body>

  <div class="everything">
    <section id="navbar">
      <!-- navbar -->
      <?php require_once('includes/nav.php'); ?>
    </section>
  <!-- logo section -->

  <!-- blog section -->

    <div class=" py-5">
    <?php
    if(!isset($_GET['blog'])) header('location: blog.php') ;
    $_id = $_GET['blog'];
    
        require_once('includes/connection.php');
        $query = mysqli_query($connect, "SELECT * FROM blog WHERE id = '$_id'");
        while ($row = mysqli_fetch_assoc($query)) {
          $title = $row["title"];
          $content = $row["content"];
          $img = $row["img"];
          $createddate = $row["createddate"];
          $date = new DateTime($createddate);
          $formattedDate = $date->format('D, d M, Y');
          $pattern = '/\[\[(.*?)\]\]/'; // Regular expression to match [[whatever]]
          $replacement = '<a href="$1">$1</a>'; // HTML anchor tag with href and content as 'whatever'
          
          $html_text = preg_replace($pattern, $replacement, $content);

          ?>
        
      <div class="col-md-12 text-center py-5  d-flex flex-column align-items-center gap-3">
      <h5 class=""><a href="" class="text-dark text-decoration-none fw-bold"><?= $title ?></a></h5>
        <img class="img-fluid" src=" includes/<?= $img ?> "  alt=""
          height="10px" width="400px">
      </div>

        <div class=" container text-center ">
      <span><?= $formattedDate ?></span>
      <div class="fs-5"><?= $html_text ?> </div>
    </div>
    <?php } ?>
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