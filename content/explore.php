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
				'<a class="text-center" href="' . $link . '" target="_blank">' . 
				'	<img class="img-fluid img-max-600" src="' . $img . '" />' . BRNL .
				'	<b>' . $item['siteName'] . '</b>' . BRNL .
				'	<i>' . $item['byline'] . '</i>' . BRNL .
				//'	<input class="img-fluid text-center" value="' . $item[$urlKey] . '" />' . BRNL .
				'</a>' . NEWLINE;
			
			$file = ALLSITESROOT . $item['path'] . '/whois/introduction/home.md';
			$id = $item['key'] . '-intro';
			$introduction = disk_file_exists($file)
				? renderSET::create(renderSET::default, false, $id)->excerpt()
					->render($file, [VARWrapInSection => true, replacer::replaces => ['url' => $link]])
				: bootstrapAndUX::colouredDiv('Not found: ' . substr($file, strlen(ALLSITESROOT)), bootstrapAndUX::warning, $id);

			echo '<hr><h5 class="mb-1">Introduction</h5>' . NEWLINE
				. tagUX::tag(tagUX::Div, 'p-3 rounded-3 introduction', $id . '-div', $introduction);

			tagUX::contentBoxEnd();
		}
	}
	echo tagUX::tagEnd(tagUX::Div);
}

network_menu(function($item) { showSite($item); });
?>
<style type="text/css">
.introduction { background-color: azure; text-align: left; }
.introduction p:last-of-type { margin-bottom: 0; }
</style>
