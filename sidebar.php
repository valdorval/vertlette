<?php

$pattern = "/corporatif/";
$preg = preg_match($pattern, home_url($wp->request));

if ($preg === 1 || is_page('boutique-corporative')) {
?>
    <nav class="menu-category u-margin-bottom-big">
        <h4 class="all-categories">
            <a href=" <?php echo get_permalink('258') ?>">Tout</a>
            <hr>
        </h4>

        <ul>
            <?php
            // set up variables for the slug & taxonomy - then this can all be changed dynamically if you need to
            $term_taxonomy = "product_cat";
            $term_slug = "corporatif";

            // Pass the slug & taxonomy to get_term_by to get all the term details
            $term = get_term_by('slug', $term_slug, $term_taxonomy);
            $term_id = $term->term_id;
            $term_name = $term->name;    // get the name from the term

            $args = array(
                // 'taxonomy' => 'product_cat',
                'hide_empty' => false,
                'parent'   => 0,
                'tax_query' => array(
                    array(
                        'taxonomy' => $term_taxonomy,
                        'field' => 'slug',
                        'terms' => $term_slug
                    ),
                ),
            );

            $product_cat = new WP_query($args);

            if ($product_cat->have_posts()) : ?>
                <li class="main-category category-id-<?php echo $term_id ?>">
                    <h4 class="u-margin-top-small"><a href="<?php echo get_term_link($term_id) ?>"><?php echo $term_name ?></a>
                        <hr>
                    </h4>
                    <?php

                    // deuxieme loop
                    $child_args = array(
                        'taxonomy' => 'product_cat',
                        'hide_empty' => false,
                        'parent'   => $term_id
                    );

                    $child_product_cats = get_terms($child_args);
                    foreach ($child_product_cats as $child_product_cat) { ?>

                <li><a href="<?php echo get_term_link($child_product_cat->term_id) ?>"><?php echo $child_product_cat->name ?> </a>
                    <?php
                        // pour obtenir la sous-catégorie d'une sous-catégorie
                        $second_child_args = array(
                            'taxonomy' => 'product_cat',
                            'hide_empty' => false,
                            'parent'   => $child_product_cat->term_id
                        );
                        $second_child_product_cats = get_terms($second_child_args);
                        foreach ($second_child_product_cats as $second_child_product_cat) { ?>
                <li class="second-sub-category"><a href="<?php echo get_term_link($second_child_product_cat->term_id) ?>"><?php echo $second_child_product_cat->name ?> </a></li>
            <?php
                        }
            ?>
            </li>
        <?php
                    }
        ?>
        </li>
    <?php endif; ?>
        </ul>
    </nav>
<?php


} else {


?>
    <nav class="menu-category u-margin-bottom-big">
        <h4 class="all-categories">
            <a href=" <?php echo get_permalink('6') ?>">Tout</a>
            <hr>
        </h4>

        <ul>
            <?php
            $args = array(
                'taxonomy' => 'product_cat',
                'hide_empty' => false,
                'parent'   => 0,
            );

            $product_cat = get_terms($args);

            foreach ($product_cat as $parent_product_cat) { ?>

                <li class="main-category category-id-<?php echo $parent_product_cat->term_id ?>">
                    <h4 class="u-margin-top-small"><a href="<?php echo get_term_link($parent_product_cat->term_id) ?>"><?php echo $parent_product_cat->name ?></a>
                        <hr>
                    </h4>

                    <?php
                    $child_args = array(
                        'taxonomy' => 'product_cat',
                        'hide_empty' => false,
                        'parent'   => $parent_product_cat->term_id
                    );

                    $child_product_cats = get_terms($child_args);
                    foreach ($child_product_cats as $child_product_cat) { ?>

                <li><a href="<?php echo get_term_link($child_product_cat->term_id) ?>"><?php echo $child_product_cat->name ?> </a>

                    <?php
                        // pour obtenir la sous-catégorie d'une sous-catégorie
                        $second_child_args = array(
                            'taxonomy' => 'product_cat',
                            'hide_empty' => false,
                            'parent'   => $child_product_cat->term_id
                        );
                        $second_child_product_cats = get_terms($second_child_args);
                        foreach ($second_child_product_cats as $second_child_product_cat) { ?>
                <li class="second-sub-category"><a href="<?php echo get_term_link($second_child_product_cat->term_id) ?>"><?php echo $second_child_product_cat->name ?> </a></li>
            <?php
                        }
            ?>
            </li>
    <?php
                    }
                }
    ?>
        </ul>
    </nav>
<?php
}
