<?php

/**
	* Prequel Core Class
	*
*/

namespace Prequel;

class Prequel
{

	public function convert_json($data)
	{
		return json_encode($data);
	}

	public function convert_json_array($data)
	{
		$jsonData = json_encode($data);

		return json_decode($jsonData);
	}

	public function convert_json_object($data)
	{
		$jsonData = json_encode($data);

		return json_decode($jsonData);
	}
}
