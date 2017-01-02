<?php foreach($items as $item):?>
    <?php echo $item->id;?>
<br>
<?php echo $item->title;?>
<br>
<?php echo $item->date;?>
<hr>
<?php endforeach ?>
<?php //var_dump($items); ?>