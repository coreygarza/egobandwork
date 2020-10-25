<?php
/**
 * Template Name: Case studies
 * Description: Case studies template.
 *
 * @package easygoband
 */

global $post;

$context = \Timber\Timber::get_context();

\Timber\Timber::render( 'layouts/case-studies.twig', $context );
