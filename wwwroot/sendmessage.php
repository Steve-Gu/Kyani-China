
<?php
$fileName = time();
$fp = fopen('message/' . $fileName . '.txt', 'w');

fwrite($fp, '姓名:' . $_POST['leave_name']);
fwrite($fp, ' | 电话:' . $_POST['leave_tel']);
fwrite($fp, ' | 电子邮件:' . $_POST['leave_email']);
fwrite($fp, ' | 时间:' . date('Y-m-d H:i:s'));
fwrite($fp, ' | 内容:' . $_POST['leave_text']);
fclose($fp);

// the content of 'data.txt' is now 123 and not 23!
?>

亲爱的<?php echo $_POST['leave_name']?>,我们会尽快处理您的留言！

 