<?php

    
                function getAllPosts($DB_Connect)
                {
                    $QUERY = "SELECT * FROM posts ORDER BY ID DESC";
                    $result = mysqli_query($DB_Connect, $QUERY);

                    if(!$result)
                        die("Error: ".mysqli_error($DB_Connect));


                    $n = mysqli_num_rows($result);
                    $posts = array();

                    for($i-0; $i < $n; $i++)
                    {
                        $row = mysqli_fetch_assoc($result);
                        $posts[] = $row;
                    }

                    return $posts;
                }

                function getPostByID($DB_Connect, $ID)
                {
                    $query = sprintf("SELECT * FROM posts WHERE ID=%d", (int)$ID);
                    $result = mysqli_query($DB_Connect, $query);

                    if(!$result)
                        Die("Error: ".mysqli_error($result));

                    $post = mysqli_fetch_assoc($result);

                    return $post;

                }

                function editPost($DB_Connect, $ID, $Title, $Date, $Content, $Author, $Category)
                {

                    if($Title == null || $Date == null || $Conent == null || $Category)
                        return false;

                    $query = sprintf("UPDATE posts SET Title=%s, Content=%s, Date=%s, Author=%s, Category=%s WHERE ID=%d",$Title, $Content, $Date, $Author, $Category, (int)$ID);

                    $result = mysqli_query($DB_Connect, $query);

                    if(!$result)
                        die("Error: ".mysqli_error($result));
                }

                function addPost($DB_Connect, $Title, $Date, $Content, $Author, $Category)
                {
                    if($Title == null || $Date == null || $Conent == null || $Category)
                        return false;

                    $query = sprintf("INSERT INTO posts ( ID ,  Title ,  Content ,  Date ,  Author ,  Category ) VALUES ('', '%s', '%s', '%s', '%s', '%s'", $Title, $Content, $Date, $Author, $Category);

                    $result = mysqli_query($DB_Connect, $query);

                    if(!$result)
                        die("Error: ".mysqli_error($result));

                }

                function removePost($DB_Connect, $ID)
                {
                    $query = sprintf("DELETE * FROM posts WHERE ID=%d",(int)$ID);

                    $result = mysqli_query($DB_Connect, $query);

                    if(!$result)
                        die("Error: ".mysqli_error($result));
                }

                function getAllPages($DB_Connect)
                {
                    $QUERY = "SELECT * FROM pages";
                    $result = mysqli_query($DB_Connect, $QUERY);

                    if(!$result)
                        die("Error: ".mysqli_error($DB_Connect));


                    $n = mysqli_num_rows($result);
                    $pages = array();

                    for($i-0; $i < $n; $i++)
                    {
                        $row = mysqli_fetch_assoc($result);
                        $pages[] = $row;
                    }

                    return $pages;
                }

                function getPageByID($DB_Connect, $ID)
                {
                    $query = sprintf("SELECT * FROM pages WHERE page_id=%d", (int)$ID);
                    $result = mysqli_query($DB_Connect, $query);

                    if(!$result)
                        Die("Error: ".mysqli_error($result));

                    $post = mysqli_fetch_assoc($result);

                    return $post;
                }

                function addCategory($DB_Connect, $cat_name)
                {
                    $query = sprintf("INSERT INTO Categories (cat_id, cat_name) VALUES ('','%s')", (string)$cat_name);
                    $result = mysqli_query($DB_Connect, $query);
                    
                    if(!$result)
                        die("Error: ".mysqli_error($result));
                }

                function editCategory($DB_Connect, $cat_id, $cat_name)
                {
                    $query = sprintf("UPDATE  Categories  SET  cat_id ='%d', cat_name = '%s' WHERE cat_id=%d", (int)$cat_id, (string)$cat_name, (int)$cat_id);
                    $result = mysqli_query($DB_Connect, $query);

                    if(!$result)
                        die("Error: ".mysqli_error($result));
                }
                
                function removeCategory($DB_Connect, $cat_id)
                {
                    $query = sprintf("DELETE * FROM Categories WHERE cat_id=%d", $cat_id);
                    $result = mysqli_query($DB_Connect, $query);

                    if(!$result)
                        die("Error: ".mysqli_error($result));
                }
            
                function getAllCategories($DB_Connect)
                {
                    $QUERY = "SELECT * FROM Categories";
                    $result = mysqli_query($DB_Connect, $QUERY);

                    if(!$result)
                        die("Error: ".mysqli_error($DB_Connect));


                    $n = mysqli_num_rows($result);
                    $cat = array();

                    for($i-0; $i < $n; $i++)
                    {
                        $row = mysqli_fetch_assoc($result);
                        $cat[] = $row;
                    }

                    return $cat;
                }
                
                
                function getCategoryByID($DB_Connect, $ID)
                {
                    $query = sprintf("SELECT * FROM Categories WHERE cat_id=%d", (int)$ID);
                    $result = mysqli_query($DB_Connect, $query);

                    if(!$result)
                        Die("Error: ".mysqli_error($result));

                    $cat = mysqli_fetch_assoc($result);

                    return $cat;
                }
                
                

                function getAllBlocks($DB_Connect)
                {
                    $QUERY = "SELECT * FROM blocks";
                    $result = mysqli_query($DB_Connect, $QUERY);

                    if(!$result)
                        die("Error: ".mysqli_error($DB_Connect));


                    $n = mysqli_num_rows($result);
                    $blocks = array();

                    for($i-0; $i < $n; $i++)
                    {
                        $row = mysqli_fetch_assoc($result);
                        $blocks[] = $row;
                    }

                    return $blocks;
                }
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
?>