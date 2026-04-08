<script lang="ts">
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
