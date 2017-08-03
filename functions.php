<?php

function spreadsheetData($sessionLocation) {

	//echo "<p style='color: red;'>User input: " . $sessionLocation . "<p>";


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
				$basicService    = $data["gsx\$basicservice"]["\$t"];
				$standardService = $data["gsx\$standardservice"]["\$t"];
				$fullService     = $data["gsx\$fullservice"]["\$t"];

				echo "<pre>" . var_dump($city) ." </pre>";
				

				//echo '<pre>' . print_r($basicService, true) . '</pre>';
				//exit();
				
				// Checks user input location against the data held in the spreadsheet.  ;
				// If the string that the user input matches against any address data in 
				// the JSON then returns the relevant results.

				if (! empty($sessionLocation)) {				



					if (strpos($city, $sessionLocation) !== FALSE || strpos($county, $sessionLocation) !== FALSE || strpos($postCode, $sessionLocation) !== FALSE ) {




						$output  = 	'<tr>';
						$output .=		'<td class="shop-name">' . $shopName . '</td>';					
						if (strlen($basicService) > 0) { 
						
							$output .=	'<td class="basic-price">' . $basicService . '</td>'; 

						}else { 

							$output .= '<td class="basic-price"> - </td>'; 

						}
						
						$output .=		'<td>';
						if (strlen($basicService) > 0) { $output .=	'<p class="workshop-result">Basic Service:  <span>' . $basicService . '</span></p>'; }else { $output .= '<p class="workshop-result">Basic Service:  <span> - </span></p>'; }
						if (strlen($standardService) > 0) { $output .=	'<p class="workshop-result">General Service:  <span>' . $standardService . '</span></p>'; }else { $output .= '<p class="workshop-result">General Service:  <span> - </span></p>'; }
						if (strlen($fullService) > 0) { $output .=	'<p class="workshop-result">Full Service:  <span>' . $fullService . '</span></p>'; }else { $output .= '<p class="workshop-result">Full Service:  <span> - </span></p>'; }
						$output .=		'</td>';
						$output .= 		'<td>';
						$output .= 			'<a href="shop-profile.php?address=' . $postCode . '&shopname=' . $shopName . '">';
						$output .=				'<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">BUY NOW</button>';
						$output .=			'</a>';
	                    $output .=  	'</td>';
						$output .= 	'</tr>';

						echo $output;

					}else {
						echo "no results ";
					}
				}
			}
		}
	}

} // End of spreadsheetData
















?>