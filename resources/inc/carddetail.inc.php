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
        <div class="cd-pic" style="background-image: '<?= $cd['Picture'] ?>';"></div>
    </section>
    <section class="cd-detail-body">
        <h2><?= $cd['Album'] ?></h2>
        <h3><?= $cd['Author'] ?></h3>
        <p>
            <b>Žánr:</b> <?php if($cd['Genre'] !== null) { echo $cd['Genre']; } else { echo "Není uvedeno"; } ?>
            <br>
            <b>Rok vydání:</b> <?php if($cd['ReleaseDate'] !== null) { echo $cd['ReleaseDate']; } else { echo "Není uvedeno"; } ?>
        </p>
    </section>
    <section class="cd-detail-footer">
        <p>
            <b>Cena:</b> <?php if($cd['Price'] !== null) { echo "<strong>€".$cd['Price']."</strong>"; } else { echo "Není uvedeno"; } ?>
        </p>
    </section>
</article>