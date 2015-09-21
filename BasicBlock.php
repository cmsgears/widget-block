<?php
namespace cmsgears\widgets\block;

use \Yii;
use yii\base\Widget;
use yii\helpers\Html;

class BasicBlock extends Widget {

	// Variables ---------------------------------------------------

	// Public Variables --------------------

    public $options 		= [];

	public $bkg				= false;
	public $fixedBkg		= false;
	public $scrollBkg		= false;
	public $parallaxBkg		= false;
	public $texture			= false;
	public $textureClass	= false;
	public $headerContent	= null;
	public $content			= null;

	// Constructor and Initialisation ------------------------------

	// yii\base\Object

    public function init() {

        parent::init();
    }

	// Instance Methods --------------------------------------------

	// yii\base\Widget

    public function run() {

        return $this->renderBlock();
    }

	// BasicBlock

    public function renderBlock() {

        return Html::tag( 'section', null, $this->options );
    }
}

?>