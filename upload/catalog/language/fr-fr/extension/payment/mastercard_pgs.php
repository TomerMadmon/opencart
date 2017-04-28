<?php
// Text
$_['text_title'] 						= 'La Carte Mastercard Services De Passerelle De Paiement';
$_['text_callback']						= 'La carte Mastercard Services de Passerelle de Paiement: %s %s dans la Transaction #%s pour cette commande.';
$_['text_new_card']						= '-- Nouvelle Carte --';
$_['text_existing_card']				= 'Carte Existante';
$_['text_select_card']					= 'Pour une plus rapide de la caisse de l\'expérience, vous avez la possibilité de sélectionner l\'une des cartes que vous avez utilisé dans les achats précédents:';
$_['text_card_brand_amex'] 				= 'American Express';
$_['text_card_brand_china_unionpay'] 	= 'La Chine UnionPay';
$_['text_card_brand_diners_club'] 		= 'Diners Club';
$_['text_card_brand_discover'] 			= 'Découvrir';
$_['text_card_brand_jcb'] 				= 'JCB (Japan Credit Bureau)';
$_['text_card_brand_maestro'] 			= 'Maestro';
$_['text_card_brand_mastercard'] 		= 'Mastercard';
$_['text_card_brand_visa'] 				= 'Visa';
$_['text_card_brand_uatp'] 				= 'UATP (Universelle de l\'Air Plan de Voyage)';
$_['text_card_brand_local_brand_only'] 	= 'Marque Inconnue';
$_['text_card_brand_unknown'] 			= 'Marque Inconnue';
$_['text_loading']						= 'De chargement... Merci de patienter...';
$_['text_items']                        = 'Élément(s)';
$_['text_log_notification_intro']       = '[Mastercard Services de Passerelle de Paiement - NOTIFICATION %s]: ';
$_['text_log_validate_callback_intro']  = '[Mastercard Services de Passerelle de Paiement - RAPPEL VALIDER]: ';
$_['text_log_api_intro']                = '[Mastercard Services de Passerelle de Paiement - API REST %s]: ';

// Error
$_['error_session']                     = 'Erreur: impossible d\'établir le paiement de la session. La carte Mastercard Services de Passerelle de Paiement ne peut pas continuer.';
$_['error_invalid_request']             = 'Erreur: demande non Valide.';
$_['error_api']                         = 'Une API erreur s\'est produite: %s';
$_['error_unknown']                     = 'Une erreur inattendue s\'est produite. Veuillez le signaler à la propriétaires du magasin.';
$_['error_event_missing']               = 'Erreur de Configuration: carte Mastercard Services de Passerelle de Paiement n\'a pas été initialisé correctement. Assurez-vous que le catalogue d\'événements/contrôleur/checkout/checkout/avant &gt; extension/paiement/mastercard_pgs/init est permis!';
$_['error_validate_protocol']           = 'Erreur: Protocole non valide.';
$_['error_secret_mismatch']             = 'Erreur: Notification de non-concordance de secret.';
$_['error_notification_parse']          = 'Erreur: Notification n\'a pas été analysée.';
$_['error_transaction_logged']          = 'Erreur: la Transaction est déjà connecté.';

// Warning
$_['warning_test_mode'] 				= 'Avertissement: la carte Mastercard Services de Passerelle de Paiement est en cours d\'exécution en mode test. Remarque: les commandes de plus de 0 peut pas traités.';