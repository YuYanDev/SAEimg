<?php
include 'config.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>蔓舞寻樱的图床</title>
</head>
<style>
body {
    font-family:"华文细黑";
}
</style>
<body>
<div>
  <h3>上传图片</h3>
  <form enctype="multipart/form-data" method="post">
  <input name="file" type="file"/>
  <p>
  <input type="submit" name="upload" value="上传"/>
  </form>
  <p>
    <?php
if(isset($_POST['upload'])){
  if(strstr($_FILES['file']['name'],'.jpg')){
      $stor = new SaeStorage();
    $name = rand(10000,50000).'_'.date('YmdHis');
      $stor->upload($storage,$name.'.jpg',$_FILES['file']['tmp_name']);
    
    echo '<a href="http://你的应用名称-你的storage名称.stor.sinaapp.com/'.$name.'.jpg" target="_blank">预览图片</a>';
  }else{
    echo '<script>alert("不符合上传要求！")</script>';
  }
}
?>
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div>Design By <a href="https://alleysakura.com">蔓舞寻樱  </a>| 由<a href="http://sae.sina.com.cn">SAE</a>驱动 | 首次使用点此查看<a href="help/help.html">使用说明</a></div>
</body>
</html>