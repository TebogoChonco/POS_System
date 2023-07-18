<?php
header('Content-Type: application/javascript');
$items = require('data/data.php');
?>
<script>
var jsonArray = <?php echo json_encode($items); ?>;
console.log(jsonArray);

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
        h3.textContent = item;

        button.appendChild(h3);
        itemsContainer.appendChild(button);
    });
}
</script>








