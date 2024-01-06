<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function Supporters_init(&$options, $memberInfo, &$args) {
		/* Inserted by Search Page Maker for AppGini on 2023-12-05 11:12:34 */
		$options->FilterPage = 'hooks/Supporters_filter.php';
		/* End of Search Page Maker for AppGini code */


		return TRUE;
	}

	function Supporters_header($contentType, $memberInfo, &$args) {
		$header='';

		switch($contentType) {
			case 'tableview':
				$sum=sqlvalue("SELECT sum(Donations.Amount) from Supporters, Donations where Supporters.ID = Donations.SupporterID");
				$header="<%%HEADER%%><script type=\"text/javascript\">
							\$j(function(){
								\$j('td.Supporters-TotalDonated').last().text(".$sum.").addClass('text-right');
							});
					</script>";
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

	function Supporters_footer($contentType, $memberInfo, &$args) {
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

	function Supporters_before_insert(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function Supporters_after_insert($data, $memberInfo, &$args) {

		return TRUE;
	}

	function Supporters_before_update(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function Supporters_after_update($data, $memberInfo, &$args) {

		return TRUE;
	}

	function Supporters_before_delete($selectedID, &$skipChecks, $memberInfo, &$args) {

		return TRUE;
	}

	function Supporters_after_delete($selectedID, $memberInfo, &$args) {

	}

	function Supporters_dv($selectedID, $memberInfo, &$html, &$args) {
		/* if this is the print preview, don't modify the detail view */
		if(isset($REQUEST['dvprint_x'])) return;

		ob_start(); ?>

		<script>
			$j(function(){
				<?php if($selectedID){ ?>
					$j('#Supporters_dv_action_buttons .btn-toolbar').append(
						'<div class="btn-group-vertical btn-group-lg" style="width: 100%;">' +
							'<button type="button" class="btn btn-warning btn-lg" onclick="print_invoice()">' +
								'<i class="glyphicon glyphicon-print"></i> Print Invoice</button>'+
						'</div>'
					);
				<?php } ?>
			});

			function print_invoice(){
				var selectedID = '<?php echo urlencode($selectedID); ?>';
				var year = '2023'
				window.location = 'donations_invoice.php?SupporterID=' + selectedID + '&DonationYear=' + year;
			}
		</script>

		<?php 
		$form_code = ob_get_contents();
		ob_end_clean();

		$html .= $form_code;
	}

	function Supporters_csv($query, $memberInfo, &$args) {

		return $query;
	}
	function Supporters_batch_actions(&$args) {

		return [];
	}
