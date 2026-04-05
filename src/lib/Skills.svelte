<script>
  import { skills } from '$lib/data.ts';
</script>

<section class="section" id="skills">
  <div class="container">
    <p class="section-label">04 / Skills</p>
    <h2 class="section-title">My Stack</h2>

    <div class="skills-grid">
      {#each skills as group}
        <div class="skill-group">
          <h3 class="group-title">{group.category}</h3>
          <ul class="skill-list">
            {#each group.items as item}
              <li class="skill-item">
                <span class="skill-dot"></span>
                {item}
              </li>
            {/each}
          </ul>
        </div>
      {/each}
    </div>

    <div class="philosophy">
      <div class="philosophy-inner">
        <p class="philosophy-quote">
          "A system is only as good as its weakest failure mode. I design with the worst case in mind first."
        </p>
        <span class="philosophy-attr mono">— My engineering philosophy</span>
      </div>
    </div>
  </div>
</section>

<style>
  .skills-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 2rem;
    margin-bottom: 4rem;
  }

  .skill-group {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
  }

  .group-title {
    font-family: var(--mono);
    font-size: 0.72rem;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    color: var(--accent);
    padding-bottom: 0.5rem;
    border-bottom: 1px solid var(--border);
  }

  .skill-list {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
  }

  .skill-item {
    display: flex;
    align-items: center;
    gap: 0.6rem;
    font-size: 0.9rem;
    color: var(--text-2);
    transition: color 0.15s;
  }

  .skill-item:hover { color: var(--text); }

  .skill-dot {
    width: 4px;
    height: 4px;
    border-radius: 50%;
    background: var(--accent);
    flex-shrink: 0;
  }

  .philosophy {
    border-left: 3px solid var(--accent);
    padding: 1.5rem 2rem;
    background: var(--accent-bg);
    border-radius: 0 8px 8px 0;
  }

  .philosophy-inner {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
  }

  .philosophy-quote {
    font-family: var(--display);
    font-size: 1.15rem;
    font-weight: 600;
    color: var(--text);
    line-height: 1.5;
  }

  .philosophy-attr {
    font-size: 0.75rem;
    color: var(--text-3);
    letter-spacing: 0.05em;
  }
</style>
