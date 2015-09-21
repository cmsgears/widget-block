<?php if( $bkg ) { ?>
	<div class='block-bkg' <?php if( isset( $bkgUrl ) ) echo "style='background-image:url($bkgUrl);'"?>></div>
<?php } ?>

<?php if( $fixedBkg ) { ?>
	<div class='block-bkg-fixed <?php if( isset( $bkgUrl ) ) echo "style='background-image:url($bkgUrl);'"?>'></div>
<?php } ?>

<?php if( $scrollBkg ) { ?>
	<div class='block-bkg-scroll <?php if( isset( $bkgUrl ) ) echo "style='background-image:url($bkgUrl);'"?>'></div>
<?php } ?>

<?php if( $parallaxBkg ) { ?>
	<div class='block-bkg-parallax <?php if( isset( $bkgUrl ) ) echo "style='background-image:url($bkgUrl);'"?>'></div>
<?php } ?>

<?php if( $texture ) { ?>
	<div class='texture <?=$textureClass?>'></div>
<?php } ?>

<div class="block-wrap-content">
	<?php if( isset( $headerContent ) ) { ?>
		<div class='block-header <?=$headerClass?>'><?=$headerContent?></div>
	<?php } ?>

	<?php if( isset( $content ) ) { ?>
		<div class='block-content <?=$contentClass?>'><?=$content?></div>
	<?php } ?>

	<?php if( isset( $extraContent ) ) { ?>
		<?=$extraContent?>
	<?php } ?>
</div>