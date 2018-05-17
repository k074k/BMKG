<?php

class Report
{
	protected $rawData = [];
	//protected $request = [];

	public function groupData	{
		$raw = $this->rawData;

		$monthData = [];

		$_tmpMonth = '';

		foreach ($raw as $_val) {
			if ($_val->bulanIklim != $_tmpMonth)	{
				$_tmpMonth = $_val->bulanIklim;
			}
			$monthData[$_tmpMonth][] = array(
				'T07' => $T07, 
				'T13' => $T13,
				'T18' => $T18
			);
		}
	}
}

?>