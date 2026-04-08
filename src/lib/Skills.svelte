<script lang="ts">
  import { skills } from '$lib/data.ts';
</script>

<section class="py-24" id="skills">
  <div class="max-w-[1100px] mx-auto px-8">

    <p class="flex items-center gap-3 font-['JetBrains_Mono'] text-xs text-[#e8a820] uppercase tracking-[0.15em] mb-4">
      04 / Skills
    </p>
    <h2 class="font-['Syne'] font-extrabold text-[#f0ede8] mb-12 text-[clamp(2rem,5vw,3rem)]">
      My Stack
    </h2>

    <div class="grid grid-cols-[repeat(auto-fill,minmax(200px,1fr))] gap-8 mb-16">
      {#each skills as group}
        <div class="flex flex-col gap-3">
          <h3 class="font-['JetBrains_Mono'] text-[0.72rem] uppercase tracking-[0.12em] text-[#e8a820] pb-2 border-b border-[#2a2a2a]">
            {group.category}
          </h3>
          <ul class="list-none flex flex-col gap-2">
            {#each group.items as item}
              <li class="flex items-center gap-2.5 text-[0.9rem] text-[#a09d99] transition-colors duration-150 hover:text-[#f0ede8]">
                <span class="w-1 h-1 rounded-full bg-[#e8a820] shrink-0"></span>
                {item}
              </li>
            {/each}
          </ul>
        </div>
      {/each}
    </div>

    <div class="border-l-[3px] border-[#e8a820] pl-8 py-6 bg-[#1f1800] rounded-r-lg">
      <p class="font-['Syne'] text-lg font-semibold text-[#f0ede8] leading-relaxed mb-3">
        "A system is only as good as its weakest failure mode. I design with the worst case in mind first."
      </p>
      <span class="font-['JetBrains_Mono'] text-xs text-[#6b6866] tracking-wide">— My engineering philosophy</span>
    </div>

  </div>
</section>
