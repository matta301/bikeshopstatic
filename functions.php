<?php

function spreadsheetData($sessionLocation) {

	// Spreadsheet where all shop details are stored
	$url  	= file_get_contents("https://spreadsheets.google.com/feeds/list/1DgePfAxco-xVy2VdrfxkyPs3W1R5ZL5B-7zKgVf8DzI/od6/public/values?alt=json");
	$json 	= json_decode($url, true);
	$shopDetails = array();
	$output = '';

	foreach ($json as $value) {

		if (isset($value["entry"])) {
			// Loops through the entry object where all the data that we are after is contained.
			foreach ($value["entry"] as $data) {
				$city 			 = strtolower($data["gsx\$city"]["\$t"]);
				$county 		 = strtolower($data["gsx\$county"]["\$t"]);
				$postCode 		 = strtolower($data["gsx\$postcode"]["\$t"]);
				$shopName 		 = $data["gsx\$shopname"]["\$t"];
				$shopDescription = $data["gsx\$description"]["\$t"];			
				
				// Checks user input location against the data held in the spreadsheet.  
				// If the string that the user input matches against any address data in 
				// the JSON then returns the relevant results.
				if (strpos($sessionLocation, $city) !== false || strpos($sessionLocation, $county) !== false || strpos($sessionLocation, $postCode) !== false ) {

					$output  = 	'<tr>';
					$output .=		'<td>' . $shopName . '</td>';
					$output .= 		'<td>£30</td>';
					$output .= 		'<td>30</td>';
					$output .= 		'<td>';
					$output .= 			'<a href="shop-profile.php?address=' . $postCode . '&shopname=' . $shopName . '">';
					$output .=				'<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">BUY NOW</button>';
					$output .=			'</a>';
                    $output .=  	'</td>';
					$output .= 	'</tr>';

					echo $output;
					
				}
			}
		}
	}

} // End of spreadsheetData
















?>