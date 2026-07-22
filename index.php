<?php

get_header();

?>

<main class="container">

<h1>

<?php

the_title();

?>

</h1>

<?php

if(

have_posts()

):

while(

have_posts()

):

the_post();

the_content();

endwhile;

endif;

?>

</main>

<?php

get_footer();

?>