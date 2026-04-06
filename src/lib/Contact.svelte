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
