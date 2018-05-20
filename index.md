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
            <input class="input" id="mce-EMAIL" class="email" name="EMAIL" placeholder="Email" value="" type="email" required>
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
