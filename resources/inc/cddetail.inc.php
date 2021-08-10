<?php
require_once 'resources/inc/cds.class.inc.php';

if (!isset($_GET['slug'])) {
    header('Location: /');
}

$cv = new CdsView();
$cd = $cv->getCdBySlug($_GET['slug']);

if (!$cd) {
    header('Location: /');
}
?>

<article class="cd-detail">
    <section class="cd-detail-header">
        <div class="cd-pic" style="background-image: url('<?= $cd['Picture'] ?>');"></div>
    </section>
    <section class="cd-detail-body">
        <p>
            <strong class="album"><?= $cd['Album'] ?></strong>
            <br>
            <strong class="author"><?= $cd['Author'] ?></strong>
        </p>
        <div class="hl"></div>
        <p>
            <b>Žánr:</b> <?php if($cd['Genre'] !== null) { echo $cd['Genre']; } else { echo "Není uvedeno"; } ?>
            <br>
            <b>Rok vydání:</b> <?php if($cd['ReleaseDate'] !== null) { echo $cd['ReleaseDate']; } else { echo "Není uvedeno"; } ?>
        </p>
    </section>
    <section class="cd-detail-footer">
        <p>
            <i class="far fa-star rating-star"></i>
            <i class="far fa-star rating-star"></i>
            <i class="far fa-star rating-star"></i>
            <i class="far fa-star rating-star"></i>
            <i class="far fa-star rating-star"></i>
        </p>
        <p>
            Cena: <?php if($cd['Price'] !== null) { echo "<strong>€".$cd['Price']."</strong>"; } else { echo "Není uvedeno"; } ?>
        </p>
    </section>
</article>