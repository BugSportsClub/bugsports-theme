<?php get_header();?>

  <div class="media-banner">
<!--
    <video class="media-banner__video" poster="<?php echo get_template_directory_uri();?>/assets/images/bg-home.jpg" autoplay loop>
      <source src="<?php echo get_template_directory_uri();?>/assets/images/bg-home.m4v" type="video/mp4">
      <source src="<?php echo get_template_directory_uri();?>/assets/images/bg-home.mp4" type="video/mp4">
      <source src="<?php echo get_template_directory_uri();?>/assets/images/bg-home.ogg" type="video/ogg">
      <source src="<?php echo get_template_directory_uri();?>/assets/images/bg-home.webm" type="video/webm">
    </video>
-->
    <img src="<?php echo get_template_directory_uri();?>/assets/images/banner.jpg">

<!--
    <div class="introduction">
      <span class="introduction__introducing">introducing</span>
      <span class="introduction__the">the</span>
      <span class="introduction__bugsports">BugSports Club</span>
      <span class="introduction__homegrown">
        <span class="introduction__bar"></span>
        homegrown
        <span class="introduction__bar"></span>
      </span>
      <span class="introduction__kiwi">New Zealand Water Sports</span>
    </div>
-->

  </div>

  <section style="margin-bottom: 50px;" class="medium-collapse">

    <div class="row">
      <div class="medium-6 columns text-right" style="margin-top: 50px;">
        <h3 style="color: #22b8eb;">On the Pool</h3>
        <p style="font-size: 1.1em; color: #7A8491">Derived from water polo and evolved around the River Bug, BugPolo is a homegrown pool sport everyone can enjoy.</p>
        <a class="" href="bugpolo" style="color: #FF992E;">« Discover the joy of BugPolo</a>
      </div>

      <div class="medium-6 columns" style="margin-top: 50px;">
        <h3 style="color: #22b8eb;">In the River</h3>
        <p style="font-size: 1.1em; color: #7A8491">From breathtaking scenery to thrilling rapids, River Bugging is the perfect way to experience New Zealand rivers.</p>
        <a class="" href="river-bugging" style="color: #FF992E;">Experience River Bugging »</a>
      </div>
    </div>

  </section>

  <div style="float: none; clear: both;"></div>

  <div class="parallax action"></div>

  <div class="parallax adventure"></div>

  <div style="float: none; clear: both;"></div>

<?php get_footer();?>
