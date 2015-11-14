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

<div class="clear" style="padding: 15px 0px">
  <div class="large-5 medium-6 column text-right">
    <h1>BugPolo</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud ut aliquip ex ea commodo
consequat.</p>
    <a class="button">Find Out More</a>
  </div>

  <div class="large-5 medium-6 large-push-2 column">
    <h1>River Bugging</h1>
    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <a class="button">Find Out More</a>
  </div>

  <div class="show-for-large-up large-2 large-pull-5 column">
    <div style="width: 100%; height: 200px; background: red;"></div>
  </div>
</div>

<?php get_footer();?>

