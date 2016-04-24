<?php
   
    require_once("database.php");
    require_once("functions/functions.php");
    
    
    $link = db_connect();
    $posts = getAllPosts($link);
    
    
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
                <?php include("views/all_contents.php");?>
            </div>
            
            <div class="Menu_Nav">
                <div class="block">
                    <div class="block_header">Sign In</div>
                    <div class="block_content">
                        <form class="sign_in_form" action="">
                        <label>Login
                            <input type="text" name="logIn" class="fields" /></label>
                        <label>Password
                            <input type="Password" name="Password" class="fields" /></label>
                            
                            <center><button type="submit" class="btn btn-default">Send</button></center>
                        </form>
                    </div>
                </div>
                <div class="block">
                    <div class="block_header">Tags</div>
                    <div class="block_content">
                        <ol>
                            <li><a href="#">Shooter</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer">
            
        </div>
    </body>
</html>