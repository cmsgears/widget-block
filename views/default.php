<?php if( !empty( $widget->bkgUrl ) ) { ?>
	<?php if( $widget->bkg ) { ?>
		<div class="block-bkg <?= $widget->bkgClass ?>" <?= "style=\"background-image:url($widget->bkgUrl);\"" ?>></div>
	<?php } ?>

	<?php if( $widget->fixedBkg ) { ?>
		<div class="block-bkg-fixed <?= $widget->bkgClass ?>" <?= "style=\"background-image:url($widget->bkgUrl);\"" ?>></div>
	<?php } ?>

	<?php if( $widget->scrollBkg ) { ?>
		<div class="block-bkg-scroll <?= $widget->bkgClass ?>" <?= "style=\"background-image:url($widget->bkgUrl);\"" ?>></div>
	<?php } ?>

	<?php if( $widget->parallaxBkg ) { ?>
		<div class="block-bkg-parallax <?= $widget->bkgClass ?>" <?= "style=\"background-image:url($widget->bkgUrl);\"" ?>></div>
	<?php } ?>
<?php } ?>

<?php if( $widget->texture ) { ?>
	<div class="texture <?= $widget->textureClass ?>"></div>
<?php } ?>

<?php if( $widget->maxCover ) { ?>
	<div class="max-cover <?= $widget->maxCoverClass ?>">
		<?= $widget->maxCoverContent ?>
	</div>
<?php } ?>

<div class="block-content-wrap">
	<?php if( $widget->header ) { ?>
		<div class="block-header">
			<?php if( $widget->headerIcon && !empty( $widget->headerIconClass ) ) { ?>
				<div class="block-header-icon"><i class="<?= $widget->headerIconClass ?>"></i></div>
			<?php } ?>
			<?php if( $widget->headerIcon && !empty( $widget->headerIconUrl ) ) { ?>
				<div class="block-header-icon"><img src="<?= $widget->headerIconUrl ?>" /></div>
			<?php } ?>
			<?php if( !empty( $widget->headerTitle ) ) { ?>
				<div class="block-header-title"><?= $widget->headerTitle ?></div>
			<?php } ?>
			<?php if( !empty( $widget->headerInfo ) ) { ?>
				<div class="block-header-info"><?= $widget->headerInfo ?></div>
			<?php } ?>
			<?php if( !empty( $widget->headerContent ) ) { ?>
				<div class="block-header-content"><?= $widget->headerContent ?></div>
			<?php } ?>
		</div>
	<?php } ?>

	<?php if( isset( $widget->content ) ) { ?>
		<div class="block-content">
			<?= $widget->contentData ?>
			<?php if( isset( $widget->buffer ) ) { ?>
				<?= $widget->bufferData ?>
			<?php } ?>
		</div>
	<?php } ?>

	<?php if( $widget->footer ) { ?>
		<div class="block-footer">
			<?php if( $widget->footerIcon && !empty( $widget->footerIconClass ) ) { ?>
				<div class="block-footer-icon"><i class="<?= $widget->footerIconClass ?>"></i></div>
			<?php } ?>
			<?php if( $widget->footerIcon && !empty( $widget->footerIconUrl ) ) { ?>
				<div class="block-footer-icon"><img src="<?= $widget->footerIconUrl ?>" /></div>
			<?php } ?>
			<?php if( !empty( $widget->footerTitle ) ) { ?>
				<div class="block-footer-title"><?= $widget->footerTitle ?></div>
			<?php } ?>
			<?php if( !empty( $widget->footerInfo ) ) { ?>
				<div class="block-footer-info"><?= $widget->footerInfo ?></div>
			<?php } ?>
			<?php if( !empty( $widget->footerContent ) ) { ?>
				<div class="block-footer-content"><?= $widget->footerContent ?></div>
			<?php } ?>
		</div>
	<?php } ?>
</div>
