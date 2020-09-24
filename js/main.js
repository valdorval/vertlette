$(function () {
     function closeItem(item, modify) {
          item.click(function () {
               modify.fadeIn();
          })
     }

     closeItem($('#messageClose'), $('.header__message'));

});