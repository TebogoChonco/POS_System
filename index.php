<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

// Include the data.php file to access the array
require_once('./data/data.php');

if (isset($_POST['selectedItemValue'])) {
    // Code to handle the selected item
    // ...
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S&S POS</title>
    <link rel="stylesheet" href="./static/css/style.css">
</head>
<body>
    <h1>
        <span style="color:pink">Select and</span> <span style="color:grey">Save</span>
    </h1>

    <hr>

    <div class="till__display">
        <div>
            <span class="till__console">
                Amount: R <span>0</span>
            </span>
        </div>
    </div>

    <hr>

    <section>
        <form class="items" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <?php
            // Loop through the items array and display them dynamically
            foreach ($items as $index => $item) {
                ?>
                <button type="submit" name="selectedItemValue" value="<?php echo $item; ?>" class="item">
                    <h3><?php echo $item; ?></h3>
                </button>
                <?php
            }
            ?>
        </form>
    </section>

    <form action="./views/checkout.php" method="get" class="checkout">
        <input type="hidden" name="subTotal" value="sub total amount">
        <button type="submit">Proceed to payment</button>
    </form>

    <script>
        var jsonArray = <?php echo json_encode($items); ?>;
        displayItems(jsonArray); // Call the JavaScript function to display the items

        function displayItems(items) {
    var itemsContainer = document.querySelector('.items');
    itemsContainer.innerHTML = ''; // Clear existing items

    items.forEach(function(item) {
        var button = document.createElement('button');
        button.setAttribute('type', 'submit');
        button.setAttribute('name', 'selectedItemValue');
        button.setAttribute('value', item);
        button.classList.add('item');

        var h3 = document.createElement('h3');
        h3.textContent = item.name; // Access the name property of the item

        button.appendChild(h3);
        itemsContainer.appendChild(button);
    });
}

    </script>
</body>
</html>
