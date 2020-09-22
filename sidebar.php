<nav class="menu-category">
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
