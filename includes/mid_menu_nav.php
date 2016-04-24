


<div class="Mid_Nav">
            <?php foreach($cats as $cat): ?>
            <div class="<? if($cat['cat_id'] == $cate['cat_id']) {echo("Top_Nav_Element_Active");} else {echo("Top_Nav_Element");}?> ">
                <a href="category.php?Cat_ID=<?=$cat['cat_id']?>" class="my_links"><?=$cat['cat_name']?></a>
            </div>
            <?php endforeach; ?>
        </div>