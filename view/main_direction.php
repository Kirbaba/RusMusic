
    <?php $i=0; if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p0">
                <a href="<?php /* echo get_post_meta(get_the_ID(), 'link', 1)*/ ?>" class="becomeastar--link-line--item">
							<span class="img-skew-wrap">
								<?php  echo get_the_post_thumbnail(get_the_ID(),'full'); ?>
                                <?php if($i == 0){ ?>
                                    <span class="becomeastar--link-line--item--text align-right">
                                <?php $i++; }else{ ?>
                                     <span class="becomeastar--link-line--item--text align-left">
                                <?php } ?>

									<h3><?= get_the_title(get_the_ID()); ?></h3>
									<p><?= get_post_meta(get_the_ID(), 'description', 1) ?></p>
								</span>
							</span>
                    <span class="link-line--border"></span>
                </a>
            </div>

            <?php
        endwhile;
    } wp_reset_query(); ?>

