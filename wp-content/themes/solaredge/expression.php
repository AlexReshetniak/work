<?php
/*
Template Name: Expression
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
<div class="expression">
  <div class="container">
    <div class="expression-teaser">Thank you for your interest in the role of Governor at one of the Bishop Wilkinson Catholic Education Trust schools.</div>
    <div class="expression-description">
      <p>Please complete your details below and at the end click submit.</p>
      <p>The Governance Team will contact you to discuss the role and any suitable vacancies within 3 to 5 working days.</p>
    </div>
    <div class="expression-form">
      <?php
      the_content();
      ?>
      <div class="expression-form-required"><span>*</span> Required fields</div>
    </div>
  </div>
</div>
<?php
get_sidebar();
get_footer();
