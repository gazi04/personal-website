<script lang="ts">
  import { experience } from '$lib/data.ts';
</script>

<section class="py-24" id="experience">
  <div class="max-w-[1100px] mx-auto px-8">

    <p class="flex items-center gap-3 font-['JetBrains_Mono'] text-xs text-[#e8a820] uppercase tracking-[0.15em] mb-4">
      02 / Experience
    </p>
    <h2 class="font-['Syne'] font-extrabold text-[#f0ede8] mb-12 text-[clamp(2rem,5vw,3rem)]">
      Where I've Built
    </h2>

    <div class="flex flex-col gap-8">
      {#each experience as job, i}
        <div class="grid grid-cols-[200px_1fr] max-sm:grid-cols-1 gap-8 pb-8 border-b border-[#2a2a2a] last:border-0">

          <div class="pt-1">
            <span class="font-['JetBrains_Mono'] text-xs text-[#6b6866] tracking-wide">{job.period}</span>
          </div>

          <div class="flex flex-col gap-4">
            <div class="flex justify-between items-start">
              <div>
                <h3 class="font-['Syne'] text-xl font-bold text-[#f0ede8] mb-1">{job.role}</h3>
                <p class="font-['JetBrains_Mono'] text-xs text-[#e8a820]">{job.company}</p>
              </div>
              <span class="font-['JetBrains_Mono'] text-4xl font-extrabold text-[#3a3a3a] leading-none max-sm:hidden">
                0{i + 1}
              </span>
            </div>
            <p class="text-[0.95rem] text-[#a09d99] leading-[1.8]">{job.description}</p>
            <div class="flex flex-wrap gap-1.5">
              {#each job.tags as tag}
                <span class="font-['JetBrains_Mono'] text-[0.7rem] px-2 py-0.5 bg-[#1a1a1a] border border-[#2a2a2a] text-[#a09d99] rounded">
                  {tag}
                </span>
              {/each}
            </div>
          </div>

        </div>
      {/each}
    </div>

  </div>
</section>
