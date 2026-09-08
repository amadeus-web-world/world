<?php
domain::add('joyfulearth', __DIR__, false, new domain([
		'folder' => 'joyfulearth/',
		'heading' => 'JoyfulEarth.org',
		'local' => 'http://localhost/joyfulearth/%subfol%/%site%/',
		'live' => 'https://%site%.joyfulearth.org/',
		'local-base' => 'http://localhost/joyfulearth/%subfol%/',
		'live-base' => 'https://%subfol%.joyfulearth.org/',
	],
	['%folder%www', 'spring', '%folder%ours/imran'],
	[
		'ours',
		'serenity',
		'sunlight',
		'symphony',
		'ventures',
		'people',
		'businesses',
		'centers',
		'culture',
		'families',
	],
));
