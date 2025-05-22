<?php while(has_sub_field("new_page_content")): ?>

    <?php if(get_row_layout() == 'subheading'): // layout: Subheading ?>
        <div class="row">
            <div class="col-12">
               <h3><?php the_sub_field('heading'); ?></h3>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'introduction_full_width'): // layout: Introduction - Full Width ?>
        <div class="row">
            <div class="col-12">
               <p class="introduction"><?php the_sub_field('introduction'); ?></p>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'paragraph_full_width'): // layout: Paragraph - Full Width ?>
        <div class="row">
            <div class="col-12">
               <?php the_sub_field('paragraph'); ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'form_code'): // layout: Form - Code ?>
        <div class="row">
            <div class="col-12">
               <?php the_sub_field('form'); ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'image_full_width'): // layout: Image / Caption - Full Width ?>
        <div class="row image-full-width">
            <div class="col-12">
                <figure>
                    <img class="border-shadow" src="<?php the_sub_field('image'); ?>" />
                    <figcaption class="caption"><?php the_sub_field('caption'); ?></figcaption>
                </figure>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'imageleft_pararight'): // layout: Image Left / Paragraph Right ?>
        <div class="row">
            <div class="col-12 col-lg-4">
                <figure>
                    <img class="mw-100 border-shadow mb-4" src="<?php the_sub_field('imageleft'); ?>" />
                    <figcaption class="caption"><?php the_sub_field('captionleft'); ?></figcaption>
                </figure>
            </div>
            <div class="col-12 col-lg-8">
                <?php the_sub_field('pararight'); ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'paraleft_imageright'): // layout: Paragraph Left / Image Left ?>
        <div class="row">
            <div class="col-12 col-lg-8">
                <?php the_sub_field('paraleft'); ?>
            </div>
            <div class="col-12 col-lg-4">
                <figure>
                    <img class="mw-100 border-shadow mb-4" src="<?php the_sub_field('imageright'); ?>" />
                    <figcaption class="caption"><?php the_sub_field('captionright'); ?></figcaption>
                </figure>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'bullet_list'): // layout: Bulleted List 
        $rows = get_sub_field('bullet_point'); //Repeater Field Name ?>
        <div class="row">
             <div class="col-12">
                <?php if( get_sub_field('introduction_para') ): ?>
                    <p><?php the_sub_field('introduction_para'); ?></p>
                <?php endif; ?>

                <div>
                    <?php if ($rows){ 
                    echo '<ul>';
                    foreach($rows as $row){
                        echo '<li>'.$row['list_item'].'</li>'; 
                    }
                    echo '</ul>';
                    } ?>
                </div>
                
                <?php if( get_sub_field('conclusion_para') ): ?> 
                    <p><?php the_sub_field('conclusion_para'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'number_list'): // layout: Numbered List 
        $rows = get_sub_field('number_point'); //Repeater Field Name ?>
        <div class="row">
             <div class="col-12">
                <?php if( get_sub_field('introduction_para') ): ?>
                    <p><?php the_sub_field('introduction_para'); ?></p>
                <?php endif; ?>

                <div>
                    <?php if ($rows){ 
                    echo '<ol>';
                    foreach($rows as $row){
                        echo '<li>'.$row['list_item'].'</li>'; 
                    }
                    echo '</ol>';
                    } ?>
                </div>
                
                <?php if( get_sub_field('conclusion_para') ): ?> 
                    <p><?php the_sub_field('conclusion_para'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'callout'): // layout: Callout ?>
        <div class="row">
             <div class="col-12">
                <div class="callout">
                    <p><?php the_sub_field('call'); ?></p>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'page_break'): // layout: Page Break ?>
        <div class="row">
             <div class="col-12">
                <?php if( get_sub_field('break') )
                {
                    echo "<hr />";
                }
                ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'footnote'): // layout: Footnote ?>
        <div class="row footnote">
             <div class="col-12">
                <div class="break">
                    <p class="note"><?php the_sub_field('note'); ?></p><!-- Tweak HTML tag from H5 -->
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php endwhile; ?>