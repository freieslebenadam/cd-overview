<?php require_once 'resources/inc/cds.class.inc.php'; 
$cv = new CdsView();
$cds = $cv->getAllCds();
?>

<section class="cards">

    <?php foreach ($cds as $cd): ?>
    <div class="cd-card">
        <div class="cd-card-header">
            <div class="cd-pic" style="background-image: url('<?= $cd['Picture'] ?>');"></div>
        </div>
        <div class="cd-card-body">
            <h2><?= $cd['Album'] ?></h2>
            <p><?= $cd['Author'] ?></p>
        </div>
        <div class="cd-card-footer">
            <a href="/" class="btn btn-primary">Více</a>
        </div>
    </div>
    <?php endforeach; ?>

</section>