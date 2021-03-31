<?php 
    define('TITLE', 'Menu | Franklin\'s Fine Dining');

    include('./assets/includes/header.php');
?>

    <div id="menu-items">
        <h1>Our Delicious Menu</h1>
        <p>Like our team, our menu is very small &mdash; but dang, does it pack a punch! Or a lunch!</p>
        <p><em>Click any menu item to learn more about it.</em></p>

        <hr>

        <ul>
            <?php foreach ($menuItems as $dish => $item) { ?>

            <li>
                <a href="dish.php?item=<?php echo $dish; ?>
                ">
                <?php echo $item['title']; ?></a> &mdash; <sup>$</sup><?php echo number_format($item['price'], 2); ?>
            </li>

            <?php } ?>
        </ul>
    </div>
    <!-- menu items-->
<?php 

    include('./assets/includes/footer.php');

?>