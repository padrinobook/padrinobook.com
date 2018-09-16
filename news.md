---
title: News
description: An overview page about the latest news around PadrinoBook - either progress on the book, new features for the website or other kind of announcement. Content of the page is also send via the newsletter.
permalink: news/
active: news
---

<ul>
  {% for post in site.posts %}
    <li>
      <a href="{{ post.url }}">{{ post.title }}</a>
    </li>
  {% endfor %}
</ul>

