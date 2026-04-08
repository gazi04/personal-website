<script lang="ts">
  import { blogPosts } from '$lib/data.ts';
</script>

<section class="py-24 bg-[#111111]" id="blog">
  <div class="max-w-[1100px] mx-auto px-8">

    <p class="flex items-center gap-3 font-['JetBrains_Mono'] text-xs text-[#e8a820] uppercase tracking-[0.15em] mb-4">
      05 / Writing
    </p>
    <h2 class="font-['Syne'] font-extrabold text-[#f0ede8] mb-12 text-[clamp(2rem,5vw,3rem)]">
      I Think Out Loud
    </h2>

    <div class="flex flex-col">
      {#each blogPosts as post, i}
        <a href={`/blog/${post.slug}`}
           class="post-row group grid grid-cols-[2.5rem_1fr_auto_auto] max-sm:grid-cols-[1fr_auto] items-center gap-6 py-7 px-2 border-b border-[#2a2a2a] first:border-t first:border-t-[#2a2a2a] rounded-lg transition-colors duration-150 hover:bg-[#1a1a1a]">

          <span class="font-['JetBrains_Mono'] text-[0.7rem] text-[#6b6866] tracking-widest max-sm:hidden">
            0{i + 1}
          </span>

          <div class="flex flex-col gap-1.5">
            <h3 class="font-['Syne'] text-[1.1rem] font-semibold text-[#f0ede8] leading-tight">{post.title}</h3>
            <p class="text-[0.85rem] text-[#6b6866] leading-relaxed">{post.summary}</p>
          </div>

          <div class="flex flex-col items-end gap-1 font-['JetBrains_Mono'] text-xs text-[#6b6866] whitespace-nowrap">
            <span>{post.readTime}</span>
            <span>{post.date}</span>
          </div>

          <span class="post-arrow text-[#6b6866] text-base transition-all duration-150 max-sm:hidden group-hover:translate-x-1 group-hover:text-[#e8a820]">
            →
          </span>

        </a>
      {/each}
    </div>

  </div>
</section>
