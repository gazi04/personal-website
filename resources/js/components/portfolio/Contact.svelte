<script lang="ts">
let { person } = $props();

  let name    = $state('');
  let email   = $state('');
  let message = $state('');
  let status  = $state<'idle' | 'sending' | 'sent'>('idle');

  async function handleSubmit() {
    if (!name || !email || !message) return;
    status = 'sending';
    await new Promise(r => setTimeout(r, 1000));
    status = 'sent';
  }
</script>

<section class="py-24 bg-[#f8f9fa]" id="contact">
  <div class="max-w-[1100px] mx-auto px-8">

    <p class="flex items-center gap-3 font-['JetBrains_Mono'] text-xs text-[#94a3b8] uppercase tracking-[0.15em] mb-4">
      06 / Contact
    </p>
    <h2 class="font-['DM_Sans'] font-extrabold text-[#0f172a] mb-12 text-[clamp(2rem,5vw,3rem)]">
      Let's Build Something
    </h2>

    <div class="grid grid-cols-[1fr_1.4fr] max-md:grid-cols-1 gap-20 max-md:gap-12 items-start">

      <div>
        <p class="font-['Inter'] text-base text-[#334155] leading-[1.8] mb-8">
          Whether you have a system that needs to scale, an architecture that needs rethinking, or you just want to talk backend — I'm listening.
        </p>

        <div class="flex flex-col gap-3 mb-8">
          <a href={`mailto:${person.email}`}
             class="flex items-center gap-3 font-['Inter'] text-[0.9rem] text-[#334155] transition-colors duration-150 hover:text-[#0f172a]">
            <span class="font-['JetBrains_Mono'] text-[0.8rem] w-6 text-[#94a3b8]">✉</span>
            <span>{person.email}</span>
          </a>
          <a href={person.github} target="_blank" rel="noopener"
             class="flex items-center gap-3 font-['Inter'] text-[0.9rem] text-[#334155] transition-colors duration-150 hover:text-[#0f172a]">
            <span class="font-['JetBrains_Mono'] text-[0.8rem] w-6 text-[#94a3b8]">⌥</span>
            <span>GitHub</span>
          </a>
          <a href={person.linkedin} target="_blank" rel="noopener"
             class="flex items-center gap-3 font-['Inter'] text-[0.9rem] text-[#334155] transition-colors duration-150 hover:text-[#0f172a]">
            <span class="font-['JetBrains_Mono'] text-[0.8rem] w-6 text-[#94a3b8]">⊞</span>
            <span>LinkedIn</span>
          </a>
        </div>

        {#if person.available}
          <div class="flex items-center gap-4 px-5 py-4 bg-white border border-[#e2e8f0] rounded-xl shadow-sm">
            <span class="w-2 h-2 rounded-full bg-[#334155] shrink-0 animate-pulse"></span>
            <div>
              <p class="font-['JetBrains_Mono'] text-[0.8rem] text-[#0f172a]">Currently available</p>
              <p class="font-['Inter'] text-[0.8rem] text-[#94a3b8]">{person.availabilityNote}</p>
            </div>
          </div>
        {/if}
      </div>

      <form onsubmit={e => { e.preventDefault(); handleSubmit(); }} class="flex flex-col gap-5">
        {#if status === 'sent'}
          <div class="flex flex-col gap-2 p-8 bg-white border border-[#e2e8f0] rounded-xl shadow-sm">
            <p class="font-['DM_Sans'] text-xl font-bold text-[#0f172a]">Message received.</p>
            <p class="font-['Inter'] text-[0.9rem] text-[#64748b]">I'll get back to you within 24 hours.</p>
          </div>
        {:else}
          <div class="grid grid-cols-2 max-sm:grid-cols-1 gap-4">
            <div class="flex flex-col gap-1.5">
              <label for="name" class="font-['JetBrains_Mono'] text-[0.72rem] text-[#94a3b8] uppercase tracking-[0.08em]">Name</label>
              <input id="name" type="text" bind:value={name} placeholder="Your name" required
                     class="bg-white border border-[#e2e8f0] rounded-lg px-4 py-3 text-[#0f172a] font-['Inter'] text-[0.9rem] outline-none w-full transition-colors duration-150 placeholder:text-[#cbd5e1] focus:border-[#94a3b8]" />
            </div>
            <div class="flex flex-col gap-1.5">
              <label for="email" class="font-['JetBrains_Mono'] text-[0.72rem] text-[#94a3b8] uppercase tracking-[0.08em]">Email</label>
              <input id="email" type="email" bind:value={email} placeholder="you@company.com" required
                     class="bg-white border border-[#e2e8f0] rounded-lg px-4 py-3 text-[#0f172a] font-['Inter'] text-[0.9rem] outline-none w-full transition-colors duration-150 placeholder:text-[#cbd5e1] focus:border-[#94a3b8]" />
            </div>
          </div>

          <div class="flex flex-col gap-1.5">
            <label for="message" class="font-['JetBrains_Mono'] text-[0.72rem] text-[#94a3b8] uppercase tracking-[0.08em]">Message</label>
            <textarea id="message" bind:value={message} rows="5" required
                      placeholder="Tell me about the problem you're trying to solve..."
                      class="bg-white border border-[#e2e8f0] rounded-lg px-4 py-3 text-[#0f172a] font-['Inter'] text-[0.9rem] outline-none w-full resize-y min-h-[130px] transition-colors duration-150 placeholder:text-[#cbd5e1] focus:border-[#94a3b8]">
            </textarea>
          </div>

          <button type="submit" disabled={status === 'sending'}
                  class="self-start inline-flex items-center gap-2 font-['JetBrains_Mono'] text-xs font-medium px-5 py-2.5 rounded-md bg-[#0f172a] text-white tracking-wide transition-all duration-150 hover:bg-[#1e293b] disabled:opacity-50 disabled:cursor-not-allowed">
            {status === 'sending' ? 'Sending...' : 'Send message →'}
          </button>
        {/if}
      </form>

    </div>
  </div>
</section>
