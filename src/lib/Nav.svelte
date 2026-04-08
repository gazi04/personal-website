<script lang="ts">
  import { person } from '$lib/data.ts';

  let scrolled = false;
  let menuOpen = false;

  if (typeof window !== 'undefined') {
    window.addEventListener('scroll', () => {
      scrolled = window.scrollY > 40;
    });
  }

  const links = [
    { href: '#experience', label: 'Experience' },
    { href: '#projects', label: 'Projects' },
    { href: '#skills', label: 'Skills' },
    { href: '#blog', label: 'Writing' },
    { href: '#contact', label: 'Contact' },
  ];
</script>

<nav class:scrolled>
  <div class="nav-inner">
    <a href="/" class="nav-logo">
      <span class="logo-bracket">{`{`}</span>
      AK
      <span class="logo-bracket">{`}`}</span>
    </a>

    <ul class="nav-links">
      {#each links as link}
        <li><a href={link.href}>{link.label}</a></li>
      {/each}
    </ul>

    {#if person.available}
      <div class="nav-status">
        <span class="status-dot"></span>
        Available
      </div>
    {/if}
  </div>
</nav>
