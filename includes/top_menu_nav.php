<!--Top nav-->
        <div class="Top_Nav">
            <?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
            <div class="<? if($currentPage == "index.php") { echo "Top_Nav_Element_Active"; } else { echo "Top_Nav_Element"; }?>">
                <a href="index.php" class="my_links">Main</a>
            </div>
            <?php foreach($pages as $page): ?>
            <div class="<? if($pageID == $page['page_id']) { echo "Top_Nav_Element_Active"; } else { echo "Top_Nav_Element"; }?>">
                <a href="page.php?ID=<?=$page['page_id']?>" class="my_links"><?=$page['page_title']?></a>
            </div>
            <?php endforeach ?>
        </div>