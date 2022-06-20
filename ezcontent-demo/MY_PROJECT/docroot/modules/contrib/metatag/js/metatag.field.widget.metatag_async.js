/**
 * @file
 * JavaScript to allow AJAX triggered by non-submit element.
 */

(function ($) {
  'use strict';

  $('details.metatag-async-widget details').on('toggle', function () {
    var triggers = $(this).find('.form-submit');
    if (triggers.length) {
      triggers.trigger('click');
    }
  });

})(jQuery);
