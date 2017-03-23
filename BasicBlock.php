<?php
namespace cmsgears\widgets\block;

// Yii Imports
use \Yii;
use yii\helpers\Html;

class BasicBlock extends \cmsgears\core\common\base\Widget {

	// Variables ---------------------------------------------------

	// Globals -------------------------------

	// Constants --------------

	// Public -----------------

	// Protected --------------

	// Variables -----------------------------

	// Public -----------------

	// Background
	public $bkg					= false;
	public $fixedBkg			= false;
	public $scrollBkg			= false;
	public $parallaxBkg			= false;
	public $bkgUrl				= null;
	public $bkgClass			= null;

	// Texture
	public $texture				= false;
	public $textureUrl			= null;
	public $textureClass		= null;

	// Block to cover whole area
	public $maxCover			= false;
	public $maxCoverContent		= null;
	public $maxCoverClass		= null;

	// Block Header
	public $icon				= false;
	public $iconClass			= null;
	public $iconImage			= null;

	// Block Header
	public $header				= false;
	public $headerContent		= null;
	public $headerClass			= null;

	// Block Content
	public $title				= null;
	public $description			= null;
	public $contentWrapClass	= null;
	public $content				= false;
	public $contentData			= null;
	public $contentClass		= '';

	// Additional content placed below content box
	public $extraContent		= null;

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

	// yii\base\Widget

    public function run() {

		$content = ob_get_clean();

		if( $this->autoload ) {

			// Render autoload widget
			return $this->renderAutoload( [ 'content' => $content ] );
		}

		// Render the widget
        return $this->renderWidget( [ 'content' => $content ] );
    }

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

    public function renderWidget( $config = [] ) {

		if( isset( $config[ 'content' ] ) && strlen( $config[ 'content' ] ) > 0 ) {

			$this->contentData = $config[ 'content' ];
		}

		// Default background class defined in css as - .bkg-block { background-image: url(<image url>) }
		if( $this->bkg && !isset( $this->bkgUrl ) && !isset( $this->bkgClass ) ) {

			$this->bkgClass	= 'bkg-block';
		}

		$widgetHtml = $this->render( $this->template, [ 'widget' => $this ] );

        return Html::tag( 'section', $widgetHtml, $this->options );
    }

	public function renderAutoload( $config = [] ) {

		return $this->render( "$this->template/autoload", [ 'widget' => $this, 'content' => $config[ 'content' ] ] );
	}

	// BasicBlock ----------------------------

}
