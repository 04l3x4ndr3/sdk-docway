<?php

namespace TwoPlug\SdkDocway\Contexts;

use TwoPlug\SdkDocway\Helpers\CallApi;

class Assets extends CallApi {

	public function symptoms(): object
	{
		return $this->call('GET', 'asset/api/symptoms');
	}

	public function specialties(): object
	{
		return $this->call('GET', 'asset/api/specialities');
	}
}