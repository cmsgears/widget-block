<?php
namespace cmsgears\widgets\block;

// Yii Imports
use \Yii;
use yii\helpers\Html;

class BasicBlock extends \cmsgears\core\common\base\Widget {

	// Variables ---------------------------------------------------

	// Public Variables --------------------

	public $bkg					= false;
	public $fixedBkg			= false;
	public $scrollBkg			= false;
	public $parallaxBkg			= false;
	public $bkgUrl				= null;
	public $texture				= false;
	public $textureClass		= '';
	public $headerContent		= null;
	public $headerClass			= '';
	public $content				= null;
	public $contentClass		= '';
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

        return $this->renderBlock( $content );
    }

	// BasicBlock

    public function renderBlock( $content = null ) {

		if( isset( $content ) && strlen( $content ) > 0 ) {

			$this->content = $content;
		}

		$widgetHtml = $this->render( $this->viewFile, [
			'bkg' => $this->bkg,
			'fixedBkg' => $this->fixedBkg,
			'scrollBkg' => $this->scrollBkg,
			'parallaxBkg' => $this->parallaxBkg,
			'bkgUrl' => $this->bkgUrl,
			'texture' => $this->texture,
			'textureClass' => $this->textureClass,
			'headerContent' => $this->headerContent,
			'headerClass' => $this->headerClass,
			'content' => $this->content,
			'contentClass' => $this->contentClass,
			'extraContent' => $this->extraContent
		]);

        return Html::tag( 'section', $widgetHtml, $this->options );
    }
}

?>