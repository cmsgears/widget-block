<?php
namespace cmsgears\widgets\block;

// Yii Imports
use \Yii;
use yii\helpers\Html;

class BasicBlock extends \cmsgears\core\common\base\Widget {

	// Variables ---------------------------------------------------

	// Public Variables --------------------
	
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
	public $header				= false;
	public $headerContent		= null;
	public $headerClass			= null;

	// Block Content
	public $contentWrapClass	= null;
	public $content				= false;
	public $contentData			= null;
	public $contentClass		= '';

	// Additional content placed below content box
	public $extraContent		= null;

	// Constructor and Initialisation ------------------------------

	// yii\base\Object

    public function init() {

        parent::init();

		// Required in case content is generated manually
		ob_start();
    }

	// Instance Methods --------------------------------------------

	// yii\base\Widget

    public function run() {

		$content = ob_get_clean();

        return $this->renderWidget( [ 'content' => $content ] );
    }

	// BasicBlock

    public function renderWidget( $config = [] ) {

		if( isset( $config[ 'content' ] ) && strlen( $config[ 'content' ] ) > 0 ) {

			$this->contentData = $config[ 'content' ];
		}

		// Default background class defined in css as - .bkg-block { background-image: url(<image url>) }
		if( $this->bkg && !isset( $this->bkgUrl ) && !isset( $this->bkgClass ) ) {

			$this->bkgClass	= 'bkg-block';
		}

		$widgetHtml = $this->render( $this->template, [
			'bkg' => $this->bkg,
			'fixedBkg' => $this->fixedBkg,
			'scrollBkg' => $this->scrollBkg,
			'parallaxBkg' => $this->parallaxBkg,
			'bkgUrl' => $this->bkgUrl,
			'bkgClass' => $this->bkgClass,
			'texture' => $this->texture,
			'textureUrl' => $this->textureUrl,
			'textureClass' => $this->textureClass,
			'maxCover' => $this->maxCover,
			'maxCoverContent' => $this->maxCoverContent,
			'maxCoverClass' => $this->maxCoverClass,
			'header' => $this->header,
			'headerContent' => $this->headerContent,
			'headerClass' => $this->headerClass,
			'contentWrapClass' => $this->contentWrapClass,
			'content' => $this->content,
			'contentData' => $this->contentData,
			'contentClass' => $this->contentClass,
			'extraContent' => $this->extraContent
		]);

        return Html::tag( 'section', $widgetHtml, $this->options );
    }
}

?>