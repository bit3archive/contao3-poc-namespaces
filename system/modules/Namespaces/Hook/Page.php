<?php

namespace Namespaces\Hook;

class Page
{
	public function myGeneratePage($objPage, $objLayout, $objPageRegular)
	{
		$GLOBALS['TL_HEAD'][] = '<!-- Hello hook :) -->';
	}
}
