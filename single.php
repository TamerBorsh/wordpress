<?php
    include 'header.php';
;?>


    <?php
    // The Loop
    if(have_posts()){
        while(have_posts()){
            the_post();?>
<div class="item-single">
    
    <h3 class="item-title">
        <?php the_title(); ?>
    </h3>
    
    <div class="item-author">
        <?php the_author_posts_link(); ?>
    </div>
    
    <div class="item-date">
        <i class="fal fa-calendar-alt"></i><?php the_time('d M,Y') ?>
    </div>
    
    <div class="item-comment ">
        <i class="fa fa-comment"></i><?php comments_popup_link('تعليق 1' , '2 تعليق' , '% تعليق'); ?>
    </div>
    
</div>
                    <?php

                }//end while

            }//enf if
    ?>


<div class="content-single">
    <?php
    // The Loop
    if(have_posts()){
        while(have_posts()){
            the_post();?>
    
            <div class="single">

                <div class="single_summary">
                    <?php the_content('Read more...'); ?>
                </div>
                <?php comments_template(); ?>

            </div>

                    <?php

                }//end while

            }//enf if

    ?>
<div class="sidebar">
    <?php get_sidebar(); ?>
</div>
    
</div>

<?php include 'footer.php';?>
