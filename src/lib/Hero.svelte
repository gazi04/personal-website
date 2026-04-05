<script>
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

<style>
  .hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
    padding: 8rem 0 5rem;
  }

  .hero-grid-bg {
    position: absolute;
    inset: 0;
    background-image:
      linear-gradient(var(--border) 1px, transparent 1px),
      linear-gradient(90deg, var(--border) 1px, transparent 1px);
    background-size: 60px 60px;
    opacity: 0.3;
    pointer-events: none;
  }

  .hero-glow {
    position: absolute;
    top: 20%;
    right: -10%;
    width: 600px;
    height: 600px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(232, 168, 32, 0.06) 0%, transparent 70%);
    pointer-events: none;
  }

  .container { position: relative; }

  .hero-eyebrow {
    display: flex;
    align-items: center;
    gap: 1rem;
    font-family: var(--mono);
    font-size: 0.75rem;
    color: var(--accent);
    letter-spacing: 0.1em;
    text-transform: uppercase;
    margin-bottom: 1.5rem;
  }

  .hero-eyebrow .line {
    display: block;
    width: 40px;
    height: 1px;
    background: var(--accent);
    opacity: 0.6;
  }

  .hero-name {
    font-size: clamp(3.5rem, 10vw, 7rem);
    font-weight: 800;
    line-height: 0.95;
    letter-spacing: -0.02em;
    margin-bottom: 1.5rem;
    max-width: 800px;
  }

  .hero-tagline {
    font-family: var(--display);
    font-size: clamp(1.1rem, 2.5vw, 1.5rem);
    font-weight: 600;
    color: var(--accent);
    margin-bottom: 1.5rem;
    max-width: 600px;
  }

  .hero-bio {
    font-size: 1rem;
    color: var(--text-2);
    max-width: 580px;
    line-height: 1.8;
    margin-bottom: 2.5rem;
  }

  .hero-actions {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    margin-bottom: 4rem;
  }

  .hero-stats {
    display: flex;
    align-items: center;
    gap: 2rem;
  }

  .stat {
    display: flex;
    flex-direction: column;
    gap: 0.2rem;
  }

  .stat-num {
    font-family: var(--display);
    font-size: 1.75rem;
    font-weight: 800;
    color: var(--text);
    line-height: 1;
  }

  .stat-label {
    font-family: var(--mono);
    font-size: 0.7rem;
    color: var(--text-3);
    text-transform: uppercase;
    letter-spacing: 0.1em;
  }

  .stat-divider {
    width: 1px;
    height: 40px;
    background: var(--border-2);
  }

  @media (max-width: 600px) {
    .hero-stats { gap: 1.25rem; }
    .stat-num { font-size: 1.35rem; }
  }
</style>
