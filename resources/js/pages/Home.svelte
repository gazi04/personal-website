<script lang="ts">
    import Nav from '@/components/portfolio/Nav.svelte';
    import Hero from '@/components/portfolio/Hero.svelte';
    import Experience from '@/components/portfolio/Experience.svelte';
    import Project from '@/components/portfolio/Project.svelte';
    import Skills from '@/components/portfolio/Skills.svelte';
    import Blog from '@/components/portfolio/Blog.svelte';
    import Contact from '@/components/portfolio/Contact.svelte';
    import Footer from '@/components/portfolio/Footer.svelte';
    let scrolled = $state(false);
    let { person, projects, experience, skills, posts } = $props();

    if (typeof window !== 'undefined') {
        window.addEventListener('scroll', () => {
            scrolled = window.scrollY > 40;
        });
    }

    const links = [
        { href: '#experience', label: 'Experience' },
        { href: '#projects', label: 'Projects' },
        { href: '#skills', label: 'Skills' },
        { href: '#blog', label: 'Writing' },
        { href: '#contact', label: 'Contact' },
    ];
</script>

<svelte:head>
    <title>Alex Kovacs — Backend & Systems Developer</title>
    <meta
        name="description"
        content="Backend developer specializing in distributed systems, APIs, and data engineering. Building systems that scale, survive, and never sleep."
    />
</svelte:head>

<Nav {scrolled} {links} {person} />
<main>
    <Hero {person} />
    <Experience {experience} />
    <Project {projects} />
    <Skills {skills} />
    <Blog {posts} />
    <Contact {person} />
</main>
<Footer {person} />
