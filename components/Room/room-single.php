<?php
/**
 * 
 * ROOM SINGLE
 * 
 */
?>

<div class="room-sigle">
  <div class="room-single__inner">
    <a class="room-single__thumbnail" href="<?php echo get_permalink(); ?>"
      title="Přejít na <?php echo get_the_title(); ?>">
      <?php the_post_thumbnail( 'thumbnail', ['class' => 'img-responsive'] ); ?>
    </a>
    <div class="room-single__meta">
      <h3 class="room-single__meta-title"><?php the_title(); ?></h3>
      <!-- <a class="room-single__meta-btn btn-secondary" href="<?php echo get_permalink(); ?>" title="Přejí na <?php echo get_the_title(); ?>">
                <div class="circle"><span class="icon arrow"></span>
                </div>
                <p class="button-text"><?php the_title(); ?></p>
            </a> -->
      <a class="btn btn-link" href="<?php echo get_permalink(); ?>" title="Přejí na <?php echo get_the_title(); ?>">
        Detail pokoje
      </a>
    </div>
  </div>
</div>