<?php
$alpha = array();
$start = "a";
for($i=0; $i<26; $i++)
{
	$alpha[] = $start;
	$start++;
}
echo ucfirst($alpha[18].$alpha[0].$alpha[11].$alpha[20].$alpha[19]);
?>