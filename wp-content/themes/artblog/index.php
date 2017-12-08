<?php echo get_header();?>
<?php get_template_part('smallhero');?>



    <div id="container" class="blog-container">

      <h1 class="blog__maintitle">My Blog</h1>
      <!-- the loop -->
      <?php

      while ( have_posts() ) {
        the_post();
        //
        // Post Content here
        get_template_part('content','page');
        //
      } // end while


      ?>

    </div>
<?php echo get_footer();?>
