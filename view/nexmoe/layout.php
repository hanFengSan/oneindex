<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
	<title><?php e($title.' - '.config('site_name'));?></title>
	<link rel="stylesheet" href="//cdnjs.loli.net/ajax/libs/mdui/0.4.1/css/mdui.css">
	<style>
		body{background-color:#fff;padding-bottom:60px;background-position:center bottom;background-repeat:no-repeat;background-attachment:fixed}.nexmoe-item{margin:20px -8px 0!important;padding:15px!important;border-radius:5px;background-color:#fff;-webkit-box-shadow:0 .5em 3em rgba(161,177,204,.4);box-shadow:0 .5em 3em rgba(161,177,204,.4);background-color:#fff}.mdui-img-fluid,.mdui-video-fluid{}.mdui-list{padding:0}.mdui-list-item{margin:0!important;border-radius:5px;padding:0 10px 0 5px!important;border:1px solid #eee;margin-bottom:10px!important}.mdui-list-item:last-child{margin-bottom:0!important}.mdui-list-item:first-child{border:none}.mdui-toolbar{width:auto;margin-top:60px!important}.mdui-appbar .mdui-toolbar{height:56px;font-size:16px}.mdui-toolbar>*{padding:0 6px;margin:0 2px;opacity:.5}.mdui-toolbar>.mdui-typo-headline{padding:0 16px 0 0}.mdui-toolbar>i{padding:0}.mdui-toolbar>a:hover,a.mdui-typo-headline,a.active{opacity:1}.mdui-container{max-width:980px}.mdui-list>.th{background-color:initial}.mdui-list-item>a{width:100%;line-height:48px}.mdui-toolbar>a{padding:0 16px;line-height:30px;border-radius:30px;border:1px solid #eee}.mdui-toolbar>a:last-child{opacity:1;background-color:#1e89f2;color:#ffff}@media screen and (max-width:980px){.mdui-list-item .mdui-text-right{display:none}.mdui-container{width:100%!important;margin:0}.mdui-toolbar>*{display:none}.mdui-toolbar>a:last-child,.mdui-toolbar>.mdui-typo-headline,.mdui-toolbar>i:first-child{display:block}}
	</style>
	<script src="//cdnjs.loli.net/ajax/libs/mdui/0.4.1/js/mdui.min.js"></script>
</head>
<body class="mdui-theme-primary-blue-grey mdui-theme-accent-blue">
	<div class="mdui-container">
	    <div class="mdui-container-fluid">
	    <div class="mdui-toolbar nexmoe-item">
			<a href="/"><?php e(config('site_name'));?></a>
			<?php foreach((array)$navs as $n=>$l):?>
			<i class="mdui-icon material-icons mdui-icon-dark" style="margin:0;">chevron_right</i>
			<a href="<?php e($l);?>"><?php e($n);?></a>
			<?php endforeach;?>
			<!--<a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">refresh</i></a>-->
		</div>
		</div>
    	<?php view::section('content');?>
    </div>
    <script>
      window.copyToClipboard = (function initClipboardText() {
        var textarea = document.createElement('textarea');
        textarea.style.cssText = 'position: absolute; left: -99999em';
        textarea.setAttribute('readonly', true);
        document.body.appendChild(textarea);
        return function setClipboardText(text) {
          textarea.value = text;
          var selected = document.getSelection().rangeCount > 0 ?
            document.getSelection().getRangeAt(0) : false;
          if (navigator.userAgent.match(/ipad|ipod|iphone/i)) {
            var editable = textarea.contentEditable;
            textarea.contentEditable = true;
            var range = document.createRange();
            range.selectNodeContents(textarea);
            var sel = window.getSelection();
            sel.removeAllRanges();
            sel.addRange(range);
            textarea.setSelectionRange(0, 999999);
            textarea.contentEditable = editable;
          } else {
            textarea.select();
          }
          try {
            var result = document.execCommand('copy');
            if (selected) {
              document.getSelection().removeAllRanges();
              document.getSelection().addRange(selected);
            }
            return result;
          } catch (err) {
            return false;
          }
        };
      })();
  </script>
</body>
</html>
