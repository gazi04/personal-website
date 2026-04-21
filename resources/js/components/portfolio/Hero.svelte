<script lang="ts">
    let { person } = $props();
</script>

<section
    class="relative min-h-screen flex items-center overflow-hidden pt-32 pb-20 bg-white"
>
    <div
        class="hero-dot-grid absolute inset-0 opacity-50 pointer-events-none"
    ></div>

    <div
        class="absolute bottom-0 left-0 right-0 h-32 pointer-events-none"
        style="background: linear-gradient(to bottom, transparent, #ffffff);"
    ></div>

    <div class="relative max-w-[1100px] mx-auto px-8 w-full">
        <div
            class="grid grid-cols-1 lg:grid-cols-[1fr_auto] gap-12 items-center"
        >
            <div>
                <div
                    class="flex items-center gap-4 font-['JetBrains_Mono'] text-xs text-[#94a3b8] uppercase tracking-widest mb-8"
                >
                    <span>01</span>
                    <span class="block w-10 h-px bg-[#cbd5e1]"></span>
                    <span>Backend &amp; Systems</span>
                </div>

                <h1
                    class="font-['DM_Sans'] font-extrabold leading-[0.95] tracking-tight mb-6 text-[#0f172a] text-[clamp(3.5rem,8vw,6rem)]"
                >
                    {person.name}
                </h1>

                <p
                    class="font-['DM_Sans'] font-semibold text-[#334155] mb-6 max-w-[560px] text-[clamp(1rem,2vw,1.3rem)] leading-snug"
                >
                    {person.tagline}
                </p>

                <p
                    class="font-['Inter'] text-base text-[#64748b] max-w-[540px] leading-[1.8] mb-10 font-light"
                >
                    {person.bio}
                </p>

                <div class="flex flex-wrap gap-3 mb-16">
                    <a
                        href="#projects"
                        class="inline-flex items-center gap-2 font-['JetBrains_Mono'] text-xs font-medium px-5 py-2.5 rounded-md bg-[#0f172a] text-white tracking-wide transition-all duration-150 hover:bg-[#1e293b]"
                    >
                        See my work →
                    </a>
                    <a
                        href="#contact"
                        class="inline-flex items-center gap-2 font-['JetBrains_Mono'] text-xs px-5 py-2.5 rounded-md text-[#334155] border border-[#e2e8f0] tracking-wide transition-all duration-150 hover:border-[#94a3b8] hover:text-[#0f172a]"
                    >
                        Get in touch
                    </a>
                </div>

                <div class="flex items-center gap-8">
                    <div class="flex flex-col gap-1">
                        <span
                            class="font-['DM_Sans'] text-[1.75rem] font-extrabold text-[#0f172a] leading-none"
                            >2+</span
                        >
                        <span
                            class="font-['JetBrains_Mono'] text-[0.65rem] text-[#94a3b8] uppercase tracking-widest"
                            >Years building</span
                        >
                    </div>
                    <div class="w-px h-10 bg-[#e2e8f0]"></div>
                    <div class="flex flex-col gap-1">
                        <span
                            class="font-['DM_Sans'] text-[1.75rem] font-extrabold text-[#0f172a] leading-none"
                            >3</span
                        >
                        <span
                            class="font-['JetBrains_Mono'] text-[0.65rem] text-[#94a3b8] uppercase tracking-widest"
                            >Core specialties</span
                        >
                    </div>
                    <div class="w-px h-10 bg-[#e2e8f0]"></div>
                    <div class="flex flex-col gap-1">
                        <span
                            class="font-['DM_Sans'] text-[1.75rem] font-extrabold text-[#0f172a] leading-none"
                            >99.9%</span
                        >
                        <span
                            class="font-['JetBrains_Mono'] text-[0.65rem] text-[#94a3b8] uppercase tracking-widest"
                            >Uptime target</span
                        >
                    </div>
                </div>
            </div>

            <div
                class="hidden lg:block font-['DM_Sans'] font-extrabold text-[#f1f5f9] select-none leading-none"
                style="font-size: clamp(8rem, 15vw, 14rem);"
            >
                {person.initial}
            </div>
        </div>
    </div>
</section>
