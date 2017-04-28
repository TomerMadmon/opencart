<?php
// Text
$_['text_title']				= 'Klarna Facture à Payer dans les 14 jours';
$_['text_terms_fee']			= '<span id=\"klarna_invoice_toc\"></span> (+%s)<script type=\"text/javascript\">var terms = new Klarna.Terms.Invoice({el: \\'klarna_invoice_toc\\', eid: \\'%s\\', country: \\'%s\\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id=\"klarna_invoice_toc\"></span><script type=\"text/javascript\">var terms = new Klarna.Terms.Invoice({el: \\'klarna_invoice_toc\\', eid: \\'%s\\', country: \\'%s\\'});</script>';
$_['text_additional']			= 'Klarna Facture nécessite quelques informations supplémentaires avant de pouvoir proccess de votre commande.';
$_['text_male']					= 'Mâle';
$_['text_female']				= 'Female';
$_['text_year']					= 'Année';
$_['text_month']				= 'Mois';
$_['text_day']					= 'Jour';
$_['text_comment']				= 'Klarna\\'s du numéro de Facture: %s. \'. \"\n\" . \'%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Genre';
$_['entry_pno']					= 'Numéro Personnel';
$_['entry_dob']					= 'Date de Naissance';
$_['entry_phone_no']			= 'Numéro de téléphone';
$_['entry_street']				= 'Rue';
$_['entry_house_no']			= 'Maison Sans.';
$_['entry_house_ext']			= 'Maison Ext.';
$_['entry_company']				= 'Numéro D\'Enregistrement De La Société';

// Help
$_['help_pno']					= 'Veuillez entrer votre numéro de Sécurité Sociale ici.';
$_['help_phone_no']				= 'Veuillez entrer votre numéro de téléphone.';
$_['help_street']				= 'Veuillez noter que la livraison ne peut avoir lieu qu\'à l\'adresse enregistrée lors d\'un paiement avec Klarna.';
$_['help_house_no']				= 'Veuillez entrer votre numéro de maison.';
$_['help_house_ext']			= 'Veuillez soumettre votre maison extension ici. E. g. A, B, C, Rouge, Bleu ect.';
$_['help_company']				= 'Veuillez entrer votre Entreprise\\'s numéro d\'enregistrement';

// Error
$_['error_deu_terms']			= 'Vous devez accepter de Klarna\\'s politique de confidentialité (protection des données)';
$_['error_address_match']		= 'Facturation et adresse de Livraison doit correspondre si vous voulez utiliser Klarna Facture';
$_['error_network']				= 'Erreur s\'est produite lors de la connexion à Klarna. S\'il vous plaît essayer à nouveau plus tard.';