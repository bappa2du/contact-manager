<?php

function mobile_format($mobile)
{
	return str_replace(['+',' '], '', $mobile);
}

function f_date($date)
{
	return date('d-M-y',strtotime($date));
}

function h_status($status)
{
	return $status==1?'<i class="fa fa-check text-success">':'<i class="fa fa-times text-danger"></i>';
}