<?php get_header(); ?>

<div class="portfolio-archive">
    <h1>Mes Réalisations</h1>

    <?php if (have_posts()) : ?>
        <div class="portfolio-grid">
            <?php while (have_posts()) : the_post();
                $post_id = get_the_ID();

                $galerie = get_post_meta($post_id, 'galerie', true);
                $image_url = '';

                if (!empty($galerie) && is_array($galerie)) {
                    $image_url = wp_get_attachment_url($galerie[0]);
                }

                if (!$image_url && has_post_thumbnail()) {
                    $image_url = get_the_post_thumbnail_url($post_id, 'medium');
                }
            ?>
                <div class="portfolio-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php if ($image_url) : ?>
                            <div class="portfolio-thumb">
                                <img src="<?php echo esc_url($image_url); ?>" alt="">
                            </div>
                        <?php endif; ?>
                        <h2 class="portfolio-title"><?php the_title(); ?></h2>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p class="no-results">Aucune réalisation trouvée.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
