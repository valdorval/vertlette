$(function () {
     function closeItem(item, modify) {
          item.click(function () {
               modify.fadeOut();
          });
     }

     closeItem($('#messageClose'), $('.header__message'));

});
