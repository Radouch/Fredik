<?php

use MediaWiki\MediaWikiServices;

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
	 * Add CSS via ResourceLoader
	 *
	 * @param OutputPage $out OutputPage
	 */
	public function initPage( OutputPage $out ) {
		$out->addMeta( 'theme-color', RequestContext::getMain()->getConfig()->get( 'FredikColor' ) );

		if ( MediaWikiServices::getInstance()
			->getUserOptionsLookup()
			->getOption( $this->getSkin()->getUser(), 'skin-responsive' ) ) {
				$out->addMeta( 'viewport', 'width=device-width' );
		}

		$out->addModuleStyles( [ 'skins.fredik' ] );

		$out->addModules( [ 'skins.fredik.js' ] );
	}

}
