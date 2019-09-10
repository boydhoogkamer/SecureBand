<?php $page = "gametips" ?>
<?php include "header.php" ?>

<main class="gametips">
    <h1>Game Tips</h1>
    <?php 
foreach ( $gametipscontent as $tips):?>
<div class="gametipstext">
<h2><?php echo $tips['titel'] ?></h2>
<p><?php echo $tips['inhoud'] ?></p>
</div>
<?php endforeach;?>


</main>

<?php include "footer.php"; ?>