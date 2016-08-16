<?php
function asset_url($url = '') {
	return base_url ( 'asset/' . $url );
}
function pre($list, $exit = true) {
	echo "<pre>";
	print_r ( $list );
	if ($exit) {
		die ();
	}
}