<?php
/*
Template Name: Profile
*/
get_header();
?>
  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header><!-- .entry-header -->
<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p class="breadcrumb" id="breadcrumbs">','</p>' );
}
?>
    <div class="profile">
        <div class="container">
            <div class="profile__inner">
                <div class="profile__column m-photo">
                    <div class="profile__photo">
                        <img src="/wp-content/themes/bishop-wilkinson/src/assets/images/placeholder-men-1.jpg" alt="profile-image">
                    </div>
                    <span class="profile__name">Job Title, Job Title</span>
                    <span class="profile__descr">
                        <p>Email@email.com</p>
                        <p>0123 456 789</p>
                    </span>
                </div>
                <div class="profile__column m-descr">
                    <p>Paragraph - Montserrat Regular 16px Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata. Lorem ipsum dolor sit amet, consetetur.Montserrat Regular 16px Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata.</p>
                    <p>Lorem ipsum dolor sit amet, consetetur.Montserrat Regular 16px Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata. Lorem ipsum dolor sit amet, consetetur.Montserrat Regular 16px Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata. Lorem ipsum dolor sit amet, consetetur.</p>
                </div>
                <div class="profile__control-links"><a href="#">PREVIOUS</a><a href="#">NEXT</a></div>
            </div>
        </div>
    </div>
<?php
get_sidebar();
get_footer();
