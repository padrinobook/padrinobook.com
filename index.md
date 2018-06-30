---
active: home
---
If you want to go into web development with ease and no boundaries to which
components you want to use, then dig into Padrino.
Padrino is super interesting, but there aren't a lot of docs available and this book will change it.

This book will teach you how to craft web applications in Padrino with joy and fun.

<div class="columns is-vcentered">
  <div class="column is-6">
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

  <div class="column is-6 newsletter">
    <div class="newsletter-box">
      <h5>Stay informed with the newsletter:</h5>
      <div id="mc_embed_signup">
      <form action="https://wikimatze.us6.list-manage.com/subscribe/post?u=4010f8ce18503766e176536f1&amp;id=198f8c0321" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div class="field">
          <div class="control has-icons-left">
            <input class="input" id="mce-EMAIL" name="EMAIL" placeholder="Email" value="" type="email" required>
            <span class="icon is-small is-left">
              <i class="fas fa-envelope"></i>
            </span>
          </div>
        </div>
        <div class="field is-grouped">
          <div class="control">
            <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button is-large is-link">Send</button>
          </div>
        </div>
      </form>
      </div>
    </div>
    <div class="newsletter-box">
      <h5>Get the book:</h5>
      <a class="button is-danger is-large" style="text-decoration: none; margin-right: 10px" href="https://www.softcover.io/books/wikimatze/padrinobook#pricing">Buy</a>
      <a class="button is-success" style="text-decoration: none;" href="https://www.softcover.io/download/wikimatze/padrinobook/ebooks/padrinobook-preview.pdf">Preview</a>
      <p> or <a href="/book">read online</a>.</p>
    </div>
  </div>
</div>


<section id="testimonials">
  <h2>What people are saying</h2>
  <div class="columns">
    <div class="column is-6 testimonial">
      <blockquote>
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de
      </blockquote>
      <div class="quoted">
        <div class="is-pulled-right is-hidden-mobile">
          <h5 class="name">Matthias Günther</h5>
          <h5 class="position">Software Developer</h5>
        </div>
        <div class="is-pulled-right is-hidden-mobile">
          <a class="portrait" href="http://www.gander.io/">
            <img src="https://c1.staticflickr.com/1/305/30960365443_dc82235ae2_q.jpg">
          </a>
        </div>
        <div class="center mobile-space is-hidden-tablet">
          <h5 class="name">Matthias Günther</h5>
          <h5 class="position">Software Developer</h5>
        </div>
        <div class="center mobile-space is-hidden-tablet">
          <a class="portrait" href="http://www.gander.io/">
            <img src="https://c1.staticflickr.com/1/305/30960365443_dc82235ae2_q.jpg">
          </a>
        </div>
      </div>
    </div>
    <div class="column is-6 testimonial">
      <blockquote>
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de
      </blockquote>
      <div class="quoted">
        <div class="is-pulled-right is-hidden-mobile">
          <h5 class="name">Matthias Günther</h5>
          <h5 class="position">Software Developer</h5>
        </div>
        <div class="is-pulled-right is-hidden-mobile">
          <a class="portrait" href="http://www.gander.io/">
            <img src="https://pbs.twimg.com/profile_images/814020419334311936/Ufc1etJh_400x400.jpg">
          </a>
        </div>
        <div class="center mobile-space is-hidden-tablet">
          <h5 class="name">Matthias Günther</h5>
          <h5 class="position">Software Developer</h5>
        </div>
        <div class="center mobile-space is-hidden-tablet">
          <a class="portrait" href="http://www.gander.io/">
            <img src="https://pbs.twimg.com/profile_images/814020419334311936/Ufc1etJh_400x400.jpg">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="padrino">
  <h2>What's Padrino?</h2>
  <div class="columns">
    <div class="column">
      <p class="intro">
        <a href="http://padrinorb.com/" title="Padrino">Padrino</a> is a fully featured Ruby framework that helps
        building <i>flexible</i>, <i>powerful</i> and <i>fast</i> web apps.
      </p>

      <p>If you want to go into web development with ease and no boundaries to which components you want to use, then dig into Padrino.
      </p>

      <p>

      It offers a <strong>Drop-In Admin</strong> to easy edit your models data in an Admin interface, it is <strong>agnostic</strong> so you can chose the components for your project you want without configuation hustle, it is extensible with all <strong>Sinatra like extensions</strong>, it is <strong>comprehensive</strong> by offering you generators for controller, mailer, test frameworks, localization and many more.
      </p>

      <p> By following my step-by-step instructions you'll be able to get your own
     Padrino app up and running in a couple of days!
      </p>
    </div>
  </div>
</section>

<section id="building">
  <h2>What You'll Be Creating</h2>
  <figure class="image is-square">
    <img src="https://picsum.photos/620/620?image=1028">
  </figure>
  <h3>A job vacancy board with authentication, searching, and admin interface.</h3>
</section>

<section id="getting">
  <h2>What You Get</h2>
  <figure class="image is-square">
    <img src="https://picsum.photos/620/620?image=1028">
  </figure>
  <h3>A job vacancy board with authentication, searching, and admin interface.</h3>
</section>

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
