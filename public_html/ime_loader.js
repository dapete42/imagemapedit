/*
	Copyright (c) 2007-2013 Peter Schlömer

	Released under the following licenses (to make reuse in other Wikis
	easier):

	GNU General Public License (GPL), version 2
	GNU Free Documentatin Licence (GFDL), version 1.2 or later
	Creative Commons Attribution ShareAlike (CC-by-sa), version 2 or later
*/

var IME_BASE = '//imagemapedit.toolforge.org/';

var IME_JQUERY = IME_BASE + 'jquery.js';
var IME_MAIN = IME_BASE + 'ime.js';
var IME_WITHJQUERY = IME_BASE + 'ime_with_jquery.php';

// Compatibility layer for old versions of MediaWiki
if (mw === undefined) mw = {};
if (mw.config === undefined) mw.config = {};
if (mw.config.get === undefined) {
	mw.config.get = function(key) {
		this[key];
	};
}
if (mw.loader === undefined) mw.loader = {};
if (mw.loader.load === undefined) mw.loader.load = importScriptURI;

// Determine whether we are on an image page. Namespace must be 6 and action
// view. Otherwise none of this is necessary - IME will not initialize anyway.
if (mw.config.get('wgNamespaceNumber')==6 && mw.config.get('wgAction')=='view') {
	// Temporarily: if jquery is not available, load a script that combines
	// jquery and ime into one file
	if (typeof $ === 'undefined') {
		mw.loader.load(IME_WITHJQUERY);
	} else {
		mw.loader.load(IME_MAIN);
	}
}
