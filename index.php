<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="assets/style.css" />
  <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Abel&family=Oswald:wght@200..700&display=swap"
    rel="stylesheet" />
  <title>Elodie François - Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
  <?php
  if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
  }
  $token = $_SESSION['token'];
  ?>
  <!-- HEADER -->
  <header>
    <nav>
      <div class="nav-but"><i class="fas fa-bars fa-2x"></i></div>
      <ul class="nav-list">
        <li>
          <a href="#about">Parcours</a>
        </li>
        <li>
          <a href="#projects">Mes Projets</a>
        </li>

        <li>
          <a href="#design">Mes Designs</a>
        </li>
        <li>
          <a href="#contact">Contact</a>
        </li>
      </ul>
    </nav>
    <div class="title">
      <h1>Elodie François,</h1>
      <h2>Développeuse Web, Community Manager & Web Designer</h2>
    </div>
    <a href="#contact" class="contact-but">Collaborons ensemble <i class="fas fa-angle-double-right"></i>
    </a>
    <div class="contact-links">
      <div class="left-sec">
        <a
          href="https://www.linkedin.com/in/elodie-francois-75a144126/"
          target="_blank"
          rel="noopener noreferrer nofollow">
          <i class="fab fa-linkedin"></i>
        </a>
        <a
          href="https://github.com/framelelo"
          target="_blank"
          rel="noopener noreferrer nofollow">
          <i class="fab fa-git-square"></i>
        </a>
        <a
          href="assets/images/cv.pdf"
          download="cv.pdf"
          role="button"
          target="_blank">
          <i class="fas fa-file-pdf"></i>
        </a>
      </div>
      <div class="right-sec">
        <a href="mailto:framelelo89@gmail">framelelo89@gmail.com</a>
        <a href="tel:0693497217">0693 49 72 17</a>
      </div>
    </div>
  </header>
  <main>
    <!-- INTRODUCTION -->
    <section id="intro">
      <img src="assets/images/profile.jpg" alt="Portrait"  class="parallax-img"/>
    </section>

    <!--  ABOUT -->
    <section id="about">
      <div class="container hidden">
        <h2>Mon Parcours</h2>
        <p>
          Avec 5 ans d'expérience dans la création de sites web et
          d'applications adaptatifs, je maîtrise l'HTML, le CSS, le JavaScript
          ainsi que plusieurs frameworks, avec de bonnes connaissances en
          développement back-end tels que PHP et SQL pour offrir une
          expérience utilisateur optimale. Ma spécialité est d'écrire un code
          bien documenté, optimiser les performances avec des tests
          pertinants.
        </p>
        <p>
          Mes projets respectent les pratiques et principes des méthides
          Agiles pour garantir la satisfaction clientèle qui reste mon
          objectif principal.
        </p>
        <p>
          Je propose des créations du maquettage au développement à la mise en
          ligne ainsi que mettre en place des stratégies marketing via les
          réseaux sociaux pour promouvoir les activités de mes clients.
        </p>
      </div>
    </section>

    <!-- PROJECTS - WEBSITES -->
    <section id="projects">
      <div class="container">
        <div class="project hidden slide-left">
          <a href="https://wellbeingofstrays.com/" target="_blank">
            <img
              src="assets/images/wos.png"
              alt="Création site web de Well-Being of Strays"
              loading="eager" />
            <div class="details">
              <p>
                Site vitrine réalisé from scratch en utilisant les langages
                natifs - HTML, CSS, JS, PHP et SQL... Maquette conçue avec
                figma
              </p>
            </div>
          </a>
          <div class="git-link">
            <a href="https://github.com/framelelo/wellbeingofstrays" target="_blank">
              <i class="fab fa-git-square"></i>
            </a>
          </div>
        </div>
        <div class="project hidden span-2 slide-right">
          <a href="https://framelelo.github.io/Portfolio/" target="_blank">
            <img src="assets/images/cercle_30.png" alt="Question Permis" />
            <div class="details">
              <p>
                Site vitrine réalisé from scratch en utilisant les langages
                natifs - HTML, CSS, JS, PHP et SQL... Maquette conçue avec
                figma
              </p>
            </div>
          </a>
        </div>
        <div class="project hidden span-2 slide-left">
          <a href="https://framelelo.github.io/Portfolios/" target="_blank">
            <img
              src="assets/images/project-3.jpeg"
              alt="Well-Being for Strays" />
            <div class="details">
              <p>
                Site vitrine réalisé from scratch en utilisant les langages
                natifs - HTML, CSS, JS, PHP et SQL... Maquette conçue avec
                figma
              </p>
            </div>
          </a>
          <div class="git-link">
            <a href="https://framelelo.github.io/Portfolio/" target="_blank">
              <i class="fab fa-git-square"></i>
            </a>
          </div>
        </div>
        <div class="project hidden slide-right">
          <a href="https://framelelo.github.io/Portfolio/" target="_blank">
            <img src="assets/images/project-4.jpg" alt="Le Restau" />
            <div class="details">
              <p>
                Site vitrine réalisé from scratch en utilisant les langages
                natifs - HTML, CSS, JS, PHP et SQL... Maquette conçue avec
                figma
              </p>
            </div>
          </a>
          <div class="git-link">
            <a href="https://framelelo.github.io/Portfolio/" target="_blank">
              <i class="fab fa-git-square"></i>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- PROJECTS - DESIGN -->
    <section id="design">
      <div class="container">
        <h2>Conceptions graphiques</h2>
        <div class="designs">
          <div class="design hidden span-2">
            <a href="https://framelelo.github.io/Portfolio/" target="_blank">
              <div class="image">
                <img src="assets/images/project-3.jpeg" alt="" />
              </div>
              <div class="title">
                <h3>Well-Being for Strays</h3>
              </div>
            </a>
          </div>
          <div class="design hidden">
            <a href="https://framelelo.github.io/Portfolio/" target="_blank">
              <div class="image">
                <img src="assets/images/project-3.jpeg" alt="" />
              </div>
              <div class="title">
                <h3>
                  Well-Being for Strays Well-Being for Strays Well-Being for
                  Strays Well-Being for Straysell-Being for Strays Well-Being
                  for Strays Well-Being for Strays Well-Being for
                  Straysell-Being for Strays Well-Being for Strays Well-Being
                  for Strays Well-Being for Strays
                </h3>
              </div>
            </a>
          </div>
          <div class="design hidden">
            <a href="https://framelelo.github.io/Portfolio/" target="_blank">
              <div class="image">
                <img src="assets/images/project-3.jpeg" alt="" />
              </div>
              <div class="title">
                <h3>Well-Being for Strays</h3>
              </div>
            </a>
          </div>
          <div class="design hidden">
            <a href="https://framelelo.github.io/Portfolio/" target="_blank">
              <div class="image">
                <img src="assets/images/project-3.jpeg" alt="" />
              </div>
              <div class="title">
                <h3>Well-Being for Strays</h3>
              </div>
            </a>
          </div>
          <div class="design hidden">
            <a href="https://framelelo.github.io/Portfolio/" target="_blank">
              <div class="image">
                <img src="assets/images/project-3.jpeg" alt="" />
              </div>
              <div class="title">
                <h3>Well-Being for Strays</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTACT -->
    <section class="hidden" id="contact">
      <!-- CONTACT FORM -->
      <form action="POST" action="form.php">
        <h3>Faisons avancer vos projets ensemble...</h3>
        <div class="sec-nom">
          <input
            type="text"
            name="name"
            id="name"
            placeholder="Nom"
            autocomplete="given-name" />
          <input
            type="text"
            name="firstName"
            id="firstName"
            placeholder="Prénom"
            autocomplete="name" />
        </div>
        <div class="sec-nom">
          <input
            type="tel"
            name="phone"
            id="phone"
            placeholder="Téléphone"
            autocomplete="tel" />
          <input
            type="email"
            name="email"
            id="email"
            placeholder="Email"
            autocomplete="email" />
        </div>
        <textarea
          name="message"
          id="message"
          placeholder="Message"
          rows="5"></textarea>
        <button class="button" name="submit" type="submit">ENVOYER</button>
        <!-- CSRF token -->
        <input type="hidden" name="token" value="<?= $token ?? '' ?>">
      </form>
    </section>
  </main>
  <script src="assets/script.js" tyope="text/javascript"></script>
</body>

</html>