<?php /* Smarty version Smarty-3.1.14, created on 2014-01-21 12:50:07
         compiled from "application\views\portal\hasilSeleksi.html" */ ?>
<?php /*%%SmartyHeaderCode:186552cecdb9164420-73994689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7b4e2cba61dc1b10b3155e10544abd2d5fd2acb' => 
    array (
      0 => 'application\\views\\portal\\hasilSeleksi.html',
      1 => 1390283327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186552cecdb9164420-73994689',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cecdb91b3fe4_55159798',
  'variables' => 
  array (
    'hasil' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cecdb91b3fe4_55159798')) {function content_52cecdb91b3fe4_55159798($_smarty_tpl) {?>			<div class="promo-page">
				<!-- BEGIN PAGE CONTENT-->
				<div class="block-carousel">
					<div id="promo_carousel" class="carousel slide">
					<?php if ($_smarty_tpl->tpl_vars['hasil']->value->lulusTidak=='1'){?>
						<div class="container">
							<div class="carousel-inner">
								<div class="active item">
									<div class="row">
										<div class="col-md-7 margin-bottom-20 margin-top-20 animated rotateInUpRight">
											<h1>Welcome to Paramadina..</h1>
											<p>Selamat <b><?php echo $_smarty_tpl->tpl_vars['hasil']->value->student;?>
</b>! Anda telah Lulus Seleksi UJian Masuk Universitas Paramadina</p>
											<p>Pada Program Studi <b><?php echo $_smarty_tpl->tpl_vars['hasil']->value->progdi;?>
</b> dengan mendapat Peringkat -</p>
											<p>Silahkan lakukan pendaftaran ulang untuk tahap masuk berikutnya.</p>
											<br>
											<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/daftarUlang" class="btn red btn-lg m-icon-big">
											Daftar Ulang <i class="m-icon-big-swapright m-icon-white"></i>                                
											</a>
										</div>
										<div class="col-md-5 animated rotateInDownLeft">
											<a href="index.html"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/man-winner.png" alt="" class="img-responsive"></a>
										</div>
									</div>
								</div>
							</div><!-- 
							<a class="carousel-control left" href="#promo_carousel" data-slide="prev">
							<i class="m-icon-big-swapleft"></i>
							</a>
							<a class="carousel-control right" href="#promo_carousel" data-slide="next">
							<i class="m-icon-big-swapright"></i>
							</a> -->
							<!-- Indicators --><!-- 
							<ol class="carousel-indicators">
								<li data-target="#promo_carousel" data-slide-to="0" class="active"></li>
								<li data-target="#promo_carousel" data-slide-to="1"></li>
							</ol> -->
						</div>
					<?php }else{ ?>
						<div class="container">
							<div class="carousel-inner">
								<div class="active item">
									<div class="row">
										<div class="col-md-5 animated rotateInDownLeft">
											<a href="index.html"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/woman.png" alt="" class="img-responsive"></a>
										</div>
										<div class="col-md-7 margin-bottom-20 margin-top-20 animated rotateInUpRight">
											<h1>Mohon Maaf..</h1>
											<p>Anda belum berhasil pada ujian seleksi masuk Paramadina kali ini,</p>
											<p>Silahkan mencoba kembali pada kesempatan berikutnya.</p>
											<br>
											<a href='#' class="go btn blue btn-lg m-icon-big">
											www.paramadina.ac.id <i class="m-icon-big-swapright m-icon-white"></i>                                
											</a>
										</div>
									</div>
								</div>
							</div><!-- 
							<a class="carousel-control left" href="#promo_carousel" data-slide="prev">
							<i class="m-icon-big-swapleft"></i>
							</a>
							<a class="carousel-control right" href="#promo_carousel" data-slide="next">
							<i class="m-icon-big-swapright"></i>
							</a> -->
							<!-- Indicators --><!-- 
							<ol class="carousel-indicators">
								<li data-target="#promo_carousel" data-slide-to="0" class="active"></li>
								<li data-target="#promo_carousel" data-slide-to="1"></li>
							</ol> -->
						</div>
					<?php }?>
					</div>
				</div>
				<div class="block-footer">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<h3>Stay Tuned</h3>
								<ul class="list-unstyled social-icons">
									<li><a href="#" data-original-title="blogger" class="blogger"></a></li>
									<li><a href="#" data-original-title="dropbox" class="dropbox"></a></li>
									<li><a href="#" data-original-title="facebook" class="facebook"></a></li>
									<li><a href="#" data-original-title="github" class="github"></a></li>
									<li><a href="#" data-original-title="Goole Plus" class="googleplus"></a></li>
									<li><a href="#" data-original-title="linkedin" class="linkedin"></a></li>
									<li><a href="#" data-original-title="pintrest" class="pintrest"></a></li>
									<li><a href="#" data-original-title="rss" class="rss"></a></li>
									<li><a href="#" data-original-title="skype" class="skype"></a></li>
									<li><a href="#" data-original-title="tumblr" class="tumblr"></a></li>
									<li><a href="#" data-original-title="twitter" class="twitter"></a></li>
									<li><a href="#" data-original-title="vimeo" class="vimeo"></a></li>
									<li><a href="#" data-original-title="wordpress" class="wordpress"></a></li>
									<li><a href="#" data-original-title="yahoo" class="yahoo"></a></li>
									<li><a href="#" data-original-title="youtube" class="youtube"></a></li>
									<li><a href="#" data-original-title="instagram" class="instagram"></a></li>
								</ul>
							</div>
							<div class="col-md-4">
								<!-- <h3>Subscribe</h3>
								<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam.</p>
								<form class="form-inline" action="#">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Email Address">
										<span class="input-group-btn">
										<button class="btn blue" type="button">GO!</button>
										</span>      
									</div>
								</form> -->
							</div>
							<div class="col-md-4">
								<!-- <h3>Photo Stream</h3>
								<ul class="list-unstyled blog-images">
									<li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/blog/1.jpg" alt=""></a></li>
									<li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/blog/2.jpg" alt=""></a></li>
									<li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/blog/3.jpg" alt=""></a></li>
									<li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/blog/4.jpg" alt=""></a></li>
									<li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/blog/5.jpg" alt=""></a></li>
									<li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/blog/6.jpg" alt=""></a></li>
									<li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/blog/8.jpg" alt=""></a></li>
									<li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/blog/10.jpg" alt=""></a></li>
									<li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/blog/11.jpg" alt=""></a></li>
									<li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/blog/1.jpg" alt=""></a></li>
									<li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/blog/2.jpg" alt=""></a></li>
									<li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/blog/7.jpg" alt=""></a></li>
								</ul> -->
							</div>
						</div>
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
<script>
$('.go').click(function (){
	window.location.href = 'http://www.paramadina.ac.id';
});
</script><?php }} ?>