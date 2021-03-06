/**
 * @package     ${NAMESPACE}
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */


/*
 * JQuery functions for slideout feedback form
 *
 * Sets up a sliding form on click of a feedback button
 * On submit button will send the data to a php script
 *
 * By http://www.paulund.co.uk
 */

(function ($) {

    feedback_button = {

        onReady: function () {
            this.feedback_button_click();
            this.sendFeedback();
        },

        feedback_button_click: function() {
            $('#feedback_button').click(function() {
                // $('.form').slideToggle();
                $('.form').animate({width:'toggle'}, 450);
            });
        },

        sendFeedback: function() {
            $('#submit_form').click(function() {
                if($('#feedback_text').val() != "") {

                    $('.status').text("");

                    $.ajax({
                        type: "POST",
                        url: "modules/mod_bw-feedback/mailer.php",
                        data: 'feedback=' + $('#feedback_text').val(),
                        success: function(result, status) {
                            //email sent successfully displays a success message
                            if(result == 'Message Sent') {
                                $('.status').text("Feedback sent");
                            } else {
                                $('.status').text("Feedback failed to send");
                            }
                        },
                        error: function(result, status) {
                            $('.status').text("Feedback failed to send");
                        }
                    });
                }
            });
        },
    };

    $().ready(function () {
        feedback_button.onReady();
    });

})(jQuery);
