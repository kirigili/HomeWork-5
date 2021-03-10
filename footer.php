<?php
require_once './latest_posts.php'?>


<div class="container_footer">
    <div class="container">
        <footer class="footer">
            <div class="footer_block">
                <p>Contact US</p>
                <ul>
                    <li>
                        <img src="./image/location.png" alt="location">
                        <a href="#">55 Main St.<br> Toronto, ON<br> M1H 3A5</a>
                    </li>
                    <li>
                        <img src="./image/iPhone.png" alt="iPhone">
                        <a href="#">(416) 555-5252</a></li>
                    <li>
                        <img src="./image/email.png" alt="email">
                        <a href="#">hello@treehouse.com</a>
                    </li>
                </ul>
            </div>
            <div class="footer_block">
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
            <div class="footer_block">
                <p>Latest Tweets</p>
                <ul>
                    <li><img src="./image/Twitter.png" alt="Twitter">
                        <a href="#">Confucius: Life is really simple,<br> but we insist on making it complicated.</a></li></li>
                    <li><img src="./image/Twitter.png" alt="Twitter">
                        <a href="#">Grab the Free Treehouse web<br> template at FreebiesXpress!</a></li></li>
                </ul>
            </div>
        </footer>
    </div>
</div>

</body>
</html>