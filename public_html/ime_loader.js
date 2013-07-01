/*
	Copyright (c) 2007-2013 Peter Schlömer

	Released under the following licenses (to make reuse in other Wikis
	easier):

	GNU General Public License (GPL), version 2
	GNU Free Documentatin Licence (GFDL), version 1.2 or later
	Creative Commons Attribution ShareAlike (CC-by-sa), version 2 or later
*/

var IME_BASE = '//tools.wmflabs.org/imagemapedit/';

var IME_JQUERY = IME_BASE + 'jquery.js';
var IME_MAIN = IME_BASE + 'ime.js';
var IME_WITHJQUERY = IME_BASE + 'ime_with_jquery.php';

// Determine whether we are on an image page. Namespace must be 6 and action
// view. Otherwise none of this is necessary - IME will not initialize anyway.
if (wgNamespaceNumber==6 && wgAction=='view') {
/*	// If jquery is not available, load our own version
	if (typeof jQuery === 'undefined') {
		importScriptURI(IME_JQUERY);
	}
	importScriptURI(IME_MAIN);
*/	

	// Temporarily: if jquery is not available, load a script that combines
	// jquery and ime into one file
	if (typeof jQuery === 'undefined') {
		importScriptURI(IME_WITHJQUERY);
	} else {
		importScriptURI(IME_MAIN);
	}

}
