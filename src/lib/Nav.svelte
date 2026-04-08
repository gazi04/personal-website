<script lang="ts">
  import { person } from '$lib/data.ts';

  let scrolled = $state(false);

  if (typeof window !== 'undefined') {
    window.addEventListener('scroll', () => {
      scrolled = window.scrollY > 40;
    });
  }

  const links = [
    { href: '#experience', label: 'Experience' },
    { href: '#projects',   label: 'Projects' },
    { href: '#skills',     label: 'Skills' },
    { href: '#blog',       label: 'Writing' },
    { href: '#contact',    label: 'Contact' },
  ];
</script>

<nav class="{scrolled
  ? 'bg-[#0a0a0a]/90 backdrop-blur-md border-b border-[#2a2a2a]'
  : ''} fixed top-0 left-0 right-0 z-50 px-8 py-5 transition-all duration-200">

  <div class="max-w-[1100px] mx-auto flex items-center gap-8">

    <a href="/" class="font-['Syne'] font-extrabold text-lg text-[#f0ede8] tracking-wide mr-auto">
      <span class="text-[#e8a820]">{`{`}</span>AK<span class="text-[#e8a820]">{`}`}</span>
    </a>

    <ul class="hidden md:flex list-none gap-8">
      {#each links as link}
        <li>
          <a href={link.href}
             class="font-['JetBrains_Mono'] text-xs text-[#a09d99] tracking-wide transition-colors duration-150 hover:text-[#f0ede8]">
            {link.label}
          </a>
        </li>
      {/each}
    </ul>

    {#if person.available}
      <div class="flex items-center gap-1.5 font-['JetBrains_Mono'] text-[0.7rem] text-[#4ade80] bg-[#052a12] px-3 py-1.5 rounded-full border border-[#4ade80]/20">
        <span class="w-1.5 h-1.5 rounded-full bg-[#4ade80] animate-pulse"></span>
        Available
      </div>
    {/if}

  </div>
</nav>
