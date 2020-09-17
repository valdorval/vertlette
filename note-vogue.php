<?php
if (has_post_thumbnail()) {
?>
    <figure class="imgBox">';
        <?php the_post_thumbnail('full', array('class' => 'vogue__main-product')); ?>
    </figure>";
<?php
}
?>



<img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" height="438" />
