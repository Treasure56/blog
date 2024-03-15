<?php require_once("../includes/headertwo.php"); ?>

<body>
    <div>
        <?php require_once('../includes/nav2.php'); ?>

        <section>
            <div class=" container about-container pt-5 ">
                <div class="pt-5">
                    <p class="fs-5">Below are published B2B content articles and blog posts that I have written for SaaS
                        companies . Many of my happy clients are repeat clients including Optinmonster, Walmart,
                        GoDaddy, Wordtune, Blogging Wizard, Whop,Emily Journey & Associates, Pagewiz and more. I enjoy
                        writing on a variety of topics within the B2B product and digital marketing industry. Click on
                        any one of the links to get the entire post.

                    </p>

                    <?php
                    require_once('../includes/connection.php');
                    $query = mysqli_query($connect, "SELECT * FROM portfolio");
                    while ($row = mysqli_fetch_assoc($query)) {
                        $id = $row["id"];
                        $img = $row["img"];
                        $subtitle = $row["subtitle"];
                        $title = $row["title"];
                        $link = $row["link"];
                        $content = $title;
                        $content = substr($content, 0, 50) . '...';

                        ?>

                        <div class="d-flex gap-5 pt-5">
                            <img class="border" src=" includes/<?= $img ?> " alt="" width="200px" height="150px">

                            <div class="d-flex flex-column">
                                <p class="text-uppercase fs-6">
                                    <?= $subtitle ?>
                                </p>
                                <p class="fw-bold fs-4">
                                    <?= $img ?>
                                </p>
                                <a href="https://smartblogger.com/email-marketing/" class="text-decoration-none">
                                    <?= $link ?>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </section>
    </div>

</body>
<script src="../bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>

</html>