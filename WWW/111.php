1.js 禁用js，或者先通过前端验证然后抓包修改后缀
2.对数据包MIME 修改数据包中的content-Type类型
3.ctf php45  AddType application/x-httpd-php .php .phtml .phps .php5 .pht
4.htaccess Sethandler application/x-httpd-php
5.大小写
6.空格绕过
7.点绕过
8.::$DATA 在php+windows的情况下：如果文件名+"::$DATA"会把::$DATA之后的数据当成文件流处理,不会检测后缀名.且保持"::$DATA"之前的文件名。利用windows特性，可在后缀名中加” ::$DATA”绕过：
9.点+空格+点
10.双写绕过
11.%00截断
12.0x00截断 0x00 表示的ascii的0，也能表示系统在对文件名的读取时，如果遇到0x00，就会认为读取结束。C++，C中会遇到这个问题
13.图片马进行绕过 copy 1.gif /b + test.php /a shell.gif
14.getimagesize()-判断图片类型 图片马进行绕过
15.exif_imagetype()-判断图片类型 图片马进行绕过
16.图片进行二次渲染，需要对图片格式十分清楚
17.条件竞争
18.条件竞争 在一个上传文件源代码里没有校验上传的文件，文件直接上传，上传成功后才进行判断：如果文件格式符合要求，则重命名，如果文件格式不符合要求，将文件删除
	由于服务器并发处理(同时)多个请求，假如a用户上传了木马文件，由于代码执行需要时间，在此过程中b用户访问了a用户上传的文件，会有以下三种情况：
	1.访问时间点在上传成功之前，没有此文件
	2.访问时间点在刚上传成功但还没有进行判断，该文件存在
	3.访问时间点在判断之后，文件被删除，没有此文件
19.00截断
20.php数组的特性