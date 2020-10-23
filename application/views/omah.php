<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page header -->
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <!-- Page title -->
    <title><?= $site_title; ?></title>
    <link rel="shortcut icon" href="<?= base_url('theme/images/' . $icon); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('omah/css/style.css'); ?>">

    <!-- SEO Tag -->
    <meta name="description" content="<?php echo $site_desc; ?>" />
    <link rel="canonical" href="<?php echo site_url(); ?>" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $site_title; ?>" />
    <meta property="og:description" content="<?php echo $site_desc; ?>" />
    <meta property="og:url" content="<?php echo site_url(); ?>" />
    <meta property="og:site_name" content="<?php echo $site_name; ?>" />
    <meta property="og:image" content="<?php echo base_url() . 'theme/images/' . $site_image ?>" />
    <meta property="og:image:secure_url" content="<?php echo base_url() . 'theme/images/' . $site_image ?>" />
    <meta property="og:image:width" content="560" />
    <meta property="og:image:height" content="315" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo $site_desc; ?>" />
    <meta name="twitter:title" content="<?php echo $site_title; ?>" />
    <meta name="twitter:site" content="<?php echo $site_twitter; ?>" />
    <meta name="twitter:image" content="<?php echo base_url() . 'theme/images/' . $site_image ?>" />

    <script src="<?= base_url('omah/js/a076d05399.js'); ?>"></script>
    <script src="<?= base_url('omah/js/jquery-3.5.1.min.js'); ?>"></script>
    <script src="<?= base_url('omah/js/typed.min.js'); ?>"></script>
    <script src="<?= base_url('omah/js/jquery.waypoints.min.js'); ?>"></script>
    <script src="<?= base_url('omah/js/owl.carousel.min.js'); ?>"></script>
    <link rel="stylesheet" href="<?= base_url('omah/css/owl.carousel.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('theme/css/font-awesome.min.css'); ?>" />
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" /> -->

</head>

<body>
    <div class="scroll-up-btn">
        <i class="fa fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#"><img src="<?= base_url('theme/images/logoPutih1.png'); ?>" width="145" height="40" alt=""></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Project</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
                <li><a href="javascript:void(0)" class="btn-search"><span class="fa fa-search"></span></a></li>
            </ul>
            <div class="menu-btn">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Assalamualaikum</div>
                <div class="text-2"><span class="typing"></span></div>
                <div class="text-3">Darul<span>Abror</span> Media</div>
                <!-- <div class="text-1">Irham | Founder</div> -->
                <a href="https://api.whatsapp.com/send?phone=6285708497317">JOIN US</a>
            </div>
        </div>
    </section>


    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="<?= base_url() . 'theme/images/' . $about_img; ?>">
                </div>
                <div class="column right">
                    <div class="text">Mau dibuatkan <span class="typing-2"></span>?</div>
                    <p><?php echo $about_desc; ?></p>
                    <a href="<?= base_url('omah/CV_IrchamAli.pdf'); ?>">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Our services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fa fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                        <!-- <p>Web Desain adalah istilah yang sering digunakan untuk menggambarkan bagaimana tampilan isi suatu website atau situs. Web yang kami bangun kami sesuaikan dengan kaidah dan kebutuhan customer secara personal maupun instansi.</p> -->
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa fa-chart-line"></i>
                        <!-- <i class="fa fa-code"></i> -->
                        <div class="text">Advertising</div>
                        <!-- <p>Advertising adalah salah satu bentuk komunikasi komersil maupun non komersil dengan tujuan agar khalayak memahami, mengikuti, atau mengambil tindakan tertentu. Web dikembangkan atas dasar interaksi sosial melalui sarana media website.</p> -->
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa fa-code"></i>
                        <div class="text">Graphical Design</div>
                        <!-- <p>Desain Grafis adalah proses komunikasi menggunakan elemen visual yang dimaksudkan untuk menciptakan persepsi akan suatu pesan yang disampaikan. Web yang dibuat tentu akan memperhatikan kesesuaian dan estetika yg disuguhkan.</p> -->
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">Skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Our creative skills & experiences.</div>
                    <p>JowoKode memfasilitasi para dulur-dulur customer berdasarkan pada keahlian dan pengalaman pembuatan web secara kreatif. Teknologi yang digunakan dalam pengembangan sistem informasi berbentuk website seperti HTML, CSS, Javascript, PHP, dan MySQL. Pembuatan Web juga menawarkan kemudahan dengan CMS (Content management system) bagi yang berminat. JowoKode berkomitmen untuk melayani dengan sentuhan keramahan jawa.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Project</h2>
            <div class="carousel owl-carousel">
                <?php foreach ($testimonial->result() as $test) : ?>
                    <div class="card">
                        <div class="box">
                            <a href="javascript:void(0)">
                                <img src="<?php echo base_url() . 'assets/images/' . $test->testimonial_image; ?>" class="img" alt="" />
                            </a>
                            <div class="text"><?php echo $test->testimonial_name; ?></div>
                            <div class="testimonial-rating mt-10 mb-10">&starf; &starf; &starf; &starf; &starf;</div>
                            <p><?php echo $test->testimonial_content; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Ayo dulur, kalo kalian tertarik untuk mengembangkan web atau mau tanya-tanya dulu. Langsung wae hubungi lewat medsos iki utawa form message!</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fa fa-instagram"></i>
                            <div class="info">
                                <div class="head">Instagram</div>
                                <div class="sub-title">instagram.com/bro_irham</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fa fa-twitter"></i>
                            <div class="info">
                                <div class="head">Twitter</div>
                                <div class="sub-title">twitter.com/bro_irham</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fa fa-youtube"></i>
                            <div class="info">
                                <div class="head">Youtube</div>
                                <div class="sub-title">Ircham Ali</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fa fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email ku</div>
                                <div class="sub-title">id.irchamali@gmail.com</div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <i class="fa fa-map-marker"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Jombang, East Java, Indonesia</div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <?php echo $this->session->flashdata('msg'); ?>
                    <form method="post" action="<?php echo site_url('contact/send'); ?>" role="form" class="form">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name" class="full_width" placeholder="Name *" maxlength="100" required="">
                            </div>
                            <div class="field email">
                                <input type="email" name="email" class="full_width" placeholder="Email kamu*" maxlength="100" required="">
                            </div>
                        </div>
                        <div class="field">
                            <!-- <input type="text" placeholder="Subject" required> -->
                            <input type="text" name="subject" class="full_width" placeholder="Subject *" maxlength="100" required="">
                        </div>
                        <div class="field textarea">
                            <textarea name="message" class="full_width" rows="6" placeholder="Tulis pesan.. *" maxlength="400" required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Search-->
    <div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index: 10000;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="<?php echo site_url('search'); ?>" method="GET">
                        <div class="input-group">
                            <input type="text" name="search_query" class="form-control input-search" style="height: 40px;" placeholder="Search..." required>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit" style="height: 40px;background-color: #ccc;"><span class="fa fa-search"></span></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- footer section start -->
    <footer>
        <span>Darul Abror Cyber | <span class="fa fa-copyright"></span> <a href="https://www.jowokode.com">JowoKode</a> 2020</span>
    </footer>

    <script src="<?= base_url('theme/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('theme/js/script.js') ?>"></script>
    <script src="<?= base_url('omah/js/script.js'); ?>"></script>
</body>

</html>