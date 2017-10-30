<?php
/**
    Template Name: HUB
 */
?>
<?php get_header()?>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src=".assets/isotope.pkgd.min.js"></script>
<script src=".assets/script.js"></script>


<div class="hubcontainer">
  <div class="communitybar">
    <div class="communitycontainer">
      <div class="healthanalysis">
        <a href="#"><h3>Health Analysis</h3></a>
        <a href="#"><h3>Health Statistics</h3></a>







      </div>
      <div class="chatrooms">
        <a href="#"><h3>Community Chat Room</h3></a>
        <a href="#"><h3>Health Advisory Chat Room</h3></a>






      </div>
      <div class="healthdata">
        <a href="#"><h3>Health Data Resources</h3></a>
        <a href="#"><h3>Health Database/Categories</h3></a>





      </div>
      <div class="comprofile">
        <a href="#"><h3>Public Profiles</h3></a>
        <a href="#"><h3>General Information</h3></a>




      </div>
  </div>
</div>
  <div class="newsbar">
    <div class="newsarticles">
        <div class="isotope">
          <div class="iso-nav">
            <ul>
              <li class="active" data-filter="*">All Items</li>
              <li data-filter=".mental">Mental Stress</li>
              <li data-filter=".aware">Awareness</li>
              <li data-filter=".news">News</li>
            </ul>
          </div>
        </div>
        <!-- Posts Area -->
      <div class="posts_area">
        <?php $loop = new WP_Query( array( 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
         <?php while( $loop->have_posts() ) : $loop->the_post();?>
      <!-- listing box -->
        <div class="listing">
         <!-- listing title -->

         <!-- <div class="listingTitle"><?php the_title(); ?></div> -->
         <!-- listing content -->
         <div class="listingContent"><?php the_content(); ?></div>
       </div>
        <?php endwhile; ?>
            <?php wp_reset_postdata(); // reset the query ?>
      <!-- listing box ends -->
       <div class="nav_links">
         <?php posts_nav_link(); ?>
      </div>
    </div>

            <!-- <a href="https://www.stuff.co.nz/national/health/97832837/nelson-woman-georgie-ferris-struggling-to-keep-weight-on"><img src="https://resources.stuff.co.nz/content/dam/images/1/m/8/v/v/5/image.related.StuffLandscapeSixteenByNine.620x349.1m8wat.png/1508097971291.jpg" alt="Click here to jump to the page"></a>
          </div>

          <div class="newsboxes news">
            <a href="https://www.stuff.co.nz/nelson-mail/news/97681386/nelson-doctor-swaps-joint-replacements-for-trauma-cases-in-haiti"><img src="https://resources.stuff.co.nz/content/dam/images/1/m/a/6/s/y/image.related.StuffLandscapeSixteenByNine.620x349.1m5nfu.png/1508043682423.jpg" alt="Click here to jump to the page"></a>
          </div>

          <div class="newsboxes mental">
            <a href="https://www.stuff.co.nz/life-style/well-good/teach-me/97841599/how-to-reverse-insomnia-a-sleep-expert-offers-advice"><img src="https://resources.stuff.co.nz/content/dam/images/1/h/v/1/2/r/image.related.StuffLandscapeSixteenByNine.620x349.1m9327.png/1507943809042.jpg" alt="Click here to jump to the page"></a>
          </div>

          <div class="newsboxes aware">
            <a href="https://www.stuff.co.nz/national/health/97852874/survivor-baby-chrissa-squire-back-in-christchurch-but-journey-to-take-quite-a-while"><img src="https://resources.stuff.co.nz/content/dam/images/1/m/6/f/f/e/image.related.StuffLandscapeSixteenByNine.620x349.1m9bre.png/1507877341646.jpg" alt="Click here to jump to the page"></a>
          </div>

          <div class="newsboxes mental">
            <a href="https://www.stuff.co.nz/national/health/97532959/top-models-artists-and-sportspersons-support-kiwi-mental-health-app"><img src="https://resources.stuff.co.nz/content/dam/images/1/m/8/4/x/v/image.related.StuffLandscapeSixteenByNine.620x349.1m2gwv.png/1507862520870.jpg" alt="Click here to jump to the page"></a>
          </div>

          <div class="newsboxes news">
            <a href="https://www.stuff.co.nz/marlborough-express/news/97721703/manaaki-ngahere-reveals-healing-properties-of-native-plants"><img src="https://resources.stuff.co.nz/content/dam/images/1/m/6/m/p/k/image.related.StuffLandscapeSixteenByNine.620x349.1m6ijr.png/1507766347472.jpg" alt="Click here to jump to the page"></a> -->
          <!--</div>-->

    </div>


  </div>

</div>



</div>
<?php get_footer();?>
