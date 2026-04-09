<script lang="ts">
  import { projects } from '$lib/data.ts';
</script>

<section class="py-24 bg-white" id="projects">
  <div class="max-w-[1100px] mx-auto px-8">

    <p class="flex items-center gap-3 font-['JetBrains_Mono'] text-xs text-[#94a3b8] uppercase tracking-[0.15em] mb-4">
      03 / Projects
    </p>
    <h2 class="font-['DM_Sans'] font-extrabold text-[#0f172a] mb-12 text-[clamp(2rem,5vw,3rem)]">
      Things I've Shipped
    </h2>

    <div class="grid grid-cols-[repeat(auto-fill,minmax(320px,1fr))] gap-6">
      {#each projects as project, i}
        <article class="flex flex-col gap-4 bg-white rounded-xl border border-[#e2e8f0] shadow-sm p-7 transition-all duration-200 hover:shadow-md hover:-translate-y-0.5">

          <div class="flex justify-between items-center">
            <span class="font-['JetBrains_Mono'] text-[0.7rem] text-[#94a3b8] tracking-widest">0{i + 1}</span>
            <div class="flex gap-3">
              {#if project.github}
                <a href={project.github} target="_blank" rel="noopener" title="GitHub"
                   class="text-[#cbd5e1] transition-colors duration-150 hover:text-[#0f172a]">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z"/>
                  </svg>
                </a>
              {/if}
              {#if project.live}
                <a href={project.live} target="_blank" rel="noopener" title="Live"
                   class="text-[#cbd5e1] transition-colors duration-150 hover:text-[#0f172a]">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                    <polyline points="15 3 21 3 21 9"/>
                    <line x1="10" y1="14" x2="21" y2="3"/>
                  </svg>
                </a>
              {/if}
            </div>
          </div>

          <div class="w-8 h-px bg-[#e2e8f0]"></div>

          <h3 class="font-['DM_Sans'] text-[1.3rem] font-bold text-[#0f172a] leading-tight">{project.name}</h3>
          <p class="font-['JetBrains_Mono'] text-xs text-[#94a3b8] tracking-wide">{project.summary}</p>
          <p class="font-['Inter'] text-[0.9rem] text-[#334155] leading-[1.75]">{project.description}</p>

          <ul class="flex flex-col gap-1.5 flex-1 list-none">
            {#each project.highlights as h}
              <li class="highlight-item relative font-['Inter'] text-[0.85rem] text-[#64748b] pl-4">{h}</li>
            {/each}
          </ul>

          <div class="flex flex-wrap gap-1.5 mt-2 pt-4 border-t border-[#e2e8f0]">
            {#each project.stack as tech}
              <span class="font-['JetBrains_Mono'] text-[0.7rem] px-2.5 py-1 bg-[#f8f9fa] border border-[#e2e8f0] text-[#64748b] rounded-md">
                {tech}
              </span>
            {/each}
          </div>

        </article>
      {/each}
    </div>

  </div>
</section>
