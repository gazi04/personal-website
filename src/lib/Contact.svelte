<script>
  import { person } from '$lib/data.ts';

  let name = '';
  let email = '';
  let message = '';
  let status = 'idle'; // idle | sending | sent | error

  async function handleSubmit() {
    if (!name || !email || !message) return;
    status = 'sending';
    // Replace with your actual form endpoint (e.g. Formspree)
    // await fetch('https://formspree.io/f/YOUR_ID', { method: 'POST', ... })
    await new Promise(r => setTimeout(r, 1000));
    status = 'sent';
  }
</script>

<section class="section" id="contact">
  <div class="container">
    <p class="section-label">06 / Contact</p>
    <h2 class="section-title">Let's Build Something</h2>

    <div class="contact-layout">
      <div class="contact-left">
        <p class="contact-intro">
          Whether you have a system that needs to scale, an architecture that needs rethinking, or you just want to talk backend — I'm listening.
        </p>
        <div class="contact-links">
          <a href={`mailto:${person.email}`} class="contact-link">
            <span class="link-icon">✉</span>
            <span>{person.email}</span>
          </a>
          <a href={person.github} target="_blank" rel="noopener" class="contact-link">
            <span class="link-icon">⌥</span>
            <span>GitHub</span>
          </a>
          <a href={person.linkedin} target="_blank" rel="noopener" class="contact-link">
            <span class="link-icon">⊞</span>
            <span>LinkedIn</span>
          </a>
        </div>

        {#if person.available}
          <div class="availability-badge">
            <span class="avail-dot"></span>
            <div>
              <p class="avail-title">Currently available</p>
              <p class="avail-sub">{person.availabilityNote}</p>
            </div>
          </div>
        {/if}
      </div>

      <form class="contact-form" on:submit|preventDefault={handleSubmit}>
        {#if status === 'sent'}
          <div class="form-success">
            <p class="success-title">Message received.</p>
            <p class="success-sub">I'll get back to you within 24 hours.</p>
          </div>
        {:else}
          <div class="form-row">
            <div class="form-group">
              <label for="name" class="form-label">Name</label>
              <input id="name" type="text" bind:value={name} placeholder="Your name" class="form-input" required />
            </div>
            <div class="form-group">
              <label for="email" class="form-label">Email</label>
              <input id="email" type="email" bind:value={email} placeholder="you@company.com" class="form-input" required />
            </div>
          </div>
          <div class="form-group">
            <label for="message" class="form-label">Message</label>
            <textarea id="message" bind:value={message} placeholder="Tell me about the problem you're trying to solve..." class="form-input form-textarea" rows="5" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary form-submit" disabled={status === 'sending'}>
            {status === 'sending' ? 'Sending...' : 'Send message →'}
          </button>
        {/if}
      </form>
    </div>
  </div>
</section>

<style>
  .contact-layout {
    display: grid;
    grid-template-columns: 1fr 1.4fr;
    gap: 5rem;
    align-items: start;
  }

  .contact-intro {
    font-size: 1rem;
    color: var(--text-2);
    line-height: 1.8;
    margin-bottom: 2rem;
  }

  .contact-links {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
    margin-bottom: 2rem;
  }

  .contact-link {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-size: 0.9rem;
    color: var(--text-2);
    transition: color 0.15s;
  }

  .contact-link:hover { color: var(--accent); }

  .link-icon {
    font-size: 0.8rem;
    width: 1.5rem;
    color: var(--text-3);
  }

  .availability-badge {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem 1.25rem;
    background: var(--green-bg);
    border: 1px solid rgba(74, 222, 128, 0.15);
    border-radius: 10px;
  }

  .avail-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--green);
    flex-shrink: 0;
    animation: pulse 2s infinite;
  }

  @keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.3; }
  }

  .avail-title {
    font-family: var(--mono);
    font-size: 0.8rem;
    color: var(--green);
  }

  .avail-sub {
    font-size: 0.8rem;
    color: var(--text-3);
  }

  .contact-form {
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
  }

  .form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
  }

  .form-group {
    display: flex;
    flex-direction: column;
    gap: 0.4rem;
  }

  .form-label {
    font-family: var(--mono);
    font-size: 0.72rem;
    color: var(--text-3);
    letter-spacing: 0.08em;
    text-transform: uppercase;
  }

  .form-input {
    background: var(--bg-3);
    border: 1px solid var(--border-2);
    border-radius: 8px;
    padding: 0.7rem 1rem;
    color: var(--text);
    font-family: var(--sans);
    font-size: 0.9rem;
    transition: border-color 0.15s;
    outline: none;
    width: 100%;
  }

  .form-input::placeholder { color: var(--text-3); }
  .form-input:focus { border-color: var(--accent); }

  .form-textarea { resize: vertical; min-height: 130px; }

  .form-submit { align-self: flex-start; }

  .form-success {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    padding: 2rem;
    border: 1px solid rgba(74,222,128,0.2);
    background: var(--green-bg);
    border-radius: 10px;
  }

  .success-title {
    font-family: var(--display);
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--green);
  }

  .success-sub { color: var(--text-2); font-size: 0.9rem; }

  @media (max-width: 750px) {
    .contact-layout { grid-template-columns: 1fr; gap: 3rem; }
    .form-row { grid-template-columns: 1fr; }
  }
</style>
