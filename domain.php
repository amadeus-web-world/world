<?php
domain::add('joyfulearth', __DIR__, false, new domain([
		'folder' => 'joyfulearth/',
		'heading' => 'JE',
		'local' => 'http://localhost/joyfulearth/%subfol%/%site%/',
		'live' => 'https://%site%.joyfulearth.org/',
		'local-base' => 'http://localhost/joyfulearth/%subfol%/',
		'live-base' => 'https://%subfol%.joyfulearth.org/',
	],
	['%folder%www', 'spring', '%folder%ours/imran'],
	[
		'ours',
		'people',
		'businesses',
		'centers',
		'channels',
		'culture',
		'families',
		'serenity',
		'sunlight',
		'symphony',
		'ventures',
	],
));
