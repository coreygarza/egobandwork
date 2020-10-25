<?php
/**
 * Template Name: Solutions
 * Description: Solutions template.
 *
 * @package easygoband
 */

global $post;

$context = \Timber\Timber::get_context();
$context['userIp'] = $_SERVER['REMOTE_ADDR'];

$theme = new \Chisel\Extensions\Theme();
$context['productStandard'] = $theme->getProductData('standard');
$context['productRooms'] = $theme->getProductData('rooms');
$context['productParcels'] = $theme->getProductData('parcels');

\Timber\Timber::render( 'layouts/solutions.twig', $context );
