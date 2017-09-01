<?php
/**
 * @package     ${NAMESPACE}
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */
defined('JPATH_BASE') or die;

$doc = JFactory::getDocument();
$doc->addStyleSheet('modules/mod_bw-feedback/styles/style.css');
?>

<div class="feedback">
    <a id="feedback_button">Feedback</a>

    <div class="form">

        <h2>Please send us your feedback</h2>

        <textarea id="feedback_text"></textarea>
        <div>
            <span><input type="button" value="Send" id="submit_form" /></span>
            <span class="status"></span>
        </div>
    </div>
</div>