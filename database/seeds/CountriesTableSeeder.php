<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('countries')->truncate();

        $countries = [
            ['code' => 'AF', 'name' => "Afghanistan", 'phonecode' => '93'],
            ['code' => 'AL', 'name' => "Albania", 'phonecode' => '355'],
            ['code' => 'DZ', 'name' => "Algeria", 'phonecode' => '213'],
            ['code' => 'AS', 'name' => "American Samoa", 'phonecode' => '1684'],
            ['code' => 'AD', 'name' => "Andorra", 'phonecode' => '376'],
            ['code' => 'AO', 'name' => "Angola", 'phonecode' => '244'],
            ['code' => 'AI', 'name' => "Anguilla", 'phonecode' => '1264'],
            ['code' => 'AQ', 'name' => "Antarctica", 'phonecode' => '0'],
            ['code' => 'AG', 'name' => "Antigua and Barbuda", 'phonecode' => '1268'],
            ['code' => 'AR', 'name' => "Argentina", 'phonecode' => '54'],
            ['code' => 'AM', 'name' => "Armenia", 'phonecode' => '374'],
            ['code' => 'AW', 'name' => "Aruba", 'phonecode' => '297'],
            ['code' => 'AU', 'name' => "Australia", 'phonecode' => '61'],
            ['code' => 'AT', 'name' => "Austria", 'phonecode' => '43'],
            ['code' => 'AZ', 'name' => "Azerbaijan", 'phonecode' => '994'],
            ['code' => 'BS', 'name' => "Bahamas", 'phonecode' => '1242'],
            ['code' => 'BH', 'name' => "Bahrain", 'phonecode' => '973'],
            ['code' => 'BD', 'name' => "Bangladesh", 'phonecode' => '880'],
            ['code' => 'BB', 'name' => "Barbados", 'phonecode' => '1246'],
            ['code' => 'BY', 'name' => "Belarus", 'phonecode' => '375'],
            ['code' => 'BE', 'name' => "Belgium", 'phonecode' => '32'],
            ['code' => 'BZ', 'name' => "Belize", 'phonecode' => '501'],
            ['code' => 'BJ', 'name' => "Benin", 'phonecode' => '229'],
            ['code' => 'BM', 'name' => "Bermuda", 'phonecode' => '1441'],
            ['code' => 'BT', 'name' => "Bhutan", 'phonecode' => '975'],
            ['code' => 'BO', 'name' => "Bolivia", 'phonecode' => '591'],
            ['code' => 'BA', 'name' => "Bosnia and Herzegovina", 'phonecode' => '387'],
            ['code' => 'BW', 'name' => "Botswana", 'phonecode' => '267'],
            ['code' => 'BV', 'name' => "Bouvet Island", 'phonecode' => '0'],
            ['code' => 'BR', 'name' => "Brazil", 'phonecode' => '55'],
            ['code' => 'IO', 'name' => "British Indian Ocean Territory", 'phonecode' => '246'],
            ['code' => 'BN', 'name' => "Brunei Darussalam", 'phonecode' => '673'],
            ['code' => 'BG', 'name' => "Bulgaria", 'phonecode' => '359'],
            ['code' => 'BF', 'name' => "Burkina Faso", 'phonecode' => '226'],
            ['code' => 'BI', 'name' => "Burundi", 'phonecode' => '257'],
            ['code' => 'KH', 'name' => "Cambodia", 'phonecode' => '855'],
            ['code' => 'CM', 'name' => "Cameroon", 'phonecode' => '237'],
            ['code' => 'CA', 'name' => "Canada", 'phonecode' => '1'],
            ['code' => 'CV', 'name' => "Cape Verde", 'phonecode' => '238'],
            ['code' => 'KY', 'name' => "Cayman Islands", 'phonecode' => '1345'],
            ['code' => 'CF', 'name' => "Central African Republic", 'phonecode' => '236'],
            ['code' => 'TD', 'name' => "Chad", 'phonecode' => '235'],
            ['code' => 'CL', 'name' => "Chile", 'phonecode' => '56'],
            ['code' => 'CN', 'name' => "China", 'phonecode' => '86'],
            ['code' => 'CX', 'name' => "Christmas Island", 'phonecode' => '61'],
            ['code' => 'CC', 'name' => "Cocos (Keeling) Islands", 'phonecode' => '672'],
            ['code' => 'CO', 'name' => "Colombia", 'phonecode' => '57'],
            ['code' => 'KM', 'name' => "Comoros", 'phonecode' => '269'],
            ['code' => 'CG', 'name' => "Congo", 'phonecode' => '242'],
            ['code' => 'CD', 'name' => "Congo, the Democratic Republic of the", 'phonecode' => '242'],
            ['code' => 'CK', 'name' => "Cook Islands", 'phonecode' => '682'],
            ['code' => 'CR', 'name' => "Costa Rica", 'phonecode' => '506'],
            ['code' => 'CI', 'name' => "Cote D\'Ivoire", 'phonecode' => '225'],
            ['code' => 'HR', 'name' => "Croatia", 'phonecode' => '385'],
            ['code' => 'CU', 'name' => "Cuba", 'phonecode' => '53'],
            ['code' => 'CY', 'name' => "Cyprus", 'phonecode' => '357'],
            ['code' => 'CZ', 'name' => "Czech Republic", 'phonecode' => '420'],
            ['code' => 'DK', 'name' => "Denmark", 'phonecode' => '45'],
            ['code' => 'DJ', 'name' => "Djibouti", 'phonecode' => '253'],
            ['code' => 'DM', 'name' => "Dominica", 'phonecode' => '1767'],
            ['code' => 'DO', 'name' => "Dominican Republic", 'phonecode' => '1809'],
            ['code' => 'EC', 'name' => "Ecuador", 'phonecode' => '593'],
            ['code' => 'EG', 'name' => "Egypt", 'phonecode' => '20'],
            ['code' => 'SV', 'name' => "El Salvador", 'phonecode' => '503'],
            ['code' => 'GQ', 'name' => "Equatorial Guinea", 'phonecode' => '240'],
            ['code' => 'ER', 'name' => "Eritrea", 'phonecode' => '291'],
            ['code' => 'EE', 'name' => "Estonia", 'phonecode' => '372'],
            ['code' => 'ET', 'name' => "Ethiopia", 'phonecode' => '251'],
            ['code' => 'FK', 'name' => "Falkland Islands (Malvinas)", 'phonecode' => '500'],
            ['code' => 'FO', 'name' => "Faroe Islands", 'phonecode' => '298'],
            ['code' => 'FJ', 'name' => "Fiji", 'phonecode' => '679'],
            ['code' => 'FI', 'name' => "Finland", 'phonecode' => '358'],
            ['code' => 'FR', 'name' => "France", 'phonecode' => '33'],
            ['code' => 'GF', 'name' => "French Guiana", 'phonecode' => '594'],
            ['code' => 'PF', 'name' => "French Polynesia", 'phonecode' => '689'],
            ['code' => 'TF', 'name' => "French Southern Territories", 'phonecode' => '0'],
            ['code' => 'GA', 'name' => "Gabon", 'phonecode' => '241'],
            ['code' => 'GM', 'name' => "Gambia", 'phonecode' => '220'],
            ['code' => 'GE', 'name' => "Georgia", 'phonecode' => '995'],
            ['code' => 'DE', 'name' => "Germany", 'phonecode' => '49'],
            ['code' => 'GH', 'name' => "Ghana", 'phonecode' => '233'],
            ['code' => 'GI', 'name' => "Gibraltar", 'phonecode' => '350'],
            ['code' => 'GR', 'name' => "Greece", 'phonecode' => '30'],
            ['code' => 'GL', 'name' => "Greenland", 'phonecode' => '299'],
            ['code' => 'GD', 'name' => "Grenada", 'phonecode' => '1473'],
            ['code' => 'GP', 'name' => "Guadeloupe", 'phonecode' => '590'],
            ['code' => 'GU', 'name' => "Guam", 'phonecode' => '1671'],
            ['code' => 'GT', 'name' => "Guatemala", 'phonecode' => '502'],
            ['code' => 'GN', 'name' => "Guinea", 'phonecode' => '224'],
            ['code' => 'GW', 'name' => "Guinea-Bissau", 'phonecode' => '245'],
            ['code' => 'GY', 'name' => "Guyana", 'phonecode' => '592'],
            ['code' => 'HT', 'name' => "Haiti", 'phonecode' => '509'],
            ['code' => 'HM', 'name' => "Heard Island and Mcdonald Islands", 'phonecode' => '0'],
            ['code' => 'VA', 'name' => "Holy See (Vatican City State)", 'phonecode' => '39'],
            ['code' => 'HN', 'name' => "Honduras", 'phonecode' => '504'],
            ['code' => 'HK', 'name' => "Hong Kong", 'phonecode' => '852'],
            ['code' => 'HU', 'name' => "Hungary", 'phonecode' => '36'],
            ['code' => 'IS', 'name' => "Iceland", 'phonecode' => '354'],
            ['code' => 'IN', 'name' => "India", 'phonecode' => '91'],
            ['code' => 'ID', 'name' => "Indonesia", 'phonecode' => '62'],
            ['code' => 'IR', 'name' => "Iran, Islamic Republic of", 'phonecode' => '98'],
            ['code' => 'IQ', 'name' => "Iraq", 'phonecode' => '964'],
            ['code' => 'IE', 'name' => "Ireland", 'phonecode' => '353'],
            ['code' => 'IL', 'name' => "Israel", 'phonecode' => '972'],
            ['code' => 'IT', 'name' => "Italy", 'phonecode' => '39'],
            ['code' => 'JM', 'name' => "Jamaica", 'phonecode' => '1876'],
            ['code' => 'JP', 'name' => "Japan", 'phonecode' => '81'],
            ['code' => 'JO', 'name' => "Jordan", 'phonecode' => '962'],
            ['code' => 'KZ', 'name' => "Kazakhstan", 'phonecode' => '7'],
            ['code' => 'KE', 'name' => "Kenya", 'phonecode' => '254'],
            ['code' => 'KI', 'name' => "Kiribati", 'phonecode' => '686'],
            ['code' => 'KP', 'name' => "Korea, Democratic People\'s Republic of", 'phonecode' => '850'],
            ['code' => 'KR', 'name' => "Korea, Republic of", 'phonecode' => '82'],
            ['code' => 'KW', 'name' => "Kuwait", 'phonecode' => '965'],
            ['code' => 'KG', 'name' => "Kyrgyzstan", 'phonecode' => '996'],
            ['code' => 'LA', 'name' => "Lao People\'s Democratic Republic", 'phonecode' => '856'],
            ['code' => 'LV', 'name' => "Latvia", 'phonecode' => '371'],
            ['code' => 'LB', 'name' => "Lebanon", 'phonecode' => '961'],
            ['code' => 'LS', 'name' => "Lesotho", 'phonecode' => '266'],
            ['code' => 'LR', 'name' => "Liberia", 'phonecode' => '231'],
            ['code' => 'LY', 'name' => "Libyan Arab Jamahiriya", 'phonecode' => '218'],
            ['code' => 'LI', 'name' => "Liechtenstein", 'phonecode' => '423'],
            ['code' => 'LT', 'name' => "Lithuania", 'phonecode' => '370'],
            ['code' => 'LU', 'name' => "Luxembourg", 'phonecode' => '352'],
            ['code' => 'MO', 'name' => "Macao", 'phonecode' => '853'],
            ['code' => 'MK', 'name' => "Macedonia, the Former Yugoslav Republic of", 'phonecode' => '389'],
            ['code' => 'MG', 'name' => "Madagascar", 'phonecode' => '261'],
            ['code' => 'MW', 'name' => "Malawi", 'phonecode' => '265'],
            ['code' => 'MY', 'name' => "Malaysia", 'phonecode' => '60'],
            ['code' => 'MV', 'name' => "Maldives", 'phonecode' => '960'],
            ['code' => 'ML', 'name' => "Mali", 'phonecode' => '223'],
            ['code' => 'MT', 'name' => "Malta", 'phonecode' => '356'],
            ['code' => 'MH', 'name' => "Marshall Islands", 'phonecode' => '692'],
            ['code' => 'MQ', 'name' => "Martinique", 'phonecode' => '596'],
            ['code' => 'MR', 'name' => "Mauritania", 'phonecode' => '222'],
            ['code' => 'MU', 'name' => "Mauritius", 'phonecode' => '230'],
            ['code' => 'YT', 'name' => "Mayotte", 'phonecode' => '269'],
            ['code' => 'MX', 'name' => "Mexico", 'phonecode' => '52'],
            ['code' => 'FM', 'name' => "Micronesia, Federated States of", 'phonecode' => '691'],
            ['code' => 'MD', 'name' => "Moldova, Republic of", 'phonecode' => '373'],
            ['code' => 'MC', 'name' => "Monaco", 'phonecode' => '377'],
            ['code' => 'MN', 'name' => "Mongolia", 'phonecode' => '976'],
            ['code' => 'MS', 'name' => "Montserrat", 'phonecode' => '1664'],
            ['code' => 'MA', 'name' => "Morocco", 'phonecode' => '212'],
            ['code' => 'MZ', 'name' => "Mozambique", 'phonecode' => '258'],
            ['code' => 'MM', 'name' => "Myanmar", 'phonecode' => '95'],
            ['code' => 'NA', 'name' => "Namibia", 'phonecode' => '264'],
            ['code' => 'NR', 'name' => "Nauru", 'phonecode' => '674'],
            ['code' => 'NP', 'name' => "Nepal", 'phonecode' => '977'],
            ['code' => 'NL', 'name' => "Netherlands", 'phonecode' => '31'],
            ['code' => 'AN', 'name' => "Netherlands Antilles", 'phonecode' => '599'],
            ['code' => 'NC', 'name' => "New Caledonia", 'phonecode' => '687'],
            ['code' => 'NZ', 'name' => "New Zealand", 'phonecode' => '64'],
            ['code' => 'NI', 'name' => "Nicaragua", 'phonecode' => '505'],
            ['code' => 'NE', 'name' => "Niger", 'phonecode' => '227'],
            ['code' => 'NG', 'name' => "Nigeria", 'phonecode' => '234'],
            ['code' => 'NU', 'name' => "Niue", 'phonecode' => '683'],
            ['code' => 'NF', 'name' => "Norfolk Island", 'phonecode' => '672'],
            ['code' => 'MP', 'name' => "Northern Mariana Islands", 'phonecode' => '1670'],
            ['code' => 'NO', 'name' => "Norway", 'phonecode' => '47'],
            ['code' => 'OM', 'name' => "Oman", 'phonecode' => '968'],
            ['code' => 'PK', 'name' => "Pakistan", 'phonecode' => '92'],
            ['code' => 'PW', 'name' => "Palau", 'phonecode' => '680'],
            ['code' => 'PS', 'name' => "Palestinian Territory, Occupied", 'phonecode' => '970'],
            ['code' => 'PA', 'name' => "Panama", 'phonecode' => '507'],
            ['code' => 'PG', 'name' => "Papua New Guinea", 'phonecode' => '675'],
            ['code' => 'PY', 'name' => "Paraguay", 'phonecode' => '595'],
            ['code' => 'PE', 'name' => "Peru", 'phonecode' => '51'],
            ['code' => 'PH', 'name' => "Philippines", 'phonecode' => '63'],
            ['code' => 'PN', 'name' => "Pitcairn", 'phonecode' => '0'],
            ['code' => 'PL', 'name' => "Poland", 'phonecode' => '48'],
            ['code' => 'PT', 'name' => "Portugal", 'phonecode' => '351'],
            ['code' => 'PR', 'name' => "Puerto Rico", 'phonecode' => '1787'],
            ['code' => 'QA', 'name' => "Qatar", 'phonecode' => '974'],
            ['code' => 'RE', 'name' => "Reunion", 'phonecode' => '262'],
            ['code' => 'RO', 'name' => "Romania", 'phonecode' => '40'],
            ['code' => 'RU', 'name' => "Russian Federation", 'phonecode' => '70'],
            ['code' => 'RW', 'name' => "Rwanda", 'phonecode' => '250'],
            ['code' => 'SH', 'name' => "Saint Helena", 'phonecode' => '290'],
            ['code' => 'KN', 'name' => "Saint Kitts and Nevis", 'phonecode' => '1869'],
            ['code' => 'LC', 'name' => "Saint Lucia", 'phonecode' => '1758'],
            ['code' => 'PM', 'name' => "Saint Pierre and Miquelon", 'phonecode' => '508'],
            ['code' => 'VC', 'name' => "Saint Vincent and the Grenadines", 'phonecode' => '1784'],
            ['code' => 'WS', 'name' => "Samoa", 'phonecode' => '684'],
            ['code' => 'SM', 'name' => "San Marino", 'phonecode' => '378'],
            ['code' => 'ST', 'name' => "Sao Tome and Principe", 'phonecode' => '239'],
            ['code' => 'SA', 'name' => "Saudi Arabia", 'phonecode' => '966'],
            ['code' => 'SN', 'name' => "Senegal", 'phonecode' => '221'],
            ['code' => 'CS', 'name' => "Serbia and Montenegro", 'phonecode' => '381'],
            ['code' => 'SC', 'name' => "Seychelles", 'phonecode' => '248'],
            ['code' => 'SL', 'name' => "Sierra Leone", 'phonecode' => '232'],
            ['code' => 'SG', 'name' => "Singapore", 'phonecode' => '65'],
            ['code' => 'SK', 'name' => "Slovakia", 'phonecode' => '421'],
            ['code' => 'SI', 'name' => "Slovenia", 'phonecode' => '386'],
            ['code' => 'SB', 'name' => "Solomon Islands", 'phonecode' => '677'],
            ['code' => 'SO', 'name' => "Somalia", 'phonecode' => '252'],
            ['code' => 'ZA', 'name' => "South Africa", 'phonecode' => '27'],
            ['code' => 'GS', 'name' => "South Georgia and the South Sandwich Islands", 'phonecode' => '0'],
            ['code' => 'ES', 'name' => "Spain", 'phonecode' => '34'],
            ['code' => 'LK', 'name' => "Sri Lanka", 'phonecode' => '94'],
            ['code' => 'SD', 'name' => "Sudan", 'phonecode' => '249'],
            ['code' => 'SR', 'name' => "Suriname", 'phonecode' => '597'],
            ['code' => 'SJ', 'name' => "Svalbard and Jan Mayen", 'phonecode' => '47'],
            ['code' => 'SZ', 'name' => "Swaziland", 'phonecode' => '268'],
            ['code' => 'SE', 'name' => "Sweden", 'phonecode' => '46'],
            ['code' => 'CH', 'name' => "Switzerland", 'phonecode' => '41'],
            ['code' => 'SY', 'name' => "Syrian Arab Republic", 'phonecode' => '963'],
            ['code' => 'TW', 'name' => "Taiwan, Province of China", 'phonecode' => '886'],
            ['code' => 'TJ', 'name' => "Tajikistan", 'phonecode' => '992'],
            ['code' => 'TZ', 'name' => "Tanzania, United Republic of", 'phonecode' => '255'],
            ['code' => 'TH', 'name' => "Thailand", 'phonecode' => '66'],
            ['code' => 'TL', 'name' => "Timor-Leste", 'phonecode' => '670'],
            ['code' => 'TG', 'name' => "Togo", 'phonecode' => '228'],
            ['code' => 'TK', 'name' => "Tokelau", 'phonecode' => '690'],
            ['code' => 'TO', 'name' => "Tonga", 'phonecode' => '676'],
            ['code' => 'TT', 'name' => "Trinidad and Tobago", 'phonecode' => '1868'],
            ['code' => 'TN', 'name' => "Tunisia", 'phonecode' => '216'],
            ['code' => 'TR', 'name' => "Turkey", 'phonecode' => '90'],
            ['code' => 'TM', 'name' => "Turkmenistan", 'phonecode' => '7370'],
            ['code' => 'TC', 'name' => "Turks and Caicos Islands", 'phonecode' => '1649'],
            ['code' => 'TV', 'name' => "Tuvalu", 'phonecode' => '688'],
            ['code' => 'UG', 'name' => "Uganda", 'phonecode' => '256'],
            ['code' => 'UA', 'name' => "Ukraine", 'phonecode' => '380'],
            ['code' => 'AE', 'name' => "United Arab Emirates", 'phonecode' => '971'],
            ['code' => 'GB', 'name' => "United Kingdom", 'phonecode' => '44'],
            ['code' => 'US', 'name' => "United States", 'phonecode' => '1'],
            ['code' => 'UM', 'name' => "United States Minor Outlying Islands", 'phonecode' => '1'],
            ['code' => 'UY', 'name' => "Uruguay", 'phonecode' => '598'],
            ['code' => 'UZ', 'name' => "Uzbekistan", 'phonecode' => '998'],
            ['code' => 'VU', 'name' => "Vanuatu", 'phonecode' => '678'],
            ['code' => 'VE', 'name' => "Venezuela", 'phonecode' => '58'],
            ['code' => 'VN', 'name' => "Viet Nam", 'phonecode' => '84'],
            ['code' => 'VG', 'name' => "Virgin Islands, British", 'phonecode' => '1284'],
            ['code' => 'VI', 'name' => "Virgin Islands, U.s.", 'phonecode' => '1340'],
            ['code' => 'WF', 'name' => "Wallis and Futuna", 'phonecode' => '681'],
            ['code' => 'EH', 'name' => "Western Sahara", 'phonecode' => '212'],
            ['code' => 'YE', 'name' => "Yemen", 'phonecode' => '967'],
            ['code' => 'ZM', 'name' => "Zambia", 'phonecode' => '260'],
            ['code' => 'ZW', 'name' => "Zimbabwe", 'phonecode' => '263'],
            ['code' => 'RS', 'name' => "Serbia", 'phonecode' => '381'],
            ['code' => 'AP', 'name' => "Asia / Pacific Region', 'iso3' => '0', 'numcode' => '0", 'phonecode' => '0'],
            ['code' => 'ME', 'name' => "Montenegro", 'phonecode' => '382'],
            ['code' => 'AX', 'name' => "Aland Islands", 'phonecode' => '358'],
            ['code' => 'BQ', 'name' => "Bonaire, Sint Eustatius and Saba", 'phonecode' => '599'],
            ['code' => 'CW', 'name' => "Curacao", 'phonecode' => '599'],
            ['code' => 'GG', 'name' => "Guernsey", 'phonecode' => '44'],
            ['code' => 'IM', 'name' => "Isle of Man", 'phonecode' => '44'],
            ['code' => 'JE', 'name' => "Jersey", 'phonecode' => '44'],
            ['code' => 'XK', 'name' => "Kosovo", 'phonecode' => '381'],
            ['code' => 'BL', 'name' => "Saint Barthelemy", 'phonecode' => '590'],
            ['code' => 'MF', 'name' => "Saint Martin", 'phonecode' => '590'],
            ['code' => 'SX', 'name' => "Sint Maarten", 'phonecode' => '1'],
            ['code' => 'SS', 'name' => "South Sudan", 'phonecode' => '211'],
        ];

        DB::table('countries')->insert($countries);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
