<?php
variables([
	VARLinkToSubnodeHome => BOOLNo,
	VARSectionsHaveFiles => BOOLYes,
	VARLinkToSectionHome => BOOLYes,
]);

function site_before_render() {
	if (sectionValue() && sectionValue() != nodeValue())
		autosetPageMenu();
}

if (nodeIs(SITEHOME))
	variable(VARWelcomeMessage, replaceItems('We are building an' . NEWLINE .
	'**offline first** ,' . NEWLINE .
	'**INTENT Driven**, ' . NEWLINE .
	'**Internet of Missions**.' . NEWLINE .
	'<br /><br /><img class="img-fluid img-max-400 mt-3 m-auto d-block" src="%site-assets%%safeName%-mood.png" />' . NEWLINE .
	'<hr class="m-5" /><img class="img-fluid img-max-400 mt-3 m-auto d-block" src="%site-assets%%safeName%-expertise.png" />' . NEWLINE .
	'<hr>' . getSnippet('welcome'),
		[
			'offline-first' => '%urlOf-imran%2025-09/11-to-15/14--amadeusweb--dawn-engage-opus-blitz/BTNSECONDARY',
			'intent-driven' => '%urlOf-imran%2025-12/06-to-10/07--full-on-evolutionary-syntheses--by-commander-integritas/BTNSUCCESS',
			'internet-of-m' => '%urlOf-imran%2025-12/06-to-10/08--power-to-all-our-friends/BTNWARNING',
			'imrans-stance' => '%urlOf-imran%2025-12/01-to-05/03--the-architect-who-stood-his-ground/BTNSITE',
			'the-year-2025' => '%urlOf-imran%the-year-2025/BTNPRIMARY',
		]
	, '%'));
