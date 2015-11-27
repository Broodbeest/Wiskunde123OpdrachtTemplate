<?php
/**
 * Opauth basic configuration file to quickly get you started
 * ==========================================================
 * To use: rename to opauth.conf.php and tweak as you like
 * If you require advanced configuration options, refer to opauth.conf.php.advanced
 */

$config = array(
/**
 * Path where Opauth is accessed.
 *  - Begins and ends with /
 *  - eg. if Opauth is reached via http://example.org/auth/, path is '/auth/'
 *  - if Opauth is reached via http://auth.example.org/, path is '/'
 */
	'path' => '/opauth/',

/**
 * Callback URL: redirected to after authentication, successful or otherwise
 */
	'callback_url' => '/opauth/callback.php',
	
/**
 * A random string used for signing of $auth response.
 * 
 * NOTE: PLEASE CHANGE THIS INTO SOME OTHER RANDOM STRING
 */
	'security_salt' => 'sgQp9DRsDN2CTe7EHfgoMlCuDC22StRj7l34Q2c7',
		
/**
 * Strategy
 * Refer to individual strategy's documentation on configuration requirements.
 * 
 * eg.
 * 'Strategy' => array(
 * 
 *   'Facebook' => array(
 *      'app_id' => 'APP ID',
 *      'app_secret' => 'APP_SECRET'
 *    ),
 * 
 * )
 *
 */
	'Strategy' => array(
		// Define strategies and their respective configs here
		

		'Google' => array(
			'client_id' => '481293669245-ehmo6gch7vm6ac0t4e1r3eqcp0bchfm2.apps.googleusercontent.com',
			'client_secret' => 'qXcxthmq0FwRwczAm-OVRVmm'
		),

				
	),
);