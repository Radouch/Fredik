<?php

use MediaWiki\MediaWikiServices;
use MediaWiki\Output\OutputPage;

/**
 * SkinTemplate class for the Fredik skin
 *
 * @ingroup Skins
 */
class SkinFredik extends SkinTemplate {
	/** @var string lowercase skin name */
	public $skinname = 'fredik';
	/** @var string full skin name */
	public $stylename = 'Fredik';
	/** @var string skin template */
	public $template = 'FredikTemplate';

	/**
	 * Add meta tags
	 *
	 * @param OutputPage $out OutputPage
	 */
	public function initPage( OutputPage $out ): void {
		parent::initPage( $out );

		$out->addMeta( 'theme-color', (string)$this->getConfig()->get( 'FredikColor' ) );

		if ( MediaWikiServices::getInstance()
			->getUserOptionsLookup()
			->getOption( $this->getUser(), 'skin-responsive' ) ) {
				$out->addMeta( 'viewport', 'width=device-width' );
		}
	}
}
