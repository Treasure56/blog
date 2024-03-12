<?php require_once('includes/headertwo.php'); ?>

    <div>
    <?php require_once('includes/nav2.php'); ?>

        <section id="contact-section ">
            <div class="container contact-section">
                <div class="mx-auto col col-md-10 col-lg-8">
                    <h3 class="text-start">Ready to collaborate? <br>
                        Have a question?</h3> <br>
                    <h4 class="text-start">I can't wait to hear from you</h4>

                    <div class=" contact">
                        <div class="d-flex justify-content-between">
                            <div class="col-md-8 fs-5 contact-info">

                                <p>Email me: <a href="https://www.yourportfolio.com" target="_blank"
                                        class="text-primary text-decoration-none">Example@gmail.com</a></p>

                                <p class="gap-3">Find me on social media <a href="twitter.com" target="_blank"
                                        class="text-primary text-decoration-none"><svg class="text-primary"
                                            xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                                        </svg></a>

                                    <a href="facebook.com"><i class="bi bi-facebook "></i></a>
                                    <a href="linkedin.com"><i class="bi bi-linkedin"></i></a>

                                </p>

                                <p>I'm based in: <a href="/" target="_blank"
                                    class="text-primary text-decoration-none">Nigeria</a></p>


                                <h3 class="fw-bold">Or, reach me through the contact form below</h3>
                            </div>
                        </div>

                        <form action="process-form.php" method="post">

                            <div class="mb-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
    
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
    
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject:</label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                            </div>
    
                            <div class="mb-3">
                                <label for="message" class="form-label">Message:</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
    
                            <div class="mb-3">
                                <label for="option" class="form-label">Where did you hear about me:</label>
                                <select class="form-select" id="option" name="option" required>
                                    <option value="">Please Choose an option</option>
                                    <option value="Friend">Friend</option>
                                    <option value="Social Media">Social Media</option>
                                    <option value="Advertisement">Advertisement</option>
                                    <option value="Search Engine">Google</option>
                                    <option value="Event">Event</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
    
                            <button type="submit" class="btn btn-primary">Send Messages</button>
    
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>
<script src="../bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>

</html>