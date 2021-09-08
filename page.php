<?php
    include'searchform.php';
    get_header();
;?>

    <?php
    // The Loop
    if(have_posts()){
        while(have_posts()){
            the_post();?>
    
            <div class="page">
                <h3 class="page_title">
                    <?php the_title(); ?>
                </h3>

                <div class="page_img">
                    <?php the_post_thumbnail(); ?>
                </div>

                <div class="page_summary">
                    <?php the_content('Read more...'); ?>
                </div>


            </div>

                    <?php

                }//end while

            }//enf if
    ?>

<?php get_footer(); ?>