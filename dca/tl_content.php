<?php

$GLOBALS['TL_DCA']['tl_content']['palettes']['table'] .= ';{sticky_legend:hide},stickyHeader';
$GLOBALS['TL_DCA']['tl_content']['palettes']['module'] .= ';{sticky_legend:hide},stickyHeader';

$GLOBALS['TL_DCA']['tl_content']['fields']['stickyHeader'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['stickyHeader'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array(),
	'sql'                     => "char(1) NOT NULL default ''"
);