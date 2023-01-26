<?php

class MVC_Library_Timezones
{
	public function generate()
	{
		return ["africa/abidjan", "africa/accra", "africa/addis_ababa", "africa/algiers", "africa/asmara", "africa/asmera", "africa/bamako", "africa/bangui", "africa/banjul", "africa/bissau", "africa/blantyre", "africa/brazzaville", "africa/bujumbura", "africa/cairo", "africa/casablanca", "africa/ceuta", "africa/conakry", "africa/dakar", "africa/dar_es_salaam", "africa/djibouti", "africa/douala", "africa/el_aaiun", "africa/freetown", "africa/gaborone", "africa/harare", "africa/johannesburg", "africa/kampala", "africa/khartoum", "africa/kigali", "africa/kinshasa", "africa/lagos", "africa/libreville", "africa/lome", "africa/luanda", "africa/lubumbashi", "africa/lusaka", "africa/malabo", "africa/maputo", "africa/maseru", "africa/mbabane", "africa/mogadishu", "africa/monrovia", "africa/nairobi", "africa/ndjamena", "africa/niamey", "africa/nouakchott", "africa/ouagadougou", "africa/porto-novo", "africa/sao_tome", "africa/timbuktu", "africa/tripoli", "africa/tunis", "africa/windhoek", "america/adak", "america/anchorage", "america/anguilla", "america/antigua", "america/araguaina", "america/argentina/buenos_aires", "america/argentina/catamarca", "america/argentina/comodrivadavia", "america/argentina/cordoba", "america/argentina/jujuy", "america/argentina/la_rioja", "america/argentina/mendoza", "america/argentina/rio_gallegos", "america/argentina/salta", "america/argentina/san_juan", "america/argentina/san_luis", "america/argentina/tucuman", "america/argentina/ushuaia", "america/aruba", "america/asuncion", "america/atikokan", "america/atka", "america/bahia", "america/barbados", "america/belem", "america/belize", "america/blanc-sablon", "america/boa_vista", "america/bogota", "america/boise", "america/buenos_aires", "america/cambridge_bay", "america/campo_grande", "america/cancun", "america/caracas", "america/catamarca", "america/cayenne", "america/cayman", "america/chicago", "america/chihuahua", "america/coral_harbour", "america/cordoba", "america/costa_rica", "america/cuiaba", "america/curacao", "america/danmarkshavn", "america/dawson", "america/dawson_creek", "america/denver", "america/detroit", "america/dominica", "america/edmonton", "america/eirunepe", "america/el_salvador", "america/ensenada", "america/fort_wayne", "america/fortaleza", "america/glace_bay", "america/godthab", "america/goose_bay", "america/grand_turk", "america/grenada", "america/guadeloupe", "america/guatemala", "america/guayaquil", "america/guyana", "america/halifax", "america/havana", "america/hermosillo", "america/indiana/indianapolis", "america/indiana/knox", "america/indiana/marengo", "america/indiana/petersburg", "america/indiana/tell_city", "america/indiana/vevay", "america/indiana/vincennes", "america/indiana/winamac", "america/indianapolis", "america/inuvik", "america/iqaluit", "america/jamaica", "america/jujuy", "america/juneau", "america/kentucky/louisville", "america/kentucky/monticello", "america/knox_in", "america/la_paz", "america/lima", "america/los_angeles", "america/louisville", "america/maceio", "america/managua", "america/manaus", "america/marigot", "america/martinique", "america/matamoros", "america/mazatlan", "america/mendoza", "america/menominee", "america/merida", "america/mexico_city", "america/miquelon", "america/moncton", "america/monterrey", "america/montevideo", "america/montreal", "america/montserrat", "america/nassau", "america/new_york", "america/nipigon", "america/nome", "america/noronha", "america/north_dakota/center", "america/north_dakota/new_salem", "america/ojinaga", "america/panama", "america/pangnirtung", "america/paramaribo", "america/phoenix", "america/port-au-prince", "america/port_of_spain", "america/porto_acre", "america/porto_velho", "america/puerto_rico", "america/rainy_river", "america/rankin_inlet", "america/recife", "america/regina", "america/resolute", "america/rio_branco", "america/rosario", "america/santa_isabel", "america/santarem", "america/santiago", "america/santo_domingo", "america/sao_paulo", "america/scoresbysund", "america/shiprock", "america/st_barthelemy", "america/st_johns", "america/st_kitts", "america/st_lucia", "america/st_thomas", "america/st_vincent", "america/swift_current", "america/tegucigalpa", "america/thule", "america/thunder_bay", "america/tijuana", "america/toronto", "america/tortola", "america/vancouver", "america/virgin", "america/whitehorse", "america/winnipeg", "america/yakutat", "america/yellowknife", "antarctica/casey", "antarctica/davis", "antarctica/dumontdurville", "antarctica/macquarie", "antarctica/mawson", "antarctica/mcmurdo", "antarctica/palmer", "antarctica/rothera", "antarctica/south_pole", "antarctica/syowa", "antarctica/vostok", "arctic/longyearbyen", "asia/aden", "asia/almaty", "asia/amman", "asia/anadyr", "asia/aqtau", "asia/aqtobe", "asia/ashgabat", "asia/ashkhabad", "asia/baghdad", "asia/bahrain", "asia/baku", "asia/bangkok", "asia/beirut", "asia/bishkek", "asia/brunei", "asia/calcutta", "asia/choibalsan", "asia/chongqing", "asia/chungking", "asia/colombo", "asia/dacca", "asia/damascus", "asia/dhaka", "asia/dili", "asia/dubai", "asia/dushanbe", "asia/gaza", "asia/harbin", "asia/ho_chi_minh", "asia/hong_kong", "asia/hovd", "asia/irkutsk", "asia/istanbul", "asia/jakarta", "asia/jayapura", "asia/jerusalem", "asia/kabul", "asia/kamchatka", "asia/karachi", "asia/kashgar", "asia/kathmandu", "asia/katmandu", "asia/kolkata", "asia/krasnoyarsk", "asia/kuala_lumpur", "asia/kuching", "asia/kuwait", "asia/macao", "asia/macau", "asia/magadan", "asia/makassar", "asia/manila", "asia/muscat", "asia/nicosia", "asia/novokuznetsk", "asia/novosibirsk", "asia/omsk", "asia/oral", "asia/phnom_penh", "asia/pontianak", "asia/pyongyang", "asia/qatar", "asia/qyzylorda", "asia/rangoon", "asia/riyadh", "asia/saigon", "asia/sakhalin", "asia/samarkand", "asia/seoul", "asia/shanghai", "asia/singapore", "asia/taipei", "asia/tashkent", "asia/tbilisi", "asia/tehran", "asia/tel_aviv", "asia/thimbu", "asia/thimphu", "asia/tokyo", "asia/ujung_pandang", "asia/ulaanbaatar", "asia/ulan_bator", "asia/urumqi", "asia/vientiane", "asia/vladivostok", "asia/yakutsk", "asia/yekaterinburg", "asia/yerevan", "atlantic/azores", "atlantic/bermuda", "atlantic/canary", "atlantic/cape_verde", "atlantic/faeroe", "atlantic/faroe", "atlantic/jan_mayen", "atlantic/madeira", "atlantic/reykjavik", "atlantic/south_georgia", "atlantic/st_helena", "atlantic/stanley", "australia/act", "australia/adelaide", "australia/brisbane", "australia/broken_hill", "australia/canberra", "australia/currie", "australia/darwin", "australia/eucla", "australia/hobart", "australia/lhi", "australia/lindeman", "australia/lord_howe", "australia/melbourne", "australia/north", "australia/nsw", "australia/perth", "australia/queensland", "australia/south", "australia/sydney", "australia/tasmania", "australia/victoria", "australia/west", "australia/yancowinna", "europe/amsterdam", "europe/andorra", "europe/athens", "europe/belfast", "europe/belgrade", "europe/berlin", "europe/bratislava", "europe/brussels", "europe/bucharest", "europe/budapest", "europe/chisinau", "europe/copenhagen", "europe/dublin", "europe/gibraltar", "europe/guernsey", "europe/helsinki", "europe/isle_of_man", "europe/istanbul", "europe/jersey", "europe/kaliningrad", "europe/kiev", "europe/lisbon", "europe/ljubljana", "europe/london", "europe/luxembourg", "europe/madrid", "europe/malta", "europe/mariehamn", "europe/minsk", "europe/monaco", "europe/moscow", "europe/nicosia", "europe/oslo", "europe/paris", "europe/podgorica", "europe/prague", "europe/riga", "europe/rome", "europe/samara", "europe/san_marino", "europe/sarajevo", "europe/simferopol", "europe/skopje", "europe/sofia", "europe/stockholm", "europe/tallinn", "europe/tirane", "europe/tiraspol", "europe/uzhgorod", "europe/vaduz", "europe/vatican", "europe/vienna", "europe/vilnius", "europe/volgograd", "europe/warsaw", "europe/zagreb", "europe/zaporozhye", "europe/zurich", "indian/antananarivo", "indian/chagos", "indian/christmas", "indian/cocos", "indian/comoro", "indian/kerguelen", "indian/mahe", "indian/maldives", "indian/mauritius", "indian/mayotte", "indian/reunion", "pacific/apia", "pacific/auckland", "pacific/chatham", "pacific/easter", "pacific/efate", "pacific/enderbury", "pacific/fakaofo", "pacific/fiji", "pacific/funafuti", "pacific/galapagos", "pacific/gambier", "pacific/guadalcanal", "pacific/guam", "pacific/honolulu", "pacific/johnston", "pacific/kiritimati", "pacific/kosrae", "pacific/kwajalein", "pacific/majuro", "pacific/marquesas", "pacific/midway", "pacific/nauru", "pacific/niue", "pacific/norfolk", "pacific/noumea", "pacific/pago_pago", "pacific/palau", "pacific/pitcairn", "pacific/ponape", "pacific/port_moresby", "pacific/rarotonga", "pacific/saipan", "pacific/samoa", "pacific/tahiti", "pacific/tarawa", "pacific/tongatapu", "pacific/truk", "pacific/wake", "pacific/wallis", "pacific/yap"];
	}
}