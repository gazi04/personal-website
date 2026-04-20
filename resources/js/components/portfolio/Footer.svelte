<script lang="ts">
    let { person } = $props();
    const year = new Date().getFullYear();
</script>

<footer class="py-8 border-t border-[#e2e8f0] bg-white">
    <div class="max-w-[1100px] mx-auto px-8">
        <div class="flex flex-wrap items-center gap-8">
            <p
                class="font-['DM_Sans'] font-bold text-[0.9rem] text-[#0f172a] mr-auto"
            >
                {person.name}
            </p>

            <p
                class="font-['Inter'] text-xs text-[#94a3b8] max-sm:order-3 max-sm:w-full"
            >
                © {year} — Built with Svelte
            </p>

            <div class="flex gap-6">
                <a
                    href={person.github}
                    target="_blank"
                    rel="noopener"
                    class="font-['JetBrains_Mono'] text-[0.72rem] text-[#94a3b8] tracking-wide transition-colors duration-150 hover:text-[#0f172a]"
                    >GitHub</a
                >
                <a
                    href={person.linkedin}
                    target="_blank"
                    rel="noopener"
                    class="font-['JetBrains_Mono'] text-[0.72rem] text-[#94a3b8] tracking-wide transition-colors duration-150 hover:text-[#0f172a]"
                    >LinkedIn</a
                >
                <a
                    href={`mailto:${person.email}`}
                    class="font-['JetBrains_Mono'] text-[0.72rem] text-[#94a3b8] tracking-wide transition-colors duration-150 hover:text-[#0f172a]"
                    >Email</a
                >
            </div>
        </div>
    </div>
</footer>
