<?php


namespace classmap;


class Lib
{
	public $allowSymbols = ["(", ")", "\n", "\t", "\r"];
	function example ($string): bool
	{
		$arrRes = [];
		$arr = str_split($string);
		foreach ($arr as $key => $value) {
			if (in_array($value, $this->allowSymbols)) {
				$arrRes["$value"]++;
			} else {
				throw new \InvalidArgumentException('found symbols'.$value);
			}
		}

		if (count($arrRes["("]) == count($arrRes[")"])){
			return true;
		}else{
			return false;
		}
	}
}