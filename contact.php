<?php require_once('includes/header.php'); ?>

  <body>
    <div class="everything">
      <section id="navbar">
        <!-- navbar -->
        <?php require_once('includes/nav.php'); ?>
      </section>

      <section id="contact-section">
        <div class="container">
          <div class="mx-auto col col-md-10 col-lg-8">
            <h1 class="text-center">Contact Elna</h1>

            <div class="row contact">
              <div class="d-flex justify-content-between">
                <div class="col-md-8 fs-5 contact-info">
                  <div class="d-flex gap-3">
                    <p>Find me on social:</p>
                    <p class="d-flex gap-3">
                      <a
                        href="https://www.linkedin.com/in/chinenye-chukwu-351848296?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                        class="text-decoration-none text-dark"
                        target="_blank"
                      >
                        <i class="fab fa-linkedin"></i>
                      </a>
                      <a
                        href="https://www.facebook.com/glorychinenye.chukwu?mibextid=ZbWKwL"
                        class="text-decoration-none text-dark"
                        target="_blank"
                      >
                        <i class="bi bi-facebook"></i>
                      </a>
                      <a
                        href="https://x.com/GGlowrei?t=Dd5ijB1YXjd1jyn3XsUylw&s=09"
                        class="text-decoration-none text-dark"
                        target="_blank"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="16"
                          height="16"
                          fill="currentColor"
                          class="bi bi-twitter-x"
                          viewBox="0 0 16 16"
                        >
                          <path
                            d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"
                          />
                        </svg>
                      </a>
                    </p>
                  </div>

                  <p>
                    Visit my portfolio/site:
                    <a
                      href="./portfolio/home.php"
                      target="_blank"
                      class="text-danger"
                      >Innovative Ink</a
                    >
                  </p>

                  <p>
                    Feel free to send me your questions or comments below, and
                    I'll get back to you as soon as I can!
                  </p>
                </div>

                <div class="col-md-4 contact-info d-flex justify-content-end">
                  <div class="round-image">
                    <a href="link-to-profile" target="_blank">
                      <img
                        src="./img/IMG_20230405_171221.jpg"
                        class="mt-5"
                        alt=""
                        width="110px"
                        height="110px"
                        style="object-fit: cover; border-radius: 50%"
                      />
                    </a>
                  </div>
                </div>
              </div>

              <form action="includes/contactsub.php" method="post">
                <?php require_once('includes/message.php');?>
                <input type="hidden" name="next" value="contact.php">
                <div class="form-group mb-3">
                  <label for="name">Name:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    required
                  />
                </div>

                <div class="form-group mb-3">
                  <label for="email">Email:</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    required
                  />
                </div>

                <div class="form-group mb-3">
                  <label for="subject">Subject:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="subject"
                    name="subject"
                    required
                  />
                </div>

                <div class="form-group mb-3">
                  <label for="message">Message:</label>
                  <textarea
                    class="form-control"
                    id="message"
                    name="message"
                    rows="10"
                    required
                  ></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-danger">Send</button>
              </form>
            </div>
          </div>
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
                    <p>&copy; All rights reserved.</p>
                    <p><a href="#" class="text-decoration-none text-danger">Terms of Service</a> | <a href="#" class="text-decoration-none text-danger">Privacy Policy</a> | <a href="#" class="text-decoration-none text-danger">Legal Disclaimer</a></p>
                </div>
            </div>
        </div>
      </footer>
    </div>
  </body>
  <script src="./bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</html>
