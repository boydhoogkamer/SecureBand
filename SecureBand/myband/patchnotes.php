<?php $page = "patchnotes" ?>
<?php include "header.php" ?>


<main class="main2">

<h1>Patch Notes</h1>
<?php 
foreach ( $patchnotescontent as $patch):?>
<div class="main2text">
<h2><?php echo $patch['titel'] ?></h2>
<p><?php echo $patch['inhoud'] ?></p>
</div>
<?php endforeach;?>
</main>

<?php include "footer.php"; ?>