<?php 
	public function show($status,$message,$data){
		$result = array('status' =>$status,'message'=>$message,'data'=>$data);
		exit(json_encode($result));
	}