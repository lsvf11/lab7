<?php
function get_bigger ($a, $b)
{
if ($a>$b){
	return $a;
}else 
{
	return $b;
}

}

$bigger = get_bigger (10,20);
echo $bigger;