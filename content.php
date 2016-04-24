<?php
    require_once("database.php");
    require_once("functions/functions.php");

    $link = db_connect();
    
    $post = getPostByID($link, $_GET['ID']);

    $pages = getAllPages($link);

    $cats = getAllCategories($link);

    $page_title = "Home - My Website";
    $page_description = "Description of this page";
?>
<html>
    <?php include("includes/header.php");?>

    <body>
        
        <!--Top nav-->
        <?php include("includes/top_menu_nav.php")?>
        
        <!--Header body-->
        <div class="Header">
            
        </div>
        
        <!--Mid Nav Menu-->
        <?php include("includes/mid_menu_nav.php")?>
        
        
        <!--ContentBody-->
        <div class="Content_mine">
            <div class="Main_Content">
                <?php include("views/content.php");?>
            </div>
            
            <div class="Menu_Nav">
                
            </div>
        </div>
        
        <div class="footer">
            
        </div>
    </body>
</html>