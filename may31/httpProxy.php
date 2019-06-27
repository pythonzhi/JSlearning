<?php

function httpGet($url,$data=""){
	$curl = curl_init(); //相当于创建 XMLHttpRequest 对象

	//处理没有提交数据的情况
	$str = $data ? "?" . $data : "";

	//设置请求的页面地址, 默认以get方式发送请求 //相当于 xhr.open()
	curl_setopt($curl,CURLOPT_URL,$url . $str);


	//设置使 exec() 方法不直接输出结果，而是将结果作为返回值返回。 相当于 xhr.send()
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

	//执行连接请求 curl_exec() 方法默认会将请求回来的数据直接输出。
	$results = curl_exec($curl);

	return $results; // 相当于 console.log( xhr.responseText )

	//关闭curl连接会话
	curl_close($curl);
}


function httpPost($url,$data){
	//初始化一个curl连接会话
	$curl = curl_init();

	//设置请求的页面地址, 默认以get方式发送请求
	curl_setopt($curl,CURLOPT_URL,$url);

	//设置使 exec() 方法不直接输出结果，而是将结果作为返回值返回。
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

	//设置curl请求方式为post。
	curl_setopt($curl,CURLOPT_POSTFIELDS,$data);

	//执行连接请求 curl_exec() 方法默认会将请求回来的数据直接输出。
	$results = curl_exec($curl);

	return $results;

	//关闭curl连接会话
	curl_close($curl);	
}	



?>