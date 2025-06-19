
<!DOCTYPE html>
<html class="no-js" lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Ghju</title>
  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/cv.css" />
  <script src="js/modernizr.js+pace.min.js.pagespeed.jc.jYJkEWrgym.js"></script>
  <script>
    eval(mod_pagespeed_ustQdyNA22);
  </script>
  <script>
    eval(mod_pagespeed_CRiDk_PmFZ);
  </script>
 <link rel="shortcut icon" href="\images\logo\title-logo.png" type="image/x-icon" />
 <link rel="icon" href="\images\logo\title-logo.png" type="image/x-icon" />
  <script nonce="068b0d4e-6aa4-418f-b872-a1feb6f74731">
    (function (w, d) {
      !(function (a, e, t, r) {
        a.zarazData = a.zarazData || {};
        a.zarazData.executed = [];
        a.zaraz = { deferred: [], listeners: [] };
        a.zaraz.q = [];
        a.zaraz._f = function (e) {
          return function () {
            var t = Array.prototype.slice.call(arguments);
            a.zaraz.q.push({ m: e, a: t });
          };
        };
        for (const e of ["track", "set", "debug"]) a.zaraz[e] = a.zaraz._f(e);
        a.zaraz.init = () => {
          var t = e.getElementsByTagName(r)[0],
            z = e.createElement(r),
            n = e.getElementsByTagName("title")[0];
          n && (a.zarazData.t = e.getElementsByTagName("title")[0].text);
          a.zarazData.x = Math.random();
          a.zarazData.w = a.screen.width;
          a.zarazData.h = a.screen.height;
          a.zarazData.j = a.innerHeight;
          a.zarazData.e = a.innerWidth;
          a.zarazData.l = a.location.href;
          a.zarazData.r = e.referrer;
          a.zarazData.k = a.screen.colorDepth;
          a.zarazData.n = e.characterSet;
          a.zarazData.o = new Date().getTimezoneOffset();
          a.zarazData.q = [];
          for (; a.zaraz.q.length;) {
            const e = a.zaraz.q.shift();
            a.zarazData.q.push(e);
          }
          z.defer = !0;
          for (const e of [localStorage, sessionStorage])
            Object.keys(e || {})
              .filter((a) => a.startsWith("_zaraz_"))
              .forEach((t) => {
                try {
                  a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t));
                } catch {
                  a.zarazData["z_" + t.slice(7)] = e.getItem(t);
                }
              });
          z.referrerPolicy = "origin";
          z.src =
            "/cdn-cgi/zaraz/s.js?z=" +
            btoa(encodeURIComponent(JSON.stringify(a.zarazData)));
          t.parentNode.insertBefore(z, t);
        };
        ["complete", "interactive"].includes(e.readyState)
          ? zaraz.init()
          : a.addEventListener("DOMContentLoaded", zaraz.init);
      })(w, d, 0, "script");
    })(window, document);
  </script>
