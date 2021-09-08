<?php
    include 'header.php';
;?>


<div class="content">
        
    <?php
    // The Loop
    if(have_posts()){
        while(have_posts()){
            the_post();?>
    
            <div class="main">
                <p class="post_category">
                    <i class="fa fa-tags"></i><?php the_category(', ') ?>
                </p>
                 
                <div class="post_img">
                    <a href='<?php the_permalink(); ?>'><?php the_post_thumbnail(); ?></a>
                </div>

                <h3 class="post_title">
                    <a href='<?php the_permalink() ?>'><?php the_title(); ?></a>
                </h3>

            </div>

                    <?php

                }//end while

            }//enf if
    ?>
<div class="Post-Pagination">
    <?php echo numbering_Pagination(); ?>
</div>
    
    </div>

<?php include 'footer.php';?>