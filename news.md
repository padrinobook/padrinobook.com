---
title: News
permalink: news/
---
<div class="row">
  <div class="twelve columns">
    <h1>News</h1>
    <ul>
      {% for post in site.posts %}
        <li>
          <a href="{{ post.url }}">{{ post.title }}</a>
        </li>
      {% endfor %}
    </ul>
  </div>
</div>

