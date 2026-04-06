<script>
  import { skills } from '$lib/data.ts';
</script>

<section class="section" id="skills">
  <div class="container">
    <p class="section-label">04 / Skills</p>
    <h2 class="section-title">My Stack</h2>

    <div class="skills-grid">
      {#each skills as group}
        <div class="skill-group">
          <h3 class="group-title">{group.category}</h3>
          <ul class="skill-list">
            {#each group.items as item}
              <li class="skill-item">
                <span class="skill-dot"></span>
                {item}
              </li>
            {/each}
          </ul>
        </div>
      {/each}
    </div>

    <div class="philosophy">
      <div class="philosophy-inner">
        <p class="philosophy-quote">
          "A system is only as good as its weakest failure mode. I design with the worst case in mind first."
        </p>
        <span class="philosophy-attr mono">— My engineering philosophy</span>
      </div>
    </div>
  </div>
</section>

