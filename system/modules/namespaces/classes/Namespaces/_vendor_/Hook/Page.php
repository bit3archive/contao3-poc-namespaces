<?php

namespace Namespaces\_vendor_\Hook;

class Page
{
	public function myGeneratePage($objPage, $objLayout, $objPageRegular)
	{
		$GLOBALS['TL_HEAD'][] = '<!-- Hello hook :) -->';
	}
}
