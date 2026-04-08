<script lang="ts">
  import { blogPosts } from '$lib/data.ts';
</script>

<section class="section" id="blog" style="background: var(--bg-2);">
  <div class="container">
    <p class="section-label">05 / Writing</p>
    <h2 class="section-title">I Think Out Loud</h2>

    <div class="posts">
      {#each blogPosts as post, i}
        <a href={`/blog/${post.slug}`} class="post-row">
          <span class="post-num mono">0{i + 1}</span>
          <div class="post-body">
            <h3 class="post-title">{post.title}</h3>
            <p class="post-summary">{post.summary}</p>
          </div>
          <div class="post-meta">
            <span class="mono">{post.readTime}</span>
            <span class="post-date">{post.date}</span>
          </div>
          <span class="post-arrow">→</span>
        </a>
      {/each}
    </div>
  </div>
</section>
