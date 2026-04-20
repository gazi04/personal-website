<script lang="ts">
let { scrolled, links } = $props();
</script>

<nav class="{scrolled
  ? 'bg-white/95 backdrop-blur-md shadow-sm border-b border-[#e2e8f0]'
  : ''} fixed top-0 left-0 right-0 z-50 px-8 py-5 transition-all duration-300">

  <div class="max-w-[1100px] mx-auto flex items-center gap-8">

    <a href="/" class="font-['DM_Sans'] font-extrabold text-lg text-[#0f172a] tracking-wide mr-auto">
      <span class="text-[#94a3b8]">{`{`}</span>AK<span class="text-[#94a3b8]">{`}`}</span>
    </a>

    <ul class="hidden md:flex list-none gap-8">
      {#each links as link}
        <li>
          <a href={link.href}
             class="font-['JetBrains_Mono'] text-xs text-[#64748b] tracking-wide transition-colors duration-150 hover:text-[#0f172a]">
            {link.label}
          </a>
        </li>
      {/each}
    </ul>

      <div class="flex items-center gap-1.5 font-['JetBrains_Mono'] text-[0.7rem] text-[#334155] bg-[#f1f5f9] px-3 py-1.5 rounded-full border border-[#e2e8f0]">
        <span class="w-1.5 h-1.5 rounded-full bg-[#334155] animate-pulse"></span>
        Available
      </div>
  </div>
</nav>
