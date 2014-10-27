<?php

function isSchaltjahr($year)
{
	if ($year % 4 == 0) {
		if ($year % 100 == 0) {
			if ($year % 400 == 0) {
				return true;
			} else {
				return false;	
			}
		} else {
			return true;
		}
	} else {
		return false;
	}
}

function testSchaltjahr($year, $expectedResult)
{
	$actualResult = isSchaltjahr($year);
	if ($actualResult === $expectedResult)
	{
		echo 'Ok<br />';
	}
	else
	{
		echo 'Falsch: isSchaltjahr(' . $year . ') sollte ' . $expectedResult . ' zurueckgeben. (Ist: ' . $actualResult . ')<br />'; 	
	}
}

testSchaltjahr(2000, true);
testSchaltjahr(2001, false);
testSchaltjahr(2004, true);
testSchaltjahr(1900, false);
testSchaltjahr(1600, true);