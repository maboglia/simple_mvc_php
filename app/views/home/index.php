<?php if (isset($data['titolo'])): ?>

    <h1><?=$data['titolo']?></h1>

<?php endif;?>


<?php if (isset($data['messaggio'])): ?>

    <p><?=$data['messaggio']?></p>

<?php endif;?>

<?php if (isset($data['lista'])): ?>

    <?php foreach ($data['lista'] as $key => $value): ?>

        <p><?=$key?></p>
        <p><?=$value?></p>

    <?php endforeach;?>


<?php endif;?>