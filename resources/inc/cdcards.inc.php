<?php require_once 'resources/inc/cds.class.inc.php'; 
    $cv = new CdsView();
    $cds = $cv->getAllCds();
    ?>
    <?php foreach ($cds as $cd): ?>
    <div class="cd-card">
        <img src="<?= $cd['Picture'] ?>" width="160px" />
        <h2><?= $cd['Album'] ?></h2>
        <h3><?= $cd['Author'] ?></h3>
        <p><?= $cd['ReleaseDate'] ?></p>
        <p><?= $cd['Genre'] ?></p>
    </div>
<?php endforeach; ?>