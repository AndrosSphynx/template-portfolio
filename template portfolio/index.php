<?php
include 'sendmail.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="main-content">
    <header class="container header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="img/IMG_1066.JPG" alt="">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    Bonjour, je suis <span>Hugo Baudry Lucot.</span>
                    <br />Étudiant au Gaming Campus.
                </h1>
                <p>
                    Elève au Gaming Campus, en 3ème année du Bachelor Management 
                    jeux vidéo et esport. Je me suis orienté vers ce cursus pour pouvoir allier 
                    mes passions à mon domaine professionnel à venir.
                </p>
                <div class="btn-con">
                    <a href="CV Hugo BAUDRY-LUCOT 2022 (2).pdf" class="main-btn">
                        <span class="btn-text">Mon CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="container about" id="about">
            <div class="main-title">
                <h2>À propos <span>de moi</span><span class="bg-text">my stats</span></h2>
            </div>
            <div class="about-container">
                <div class="left-about">
                    <h4>À mon sujet</h4>
                    <p>
                        Je suis curieux, motivé et j’apprécie particulièrement le travail en équipe.
                        J'ai pu explorer la méthode scrum lors d'un stage en tant que Proxy Product Owner chez Suricats Consulting.
                        Cette exprérience m'a permis de me rendre compte que le relationnel est un valeur forte pour moi, puis que je veux faire de cette valeur mon outil de travail.
                         <br /> <br /> Le métier de Scrum Master m'intéresse, de par le fait qu'il est le médiateur entre les équipes d'un projet.
                         Je pourrais utiliser mes compétences apprises lors de certains projets, puis de mon expérience professionnelle acquise durant mon stage.

                    </p>
                    <div class="btn-con">
                        <a href="CV Hugo BAUDRY-LUCOT 2022 (2).pdf" class="main-btn">
                            <span class="btn-text">Download CV</span>
                            <span class="btn-icon"><i class="fas fa-download"></i></span>
                        </a>
                    </div>
                </div>
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">35+</p>
                            <p class="small-text">Projets <br /> Aboutis</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">15</p>
                            <p class="small-text">Personnes <br /> managées</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">8</p>
                            <p class="small-text">Mois d'expérience <br /> en Scrum</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">1</p>
                            <p class="small-text">Formulaire d'inscription<br /> réussi en Php/Sql</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-stats">
                <h4 class="stat-title">Mes compétences</h4>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title">Pack Office</p>
                        <div class="progress-con">
                            <p class="prog-text">90%</p>
                            <div class="progress">
                                <span class="html"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Jira Software</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="css"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Trello</p>
                        <div class="progress-con">
                            <p class="prog-text">75%</p>
                            <div class="progress">
                                <span class="js"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">UX/UI</p>
                        <div class="progress-con">
                            <p class="prog-text">85%</p>
                            <div class="progress">
                                <span class="react"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Notion</p>
                        <div class="progress-con">
                            <p class="prog-text">85%</p>
                            <div class="progress">
                                <span class="node"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Php/Sql</p>
                        <div class="progress-con">
                            <p class="prog-text">60%</p>
                            <div class="progress">
                                <span class="python"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="stat-title">Mes expériences</h4>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Janvier 2018 - Juillet 2018</p>
                    <h5>Employé Polyvalent<span> - BackStreet</span></h5>
                    <p>
                        Mise en place des différents produits / Conseil auprès des clients sur les
                        marques / Vente et encaissement / Suivi du stock et des approvisionnements.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Mai 2021 - Juillet 2021</p>
                    <h5>Proxy Product Owner<span> - Suricats Consulting</span></h5>
                    <p>
                        Gestion des missions journalières de l'équipe / Création de design UX /
                        Rédactions des comptes-rendus de réunions.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Janvier 2022 - Avril 2022</p>
                    <h5>Équipier Polyvalent<span> - MC Donald</span></h5>
                    <p>
                        Préparation des commandes : production des sandwichs, frites, salades,
                        desserts et boissons / Entretien des locaux / Respect des normes d’hygiène,
                        de qualité et de service du Mc Donald.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Avril 2022 - Juin 2022</p>
                    <h5>Gestion de Projet Évènementiel<span> - Horizon Gaming</span></h5>
                    <p>
                        Organisation de l'emploi du temps des activités / Gestion des locaux pour
                        l'événement / Création graphique pour les réseaux sociaux.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Mai 2022 - Août 2022</p>
                    <h5>Préparateur de commande<span> - Metro Cash and Carry</span></h5>
                    <p>
                        Préparation des commandes / Réception de commande / Remise des
                        commandes aux clients.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Octobre 2022 - Mars 2022</p>
                    <h5>Scrum Master<span> - Kekokami</span></h5>
                    <p>
                        Gestion des missions journalières de l'équipe / Organisation des rendez-vous de l'équipe /
                        Rédactions des comptes-rendus de réunions.
                    </p>
                </div>
            </div>
        </section>
        <section class="container" id="portfolio">
            <div class="main-title">
                <h2>My <span>Portfolio</span><span class="bg-text">My Work</span></h2>
            </div>
            <p class="port-text">
                Voici quelques projet que j'ai pu réaliser.
            </p>
            <div class="portfolios">
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port1.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port2.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port3.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port4.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port5.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port2.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port7.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container" id="blogs">
            <div class="blogs-content">
                <div class="main-title">
                    <h2>My <span>Blogs</span><span class="bg-text">My Blogs</span></h2>
                </div>
                <div class="blogs">
                    <div class="blog">
                        <img src="img/port6.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                How to Create Your Own Website
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/blog1.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                How to Become an Expert in Web Design
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/blog2.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Become a Web Designer in 10 Days
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/blog3.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Debbuging made easy with Web Inspector
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/port1.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Get started with Web Design and UI Design
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/port3.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                This is what you need to know about Web Design
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Contact <span>Me</span><span class="bg-text">Contact</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                        <h4>Contact me here</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            In, laborum numquam? Quam excepturi perspiciatis quas quasi.
                        </p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Location</span>
                                </div>
                                <p>
                                    : London, united Kingdom
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                    <span>Email</span>
                                </div>
                                <p>
                                    <span>: maclinzuniversal@gmail.com</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Education</span>
                                </div>
                                <p>
                                    <span>: Sussex University, East Sussex</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Mobile Number</span>
                                </div>
                                <p>
                                    <span>: 07522670617</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-globe-africa"></i>
                                    <span>Languages</span>
                                </div>
                                <p>
                                    <span>: Afrikaans, English, Spanish</span>
                                </p>
                            </div>
                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                                <a href="www.facebook.com" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="right-contact">
                        <form action="" class="contact-form">
                            <div class="input-control i-c-2">
                                <input type="text" required placeholder="YOUR NAME">
                                <input type="email" required placeholder="YOUR EMAIL">
                            </div>
                            <div class="input-control">
                                <input type="text" required placeholder="ENTER SUBJECT">
                            </div>
                            <div class="input-control">
                                <textarea name="" id="" cols="15" rows="8" placeholder="Message Here..."></textarea>
                            </div>
                            <div class="submit-btn">
                                <a href="#" class="main-btn">
                                    <span class="btn-text">Download CV</span>
                                    <span class="btn-icon"><i class="fas fa-download"></i></span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="controls">
        <div class="control active-btn" data-id="home" >
            <i class="fas fa-home"></i>
        </div>
        <div class="control" data-id="about">
            <i class="fas fa-user"></i>
        </div>
        <div class="control" data-id="portfolio">
            <i class="fas fa-briefcase"></i>
        </div>
        <div class="control" data-id="blogs">
            <i class="far fa-newspaper"></i>
        </div>
        <div class="control" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>
    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
    <script src="app.js"></script>
</body>
</html>
