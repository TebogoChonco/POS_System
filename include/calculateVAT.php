<?php

function calculateVAT($PurchasedItemsTotal) {

    // business logic here...

    var vat = document.createElement('p');
        var vatAmount = item.price * 0.15; // Calculate VAT amount (15% of the price)
        vat.textContent = 'VAT (15%): ' + vatAmount.toFixed(2); // Format VAT amount as desired
        button.appendChild(vat);

        var total = document.createElement('p');
        var totalPrice = item.price + vatAmount; // Calculate total price (price + VAT)
        total.textContent = 'Total: ' + totalPrice.toFixed(2); // Format total price as desired
        button.appendChild(total);

        var barcode = document.createElement('p');
        barcode.textContent = 'Barcode: ' + item.barcode;
        button.appendChild(barcode);

        itemsContainer.appendChild(button);

    return;
}