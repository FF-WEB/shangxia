<?php 

if (isset($_GET["id"])) {
  require_once 'common/inc.php';
  $product = ProductContentAR::model()->findByPk($_GET["id"]);
  if (!$product || $product->type != ProductContentAR::model()->type) {
    exit(header("Location: ./index.php"));
  }
}
else {
  exit(header("Location: ./index.php"));
}

?>
<?php include_once 'common/header.php';?>
		<!--  -->
		<!-- newscrumbs -->
		<div class="newscrumbs">
      <p><?php echo Yii::t("strings", "collections")?>&nbsp;&nbsp;<?php echo loadCollectionFromProduct($product)->title?>&nbsp;&nbsp;<?php echo $product->title?> </p>
		</div>
		<!-- detail -->
		<div class="section ">
			<div class="detail coll_product cs-clear">
				<div class="arrows detailprev" data-a="page-prev"></div>
				<div class=" detailcon">
					<h2><?php echo $product->title?></h2>
          <p><?php echo $product->body?></p>
				</div>
				<div class="arrows detailnext" data-a="page-next"></div>
			</div>
		</div>
		<!--  -->
		<div class="coll_iconbg"></div>
		<!-- video -->
		<div class="video">      
      <img src="<?php echo makeThumbnail(array_shift($product->product_slide_image), array(1596,558))?>" width="100%" />
      <?php foreach ($product->product_slide_image as $image): ?>
        
      <?php endforeach;?>
    </div>
			<!-- barbg -->
		<div class="barbg"></div>
		
		<!-- collpiclist -->
		<div class="section">
			<div class="knowhow">
				<div class="knowhowtit coll_video">
					<h2>ZITAN WOOD CRAFTMANSHIP</h2>
				</div>
				<div class="coll_videocom ">
					<p>The Da Tian Di collection is based on traditional Ming furniture construction principles, <br />where each piece is deftly hand crafted by a master craftman</p>
					<div class="coll_videobox" data-video-render="../SX/video/small"><img src="../SX/images/coll_videodemo.jpg" width="100%" /></div>
				</div>
			</div>
		</div>
		<!-- collpiclist -->
	<div class="collpiclist cs-clear" style="position:relative">
		<div class="collarrows collarrowsprev"></div>
		<!--  -->
		<div class="section">
			<div class="products ">
				<div class="productstit ">
					<h2><?php echo Yii::t("strings", "similar products")?></h2>
				</div>	
				<!--  -->
				<div class="">
					<ul class="piclist cs-clear">
            <?php foreach (loadSimilarProducts($product) as $p): ?>
              <li class="piclistitem collpicitem">
                <a href="./product-detail.php?id=<?php echo $p->cid?>"><img src="<?php echo makeThumbnail($p->thumbnail, array(1000, 950))?>" width="100%" />
                <p><span class="collicon"><?php echo $p->title?></span></p></a>
              </li>
            <?php endforeach;?>
					</ul>
				</div>
			</div>
		</div>
		<!--  -->
		<div class="collarrows collarrowsnext"></div>
	</div>

<?php include_once 'common/footer.php';?>
