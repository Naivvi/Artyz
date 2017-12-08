<section class="contact">


<?php
  $args = array('post_type' => 'contact');
  $query = new WP_Query($args);

  while($query->have_posts()){

    $query->the_post();

    get_template_part('content','contact');


  }
?>

</section>
