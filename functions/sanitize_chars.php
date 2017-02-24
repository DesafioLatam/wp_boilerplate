<?php 

	function dl_sanitize_chars($filename) {
		$original_chars = array(
					'/А/','/Б/','/В/','/Г/', // cyrillic alphabet
					'/Д/','/Е/','/Ж/','/З/','/И/',
					'/Й/','/К/','/Л/','/М/','/Н/',
					'/О/','/П/','/Р/','/С/','/Т/',
					'/У/','/Ф/','/Х/','/Ц/','/Ч/',
					'/Ш/','/Щ/','/Ь/','/Ю/','/Я/',
					'/а/','/б/','/в/','/г/','/д/','/е/','/ж/',
					'/з/','/и/','/й/','/к/','/л/',
					'/м/','/н/','/о/','/п/','/р/',
					'/с/','/т/','/у/','/ф/','/х/',
					'/ц/','/ч/','/ш/','/щ/',
					'/ь/','/ю/','/я/',
					'/Ґ/','/ґ/','/Є/','/є/','/І/','/і/','/Ї/','/ї/', // ukrainian
					'/Ё/','/ё/','/Ы/','/ы/','/Ъ/','/ъ/','/Э/','/э/', // russian
					'/Ў/','/ў/', // belarusian
					'/Ä/','/ä/','/Ö/','/ö/','/Ü/','/ü/','/ß/', // german
					'/Ą/','/ą/','/Ć/','/ć/','/Ę/','/ę/','/Ł/','/ł/','/Ń/','/ń/','/Ó/','/ó/','/Ś/','/ś/','/Ź/','/ź/','/Ż/','/ż/', // polish (new unique letters)
					'/Ő/','/ő/','/Ű/','/ű/', // hungarian
					'/ě/','/š/','/č/','/ř/','/ž/','/ý/','/á/','/é/','/ď/','/ť/','/ň/','/ú/','/ů/', // czech
					'/Ě/','/Š/','/Č/','/Ř/','/Ž/','/Ý/','/Á/','/É/','/Ď/','/Ť/','/Ň/','/Ú/','/Ů/',
					'/א/','/ב/','/ג/','/ד/','/ה/','/ו/','/ז/','/ח/','/ט/','/י/','/ך/','/כ/','/ל/','/ם/','/מ/','/ן/','/נ/','/ס/','/ע/','/ף/','/פ/','/ץ/','/צ/','/ק/','/ר/','/ש/','/ת/', //hebrew
					'/À/','/Á/','/Â/','/Ã/','/Å/','/Æ/','/Ç/','/È/','/É/','/Ê/','/Ë/','/Ì/','/Í/','/Î/','/Ï/','/Ð/','/Ñ/','/Ò/','/Ô/','/Õ/','/×/','/Ø/','/Ù/','/Ú/','/Û/','/Ý/','/Þ/', // extra all (http://www.atm.ox.ac.uk/user/iwi/charmap.html)
					'/à/','/á/','/â/','/ã/','/å/','/æ/','/ç/','/è/','/é/','/ê/','/ë/','/ì/','/í/','/î/','/ï/','/ð/','/ñ/','/ò/','/ô/','/õ/','/×/','/ø/','/ù/','/ú/','/û/','/ý/','/þ/','/ÿ/','/Ÿ/',
					'/№/','/“/','/”/','/«/','/»/','/„/','/@/','/%/', // other
					'/‘/','/’/','/`/','/´/','/º/','/ª/','/[\s\+]/','/\.(?=.*\.)/' // alternative regex /\.([^.]*(\.[^.]+$)?)/
					);
		$sanitized_chars = array(
					'a','b','v','h', // cyrillic alphabet
					'd','e','zh','z','y',
					'j','k','l','m','n',
					'o','p','r','s','t',
					'u','f','h','c','ch',
					'sh','shh','','ju','ja',
					'a','b','v','h','d','e','zh',
					'z','y','j','k','l',
					'm','n','o','p','r',
					's','t','u','f','h',
					'c','ch','sh','sch',
					'','ju','ja',
					'g','g','je','je','i','i','ji','ji', // ukrainian
					'jo','jo','y','y','','','ye','ye', // russian
					'u','u', // belorussian
					'ae','ae','oe','oe','ue','ue','ss', // german
					'a','a','c','c','e','e','l','l','n','n','o','o','s','s','z','z','z','z', // polish
					'o','o','u','u', // hungarian
					'e','s','c','r','z','y','a','e','d','t','n','u','u',  // czech
					'e','s','c','r','z','y','a','e','d','t','n','u','u',
					// hebrew symbols don't have an equivalent one latin letter, replacing for first letter of each symbol to prevent too large filenames
					'a','b','g','d','h','v','z','h','t','y','f','k','l','f','m','f','n','s','a','f','p','f','t','q','r','s','t',
		//			'alef','bet','gimel','dalet','he','vat','zayin','het','tet','yod','final-kaf','kaf','lamed','final-mem','mem','final-num','num','samekh','ayin','final-pe','pe','final-tsadi','tsadi','qof','resh','shin','tav', // hebrew letters
					'a','a','a','a','a','ae','c','e','e','e','e','i','i','i','i','d','n','o','o','o','x','o','u','u','u','y','p', // extra all
					'a','a','a','a','a','ae','c','e','e','e','e','i','i','i','i','d','n','o','o','o','x','o','u','u','u','y','p','y','y',
					'','','','','','','','', // other
					'','','','','o','a','-','-'
					);
		$friendly_filename = preg_replace($original_chars, $sanitized_chars, $filename);
		// At this point we should have a clean filename, but we're going to remove any character not covered by the above replacements,  just in case
		$friendly_filename = preg_replace('/[^a-zA-Z0-9_\.-]/', '', $friendly_filename); // allow only letters, numbers, underscores, dots, dashes
		return $friendly_filename;
	}

	add_filter('sanitize_file_name', 'dl_sanitize_chars', 10);

?>