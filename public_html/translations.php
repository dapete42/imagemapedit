<?php

header('Content-type: text/javascript; encoding=utf8');

$lang = $_GET['lang'];
if (!$lang) $lang = 'en';

?>
/*
	Copyright (c) 2007-2013 Peter Schlömer

	Released under the following licenses (to make reuse in other Wikis
	easier):

	GNU General Public License (GPL), version 2
	GNU Free Documentatin Licence (GFDL), version 1.2 or later
	Creative Commons Attribution ShareAlike (CC-by-sa), version 2 or later
*/

<?php
print "// ImageMapEdit translations for language '$lang'\n";
print "\n";
print "var ime_translations = new Array();\n";
print "\n";

$ime_translations = array(
	'error_imagenotfound' => 'ImageMapEdit: Could not find image in page structure.'
);

// if ($lang==='en' || substr($lang, 0, 3)==='en-') {
// 	$ime_translations = array(
// 		'error_imagenotfound' => 'ImageMapEdit: Could not find image in page structure.',
// 		'bottomleft' => 'Bottom left',
// 		'bottomright' => 'Bottom right',
// 		'circle' => 'circle',
// 		'circlechoose1' => 'Select with left mouse button',
// 		'circlechoose2' => 'Select with right mouse button',
// 		'coordinates' => 'Coordinates',
// 		'default' => 'default',
// 		'deletearea' => 'Delete selected area',
// 		'deletecoordinates' => 'Delete all coordinates',
// 		'editarea' => 'Edit area',
// 		'generatedwikicode' => 'Generated wikicode',
// 		'hidetextbox' => 'Hide text box',
// 		'imagedescription' => 'Image description',
// 		'import' => 'Import',
// 		'importareas' => 'Import areas from wikicode',
// 		'infolinkposition' => 'Position of information link',
// 		'linktarget' => 'Link target',
// 		'linktitle' => 'Link title',
// 		'newarea' => 'Create new area',
// 		'nolink' => 'No link',
// 		'optional' => 'optional',
// 		'poly' => 'poly(gon)',
// 		'polychoose' => 'Add new corner with left mouse button',
// 		'position' => 'Position',
// 		'preferences' => 'General preferences',
// 		'radius' => 'Radius',
// 		'rect' => 'rect(angle)',
// 		'rectbottom' => 'Bottom',
// 		'rectchoose1' => 'Select with left mouse button',
// 		'rectchoose2' => 'Select with right mouse button',
// 		'rectleft' => 'Left',
// 		'rectright' => 'Right',
// 		'recttop' => 'top',
// 		'showtextbox' => 'Show text box',
// 		'topleft' => 'Top left',
// 		'topright' => 'Topright'
// 	);
// }
if ($lang==='de' || substr($lang, 0, 3)==='de-') {
	$ime_translations = array(
		'error_imagenotfound' => 'ImageMapEdit: Konnte Bild in der Seitenstruktur nicht finden.',
		'bottomleft' => 'Links unten',
		'bottomright' => 'Rechts unten',
		'circle' => 'circle (Kreis)',
		'circlechoose1' => 'Auswahl mit linker Maustaste',
		'circlechoose2' => 'Auswahl mit rechter Maustaste',
		'coordinates' => 'Koordinaten',
		'default' => 'Standard',
		'deletearea' => 'Ausgewählten Bereich löschen',
		'deletecoordinates' => 'Alle Koordinaten löschen',
		'editarea' => 'Bereich bearbeiten',
		'generatedwikicode' => 'Erstellter Wikicode',
		'hidetextbox' => 'Eingabefeld verstecken',
		'imagedescription' => 'Bildbeschreibung',
		'import' => 'Importieren',
		'importareas' => 'Bereiche aus Wikicode importieren',
		'infolinkposition' => 'Position des Info-Links',
		'linktarget' => 'Linkziel',
		'linktitle' => 'Linktitel',
		'newarea' => 'Neuen Bereich erstellen',
		'nolink' => 'Kein Link',
		'optional' => 'optional',
		'poly' => 'poly (Polygon)',
		'polychoose' => 'Hinzufügen neuer Punkte mit linker Maustaste',
		'position' => 'Position',
		'preferences' => 'Allgemeine Einstellungen',
		'radius' => 'Radius',
		'rect' => 'rect (Rechteck)',
		'rectbottom' => 'unten',
		'rectchoose1' => 'Auswahl mit linker Maustaste',
		'rectchoose2' => 'Auswahl mit rechter Maustaste',
		'rectleft' => 'Links',
		'rectright' => 'Rechts',
		'recttop' => 'oben',
		'showtextbox' => 'Eingabefeld anzeigen',
		'topleft' => 'Links oben',
		'topright' => 'Rechts oben'
	);
}
elseif ($lang==='it') {
	$ime_translations = array(
		'error_imagenotfound' => 'ImageMap: Impossibile trovare l\'immagine nella struttura della pagina.',
		'bottomleft' => 'In basso a sinistra',
		'bottomright' => 'In basso a destra',
		'circle' => 'circle (cerchio)',
		'circlechoose1' => 'Seleziona con il tasto sinistro del mouse',
		'circlechoose2' => 'Seleziona con il tasto destro del mouse',
		'coordinates' => 'Coordinate',
		'default' => 'predefinito',
		'deletearea' => 'Cancella area selezionata',
		'deletecoordinates' => 'Cancella tutte le coordinate',
		'editarea' => 'Modifica area',
		'generatedwikicode' => 'Genera wikitesto',
		'hidetextbox' => 'Nascondi il riquadro del testo',
		'imagedescription' => 'Descrizione immagine',
		'import' => 'Importa',
		'importareas' => 'Importa più aree da wikitesto',
		'infolinkposition' => 'Posizione del link Informazioni',
		'linktarget' => 'Titolo pagina',
		'linktitle' => 'Testo link',
		'newarea' => 'Crea nuova area',
		'nolink' => 'Niente link',
		'optional' => 'opzionale',
		'poly' => 'poly (poligono)',
		'polychoose' => 'Agggiungi un altro vertice con il tasto sinistro del mouse',
		'position' => 'Posizione',
		'preferences' => 'Preferenze generali',
		'radius' => 'Raggio',
		'rect' => 'rect (rettangolo)',
		'rectbottom' => 'Sotto',
		'rectchoose1' => 'Seleziona con il tasto sinistro del mouse',
		'rectchoose2' => 'Seleziona con il tasto destro del mouse',
		'rectleft' => 'Sinistra',
		'rectright' => 'Destra',
		'recttop' => 'Sopra',
		'showtextbox' => 'Mostra il riquadro del testo',
		'topleft' => 'In alto a sinistra',
		'topright' => 'In alto a destra'
	);
}

foreach ($ime_translations as $key => $value) {
	$value_escaped = addslashes($value);
	print "ime_translations['$key'] = '$value_escaped';\n";
}
?>
