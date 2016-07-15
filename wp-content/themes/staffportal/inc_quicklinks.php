<?php $quicklink_term = get_field('quicklink_term'); ?>
<div class="quick-links shadow-border quicklink-box">
  <h3 class="blue-caps-headline">Quick Links</h3>
  <ul>
    <?php
    $quicklinks = get_posts(
      array(
        'post_type' => 'quick-link',
        'post_status' => 'publish',
      )
    );
    foreach($quicklinks as $quicklink) { ?>
        <li><a href="<?php the_field('url',$quicklink->ID) ?>"<?php if( get_field('open_in_external_window') ) { ?> target="_blank"<?php } ?>><?php echo $quicklink->post_title ?></a></li>
    <?php } ?>
  </ul>
</div>
