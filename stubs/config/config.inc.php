<?php

/* SSL configuration */
\define('_PS_SSL_PORT_', 443);
\define('_THEME_NAME_', $context->shop->theme->getName());
\define('_PARENT_THEME_NAME_', $context->shop->theme->get('parent') ?: '');
\define('__PS_BASE_URI__', $context->shop->getBaseURI());
/**
 * @deprecated since 1.7.7
 */
\define('_PS_PRICE_DISPLAY_PRECISION_', 2);
/**
 * @deprecated since 1.7.7
 */
\define('_PS_PRICE_COMPUTE_PRECISION_', 2);
/*
 * @deprecated
 * USE : Configuration::get() method in order to getting the id of order status
 */
\define('_PS_OS_CHEQUE_', \Configuration::get('PS_OS_CHEQUE'));
\define('_PS_OS_PAYMENT_', \Configuration::get('PS_OS_PAYMENT'));
\define('_PS_OS_PREPARATION_', \Configuration::get('PS_OS_PREPARATION'));
\define('_PS_OS_SHIPPING_', \Configuration::get('PS_OS_SHIPPING'));
\define('_PS_OS_DELIVERED_', \Configuration::get('PS_OS_DELIVERED'));
\define('_PS_OS_CANCELED_', \Configuration::get('PS_OS_CANCELED'));
\define('_PS_OS_REFUND_', \Configuration::get('PS_OS_REFUND'));
\define('_PS_OS_ERROR_', \Configuration::get('PS_OS_ERROR'));
\define('_PS_OS_OUTOFSTOCK_', \Configuration::get('PS_OS_OUTOFSTOCK'));
\define('_PS_OS_OUTOFSTOCK_PAID_', \Configuration::get('PS_OS_OUTOFSTOCK_PAID'));
\define('_PS_OS_OUTOFSTOCK_UNPAID_', \Configuration::get('PS_OS_OUTOFSTOCK_UNPAID'));
\define('_PS_OS_BANKWIRE_', \Configuration::get('PS_OS_BANKWIRE'));
\define('_PS_OS_PAYPAL_', \Configuration::get('PS_OS_PAYPAL'));
\define('_PS_OS_WS_PAYMENT_', \Configuration::get('PS_OS_WS_PAYMENT'));
\define('_PS_OS_COD_VALIDATION_', \Configuration::get('PS_OS_COD_VALIDATION'));
\define('_MEDIA_SERVER_1_', \Configuration::get('PS_MEDIA_SERVER_1'));
\define('_MEDIA_SERVER_2_', \Configuration::get('PS_MEDIA_SERVER_2'));
\define('_MEDIA_SERVER_3_', \Configuration::get('PS_MEDIA_SERVER_3'));
