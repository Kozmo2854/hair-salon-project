$(document).ready(function () {
    let currentCart = JSON.parse(localStorage.getItem('cart'))
    printCartPageItems(currentCart)
    calculateSubtotal(currentCart)
})

function printCartPageItems(items) {
    let text = ''
    for (const item of items) {
        text += '' +
            '<tr class="cart-product">' +
            '<td></td>' +
            '<td class="cart-product-item">' +
            '<div class="cart-product-img">' +
            '<a href="#">' +
            `<img class="product-image" src="${item.image}" alt="product"/>` +
            '</a>' +
            '</div>' +
            '<div class="cart-product-name">' +
            `<h6><a href="#">${item.title}</a></h6>` +
            '</div>' +
            '</td>' +
            `<td class="cart-product-price">$ ${item.originalPrice}</td>` +
            '<td class="cart-product-quantity">' +
            '<div class="product-quantity">' +
            '<span class="qant-plus"><i class="fa fa-caret-up"></i></span>' +
            `<input type="text" value="${item.quantity}" id="pro1-qunt" readonly>` +
            '<span class="qant-minus"><i class="fa fa-caret-down"></i></span>' +
            '</div>' +
            '</td>' +
            `<td class="cart-product-total">$ ${item.originalPrice*item.quantity}</td>` +
            '<td>' +
            `<div class="cart-product-remove" >` +
            `<i class="lnr lnr-cross" data-id="${item.id}">x</i>` +
            '</div>' +
            '</td>' +
            '<td></td>' +
            '</tr>'
    }
    if(text==''){
        text = "<h1 class='slide--headline no-products'>No products in cart.</h1>"
    }
    $('.cart-product-body').html(text)
    addCrossEventListener();
}

function calculateSubtotal(items) {
    let subtotal = 0
    for (const item of items) {
        subtotal += item.originalPrice * item.quantity
    }
    $('.subtotal').html('$' + subtotal)
}
function addCrossEventListener() {
    $('.lnr-cross').on('click', function (e) {
        let productId = $(e.target).attr('data-id')
        console.log(productId)
        let cart = JSON.parse(localStorage.getItem('cart'))
        cart = cart.filter(product => product.id!=productId)
        localStorage.setItem("cart",JSON.stringify(cart))
        printCartPageItems(cart)
        calculateSubtotal(cart)
    })
}
