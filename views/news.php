<?php include_once 'common/header.php';?>
		<!-- detail -->
		<div class="section intoview-effect" data-effect="fadeup">
			<div class="detail cs-clear">
				<div class="arrows arrows2 detailprev" data-a="page-prev"></div>
				<div class=" detailcon">
					<h2><?php echo Yii::t("strings", "shang xia news")?></h2>
				</div>
				<div class="arrows arrows2 detailnext" data-a="page-next"></div>
			</div>
		</div>
		<!-- related products -->
		<div class="section intoview-effect" data-effect="fadeup">
			<div class="picinfor cs-clear">
				<div class="picinfortxt">
          <?php $news = loadFirstNews();?>
          <?php if ($news): ?>
            <h2><?php echo $news->title?></h2>
            <h3><?php echo date("Y M d", strtotime($news->date))?></h3>
            <div class="body">
              <?php echo $news->body?>
            </div>
          <?php endif;?>
					</div>
				<div class="picinforpic">
					<div class="slide">
						<div class="slidebox cs-clear">
              <?php foreach($news->news_slide_image as $image): ?>
                <img class="slideitem" src="<?php echo $image?>" width="100%" />
              <?php endforeach;?>
						</div>
						<ul class="slidetab">
              <?php foreach($news->news_slide_image as $index => $image): ?>
							<li class="<?php if ($index == 0) echo "on"?>"></li>
              <?php endforeach;?>
						</ul>
						<!-- 数量改变需要改变css，或者用js来调整slidebox的宽度和slidetab的位置 -->
					</div>
				</div>
				<!--  -->
			</div>
		</div>
		<!-- older news -->
		<div class="section intoview-effect" data-effect="fadeup">
			<div class="products">
				<div class="productstit othercraftit intoview-effect" data-effect="fadeup">
					<h2>older news</h2>
				</div>
        <?php $newsList = loadNewsWithYearGroup(TRUE);?>
				<div class="productscom intoview-effect slide" data-effect="fadeup">
					<ul class="newsoldertime slidetab">
            <?php $years = array_keys($newsList);?>
            <?php foreach ($years as $index => $year): ?>
              <li class="<?php if($index == 0) echo "on"?>"><a href="#"><?php echo $year?></a></li>
            <?php endforeach;?>
					</ul>
					<!--  -->
					<ul class="slidebox">
            <?php foreach($newsList as $year => $newsYear): ?>
              <li class="productslist cs-clear slideitem">
                <?php foreach ($newsYear as $news): ?>
                  <div class="prolistitem newsitem">
                    <img src="<?php echo $news->thumbnail?>" width="100%" />
                    <p><?php echo $news->title?><br /><?php echo date("Y M d", strtotime($news->date))?></p>
                  </div>
                <?php endforeach;?>
              </li>
            <?php endforeach;?>
					</ul>
				</div>
				<!--  -->
				<div class="newsolderbtn intoview-effect" data-effect="fadeup">
					<a href="./news-detail.php" title="" class="transition-wrap"><span class="transition">View all news<br/><br/>View all news</span></a>
				</div>
			</div>
		</div>
		<!-- SHANG XIA EVENTS -->
		<div class="section">
			<div class="products">
				<div class="productstit intoview-effect" data-effect="fadeup">
					<h2>SHANG XIA EVENTS</h2>
				</div>
				<div class="productscom newsnvents">
					<!--  -->
					<img src="../SX/images/newsdemo3.jpg" class="intoview-effect" data-effect="fadeup" width="100%" alt="">
					<h3 class="intoview-effect" data-effect="fadeup">shang xia maison opening </h3>
					<h4  class="intoview-effect" data-effect="fadeup">2014 SEP 09</h4>
					<p  class="intoview-effect" data-effect="fadeup">This aurum, the SHANG XIA, maision will be opened on Hua Hai Road, Shanghai.<br />A new journey ....     <a class="more" href="#">Read more</a> </p>
					<a href="./news-detail.php" title="" class="btn transition-wrap"><span class="transition">View all events<br/><br/>View all events</span></a>
				</div>
			</div>
		</div>
		<!-- press -->
		<div class="section">
			<div class="products press">
				<div class="productstit intoview-effect" data-effect="fadeup">
					<h2>press</h2>
				</div>
				<div class="productscom js-horizontal-slide" data-num="3">
					<div class="collarrows collarrowsprev" data-a="collarrowsprev"></div>
					<!--  -->
					<div class="slide-con">
						<div class="productslist cs-clear slide-con-inner">
							<div class="prolistitem pressitem intoview-effect" data-effect="fadeup">
								<img src="../SX/images/newsdemo4.jpg" width="100%" />
								<p>life week<br />jan  2014</p>
							</div>
							<div class="prolistitem pressitem intoview-effect" data-effect="fadeup">
								<img src="../SX/images/newsdemo4.jpg" width="100%" />
								<p>life week<br />jan  2014</p>
							</div>
							<div class="prolistitem pressitem intoview-effect" data-effect="fadeup">
								<img src="../SX/images/newsdemo4.jpg" width="100%" />
								<p>life week<br />jan  2014</p>
							</div>
							<div class="prolistitem pressitem intoview-effect" data-effect="fadeup">
								<img src="../SX/images/newsdemo4.jpg" width="100%" />
								<p>life week<br />jan  2014</p>
							</div>
							<div class="prolistitem pressitem intoview-effect" data-effect="fadeup">
								<img src="../SX/images/newsdemo4.jpg" width="100%" />
								<p>life week<br />jan  2014</p>
							</div>
							<div class="prolistitem pressitem intoview-effect" data-effect="fadeup">
								<img src="../SX/images/newsdemo4.jpg" width="100%" />
								<p>life week<br />jan  2014</p>
							</div>
							<div class="prolistitem pressitem intoview-effect" data-effect="fadeup">
								<img src="../SX/images/newsdemo4.jpg" width="100%" />
								<p>life week<br />jan  2014</p>
							</div>
							<div class="prolistitem pressitem intoview-effect" data-effect="fadeup">
								<img src="../SX/images/newsdemo4.jpg" width="100%" />
								<p>life week<br />jan  2014</p>
							</div>
						</div>
					</div>
					<div class="collarrows collarrowsnext" data-a="collarrowsnext"></div>
					<!--  -->
					<div class="newsolderbtn">
						<a href="./news-press.php" title="" class="transition-wrap"><span class="transition">View all  press articles<br/><br/>View all  press articles</span></a>
					</div>
				</div>
			</div>
		</div>
		<!--  -->
<?php include_once 'common/footer.php';?>
