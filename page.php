<?php
    require_once("database.php");
    require_once("functions/functions.php");

    $link = db_connect();
    $pageID = $_GET['ID'];
    $pageID = (int)$pageID;
    $p = getPageByID($link, $pageID);

    $pages = getAllPages($link);

    $cats = getAllCategories($link);

    $page_title = $p['page_title']." - My Website";
    $page_description = "Description of this page";
?>
<html>
    <head>
	    <title><?=$page_title?></title>
		<meta charset="utf-8">
        <meta http-equiv="description" content="<?=$page_description ?>" />
        <link rel="stylesheet" href="style/style.css" />
        <link rel="stylesheet" href="style/bootstrap.min.css" />
	</head>

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
                <?php include("views/page.php");?>
            </div>
            
            <div class="Menu_Nav">
                
            </div>
        </div>
        
        <div class="footer">
            
        </div>
    </body>
</html>