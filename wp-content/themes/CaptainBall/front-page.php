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
  <?php
    $play_title = get_field('play_title');
    $play_des = get_field('play_des');
    $play_bg = get_field('play_bg');
    ?>
  <div class="parallax-container" id="play">
    <div class="parallax">
      <img src="<?php echo $play_bg ?>">
      <div class="container main-contain">
        <div class="play-des">
          <h2><?php echo $play_title ?></h2>
          <p><?php echo $play_des ?></p>
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