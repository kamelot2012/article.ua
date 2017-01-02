<?php foreach($items as $item):?>
    <?php echo $item->id;?>
    <br>
    <a href="/index.php?ctrl=News&act=One&id=<?php echo $item->id;?>"><?php echo $item->title;?></a>
    <br>
    <?php echo $item->content;?>
    <br>
    <?php echo $item->date;?>
    <hr>
<?php endforeach ?>
<?php //var_dump($items); ?>