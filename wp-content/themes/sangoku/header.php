<?php
    $navigation = [
        "Accueil"          => "index.php",
        "Plan du site"     => "plan_du_site.php",
        "Mentions légales" => "mentions_legales.php",
        "Contact"          => "contact.php",
    ];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <?php wp_head();?>
</head>

<body>
    <div class="wrapper">
      <!-- emmet: header>h1+p+nav>ul>li*3>a -->
      <header class="left">
        <h1 class="left__title">
          <a href="index.php" class="left__title-link">
            O'Clock Students News
          </a>
        </h1>
        <div class="left__paragraph">
          <h2 class="left__subtitle">
              <strong class="left__subtitle-strong">
                  Latest news
              </strong> 
              from our students
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        </div>
        <nav>
          <ul class="left__nav">
            <?php foreach( $navigation as $nav_label => $nav_link ) : ?>
              <li class="left__nav-item">
                <a href="<?= $nav_link ?>" class="left__nav-link">
                  <?= $nav_label ?>
                </a>
              </li>
            <?php endforeach; ?> 
          </ul>
        </nav>
      </header>
      <main class="right">