
 <?php
 
    $dogs = json_decode(file_get_contents('data.json'));
 
 ?>

    <?php foreach($dogs as $dog){ ?>
    <li>picture ID <?=$dog -> id?></li>
    <img src="<?=$dog->img;?>" alt="" style="hight:500px;width:200px">

    <?php }?>