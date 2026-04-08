<script lang="ts">
  import { person } from '$lib/data.ts';
</script>

<section class="relative min-h-screen flex items-center overflow-hidden pt-32 pb-20">

  <!-- Grid background (class defined in app.css) -->
  <div class="hero-grid-bg absolute inset-0 opacity-30 pointer-events-none"></div>

  <!-- Amber glow -->
  <div class="absolute top-1/4 -right-1/4 w-[600px] h-[600px] rounded-full pointer-events-none"
       style="background: radial-gradient(circle, rgba(232,168,32,0.06) 0%, transparent 70%);">
  </div>

  <div class="relative max-w-[1100px] mx-auto px-8 w-full">

    <!-- Eyebrow -->
    <div class="flex items-center gap-4 font-['JetBrains_Mono'] text-xs text-[#e8a820] uppercase tracking-widest mb-6">
      <span>01</span>
      <span class="block w-10 h-px bg-[#e8a820] opacity-60"></span>
      <span>Backend &amp; Systems</span>
    </div>

    <!-- Name -->
    <h1 class="font-['Syne'] font-extrabold leading-[0.95] tracking-tight mb-6 max-w-[800px] text-[clamp(3.5rem,10vw,7rem)]">
      {person.name}
    </h1>

    <!-- Tagline -->
    <p class="font-['Syne'] font-semibold text-[#e8a820] mb-6 max-w-[600px] text-[clamp(1.1rem,2.5vw,1.5rem)]">
      {person.tagline}
    </p>

    <!-- Bio -->
    <p class="text-base text-[#a09d99] max-w-[580px] leading-[1.8] mb-10">
      {person.bio}
    </p>

    <!-- CTAs -->
    <div class="flex flex-wrap gap-4 mb-16">
      <a href="#projects"
         class="inline-flex items-center gap-2 font-['JetBrains_Mono'] text-xs font-medium px-5 py-2.5 rounded-md bg-[#e8a820] text-black border border-[#e8a820] tracking-wide transition-all duration-150 hover:bg-[#f5bd3a] hover:border-[#f5bd3a]">
        See my work →
      </a>
      <a href="#contact"
         class="inline-flex items-center gap-2 font-['JetBrains_Mono'] text-xs px-5 py-2.5 rounded-md text-[#a09d99] border border-[#3a3a3a] tracking-wide transition-all duration-150 hover:border-[#a09d99] hover:text-[#f0ede8]">
        Get in touch
      </a>
    </div>

    <!-- Stats -->
    <div class="flex items-center gap-8">
      <div class="flex flex-col gap-1">
        <span class="font-['Syne'] text-[1.75rem] font-extrabold text-[#f0ede8] leading-none">2+</span>
        <span class="font-['JetBrains_Mono'] text-[0.7rem] text-[#6b6866] uppercase tracking-widest">Years building</span>
      </div>
      <div class="w-px h-10 bg-[#3a3a3a]"></div>
      <div class="flex flex-col gap-1">
        <span class="font-['Syne'] text-[1.75rem] font-extrabold text-[#f0ede8] leading-none">3</span>
        <span class="font-['JetBrains_Mono'] text-[0.7rem] text-[#6b6866] uppercase tracking-widest">Core specialties</span>
      </div>
      <div class="w-px h-10 bg-[#3a3a3a]"></div>
      <div class="flex flex-col gap-1">
        <span class="font-['Syne'] text-[1.75rem] font-extrabold text-[#f0ede8] leading-none">99.9%</span>
        <span class="font-['JetBrains_Mono'] text-[0.7rem] text-[#6b6866] uppercase tracking-widest">Uptime target</span>
      </div>
    </div>

  </div>
</section>
