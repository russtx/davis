<?php get_header(); ?>


<?php
if ( is_user_logged_in() ) {
    echo 'Welcome, registered user!';
} else {
    echo 'Welcome, visitor!';
}
?>



<?php get_footer(); ?>
