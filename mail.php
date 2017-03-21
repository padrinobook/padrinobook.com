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
<html>
  <head>
    <meta charset="utf-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="True" name='HandheldFriendly'>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="PadrinoBook - The Guide To Master The Elegant Ruby Web Framework" />
    <meta name="author" content="Matthias Günther">

    <title>PadrinoBook</title>

    <link rel="canonical" href="https://padrinobook.com/" />

    <link rel="stylesheet" href="/css/foundation.css" />
    <link rel="stylesheet" href="/css/syntax.css">
    <!-- <link rel="stylesheet" href="/css/flexslider.css"> -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/fontawesome.css">

    <meta content="noodp" name="robots" >

    <link href="http://www.feedio.co/@padrinobook/feed" rel="alternate" type="application/rss+xml" title="RSS feed for PadrinoBook">

    <meta property="og:site_name" content="Padrinobook" />
    <meta property="og:title" content="PadrinoBook - The Guide To Master The Elegant Ruby Web Framework" />
    <meta property="og:description" content="PadrinoBook - The Guide To Master The Elegant Ruby Web Framework" />
    <meta property="og:url" content="https://padrinobook.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://padrinobook.com/logo.png" />

    <meta content="summary_large_image" name="twitter:card" />
    <meta content="@wikimatze" name="twitter:creator" />
    <meta content="@padrinobook" name="twitter:site" />
    <meta content="PadrinoBook - The Guide To Master The Elegant Ruby Web Framework written by @wikimatze " name="twitter:title" />
    <meta content="PadrinoBook - The Guide To Master The Elegant Ruby Web Framework written by @wikimatze " name="twitter:description" />
    <meta content="https://padrinobook.com/" name="twitter:url" />
    <meta content="https://farm4.staticflickr.com/3725/33337025026_d36474c52b_b_d.jpg" name="twitter:image:src" />

    <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/favicons/manifest.json">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg">
    <link rel="shortcut icon" href="/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
  </head>

  <body>
  <body>
    <div class='social share'>
      <ul>
        <li>
          <a class='fa fa-twitter-square' href='https://twitter.com/padrinobook' rel='noopener noreferrer' target='_blank' title='Follow me on Twitter'></a>
        </li>
        <li>
          <a class='fa fa-facebook-square' href='https://www.facebook.com/padrinobook' rel='noopener noreferrer' target='_blank' title='Follow me on Facebook'></a>
        </li>
        <li>
          <a class='fa fa-google-plus-square' href="https://plus.google.com/109249095952663676924" rel='noopener noreferrer' target='_blank' title='Follow me on Google+'></a>
        </li>
        <li>
          <a class='fa fa-github-square' href='https://github.com/padrinobook/padrinobook' rel='noopener noreferrer' target='_blank' title='Follow me on GitHub'></a>
        </li>
        <li>
          <a class='fa fa-medium' href='https://medium.com/@padrinobook' rel='noopener noreferrer' target='_blank' title='Follow me on Medium'></a>
        </li>
      </ul>
    </div>

    <br>

    <div class="row">
      <div class="small-10 large-10 medium-10 columns cover">
        <a href="/index.html" title="Padrinobook - A book about the Elegant Ruby Web Framework">
          <img src="/logo.png" alt="Logo of Padrinobook"/>
        </a>
      </div>
      <br>
      <br>
      <div class="row">
        <div class="large-10 medium-10 columns content">
          <article>
          <header>
            <h1>Contact</h1>
          </header>

        <?php if(!empty($emailSent)): ?>
            <div class="col-md-6 col-md-offset-3">
                <div class="alert alert-success text-center"><?php echo $config->get('messages.success'); ?></div>
                <br>

                In the meanwhile, you can either sign up for the newsletter:

                <br>

                <link href="https://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
                <style type="text/css">
                  #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                  /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                     We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                </style>
                <div id="mc_embed_signup_newsletter">
                <form action="https://wikimatze.us6.list-manage.com/subscribe/post?u=4010f8ce18503766e176536f1&amp;id=198f8c0321" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                  <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                  <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button pretty medium info btn">
                </form>
                <br>
                <br>
                or follow <a href="https://twitter.com/padrinobook">@padrinobook on twitter</a>, or sign up for the <a href="http://www.feedio.co/@padrinobook/feed">RSS feed</a>, or read about <a href="/news">previous news</a>.
            </div>
        <?php else: ?>
            <?php if(!empty($hasError)): ?>
            <div class="col-md-5 col-md-offset-4">
                <div class="alert alert-danger text-center"><?php echo $config->get('messages.error'); ?></div>
            </div>
            <?php endif; ?>
              <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" enctype="application/x-www-form-urlencoded" id="contact-form" class="form-horizontal" method="post">
                <div class="form-group">
                    <label for="form-email" class="col-lg-2 control-label"><?php echo $config->get('fields.email'); ?></label>
                    <div class="col-lg-10">
                        <input type="email" class="form-control" id="form-email" name="form-email" placeholder="<?php echo $config->get('fields.email'); ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="form-subject" class="col-lg-2 control-label"><?php echo $config->get('fields.subject'); ?></label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="form-subject" name="form-subject" placeholder="<?php echo $config->get('fields.subject'); ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="form-message" class="col-lg-2 control-label"><?php echo $config->get('fields.message'); ?></label>
                    <div class="col-lg-10">
                        <textarea class="form-control" rows="5" id="form-message" name="form-message" placeholder="<?php echo $config->get('fields.message'); ?>" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button type="submit" class="button large expanded"><?php echo $config->get('fields.btn-send'); ?></button>
                    </div>
                </div>
            </form>
          <?php endif; ?>
          </article>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="large-12 medium-12 columns">
        <hr>
        <footer>
          <nav>
            <span class="copyright">2017 &copy;</span>
            <span class="footer-separater">&bull;</span>
            <a href="http://eepurl.com/Wskif">Newsletter</a>
            <span class="footer-separater">&bull;</span>
            <a href="http://www.feedio.co/@padrinobook/feed">RSS</a>
            <span class="footer-separater">&bull;</span>
            <a href="/mail.php">Contact</a>
            <span class="footer-separater">&bull;</span>
            <a href="/contribute">Contribute</a>
            <span class="footer-separater">&bull;</span>
            <a href="/about">About</a>
            <span class="footer-separater">&bull;</span>
            <a href="/news">News</a>
            <span class="footer-separater">&bull;</span>
            <a href="/imprint">Imprint</a>
          </nav>
        </footer>
      </div>
    </div>
  <script type="text/javascript" src="mail/public/js/contact-form.js"></script>
  <script type="text/javascript">
      new ContactForm('#contact-form');
  </script>
  </body>
</html>
