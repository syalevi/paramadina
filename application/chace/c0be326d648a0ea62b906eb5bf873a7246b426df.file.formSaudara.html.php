<?php /* Smarty version Smarty-3.1.14, created on 2014-02-28 11:08:21
         compiled from "application\views\portal\formSaudara.html" */ ?>
<?php /*%%SmartyHeaderCode:279552ca58656e1842-68841858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0be326d648a0ea62b906eb5bf873a7246b426df' => 
    array (
      0 => 'application\\views\\portal\\formSaudara.html',
      1 => 1393560489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279552ca58656e1842-68841858',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ca5865764930_52670179',
  'variables' => 
  array (
    'saudara' => 0,
    'row' => 0,
    'cmb' => 0,
    'kode' => 0,
    'sex' => 0,
    'prodi' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ca5865764930_52670179')) {function content_52ca5865764930_52670179($_smarty_tpl) {?>									<form action="#" class="formKeluarga form-horizontal" method="post">
										 <div class="form-body" style="background-color: #F7F7F7;">
											<h4 class="form-section" style="margin-bottom: 15px; margin-left:0px;margin-top: 12px;">Isi data saudara kandung Anda yang pernah/sedang berkuliah di Paramadina.
												<p><span style="color:red;font-size: 15px">* Jika ada, anda akan mendapatkan potongan uang masuk sebesar 20%</span></p>
												<a class="btn" id="minSau" style="float:right;color: red; margin-top: -55px;"><i class=" icon-minus"></i></a>
												<a class="btn" id="plusSau" style="float:right;color: black;display:none ;margin-top: -55px;"><i class=" icon-plus"></i></a> 
											</h4>
										  <div id="detSau">
											<div class="tblKeluarga tab-pane row" style="margin: 0 10px;">
												<!-- Table untuk menampilkan keluarga -->
												<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['saudara']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
												<div class="row portfolio-block" style="height: 105px;background-color: #FFF;">
													<div class="col-md-1" style="padding: 10px 0;">
													  <div class="portfolio-info">
														 <p></p>
														 <p></P>
														 <a href="#" class="btn bigicn-only" style="padding:0;" >
															<span><?php echo $_smarty_tpl->tpl_vars['row']->value->singProdi;?>
</span>
														 </a>
														   
													  </div>
												   </div>
												   <div class="col-md-3">
													  <div class="portfolio-info">
														 <div class="portfolio-text-info" style=";padding-left: 10px;">
															<h4><?php echo $_smarty_tpl->tpl_vars['row']->value->namaSaudara;?>
</h4>
															<p><?php echo $_smarty_tpl->tpl_vars['row']->value->gender;?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value->tanggalLahir;?>
</p>
															<p>Anak Ke-<?php echo $_smarty_tpl->tpl_vars['row']->value->nomor;?>
</p>
														 </div>
													  </div>
												   </div>
												   <div class="col-md-3">
													  <div class="portfolio-info">
														 <h4><?php echo $_smarty_tpl->tpl_vars['row']->value->prodi;?>
</h4>
														 <p>NIM : <?php echo $_smarty_tpl->tpl_vars['row']->value->nim;?>
</p>
														 <p>Ankatan : <?php echo $_smarty_tpl->tpl_vars['row']->value->angkatan;?>
, <?php if ($_smarty_tpl->tpl_vars['row']->value->lulus=='1'){?>Alumni<?php }else{ ?>Aktif<?php }?></p>
													   </div>
													</div>
													<div class="col-md-3">
													  <div class="portfolio-info">
														 <h4>Perusahaan</h4>
														 <p><?php echo $_smarty_tpl->tpl_vars['row']->value->kerja;?>
</p>
													  </div>
													</div>
												   <div class="col-md-2">
													   <div class="portfolio-info">
														 <p></p>
														 <p></P>
														 <a href="#" class="deleting" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kodeSaudara;?>
" data-toggle="modal"><span style="color:green;">DELETE</span></a>
													   </div>
												   </div>
												</div>
											<?php } ?>
											</div>
										<?php if ($_smarty_tpl->tpl_vars['cmb']->value->statusSaudara=='0'){?>
											<div class="modal-footer">
											 <button type="submit" class="tambah btn green"> Tambah <i class="icon-plus"></i></button>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Nama
													   </label>
													   <div class="col-md-9" >
															<input name="kode" value="<?php echo $_smarty_tpl->tpl_vars['kode']->value;?>
" hidden>
															<input type="text" class="form-control" name="namaSaudara" id="nama" required>											   
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Anak Ke-
													   </label>
													   <div class="col-md-9" >
															<input type="number" class="form-control" name="nomorKe" required>	
													   </div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Jenis Kelamin
													   </label>
													   <div class="col-md-9">
															<select  class="form-control" name="sexSaudara" required>
															 <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sex']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
															 <?php } ?>
															</select>	
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Tanggal Lahir
													   </label>
													   <div class="col-md-9">															
															<div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy-mm-dd">
																<input type="text" class="form-control" name="tglLahirSau" style="text-align:left">
														    </div>
													   </div>
													</div>
												</div>
											</div>	
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Program Studi
													   </label>
													   <div class="col-md-9">
															<select  class="form-control" name="pendSaudara" id="pendSaudara" required>
															 <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
															 <?php } ?>
															</select>
															<input type="radio" name="sekSau" value="0" required> Aktif<br>
															<input type="radio" name="sekSau" value="1" required> Alumni
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">NIM
													   </label>
													   <div class="col-md-9">
															<input type="text" class="form-control" name="nim" required>
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Nama Perusahaan
													   </label>
													   <div class="col-md-9">
															<input type="text" class="form-control" name="perSau">
															<input type="text" value="tambah" name="id" hidden>
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													   <label class="control-label col-md-3" style="text-align:left;">Tahun Angkatan
													   </label>
													   <div class="col-md-9" >
															<input type="number" class="form-control" name="angkatan" required>	
													   </div>
													</div>
												</div>
										    </div>	
										<?php }?>
										  </div>
										</div>
									</form>
<script>
$('#minSau').click(function(){
	document.getElementById("detSau").style.display = "none" ;
	document.getElementById("minSau").style.display = "none" ;
	document.getElementById("plusSau").style.display = "block" ;
});
$('#plusSau').click(function(){
	document.getElementById("detSau").style.display = "block" ;
	document.getElementById("minSau").style.display = "block" ;
	document.getElementById("plusSau").style.display = "none" ;
});


jQuery(document).ready(function() {	
	
	document.getElementById("detSau").style.display = "block" ;
	document.getElementById("minSau").style.display = "block" ;
	document.getElementById("plusSau").style.display = "none" ;

	FormComponents.init();
	Index.initCalendar();
	id= "tambah";
    $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/keluarga",{'id':id},function(resp){
			$('.tblKeluarga').html(resp);
		});		
	
});


$(".formKeluarga").submit( function() {			
		
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/keluarga/add",$(this).serialize(),function(resp){
			$('.tblKeluarga').html(resp);
		});
		$('.formKeluarga').trigger("reset");
		return false;
		
	});
	


$(".deleting").each(function (i, v){
	$(this).click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
			id= "tambah";
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/keluarga/delete", {'opt':opt, 'val':val, 'id':id},function(resp){
			id= "tambah";
			$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/keluarga",{'id':id},function(resp){
					$('.tblKeluarga').html(resp);
				});	
		});
	});
});

</script><?php }} ?>