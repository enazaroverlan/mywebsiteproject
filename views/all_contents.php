                <?php foreach($posts as $post): ?>
                <div class="one_content">
                    <a href="content.php?ID=<?=$post['ID']?>"><h1><?=$post['Title']?></h1></a>
                    <p><?=$post['Content']?></p>
                    <h3>Date: <?=$post['Date']?></h3>
                    <h4>Author: <?=$post['Author']?></h4>
                </div>
                <?php endforeach ?>