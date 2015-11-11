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

  </div>


<?php get_footer();?>