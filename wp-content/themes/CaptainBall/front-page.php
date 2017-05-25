<?php

	get_header();

?>

<!-- Top -->

	<?php
		$top_bg = get_field('top_bg');
		$top_description = get_field('top_description');
		$top_title = get_field('top_title');
		$button1 = get_field('button1');
		$button2 = get_field('button2');
	?>

  <div class="parallax-container front-topbg" id="topbar">
    <div class="parallax">
      <img src="<?php echo $top_bg ?>">
    </div>
    <div class="front-top-contents">
      <p><?php echo $top_description ?></p>
      <h1><?php echo $top_title ?></h1>
      <div class="front-top-btn">
        <a class="button btn-orange" href="#def"><?php echo $button1 ?></a>
        <a class="button btn-grey" href="#join-us"><?php echo $button2 ?></a>
      </div>
    </div>
  </div>

<!-- Definition -->

	<?php
		$definition_title = get_field('definition_title');
		$definition_des = get_field('definition_des');
	?>

  <div class="front-section2" id="def">
    <div class="row container front-section2-contents">
      <h2 class="header"><?php echo $definition_title ?></h2>
      <p><?php echo $definition_des ?></p>
    </div>
  </div>

<!-- Equipments -->
	
	<?php
		$equipments_header = get_field('equipments_header');
	?>

  <div class="front-section3" id="equipments">
    <div class="front-section3-contents">
      <div class="row container">
        <h2>Equipments</h2>
      </div>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="masonry section3-items">

          	<?php if( have_rows('equipments_items') ): ?>

            

	            <?php while( have_rows('equipments_items') ): the_row(); 

					$item_image = get_sub_field('item_image');
					$item_title = get_sub_field('item_title');
					$item_description = get_sub_field('item_description');

				?>
				<div class="item">
		            <a href=""><img src="<?php echo $item_image ?>"></a>
		            <div class="section3-text">
		              <h4><?php echo $item_title ?></h4>
		              <h6><?php echo $item_description ?></h6>
		            </div>
	            </div>
	            <?php endwhile; ?>

	       

	    	<?php endif; ?>

          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </div>

<!-- Parallax 2 -->
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
	<div class="rules" id="rules">
		<div class="container rules-contain main-contain">
			<div class="rules-title">
				<h2>Bacis Rules of Captainball</h2>
			</div>
		</div>
		<div class="rules-content">
			<div class="rule">
				<div class="rule-des">
					<h4>Goal</h4>
					<h6>The Catcher must catch/hold the Ball with both hands while remaining on the Stool for 3 seconds. The Ball must be released from the Shooter’s hands to the Catcher (No direct passing). The Catcher can throw the Ball back onto Court for play to continue.</h6>
				</div>
				<div class="rule-img">
					<img src="images/section5-1.jpg">
				</div>
				<div class="hover-slider">
					<div class="slider-left"></div>
					<div class="slider-right"></div>
				</div>
			</div>
			<div class="rule">
				<div class="rule-des">
					<h4>Attacking</h4>
					<h6>The Catcher must be on the Stool at all times. Jumping is allowed. But the Catcher is not allowed to go down from the stool and participate in open play.Attacking Players cannot be in the Defender’s Box at any time.</h6>
				</div>
				<div class="rule-img">
					<img src="images/section5-2.jpg">
				</div>
				<div class="hover-slider">
					<div class="slider-left"></div>
					<div class="slider-right"></div>
				</div>
			</div>
			<div class="rule">
				<div class="rule-des">
					<h4>Defending</h4>
					<h6>There is a Defender’s Box (2ft radius) in front of the Catcher’s Stool. Only 1 player of the Defending Team is allowed to be in the Defender’s Box at any one time. Defending Players can only tap the Ball away from the Catcher if the Catcher does not catch the Ball with 2 hands.</h6>
				</div>
				<div class="rule-img">
					<img src="images/section5-3.jpg">
				</div>
				<div class="hover-slider">
					<div class="slider-left"></div>
					<div class="slider-right"></div>
				</div>
			</div>
		</div>
	</div>

<!-- Join Us -->
	<div class="container-fuild join-us" id="join-us">
		<div class="container main-contain">
			<h2>Want to know more? Check our website link below and join us now!</h2>
			<a class="button btn-orange" href="https://www.facebook.com/copaibasports" target="_blank">Copa Iba</a>
		</div>
	</div>

<?php

	get_footer();

?>