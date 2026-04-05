<script>
  import { projects } from '$lib/data.ts';
</script>

<section class="section" id="projects" style="background: var(--bg-2);">
  <div class="container">
    <p class="section-label">03 / Projects</p>
    <h2 class="section-title">Things I've Shipped</h2>

    <div class="projects-grid">
      {#each projects as project, i}
        <article class="project-card">
          <div class="card-top">
            <span class="project-num mono">0{i + 1}</span>
            <div class="card-links">
              {#if project.github}
                <a href={project.github} target="_blank" rel="noopener" class="card-link" title="GitHub">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z"/>
                  </svg>
                </a>
              {/if}
              {#if project.live}
                <a href={project.live} target="_blank" rel="noopener" class="card-link" title="Live">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                    <polyline points="15 3 21 3 21 9"/>
                    <line x1="10" y1="14" x2="21" y2="3"/>
                  </svg>
                </a>
              {/if}
            </div>
          </div>

          <h3 class="project-name">{project.name}</h3>
          <p class="project-summary">{project.summary}</p>
          <p class="project-desc">{project.description}</p>

          <ul class="project-highlights">
            {#each project.highlights as h}
              <li>{h}</li>
            {/each}
          </ul>

          <div class="card-stack">
            {#each project.stack as tech}
              <span class="tag">{tech}</span>
            {/each}
          </div>
        </article>
      {/each}
    </div>
  </div>
</section>

<style>
  .projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 1.5rem;
  }

  .project-card {
    background: var(--bg);
    border: 1px solid var(--border);
    border-radius: 12px;
    padding: 1.75rem;
    display: flex;
    flex-direction: column;
    gap: 0.85rem;
    transition: border-color 0.2s ease, transform 0.2s ease;
  }

  .project-card:hover {
    border-color: var(--border-2);
    transform: translateY(-3px);
  }

  .card-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .project-num {
    font-size: 0.7rem;
    color: var(--accent);
    letter-spacing: 0.1em;
  }

  .card-links {
    display: flex;
    gap: 0.75rem;
  }

  .card-link {
    color: var(--text-3);
    transition: color 0.15s;
  }

  .card-link:hover { color: var(--text); }

  .project-name {
    font-family: var(--display);
    font-size: 1.4rem;
    font-weight: 700;
    color: var(--text);
    line-height: 1.2;
  }

  .project-summary {
    font-family: var(--mono);
    font-size: 0.75rem;
    color: var(--accent);
    letter-spacing: 0.05em;
  }

  .project-desc {
    font-size: 0.9rem;
    color: var(--text-2);
    line-height: 1.75;
  }

  .project-highlights {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 0.4rem;
    flex: 1;
  }

  .project-highlights li {
    font-size: 0.85rem;
    color: var(--text-2);
    padding-left: 1rem;
    position: relative;
  }

  .project-highlights li::before {
    content: '→';
    position: absolute;
    left: 0;
    color: var(--accent);
    font-size: 0.75rem;
  }

  .card-stack {
    display: flex;
    flex-wrap: wrap;
    gap: 0.4rem;
    margin-top: 0.5rem;
    padding-top: 1rem;
    border-top: 1px solid var(--border);
  }
</style>
