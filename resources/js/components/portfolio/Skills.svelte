<script lang="ts">
let { skills } = $props();
</script>

<section class="py-24 bg-[#f8f9fa]" id="skills">
  <div class="max-w-[1100px] mx-auto px-8">

    <p class="flex items-center gap-3 font-['JetBrains_Mono'] text-xs text-[#94a3b8] uppercase tracking-[0.15em] mb-4">
      04 / Skills
    </p>
    <h2 class="font-['DM_Sans'] font-extrabold text-[#0f172a] mb-12 text-[clamp(2rem,5vw,3rem)]">
      My Stack
    </h2>

    <div class="grid grid-cols-[repeat(auto-fill,minmax(200px,1fr))] gap-6 mb-16">
      {#each skills as group}
        <div class="bg-white rounded-xl border border-[#e2e8f0] shadow-sm p-6 flex flex-col gap-4">
          <h3 class="font-['JetBrains_Mono'] text-[0.72rem] uppercase tracking-[0.12em] text-[#94a3b8] pb-3 border-b border-[#e2e8f0]">
            {group.category}
          </h3>
          <ul class="list-none flex flex-col gap-2.5">
            {#each group.items as item}
              <li class="flex items-center gap-2.5 font-['Inter'] text-[0.9rem] text-[#334155] transition-colors duration-150 hover:text-[#0f172a]">
                <span class="w-1 h-1 rounded-full bg-[#cbd5e1] shrink-0"></span>
                {item}
              </li>
            {/each}
          </ul>
        </div>
      {/each}
    </div>

    <div class="border-l-[3px] border-[#0f172a] pl-8 py-6 bg-white rounded-r-xl shadow-sm border border-[#e2e8f0]">
      <p class="font-['DM_Sans'] text-lg font-semibold text-[#0f172a] leading-relaxed mb-3">
        "A system is only as good as its weakest failure mode. I design with the worst case in mind first."
      </p>
      <span class="font-['JetBrains_Mono'] text-xs text-[#94a3b8] tracking-wide">— My engineering philosophy</span>
    </div>

  </div>
</section>
