<main class="">
    <style>
        .hero-section {
            background-color: #00BCD5;
            /* padding: 5rem; */
            display: flex;
            justify-content: center;
        }

        .container {
            display: flex;
            justify-content: center;
            width: 100%;
            align-items: center;
        }

        .column-left {
            width: 100%;
            background-color: #f2f2f2;
            /* padding: 1.5rem; */
            height: 200px;
        }


        .column-right img {
            /* width: 50%; */
            height: auto;
        }

        @media (max-width:768px) {
            .container {
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

        }
    </style>

    <?php require_once('../includes/headertwo.php'); ?>

    <?php require_once('../includes/nav2.php'); ?>
    <main class="">
        <div class="hero-section p-5 py-5">
            <div class="container d-flex justify-content-center">
                <div class="column-right">
                    <img src="../img/_MG_0200-removebg-preview.png" alt="">
                </div>
                <div class="column-left1 d-flex flex-column p-5 gap-5 ">
                    <div class="column-left p-5">
                        <p id="typewriter-text" class="fs-3 fw-bold"></p>
                    </div>
                    <a href="contact.php" class="btn  border-bottom shadow-lg text-light"
                        style="width: 100px; background-color:#00BCD5555;">let's talk</a>
                </div>

            </div>
        </div>

        <div class=" container about-container pt-5 ">
            <div class="pt-5">
                <h3 class="fw-bold">Need a Freelance SaaS Writer for Marketing to Help Bring in New Users to Your
                    Product?
                </h3>

                <p class="fs-3">I’m your gal!</p>
                <p class="fs-5">As a B2B SaaS writer, I get excited when I hear conversion optimization, content
                    marketing, content creation, funnels or lead gen.</p>


                <p class="fs-4">My writing attracts, engages and converts the right people to your service, tool or
                    product.</p>
                <p class="fs-4">This means your audience will gladly throw cash at you to get your product or service.
                </p>
                <p class="fs-4">Whether you’re a SaaS company with a service or product, my custom SaaS writing content
                    can catapult
                    your online visibility and give you that boost to attract new customers or leads.
                    <>Whether you’re a SaaS company with a service or product, my custom SaaS writing content can
                        catapult
                        your online visibility and give you that boost to attract new customers or leads.
                </p>
                <p class="fs-4">I help digital marketing companies in social media management, analytics/SEO, email
                    management and content writing companies that take their content marketing seriously and wants a
                    writer that will do the same for their content.</p>
                <p class="fs-4">I’m Elna, a coffee-loving mom to twins and a professional B2B SaaS writer for digitally
                    native SaaS brands.</p>
                <p class="fs-4"><a href="contact.php">Hire me</a> for your digital marketing writing, thought
                    leadership, SEO content or copywriting needs. As a content writer for SaaS, I use Ahrefs (daily) to
                    produce ToFu and BoFu content.

                </p>

                <p class="fs-1 fw-bold">how can i help you</p>
                <p class="fs-3 fw-bold">Who am i ?</p>

                <p class="fs-4">I've been <a href=""> freelance writing</a> for SaaS companies for ten years and have
                    written for amazing clients like Walmart, GoDaddy, Blogging Wizard, OptinMonster, Zapier, Wordtune
                    and dozens of others. I add color to your content making it easy to read, enjoy and share.</p>
                <p class="fs-4">Interested? Visit my <a href="" class="text-decoration-none text-primary">Hire Me
                        page</a> for
                    more info.

                </p>

                <div class="">
                    <p class="fs-2 fw-bold"> 2. What I do</p>
                    <p class="fs-4"><a href="">Copywriting</a> - I use my copywriting formats for blog and SEO writing.
                        This means
                        infusing storytelling, using the right hooks for higher retention and effective CTAs for better
                        conversions.</p>

                    <p class="fs-3"><a href="">Email welcome series</a> – From landing pages to welcome series to
                        targeted funnels, I
                        can help you gain more conversions for email marketing.</p>

                    <p class="fs-3"><a href="">Blog SEO writing</a> – blog posts speak to your target audience and
                        connect them to your
                        brand and message. I can use AI writing tools to help brands rank in Google on page one, spot
                        one by writing consistent content thats engaging and high quality.</p>
                </div>
                <div class="">
                    <p class="fs-2 fw-bold"> 3. How I do it</p>
                    <p class="fs-3">I use my expert hands-on knowledge, skills and personal experience in digital
                        marketing and SEO to craft content that makes people take action. This also helps me create
                        product-led content that sells itself.</p>
                        <p class="fs-3">Because of my experience, I can write thought leadership content to elevate your
                        brand and message and use subject matter experts to expand my ideas.</p>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer mt-auto py-3 text-white" style="background-color:#00BCD5;">
        <div class="container text-center">
            <span class=" text-white">© 2024 Your Website</span>
        </div>
    </footer>
 </body>
    <script src="../bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const text = "Hi, I'm Glory, freelance writer. Do you live & breathe digital marketing? I'm your writer! |";
        const speed = 50; // Adjust typing speed here
        let i = 0;

        function typeWriter() {
            if (i < text.length) {
                document.getElementById("typewriter-text").innerHTML += text.charAt(i);
                i++;
                setTimeout(typeWriter, speed);
            }
        }

        typeWriter();

    </script>

    </html>