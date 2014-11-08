---
---

<div class="row">
  <div class="twelve columns">
    <div class="pretty large secondary btn"><a href="https://www.softcover.io/downloads/fd219c19/padrinobook">Free Previews</a></div>
    or <a href="/book">read online for free</a>.
    <br/>
    <br/>

    If you want to go into web development with ease and no boundaries to which
    components you want to use, then dig into Padrino. Padrino is super interesting,
    but there aren't a lot of docs available. This book is a practical approach to
    learn Padrino to craft your web applications with joy and fun.
  </div>
</div>
<br>

{% include newsletter.html %}

<div class="row">
  <div class="twelve columns">
    <li class="info badge author primary">
      Recent News
    </li>
    <div class="articles">
      <ul>
        {% for post in site.posts %}
          <li>
          <span>{{ post.date | date: "%B %e, %Y" }}</span> <a href="{{ post.url }}">{{ post.title }}</a>
          </li>
        {% endfor %}
      </ul>
    </div>
  </div>
</div>

<div class="row">
  <div class="twelve columns">
    <li class="info badge author primary">
      Contribute
    </li>
    <br/>
    <br/>
    I'm writing this book with much <a href="https://github.com/wikimatze/padrinobook/issues?page=1&state=closed">help of the community</a>. Instead of waiting until the book is finished you can <a href="https://github.com/wikimatze/padrinobook">see the source</a>, <a href="http://padrinobook.com/book/">watch the online version</a>, join the <a href="http://eepurl.com/Wskif">mailing list</a>, post a <a href="https://github.com/wikimatze/padrinobook/pulls">pull request</a>, visit the <a href="http://facebook.com/padrinobook">fanpage</a>, or follow <a href="https://twitter.com/padrinobook">@padrinobook</a>.
  </div>
</div>
<br>

<div class="row">
  <div class="twelve columns">
    <li class="info badge author primary">
      Recent commits
    </li>
    <div id="github-commits"></div>
  </div>
</div>
<br>

<!--End mc_embed_signup-->

<!--
<div class="row">
  <div class="seven columns">
    <div class="pretty large secondary btn"><a href="https://leanpub.com/padrinobook">Buy It now</a></div>
    or <a href="/book_index.html">read online for free</a>.
    <p>(book is available as PDF, EPUB, or MOBI)</p>
  </div>
</div>

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
