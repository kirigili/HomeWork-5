<?php if(!empty($_GET['artid']) && !empty($latest_posts)): 
$article = $latest_posts[$_GET['artid']]; ?>

<h1><?php echo $article['title']; ?></h1>
<p><?php echo $article['author']; ?></p>
<img src="<?php echo $article['image']; ?>" alt="image">
<p><?php echo $article['text']; ?></p>
<?php endif; ?>