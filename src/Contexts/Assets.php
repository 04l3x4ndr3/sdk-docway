<?php

namespace O4l3x4ndr3\SdkDocway\Contexts;

use O4l3x4ndr3\SdkDocway\Configuration;
use O4l3x4ndr3\SdkDocway\Helpers\CallApi;

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