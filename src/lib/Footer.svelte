<script>
  import { person } from '$lib/data.ts';
  const year = new Date().getFullYear();
</script>

<footer>
  <div class="container">
    <div class="footer-inner">
      <p class="footer-name mono">{person.name}</p>
      <p class="footer-copy">© {year} — Built with Svelte</p>
      <div class="footer-links">
        <a href={person.github} target="_blank" rel="noopener">GitHub</a>
        <a href={person.linkedin} target="_blank" rel="noopener">LinkedIn</a>
        <a href={`mailto:${person.email}`}>Email</a>
      </div>
    </div>
  </div>
</footer>

<style>
  footer {
    padding: 2rem 0;
    border-top: 1px solid var(--border);
  }

  .footer-inner {
    display: flex;
    align-items: center;
    gap: 2rem;
  }

  .footer-name {
    font-size: 0.8rem;
    color: var(--accent);
    font-weight: 500;
    margin-right: auto;
  }

  .footer-copy {
    font-size: 0.75rem;
    color: var(--text-3);
  }

  .footer-links {
    display: flex;
    gap: 1.5rem;
  }

  .footer-links a {
    font-family: var(--mono);
    font-size: 0.72rem;
    color: var(--text-3);
    letter-spacing: 0.05em;
    transition: color 0.15s;
  }

  .footer-links a:hover { color: var(--text); }

  @media (max-width: 600px) {
    .footer-inner { flex-wrap: wrap; gap: 1rem; }
    .footer-copy { order: 3; width: 100%; }
  }
</style>
