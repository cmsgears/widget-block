<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace cmsgears\widgets\block;

// Yii Imports
use yii\helpers\Html;

/**
 * Block forms a part of page either vertically or horizontally.
 *
 * @since 1.0.0
 */
class BasicBlock extends \cmsgears\core\common\base\Widget {

	// Variables ---------------------------------------------------

	// Globals -------------------------------

	// Constants --------------

	// Public -----------------

	// Protected --------------

	// Variables -----------------------------

	// Public -----------------

	public $wrap	= true;
	public $options = [ 'class' => 'block' ];
	public $buffer	= true;

	// Background
	public $bkg			= false;
	public $fixedBkg	= false;
	public $scrollBkg	= false;
	public $parallaxBkg	= false;
	public $bkgUrl		= null;
	public $bkgClass	= null;
	public $bkgVideo	= false;
	public $bkgVideoSrc	= null;

	// Texture
	public $texture			= false;
	public $textureClass	= null;

	// Max cover on top of block content
	public $maxCover		= false;
	public $maxCoverContent	= null;
	public $maxCoverClass	= null;

	// Block Header
	public $header			= false;
	public $headerIcon		= false;
	public $headerIconClass	= null;
	public $headerIconUrl	= null;
	public $headerTitle		= null;
	public $headerInfo		= null;
	public $headerContent	= null;

	// Block Content
	public $content			= false;
	public $contentTitle	= null;
	public $contentInfo		= null;
	public $contentSummary	= null;
	public $contentData		= null;

	public $contentClass		= null;
	public $contentDataClass	= null;

	public $contentBuffer	= false;
	public $bufferData		= null;

	public $contentBufferClass = null;

	// Block Footer
	public $footer			= false;
	public $footerIcon		= false;
	public $footerIconClass	= null;
	public $footerIconUrl	= null;
	public $footerTitle		= null;
	public $footerInfo		= null;
	public $footerContent	= null;

	// Elements Wrapper
	public $boxWrapClass	= null;
	public $boxWrapper		= null;
	public $boxClass		= null;

	// Protected --------------

	// Private ----------------

	// Traits ------------------------------------------------------

	// Constructor and Initialisation ------------------------------

    public function init() {

        parent::init();

		// Required in case content is generated manually
        ob_start();

        ob_implicit_flush( false );
    }

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

    public function renderWidget( $config = [] ) {

		// Default background class defined in css as - .bkg-block { background-image: url(<image url>) }
		if( $this->bkg && !isset( $this->bkgUrl ) && !isset( $this->bkgClass ) ) {

			$this->bkgClass	= 'bkg-block';
		}

		$widgetHtml = $this->render( $this->template, [ 'widget' => $this ] );

		// Wrap the view
		if( $this->wrap ) {

			return Html::tag( $this->wrapper, $widgetHtml, $this->options );
		}

		return $widgetHtml;
    }

	public function renderAutoload( $config = [] ) {

		return $this->render( "$this->template/autoload", [ 'widget' => $this, 'content' => $config[ 'content' ] ] );
	}

	// BasicBlock ----------------------------

}
