<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Digital_Allies
 * 
 * 
 */

 /**
 * Template Name: Home 
 */

get_header();
?>
<div class='main'>
    <div class='clients'>
        <ul>
            <?php
                $clients = get_field('clients');
                if( $clients ) {
                  foreach( $clients as $row ) {
                    $img = $row['clients_img'];
                    ?>
                    <li>
                      <img src="<?php echo $img ?>" alt="<?php echo $img ?>">
                    </li>
                    <?php
                  }
                }
              ?>
        </ul>
    </div>
    <div class='main__container'>
      <div class='left-sidebar'>
        <div class='search'>
          <h3 class='title'>SEARCH</h3>
          <form class='search__form'>
								<input class='search__input' type='text' placeholder='Fulltext search'>
								<button class='search__btn' type='submit'><img src="<?= get_field('search_img') ?>" alt="<?= get_field('search_img') ?>"></button>
					</form>
        </div>
        <div class='info'>
          <h3 class='title'>INFO</h3>
          <?php 
          $info = get_field('info');
          if($info) {
            foreach($info as $row) {
              $info_photo = $row['info_photo'];
              $info_name = $row['info_name'];
              $info_contacts = $row['info_contacts'];
            ?>
            <div class='info__photo'>
              <?php
              if($info_photo) {
                ?>
                <img src="<?= $info_photo?>" alt="<?= $info_photo?>">
                <?php
              }
              if($info_name) {
                ?>
                <h6><?= $info_name?></h6>
                <?php
              }
              ?>
            </div>
            <ul class='info__contacts'>
              <?php 
                if($info_contacts) {
                  foreach($info_contacts as $row) {
                    $info_contacts_icon = $row['info_contacts_icon'];
                    $info_contacts_prefix = $row['info_contacts_prefix'];
                    $info_contacts_address = $row['info_contacts_address'];
                    ?>
                    <li class='info__contact'>
                      <?php
                      if($info_contacts_icon) {
                        ?>
                        <div><img src="<?= $info_contacts_icon?>" alt="<?= $info_contacts_icon?>"></div>
                        <?php
                      }
                      if($info_contacts_address) {
                        ?>
                        <a href="<?= $info_contacts_prefix?><?= $info_contacts_address?>"><?= $info_contacts_address?></a>
                        <?php
                      }
                      ?>
                    </li>
                    <?php
                  }
                }
              ?>
            </ul>
            <?php
            }
          }
          ?>
        </div>
        <div class='calendar'>
          <h3 class='title'>SEARCH</h3>
          <table id="calendar2">
            <thead>
              <tr><td>‹<td colspan="5"><td>›
              <tr><td>M<td>T<td>W<td>T<td>F<td>S<td>S
            <tbody>
          </table>
          <div class='calendar__events'>
            <h3>Events at 26 Jan</h3>
            <ul>
              <li>
                <h5>Name</h5>
                <p>Second event</p>
              </li>
              <li>
                <h5>Dates</h5>
                <p>Thu, 01/18/2018 – 09:00 - 10:00</p>
              </li>
            </ul>
          </div>
          <ul class='pagination pagination_circle'>
            <li><a href=""></a>Prev</li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a>Next </li>
          </ul>
        </div>
        <div class='time'>
          <h3 class='title'>TIME ZONE</h3>
          <div></div>
          <ul class='time__city'>
            <li>
              <div>Chicago</div>
              <div>
                <span>09:11</span>
                <span>AM</span>
              </div>
            </li>
            <li>
              <div>Los Angeles</div>
              <div>
                <span>07:11</span>
                <span>AM</span>
              </div>
            </li>
            <li>
              <div>Jerusalem</div>
              <div>
                <span>17:11</span>
                <span>PM</span>
              </div>
            </li>
            <li>
              <div>Tokyo</div>
              <div>
                <span>00:11</span>
                <span>PM</span>
              </div>
            </li>
            <li>
              <div>Berlin</div>
              <div>
                <span>16:11</span>
                <span>PM</span>
              </div>
            </li>
            <li>
              <div>Brussels</div>
              <div>
                <span>16:11</span>
                <span>PM</span>
              </div>
            </li>
            <li>
              <div>Copenhagen</div>
              <div>
                <span>16:11</span>
                <span>PM</span>
              </div>
            </li>
            <li>
              <div>London</div>
              <div>
                <span>15:11</span>
                <span>PM</span>
              </div>
            </li>
            <li>
              <div>Paris</div>
              <div>
                <span>16:11</span>
                <span>PM</span>
              </div>
            </li>
          </ul>
        </div>
        <div class='exchange'>
          <h3 class='title'>EXCHANGE</h3>
          <p>Exchange rates for USD</p>
          <ul>
            <li>
              <span>AUD</span>
              <span>1.2345</span>
            </li>
            <li>
              <span>EUR</span>
              <span>0.8062</span>
            </li>
            <li>
              <span>ILS</span>
              <span>3.4046</span>
            </li>
            <li>
              <span>CNY</span>
              <span>6.3282</span>
            </li>
            <li>
              <span>JPY</span>
              <span>108.7265</span>
            </li>
          </ul>
        </div>
      </div>
      <div class='content'>
        <div class='event'>
          <h2>Events</h2>
          <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, accusamus!</h5>
          <p class='event__text'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, quae cumque doloribus deleniti magnam delectus expedita odio qui! Architecto illo exercitationem reiciendis amet blanditiis voluptatibus autem accusamus aliquam, soluta itaque!</p>
          <p class='more-link'><a href="">Read More</a></p>
          <ul class='pagination'>
            <li><a href=""></a>Prev</li>
            <li><a href=""></a>1</li>
            <li><a href=""></a>2</li>
            <li><a href=""></a>3</li>
            <li><a href=""></a>Next </li>
          </ul>
        </div>
        <div class='office'>
          <div class='office__head'>
            <h2>Choose Office</h2>
            <form class='search__form'>
                  <input class='search__input search__input_width' type='text' placeholder='Search by City'>
                  <button class='search__btn search__btn_width' type='submit'><div></div></button>
            </form>
          </div>
          <img src="<?= get_field('office_map_img') ?>" alt="">
          <div class='office__content'>
            <h3>Tel Aviv</h3>
            <div> 
              <div class='office__description'>
                <h5>Description</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae et sint, neque harum ab repudiandae error sed esse temporibus, reprehenderit exercitationem distinctio, pariatur facilis quae!</p>
              </div>
              <ul class='office__contact'>
                <li>
                  <h5>Phone</h5>
                  <a href="">+73 565 26 87</a>
                </li>
                <li>
                  <h5>Email</h5>
                  <a href="">tel-aviv@solaredge.com</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class='galleries'>
          <h2>Galleries</h2>
          <ul>
            <?php 
              $galleries = get_field('galleries');
              if($galleries) {
                foreach($galleries as $row) {
                  $galleries_img = $row['galleries_img'];
                  ?>
                  <li><img src="<?= $galleries_img?>" alt="<?= $galleries_img ?>"></li>
                  <?php
                }
              }
            ?>
          </ul>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ea est explicabo at consequuntur ex accusantium aspernatur laborum. Mollitia, recusandae quibusdam cumque nihil exercitationem, velit sequi quidem ex expedita totam, obcaecati aliquid. Est consequatur assumenda nemo reiciendis aperiam laudantium voluptatibus dolorem nostrum dolorum cum, aut minus eveniet excepturi placeat fuga.</p>
        </div>
        <div class='pagination'>
          <ul>
            <li><a href="">Page 1</a></li>
            <li><a href="">Next</a></li>
          </ul>
        </div>
      </div>
      <div class='right-sidebar'>
        <div class='news'>
          <h3 class='title'>NEWS</h3>
          <img src="<?= get_field('news_img') ?>" alt="<?= get_field('news_img') ?>">
          <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, doloribus?</h5>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis repellat autem magni dicta dolores eos, facilis modi aut eligendi corrupti.</p>
          <p class='more-link' ><a href="">Read More</a></p>
          <p>Submitted by priwashu on Tue,<br> 10/24/2017 - 15:27</p>
        </div>
        <div class='events'>
          <h3 class='title'>EVENTS</h3>
          <ul>
            <?php
                $person_block = get_field('person-block');
                if( $person_block ) {
                  foreach( $person_block as $row ) {
                    $person_block_photo = $row['person-block_photo'];
                    $person_block_date = $row['person-block_date'];
                    $person_block_holiday = $row['person-block_holiday'];
                    $person_block_holiday_img = $row['person-block_holiday_img'];
                    $person_block_name = $row['person-block_name'];
                    $person_block_name_text = $row['person-block_name_text'];
                    ?>
                    <li class='person-block'>
                      <div class='person-block__photo'>
                        <?php 
                          if($person_block_photo) {
                            ?>
                            <img src="<?= $person_block_photo ?>" alt="<?= $person_block_photo ?>">
                            <?php
                          }
                          if($person_block_date) {
                            ?>
                            <p><?= $person_block_date ?></p>
                            <?php
                          }
                          ?>
                      </div>
                      <div class='person-block__information'>
                        <div class='person-block__holiday'>
                          <?php 
                          if($person_block_holiday_img) {
                            ?>
                            <img src="<?= $person_block_holiday_img ?>" alt="<?= $person_block_holiday_img ?>">
                            <?php
                          }
                          if($person_block_holiday) {
                            ?>
                            <span><?= $person_block_holiday ?></span>
                            <?php
                          }
                          ?>
                        </div>
                        <?php
                          if($person_block_name) {
                            ?>
                            <h6><?= $person_block_name ?></h6>
                            <?php
                          }
                          if($person_block_name_text) {
                            ?>
                            <p><a href=""><?= $person_block_name_text ?></a></p>
                            <?php
                          }
                          ?>
                      </div>
                    </li>
                    <?php
                  }
                }
              ?>
          </ul>
        </div>
      </div>
    </div>
</div>

<?php
get_footer();