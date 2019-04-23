<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="main">
			<div class="col-xs-2" style="padding-top:10px;margin-bottom:0px;">
				<?php $this->_compileInclude('menu'); ?>
			</div>
			<div class="col-xs-10" id="datacontent">
				<div class="box itembox" style="margin-bottom:0px;border-bottom:1px solid #CCCCCC;">
					<div class="col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php">首页</a></li>
							<li class="active">个人中心</li>
						</ol>
					</div>
				</div>
				<div class="box itembox" style="padding-top:10px;">
					<h4 class="title">个人中心</h4>
					<table width="100%">
						<tr>
							<td width="30%">
								<div class="thumbnail" style="width:80%;">
									<img style="max-width:210px;" alt="300x200" src="<?php if($this->tpl_var['_user']['photo']){ ?><?php echo $this->tpl_var['_user']['photo']; ?><?php } else { ?>app/exam/styles/image/paper.png<?php } ?>" />
								</div>
							</td>
							<td width="35%" style="padding:10px;">
								<h3><?php echo $this->tpl_var['_user']['username']; ?></h3>
								<p>&nbsp;</p>
								<p>
							</td>
							<td style="padding:10px;">
								<p>用户组：<?php echo $this->tpl_var['groups'][$this->tpl_var['_user']['usergroupid']]['groupname']; ?></p>
								<!--<p>真实姓名：<?php echo $this->tpl_var['_user']['usertruename']; ?></p>-->
								<p>&nbsp;</p>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->_compileInclude('footer'); ?>
</body>
</html>