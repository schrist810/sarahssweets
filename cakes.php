<?php
  get_header();
?>

<!-- Project Field Group -->
<article class="cakes">
<header>
<!-- Title -->
<h1>Cakes</h1>
<!-- Project Type -->
<p>Through a minor obsession with cake shows, I have experimented on friends and family with my baking creations. Thankfully no one has died yet and I get to have a good time trying out new things! I bake pretty much weekly but do not take pictures most of the time so unfortunately my gallery is pretty small.</p>
<p>My grandma is a frequent victim of recieving cakes she didn't ask for. The gallery below features a few of the cakes I have made for her.</p>
</header>

<!--photos-->

      <div class="cakes">
        <h2 class="cake-name"><?php the_field('cake_name'); ?></h2>
        <p><?php the_field('summary_description'); ?></p>

        <div class="cake-flavors">
          <h3>Flavor:</h3>
          <div><?php the_field('cake_flavor'); ?></div>
        </div>

        <div class="frosting-flavor">
          <h3>Frosting Flavor:</h3>
          <div><?php the_field('frosting_flavor'); ?></div>
        </div>

        <div class="cake-information">
          <h4>Details:</h4>
          <div><?php the_field('cake_details'); ?></div>

      </div>


    <?php get_footer(); ?>

</div>
