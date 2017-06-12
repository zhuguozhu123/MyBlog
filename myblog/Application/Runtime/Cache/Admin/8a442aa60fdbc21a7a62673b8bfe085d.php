<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="en" />
	<meta name="description" content="[HERE PASTE YOUR DESCRIPTION]" />
	<meta name="author" content="Template:TemplatesDock " />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="/myblog/Public/css/main.css" />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="/myblog/Public/css/skin.css" />
	<script type="text/javascript" src="/myblog/Public/cufon-yui.js"></script>
	<script type="text/javascript">Cufon.replace('h1, h2, h3, h4, h5, h6', {hover:true});</script>
	<title>zgz博客后台</title>
</head>
<body>
<div class="main">
	<!-- HEADER -->
	<div id="header" class="box">

		<h1 id="logo">朱国柱 <span>BlogSystem</span></h1>

		<!-- NAVIGATION -->
		<ul id="nav">
			<li ><a href="<?php echo U('Admin/Index/logout');?>">退出</a></li>
		</ul>
		
	</div> <!-- /header -->
	
	<div id="section" class="box">

		<!-- CONTENT -->
		<div id="content">
			<div style="margin:50px 0px 50px 90px">
				<h2>类别管理</h2>
				<div id="form">
					<ul>
					<?php if(is_array($list)): foreach($list as $key=>$l): ?><li>
						    <label><h4>类别名称:<?php echo ($l["cat_name"]); ?></h4>
						    <a href="<?php echo U('Admin/Cat/editCat',array('cat_id'=>$l['cat_id']));?>">修改</a>
						    <div style="visibility:hidden;display:none">
			                <div id="dCat">
			                <?php echo U('Admin/Cat/delCat',array('cat_id'=>$l['cat_id']));?>
			                </div>
		                    </div>
						     <button onclick="delCat()">
						     删 除
						    </button>
						    </label>
						    <div style="width:100%;height:1px;background-color:gray;"></div>
						</li><?php endforeach; endif; ?>
					</ul>
					<ul>
					  <li>
					    总的类别数: <?php echo ($sum); ?>
					    <a href="<?php echo U('Admin/Cat/listCat',array('p'=>$page-1));?>">上一页</a>
					    <?php echo ($page); ?>
					     <a href="<?php echo U('Admin/Cat/listCat',array('p'=>$page+1));?>">下一页</a>
                        总页数：<?php echo ($pages); ?>
					   </li>
					</ul>
				</div>
			</div>
		</div> 

		<!-- SIDEBAR -->
		<div id="aside">
					
		</div> <!-- /aside -->

	</div> <!-- /section -->

</div> <!-- /main -->	
	
<!-- FOOTER -->
<div id="footer">
	<div class="main box">
		<p class="f-left">Copyright &copy;&nbsp;2017 朱国柱</p>
	</div> 

</div> <!-- /footer -->
<!--path-->
    <script type="text/javascript" src="/myblog/Public/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript">
		var delCat = function(){
		 if(confirm("确定删除?")){
			window.location.href = $('#dCat').html();
		 }else{
		     alter("error")
	 }
	   }
	</script>	
</body>
</html>