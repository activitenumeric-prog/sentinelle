<?php

/**
 * Fonctions utiles au plugin Sentinelle
 *
 * @plugin     Sentinelle
 * @copyright  2026
 * @author     Mikaël
 * @licence    GNU/GPL
 * @package    SPIP\Sentinelle\Fonctions
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


/**
 * Exemple de filtre personnalisé
 *
 * @param string $texte
 * @return string
 */
function filtre_sentinelle_exemple($texte) {
	return strtoupper($texte);
}
