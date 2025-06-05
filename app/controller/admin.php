<?php

if (!route(1)) {
	$route[1] = 'index';
}

if (!file_exists(admin_controller(route(1)))){
	$route[1] = 'index';
}

if (!session('user_rank') && route(1) != 'api' && route(1) != 'register'){
	$route[1] = 'login';
}

$menus = [
	[
		'url' => 'index',
		'title' => 'Dashboard',
		'icon' => [
			'stroke' => 'stroke-home',
			'fill' => 'fill-home'
		],
		'header' => 'General'
	],
	[
		'url' => 'javascript:void(0)',
		'title' => 'Site Settings',
		'icon' => [
			'stroke' => 'stroke-knowledgebase',
			'fill' => 'fill-knowledgebase'
		],
		'submenu' => [
			[
				'url' => 'general',
				'title' => 'General'
			],
			[
				'url' => 'privacypolicy',
				'title' => 'Privacy Policy'
			],
			[
				'url' => 'termsofuse',
				'title' => 'Terms of Use'
			],
			[
				'url' => 'cookie',
				'title' => 'Cookie'
			]
		]
	],
	[
		'url' => 'mailto:birds@tinynest.xyz',
		'title' => 'Support',
		'icon' => [
			'stroke' => 'stroke-support-tickets',
			'fill' => 'fill-support-tickets'
		]
	],
	[
		'url' => 'homepagesliders',
		'title' => 'Home Sliders',
		'icon' => [
			'stroke' => 'stroke-gallery',
			'fill' => 'fill-gallery'
		],
		'header' => 'Pages'
	],
	[
		'url' => 'homepageothers',
		'title' => 'Home Others',
		'icon' => [
			'stroke' => 'stroke-sample-page',
			'fill' => 'fill-sample-page'
		]
	],
	[
		'url' => 'offeringpage',
		'title' => 'Offering',
		'icon' => [
			'stroke' => 'stroke-starter-kit',
			'fill' => 'fill-starter-kit'
		]
	],
	[
		'url' => 'javascript:void(0)',
		'title' => 'About',
		'icon' => [
			'stroke' => 'stroke-layout',
			'fill' => 'fill-layout'
		],
		'submenu' => [
			[
				'url' => 'aboutlist',
				'title' => 'About List'
			],
			[
				'url' => 'addaboutpost',
				'title' => 'Add About Post'
			]
		]
	],
	[
		'url' => 'javascript:void(0)',
		'title' => 'Classes',
		'icon' => [
			'stroke' => 'stroke-button',
			'fill' => 'fill-button'
		],
		'submenu' => [
			[
				'url' => 'classeslist',
				'title' => 'Classes List'
			],
			[
				'url' => 'addclassespost',
				'title' => 'Add Classes Post'
			]
		]
	],
	[
		'url' => 'javascript:void(0)',
		'title' => 'Blog',
		'icon' => [
			'stroke' => 'stroke-blog',
			'fill' => 'fill-blog'
		],
		'submenu' => [
			[
				'url' => 'bloglist',
				'title' => 'Blog List'
			],
			[
				'url' => 'addblogpost',
				'title' => 'Add Blog Post'
			]
		]
	],
	[
		'url' => 'javascript:void(0)',
		'title' => 'Events',
		'icon' => [
			'stroke' => 'stroke-others',
			'fill' => 'fill-others'
		],
		'submenu' => [
			[
				'url' => 'eventlist',
				'title' => 'Event List'
			],
			[
				'url' => 'addeventpost',
				'title' => 'Add Event Post'
			]
		]
	]

];


$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");



require admin_controller(route(1));