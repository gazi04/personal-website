<script lang="ts">
  import { person } from '$lib/data.ts';
</script>

<section class="hero">
  <div class="container">
    <div class="hero-eyebrow">
      <span class="mono">01</span>
      <span class="line"></span>
      <span>Backend & Systems</span>
    </div>

    <h1 class="hero-name">{person.name}</h1>

    <p class="hero-tagline">{person.tagline}</p>

    <p class="hero-bio">{person.bio}</p>

    <div class="hero-actions">
      <a href="#projects" class="btn btn-primary">See my work →</a>
      <a href="#contact" class="btn btn-ghost">Get in touch</a>
    </div>

    <div class="hero-stats">
      <div class="stat">
        <span class="stat-num">2+</span>
        <span class="stat-label">Years building</span>
      </div>
      <div class="stat-divider"></div>
      <div class="stat">
        <span class="stat-num">3</span>
        <span class="stat-label">Core specialties</span>
      </div>
      <div class="stat-divider"></div>
      <div class="stat">
        <span class="stat-num">99.9%</span>
        <span class="stat-label">Uptime target</span>
      </div>
    </div>
  </div>

  <div class="hero-grid-bg" aria-hidden="true"></div>
  <div class="hero-glow" aria-hidden="true"></div>
</section>
