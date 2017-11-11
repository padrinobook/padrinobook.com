---
---
<div class="row">
  <div class="large-10 medium-10 columns">
  <p>
    If you want to go into web development with ease and no boundaries to which
    components you want to use, then dig into Padrino.
    Padrino is super interesting, but there aren't a lot of docs available and this book will change it.
  </p>
  <p>
    This book will teach you how to craft web applications in Padrino with joy and fun.
  </p>
  </div>
</div>

<div class="row">
  <div class="large-5 medium-5 columns articles">
    <span class="information badge author primary">
      <a href="/news">News</a>
    </span>
    <ul>
      {% for post in site.posts limit:1 %}
        <li>
          <a href="{{ post.url }}">{{ post.title }}</a>
        </li>
      {% endfor %}
    </ul>
    <p>
      The person behind this book <a href="https://twitter.com/wikimatze">@wikimatze</a>:
    </p>
    <img src="https://c1.staticflickr.com/1/305/30960365443_dc82235ae2_q.jpg" class="left image circle person-behind-the-book" alt="Matthias Günther loves Vim and painting Warhammer figures">
  </div>
  <div class="large-5 medium-5 columns info">
    <div class="newsletter-box">
      <h5>Stay informed with the newsletter:</h5>
      <link href="https://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
      <style type="text/css">
        #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
        /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
      </style>
      <div id="mc_embed_signup">
      <form action="https://wikimatze.us6.list-manage.com/subscribe/post?u=4010f8ce18503766e176536f1&amp;id=198f8c0321" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button pretty medium info btn">
      </form>
      </div>
    </div>
    <div class="newsletter-box">
      <h5>Get the book:</h5>
      <a class="nice large button alert large secondary btn" style="text-decoration: none; margin-right: 10px" href="https://www.softcover.io/books/wikimatze/padrinobook#pricing">Buy</a>
      <a class="nice large button pretty large secondary btn" href="https://www.softcover.io/download/wikimatze/padrinobook/ebooks/padrinobook-preview.pdf">Preview</a>
      <p> or <a href="/book">read online</a>.</p>
    </div>
  </div>
</div>

<!--
<div class="row">
  <div class="twelve columns">
    <span class="information badge author primary">
      Recent commits
    </span>
    <div id="github-commits"></div>
  </div>
</div>
<br>
-->

<!--End mc_embed_signup-->

<!--

<div class="row">
  <div class="flexslider">
    <ul class="slides">
      <li>
        <img src="images/cover.png" />
      </li>
      <li>
        <img src="images/online.png" />
      </li>
      <li>
        <img src="images/sources.png" />
      </li>
      <li>
        <img src="images/working.png" />
      </li>
    </ul>
  </div>
</div>
-->
  </div>
</div>
