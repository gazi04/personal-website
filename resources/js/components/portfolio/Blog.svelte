<script lang="ts">
    let { blogPosts } = $props();
</script>

<section class="py-24 bg-white" id="blog">
    <div class="max-w-[1100px] mx-auto px-8">
        <p
            class="flex items-center gap-3 font-['JetBrains_Mono'] text-xs text-[#94a3b8] uppercase tracking-[0.15em] mb-4"
        >
            05 / Writing
        </p>
        <h2
            class="font-['DM_Sans'] font-extrabold text-[#0f172a] mb-12 text-[clamp(2rem,5vw,3rem)]"
        >
            I Think Out Loud
        </h2>

        <div class="flex flex-col">
            {#each blogPosts as post, i}
                <a
                    href={`/blog/${post.slug}`}
                    class="group grid grid-cols-[2.5rem_1fr_auto_auto] max-sm:grid-cols-[1fr_auto] items-center gap-6 py-7 px-4 border-b border-[#e2e8f0] first:border-t first:border-t-[#e2e8f0] rounded-lg transition-all duration-150 hover:bg-[#f8f9fa]"
                >
                    <span
                        class="font-['JetBrains_Mono'] text-[0.7rem] text-[#cbd5e1] tracking-widest max-sm:hidden"
                    >
                        0{i + 1}
                    </span>

                    <div class="flex flex-col gap-1.5">
                        <h3
                            class="font-['DM_Sans'] text-[1.1rem] font-semibold text-[#0f172a] leading-tight"
                        >
                            {post.title}
                        </h3>
                        <p
                            class="font-['Inter'] text-[0.85rem] text-[#64748b] leading-relaxed"
                        >
                            {post.summary}
                        </p>
                    </div>

                    <div
                        class="flex flex-col items-end gap-1 font-['JetBrains_Mono'] text-xs text-[#94a3b8] whitespace-nowrap"
                    >
                        <span>{post.readTime}</span>
                        <span>{post.date}</span>
                    </div>

                    <span
                        class="text-[#cbd5e1] text-base transition-all duration-150 max-sm:hidden group-hover:translate-x-1 group-hover:text-[#0f172a]"
                    >
                        →
                    </span>
                </a>
            {/each}
        </div>
    </div>
</section>
