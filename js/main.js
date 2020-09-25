$(function () {
     function closeItem(item, modify) {
          item.click(function () {
               modify.fadeOut();
          });
     }

     closeItem($('#messageClose'), $('.header__message'));

});


$('#dec-button').click(function () {
     $('#quantity_5f6e731cf1cbd').value = parseInt($('#quantity_5f6e731cf1cbd').value) - 1;
});
$('#inc-button').click(function () {
     $('#quantity_5f6e731cf1cbd').value = parseInt($('#quantity_5f6e731cf1cbd').value) - 1;
});

$('#dec-button').click(function () {
     $('.qty').value = parseInt($('.qty').value) - 1;
});

$("#inc-button .spinner-button").click(function () {

     console.log("allo");
     $('.qty').value == parseInt($('.qty').value);
     $('.qty').value++;
});
