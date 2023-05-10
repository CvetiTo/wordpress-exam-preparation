<li class="job-card">
    <div class="job-primary">
        <h1 class="job-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h1>
        <div class="job-meta">
            <a class="meta-company">
                <?php echo the_category();  
                //http://localhost/softuni-jobs-exam/?category_name=
                //http://localhost/softuni-jobs-exam/?cat=2 sorted category
                //http://localhost/softuni-jobs-exam/?author=1 sorted author-admin
                 ?>
        </a>
            <span class="meta-date"><?php echo get_the_date(); ?></span>
        </div>
    </div>
    <div class="job-logo">
        <div class="job-logo-box">
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail();
            } else {
                echo '<img src="https://i.imgur.com/ZbILm3F.png" alt="default image thumbnail">';
            }
            ?>
        </div>
    </div>
</li>