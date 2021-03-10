<?php
require_once './header.php';
require_once './latest_posts.php'?>

    <div class="container">
        <?php if(empty($_GET['artid'])): ?>
        <p>Latest Posts</p>
        <ul>
        <?php if(!empty($latest_posts)):
        foreach($latest_posts as $id => $post): ?>

            <li>
                <img src="<?php echo $post['logo']; ?>" alt="News_Icon">
                <a href="./blog.php?artid=<?php echo $id ?>"><?php echo $post['title']; ?></a> 
            </li>

        <?php endforeach;
        endif; ?>

        </ul>

        <?php else: require_once './article.php'; endif; ?>
    
    </div>
    
<?php
require_once './footer.php';

require_once './copy.php';
?>