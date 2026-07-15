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
	variable(VARWelcomeMessage, getCodeSnippet('welcome'));
