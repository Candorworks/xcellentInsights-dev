<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->truncate();

        $countries = array(
            array('sort_name' => 'AF', 'name' => 'Afghanistan',  'phonecode' => '93'),
            array('sort_name' => 'AL', 'name' => 'Albania',  'phonecode' => '355'),
            array('sort_name' => 'DZ', 'name' => 'Algeria',  'phonecode' => '213'),
            array('sort_name' => 'AS', 'name' => 'American Samoa',  'phonecode' => '1684'),
            array('sort_name' => 'AD', 'name' => 'Andorra',  'phonecode' => '376'),
            array('sort_name' => 'AO', 'name' => 'Angola',  'phonecode' => '244'),
            array('sort_name' => 'AI', 'name' => 'Anguilla',   'phonecode' => '1264'),
            array('sort_name' => 'AQ', 'name' => 'Antarctica', 'phonecode' => '672'),
            array('sort_name' => 'AG', 'name' => 'Antigua and Barbuda',  'phonecode' => '1268'),
            array('sort_name' => 'AR', 'name' => 'Argentina',  'phonecode' => '54'),
            array('sort_name' => 'AM', 'name' => 'Armenia',  'phonecode' => '374'),
            array('sort_name' => 'AW', 'name' => 'Aruba',   'phonecode' => '297'),
            array('sort_name' => 'AU', 'name' => 'Australia',  'phonecode' => '61'),
            array('sort_name' => 'AT', 'name' => 'Austria',  'phonecode' => '43'),
            array('sort_name' => 'AZ', 'name' => 'Azerbaijan',  'phonecode' => '994'),
            array('sort_name' => 'BS', 'name' => 'Bahamas',  'phonecode' => '1242'),
            array('sort_name' => 'BH', 'name' => 'Bahrain',  'phonecode' => '973'),
            array('sort_name' => 'BD', 'name' => 'Bangladesh',  'phonecode' => '880'),
            array('sort_name' => 'BB', 'name' => 'Barbados',  'phonecode' => '1246'),
            array('sort_name' => 'BY', 'name' => 'Belarus',   'phonecode' => '375'),
            array('sort_name' => 'BE', 'name' => 'Belgium',  'phonecode' => '32'),
            array('sort_name' => 'BZ', 'name' => 'Belize',  'phonecode' => '501'),
            array('sort_name' => 'BJ', 'name' => 'Benin',   'phonecode' => '229'),
            array('sort_name' => 'BM', 'name' => 'Bermuda',  'phonecode' => '1441'),
            array('sort_name' => 'BT', 'name' => 'Bhutan',  'phonecode' => '975'),
            array('sort_name' => 'BO', 'name' => 'Bolivia',  'phonecode' => '591'),
            array('sort_name' => 'BA', 'name' => 'Bosnia and Herzegovina',  'phonecode' => '387'),
            array('sort_name' => 'BW', 'name' => 'Botswana',  'phonecode' => '267'),
            array('sort_name' => 'BV', 'name' => 'Bouvet Island', 'phonecode' => '47'),
            array('sort_name' => 'BR', 'name' => 'Brazil',  'phonecode' => '55'),
            array('sort_name' => 'IO', 'name' => 'British Indian Ocean Territory', 'phonecode' => '246'),
            array('sort_name' => 'BN', 'name' => 'Brunei Darussalam',  'phonecode' => '673'),
            array('sort_name' => 'BG', 'name' => 'Bulgaria',   'phonecode' => '359'),
            array('sort_name' => 'BF', 'name' => 'Burkina Faso',   'phonecode' => '226'),
            array('sort_name' => 'BI', 'name' => 'Burundi',   'phonecode' => '257'),
            array('sort_name' => 'KH', 'name' => 'Cambodia',   'phonecode' => '855'),
            array('sort_name' => 'CM', 'name' => 'Cameroon',   'phonecode' => '237'),
            array('sort_name' => 'CA', 'name' => 'Canada',   'phonecode' => '1'),
            array('sort_name' => 'CV', 'name' => 'Cape Verde',   'phonecode' => '238'),
            array('sort_name' => 'KY', 'name' => 'Cayman Islands',   'phonecode' => '1345'),
            array('sort_name' => 'CF', 'name' => 'Central African Republic',   'phonecode' => '236'),
            array('sort_name' => 'TD', 'name' => 'Chad',   'phonecode' => '235'),
            array('sort_name' => 'CL', 'name' => 'Chile',   'phonecode' => '56'),
            array('sort_name' => 'CN', 'name' => 'China',   'phonecode' => '86'),
            array('sort_name' => 'CX', 'name' => 'Christmas Island', 'phonecode' => '61'),
            array('sort_name' => 'CC', 'name' => 'Cocos (Keeling) Islands', 'phonecode' => '672'),
            array('sort_name' => 'CO', 'name' => 'Colombia',   'phonecode' => '57'),
            array('sort_name' => 'KM', 'name' => 'Comoros',   'phonecode' => '269'),
            array('sort_name' => 'CG', 'name' => 'Congo',   'phonecode' => '242'),
            array('sort_name' => 'CD', 'name' => 'Congo, the Democratic Republic of the',   'phonecode' => '242'),
            array('sort_name' => 'CK', 'name' => 'Cook Islands',   'phonecode' => '682'),
            array('sort_name' => 'CR', 'name' => 'Costa Rica',   'phonecode' => '506'),
            array('sort_name' => 'CI', 'name' => 'Cote Divoire',   'phonecode' => '225'),
            array('sort_name' => 'HR', 'name' => 'Croatia',   'phonecode' => '385'),
            array('sort_name' => 'CU', 'name' => 'Cuba',   'phonecode' => '53'),
            array('sort_name' => 'CY', 'name' => 'Cyprus',   'phonecode' => '357'),
            array('sort_name' => 'CZ', 'name' => 'Czech Republic',   'phonecode' => '420'),
            array('sort_name' => 'DK', 'name' => 'Denmark',   'phonecode' => '45'),
            array('sort_name' => 'DJ', 'name' => 'Djibouti',   'phonecode' => '253'),
            array('sort_name' => 'DM', 'name' => 'Dominica',   'phonecode' => '1767'),
            array('sort_name' => 'DO', 'name' => 'Dominican Republic',   'phonecode' => '1809'),
            array('sort_name' => 'EC', 'name' => 'Ecuador',   'phonecode' => '593'),
            array('sort_name' => 'EG', 'name' => 'Egypt',   'phonecode' => '20'),
            array('sort_name' => 'SV', 'name' => 'El Salvador',   'phonecode' => '503'),
            array('sort_name' => 'GQ', 'name' => 'Equatorial Guinea',   'phonecode' => '240'),
            array('sort_name' => 'ER', 'name' => 'Eritrea',   'phonecode' => '291'),
            array('sort_name' => 'EE', 'name' => 'Estonia',   'phonecode' => '372'),
            array('sort_name' => 'ET', 'name' => 'Ethiopia',   'phonecode' => '251'),
            array('sort_name' => 'FK', 'name' => 'Falkland Islands (Malvinas)',   'phonecode' => '500'),
            array('sort_name' => 'FO', 'name' => 'Faroe Islands',   'phonecode' => '298'),
            array('sort_name' => 'FJ', 'name' => 'Fiji',   'phonecode' => '679'),
            array('sort_name' => 'FI', 'name' => 'Finland',   'phonecode' => '358'),
            array('sort_name' => 'FR', 'name' => 'France',   'phonecode' => '33'),
            array('sort_name' => 'GF', 'name' => 'French Guiana',   'phonecode' => '594'),
            array('sort_name' => 'PF', 'name' => 'French Polynesia',   'phonecode' => '689'),
            array('sort_name' => 'TF', 'name' => 'French Southern Territories', 'phonecode' => '262'),
            array('sort_name' => 'GA', 'name' => 'Gabon',   'phonecode' => '241'),
            array('sort_name' => 'GM', 'name' => 'Gambia',   'phonecode' => '220'),
            array('sort_name' => 'GE', 'name' => 'Georgia',   'phonecode' => '995'),
            array('sort_name' => 'DE', 'name' => 'Germany',   'phonecode' => '49'),
            array('sort_name' => 'GH', 'name' => 'Ghana',   'phonecode' => '233'),
            array('sort_name' => 'GI', 'name' => 'Gibraltar',   'phonecode' => '350'),
            array('sort_name' => 'GR', 'name' => 'Greece',   'phonecode' => '30'),
            array('sort_name' => 'GL', 'name' => 'Greenland',   'phonecode' => '299'),
            array('sort_name' => 'GD', 'name' => 'Grenada',   'phonecode' => '1473'),
            array('sort_name' => 'GP', 'name' => 'Guadeloupe',   'phonecode' => '590'),
            array('sort_name' => 'GU', 'name' => 'Guam',   'phonecode' => '1671'),
            array('sort_name' => 'GT', 'name' => 'Guatemala',   'phonecode' => '502'),
            array('sort_name' => 'GN', 'name' => 'Guinea',   'phonecode' => '224'),
            array('sort_name' => 'GW', 'name' => 'Guinea-Bissau',   'phonecode' => '245'),
            array('sort_name' => 'GY', 'name' => 'Guyana',   'phonecode' => '592'),
            array('sort_name' => 'HT', 'name' => 'Haiti',   'phonecode' => '509'),
            array('sort_name' => 'HM', 'name' => 'Heard Island and Mcdonald Islands', 'phonecode' => '672'),
            array('sort_name' => 'VA', 'name' => 'Holy See (Vatican City State)',   'phonecode' => '39'),
            array('sort_name' => 'HN', 'name' => 'Honduras',   'phonecode' => '504'),
            array('sort_name' => 'HK', 'name' => 'Hong Kong',   'phonecode' => '852'),
            array('sort_name' => 'HU', 'name' => 'Hungary',   'phonecode' => '36'),
            array('sort_name' => 'IS', 'name' => 'Iceland',   'phonecode' => '354'),
            array('sort_name' => 'IN', 'name' => 'India',   'phonecode' => '91'),
            array('sort_name' => 'ID', 'name' => 'Indonesia',   'phonecode' => '62'),
            array('sort_name' => 'IR', 'name' => 'Iran, Islamic Republic of',   'phonecode' => '98'),
            array('sort_name' => 'IQ', 'name' => 'Iraq',   'phonecode' => '964'),
            array('sort_name' => 'IE', 'name' => 'Ireland',   'phonecode' => '353'),
            array('sort_name' => 'IL', 'name' => 'Israel',   'phonecode' => '972'),
            array('sort_name' => 'IT', 'name' => 'Italy',   'phonecode' => '39'),
            array('sort_name' => 'JM', 'name' => 'Jamaica',   'phonecode' => '1876'),
            array('sort_name' => 'JP', 'name' => 'Japan',   'phonecode' => '81'),
            array('sort_name' => 'JO', 'name' => 'Jordan',   'phonecode' => '962'),
            array('sort_name' => 'KZ', 'name' => 'Kazakhstan',   'phonecode' => '7'),
            array('sort_name' => 'KE', 'name' => 'Kenya',   'phonecode' => '254'),
            array('sort_name' => 'KI', 'name' => 'Kiribati',   'phonecode' => '686'),
            array('sort_name' => 'KP', 'name' => 'Korea, Democratic People\'s Republic of',   'phonecode' => '850'),
            array('sort_name' => 'KR', 'name' => 'Korea, Republic of',   'phonecode' => '82'),
            array('sort_name' => 'KW', 'name' => 'Kuwait',   'phonecode' => '965'),
            array('sort_name' => 'KG', 'name' => 'Kyrgyzstan',   'phonecode' => '996'),
            array('sort_name' => 'LA', 'name' => 'Lao People\'s Democratic Republic',   'phonecode' => '856'),
            array('sort_name' => 'LV', 'name' => 'Latvia',   'phonecode' => '371'),
            array('sort_name' => 'LB', 'name' => 'Lebanon',   'phonecode' => '961'),
            array('sort_name' => 'LS', 'name' => 'Lesotho',   'phonecode' => '266'),
            array('sort_name' => 'LR', 'name' => 'Liberia',   'phonecode' => '231'),
            array('sort_name' => 'LY', 'name' => 'Libyan Arab Jamahiriya',   'phonecode' => '218'),
            array('sort_name' => 'LI', 'name' => 'Liechtenstein',   'phonecode' => '423'),
            array('sort_name' => 'LT', 'name' => 'Lithuania',   'phonecode' => '370'),
            array('sort_name' => 'LU', 'name' => 'Luxembourg',   'phonecode' => '352'),
            array('sort_name' => 'MO', 'name' => 'Macao',   'phonecode' => '853'),
            array('sort_name' => 'MK', 'name' => 'Macedonia, the Former Yugoslav Republic of',   'phonecode' => '389'),
            array('sort_name' => 'MG', 'name' => 'Madagascar',   'phonecode' => '261'),
            array('sort_name' => 'MW', 'name' => 'Malawi',   'phonecode' => '265'),
            array('sort_name' => 'MY', 'name' => 'Malaysia',   'phonecode' => '60'),
            array('sort_name' => 'MV', 'name' => 'Maldives',   'phonecode' => '960'),
            array('sort_name' => 'ML', 'name' => 'Mali',   'phonecode' => '223'),
            array('sort_name' => 'MT', 'name' => 'Malta',   'phonecode' => '356'),
            array('sort_name' => 'MH', 'name' => 'Marshall Islands',   'phonecode' => '692'),
            array('sort_name' => 'MQ', 'name' => 'Martinique',   'phonecode' => '596'),
            array('sort_name' => 'MR', 'name' => 'Mauritania',   'phonecode' => '222'),
            array('sort_name' => 'MU', 'name' => 'Mauritius',   'phonecode' => '230'),
            array('sort_name' => 'YT', 'name' => 'Mayotte', 'phonecode' => '269'),
            array('sort_name' => 'MX', 'name' => 'Mexico',   'phonecode' => '52'),
            array('sort_name' => 'FM', 'name' => 'Micronesia, Federated States of',   'phonecode' => '691'),
            array('sort_name' => 'MD', 'name' => 'Moldova, Republic of',   'phonecode' => '373'),
            array('sort_name' => 'MC', 'name' => 'Monaco',   'phonecode' => '377'),
            array('sort_name' => 'MN', 'name' => 'Mongolia',   'phonecode' => '976'),
            array('sort_name' => 'MS', 'name' => 'Montserrat',   'phonecode' => '1664'),
            array('sort_name' => 'MA', 'name' => 'Morocco',   'phonecode' => '212'),
            array('sort_name' => 'MZ', 'name' => 'Mozambique',   'phonecode' => '258'),
            array('sort_name' => 'MM', 'name' => 'Myanmar',   'phonecode' => '95'),
            array('sort_name' => 'NA', 'name' => 'Namibia',   'phonecode' => '264'),
            array('sort_name' => 'NR', 'name' => 'Nauru',   'phonecode' => '674'),
            array('sort_name' => 'NP', 'name' => 'Nepal',   'phonecode' => '977'),
            array('sort_name' => 'NL', 'name' => 'Netherlands',   'phonecode' => '31'),
            array('sort_name' => 'AN', 'name' => 'Netherlands Antilles',   'phonecode' => '599'),
            array('sort_name' => 'NC', 'name' => 'New Caledonia',   'phonecode' => '687'),
            array('sort_name' => 'NZ', 'name' => 'New Zealand',   'phonecode' => '64'),
            array('sort_name' => 'NI', 'name' => 'Nicaragua',   'phonecode' => '505'),
            array('sort_name' => 'NE', 'name' => 'Niger',   'phonecode' => '227'),
            array('sort_name' => 'NG', 'name' => 'Nigeria',   'phonecode' => '234'),
            array('sort_name' => 'NU', 'name' => 'Niue',   'phonecode' => '683'),
            array('sort_name' => 'NF', 'name' => 'Norfolk Island',   'phonecode' => '672'),
            array('sort_name' => 'MP', 'name' => 'Northern Mariana Islands',   'phonecode' => '1670'),
            array('sort_name' => 'NO', 'name' => 'Norway',   'phonecode' => '47'),
            array('sort_name' => 'OM', 'name' => 'Oman',   'phonecode' => '968'),
            array('sort_name' => 'PK', 'name' => 'Pakistan',   'phonecode' => '92'),
            array('sort_name' => 'PW', 'name' => 'Palau',   'phonecode' => '680'),
            array('sort_name' => 'PS', 'name' => 'Palestinian Territory, Occupied', 'phonecode' => '970'),
            array('sort_name' => 'PA', 'name' => 'Panama',   'phonecode' => '507'),
            array('sort_name' => 'PG', 'name' => 'Papua New Guinea',   'phonecode' => '675'),
            array('sort_name' => 'PY', 'name' => 'Paraguay',   'phonecode' => '595'),
            array('sort_name' => 'PE', 'name' => 'Peru',   'phonecode' => '51'),
            array('sort_name' => 'PH', 'name' => 'Philippines',   'phonecode' => '63'),
            array('sort_name' => 'PN', 'name' => 'Pitcairn',   'phonecode' => '64'),
            array('sort_name' => 'PL', 'name' => 'Poland',   'phonecode' => '48'),
            array('sort_name' => 'PT', 'name' => 'Portugal',   'phonecode' => '351'),
            array('sort_name' => 'PR', 'name' => 'Puerto Rico',   'phonecode' => '1787'),
            array('sort_name' => 'QA', 'name' => 'Qatar',   'phonecode' => '974'),
            array('sort_name' => 'RE', 'name' => 'Reunion',   'phonecode' => '262'),
            array('sort_name' => 'RO', 'name' => 'Romania',   'phonecode' => '40'),
            array('sort_name' => 'RU', 'name' => 'Russian Federation',   'phonecode' => '70'),
            array('sort_name' => 'RW', 'name' => 'Rwanda',   'phonecode' => '250'),
            array('sort_name' => 'SH', 'name' => 'Saint Helena',   'phonecode' => '290'),
            array('sort_name' => 'KN', 'name' => 'Saint Kitts and Nevis',   'phonecode' => '1869'),
            array('sort_name' => 'LC', 'name' => 'Saint Lucia',   'phonecode' => '1758'),
            array('sort_name' => 'PM', 'name' => 'Saint Pierre and Miquelon',   'phonecode' => '508'),
            array('sort_name' => 'VC', 'name' => 'Saint Vincent and the Grenadines',   'phonecode' => '1784'),
            array('sort_name' => 'WS', 'name' => 'Samoa',   'phonecode' => '684'),
            array('sort_name' => 'SM', 'name' => 'San Marino',   'phonecode' => '378'),
            array('sort_name' => 'ST', 'name' => 'Sao Tome and Principe',   'phonecode' => '239'),
            array('sort_name' => 'SA', 'name' => 'Saudi Arabia',   'phonecode' => '966'),
            array('sort_name' => 'SN', 'name' => 'Senegal',   'phonecode' => '221'),
            array('sort_name' => 'CS', 'name' => 'Serbia and Montenegro', 'phonecode' => '381'),
            array('sort_name' => 'SC', 'name' => 'Seychelles',   'phonecode' => '248'),
            array('sort_name' => 'SL', 'name' => 'Sierra Leone',   'phonecode' => '232'),
            array('sort_name' => 'SG', 'name' => 'Singapore',   'phonecode' => '65'),
            array('sort_name' => 'SK', 'name' => 'Slovakia',   'phonecode' => '421'),
            array('sort_name' => 'SI', 'name' => 'Slovenia',   'phonecode' => '386'),
            array('sort_name' => 'SB', 'name' => 'Solomon Islands',  'phonecode' => '677'),
            array('sort_name' => 'SO', 'name' => 'Somalia',   'phonecode' => '252'),
            array('sort_name' => 'ZA', 'name' => 'South Africa',   'phonecode' => '27'),
            array('sort_name' => 'GS', 'name' => 'South Georgia and the South Sandwich Islands', 'phonecode' => '500'),
            array('sort_name' => 'ES', 'name' => 'Spain',   'phonecode' => '34'),
            array('sort_name' => 'LK', 'name' => 'Sri Lanka',   'phonecode' => '94'),
            array('sort_name' => 'SD', 'name' => 'Sudan',   'phonecode' => '249'),
            array('sort_name' => 'SR', 'name' => 'Suriname',   'phonecode' => '597'),
            array('sort_name' => 'SJ', 'name' => 'Svalbard and Jan Mayen',   'phonecode' => '47'),
            array('sort_name' => 'SZ', 'name' => 'Swaziland',   'phonecode' => '268'),
            array('sort_name' => 'SE', 'name' => 'Sweden',   'phonecode' => '46'),
            array('sort_name' => 'CH', 'name' => 'Switzerland',   'phonecode' => '41'),
            array('sort_name' => 'SY', 'name' => 'Syrian Arab Republic',   'phonecode' => '963'),
            array('sort_name' => 'TW', 'name' => 'Taiwan, Province of China',   'phonecode' => '886'),
            array('sort_name' => 'TJ', 'name' => 'Tajikistan',   'phonecode' => '992'),
            array('sort_name' => 'TZ', 'name' => 'Tanzania, United Republic of',   'phonecode' => '255'),
            array('sort_name' => 'TH', 'name' => 'Thailand',   'phonecode' => '66'),
            array('sort_name' => 'TL', 'name' => 'Timor-Leste', 'phonecode' => '670'),
            array('sort_name' => 'TG', 'name' => 'Togo',   'phonecode' => '228'),
            array('sort_name' => 'TK', 'name' => 'Tokelau',   'phonecode' => '690'),
            array('sort_name' => 'TO', 'name' => 'Tonga',   'phonecode' => '676'),
            array('sort_name' => 'TT', 'name' => 'Trinidad and Tobago',   'phonecode' => '1868'),
            array('sort_name' => 'TN', 'name' => 'Tunisia',   'phonecode' => '216'),
            array('sort_name' => 'TR', 'name' => 'Turkey',   'phonecode' => '90'),
            array('sort_name' => 'TM', 'name' => 'Turkmenistan',   'phonecode' => '7370'),
            array('sort_name' => 'TC', 'name' => 'Turks and Caicos Islands',   'phonecode' => '1649'),
            array('sort_name' => 'TV', 'name' => 'Tuvalu',   'phonecode' => '688'),
            array('sort_name' => 'UG', 'name' => 'Uganda',   'phonecode' => '256'),
            array('sort_name' => 'UA', 'name' => 'Ukraine',   'phonecode' => '380'),
            array('sort_name' => 'AE', 'name' => 'United Arab Emirates',   'phonecode' => '971'),
            array('sort_name' => 'GB', 'name' => 'United Kingdom',   'phonecode' => '44'),
            array('sort_name' => 'US', 'name' => 'United States',   'phonecode' => '1'),
            array('sort_name' => 'UM', 'name' => 'United States Minor Outlying Islands', 'phonecode' => '1'),
            array('sort_name' => 'UY', 'name' => 'Uruguay',   'phonecode' => '598'),
            array('sort_name' => 'UZ', 'name' => 'Uzbekistan',   'phonecode' => '998'),
            array('sort_name' => 'VU', 'name' => 'Vanuatu',   'phonecode' => '678'),
            array('sort_name' => 'VE', 'name' => 'Venezuela',   'phonecode' => '58'),
            array('sort_name' => 'VN', 'name' => 'Viet Nam',   'phonecode' => '84'),
            array('sort_name' => 'VG', 'name' => 'Virgin Islands, British',  'phonecode' => '1284'),
            array('sort_name' => 'VI', 'name' => 'Virgin Islands, U.S.',   'phonecode' => '1340'),
            array('sort_name' => 'WF', 'name' => 'Wallis and Futuna',   'phonecode' => '681'),
            array('sort_name' => 'EH', 'name' => 'Western Sahara',   'phonecode' => '212'),
            array('sort_name' => 'YE', 'name' => 'Yemen',   'phonecode' => '967'),
            array('sort_name' => 'ZM', 'name' => 'Zambia',   'phonecode' => '260'),
            array('sort_name' => 'ZW', 'name' => 'Zimbabwe',   'phonecode' => '263'),
            array('sort_name' => 'RS', 'name' => 'Serbia',   'phonecode' => '381'),
            array('sort_name' => 'AP', 'name' => 'Asia / Pacific Region', 'phonecode' => '257'),
            array('sort_name' => 'ME', 'name' => 'Montenegro',   'phonecode' => '382'),
            array('sort_name' => 'AX', 'name' => 'Aland Islands',   'phonecode' => '358'),
            array('sort_name' => 'BQ', 'name' => 'Bonaire, Sint Eustatius and Saba',   'phonecode' => '599'),
            array('sort_name' => 'CW', 'name' => 'Curacao',   'phonecode' => '599'),
            array('sort_name' => 'GG', 'name' => 'Guernsey',   'phonecode' => '44'),
            array('sort_name' => 'IM', 'name' => 'Isle of Man',   'phonecode' => '44'),
            array('sort_name' => 'JE', 'name' => 'Jersey',   'phonecode' => '44'),
            array('sort_name' => 'XK', 'name' => 'Kosovo',  'phonecode' => '381'),
            array('sort_name' => 'BL', 'name' => 'Saint Barthelemy',   'phonecode' => '590'),
            array('sort_name' => 'MF', 'name' => 'Saint Martin',   'phonecode' => '590'),
            array('sort_name' => 'SX', 'name' => 'Sint Maarten',   'phonecode' => '1'),
            array('sort_name' => 'SS', 'name' => 'South Sudan',   'phonecode' => '211')
          );

          DB::table('countries')->insert($countries);
    }
}
