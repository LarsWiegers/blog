---
title: Overview
date: 2021-06-22
description: I created my first PHP package and it was actually fun
---
<script setup>
import { data as posts } from './.vitepress/theme/blog-posts.data.js';
</script>

  # All Blog Posts
  <ul>
    <li v-for="post of posts">
      <a :href="post.url">{{ post.title }}</a>
    </li>
  </ul>
