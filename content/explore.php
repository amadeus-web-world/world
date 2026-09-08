<?php
runFeature(features::explore);
network_menu(function($item) { showSite($item); });
