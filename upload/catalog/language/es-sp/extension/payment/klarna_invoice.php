<?php
// Text
$_['text_title']				= 'Klarna de Factura de Pago dentro de los 14 días';
$_['text_terms_fee']			= '<span id=\"klarna_invoice_toc\"></span> (+%s)<script type=\"text/javascript\">var terms = new Klarna.Terms.Invoice({el: \\'klarna_invoice_toc\\', eid: \\'%s\\', country: \\'%s\\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id=\"klarna_invoice_toc\"></span><script type=\"text/javascript\">var terms = new Klarna.Terms.Invoice({el: \\'klarna_invoice_toc\\', eid: \\'%s\\', country: \\'%s\\'});</script>';
$_['text_additional']			= 'Factura Klarna requiere alguna información adicional antes de que puedan proceso de su pedido.';
$_['text_male']					= 'Macho';
$_['text_female']				= 'Hembra';
$_['text_year']					= 'Año';
$_['text_month']				= 'Mes';
$_['text_day']					= 'Día';
$_['text_comment']				= 'Klarna\\'s de la Factura ID: %s. \'. \"\n\" . \'%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Género';
$_['entry_pno']					= 'El Número De Personal';
$_['entry_dob']					= 'Fecha de Nacimiento';
$_['entry_phone_no']			= 'Número de teléfono';
$_['entry_street']				= 'Calle';
$_['entry_house_no']			= 'Casa No.';
$_['entry_house_ext']			= 'Casa Ext.';
$_['entry_company']				= 'Número De Registro De Empresa';

// Help
$_['help_pno']					= 'Por favor, introduzca su número de seguro Social aquí.';
$_['help_phone_no']				= 'Por favor, introduzca su número de teléfono.';
$_['help_street']				= 'Por favor, tenga en cuenta que la entrega sólo puede tener lugar en el domicilio registrado al pagar con Klarna.';
$_['help_house_no']				= 'Por favor, introduzca el número de su casa.';
$_['help_house_ext']			= 'Favor de enviar su casa de la extensión aquí. E. g. A, B, C, Rojo, Azul, ect.';
$_['help_company']				= 'Por favor, introduzca su Empresa\\'s número de registro';

// Error
$_['error_deu_terms']			= 'Usted debe estar de acuerdo a Klarna\\'s política de privacidad (Datenschutz)';
$_['error_address_match']		= 'Direcciones de Envío y facturación debe coincidir si desea utilizar la Factura Klarna';
$_['error_network']				= 'Error al conectar con Klarna. Por favor, inténtelo de nuevo más tarde.';