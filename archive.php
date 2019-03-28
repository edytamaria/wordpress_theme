<?php 
/** displays all categories **/

get_header(); ?>

<div class="container">
   <div class="row">
        <div class="col"> 
           <h3> <?php single_cat_title(); ?></h3>

            <?php if (have_posts()):while (have_posts()): the_post(); ?>
                <div class="row">
                   <a href="<?= get_permalink() ?>"> <?php the_title(); ?></a>
                    <?php the_excerpt(); ?>
                 </div>

<?php endwhile; endif;

            /*if ($categories):
                foreach ($categories as $category):
                    echo var_dump($category);
                endforeach;
            endif; */?>
            
        </div>
    </div>
</div>


<?php get_footer(); ?>