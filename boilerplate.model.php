<?php

use Rhymix\Framework\Exceptions\DBError;

class BoilerplateModel extends Boilerplate
{
	/**
	 * 보일러플레이트를 가져옵니다.
	 * 
	 * @param int $boilerplate_srl
	 * @return mixed
	 * @throws DBError
	 */
	public function getBoilerplate(int $boilerplate_srl)
	{
		$output = executeQuery('boilerplate.getBoilerplate', (object) [
			'boilerplate_srl' => $boilerplate_srl
		]);
		
		if(!$output->toBool())
		{
			throw new DBError($output->message);
		}
		
		return $output->data;
	}
}
