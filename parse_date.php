<?php

function parse_date($string) 
{
	
}


testParseDate('01.01.2010', array('day' => 1, 'month' => 1, 'year' => 2010));
testParseDate('1.1.2010', array('day' => 1, 'month' => 1, 'year' => 2010));
testParseDate('28.2.2011', array('day' => 28, 'month' => 2, 'year' => 2011));
testParseDate('29.2.2012', array('day' => 29, 'month' => 2, 'year' => 2012));
//testParseDate('29.2.2011', array(???));