<?php

namespace IIO\Classes;

class stickyHelper
{
	public function myGetContentElement($objElement, $strBuffer)
	{
		if($objElement->stickyHeader && TL_MODE == 'FE')
		{
			$GLOBALS['TL_JQUERY']['STICKYHEADER'] = '<script src="system/modules/stickytable/assets/js/jquery.stickytableheaders.min.js"></script><script>$(document).ready(function(){$(".sticky table").stickyTableHeaders();});</script>';
			return preg_replace("/class=\"(.*)block\"/", 'class="$1 block sticky"', $strBuffer);
		}

		return $strBuffer;
	}
}