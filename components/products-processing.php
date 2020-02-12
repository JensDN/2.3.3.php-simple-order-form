
    <legend>Products</legend>
    <?php foreach (displayItems() AS $i => $product):?>

        <label>
            <div class="col-md-6 col-lg-4 project-sidebar-card">
                <img class="img-fluid image scale-on-hover" src=<?php echo $product['imgURL'] ?>>
            <input type="number" value="0" name="$order[<?php echo $product['name']?>][<?php echo $product['price']?>]]" />
                <?php echo $product['name']; ?> - &euro; <?php echo number_format($product['price'], 2) ?>
            </div>
        </label>
    <?php endforeach; ?>

    $order[<?php echo $product['name']?>][<?php echo $product['price']?>]];