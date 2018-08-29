---
title: News
permalink: news
description: An overview page about the latest news around PadrinoBook - either progress on the book, new features for the website or other kind of announcement. Content of the page is also send via the newsletter.
active: news
---

<h1>News</h1>
<ul>
  {% for post in site.posts %}
    <li>
      <a href="{{ post.url }}">{{ post.title }}</a>
    </li>
  {% endfor %}
</ul>

