<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function Notes_init(&$options, $memberInfo, &$args) {
		/* Inserted by Search Page Maker for AppGini on 2023-12-13 04:57:10 */
		$options->FilterPage = 'hooks/Notes_filter.php';
		/* End of Search Page Maker for AppGini code */

		/* Inserted by Inline-Detail-View Plugin on 2023-12-13 04:36:46 */
		// uninstalled
		/* End of Inline-Detail-View Plugin code */


		return TRUE;
	}

	function Notes_header($contentType, $memberInfo, &$args) {
		$header='';

		switch($contentType) {
			case 'tableview':
				$header='';
				break;

			case 'detailview':
				$header='';
				break;

			case 'tableview+detailview':
				$header='';
				break;

			case 'print-tableview':
				$header='';
				break;

			case 'print-detailview':
				$header='';
				break;

			case 'filters':
				$header='';
				break;
		}

		return $header;
	}

	function Notes_footer($contentType, $memberInfo, &$args) {
		$footer='';

		switch($contentType) {
			case 'tableview':
				$footer='';
				break;

			case 'detailview':
				$footer='';
				break;

			case 'tableview+detailview':
				$footer='';
				break;

			case 'print-tableview':
				$footer='';
				break;

			case 'print-detailview':
				$footer='';
				break;

			case 'filters':
				$footer='';
				break;
		}

		return $footer;
	}

	function Notes_before_insert(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function Notes_after_insert($data, $memberInfo, &$args) {

		return TRUE;
	}

	function Notes_before_update(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function Notes_after_update($data, $memberInfo, &$args) {

		return TRUE;
	}

	function Notes_before_delete($selectedID, &$skipChecks, $memberInfo, &$args) {

		return TRUE;
	}

	function Notes_after_delete($selectedID, $memberInfo, &$args) {

	}

	function Notes_dv($selectedID, $memberInfo, &$html, &$args) {
		/* Inserted by Inline-Detail-View Plugin on 2023-12-13 04:36:46 */
		// uninstalled
		/* End of Inline-Detail-View Plugin code */


	}

	function Notes_csv($query, $memberInfo, &$args) {

		return $query;
	}
	function Notes_batch_actions(&$args) {

		return [];
	}
