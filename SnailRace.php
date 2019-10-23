<?php

function mauriceWins($mSnails, $sSnails) {
	$win = false;
	 if( ($mSnails[1] > $sSnails[0]) && ($mSnails[2] > $sSnails[1])) {
        $win = true;
	 }
	return $win;
}