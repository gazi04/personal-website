<script>
  import { experience } from '$lib/data.ts';
</script>

<section class="section" id="experience">
  <div class="container">
    <p class="section-label">02 / Experience</p>
    <h2 class="section-title">Where I've Built</h2>

    <div class="timeline">
      {#each experience as job, i}
        <div class="job">
          <div class="job-meta">
            <span class="job-period mono">{job.period}</span>
          </div>
          <div class="job-body">
            <div class="job-header">
              <div>
                <h3 class="job-role">{job.role}</h3>
                <p class="job-company">{job.company}</p>
              </div>
              <span class="job-index mono">0{i + 1}</span>
            </div>
            <p class="job-desc">{job.description}</p>
            <div class="job-tags">
              {#each job.tags as tag}
                <span class="tag">{tag}</span>
              {/each}
            </div>
          </div>
        </div>
      {/each}
    </div>
  </div>
</section>

<style>
  .timeline {
    display: flex;
    flex-direction: column;
    gap: 2rem;
  }

  .job {
    display: grid;
    grid-template-columns: 200px 1fr;
    gap: 2rem;
    padding-bottom: 2rem;
    border-bottom: 1px solid var(--border);
  }

  .job:last-child { border-bottom: none; }

  .job-meta {
    padding-top: 0.3rem;
  }

  .job-period {
    font-size: 0.75rem;
    color: var(--text-3);
    letter-spacing: 0.05em;
  }

  .job-body {
    display: flex;
    flex-direction: column;
    gap: 1rem;
  }

  .job-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
  }

  .job-role {
    font-family: var(--display);
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--text);
    margin-bottom: 0.2rem;
  }

  .job-company {
    font-family: var(--mono);
    font-size: 0.8rem;
    color: var(--accent);
  }

  .job-index {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--border-2);
    line-height: 1;
  }

  .job-desc {
    color: var(--text-2);
    font-size: 0.95rem;
    line-height: 1.8;
  }

  .job-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 0.4rem;
  }

  @media (max-width: 650px) {
    .job { grid-template-columns: 1fr; gap: 0.5rem; }
    .job-index { display: none; }
  }
</style>
