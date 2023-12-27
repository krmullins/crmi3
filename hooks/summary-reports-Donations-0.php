<?php
	/* Include Requeried files */
	define("PREPEND_PATH", "../");
	include(__DIR__ . "/../lib.php");
	include(__DIR__ . "/language-summary-reports.php");
	include(__DIR__ . "/SummaryReport.php");
	@header("Content-Type: text/html; charset=" . datalist_db_encoding);
 	
	$x = new StdClass;
	$x->TableTitle = "Donations";
	include_once(__DIR__ . "/../header.php");
	
	$filterable_fields = ["ID","DonationDate","Amount","Description","SupporterID","CampaignID","Paytype","Matching","Anonymous","Acknowledged","DonationYear","Notes","MemoryOf","HonorOf","MailingName","Address1","Address2","City","State","Zip","Country"];
	$config_array = [
		'reportHash' => '3bf5ao2mkfmtbdtx51du',
		'request' => $_REQUEST,
		'groups_array' => $groups_array,
		'override_permissions' => false,
		'title' => 'Donations',
		'custom_where' => '',
		'table' => 'Donations',
		'label' => 'MailingNameFull',
		'group_function' => 'sum',
		'label_title' => 'Mailing Name Full',
		'value_title' => 'Sum of Amount',
		'thousands_separator' => ',',
		'decimal_point' => '.',

		// show data table section?
		'data_table_section' => 1,

		// max number of data points to show on charts
		'chart_data_points' => 20,
		
		// barchart options
		'barchart_section' => 0,
		'barchart_options' => [
			// see https://gionkunz.github.io/chartist-js/api-documentation.html#chartistbar-declaration-defaultoptions
			'axisX' => [
				'offset' => 30,
				'position' => 'end',
				'labelOffset' => ['x' => 0, 'y' => 0],
				'showLabel' => true,
				'showGrid' => true,
				'scaleMinSpace' => 30,
				'onlyInteger' => false
			],
			'axisY' => [
				'offset' => 40,
				'position' => 'start',
				'labelOffset' => ['x' => 0, 'y' => 0],
				'showLabel' => true,
				'showGrid' => true,
				'scaleMinSpace' => 20,
				'onlyInteger' => false
			],
			// 'width' => false,
			// 'height' => false,
			// 'high' => false,
			// 'low' => false,
			'referenceValue' => 0,
			'chartPadding' => ['top' => 15, 'right' => 15, 'bottom' => 5, 'left' => 10],
			'seriesBarDistance' => 15,
			'stackBars' => false,
			'stackMode' => 'accumulate',
			'horizontalBars' => false,
			'distributeSeries' => false,
			'reverseData' => false,
			'showGridBackground' => false,
			'classNames' => [
				'chart' => 'ct-chart-bar',
				'horizontalBars' => 'ct-horizontal-bars',
				'label' => 'ct-label',
				'labelGroup' => 'ct-labels',
				'series' => 'ct-series',
				'bar' => 'ct-bar',
				'grid' => 'ct-grid',
				'gridGroup' => 'ct-grids',
				'gridBackground' => 'ct-grid-background',
				'vertical' => 'ct-vertical',
				'horizontal' => 'ct-horizontal',
				'start' => 'ct-start',
				'end' => 'ct-end'
			]
		],

		// piechart options
		'piechart_section' => 0,
		'piechart_options' => [
			// see https://gionkunz.github.io/chartist-js/api-documentation.html#chartistpie-declaration-defaultoptions
			// 'width' => false,
			// 'height' => false,
			'chartPadding' => 5,
			'classNames' => [
				'chartPie' => 'ct-chart-pie',
				'chartDonut' => 'ct-chart-donut',
				'series' => 'ct-series',
				'slicePie' => 'ct-slice-pie',
				'sliceDonut' => 'ct-slice-donut',
				'sliceDonutSolid' => 'ct-slice-donut-solid',
				'label' => 'ct-label'
			],
			'startAngle' => 0,
			// 'total' => false,
			'donut' => false,
			'donutSolid' => false,
			'donutWidth' => 60,
			'showLabel' => true,
			'labelOffset' => '50',
			'labelPosition' => 'center',
			'labelDirection' => 'neutral',
			'reverseData' => false,
			'ignoreEmptyValues' => true
		],
		'piechart_classes' => 'ct-square',

		'date_format' => 'm/d/Y',
		'date_separator' => '/',
		'jsmoment_date_format' => 'MM/DD/YYYY',
		'group_function_field' => 'Amount',
		'date_field' => 'DonationDate',
		'parent_table' => 'Supporters',
		'label_field_index' => 19
	];
	$report = new SummaryReport($config_array);
	echo $report->render();

	include_once(__DIR__ . "/../footer.php");
