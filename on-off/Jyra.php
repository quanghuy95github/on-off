<?php

date_default_timezone_set('Asia/Bangkok');

class Jyra
{
	public function execute($cooperation, $cooperationOn, $cooperationOff)
	{
		$cooperation = trim(str_replace("\r\n", "\n", $cooperation));
		$cooperationOn = trim(str_replace("\r\n", "\n", $cooperationOn));
		$cooperationOff = trim(str_replace("\r\n", "\n", $cooperationOff));

		$cooperationArr = explode("\n",$cooperation);
		$cooperationOnArr = explode("\n",$cooperationOn);
		$cooperationOffArr = explode("\n",$cooperationOff);

		$this->trimString($cooperationArr);
		$this->trimString($cooperationOnArr);
		$this->trimString($cooperationOffArr);

		foreach ($cooperationOnArr as $val) {
			if (($key = array_search($val, $cooperationArr)) !== false) {
			    unset($cooperationArr[$key]);
			}
		}

		foreach ($cooperationOffArr as $val) {
			if (($key = array_search($val, $cooperationArr)) === false) {
			    array_push($cooperationArr, $val);
			}
		}

		sort($cooperationArr);
		$cooperationArr = array_filter($cooperationArr);

		header("Content-type: text/html; charset=utf-8");
		header("Content-Disposition: attachment;Filename=ua-amzfs_" . date("Ymdhms") . ".txt");
		foreach ($cooperationArr as $val) {
			$txt = $val . "\r\n";
			echo $txt;
		}
	}

	public function trimString(&$data)
	{
		foreach ($data as $key => $val) {
			$data[$key] = trim($val, " \t\n\r\0\x0B");
		}
	}
}