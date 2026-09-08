<?php
variables([
	VARLinkToSubnodeHome => BOOLNo,
	VARSectionsHaveFiles => BOOLYes,
	VARLinkToSectionHome => BOOLYes,
]);
setup_cdn();

function site_before_render() {
	autosetPageMenu([VARDontOverwriteLogo => true]);
}

if (nodeIs(SITEHOME))
	setHtmlVariable(VARWelcomeMessage, getSnippet('welcome'));

function after_file() {
	if (nodeIs(SITEHOME)) {
		echo tagUX::tagStart(tagUX::Div, 'also-content');
		$class = cssUX::concat(cssUX::container, cssUX::mauto, cssUX::m2, cssUX::pt4);
		sectionId('welcome-deck', $class);
		echo getCodeSnippet('welcome');
		sectionEnd();
		echo tagUX::tagEnd(tagUX::Div);
	}
}
