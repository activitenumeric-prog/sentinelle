<?php

/**
 * Fichier gérant l'installation et désinstallation du plugin Sentinelle
 *
 * @plugin     Sentinelle
 * @copyright  2026
 * @author     Mikaël
 * @licence    GNU/GPL 
 * @package    SPIP\Sentinelle\Installation
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


/**
 * Fonction d'installation et de mise à jour du plugin Sentinelle.
 *
 * Vous pouvez :
 * - créer la structure SQL si nécessaire
 * - insérer du pré-contenu
 * - installer des valeurs de configuration
 * - mettre à jour la structure SQL
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @param string $version_cible
 *     Version du schéma de données dans ce plugin (déclaré dans paquet.xml)
 * @return void
**/
function sentinelle_upgrade($nom_meta_base_version, $version_cible) {
	$maj = [];

	$maj['create'] = [
		['maj_tables', ['spip_sentinelle']],
	];
	
	// Exemple de migration
	// $maj['1.1.0'] = [['sql_alter', 'TABLE spip_sentinelle ADD COLUMN nouveau_champ TEXT']];

	include_spip('base/upgrade');
	maj_plugin($nom_meta_base_version, $version_cible, $maj);
}


/**
 * Fonction de désinstallation du plugin Sentinelle.
 *
 * Vous devez :
 * - nettoyer toutes les données ajoutées par le plugin
 * - supprimer les tables et les champs créés par le plugin
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @return void
**/
function sentinelle_vider_tables($nom_meta_base_version) {

	sql_drop_table('spip_sentinelle');

	effacer_meta($nom_meta_base_version);
}
