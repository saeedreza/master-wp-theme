jQuery(document).foundation();
jQuery(document).ready(function() {
    jQuery('.accordion p:empty, .orbit p:empty').remove();
    jQuery('.archive-grid .columns').last().addClass('end');
});