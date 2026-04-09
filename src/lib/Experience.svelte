<script lang="ts">
  import { experience } from '$lib/data.ts';
</script>

<section class="py-24 bg-[#f8f9fa]" id="experience">
  <div class="max-w-[1100px] mx-auto px-8">

    <p class="flex items-center gap-3 font-['JetBrains_Mono'] text-xs text-[#94a3b8] uppercase tracking-[0.15em] mb-4">
      02 / Experience
    </p>
    <h2 class="font-['DM_Sans'] font-extrabold text-[#0f172a] mb-12 text-[clamp(2rem,5vw,3rem)]">
      Where I've Built
    </h2>

    <div class="flex flex-col gap-6">
      {#each experience as job, i}
        <div class="bg-white rounded-xl border border-[#e2e8f0] shadow-sm p-8 grid grid-cols-[180px_1fr] max-sm:grid-cols-1 gap-8">

          <div class="pt-1 flex flex-col gap-2">
            <span class="font-['JetBrains_Mono'] text-xs text-[#94a3b8] tracking-wide">{job.period}</span>
            <span class="font-['DM_Sans'] text-[2rem] font-extrabold text-[#f1f5f9] leading-none max-sm:hidden">
              0{i + 1}
            </span>
          </div>

          <div class="flex flex-col gap-4">
            <div>
              <h3 class="font-['DM_Sans'] text-xl font-bold text-[#0f172a] mb-1">{job.role}</h3>
              <p class="font-['JetBrains_Mono'] text-xs text-[#64748b]">{job.company}</p>
            </div>
            <p class="font-['Inter'] text-[0.95rem] text-[#334155] leading-[1.8]">{job.description}</p>
            <div class="flex flex-wrap gap-1.5">
              {#each job.tags as tag}
                <span class="font-['JetBrains_Mono'] text-[0.7rem] px-2.5 py-1 bg-[#f8f9fa] border border-[#e2e8f0] text-[#64748b] rounded-md">
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
