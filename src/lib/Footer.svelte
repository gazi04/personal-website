<script lang="ts">
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
