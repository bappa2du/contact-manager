<?php

function mobile_format($mobile)
{
	return str_replace(['+',' '], '', $mobile);
}

function f_date($date)
{
	return date('d-M-y',strtotime($date));
}