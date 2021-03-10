<?php
require_once './header.php';?>

<link rel="stylesheet" href="style.css">

<div class="container">
    <h1>Contact</h1>
    
    <form action="/form.php" method="POST">
        <div class="form form_name"><input type="text" name="name" placeholder="NAME"></div>
        <div class="form form_phone"><input type="number" name="phone" placeholder="PHONE"></div>
        <div class="form form_email"><input type="email" name="email" placeholder="EMAIL"></div>
        <div class="form form_message"><textarea name="message" placeholder="MESSAGE"></textarea></div>
        <button>Send</button>
    </form>
</div>

<?php
require_once './footer.php';

require_once './copy.php';
?>