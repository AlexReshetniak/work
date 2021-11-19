<?php
/*
Template Name: Governed Page
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
  <div class="governed">
    <div class="container">
      <div class="governed-image">
        <div class="governed-image__title">
          Governance structure
        </div>
        <div class="governed-image__image">
          <img src="http://bwcet.loc/wp-content/uploads/2021/06/governance_structure-1.jpg" alt="">
        </div>
      </div>
      <div class="governed-description">
        <div class="governed-description__col">
          <div class="description-title">
            Members
          </div>
          <div class="description-content">
            <p>The Trust has five Members who are accountable to the DfE. The Members are the guardians of the constitution, determining the governance structure of the Trust and providing oversight and challenge of the Directors to ensure the charitable objectives of the Trust are being fulfilled and a Catholic education is provided.
              Members approve the Articles of Association and have the power to appoint and remove the Directors. Members appoint the Board of Directors to ensure the MAT is run in accordance with its aims and objectives.
              In view of the overarching role of the Members, the Bishop of Hexham and Newcastle is a Member and appoints other Members from within the Diocese of Hexham and Newcastle. Members are independent of the Directors.</p>
          </div>
          <div class="description-members">
            <div class="description-members__title">
              Our members are:
            </div>
            <div class="description-members__item">
              Bishop R Bryne
              <a href="#">view profile</a>
            </div>
            <div class="description-members__item">
              Mrs D Fox
              <a href="#">view profile</a>
            </div>
            <div class="description-members__item">
              Mr J Ledger
              <a href="#">view profile</a>
            </div>
            <div class="description-members__item">
              Rev S Lerche
              <a href="#">view profile</a>
            </div>
            <div class="description-members__item">
              Rev Canon Peter Leighton
              <a href="#">view profile</a>
            </div>
          </div>
        </div>
        <div class="governed-description__col">
          <div class="description-title">
            Trust Board of Directors
          </div>
          <div class="description-content">
            <p>
              The Directors have overall responsibility and ultimate decision-making authority for all the work of the Trust, including the establishing and maintaining of the schools within the Trust. The Directors have the power to direct change where required.
              There are no “terms of reference” for the Trust Board as the detail is set out in the Articles of Association. A summary of the key responsibilities of the Directors is set out in the Scheme of Delegation (put link into Our policies, SoD). Directors meet twice each term.
            </p>
            <p>Directors are responsible for:</p>
            <ul>
              <li>
                Ensuring the quality of educational provision
              </li>
              <li>
                Challenging and monitoring performance
              </li>
              <li>
                Managing finances and property
              </li>
            </ul>
            <p>
              The Board has a number of committees established to undertake detailed and focused work in the areas of finance and audit.  The committees meet at least termly.  You can find details of the roles and remit of the <strong>Trust Board Committees</strong> here.
            </p>
          </div>
          <div class="description-members">
            <div class="description-members__title">
              Our Directors are
            </div>
            <div class="description-members__item">
              Cllr Martin Gannon
              <a href="#">view profile</a>
            </div>
            <div class="description-members__item">
              Christopher Coxon
              <a href="#">view profile</a>
            </div>
            <div class="description-members__item">
              Fr Mark Millward
              <a href="#">view profile</a>
            </div>
            <div class="description-members__item">
              Angela Boyle
              <a href="#">view profile</a>
            </div>
            <div class="description-members__item">
              Claire Reid
              <a href="#">view profile</a>
            </div>
            <div class="description-members__item">
              Michelle Harrison
              <a href="#">view profile</a>
            </div>
            <div class="description-members__item">
              Ian Mearns MP
              <a href="#">view profile</a>
            </div>
          </div>
        </div>
      </div>
      <div class="governed-info">
        <div class="governed-info__col">
          <div class="info-title">
            Local Governing Committees
          </div>
          <div class="info-content">
            <p>
              The Trust Board has established Local Governing Committees for each of the Academies, made up of individuals drawn from the Academy’s community, both as elected and appointed members.
            </p>
            <p>
              Those serving on the Local Governing Committee are accountable to the Directors and the Bishop and must ensure that at all times they act in good faith and in the best interests of the Academies and the Trust, exercising care, skill and having particular regard to personal knowledge and experience.
            </p>
            <p>
              The role of a Governor within the Trust is an important one. The governance structure ensures that as far as possible the responsibility to govern is vested in those closest to the impact of decision making.
            </p>
            <p>
              Details of the Governors for each school can be found on each schools website.
            </p>
            <p>
              If you would like more information about being a Governor please see “Becoming a Governor” section or contact <strong>governance@bwcet.com</strong>
            </p>
          </div>
        </div>
        <div class="governed-info__col">
          <div class="info-contacts">
            <div class="info-contacts__title">
              Contacts
            </div>
            <div class="info-contacts__item">
              <div class="info-contacts__item-position">Trust Board</div>
              <a href="#">governance@bwcet.com</a>
            </div>
            <div class="info-contacts__item">
              <div class="info-contacts__item-position">Clerk to Trust Board</div>
              <div class="info-contacts__item-name">Gillian Hodgson</div>
              <a href="#">governance@bwcet.com</a>
            </div>
            <div class="info-contacts__item">
              <div class="info-contacts__item-position">Director of Governance for the Trust</div>
              <div class="info-contacts__item-name">Jacqui Ridley</div>
              <a href="#">jry@bwcet.com</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
get_sidebar();
get_footer();
