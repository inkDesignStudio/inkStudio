'use strict';
document.addEventListener('DOMContentLoaded', function () {
  svg4everybody({
    polyfill: true
  });

  $('.js-load-more').click(function (e) {
    e.preventDefault();
    e.stopPropagation();

    var currentButton = $(this);
    var container = currentButton.prev();
    var data = currentButton.data();
    data.countCards = container.children().length;

    if (!currentButton.hasClass('js-ajax-running')) {
      currentButton.addClass('button--disabled js-ajax-running');
      sendAjax(data, '/ajax', function(result) {
        var response = JSON.parse(result);

        if (response.content) {
          container.append(response.content);
          currentButton.removeClass('button--disabled js-ajax-running');
        }

        if (response.isEmpty) {
          currentButton.remove();
        }
      });
    }
  });

  function sendAjax(data, url, callBack) {
    return $.ajax({
      type: 'POST',
      url: url,
      data: $.param(data),
      success: callBack,
      error: function (x, t) {
        if (t === 'timeout') {
          console.log('got timeout');
        } else {
          console.log(t);
        }
      }
    });
  }
});

