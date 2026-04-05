<script>
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

<style>
  .posts {
    display: flex;
    flex-direction: column;
  }

  .post-row {
    display: grid;
    grid-template-columns: 2.5rem 1fr auto auto;
    align-items: center;
    gap: 1.5rem;
    padding: 1.75rem 0;
    border-bottom: 1px solid var(--border);
    transition: background 0.15s;
    border-radius: 8px;
    padding-left: 0.5rem;
    padding-right: 0.5rem;
  }

  .post-row:first-child { border-top: 1px solid var(--border); }

  .post-row:hover { background: var(--bg-3); }
  .post-row:hover .post-arrow { transform: translateX(4px); color: var(--accent); }

  .post-num {
    font-size: 0.7rem;
    color: var(--text-3);
    letter-spacing: 0.1em;
  }

  .post-body { display: flex; flex-direction: column; gap: 0.35rem; }

  .post-title {
    font-family: var(--display);
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--text);
    line-height: 1.3;
  }

  .post-summary {
    font-size: 0.85rem;
    color: var(--text-3);
    line-height: 1.6;
  }

  .post-meta {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    gap: 0.25rem;
    font-size: 0.75rem;
    color: var(--text-3);
    white-space: nowrap;
  }

  .post-arrow {
    color: var(--text-3);
    font-size: 1rem;
    transition: transform 0.15s, color 0.15s;
  }

  @media (max-width: 650px) {
    .post-row { grid-template-columns: 1fr auto; grid-template-rows: auto auto; }
    .post-num { display: none; }
    .post-arrow { display: none; }
    .post-meta { flex-direction: row; align-items: center; gap: 0.75rem; }
  }
</style>
