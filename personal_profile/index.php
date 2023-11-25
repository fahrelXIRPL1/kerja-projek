<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Personal<span>Profile</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Portofolio</a></li>
                <li><a href="#teams" class="menu-btn">Project</a></li>
                <li><a href="#contact"class="menu-btn">Contact</a></li>
                <li><a href="admin1/login.php" class="contak">Admin</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <h1 class="welcome">WELCOME TO MY PERSONAL PROFILE</h1>
            </div>
            <img class="gambar" src="foto.png" height="600px">
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="me.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">Fahrel<span class="typing-2"></span></div>
                    <p>Hallo semua nama sya fahrel dan saya disini akan menampilkan personal profile saya. klick "Doanload CV" dibawah ini jika ingin mendonload CV saya.</p>
                    <a href="cv/CV Pertama.pdf" download="CV">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                       
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Web Developer</div>
                        
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">UI/UX Designer</div>
                        
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>60%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>40%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>20%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>10%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>30%</span>
                        </div>
                        <div class="line mysql"></div>
                        <br>
                        <br>
                        <h2 class="title">Education </h2>
                        <div class="sekolah">
                            <a href="https://data.sekolah-kita.net/sekolah/SD%20NEGERI%20MEKARSARI%2001_34980">
                                <img src="sd.jpg" height="300px" title="SDN Mekarsari 01 ">
                            </a>
                                <a href="https://sekolah.data.kemdikbud.go.id/index.php/chome/profil/C0ED6A14-2CF5-E011-AC38-6B9E4DD954DA">
                                    <img src="smp 3.jpg" height="268px" width="350px"title="SMPN 03 Tamsel">
                                </a>
                                <a href="https://www.smktelekomunikasitelesandi.sch.id/">
                                    <img class="smk" src="telkom.jpg" height="270px" title="SMK Telkom">                    
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My Project</h2>
            <div class="portofolio-container">
                <div class="portofolio-box">
                    <div class="float">
                        <a href="kp kedua/USER/isi.php">
                            <img src="Screenshot 2023-11-14 075007.png" height="200px">
                        </a>
                        <div class="portofolio-layer">
                            <h4>kp 1.Toko baju online</h4>
                        </div>
                    </div>
                </div>
                <div class="portofolio-container">
                    <div class="portofolio-box">
                        <a href="index.php">
                            <img src="Screenshot 2023-11-22 204426.png" height="200px">
                        </a>
                        <div class="portofolio-layer">
                            <h4>kp 2.Personal profile</h4>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Contact</div>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Fahrel ibnu.s</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Jawa barat, bekasi</div>
                            </div>
                        </div>
                        <div class="row">
                            <i <a href="https://www.instagram.com/?hl=en"class='bx bxl-instagram-alt'></a></i>
                            <div class="info">
                                <div class="head"><a href="https://www.instagram.com/?hl=en">Instagram</a></div>
                                <div class="sub-title"><a href="https://www.instagram.com/?hl=en">Relz.ajaa</a></div>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="proses-feedback.php" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" id="name" name="name"required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Email" id="email" name="email" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." id="message" name="message" required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit" name="daftar">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>THANK YOU FOR VIEWING MY PERSONAL PROFILE<span>
    </footer>

    <script src="script.js"></script>
</body>
</html>