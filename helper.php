<?php
/**
 
 */
defined ( '_JEXEC' ) or die ();
class modForumHelper {
public static function getMax_post( $params )
{
    $db = JFactory::getDBO();
   	$db->setQuery("SELECT COUNT(id) FROM #__kunena_messages");
	$eredmenymax = $db->loadResult();;
	
	return $eredmenymax;
}

public static function getOsszes_tema( $params )
{
    $db = JFactory::getDBO();
	$db->setQuery("SELECT COUNT(id) FROM #__kunena_topics");
	$eredmeny_ossztema = $db->loadResult();;
	
	return $eredmeny_ossztema;
}

public static function getOsszes_megtekintes( $params )
{
    $precision = 3;
    $db = JFactory::getDBO();
	$db->setQuery("SELECT SUM(hits) FROM #__kunena_topics");
	$eredmeny_osszmegtekintes = $db->loadResult();;
			
			if ($eredmeny_osszmegtekintes >= 10000){
			// Round the number to n significant digits
			$eredmeny_osszmegtekintes = round ($eredmeny_osszmegtekintes, -1*(log10($eredmeny_osszmegtekintes)+1) + $precision);
		}

		if ($eredmeny_osszmegtekintes < 10000) {
			$sokmegtekintes = $eredmeny_osszmegtekintes;
		} elseif ($eredmeny_osszmegtekintes >= 1000000) {
			$sokmegtekintes = $eredmeny_osszmegtekintes / 1000000 . JText::_('MOD_FORUM_MILLIO');
		} else {
			$sokmegtekintes = $eredmeny_osszmegtekintes / 1000 . JText::_('MOD_FORUM_EZER');
		}

		return $sokmegtekintes;
		return $eredmeny_osszes_megtekintes;
}
}
?>