<?php
use cmsgears\core\common\utilities\CodeGenUtil;
?>

<!-- Block Background -->
<?php if( $bkg ) { ?>
	<div class='block-bkg <?=$bkgClass?>' <?php if( isset( $bkgUrl ) ) echo "style='background-image:url($bkgUrl);'"?>></div>
<?php } ?>

<?php if( $fixedBkg ) { ?>
	<div class='block-bkg-fixed <?=$bkgClass?>' <?php if( isset( $bkgUrl ) ) echo "style='background-image:url($bkgUrl);'"?>></div>
<?php } ?>

<?php if( $scrollBkg ) { ?>
	<div class='block-bkg-scroll <?=$bkgClass?>' <?php if( isset( $bkgUrl ) ) echo "style='background-image:url($bkgUrl);'"?>></div>
<?php } ?>

<?php if( $parallaxBkg ) { ?>
	<div class='block-bkg-parallax <?=$bkgClass?>' <?php if( isset( $bkgUrl ) ) echo "style='background-image:url($bkgUrl);'"?>></div>
<?php } ?>

<!-- Block Texture -->
<?php if( $texture ) { ?>
	<div class='texture <?=$textureClass?>' <?php if( isset( $textureUrl ) ) echo "style='background-image:url($textureUrl);'"?>></div>
<?php } ?>

<!-- Block Max Cover -->
<?php if( $maxCover ) { ?>
	<div class='max-cover <?=$maxCoverClass?>'><?=$maxCoverContent?></div>
<?php } ?>

<!-- Content Wrapper -->
<div class="block-wrap-content <?=$contentWrapClass?>">
	
	<!-- Content Header -->
	<?php if( $header ) { ?>
		<div class='block-header <?=$headerClass?>'><?=$headerContent?></div>
	<?php } ?>

	<?php if( isset( $content ) ) { ?>
		<div class='block-content <?=$contentClass?>'><?=$contentData?></div>
	<?php } ?>

	<?php if( isset( $extraContent ) ) { ?>
		<?=$extraContent?>
	<?php } ?>
</div>