    <div class="slider">
        <div class="owl-carousel owl-theme">
        <?php
            if(have_posts()){
        while(have_posts()){
            the_post();?>
        
            
            <div class="item">
                
                <div class="slider_img">
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
        </div>
</div>
        