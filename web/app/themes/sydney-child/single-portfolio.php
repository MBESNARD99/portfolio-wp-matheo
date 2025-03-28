<?php get_header(); ?>

<div class="portfolio-single">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1><?php the_title(); ?></h1>

        <div class="project-details">
            <p><strong>Fait par :</strong> 
                <?php echo esc_html(get_post_meta(get_the_ID(), 'client', true)); ?>
            </p>

            <p><strong>Date de réalisation :</strong> 
                <?php 
                $date_raw = get_post_meta(get_the_ID(), 'date_de_realisation', true);
                if ($date_raw) {
                    $date_obj = DateTime::createFromFormat('Ymd', $date_raw);
                    echo esc_html($date_obj->format('d F Y'));
                }
                ?>
            </p>


            <?php 
            $lien_projet = get_post_meta(get_the_ID(), 'lien_du_projet', true);
            if ($lien_projet) : ?>
                <p><strong>Lien du projet :</strong> 
                    <a href="<?php echo esc_url($lien_projet); ?>" target="_blank">
                        <?php echo esc_html($lien_projet); ?>
                    </a>
                </p>
            <?php endif; ?>

            <?php 
            $galerie_images = get_post_meta(get_the_ID(), 'galerie', true);

            if (!empty($galerie_images) && is_array($galerie_images)) : ?>
                <div class="galerie-images">
                    <?php foreach ($galerie_images as $image_id) : ?>
                        <img src="<?php echo esc_url(wp_get_attachment_url($image_id)); ?>" alt="">
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            
        </div>

        <div class="project-description"><?php the_content(); ?></div>

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
