<?php if(!$this->tpl_var['userhash']){ ?>
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
<?php } ?>
				<div class="box itembox" style="margin-bottom:0px;border-bottom:1px solid #CCCCCC;">
					<div class="col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master"><?php echo $this->tpl_var['apps'][$this->tpl_var['_app']]['appname']; ?></a></li>
							<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-basic">考场管理</a></li>
							<li class="active">修改考场</li>
						</ol>
					</div>
				</div>
				<div class="box itembox" style="padding-top:10px;margin-bottom:0px;">
					<h4 class="title" style="padding:10px;">
						修改考场
						<a class="btn btn-primary pull-right" href="index.php?exam-master-basic&page=<?php echo $this->tpl_var['page']; ?><?php echo $this->tpl_var['u']; ?>">考场管理</a>
					</h4>
		        	<form action="index.php?exam-master-basic-modifybasic" method="post" class="form-horizontal">
						<fieldset>
							<div class="form-group">
								<label for="basic" class="control-label col-sm-2">考场名称</label>
								<div class="col-sm-4">
									<input class="form-control" id="basic" name="args[basic]" type="text" value="<?php echo $this->tpl_var['basic']['basic']; ?>" needle="needle" msg="您必须输入考场名称" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2">考场状态</label>
								<div class="col-sm-9">
									<label class="radio-inline">
										<input name="args[basicclosed]" type="radio" value="0" <?php if(!$this->tpl_var['basic']['basicclosed']){ ?>checked<?php } ?>/>开启
									</label>
									<label class="radio-inline">
										<input name="args[basicclosed]" type="radio" value="1" <?php if($this->tpl_var['basic']['basicclosed']){ ?>checked<?php } ?>/>关闭
									</label>
								</div>
							</div>
							<div class="form-group">
								<label for="basicthumb" class="control-label col-sm-2">考场缩略图</label>
								<div class="col-sm-9">
									<script type="text/template" id="pe-template-basicthumb">
							    		<div class="qq-uploader-selector" style="width:30%" qq-drop-area-text="可将图片拖拽至此处上传" style="clear:both;">
							            	<div class="qq-upload-button-selector" style="clear:both;">
							                	<ul class="qq-upload-list-selector list-unstyled" aria-live="polite" aria-relevant="additions removals" style="clear:both;">
									                <li class="text-center">
									                    <div class="thumbnail">
															<img class="qq-thumbnail-selector" alt="点击上传新图片">
															<input type="hidden" class="qq-edit-filename-selector" name="args[basicthumb]" tabindex="0">
														</div>
									                </li>
									            </ul>
									            <ul class="qq-upload-list-selector list-unstyled" aria-live="polite" aria-relevant="additions removals" style="clear:both;">
										            <li class="text-center">
										                <div class="thumbnail">
															<img class="qq-thumbnail-selector" src="<?php echo $this->tpl_var['basic']['basicthumb']; ?>" alt="点击上传新图片">
															<input type="hidden" class="qq-edit-filename-selector" name="args[basicthumb]" tabindex="0" value="<?php echo $this->tpl_var['basic']['basicthumb']; ?>">
							                			</div>
										            </li>
										        </ul>
							                </div>
							            </div>
							        </script>
							        <div class="fineuploader" attr-type="thumb" attr-template="pe-template-basicthumb"></div>
								</div>
							</div>

							<div class="form-group">
								<label for="basicsubjectid" class="control-label col-sm-2">考试科目</label>
								<div class="col-sm-4">
									<select class="form-control" id="basicsubjectid" name="args[basicsubjectid]" needle="needle" msg="您必须选择考试科目">
						        		<option value="">选择科目</option>
								  		<?php $sid = 0;
 foreach($this->tpl_var['subjects'] as $key => $subject){ 
 $sid++; ?>
								  		<option value="<?php echo $subject['subjectid']; ?>"<?php if($subject['subjectid'] == $this->tpl_var['basic']['basicsubjectid']){ ?> selected<?php } ?>><?php echo $subject['subject']; ?></option>
								  		<?php } ?>
							  		</select>
								</div>
							</div>


							<div class="form-group">
								<label for="basicprice" class="control-label col-sm-2">考场简介</label>
								<div class="col-sm-9">
									<textarea class="form-control" rows="4" name="args[basicdescribe]" id="basicdescribe"><?php echo $this->tpl_var['basic']['basicdescribe']; ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="basicprice" class="control-label col-sm-2"></label>
								<div class="col-sm-9">
									<button class="btn btn-primary" type="submit">提交</button>
									<input type="hidden" name="basicid" value="<?php echo $this->tpl_var['basic']['basicid']; ?>"/>
									<input type="hidden" name="page" value="<?php echo $this->tpl_var['page']; ?>"/>
									<input type="hidden" name="modifybasic" value="1"/>
									<?php $aid = 0;
 foreach($this->tpl_var['search'] as $key => $arg){ 
 $aid++; ?>
									<input type="hidden" name="search[<?php echo $key; ?>]" value="<?php echo $arg; ?>"/>
									<?php } ?>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
<?php if(!$this->tpl_var['userhash']){ ?>
		</div>
	</div>
</div>
<?php $this->_compileInclude('footer'); ?>
</body>
</html>
<?php } ?>