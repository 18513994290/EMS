<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="container-fluid" style="padding: 0px;background-color: #FFFFFF;">
    <div class="row-fluid">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php $cid = 0;
 foreach($this->tpl_var['contents'][2]['data'] as $key => $content){ 
 $cid++; ?>
                <div class="swiper-slide" style="background: linear-gradient(to right bottom, rgb(29, 114, 193), rgb(27, 228, 225)); z-index: 0; ">
                    <div class="main" style="margin: auto;width:1100px;">
                        <a href="index.php?content-phone-content&contentid=<?php echo $content['contentid']; ?>" class="ajax" data-page="rollpage" data-target="rollpage">
                            <img src="<?php echo $content['contentthumb']; ?>" style="width: 100%;">
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<div class="container-fluid" style="padding-bottom: 25px;background-color: #FFFFFF;">
	<div class="row-fluid">
		<div class="main">
			<h3 class="col-xs-12" style="margin-top:40px;font-size: 24px;line-height: 36px;margin-bottom: 10px;">在线课程</h3>
			<div style="clear: both">
                <?php $cid = 0;
 foreach($this->tpl_var['courses']['data'] as $key => $course){ 
 $cid++; ?>
                <div class="col-xs-2" style="padding: 10px;">
					<div style="background-color: #FFFFFF;overflow: hidden">
                        <a href="index.php?course-app-course&csid=<?php echo $course['csid']; ?>">
                            <img src="<?php echo $course['csthumb']; ?>" style="max-width: 100%;"/>
                            <h4 style="font-size: 16px;line-height: 21px;text-align: center"><?php echo $course['cstitle']; ?></h4>
                            <p style="width:80%;margin:auto;height:44px;margin-bottom: 25px;line-height: 21px;text-align: center">
                                人工智能与数据科学领域培训专家
                            </p>
                        </a>
                    </div>
				</div>
                <?php } ?>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid"style="padding-bottom: 25px;">
	<div class="row-fluid">
		<div class="main">
            <h3 class="col-xs-12" style="margin-top:40px;font-size: 24px;line-height: 36px;margin-bottom: 10px;">最新考试</h3>
            <div style="clear: both">
                <?php $bid = 0;
 foreach($this->tpl_var['basics'] as $key => $basic){ 
 $bid++; ?>
                <div class="col-xs-2" style="padding: 10px;">
                    <div style="background-color: #FFFFFF;overflow: hidden">
                        <a href="index.php?exam-app-index-setCurrentBasic&basicid=<?php echo $basic['basicid']; ?>" class="ajax">
                            <img src="<?php echo $basic['basicthumb']; ?>" style="width: 100%;"/>
                            <h4 style="font-size: 16px;line-height: 21px;text-align: center"><?php echo $basic['basic']; ?></h4>
                            <p style="width:80%;margin:auto;height:44px;margin-bottom: 25px;line-height: 21px;text-align: center">
                                人工智能与数据科学领域培训专家
                            </p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
	</div>
</div>
<div class="container-fluid" style="padding-bottom: 25px;background-color: #FFFFFF;">
    <div class="row-fluid">
        <div class="main">
            <div class="col-xs-4" style="padding:0px;">
                <div style="overflow: hidden">
                    <h3 class="col-xs-12" style="margin-top:40px;font-size: 24px;line-height: 36px;margin-bottom: 10px;">
                        <a href="index.php?content-app-category&catid=1"><?php echo $this->tpl_var['rcats'][1]['catname']; ?></a>
                    </h3>
                    <ul class="col-xs-12 list-unstyled" style="margin-top: 10px;">
                        <?php $cid = 0;
 foreach($this->tpl_var['contents'][1]['data'] as $key => $content){ 
 $cid++; ?>
                        <li style="font-size: 16px;line-height: 32px;"><a href="index.php?content-app-content&contentid=<?php echo $content['contentid']; ?>" title="<?php echo $content['contenttitle']; ?>"><?php echo $content['contenttitle']; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-xs-4" style="padding:0px;">
                <div style="overflow: hidden">
                    <h3 class="col-xs-12" style="margin-top:40px;font-size: 24px;line-height: 36px;margin-bottom: 10px;">
                        <a href="index.php?content-app-category&catid=3"><?php echo $this->tpl_var['rcats'][3]['catname']; ?></a>
                    </h3>
                    <ul class="col-xs-12 list-unstyled" style="margin-top: 10px;">
                        <?php $cid = 0;
 foreach($this->tpl_var['contents'][3]['data'] as $key => $content){ 
 $cid++; ?>
                        <li style="font-size: 16px;line-height: 32px;"><a href="index.php?content-app-content&contentid=<?php echo $content['contentid']; ?>" title="<?php echo $content['contenttitle']; ?>"><?php echo $content['contenttitle']; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-xs-4" style="padding:0px;">
                <div style="overflow: hidden">
                    <h3 class="col-xs-12" style="margin-top:40px;font-size: 24px;line-height: 36px;margin-bottom: 10px;">
                        <a href="index.php?content-app-category&catid=4"><?php echo $this->tpl_var['rcats'][4]['catname']; ?></a>
                    </h3>
                    <ul class="col-xs-12 list-unstyled" style="margin-top: 10px;">
                        <?php $cid = 0;
 foreach($this->tpl_var['contents'][4]['data'] as $key => $content){ 
 $cid++; ?>
                        <li style="font-size: 16px;line-height: 32px;"><a href="index.php?content-app-content&contentid=<?php echo $content['contentid']; ?>" title="<?php echo $content['contenttitle']; ?>"><?php echo $content['contenttitle']; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid hide">
	<div class="row-fluid">
		<div class="main box itembox">
			<h4 class="title">视频课程</h4>
			<div class="col-xs-3" style="padding:0px;">
				<a href="index.php?course-app" class="">
					<img src="app/core/styles/img/item2.jpg" alt="" width="287">
				</a>
			</div>
			<div class="col-xs-9" style="padding-left:0px;">
				<?php $cid = 0;
 foreach($this->tpl_var['courses']['data'] as $key => $course){ 
 $cid++; ?>
				<div class="col-xs-3">
					<a href="index.php?course-app-course&csid=<?php echo $course['csid']; ?>" class="thumbnail">
						<img src="<?php echo $course['csthumb']; ?>" alt="" width="180">
					</a>
					<h5 class="text-center"><?php echo $course['cstitle']; ?></h5>
				</div>
				<?php if($hid == 4){ ?>
				<div class="col-xs-12"><hr /></div>
				<?php } ?>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid hide">
	<div class="row-fluid">
		<div class="main"><img src="app/core/styles/img/ad.jpg"/></div>
	</div>
</div>
<div class="container-fluid hide">
	<div class="row-fluid">
		<div class="main box itembox">
			<h4 class="title">热门考场</h4>
			<div class="col-xs-3" style="padding:0px;">
				<a href="index.php?exam-app" class="">
					<img src="app/core/styles/img/item3.jpg" alt="" width="287">
				</a>
			</div>
			<div class="col-xs-9" style="padding-left:0px;">
				<?php $bid = 0;
 foreach($this->tpl_var['basics']['basic'] as $key => $basic){ 
 $bid++; ?>
				<div class="col-xs-3">
					<a href="index.php?exam-app-index-setCurrentBasic&basicid=<?php echo $basic['basicid']; ?>" class="thumbnail ajax">
						<img src="<?php echo $basic['basicthumb']; ?>" alt="" width="180">
					</a>
					<h5 class="text-center"><?php echo $basic['basic']; ?></h5>
				</div>
				<?php if($hid == 4){ ?>
				<div class="col-xs-12"><hr /></div>
				<?php } ?>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid hide">
	<div class="row-fluid">
		<div class="main"><img src="app/core/styles/img/ad2.png"/></div>
	</div>
</div>
<div class="container-fluid hide">
	<div class="row-fluid">
		<div class="main">
			<div class="col-xs-4 box itembox" style="min-height:320px;">
				<h4 class="title"><a href="index.php?content-app-category&catid=1"><?php echo $this->tpl_var['rcats'][1]['catname']; ?></a></h4>
				<ul class="list-unstyled">
					<?php $cid = 0;
 foreach($this->tpl_var['contents'][1]['data'] as $key => $content){ 
 $cid++; ?>
					<li><a href="index.php?content-app-content&contentid=<?php echo $content['contentid']; ?>" title="<?php echo $content['contenttitle']; ?>"><?php echo $content['contenttitle']; ?></a></li>
					<?php } ?>
				</ul>
			</div>
			<div class="col-xs-4 box itembox split" style="min-height:320px;">
				<h4 class="title"><a href="index.php?content-app-category&catid=3"><?php echo $this->tpl_var['rcats'][3]['catname']; ?></a></h4>
				<ul class="list-unstyled">
					<?php $cid = 0;
 foreach($this->tpl_var['contents'][3]['data'] as $key => $content){ 
 $cid++; ?>
					<li><a href="index.php?content-app-content&contentid=<?php echo $content['contentid']; ?>" title="<?php echo $content['contenttitle']; ?>"><?php echo $content['contenttitle']; ?></a></li>
					<?php } ?>
				</ul>
			</div>
			<div class="col-xs-4 box itembox" style="min-height:320px;">
				<h4 class="title"><a href="index.php?content-app-category&catid=4"><?php echo $this->tpl_var['rcats'][4]['catname']; ?></a></h4>
				<ul class="list-unstyled">
					<?php $cid = 0;
 foreach($this->tpl_var['contents'][4]['data'] as $key => $content){ 
 $cid++; ?>
					<li><a href="index.php?content-app-content&contentid=<?php echo $content['contentid']; ?>" title="<?php echo $content['contenttitle']; ?>"><?php echo $content['contenttitle']; ?></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php $this->_compileInclude('footer'); ?>
<script>
    $(function(){
        var mySwiper = new Swiper('.swiper-container',{
            "pagination":".swiper-pagination",
            "loop":false,
            "autoplay": 0,
            "observer":true,
            "observeParents":true
        });
    });
</script>
</body>
</html>