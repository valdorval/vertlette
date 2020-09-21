<?php
// pour otenir les catégorie principale
$args = array(
    'taxonomy' => 'product_cat',
    'hide_empty' => false,
    'parent'   => 0
);
$product_cat = get_terms($args);

foreach ($product_cat as $parent_product_cat) { ?>
    <ul>
        <li class="category">
            <h4><a href=" <?php get_term_link($parent_product_cat->term_id) ?>"> <?php echo $parent_product_cat->name ?></a></h4>
            <ul>
                <?php
                // pour obtenir la sous-catégorie
                $child_args = array(
                    'taxonomy' => 'product_cat',
                    'hide_empty' => false,
                    'parent'   => $parent_product_cat->term_id
                );

                $child_product_cats = get_terms($child_args);
                foreach ($child_product_cats as $child_product_cat) { ?>
                    <li class="sub-category"><a href=" <?php get_term_link($child_product_cat->term_id) ?> "> <?php echo $child_product_cat->name ?> </a>
                        <ul>
                            <?php
                            // pour obtenir la sous-catégorie d'une sous-catégorie
                            $second_child_args = array(
                                'taxonomy' => 'product_cat',
                                'hide_empty' => false,
                                'parent'   => $child_product_cat->term_id
                            );
                            $second_child_product_cats = get_terms($second_child_args);
                            foreach ($second_child_product_cats as $second_child_product_cat) { ?>
                                <li class="second-sub-category"><a href=" <?php get_term_link($second_child_product_cats->term_id) ?> "> <?php echo $second_child_product_cat->name ?> </a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                <?php
                }
                ?>
            </ul>
        </li>
    </ul>
<?php
}
