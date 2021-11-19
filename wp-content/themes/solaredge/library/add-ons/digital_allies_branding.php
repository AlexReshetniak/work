<?php
// Add 'Developed by Digital Allies' to the bottom of the CMS
function modify_admin_footer()
{
    _e('<span id="footer-thankyou">Developed by <a href="https://allies-group.com" target="_blank">Allies Group</a></span>', 'themefooter');
}

add_filter('admin_footer_text', 'modify_admin_footer');