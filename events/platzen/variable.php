<?php

	date_default_timezone_set('Asia/Calcutta');
	error_reporting(0);
	$arr=array('q1','q2','q3','q4','q5','q6','q7','q8','q9','q10','q11','q12','q13','q14','q15','q16','q17','q18','q19','q20','q21','q22','q23','q24','q25','q26','q27','q28','q29','q30','q31','q32','q33');
	$text = implode(",", $arr);
	$total_question = count($arr);
	//echo $total_question;
	$temp_ques=6;
	$no = time(); 
	$now = date('Y-m-d H:i:s',time());
	$event = "2014-10-18 14:50:00";
	$today = strtotime($time);
	$today = strtotime("now");
	$event_date = strtotime($event);
	//echo date('Y-m-d H:i:s',$event_date)." ".date('Y-m-d H:i:s',time())." ";
	$event_end= $event_date  + (60 * 60 * 9); 
	$show_score=$event_date + (60 * 60 * 9); 
	$ready=$event_date-$today;
	//ready <0 => event start time elapsed

	$show_ans=$event_end-$today;
	//show_ans > 0 => event still running

	$show_score=$show_score-$today;
	
?>
