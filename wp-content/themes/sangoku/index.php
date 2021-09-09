<?php

get_header();

// Quand on crée une fonction,
// c'est parce qu'on souhaite réutiliser un bloc d'instructions
// On identifie les données dont on a besoin,
// en général on l'indique en paramètre de la fonction
// Les paramètres optionnels ont une valeur par défaut
function getArticleExtract($texte, $longueur = 210, $stripTags = true, $ellipses = '...')
{
    // Supprime le HTML
    if ($stripTags === true) {
        // On crée une chaine sans balises à partir de la chaine fournie
        $chaine = strip_tags($texte);
    } else {
        // Sinon c'est la chaine fournie
        $chaine = $texte;
    }

    // On tronque la chaine
    $chaine_coupee = substr($chaine, 0, $longueur);

    return $chaine_coupee . $ellipses;
}
?>

<!-- emmet: h2+article*6>a+h3+div>(img+strong+time)+p+a -->
<h2 class="right__title">
    Latest News
</h2>

<?php require_once "inc/data_articles.php" ?>

<div class="posts">

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) :  the_post(); ?>

            <article class="post">
                <a href="" class="post__category post__category--color-<?= $current_article['category'] ?>">
                    <?= $current_article['category'] ?>
                </a>
                <h3>
                    <?= the_title(); ?>
                </h3>
                <div class="post__meta">
                    <img class="post__author-icon" src="<?= $current_article['auteur_img'] ?>" alt="">
                    <strong class="post__author">
                        <?php the_author(); ?>
                    </strong>
                    <time datetime="<?php the_time() ?>">
                        <?php the_date(); ?> à <?php the_time(); ?>
                    </time>
                </div>

                <p>
                    <?php
                    // On appelle notre fonction
                    // echo getArticleExtract($current_article['texte'], 105, true, ' [...]');
                    // Exemple d'appel arbitraire
                    //echo getArticleExtract('Bonjour le monde ! Azertyuio qsdfghj xcvn.');

                    the_excerpt();
                    ?>
                </p>

                <a href="article.php?index=<?= $index ?>" class="post__link">
                    Continue reading
                </a>
            </article>

        <?php endwhile; ?>

    <?php else : ?>

        aucun article trouvé

    <?php endif; ?>


    
</div>

<?php get_footer(); ?>