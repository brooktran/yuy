<?php


/**
 * 字符串工具类
 *
 * @author Brook
 * @since weike. Ver 2.0
 */
class StringUtils {
	public static function startsWith($haystack,$needle,$case=true){
		if($case){
			return strpos($haystack, $needle, 0) === 0;
		}
		return stripos($haystack, $needle, 0) === 0;
	}

	public static function endsWith($haystack,$needle,$case=true){
		$expectedPosition = strlen($haystack) - strlen($needle);
		if($case){
			return strrpos($haystack, $needle, 0) === $expectedPosition;
		}
		return strripos($haystack, $needle, 0) === $expectedPosition;
	}
}

?>