<?php get_header();?>
  
  <div class="media-banner">
    <video class="media-banner__video" autoplay loop>
      <source src="<?php echo get_template_directory_uri();?>/assets/images/bg-home.m4v" type="video/mp4">
      <source src="<?php echo get_template_directory_uri();?>/assets/images/bg-home.mp4" type="video/mp4">
      <source src="<?php echo get_template_directory_uri();?>/assets/images/bg-home.ogg" type="video/ogg">
      <source src="<?php echo get_template_directory_uri();?>/assets/images/bg-home.webm" type="video/webm">
    </video>

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

    <a class="discover">Discover More Below</a>
  </div>

  <div class="row" style="padding: 15px 0px">
    <div class="medium-6 column text-right">
      <h1>BugPolo</h1>
      <p style="font-size: 1.25em;">Derived from water polo and evolved around the River Bug, BugPolo is a homegrown pool sport everyone can enjoy.</p>
      <a class="button" href="bugpolo">Get on the pool</a>
    </div>

    <div class="medium-6 column">
      <h1>River Bugging</h1>
      <p style="font-size: 1.25em;">From breathtaking scenery to thrilling rapids, River Bugging is the perfect way to experience New Zealand rivers.</p>
      <a class="button" href="river-bugging">Get on the river</a>
    </div>
  </div>

<?php get_footer();?>

