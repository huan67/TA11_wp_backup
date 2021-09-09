<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$manifest = array();

$manifest[ 'name' ]			 = esc_html__( 'giver', 'giver' );
$manifest[ 'uri' ]			 = esc_url( 'annurtheme.com' );
$manifest[ 'description' ]	 = esc_html__( 'Giver WordPress theme', 'giver' );
$manifest[ 'version' ]		 = '1.0';
$manifest[ 'author' ]			 = 'annurtheme';
$manifest[ 'author_uri' ]		 = esc_url( 'annurtheme.com' );
$manifest[ 'requirements' ]	 = array(
	'wordpress' => array(
		'min_version' => '4.3',
	),
);

$manifest[ 'id' ] = 'scratch';

$manifest[ 'supported_extensions' ] = array(
	'backups'		 => array(),
);


?>
