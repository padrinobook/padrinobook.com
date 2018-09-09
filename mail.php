<?php
require_once './mail/vendor/autoload.php';

$helperLoader = new SplClassLoader('Helpers', './mail/vendor');
$mailLoader   = new SplClassLoader('SimpleMail', './mail/vendor');

$helperLoader->register();
$mailLoader->register();

use Helpers\Config;
use SimpleMail\SimpleMail;

$config = new Config;
$config->load('./mail/config/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email   = stripslashes(trim($_POST['form-email']));
    $subject = stripslashes(trim($_POST['form-subject']));
    $message = stripslashes(trim($_POST['form-message']));
    $pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

    if (preg_match($pattern, $email) || preg_match($pattern, $subject)) {
        die("Header injection detected");
    }

    $emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);

    if ($email && $emailIsValid && $subject && $message) {
        $mail = new SimpleMail();

        $mail->setTo($config->get('emails.to'));
        $mail->setFrom($config->get('emails.from'));
        $mail->setSenderEmail($email);
        $mail->setSubject($config->get('subject.prefix') . ' ' . $subject);

        $body = "
        <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
        <html>
            <head>
                <meta charset=\"utf-8\">
            </head>
            <body>
                <h1>{$subject}</h1>
                <p><strong>{$config->get('fields.message')}:</strong> <br>{$message}</p>
            </body>
        </html>";

        $mail->setHtml($body);
        $mail->send();

        $emailSent = true;
    } else {
        $hasError = true;
    }
}
?><!DOCTYPE html>
<html lang="en" class="no-js" prefix="og: http://ogp.me/ns#" >
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PadrinoBook | Contact</title>
    <meta name="description" content="PadrinoBook - If you want to contact then you are on the right page. Feel free to ask me anything related to the book I will answer in the following days." />
    <meta name="author" content="Matthias Günther">
    <meta content="noodp" name="robots" >

    <link rel="canonical" href="https://padrinobook.com/imprint/" />

    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="Padrinobook" />
    <meta property="og:title" content="PadrinoBook | Imprint " />
    <meta property="og:description" content="PadrinoBook - The Guide To Master The Elegant Ruby Web Framework" />
    <meta property="og:url" content="https://padrinobook.com/imprint/" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://padrinobook.com/logo.png" />

    <meta content="summary_large_image" name="twitter:card" />
    <meta content="@wikimatze" name="twitter:creator" />
    <meta content="@padrinobook" name="twitter:site" />
    <meta content="Imprint" name="twitter:title" />
    <meta content="PadrinoBook - The Guide To Master The Elegant Ruby Web Framework written by @wikimatze " name="twitter:description" />
    <meta content="https://padrinobook.com/imprint/" name="twitter:url" />
    <meta content="https://farm4.staticflickr.com/3725/33337025026_d36474c52b_b_d.jpg" name="twitter:image:src" />

    <link rel="shortcut icon" href="/favicons/favicon.ico">

    <link href="http://www.feedio.co/@padrinobook/feed" rel="alternate" type="application/rss+xml" title="RSS feed for PadrinoBook">

    <link rel="stylesheet" href="/css/application.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" media="none" onload="if(media!=='all')media='all'" >
  </head>
  <body>
    <nav class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <span class="navbar-burger burger" data-target="navbarMenu">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenu" class="navbar-menu">
          <div class="navbar-end">
            <a  class="navbar-item" href="/" title="Back to home of padrinobook">Home</a>
            <a class="navbar-item" href="/news" title="Overview of latest articles">News</a>
            <a class="navbar-item is-active" href="/mail.php" title="Contact me">Contact</a>
            <a class="navbar-item" href="/about" title="Behind the padrinobook is wikimatze">About</a>
            <a class="navbar-item" href="/imprint" title="Legal stuff from me">Imprint</a>
          </div>
        </div>
      </div>
    </nav>

    <div class='social share'>
      <ul>
        <li>
          <a class='fab fa-twitter-square' href='https://twitter.com/padrinobook' rel='noopener noreferrer' target='_blank' title='Follow me on Twitter'></a>
        </li>
        <li>
          <a class='fab fa-facebook-square' href='https://www.facebook.com/padrinobook' rel='noopener noreferrer' target='_blank' title='Follow me on Facebook'></a>
        </li>
        <li>
          <a class="fab fa-instagram" href="https://www.instagram.com/padrinobook/" rel="noopener noreferrer" title="Follow me on Instagram"></a>
        </li>
        <li>
          <a class='fab fa-google-plus-square' href="https://plus.google.com/109249095952663676924" rel='noopener noreferrer' target='_blank' title='Follow me on Google+'></a>
        </li>
        <li>
          <a class='fab fa-github-square' href='https://github.com/padrinobook/padrinobook' rel='noopener noreferrer' target='_blank' title='Follow me on GitHub'></a>
        </li>
        <li>
          <a class='fab fa-medium' href='https://medium.com/@padrinobook' rel='noopener noreferrer' target='_blank' title='Follow me on Medium'></a>
        </li>
        <li>
          <a class="fab fa-linkedin" href="https://www.linkedin.com/groups/8687222" rel="noopener noreferrer" title="Follow me on LinkedIn"></a>
        </li>
      </ul>
    </div>

    <br>

    <div class="container content">
      <a class="is-hidden-mobile" href="/index.html" title="Padrinobook - A book about the Elegant Ruby Web Framework">
        <img id="logo" src="/logo_big.png" srcset="/logo_big.png 2000w, /logo_medium.png 1000w, /logo_small.png 700w" sizes="100%" alt="Logo of Padrinobook">
      </a>
      <header>
        <div id="logo-text">
          <h1>Contact</h1>
        </div>
      </header>

    <?php if(!empty($emailSent)): ?>
        <div class="notification is-success">
            <?php echo $config->get('messages.success'); ?>
        </div>
    <?php else: ?>
        <?php if(!empty($hasError)): ?>
        <div class="notification is-danger">
            <?php echo $config->get('messages.error'); ?>
        </div>
        <?php endif; ?>

        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" enctype="application/x-www-form-urlencoded" id="contact-form" class="form-horizontal" method="post">
            <div class="field">
              <label for="form-email" class="label"><?php echo $config->get('fields.email'); ?></label>
              <div class="control has-icons-left">
                <input type="email" class="input" id="form-email" name="form-email" placeholder="<?php echo $config->get('fields.email'); ?>" required>
                <span class="icon is-small is-left">
                  <i class="fas fa-envelope"></i>
                </span>
              </div>
            </div>
            <div class="field">
              <label for="form-email" class="label"><?php echo $config->get('fields.subject'); ?></label>
              <div class="control has-icons-left">
                <input type="text" class="input" id="form-subject" name="form-subject" placeholder="<?php echo $config->get('fields.subject'); ?>" required>
                <span class="icon is-small is-left">
                  <i class="fas fa-rocket"></i>
                </span>
              </div>
            </div>
            <div class="field">
              <label class="label"><?php echo $config->get('fields.message'); ?></label>
              <div class="control">
                <textarea class="textarea" id="form-message" name="form-message" placeholder="<?php echo $config->get('fields.message'); ?>" required></textarea>
              </div>
            </div>

            <div class="field is-grouped">
              <div class="control">
                <button type="submit" class="button is-large is-link"><?php echo $config->get('fields.btn-send'); ?></button>
              </div>
            </div>
        </form>
      <?php endif; ?>
    </div>

    <footer>
      <div class="container has-text-centered ">
        <hr>
        <nav>
          <i class="far fa-copyright"></i> <span class="copyright">Matthias Günther</span>
          <span class="footer-separater">&bull;</span>
          <a class="footer-desktop" href="/about">About</a>
          <span class="footer-separater">&bull;</span>
          <a class="footer-desktop" href="/mail.php">Contact</a>
          <span class="footer-separater">&bull;</span>
          <a class="footer-desktop" href="/news">News</a>
          <span class="footer-separater">&bull;</span>
          <a class="footer-desktop" href="/imprint">Imprint</a>
          <span class="footer-separater">&bull;</span>
          <a class="footer-desktop" href="/contribute">Contribute</a>
          <a class="footer-mobile fab fa-twitter is-hidden-tablet" href="https://twitter.com/padrinobook" title="Follow padrinobook on twitter"></a>
          <a class="footer-mobile fab fa-facebook-f is-hidden-tablet" href="https://www.facebook.com/padrinobook" title="Follow padrinobook on facebook"></a>
          <a class="footer-mobile fab fa-instagram is-hidden-tablet" href="https://www.instagram.com/padrinobook/" title="Follow padrinobook on Instagram"</a>
          <a class="footer-mobile fab fa-google-plus-g is-hidden-tablet" href="https://plus.google.com/109249095952663676924" title="Follow padrinobook on google+"></a>
          <a class="footer-mobile fab fa-medium-m is-hidden-tablet" href="https://medium.com/@padrinobook" title="Follow padrinobook on medium"></a>
          <a class="footer-mobile fab fa-github-alt is-hidden-tablet" href="https://github.com/padrinobook" title="Follow padrinobook on GitHub"></a>
          <a class="footer-mobile fab fa-linkedin-in is-hidden-tablet" href="https://www.linkedin.com/groups/8687222" title="Follow padrinobook on LinkedIn"></a>
        </nav>
      </div>
    </footer>

    <script defer src="mail/public/js/contact-form.js"></script>
    <script defer src="/js/main_min.js"></script>
    <!-- Piwik tracking pixel -->
    <noscript><p><img src="https://padrinobook.com/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
  </body>
</html>
