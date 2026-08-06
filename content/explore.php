<?php
function showSite($allItems) {
	echo tagUX::tagStart(tagUX::Div, cssUX::CenterContainer);
	$urlKey = _getUrlKeySansPreview();
	foreach ($allItems as $menu => $items) {
		if ($items == MENUSEPARATOR) continue;
		h2($menu);
		foreach ($items as $item) {
			tagUX::contentBox($item['key']);
			$link = $item[$urlKey];
			$img = valueIfSet($item, VARWildcardUrl, $link) . $item['key'] . '-logo.png';

			echo
				//'<input class="img-fluid text-center" value="' . $img . '" />' . BRNL .
				'<a class="text-center" href="' . $link . '">' . 
				'	<img class="img-fluid img-max-600" src="' . $img . '" />' . BRNL .
				'	<b>' . $item['siteName'] . '</b>' . BRNL .
				'	<i>' . $item['byline'] . '</i>' . BRNL .
				//'	<input class="img-fluid text-center" value="' . $item[$urlKey] . '" />' . BRNL .
				'</a>' . NEWLINE;

			tagUX::contentBoxEnd();
		}
	}
	echo tagUX::tagEnd(tagUX::Div);
}

network_menu(function($item) { showSite($item); });
