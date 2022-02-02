<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To do List</title>

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    ul li {
        list-style: none;
    }
    .toDoList {
        background-color: rgb(255, 255, 255);
        float: left;
        margin: 1%;
        padding: 1%;
        border-radius: 3px;
        box-shadow: 0px 20px 30px #ccc;
    }
</style>
<body>
    <nav class="navbar">
        <ul>
            <li>
                <a href="{{ route('list') }}">Home</a>
            </li>
        </ul>
        <a href="#">
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                </svg>
            </button>

            
        </a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">Configurações</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="{{ route('config') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="timezone" class="form-label">Selecione sua Timezone</label>
                        <select class="form-select" aria-label="Default select example" name="timezone" id="timezone">
                            <optgroup label="Africa">
                                <option value="Africa/Abidjan">Africa/Abidjan</option>
                                <option value="Africa/Accra">Africa/Accra</option>
                                <option value="Africa/Addis_Ababa">Africa/Addis_Ababa</option>
                                <option value="Africa/Algiers">Africa/Algiers</option>
                                <option value="Africa/Asmara">Africa/Asmara</option>
                                <option value="Africa/Asmera">Africa/Asmera</option>
                                <option value="Africa/Bamako">Africa/Bamako</option>
                                <option value="Africa/Bangui">Africa/Bangui</option>
                                <option value="Africa/Banjul">Africa/Banjul</option>
                                <option value="Africa/Bissau">Africa/Bissau</option>
                                <option value="Africa/Blantyre">Africa/Blantyre</option>
                                <option value="Africa/Brazzaville">Africa/Brazzaville</option>
                                <option value="Africa/Bujumbura">Africa/Bujumbura</option>
                                <option value="Africa/Cairo">Africa/Cairo</option>
                                <option value="Africa/Casablanca">Africa/Casablanca</option>
                                <option value="Africa/Ceuta">Africa/Ceuta</option>
                                <option value="Africa/Conakry">Africa/Conakry</option>
                                <option value="Africa/Dakar">Africa/Dakar</option>
                                <option value="Africa/Dar_es_Salaam">Africa/Dar_es_Salaam</option>
                                <option value="Africa/Djibouti">Africa/Djibouti</option>
                                <option value="Africa/Douala">Africa/Douala</option>
                                <option value="Africa/El_Aaiun">Africa/El_Aaiun</option>
                                <option value="Africa/Freetown">Africa/Freetown</option>
                                <option value="Africa/Gaborone">Africa/Gaborone</option>
                                <option value="Africa/Harare">Africa/Harare</option>
                                <option value="Africa/Johannesburg">Africa/Johannesburg</option>
                                <option value="Africa/Juba">Africa/Juba</option>
                                <option value="Africa/Kampala">Africa/Kampala</option>
                                <option value="Africa/Khartoum">Africa/Khartoum</option>
                                <option value="Africa/Kigali">Africa/Kigali</option>
                                <option value="Africa/Kinshasa">Africa/Kinshasa</option>
                                <option value="Africa/Lagos">Africa/Lagos</option>
                                <option value="Africa/Libreville">Africa/Libreville</option>
                                <option value="Africa/Lome">Africa/Lome</option>
                                <option value="Africa/Luanda">Africa/Luanda</option>
                                <option value="Africa/Lubumbashi">Africa/Lubumbashi</option>
                                <option value="Africa/Lusaka">Africa/Lusaka</option>
                                <option value="Africa/Malabo">Africa/Malabo</option>
                                <option value="Africa/Maputo">Africa/Maputo</option>
                                <option value="Africa/Maseru">Africa/Maseru</option>
                                <option value="Africa/Mbabane">Africa/Mbabane</option>
                                <option value="Africa/Mogadishu">Africa/Mogadishu</option>
                                <option value="Africa/Monrovia">Africa/Monrovia</option>
                                <option value="Africa/Nairobi">Africa/Nairobi</option>
                                <option value="Africa/Ndjamena">Africa/Ndjamena</option>
                                <option value="Africa/Niamey">Africa/Niamey</option>
                                <option value="Africa/Nouakchott">Africa/Nouakchott</option>
                                <option value="Africa/Ouagadougou">Africa/Ouagadougou</option>
                                <option value="Africa/Porto-Novo">Africa/Porto-Novo</option>
                                <option value="Africa/Sao_Tome">Africa/Sao_Tome</option>
                                <option value="Africa/Timbuktu">Africa/Timbuktu</option>
                                <option value="Africa/Tripoli">Africa/Tripoli</option>
                                <option value="Africa/Tunis">Africa/Tunis</option>
                                <option value="Africa/Windhoek">Africa/Windhoek</option>
                            </optgroup>
                            <optgroup label="America">
                                <option value="America/Adak">America/Adak</option>
                                <option value="America/Anchorage">America/Anchorage</option>
                                <option value="America/Anguilla">America/Anguilla</option>
                                <option value="America/Antigua">America/Antigua</option>
                                <option value="America/Araguaina">America/Araguaina</option>
                                <option value="America/Argentina/Buenos_Aires">America/Argentina/Buenos_Aires</option>
                                <option value="America/Argentina/Catamarca">America/Argentina/Catamarca</option>
                                <option value="America/Argentina/ComodRivadavia">America/Argentina/ComodRivadavia</option>
                                <option value="America/Argentina/Cordoba">America/Argentina/Cordoba</option>
                                <option value="America/Argentina/Jujuy">America/Argentina/Jujuy</option>
                                <option value="America/Argentina/La_Rioja">America/Argentina/La_Rioja</option>
                                <option value="America/Argentina/Mendoza">America/Argentina/Mendoza</option>
                                <option value="America/Argentina/Rio_Gallegos">America/Argentina/Rio_Gallegos</option>
                                <option value="America/Argentina/Salta">America/Argentina/Salta</option>
                                <option value="America/Argentina/San_Juan">America/Argentina/San_Juan</option>
                                <option value="America/Argentina/San_Luis">America/Argentina/San_Luis</option>
                                <option value="America/Argentina/Tucuman">America/Argentina/Tucuman</option>
                                <option value="America/Argentina/Ushuaia">America/Argentina/Ushuaia</option>
                                <option value="America/Aruba">America/Aruba</option>
                                <option value="America/Asuncion">America/Asuncion</option>
                                <option value="America/Atikokan">America/Atikokan</option>
                                <option value="America/Atka">America/Atka</option>
                                <option value="America/Bahia">America/Bahia</option>
                                <option value="America/Bahia_Banderas">America/Bahia_Banderas</option>
                                <option value="America/Barbados">America/Barbados</option>
                                <option value="America/Belem">America/Belem</option>
                                <option value="America/Belize">America/Belize</option>
                                <option value="America/Blanc-Sablon">America/Blanc-Sablon</option>
                                <option value="America/Boa_Vista">America/Boa_Vista</option>
                                <option value="America/Bogota">America/Bogota</option>
                                <option value="America/Boise">America/Boise</option>
                                <option value="America/Buenos_Aires">America/Buenos_Aires</option>
                                <option value="America/Cambridge_Bay">America/Cambridge_Bay</option>
                                <option value="America/Campo_Grande">America/Campo_Grande</option>
                                <option value="America/Cancun">America/Cancun</option>
                                <option value="America/Caracas">America/Caracas</option>
                                <option value="America/Catamarca">America/Catamarca</option>
                                <option value="America/Cayenne">America/Cayenne</option>
                                <option value="America/Cayman">America/Cayman</option>
                                <option value="America/Chicago">America/Chicago</option>
                                <option value="America/Chihuahua">America/Chihuahua</option>
                                <option value="America/Coral_Harbour">America/Coral_Harbour</option>
                                <option value="America/Cordoba">America/Cordoba</option>
                                <option value="America/Costa_Rica">America/Costa_Rica</option>
                                <option value="America/Creston">America/Creston</option>
                                <option value="America/Cuiaba">America/Cuiaba</option>
                                <option value="America/Curacao">America/Curacao</option>
                                <option value="America/Danmarkshavn">America/Danmarkshavn</option>
                                <option value="America/Dawson">America/Dawson</option>
                                <option value="America/Dawson_Creek">America/Dawson_Creek</option>
                                <option value="America/Denver">America/Denver</option>
                                <option value="America/Detroit">America/Detroit</option>
                                <option value="America/Dominica">America/Dominica</option>
                                <option value="America/Edmonton">America/Edmonton</option>
                                <option value="America/Eirunepe">America/Eirunepe</option>
                                <option value="America/El_Salvador">America/El_Salvador</option>
                                <option value="America/Ensenada">America/Ensenada</option>
                                <option value="America/Fort_Wayne">America/Fort_Wayne</option>
                                <option value="America/Fortaleza">America/Fortaleza</option>
                                <option value="America/Glace_Bay">America/Glace_Bay</option>
                                <option value="America/Godthab">America/Godthab</option>
                                <option value="America/Goose_Bay">America/Goose_Bay</option>
                                <option value="America/Grand_Turk">America/Grand_Turk</option>
                                <option value="America/Grenada">America/Grenada</option>
                                <option value="America/Guadeloupe">America/Guadeloupe</option>
                                <option value="America/Guatemala">America/Guatemala</option>
                                <option value="America/Guayaquil">America/Guayaquil</option>
                                <option value="America/Guyana">America/Guyana</option>
                                <option value="America/Halifax">America/Halifax</option>
                                <option value="America/Havana">America/Havana</option>
                                <option value="America/Hermosillo">America/Hermosillo</option>
                                <option value="America/Indiana/Indianapolis">America/Indiana/Indianapolis</option>
                                <option value="America/Indiana/Knox">America/Indiana/Knox</option>
                                <option value="America/Indiana/Marengo">America/Indiana/Marengo</option>
                                <option value="America/Indiana/Petersburg">America/Indiana/Petersburg</option>
                                <option value="America/Indiana/Tell_City">America/Indiana/Tell_City</option>
                                <option value="America/Indiana/Vevay">America/Indiana/Vevay</option>
                                <option value="America/Indiana/Vincennes">America/Indiana/Vincennes</option>
                                <option value="America/Indiana/Winamac">America/Indiana/Winamac</option>
                                <option value="America/Indianapolis">America/Indianapolis</option>
                                <option value="America/Inuvik">America/Inuvik</option>
                                <option value="America/Iqaluit">America/Iqaluit</option>
                                <option value="America/Jamaica">America/Jamaica</option>
                                <option value="America/Jujuy">America/Jujuy</option>
                                <option value="America/Juneau">America/Juneau</option>
                                <option value="America/Kentucky/Louisville">America/Kentucky/Louisville</option>
                                <option value="America/Kentucky/Monticello">America/Kentucky/Monticello</option>
                                <option value="America/Knox_IN">America/Knox_IN</option>
                                <option value="America/Kralendijk">America/Kralendijk</option>
                                <option value="America/La_Paz">America/La_Paz</option>
                                <option value="America/Lima">America/Lima</option>
                                <option value="America/Los_Angeles">America/Los_Angeles</option>
                                <option value="America/Louisville">America/Louisville</option>
                                <option value="America/Lower_Princes">America/Lower_Princes</option>
                                <option value="America/Maceio">America/Maceio</option>
                                <option value="America/Managua">America/Managua</option>
                                <option value="America/Manaus">America/Manaus</option>
                                <option value="America/Marigot">America/Marigot</option>
                                <option value="America/Martinique">America/Martinique</option>
                                <option value="America/Matamoros">America/Matamoros</option>
                                <option value="America/Mazatlan">America/Mazatlan</option>
                                <option value="America/Mendoza">America/Mendoza</option>
                                <option value="America/Menominee">America/Menominee</option>
                                <option value="America/Merida">America/Merida</option>
                                <option value="America/Metlakatla">America/Metlakatla</option>
                                <option value="America/Mexico_City">America/Mexico_City</option>
                                <option value="America/Miquelon">America/Miquelon</option>
                                <option value="America/Moncton">America/Moncton</option>
                                <option value="America/Monterrey">America/Monterrey</option>
                                <option value="America/Montevideo">America/Montevideo</option>
                                <option value="America/Montreal">America/Montreal</option>
                                <option value="America/Montserrat">America/Montserrat</option>
                                <option value="America/Nassau">America/Nassau</option>
                                <option value="America/New_York">America/New_York</option>
                                <option value="America/Nipigon">America/Nipigon</option>
                                <option value="America/Nome">America/Nome</option>
                                <option value="America/Noronha">America/Noronha</option>
                                <option value="America/North_Dakota/Beulah">America/North_Dakota/Beulah</option>
                                <option value="America/North_Dakota/Center">America/North_Dakota/Center</option>
                                <option value="America/North_Dakota/New_Salem">America/North_Dakota/New_Salem</option>
                                <option value="America/Ojinaga">America/Ojinaga</option>
                                <option value="America/Panama">America/Panama</option>
                                <option value="America/Pangnirtung">America/Pangnirtung</option>
                                <option value="America/Paramaribo">America/Paramaribo</option>
                                <option value="America/Phoenix">America/Phoenix</option>
                                <option value="America/Port-au-Prince">America/Port-au-Prince</option>
                                <option value="America/Port_of_Spain">America/Port_of_Spain</option>
                                <option value="America/Porto_Acre">America/Porto_Acre</option>
                                <option value="America/Porto_Velho">America/Porto_Velho</option>
                                <option value="America/Puerto_Rico">America/Puerto_Rico</option>
                                <option value="America/Rainy_River">America/Rainy_River</option>
                                <option value="America/Rankin_Inlet">America/Rankin_Inlet</option>
                                <option value="America/Recife">America/Recife</option>
                                <option value="America/Regina">America/Regina</option>
                                <option value="America/Resolute">America/Resolute</option>
                                <option value="America/Rio_Branco">America/Rio_Branco</option>
                                <option value="America/Rosario">America/Rosario</option>
                                <option value="America/Santa_Isabel">America/Santa_Isabel</option>
                                <option value="America/Santarem">America/Santarem</option>
                                <option value="America/Santiago">America/Santiago</option>
                                <option value="America/Santo_Domingo">America/Santo_Domingo</option>
                                <option value="America/Sao_Paulo" selected>America/Sao_Paulo</option>
                                <option value="America/Scoresbysund">America/Scoresbysund</option>
                                <option value="America/Shiprock">America/Shiprock</option>
                                <option value="America/Sitka">America/Sitka</option>
                                <option value="America/St_Barthelemy">America/St_Barthelemy</option>
                                <option value="America/St_Johns">America/St_Johns</option>
                                <option value="America/St_Kitts">America/St_Kitts</option>
                                <option value="America/St_Lucia">America/St_Lucia</option>
                                <option value="America/St_Thomas">America/St_Thomas</option>
                                <option value="America/St_Vincent">America/St_Vincent</option>
                                <option value="America/Swift_Current">America/Swift_Current</option>
                                <option value="America/Tegucigalpa">America/Tegucigalpa</option>
                                <option value="America/Thule">America/Thule</option>
                                <option value="America/Thunder_Bay">America/Thunder_Bay</option>
                                <option value="America/Tijuana">America/Tijuana</option>
                                <option value="America/Toronto">America/Toronto</option>
                                <option value="America/Tortola">America/Tortola</option>
                                <option value="America/Vancouver">America/Vancouver</option>
                                <option value="America/Virgin">America/Virgin</option>
                                <option value="America/Whitehorse">America/Whitehorse</option>
                                <option value="America/Winnipeg">America/Winnipeg</option>
                                <option value="America/Yakutat">America/Yakutat</option>
                                <option value="America/Yellowknife">America/Yellowknife</option>
                            </optgroup>
                            <optgroup label="Antarctica">
                                <option value="Antarctica/Casey">Antarctica/Casey</option>
                                <option value="Antarctica/Davis">Antarctica/Davis</option>
                                <option value="Antarctica/DumontDUrville">Antarctica/DumontDUrville</option>
                                <option value="Antarctica/Macquarie">Antarctica/Macquarie</option>
                                <option value="Antarctica/Mawson">Antarctica/Mawson</option>
                                <option value="Antarctica/McMurdo">Antarctica/McMurdo</option>
                                <option value="Antarctica/Palmer">Antarctica/Palmer</option>
                                <option value="Antarctica/Rothera">Antarctica/Rothera</option>
                                <option value="Antarctica/South_Pole">Antarctica/South_Pole</option>
                                <option value="Antarctica/Syowa">Antarctica/Syowa</option>
                                <option value="Antarctica/Vostok">Antarctica/Vostok</option>
                            </optgroup>
                            <optgroup label="Arctic">
                                <option value="Arctic/Longyearbyen">Arctic/Longyearbyen</option>
                            </optgroup>
                            <optgroup label="Asia">
                                <option value="Asia/Aden">Asia/Aden</option>
                                <option value="Asia/Almaty">Asia/Almaty</option>
                                <option value="Asia/Amman">Asia/Amman</option>
                                <option value="Asia/Anadyr">Asia/Anadyr</option>
                                <option value="Asia/Aqtau">Asia/Aqtau</option>
                                <option value="Asia/Aqtobe">Asia/Aqtobe</option>
                                <option value="Asia/Ashgabat">Asia/Ashgabat</option>
                                <option value="Asia/Ashkhabad">Asia/Ashkhabad</option>
                                <option value="Asia/Baghdad">Asia/Baghdad</option>
                                <option value="Asia/Bahrain">Asia/Bahrain</option>
                                <option value="Asia/Baku">Asia/Baku</option>
                                <option value="Asia/Bangkok">Asia/Bangkok</option>
                                <option value="Asia/Beirut">Asia/Beirut</option>
                                <option value="Asia/Bishkek">Asia/Bishkek</option>
                                <option value="Asia/Brunei">Asia/Brunei</option>
                                <option value="Asia/Calcutta">Asia/Calcutta</option>
                                <option value="Asia/Choibalsan">Asia/Choibalsan</option>
                                <option value="Asia/Chongqing">Asia/Chongqing</option>
                                <option value="Asia/Chungking">Asia/Chungking</option>
                                <option value="Asia/Colombo">Asia/Colombo</option>
                                <option value="Asia/Dacca">Asia/Dacca</option>
                                <option value="Asia/Damascus">Asia/Damascus</option>
                                <option value="Asia/Dhaka">Asia/Dhaka</option>
                                <option value="Asia/Dili">Asia/Dili</option>
                                <option value="Asia/Dubai">Asia/Dubai</option>
                                <option value="Asia/Dushanbe">Asia/Dushanbe</option>
                                <option value="Asia/Gaza">Asia/Gaza</option>
                                <option value="Asia/Harbin">Asia/Harbin</option>
                                <option value="Asia/Hebron">Asia/Hebron</option>
                                <option value="Asia/Ho_Chi_Minh">Asia/Ho_Chi_Minh</option>
                                <option value="Asia/Hong_Kong">Asia/Hong_Kong</option>
                                <option value="Asia/Hovd">Asia/Hovd</option>
                                <option value="Asia/Irkutsk">Asia/Irkutsk</option>
                                <option value="Asia/Istanbul">Asia/Istanbul</option>
                                <option value="Asia/Jakarta">Asia/Jakarta</option>
                                <option value="Asia/Jayapura">Asia/Jayapura</option>
                                <option value="Asia/Jerusalem">Asia/Jerusalem</option>
                                <option value="Asia/Kabul">Asia/Kabul</option>
                                <option value="Asia/Kamchatka">Asia/Kamchatka</option>
                                <option value="Asia/Karachi">Asia/Karachi</option>
                                <option value="Asia/Kashgar">Asia/Kashgar</option>
                                <option value="Asia/Kathmandu">Asia/Kathmandu</option>
                                <option value="Asia/Katmandu">Asia/Katmandu</option>
                                <option value="Asia/Khandyga">Asia/Khandyga</option>
                                <option value="Asia/Kolkata">Asia/Kolkata</option>
                                <option value="Asia/Krasnoyarsk">Asia/Krasnoyarsk</option>
                                <option value="Asia/Kuala_Lumpur">Asia/Kuala_Lumpur</option>
                                <option value="Asia/Kuching">Asia/Kuching</option>
                                <option value="Asia/Kuwait">Asia/Kuwait</option>
                                <option value="Asia/Macao">Asia/Macao</option>
                                <option value="Asia/Macau">Asia/Macau</option>
                                <option value="Asia/Magadan">Asia/Magadan</option>
                                <option value="Asia/Makassar">Asia/Makassar</option>
                                <option value="Asia/Manila">Asia/Manila</option>
                                <option value="Asia/Muscat">Asia/Muscat</option>
                                <option value="Asia/Nicosia">Asia/Nicosia</option>
                                <option value="Asia/Novokuznetsk">Asia/Novokuznetsk</option>
                                <option value="Asia/Novosibirsk">Asia/Novosibirsk</option>
                                <option value="Asia/Omsk">Asia/Omsk</option>
                                <option value="Asia/Oral">Asia/Oral</option>
                                <option value="Asia/Phnom_Penh">Asia/Phnom_Penh</option>
                                <option value="Asia/Pontianak">Asia/Pontianak</option>
                                <option value="Asia/Pyongyang">Asia/Pyongyang</option>
                                <option value="Asia/Qatar">Asia/Qatar</option>
                                <option value="Asia/Qyzylorda">Asia/Qyzylorda</option>
                                <option value="Asia/Rangoon">Asia/Rangoon</option>
                                <option value="Asia/Riyadh">Asia/Riyadh</option>
                                <option value="Asia/Saigon">Asia/Saigon</option>
                                <option value="Asia/Sakhalin">Asia/Sakhalin</option>
                                <option value="Asia/Samarkand">Asia/Samarkand</option>
                                <option value="Asia/Seoul">Asia/Seoul</option>
                                <option value="Asia/Shanghai">Asia/Shanghai</option>
                                <option value="Asia/Singapore">Asia/Singapore</option>
                                <option value="Asia/Taipei">Asia/Taipei</option>
                                <option value="Asia/Tashkent">Asia/Tashkent</option>
                                <option value="Asia/Tbilisi">Asia/Tbilisi</option>
                                <option value="Asia/Tehran">Asia/Tehran</option>
                                <option value="Asia/Tel_Aviv">Asia/Tel_Aviv</option>
                                <option value="Asia/Thimbu">Asia/Thimbu</option>
                                <option value="Asia/Thimphu">Asia/Thimphu</option>
                                <option value="Asia/Tokyo">Asia/Tokyo</option>
                                <option value="Asia/Ujung_Pandang">Asia/Ujung_Pandang</option>
                                <option value="Asia/Ulaanbaatar">Asia/Ulaanbaatar</option>
                                <option value="Asia/Ulan_Bator">Asia/Ulan_Bator</option>
                                <option value="Asia/Urumqi">Asia/Urumqi</option>
                                <option value="Asia/Ust-Nera">Asia/Ust-Nera</option>
                                <option value="Asia/Vientiane">Asia/Vientiane</option>
                                <option value="Asia/Vladivostok">Asia/Vladivostok</option>
                                <option value="Asia/Yakutsk">Asia/Yakutsk</option>
                                <option value="Asia/Yekaterinburg">Asia/Yekaterinburg</option>
                                <option value="Asia/Yerevan">Asia/Yerevan</option>
                            </optgroup>
                            <optgroup label="Atlantic">
                                <option value="Atlantic/Azores">Atlantic/Azores</option>
                                <option value="Atlantic/Bermuda">Atlantic/Bermuda</option>
                                <option value="Atlantic/Canary">Atlantic/Canary</option>
                                <option value="Atlantic/Cape_Verde">Atlantic/Cape_Verde</option>
                                <option value="Atlantic/Faeroe">Atlantic/Faeroe</option>
                                <option value="Atlantic/Faroe">Atlantic/Faroe</option>
                                <option value="Atlantic/Jan_Mayen">Atlantic/Jan_Mayen</option>
                                <option value="Atlantic/Madeira">Atlantic/Madeira</option>
                                <option value="Atlantic/Reykjavik">Atlantic/Reykjavik</option>
                                <option value="Atlantic/South_Georgia">Atlantic/South_Georgia</option>
                                <option value="Atlantic/St_Helena">Atlantic/St_Helena</option>
                                <option value="Atlantic/Stanley">Atlantic/Stanley</option>
                            </optgroup>
                            <optgroup label="Australia">
                                <option value="Australia/ACT">Australia/ACT</option>
                                <option value="Australia/Adelaide">Australia/Adelaide</option>
                                <option value="Australia/Brisbane">Australia/Brisbane</option>
                                <option value="Australia/Broken_Hill">Australia/Broken_Hill</option>
                                <option value="Australia/Canberra">Australia/Canberra</option>
                                <option value="Australia/Currie">Australia/Currie</option>
                                <option value="Australia/Darwin">Australia/Darwin</option>
                                <option value="Australia/Eucla">Australia/Eucla</option>
                                <option value="Australia/Hobart">Australia/Hobart</option>
                                <option value="Australia/LHI">Australia/LHI</option>
                                <option value="Australia/Lindeman">Australia/Lindeman</option>
                                <option value="Australia/Lord_Howe">Australia/Lord_Howe</option>
                                <option value="Australia/Melbourne">Australia/Melbourne</option>
                                <option value="Australia/North">Australia/North</option>
                                <option value="Australia/NSW">Australia/NSW</option>
                                <option value="Australia/Perth">Australia/Perth</option>
                                <option value="Australia/Queensland">Australia/Queensland</option>
                                <option value="Australia/South">Australia/South</option>
                                <option value="Australia/Sydney">Australia/Sydney</option>
                                <option value="Australia/Tasmania">Australia/Tasmania</option>
                                <option value="Australia/Victoria">Australia/Victoria</option>
                                <option value="Australia/West">Australia/West</option>
                                <option value="Australia/Yancowinna">Australia/Yancowinna</option>
                            </optgroup>
                            <optgroup label="Europe">
                                <option value="Europe/Amsterdam">Europe/Amsterdam</option>
                                <option value="Europe/Andorra">Europe/Andorra</option>
                                <option value="Europe/Athens">Europe/Athens</option>
                                <option value="Europe/Belfast">Europe/Belfast</option>
                                <option value="Europe/Belgrade">Europe/Belgrade</option>
                                <option value="Europe/Berlin">Europe/Berlin</option>
                                <option value="Europe/Bratislava">Europe/Bratislava</option>
                                <option value="Europe/Brussels">Europe/Brussels</option>
                                <option value="Europe/Bucharest">Europe/Bucharest</option>
                                <option value="Europe/Budapest">Europe/Budapest</option>
                                <option value="Europe/Busingen">Europe/Busingen</option>
                                <option value="Europe/Chisinau">Europe/Chisinau</option>
                                <option value="Europe/Copenhagen">Europe/Copenhagen</option>
                                <option value="Europe/Dublin">Europe/Dublin</option>
                                <option value="Europe/Gibraltar">Europe/Gibraltar</option>
                                <option value="Europe/Guernsey">Europe/Guernsey</option>
                                <option value="Europe/Helsinki">Europe/Helsinki</option>
                                <option value="Europe/Isle_of_Man">Europe/Isle_of_Man</option>
                                <option value="Europe/Istanbul">Europe/Istanbul</option>
                                <option value="Europe/Jersey">Europe/Jersey</option>
                                <option value="Europe/Kaliningrad">Europe/Kaliningrad</option>
                                <option value="Europe/Kiev">Europe/Kiev</option>
                                <option value="Europe/Lisbon">Europe/Lisbon</option>
                                <option value="Europe/Ljubljana">Europe/Ljubljana</option>
                                <option value="Europe/London">Europe/London</option>
                                <option value="Europe/Luxembourg">Europe/Luxembourg</option>
                                <option value="Europe/Madrid">Europe/Madrid</option>
                                <option value="Europe/Malta">Europe/Malta</option>
                                <option value="Europe/Mariehamn">Europe/Mariehamn</option>
                                <option value="Europe/Minsk">Europe/Minsk</option>
                                <option value="Europe/Monaco">Europe/Monaco</option>
                                <option value="Europe/Moscow">Europe/Moscow</option>
                                <option value="Europe/Nicosia">Europe/Nicosia</option>
                                <option value="Europe/Oslo">Europe/Oslo</option>
                                <option value="Europe/Paris">Europe/Paris</option>
                                <option value="Europe/Podgorica">Europe/Podgorica</option>
                                <option value="Europe/Prague">Europe/Prague</option>
                                <option value="Europe/Riga">Europe/Riga</option>
                                <option value="Europe/Rome">Europe/Rome</option>
                                <option value="Europe/Samara">Europe/Samara</option>
                                <option value="Europe/San_Marino">Europe/San_Marino</option>
                                <option value="Europe/Sarajevo">Europe/Sarajevo</option>
                                <option value="Europe/Simferopol">Europe/Simferopol</option>
                                <option value="Europe/Skopje">Europe/Skopje</option>
                                <option value="Europe/Sofia">Europe/Sofia</option>
                                <option value="Europe/Stockholm">Europe/Stockholm</option>
                                <option value="Europe/Tallinn">Europe/Tallinn</option>
                                <option value="Europe/Tirane">Europe/Tirane</option>
                                <option value="Europe/Tiraspol">Europe/Tiraspol</option>
                                <option value="Europe/Uzhgorod">Europe/Uzhgorod</option>
                                <option value="Europe/Vaduz">Europe/Vaduz</option>
                                <option value="Europe/Vatican">Europe/Vatican</option>
                                <option value="Europe/Vienna">Europe/Vienna</option>
                                <option value="Europe/Vilnius">Europe/Vilnius</option>
                                <option value="Europe/Volgograd">Europe/Volgograd</option>
                                <option value="Europe/Warsaw">Europe/Warsaw</option>
                                <option value="Europe/Zagreb">Europe/Zagreb</option>
                                <option value="Europe/Zaporozhye">Europe/Zaporozhye</option>
                                <option value="Europe/Zurich">Europe/Zurich</option>
                            </optgroup>
                            <optgroup label="Indian">
                                <option value="Indian/Antananarivo">Indian/Antananarivo</option>
                                <option value="Indian/Chagos">Indian/Chagos</option>
                                <option value="Indian/Christmas">Indian/Christmas</option>
                                <option value="Indian/Cocos">Indian/Cocos</option>
                                <option value="Indian/Comoro">Indian/Comoro</option>
                                <option value="Indian/Kerguelen">Indian/Kerguelen</option>
                                <option value="Indian/Mahe">Indian/Mahe</option>
                                <option value="Indian/Maldives">Indian/Maldives</option>
                                <option value="Indian/Mauritius">Indian/Mauritius</option>
                                <option value="Indian/Mayotte">Indian/Mayotte</option>
                                <option value="Indian/Reunion">Indian/Reunion</option>
                            </optgroup>
                            <optgroup label="Pacific">
                                <option value="Pacific/Apia">Pacific/Apia</option>
                                <option value="Pacific/Auckland">Pacific/Auckland</option>
                                <option value="Pacific/Chatham">Pacific/Chatham</option>
                                <option value="Pacific/Chuuk">Pacific/Chuuk</option>
                                <option value="Pacific/Easter">Pacific/Easter</option>
                                <option value="Pacific/Efate">Pacific/Efate</option>
                                <option value="Pacific/Enderbury">Pacific/Enderbury</option>
                                <option value="Pacific/Fakaofo">Pacific/Fakaofo</option>
                                <option value="Pacific/Fiji">Pacific/Fiji</option>
                                <option value="Pacific/Funafuti">Pacific/Funafuti</option>
                                <option value="Pacific/Galapagos">Pacific/Galapagos</option>
                                <option value="Pacific/Gambier">Pacific/Gambier</option>
                                <option value="Pacific/Guadalcanal">Pacific/Guadalcanal</option>
                                <option value="Pacific/Guam">Pacific/Guam</option>
                                <option value="Pacific/Honolulu">Pacific/Honolulu</option>
                                <option value="Pacific/Johnston">Pacific/Johnston</option>
                                <option value="Pacific/Kiritimati">Pacific/Kiritimati</option>
                                <option value="Pacific/Kosrae">Pacific/Kosrae</option>
                                <option value="Pacific/Kwajalein">Pacific/Kwajalein</option>
                                <option value="Pacific/Majuro">Pacific/Majuro</option>
                                <option value="Pacific/Marquesas">Pacific/Marquesas</option>
                                <option value="Pacific/Midway">Pacific/Midway</option>
                                <option value="Pacific/Nauru">Pacific/Nauru</option>
                                <option value="Pacific/Niue">Pacific/Niue</option>
                                <option value="Pacific/Norfolk">Pacific/Norfolk</option>
                                <option value="Pacific/Noumea">Pacific/Noumea</option>
                                <option value="Pacific/Pago_Pago">Pacific/Pago_Pago</option>
                                <option value="Pacific/Palau">Pacific/Palau</option>
                                <option value="Pacific/Pitcairn">Pacific/Pitcairn</option>
                                <option value="Pacific/Pohnpei">Pacific/Pohnpei</option>
                                <option value="Pacific/Ponape">Pacific/Ponape</option>
                                <option value="Pacific/Port_Moresby">Pacific/Port_Moresby</option>
                                <option value="Pacific/Rarotonga">Pacific/Rarotonga</option>
                                <option value="Pacific/Saipan">Pacific/Saipan</option>
                                <option value="Pacific/Samoa">Pacific/Samoa</option>
                                <option value="Pacific/Tahiti">Pacific/Tahiti</option>
                                <option value="Pacific/Tarawa">Pacific/Tarawa</option>
                                <option value="Pacific/Tongatapu">Pacific/Tongatapu</option>
                                <option value="Pacific/Truk">Pacific/Truk</option>
                                <option value="Pacific/Wake">Pacific/Wake</option>
                                <option value="Pacific/Wallis">Pacific/Wallis</option>
                                <option value="Pacific/Yap">Pacific/Yap</option>
                            </optgroup>
                        </select>

                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </nav>
    <h1>To do List</h1>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <a href="#" class="btn" style="background-color: #6ea8fe" onclick="newList()">
                    Nova Lista
                </a>
                <form action="{{ route('store') }}" method="post">
                    @csrf
                    <div class="input-group mb-3" id="new_list"></div>
                </form>
            </div>
        </div>
        
        @if ($total = count($toDoLists) > 0)
            <div class="toDoLists">
                {{-- percorre todos os titulos --}}
                @foreach($toDoLists as $key => $toDoList)
                    <div class="toDoList text-break" style="max-width: 400px; min-width: 400px;">
                        {{-- Titulo Lista --}}
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h2 class="title">{{ $key }}</h2>
                                </div>
                                <div class="col">
                                    <a href="javascript:void(0)"
                                        class="btn"
                                        onclick="document.getElementById('edit_list_{{ $key }}').innerHTML = '<div class='+'input-group mb-3'+'> <input type='+'text'+' class='+'form-control'+' name='+'edit_title'+' value='+'{{ str_replace(' ', '_', $key); }}'+'> <button class='+'btn btn-outline-secondary'+' type='+'submit'+' id='+'button-addon2'+'>Salvar</button> </div>';">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- Editar Lista --}}
                        <form action="{{ route('update', $key) }}" method="post">
                            @csrf
                            <div class="input-group mb-3" id="edit_list_{{ $key }}"></div>
                        </form>
                        {{-- percorre todos os itens --}}
                        @for($i = 0; $i < count($toDoLists[$key]); $i++)
                            <div class="list-group">
                                {{-- Itens se não nulos --}}
                                @if($toDoLists[$key][$i]['item'] != null)
                                    
                                    {{-- item não concluido --}}
                                    @if($toDoLists[$key][$i]['done'] == null)
                                        <div class="d-flex w-100 justify-content-between">
                                            <a href="{{ route('done', $toDoLists[$key][$i]['id']) }}" class="list-group-item list-group-item-action">
                                                
                                                {{-- Item --}}
                                                <h5>
                                                    {{ $toDoLists[$key][$i]['item'] }}
                                                </h5>
                                                
                                                {{-- Data de criação --}}
                                                <p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                                    </svg>
                                                    <small>{{ date('d-m-Y', strtotime($toDoLists[$key][$i]['created_at'])) }}</small>
                                                    <br>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                                    </svg>
                                                    <small>{{ date('h:i:s', strtotime($toDoLists[$key][$i]['created_at'])) }}</small>
                                                </p>
                                                
                                            </a>
                                        </div>
                                    @else
                                    {{-- item concluido --}}
                                        <div class="d-flex w-100 justify-content-between">
                                            <a href="{{ route('unDone', $toDoLists[$key][$i]['id']) }}" class="list-group-item list-group-item-action " style="background-color: #dee2e6">
                                                
                                                {{-- Item --}}
                                                <h5>
                                                    <del>
                                                        {{-- item riscado --}}
                                                        {{ $toDoLists[$key][$i]['item'] }}
                                                    </del>
                                                </h5>
                                                
                                                {{-- Data de criação --}}
                                                <p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                                    </svg>
                                                    <small>{{ date('d-m-Y', strtotime($toDoLists[$key][$i]['created_at'])) }}</small>
                                                    <br>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                                    </svg>
                                                    <small>{{ date('h:i:s', strtotime($toDoLists[$key][$i]['created_at'])) }}</small>
                                                </p>
                                            
                                            </a>
                                        </div>
                                    @endif
                                    {{-- botão remover --}}
                                    <form action="{{ route('delete', $toDoLists[$key][$i]['id']) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn" style="background-color: #ea868f">
                                                Deletar item
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M6.5 1a.5.5 0 0 0-.5.5v1h4v-1a.5.5 0 0 0-.5-.5h-3ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1H3.042l.846 10.58a1 1 0 0 0 .997.92h6.23a1 1 0 0 0 .997-.92l.846-10.58Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                                    <br>
                                @endif
                            </div>
                        @endfor
                        {{-- Novo Iten --}}
                        <form action="{{ route('store_item', $key) }}" method="post">
                            @csrf
                            <div class="input-group mb-3" id="new_item_{{ $loop->index }}"></div>
                        </form>
                        <hr>
                        {{-- botão novo item --}}
                        <div class="d-grid gap-2">
                            <a href="#"
                                class="btn"
                                style="background-color: #6ea8fe"
                                onclick="document.getElementById('new_item_{{ $loop->index }}').innerHTML = '<br><input type='+'text'+' name=new_item class='+'form-control'+' /> <button type='+'submit'+' class='+'btn btn-outline-success'+' >Ok</button>';">
                                Novo Item
                            </a>
                        </div>
                        <br>
                        {{-- botão remover Lista --}}
                        <form action="{{ route('delete_list', $key) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn" style="background-color: #ea868f">
                                    Deletar Lista
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6.5 1a.5.5 0 0 0-.5.5v1h4v-1a.5.5 0 0 0-.5-.5h-3ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1H3.042l.846 10.58a1 1 0 0 0 .997.92h6.23a1 1 0 0 0 .997-.92l.846-10.58Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                    </svg>
                                </button>
                            </div>
                        </form>
                        
                    </div>
                @endforeach
            </div>
        @else
            <p class="alert alert-info">Nenhuma Lista</p>
        @endif
    </div>
    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script>
        function newList () {
            document.getElementById('new_list').innerHTML = "<input type='text' name='title' class='form-control mt-2' /> <button type='submit' class='btn btn-outline-success' >Criar</button>";
        }
    </script>
    
</body>
</html>