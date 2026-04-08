<script lang="ts">
  import Nav from '$lib/Nav.svelte';
  import Hero from '$lib/Hero.svelte';
  import Experience from '$lib/Experience.svelte';
  import Projects from '$lib/Projects.svelte';
  import Skills from '$lib/Skills.svelte';
  import Blog from '$lib/Blog.svelte';
  import Contact from '$lib/Contact.svelte';
  import Footer from '$lib/Footer.svelte';
</script>

<svelte:head>
  <title>Alex Kovacs — Backend & Systems Developer</title>
  <meta name="description" content="Backend developer specializing in distributed systems, APIs, and data engineering. Building systems that scale, survive, and never sleep." />
</svelte:head>

<Nav />
<main>
  <Hero />
  <Experience />
  <Projects />
  <Skills />
  <Blog />
  <Contact />
</main>
<Footer />
