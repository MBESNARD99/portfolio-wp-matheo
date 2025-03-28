<?php get_header(); ?>

<div class="home-introduction">
    <h1><?php echo esc_html(get_post_meta(get_option('page_on_front'), 'nom_etudiant', true)); ?></h1>

    <p class="presentation-text">
        Actuellement en BUT2 Informatique, je suis passionné par le développement web et mobile.
        Toujours curieux et motivé, j'aime apprendre et travailler sur des projets concrets, que ce soit en équipe ou en autonomie.
        Je suis à la recherche d'opportunités pour mettre mes compétences en pratique et contribuer à des projets innovants.
    </p>

    <p><?php echo esc_html(get_post_meta(get_option('page_on_front'), 'presentation', true)); ?></p>
</div>


<div class="skills-section">
    <h2>COMPÉTENCES TECHNIQUES</h2>
    <div class="skills-grid">
        <?php
        $competences_techniques = [
            ['Java', 'java.png'],
            ['C', 'c.png'],
            ['Python', 'python.png'],
            ['SQL', 'sql.png'],
            ['HTML', 'html.png'],
            ['CSS', 'css.png'],
            ['JavaScript', 'javascript.png'],
            ['PHP', 'php.png'],
            ['Gestion du risque', 'risque.png'],
            ['Gestion du temps', 'temps.png'],
            ['Agilité', 'agilite.png'],
        ];

        foreach ($competences_techniques as $skill) :
        ?>
            <div class="skill-card">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/<?php echo $skill[1]; ?>" alt="<?php echo $skill[0]; ?>">
                <p><?php echo $skill[0]; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <h2>COMPÉTENCES HUMAINES</h2>
    <div class="skills-grid">
        <?php
        $competences_humaines = [
            ['Esprit logique', 'logique.png'],
            ['Travail en équipe', 'equipe.png'],
            ['Dynamique', 'dynamique.png'],
            ['Sens de l\'analyse', 'analyse.png'],
            ['Passionné', 'passion.png'],
        ];

        foreach ($competences_humaines as $skill) :
        ?>
            <div class="skill-card">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/<?php echo $skill[1]; ?>" alt="<?php echo $skill[0]; ?>">
                <p><?php echo $skill[0]; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="featured-projects">
    <h2>Mes Meilleures Réalisations</h2>
    <div class="projects-grid">
    <?php
    $meilleures_real = get_post_meta(get_option('page_on_front'), 'meilleures_realisation', true);

    if ($meilleures_real) :
        foreach ($meilleures_real as $post_id) :

            $galerie = get_post_meta($post_id, 'galerie', true);
            $image_url = '';

            if (!empty($galerie) && is_array($galerie)) {
                $image_url = wp_get_attachment_url($galerie[0]);
            }

            if (!$image_url && has_post_thumbnail($post_id)) {
                $image_url = get_the_post_thumbnail_url($post_id, 'medium');
            }
    ?>
            <div class="project-item">
                <a href="<?php echo get_permalink($post_id); ?>">
                    <?php if ($image_url) : ?>
                        <img src="<?php echo esc_url($image_url); ?>" alt="">
                    <?php endif; ?>
                    <h3><?php echo esc_html(get_the_title($post_id)); ?></h3>
                </a>
            </div>
    <?php
        endforeach;
    endif;
    ?>
</div>

</div>

<?php get_footer(); ?>
