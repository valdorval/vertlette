$(function () {
     function closeItem(item, modify) {
          item.click(function () {
               modify.fadeOut();
          })
     }

     closeItem($('#messageClose'), $('.header__message'));

     console.log($('.input-text').value);
     $('#dec-button').click(function () {
          $('.qty').value = parseInt($('.qty').value) - 1;
     })

     $('#inc-button').click(function () {
          $('.qty input').value = parseInt($('.qty input').value) + 1;
     })


});