<script lang="ts">
  import { marked } from 'marked';
  import Footer from '@/components/portfolio/Footer.svelte';

  let { post, person } = $props();
  let scrolled = $state(false);

  if (typeof window !== 'undefined') {
      window.addEventListener('scroll', () => {
          scrolled = window.scrollY > 40;
      });
  }


  const formattedDate = $derived(new Date(post.published_at).toLocaleDateString('en-US', {
    year: 'numeric',
    month: 'long',
    day: 'numeric',
  }));

  const renderedBody = $derived(marked.parse(post.body));
</script>

<svelte:head>
  <title>{post.title}</title>
  <meta name="description" content={post.summary} />
</svelte:head>

<main class="min-h-screen bg-white pt-32 pb-24">
  <div class="max-w-[720px] mx-auto px-8">

    <a href="/home"
       class="inline-flex items-center gap-2 font-['JetBrains_Mono'] text-xs text-[#94a3b8] tracking-wide transition-colors duration-150 hover:text-[#0f172a] mb-12">
      ← Back
    </a>

    {#if post.cover_image}
      <img
        src={`/storage/${post.cover_image}`}
        alt={post.title}
        class="w-full h-[360px] object-cover rounded-xl border border-[#e2e8f0] mb-12"
      />
    {/if}

    <header class="mb-12">
      <div class="flex items-center gap-4 font-['JetBrains_Mono'] text-xs text-[#94a3b8] uppercase tracking-widest mb-6">
        <span>{formattedDate}</span>
        <span class="w-1 h-1 rounded-full bg-[#cbd5e1]"></span>
        <span>{post.read_time} min read</span>
      </div>

      <h1 class="font-['DM_Sans'] font-extrabold text-[#0f172a] leading-tight mb-4 text-[clamp(2rem,5vw,3rem)]">
        {post.title}
      </h1>

      <p class="font-['Inter'] text-lg text-[#64748b] leading-relaxed">
        {post.summary}
      </p>
    </header>

    <div class="w-full h-px bg-[#e2e8f0] mb-12"></div>

    <article class="prose">
      {@html renderedBody}
    </article>

  </div>
</main>

<Footer {person} />

<style>
  /* Prose styles since Tailwind doesn't style raw HTML by default */
  .prose :global(h1),
  .prose :global(h2),
  .prose :global(h3),
  .prose :global(h4) {
    font-family: 'DM Sans', sans-serif;
    font-weight: 700;
    color: #0f172a;
    margin-top: 2rem;
    margin-bottom: 0.75rem;
    line-height: 1.2;
  }

  .prose :global(h2) { font-size: 1.5rem; }
  .prose :global(h3) { font-size: 1.2rem; }

  .prose :global(p) {
    font-family: 'Inter', sans-serif;
    font-size: 1rem;
    color: #334155;
    line-height: 1.85;
    margin-bottom: 1.5rem;
  }

  .prose :global(a) {
    color: #0f172a;
    text-decoration: underline;
    text-underline-offset: 3px;
    transition: color 0.15s;
  }

  .prose :global(a:hover) { color: #64748b; }

  .prose :global(code) {
    font-family: 'JetBrains Mono', monospace;
    font-size: 0.85em;
    background: #f8f9fa;
    border: 1px solid #e2e8f0;
    padding: 0.15em 0.4em;
    border-radius: 4px;
    color: #0f172a;
  }

  .prose :global(pre) {
    background: #0f172a;
    border-radius: 10px;
    padding: 1.5rem;
    overflow-x: auto;
    margin-bottom: 1.5rem;
  }

  .prose :global(pre code) {
    background: transparent;
    border: none;
    padding: 0;
    color: #e2e8f0;
    font-size: 0.875rem;
    line-height: 1.7;
  }

  .prose :global(blockquote) {
    border-left: 3px solid #0f172a;
    padding-left: 1.5rem;
    margin-left: 0;
    color: #64748b;
    font-style: italic;
    margin-bottom: 1.5rem;
  }

  .prose :global(ul),
  .prose :global(ol) {
    font-family: 'Inter', sans-serif;
    color: #334155;
    padding-left: 1.5rem;
    margin-bottom: 1.5rem;
    line-height: 1.85;
  }

  .prose :global(li) { margin-bottom: 0.4rem; }

  .prose :global(hr) {
    border: none;
    border-top: 1px solid #e2e8f0;
    margin: 2.5rem 0;
  }

  .prose :global(img) {
    width: 100%;
    border-radius: 10px;
    border: 1px solid #e2e8f0;
    margin-bottom: 1.5rem;
  }
</style>
