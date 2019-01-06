<?php
$author_image = get_the_author_meta('fave_author_custom_picture');
if( empty($author_image) ) {
    $author_image = houzez_get_avatar_url(get_avatar( get_the_author_meta( 'ID' ), 40 ));
}
$blog_date = houzez_option('blog_date');
$blog_author = houzez_option('blog_author');
?>
<div class="row">
  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
    <ul class="author-meta">
        <?php if( $blog_author != 0 ) { ?>
        <li class="name">
            <a><img src="<?php echo esc_url($author_image); ?>" alt="Auther Image" class="meta-image" height="40" width="40"></a>
            <?php esc_html_e( 'by', 'houzez' ); ?> <a><?php the_author(); ?></a>
        </li>
        <?php } ?>
        <?php if( $blog_date != 0 ) { ?>
            <li><i class="fa fa-calendar"></i> <?php the_date(); ?> </li>
        <?php } ?>
        <li><i class="fa fa-bookmark-o"></i> <?php the_category(', '); ?></li>
        <li><i class="fa fa-comments-o"></i> <?php echo comments_number( '0', '1' ); ?></li>
    </ul>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="margin-top: 1.8em;">
    <div class="author-meta-action share-btn">
      <label>Share On </label><?php get_template_part( 'template-parts/share' ); ?>
    </div>
  </div>
</div>
<!-- <div style="display: inline-block; margin-right: 1em; vertical-align: middle;">
  <h4 style="margin-bottom: 0; padding-top: .2em;">Share This Post</h4>
</div><div style="display: inline-block; vertical-align: middle;">
  <ul class="actions">
    <li class="share-btn">
        <?php get_template_part( 'template-parts/share' ); ?>
    </li>
  </ul>
</div> -->