</head>
<body id="top">
  <header class="s-header">
    <div class="header-logo">
      <a class="site-logo" href="index.php">
        <img src="images\logo\header-title.png" alt="Homepage" class="site-logo-header" />
      </a>
    </div>
    <nav class="header-nav">
      <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>
      <div class="header-nav__content">
        <h3>Navigation</h3>
        <ul class="header-nav__list">
          <li class="current">
            <a class="smoothscroll" href="#home" title="home">Home</a>
          </li>
          <li>
            <a class="smoothscroll" href="#about" title="about">About Me</a>
          </li>
          <li>
            <a class="smoothscroll" href="#timeline" title="timeline">Parcours</a>
          </li>
          <li>
            <a class="smoothscroll" href="#certifications" title="certifications">Certifications</a>
          </li>
          <li>
            <a class="smoothscroll" href="#works" title="works">Réalisations</a>
          </li>
          <li>
            <a class="smoothscroll" href="#contact" title="contact">Contact</a>
          </li>
        </ul>
          <a href="admin/login.php" type="button" class=" btn btn--primary">
            Login
          </a>
        <p>
          Ghju
        </p>
        </div>
      </div>
      </div>
    </nav>
    <a class="header-menu-toggle" href="#0">
      <span class="header-menu-text">Menu</span>
      <span class="header-menu-icon"></span>
    </a>
  </header>

  <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/curriculum-bg.jpg"
    data-natural-width="3000" data-natural-height="2000" data-position-y="center">
    <div class="overlay"></div>
    <div class="shadow-overlay"></div>
    <div class="home-content">
      <div class="row home-content__main">
        <h3>Bonjour</h3>
        <h1>
          Bienvenue sur mon portfolio !<br />
          Vous y retrouverez toutes mes réalisations en tant qu'étudiante en BUT MMI
        </h1>
        <div class="home-content__buttons">
          <a href="cv.html" type="button" class=" btn btn--primary">
            Voir Mon CV
          </a>
        </div>
      </div>
    </div>
    <div class="home-content__line"></div>
    </div>
    <ul class="home-social">
      <li>
        <a href="https://github.com/Ghjuu"><i class="fa fa-github" aria-hidden="true"></i><span>GitHub</span></a>
      </li>
      <li>
        <a href="https://www.linkedin.com/in/ghju-vincenti-628090254/"><i class="fa fa-linkedin" aria-hidden="true"></i><span>LinkedIn</span></a>
      </li>
    </ul>
    <div class="home-content__scroll">
      <a href="#about" class="scroll-link smoothscroll">
        <span>Scroll Down</span>
      </a>
    </div>
  </section>

  <section id="about" class="s-about">
    <div class="about__line"></div>
    <div class="row section-header has-bottom-sep aos-init aos-animate" data-aos="fade-up">
      <div class="col-full">
        <img src="images/avatars/me.png" width="200" height="200">
        <h3 class="subhead subhead--dark">About me</h3>
        <h1 class="display-1 display-1--light">Bonjour</h1>
      </div>
    </div>
    <div class="row about-desc aos-init aos-animate" data-aos="fade-up">
      <div class="col-full">
        <div class="contentabout">
        <p> Je m’appelle Anghjula Dea Vincenti. Je suis une ancienne étudiante en BTS SIO spécialité SLAM </br> "Services Informatiques
          aux Organisations spécialité en Solutions Logicielle et Applications Métiers".Je suis desormais une étudiante en BUT MMI car j'ai comme projet professionnel de devenir developpeuse WEB </p>
      </div>
      </div>
    </div>
  </section>

  <section id="timeline" class="s-timeline">
    <div>
        <h3 class="smalltimelinetext">du lycée à nos jours</h3>
        <h1 class="timelinetext">Timeline de mon parcours académique et professionnel</h1>
    </div>

    <div class="timeline">
        <?php

        $servername = "ghjuvif467.mysql.db";
        $username = "ghjuvif467";
        $password = "Arcanin271731";
        $dbname = "ghjuvif467";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT date, lieu, event, description, container_position FROM Timeline";
        $conn->set_charset("utf8");
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            foreach ($result as $row) {
                $container_class = ($row["container_position"] == 'left') ? 'container left' : 'container right';
                ?>
                <div class="<?php echo $container_class; ?>">
                    <div class="content">
                        <h2 class="date"><?php echo $row["date"]; ?></h2>
                        <h1 class="lieu"><?php echo $row["lieu"]; ?></h1>
                        <h1 class="event"><?php echo $row["event"]; ?></h1>
                        <p><?php echo $row["description"]; ?></p>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "0 résultats";
        }
        $conn->close();
        ?>
            </div>
        </section>


  <section id="certifications" class="s-services">
    <div class="row section-header has-bottom-sep" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead">Certifications</h3>
            <h1 class="display-2">Differentes certifications qui complete mes compétences</h1>
        </div>
        <p>Tout au long de mes 2 années de BTS, j'ai construit un parcours de formation au travers de MOOC me permettant de développer des compétences clés liées à mes cours et stages.</p>
    </div>
    <div class="row services-list block-1-2 block-tab-full">
        <?php
        $servername = "ghjuvif467.mysql.db";
        $username = "ghjuvif467";
        $password = "Arcanin271731";
        $dbname = "ghjuvif467";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT titre, description, lien, icone FROM Certifications";
        $conn->set_charset("utf8");
        $result = $conn->query($sql);
        

        if ($result->num_rows > 0) {
           
            foreach ($result as $row) {
                ?>
                <div class='col-block service-item' data-aos='fade-up'>
                    <div class='service-icon'><i class='<?php echo $row["icone"]; ?>'></i></div>
                    <div class='service-text'>
                        <h3 class='h2'><?php echo $row["titre"]; ?></h3>
                        <p><?php echo $row["description"]; ?></p>
                        <p><a href='<?php echo $row["lien"]; ?>'>Lien vers le MOOC</a></p>
                    </div>
                </div>
            <?php
            }
        } else {
            echo "0 résultats";
        }
        $conn->close();
        ?>
    </div>
