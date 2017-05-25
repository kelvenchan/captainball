<?php

	get_header();

?>

<!-- Top -->
  <div class="parallax-container front-topbg" id="topbar">
    <div class="parallax">
      <img src="images/bg.jpg">
    </div>
    <div class="front-top-contents">
      <p>introducing</p>
      <h1>Captain Ball</h1>
      <div class="front-top-btn">
        <a class="button btn-orange" href="#def">Learn More</a>
        <a class="button btn-grey" href="#join-us">Participate</a>
      </div>
    </div>
  </div>

<!-- Definition -->
  <div class="front-section2" id="def">
    <div class="row container front-section2-contents">
      <h2 class="header">Definition</h2>
      <p>a game similar to basketball played on an area marked with six circles by teams of seven or more players who try to pass the ball to the player stationed in the end circle.</p>
    </div>
  </div>

<!-- Equipments -->
  <div class="front-section3" id="equipments">
    <div class="front-section3-contents">
      <div class="row container">
        <h2>Equipments</h2>
      </div>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="masonry section3-items">
            <div class="item">
              <a href=""><img src="images/section3-2.jpg"></a>
              <div class="section3-text">
                <h4>Standard Ball</h4>
                <h6>Any kinds of football or basketball sized ball is acceptable.</h6>
              </div>
            </div>
            <div class="item">
              <a href=""><img src="images/section3-3.jpg"></a>
              <div class="section3-text">
                <h4>Team Apparel</h4>
                <h6>Bands or other markers may be needed to distinguish teams.</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </div>

<!-- Parallax 2 -->
  <?php
    $play_title = get_field('play_title');
    $play_des = get_field('play_des');
    $play_bg = get_field('play_bg');
    ?>
  <div class="parallax-container" id="play">
    <div class="parallax">
      <img src="images/front1.jpg">
      <div class="container main-contain">
        <div class="play-des">
          <h2>How to Play</h2>
          <p>Captain Ball is a 13 player team sport with 9 players(6 girls, 3 guys) per team on court. It is with a Catcher(on the stool) and Defender from both teams on each end. The objective of the game for each team is to score a goal by having the Catcher (on the stool) catch the ball whilst still standing on the stool steadily. The team that scores the most points wins.</p>
        </div>
      </div>
    </div>
  </div>

<!-- Rule -->
  <?php
    $rules_title = get_field('rules_title');
    ?>
	<div class="rules" id="rules">
		<div class="container rules-contain main-contain">
			<div class="rules-title">
				<h2>Bacis Rules of Captainball</h2>
			</div>
		</div>
    <?php if( have_rows('rules_repeater') ): ?>
		  <div class="rules-content">

      <?php while( have_rows('rules_repeater') ): the_row(); 
        $rule_subtitle = get_sub_field('rule_subtitle');
        $rule_des = get_sub_field('rule_des');
        $rule_bg = get_sub_field('rule_bg');
        ?>

			<div class="rule">
				<div class="rule-des">
					<h4><?php echo $rule_subtitle ?></h4>
					<h6><?php echo $rule_des ?></h6>
				</div>
				<div class="rule-img">
					<img src="<?php echo $rule_bg ?>">
				</div>
				<div class="hover-slider">
					<div class="slider-left"></div>
					<div class="slider-right"></div>
				</div>
			</div>

      <?php endwhile; ?>
		</div>
    <?php endif; ?>
	</div>

<!-- Join Us -->
  <?php
    $participate_title = get_field('participate_title');
    $participate_btn = get_field('participate_btn');
    $participate_btn_link = get_field('participate_btn_link');
    ?>
	<div class="container-fuild join-us" id="join-us">
		<div class="container main-contain">
			<h2><?php echo $participate_title ?></h2>
			<a class="button btn-orange" href="<?php echo $participate_btn_link?>" target="_blank"><?php echo $participate_btn?></a>
		</div>
	</div>

<?php

	get_footer();

?>