<div class="container-fluid" style="background-color:#2F3541;margin:0px auto;padding-top:10px;overflow:visible;border-bottom:#eeeeee solid 1px;height: 72px;">
	<div class="row-fluid">
		<div class="main">
			<div class="col-xs-4">
				<h2 style="font-size:24px;color:#FFFFFF;">模拟考试系统</h2>
			</div>
			<div class="col-xs-6" style="padding-top:16px;" id="topnav2">
                <ul class="list-unstyled list-inline">
                    <!--<li class="menu col-xs-1" style="width:20%;"><a href="index.php?course">在线课程</a></li>-->
                    <li class="menu col-xs-1" style="width:20%;"><a href="index.php?exam">答题考试</a></li>
                </ul>
			</div>
			<div class="col-xs-2" style="padding-top:10px;">
				<ul class="list-unstyled list-inline">
                    <?php if($this->tpl_var['_user']['userid']){ ?>
					<li>
						<div class="btn-group">
							<button type="button" class="btn btn-info"><em class="glyphicon glyphicon-user"></em> <?php echo $this->tpl_var['_user']['username']; ?></button>
							<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="index.php?user-center"><em class="glyphicon glyphicon-user"></em> 用户中心</a></li>
                                <?php if($this->tpl_var['_user']['teacher_subjects']){ ?><li><a href="index.php?exam-teach"><em class="glyphicon glyphicon-book"></em> 教师管理</a></li><?php } ?>
                                <?php if($this->tpl_var['_user']['groupid'] == 1){ ?><li><a href="index.php?core-master"><em class="glyphicon glyphicon-dashboard"></em> 后台管理</a></li><?php } ?>
								<li><a class="ajax" href="index.php?user-app-logout"><em class="glyphicon glyphicon-log-out"></em> 退出</a></li>
							</ul>
						</div>
					</li>
                    <?php } else { ?>
					<li><a href="javascript:;" onclick="javascript:$.loginbox.show();" class="btn btn-default"> 登 录 </a></li>
					<li><a href="index.php?user-app-register" class="btn btn-default"> 注 册 </a></li>
                    <?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>