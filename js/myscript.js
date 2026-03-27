/**
 * Scripts pour le plugin Sentinelle
 *
 * @plugin     Sentinelle
 * @copyright  2026
 */

(function($) {
	'use strict';

	// Initialisation au chargement du DOM
	$(document).ready(function() {
		console.log('Plugin Sentinelle initialisé');
		
		// Votre code d'initialisation ici
		init_sentinelle();
	});

	/**
	 * Fonction d'initialisation du plugin
	 */
	function init_sentinelle() {
		// Exemple : ajouter un événement sur les éléments du plugin
		$('.sentinelle').on('click', function(e) {
			// Votre logique ici
		});
	}

	/**
	 * Exemple de fonction utilitaire
	 */
	function sentinelle_exemple() {
		// Votre code ici
	}

	// Exposer les fonctions publiques si nécessaire
	window.sentinelle = {
		init: init_sentinelle,
		exemple: sentinelle_exemple
	};

})(jQuery);
