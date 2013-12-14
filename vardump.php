<?php

/**
 * Custom pretty vardump for 1 mixed variable.
 *
 * @param mixed $var
 * @param bool $return
 * @param bool $pre
 * @param string $font_size
 * @return null|string
 */
function vardump($var, $return = FALSE, $pre = FALSE, $font_size = '') {
	static $out = '';
  static $spaces = 0;

  if ($spaces == 0) $out = '';

  if ($pre) {
    $n = "\n";
    $sp = ' ';
  }
  else {
    $n = '<br />';
    $sp = '&nbsp;';
  }

  //echo "++ $spaces ++";
//	if (!$spaces) echo "<pre>";

	$t = str_repeat($sp, $spaces);

	if (is_array($var)) {
		if ($spaces) {
			$out .= "$n";
		}
		$spaces += 4;
		$out .= "$t<strong>array</strong>$n";
		$t .= $sp . $sp;
		/** @var array $var */
    if (count($var)) {
			foreach ($var as $key => $val) {
				if (is_string($key)) $key = "'$key'";
				$out .= "$t{$key} <span style='color: #888a85'>=&gt;</span> ";
				$fn = __FUNCTION__;
        $fn($val);
			}
		} else {
			$out .= "$t<em><span style='color: #888a85'>empty</span></em>$n";
		}
		$spaces -= 4;
	}
	elseif (is_string($var)) {
		$len = strlen($var);
    $var = htmlentities($var);
    $var = str_replace(' ', '&nbsp;', $var);
		$out .= "<" . "small>string</small> <span style='color: #cc0000'>'$var'</span> <i>(length=" . $len . ")</i>$n";
	}
	elseif (is_int($var)) {
		$out .= "<" . "small>int</small> <span style='color: #4e9a06'>$var</span>$n";
	}
	elseif (is_float($var)) {
		$out .= "<" . "small>float</small> <span style='color: #f57900'>$var</span>$n";
	}
	elseif (is_bool($var)) {
		$var = $var ? 'true' : 'false';
		$out .= "<" . "small>boolean</small> <span style='color: #75507b'>$var</span>$n";
	}
	elseif (is_null($var)) {
//		$var = gettype($var);
		$out .= "<" . "small>null</small> <span style='color: #75507b'>null</span>$n";
	}
	elseif (is_object($var)) {
		$var = get_class($var);
		$out .= "<" . "small>object</small> <span style='color: #75507b'>$var</span>$n";
	}
	elseif (is_resource($var)) {
		/** @var resource $var */
    $var = get_resource_type($var);
		$out .= "<" . "small>resource</small> <span style='color: #75507b'>$var</span>$n";
	}
	else {
		$type = gettype($var);
		$out .= "<" . "small>$type</small> <span style='color: #75507b'>???</span>$n";
	}

  if (!$spaces) {
    $tmp = $out;
    $out = '';
    if ($pre) {
      if ($font_size) {
        $tmp = sprintf('<' . 'pre style="font-size: %s">%s</pre>', $font_size, $tmp);
      }
      else {
        $tmp = "<pre>$tmp</pre>";
      }
    }
    return ($return) ? $tmp : print $tmp;
  }
  else {
    return NULL;
  }
}

$time = $_SERVER['REQUEST_TIME'];

$date = date('H:i:s Y-M-d', strtotime('now + 7 hours'));
vardump($date, FALSE, TRUE);

$date = date('H:i:s Y-M-d', $time + (3600 * 7));
vardump($date, FALSE, TRUE);

vardump($_SERVER, FALSE, TRUE);
