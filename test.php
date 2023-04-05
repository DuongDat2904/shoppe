<?php 
$html = 'hình ảnh <img border="0" src="https://itseovn.com/styles/default/xenforo/logo.png" alt="Image" width="100" height="100"/> nội dung bài viết về lấy gì đó';
preg_match('/(src=["\'](.*?)["\'])/', $html, $match);  //Tìm kiếm thẻ src của chuỗi truyền vào
$split = preg_split('/["\']/', $match[0]); // split chuỗi này để lấy hình ảnh cho vào mảng
$src = $split[1]; //lấy nó ra thôi. Nếu nhiều hình bạn dùng hàm for hoặc foreach để lấy nhé.
echo $src; 

?>