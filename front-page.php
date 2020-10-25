<?php
/**
 * The home page
 *
 * @package easygoband
 */

global $post;

$context = \Timber\Timber::get_context();
\Timber\Timber::render( 'front-page.twig', $context );
