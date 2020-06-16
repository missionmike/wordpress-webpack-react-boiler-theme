<?php
/**
 * Copyright and bottom-most links
 */

defined ( 'ABSPATH' ) or die('');

global $WPWP_SITE_OWNER;

?>
<footer class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="copyright">Copyright &copy; <?php echo date( 'Y' ); ?> <?php echo $WPWP_SITE_OWNER; ?>.</p>
            </div>
        </div>
    </div>
</footer>
