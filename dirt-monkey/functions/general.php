<?php


function current_url(){
	return (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
}
function obfuscate_email( $email ) {
	$alwaysEncode = array('.', ':', '@');
	$result = '';
	for ($i = 0; $i < strlen($email); $i++) {
		if (in_array($email[$i], $alwaysEncode) || mt_rand(1, 100) < 25) {
			if (mt_rand(0, 1)) {
				$result .= '&#' . ord($email[$i]) . ';';
			} else {
				$result .= '&#x' . dechex(ord($email[$i])) . ';';
			}
		} else {
			$result .= $email[$i];
		}
	}
	return $result;
}

/*==============================================================================
Pagination
==============================================================================*/
function tfg_pagination( $pages = '', $range = 2 ) {
	$showitems = $range * 2 + 1;
	global $paged;
	if( empty( $paged ) ) {
		$paged = 1;
	}
	if( $pages == '' ) {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if( !$pages ) {
			$pages = 1;
		}
	}
	if( $pages > 1 ) {
		echo "<ul class='pagination'>";
		echo "<li class='pagination-label'>Page " . $paged . ' of ' . $pages . "</li>";
		if( $paged > 2 && $paged > $range + 1 && $showitems < $pages ) echo "<li class='pagination-item'><a href='" . get_pagenum_link( 1 ) . "' class='pagination-link'>&laquo;</a></li>";
		if( $paged > 1 && $showitems < $pages ) echo "<li class='pagination-item'><a href='" . get_pagenum_link( $paged - 1 ) . "' class='pagination-link'>&lsaquo;</a></li>";
		for( $i = 1; $i <= $pages; $i++ ) {
			if( $pages != 1  && ( !( $i >= $paged + $range+1 || $i <= $paged - $range - 1 ) || $pages <= $showitems ) ) {
				if( $paged == $i ) {
					echo "<li class='pagination-item pagination-item-current'><a href='" . get_pagenum_link( $i ) . "' class='pagination-link'>" . $i . "</a></li>";
				} else {
					echo "<li class='pagination-item'><a href='" . get_pagenum_link( $i ) . "' class='pagination-link'>" . $i . "</a></li>";
				}
			}
		}
		if( $paged < $pages && $showitems < $pages ) echo "<li class='pagination-item'><a href='" . get_pagenum_link( $paged + 1 ) . "' class='pagination-link'>&rsaquo;</a></li>";
		if( $paged < $pages - 1 && $paged + $range-1 < $pages && $showitems < $pages ) echo "<li class='pagination-item'><a href='".get_pagenum_link($pages)."' class='pagination-link'>&raquo;</a></li>";
		echo "</ul>";
	}
}

function max_title_length( $title ) {
	$max = 50;
	if( strlen( $title ) > $max ) {
	return substr( $title, 0, $max ). " &hellip;";
	} else {
	return $title;
	}
}


?>