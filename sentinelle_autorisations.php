<?php

/**
 * Définit les autorisations du plugin Sentinelle
 *
 * @plugin     Sentinelle
 * @copyright  2026
 * @author     Mikaël
 * @licence    GNU/GPL
 * @package    SPIP\Sentinelle\Autorisations
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


/**
 * Fonction d'appel pour le pipeline
 * @pipeline autoriser
 */
function sentinelle_autoriser() {
}


/**
 * Autoriser la configuration du plugin
 *
 * @return bool
 */
function autoriser_sentinelle_configurer_dist($faire, $type, $id, $qui, $opt) {
	return autoriser('webmestre', $type, $id, $qui, $opt);
}
