/**
 * @file
 */

(function ($, Drupal) {

  /**
   * Attaches the JS test behavior to label links.
   */
  Drupal.behaviors.lb_direct_add_label = {
    attach: function (context, settings) {
      $('.dropbutton li .open-list-label').parent().once().on('click', function () {
        $(this).parent().find('.dropbutton-toggle button').click();
      });
    }
  };

})(jQuery, Drupal);
