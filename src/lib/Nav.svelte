<script>
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

<style>
  nav {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 100;
    padding: 1.25rem 2rem;
    transition: background 0.2s ease, border-bottom 0.2s ease;
  }

  nav.scrolled {
    background: rgba(10,10,10,0.9);
    backdrop-filter: blur(12px);
    border-bottom: 1px solid var(--border);
  }

  .nav-inner {
    max-width: 1100px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    gap: 2rem;
  }

  .nav-logo {
    font-family: var(--display);
    font-weight: 800;
    font-size: 1.1rem;
    color: var(--text);
    letter-spacing: 0.05em;
    margin-right: auto;
  }

  .logo-bracket { color: var(--accent); }

  .nav-links {
    display: flex;
    list-style: none;
    gap: 2rem;
  }

  .nav-links a {
    font-family: var(--mono);
    font-size: 0.78rem;
    color: var(--text-2);
    transition: color 0.15s;
    letter-spacing: 0.05em;
  }

  .nav-links a:hover { color: var(--text); }

  .nav-status {
    display: flex;
    align-items: center;
    gap: 0.4rem;
    font-family: var(--mono);
    font-size: 0.7rem;
    color: var(--green);
    background: var(--green-bg);
    padding: 0.3rem 0.7rem;
    border-radius: 999px;
    border: 1px solid rgba(74, 222, 128, 0.2);
  }

  .status-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--green);
    animation: pulse 2s infinite;
  }

  @keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.4; }
  }

  @media (max-width: 700px) {
    .nav-links { display: none; }
  }
</style>
