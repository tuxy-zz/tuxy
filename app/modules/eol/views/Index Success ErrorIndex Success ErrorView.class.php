<?php

class eol_Index Success ErrorIndex Success ErrorView extends ProjectBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);

		// set the title
		$this->setAttribute('_title', 'Index Success Error Action');
	}
}

?>