</section>


  <section id="works" class="s-works">
    <div class="intro-wrap">
      <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
        <div class="col-full">
          <h3 class="subhead">Recent Works</h3>
          <h1 class="display-2 display-2--light">
            Mes dernières réalisations professionnelles et rapport de stage !
          </h1>
          <iframe src="https://www.pearltrees.com/ghjuvincenti/realisation-professionelles/id61694913?embed=2&d=20230103141" width="900" height="750" style="border:0px;" allowtransparency="true"></iframe><span style="display:block; padding-top:2px; color:#818181; font-size:13px;"><a href="https://www.pearltrees.com/ghjuvincenti/realisation-professionelles/id61694913" style=" color:#818181; font-size:13px;" target="_blank">Realisation Professionelles</a>, par <a href="https://www.pearltrees.com/ghjuvincenti" style=" color:#818181; font-size:13px;" target="_blank">ghjuvincenti</a></span>
        </div>
      </div>
    </div>
  </section>


  <section id="contact" class="s-contact">
    <div class="overlay"></div>
    <div class="contact__line"></div>
    <div class="row section-header aos-init aos-animate" data-aos="fade-up">
       <div class="col-full">
          <h3 class="subhead">Bonjour</h3>
          <h1 class="display-2 display-2--light">Envoyez-moi un message</h1>
       </div>
    </div>
    <div class="row contact-content aos-init aos-animate" data-aos="fade-up">
       <div class="contact-primary">
          <h3 class="h6">Contactez moi </h3>
          <form name="contactForm" id="contactForm" method="post" action="" novalidate="novalidate">
             <fieldset>
                <div class="form-field"> <input name="contactName" type="text" id="contactName" placeholder="Your Name" value="" minlength="2" required="" aria-required="true" class="full-width"></div>
                <div class="form-field"> <input name="contactEmail" type="email" id="contactEmail" placeholder="Your Email" value="" required="" aria-required="true" class="full-width"></div>
                <div class="form-field"> <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="" class="full-width"></div>
                <div class="form-field"><textarea name="contactMessage" id="contactMessage" placeholder="Your Message" rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea></div>
                <div class="form-field">
                   <button class="full-width btn--primary">Submit</button>
                   <div class="submit-loader">
                      <div class="text-loader">Sending...</div>
                      <div class="s-loader">
                         <div class="bounce1"></div>
                         <div class="bounce2"></div>
                         <div class="bounce3"></div>
                      </div>
                   </div>
                </div>
             </fieldset>
          </form>
          <div class="message-warning">Un problème est survenu veillez réessayer</div>
          <div class="message-success"> Merci de m'avoir envoyer un message<br></div>
       </div>
       <div class="contact-secondary">
          <div class="contact-info">
             <h3 class="h6 hide-on-fullwidth">Contact Info</h3>
             <div class="cinfo">
                <h5>envoyez moi un mail</h5>
                <p> vendrix17@gmail.com<br> 20231695@webmail.universita.corsica</p>
             </div>
             <div class="cinfo">
                <h5>Call Us At</h5>
                <p> Phone: 0623552178</p>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section>
    <footer>
      <div class="row footer-main">
        <div class="col-six tab-full left footer-desc">
          <div class="footer-logo"></div>
          2023 - Anghjula Dea Vincenti. Tous droits réservés. 
          Ce site a été réalisé dans le cadre de ma formation en BTS Services Informatiques aux 
          Organisations option Solutions Logicielles et Applications Métiers ainsi que ma formation en BUT MMI.
        </div>
        <div class="col-six tab-full right footer-subscribe">
          <h4>Merci!</h4>
          <p>
            Merci d'avoir visité mon site web ! Je tiens à exprimer ma gratitude envers tous les professionnels 
            qui ont pris le temps de naviguer sur ce site et de découvrir mes projets et réalisations.
          </p>
        </div>
      </div>
      <div class="row footer-bottom">
        <div class="col-twelve">
          <div class="copyright">
            <span>© Copyright Glint 2022</span>
            <span>Site Template by
              <a href="https://colorlib.com/" target="_blank" rel="nofollow noopener">Colorlib</a></span>
          </div>
          <div class="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>
      <div class="pswp__ui pswp__ui--hidden">
        <div class="pswp__top-bar">
          <div class="pswp__counter"></div>
          <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
          <button class="pswp__button pswp__button--share" title="Share"></button>
          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
          <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip"></div>
        </div>
        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
        <div class="pswp__caption">
          <div class="pswp__caption__center"></div>
        </div>
      </div>
    </div>
  </div>
  <div id="preloader">
    <div id="loader">
      <div class="line-scale-pulse-out">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </div>
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
    integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
    data-cf-beacon='{"rayId":"755e7e11cc0c999e","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.8.1","si":100}'
    crossorigin="anonymous"></script>
</body>

</html>