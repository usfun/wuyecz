<!DOCTYPE html> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="title" content="播放器">
<meta name="apple-touch-fullscreen" content="YES">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">
<title>播放器</title>
<style>
	body{
		margin: 0;
}
@media (max-width: 440px){
	.web_size{
		height: 200px !important;
	}
}
</style>
</head>
<body>
<div style="width:100%;height:100vh" class="web_size">									
<video id='myVideo'  class="video-js" ></video>
<link rel="stylesheet" type="text/css" href="video.min.css?v=3">
<script type="text/javascript" src="video.min.js?v=1" charset="utf-8" > </script>
	<script type="text/javascript" src="video-conrtib-ads.js?v=1" charset="utf-8" > </script>
	<script type="text/javascript" src="myVideo.js?v=6" charset="utf-8" > </script>
	<script type="text/javascript">
        var vPath = '<?php echo $_GET['url'];?>';
    	var logo = '';
    	var myVideo=initVideo({
            id:'myVideo',
            url:vPath,
    		ad:{
              pre:{
                  url:'',
                  link:'',
              },
    	  	},
          	logo:{
                url:'logo.png?v=1.0',
                width:'100px'
            },
    	});
	</script>
</div>
</body>
</html>
