<?php

namespace TwoPlug\SdkDocway\Contexts;

use TwoPlug\SdkDocway\Configuration;
use TwoPlug\SdkDocway\Helpers\CallApi;

class Assets extends CallApi {

	public function __construct(?Configuration $configuration = null)
	{
		parent::__construct($configuration);
	}

	public function symptoms(): array
	{
		return $this->call('GET', 'asset/api/symptoms');
	}

	public function specialties(): array
	{
		return $this->call('GET', 'asset/api/specialities');
	}
}