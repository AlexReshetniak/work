<?php
/*
Template Name: Contact PAge
*/
get_header();
?>
  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header>
  <p class="breadcrumb" id="breadcrumbs"><span><span><a href="http://bwcet.loc/">Home</a> / <strong class="breadcrumb_last" aria-current="page">Teacher of English</strong></span></span></p>
  <div class="contact">
    <div class="container common-form">
        <span class="contact-sub common-form__sub">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</span>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit</p>
        <span class="contact-title">Our location</span>
        <div class="contact-map"></div>
        <div class="contact-form common-form">
            <div class="contact-form__row common-form__row">
                <label for="">Name <i class="i-rqrd">*</i></label>
                <input type="text">
            </div>
            <div class="contact-form__row common-form__row">
                <label for="">Email address <i class="i-rqrd">*</i></label>
                <input type="text">
            </div>
            <div class="contact-form__row common-form__row">
                <label for="">Subject <i class="i-rqrd">*</i></label>
                <input type="text">
            </div>
            <div class="contact-form__row common-form__row">
                <label for="">Message <i class="i-rqrd">*</i></label>
                <input type="textarea">
            </div>
            <div class="contact-form__row-ext">
                <button type="submit">Send</button>
                <span class="common-form__rqr"><i>*</i>Required fields</span>
            </div>
            <div class="contact-form__row m-chk">
                <input type="checkbox" id='chk'>
                <label for="chk">Tick this box</label>
                <p>This content is created by the owner of the form. The data you submit will be sent to the form owner. Microsoft is not responsible for the privacy or security practices of its customers, including those of this form owner. Never give out your password.</p>
            </div>
        </div>
    </div>
  </div>
<?php
get_sidebar();
get_footer();
