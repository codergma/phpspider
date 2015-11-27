<?php
	$cookie = file_get_contents('cookie.txt');
	$url = 'http://www.zhihu.com/people/codergma/about'; //此处mora-hu代表用户ID
    $ch = curl_init($url); //初始化会话
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);  //设置请求COOKIE
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.80 Safari/537.36');

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  //将curl_exec()获取的信息以文件流的形式返回，而不是直接输出。
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  
    var_dump(curl_getinfo($ch));
    $result = curl_exec($ch);
    curl_close($ch);
    file_put_contents('/home/liubin/Desktop/codergma.html', $result) ;  //抓取的结果