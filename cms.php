<?php
variables([
	VARLinkToSubnodeHome => BOOLNo,
	VARSectionsHaveFiles => BOOLYes,
	VARLinkToSectionHome => BOOLYes,
]);

function site_before_render() {
	autosetPageMenu();
}

if (nodeIs(SITEHOME))
	setHtmlVariable(VARWelcomeMessage, getSnippet('welcome'));

function after_file() {
	if (nodeIs(SITEHOME))
		echo getCodeSnippet('welcome');
}
