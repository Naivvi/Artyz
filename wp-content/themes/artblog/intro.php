<section class="intro">
  <div class="intro__info">
    <!-- slide loop goes here -->
    <?php
      $args = array('post_type' => 'intro');
      $query = new WP_Query($args);

      while($query->have_posts()){

        $query->the_post();

        get_template_part('content','intro');


      }
    ?>
</section>
