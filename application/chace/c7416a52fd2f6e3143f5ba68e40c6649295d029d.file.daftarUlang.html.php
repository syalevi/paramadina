<?php /* Smarty version Smarty-3.1.14, created on 2014-02-18 23:23:11
         compiled from "application\views\portal\daftarUlang.html" */ ?>
<?php /*%%SmartyHeaderCode:1820752d4abfeb6eee8-61122221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7416a52fd2f6e3143f5ba68e40c6649295d029d' => 
    array (
      0 => 'application\\views\\portal\\daftarUlang.html',
      1 => 1392740559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1820752d4abfeb6eee8-61122221',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d4abfec7abf3_66451065',
  'variables' => 
  array (
    'host' => 0,
    'nama' => 0,
    'cmb' => 0,
    'saudara' => 0,
    'typeBayar' => 0,
    'row' => 0,
    'bankAkun' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d4abfec7abf3_66451065')) {function content_52d4abfec7abf3_66451065($_smarty_tpl) {?>			<!-- BEGIN FORM-->
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>
                              <form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/confirmDaftarUlang/add" enctype="multipart/form-data" class="form-horizontal form-bordered form-row-stripped" id="form_sample_1" method="post">	
								<div class="portlet box grey">
								   <div class="portlet-body form" style="border-top: 1px double #4682B4;">
										 <div class="form-body" style="font-size:bold">
											<h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">DATA DIRI</h3>
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Nama Lengkap
											   </label>
											   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
												<label><h4><?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
</h4></label>
												<input value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value->kode_smb;?>
" name="kode" hidden>
											   </div>
											</div>
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Program Studi
											   </label>
											   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
												  <label><h4><?php echo $_smarty_tpl->tpl_vars['cmb']->value->progdi;?>
</h4></label>
											   </div>
											</div>	
										 </div>
										 <div class="form-body">
											<h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Transaksi Pembayaran Pendaftaran Ulang</h3>	
											<!-- <div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Metode Pembayaran
											   </label>
											   <div class="col-md-3" style="width: 862px; height: 70px; padding-left: 35px; padding-top: 5px;">
												  <input type="text" class="form-control" name="jumlahBayar" required>
												  <span class="help-block">Isi tanpa tanda koma, dan titik</span>
											   </div>
											</div> -->
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Metode Pembayaran
											   </label>
											   <div class="col-md-3" style="width: 862px;; padding-left: 35px; padding-top: 5px;">												  
												  <div class="checkbox-list">
													<label>
													<?php if ($_smarty_tpl->tpl_vars['saudara']->value>0){?><input type="checkbox" name="yes" checked="true" disabled> Memiliki Saudara Kandung
													<input name="sau" id="sau" value="1" hidden>
													<?php }elseif($_smarty_tpl->tpl_vars['saudara']->value==0){?><input type="checkbox" name="no" disabled> Memiliki Saudara Kandung
													<input name="sau" id="sau" value="0" hidden>
													<?php }?>
													</label>
												  </div>
												  <div class="radio-list">
												  <label>
													<input type="radio" name="metodBayar" class="mBayar" value="1"> Pembayaran Lunas
												  </label>
												  <label>
													<input type="radio" name="metodBayar" class="mBayar" value="0"> Pembayaran Angsuran
												  </label>
												 </div>
											   </div>
											</div>																					
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Rincian Biaya
											   </label>
											   <div class="detailBiaya col-md-9" style="width: 862px; padding-left: 35px; padding-top: 5px;">
												  <!-- <label style="width:140px"><h4>Uang Masuk</h4></label> <label><h4>: Rp<font class="biaya">10000000</font></h4></label> <br>
												  <label style="width:140px"><h4>SPP Semester 1</h4></label> <label><h4>: Rp<font class="biaya">150000000</font></h4></label> <br>
												  <label style="width:140px"><h4>SKS Semester 1</h4></label> <label><h4>: Rp<font class="biaya">4030020</font> (21 x Rp.200.000,00)</h4></label> <br>
												  <label style="width:140px"><h4>Biaya Orientasi</h4></label> <label><h4>: Rp<font class="biaya">1212132432</font> (Hanya 1x) </h4></label>
												  <hr>
												  <label style="width:140px"><h4>Total Biaya</h4></label> <label><h4>: Rp10.000.000,00 </h4></label><br>
											    -->
											   </div>
											</div>	
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Jumlah Pembayaran
											   </label>
											   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
													<input type="text" class="biaya form-control" name="jumlahBayar" required>
											   </div>
											</div>	
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Tanggal Pembayaran
											   </label>
											   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
													<div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy-mm-dd">
														<input type="text" class="form-control" name="tanggalBayar" style="text-align: left;" required>
												   </div>
											   </div>
											</div>
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Jenis Pembayaran
											   </label>
											   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
												  <select  class="form-control" name="typeTrans" id="typeTrans" required>
													 <option>Pilih Tipe Pembayaran..</option>
													<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['typeBayar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
											<div class="form-group" >
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">No Kartu ATM
											   </label>
											   <div class="col-md-9" style="width: 862px; height: 65px; padding-left: 35px; padding-top: 5px;">
												  <input type="text" class="form-control" name="noAtmCard" id="noAtmCard" disabled required>												  
												  <p class="help-block" style="display:none;" id="helpAtm">Masukan 16 digit No. kartu ATM Anda</p>								  
												  <p class="help-block" style="display:none;" id="helpAtmno">Lewati jika transaksi pembayaran  Tunai/Tunai Via Bank</p>
											   </div>
											</div>
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Rekening Tujuan
											   </label>
											   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
												  <label><h4><?php echo $_smarty_tpl->tpl_vars['bankAkun']->value->nama;?>
</h4></label>
												  <input value="<?php echo $_smarty_tpl->tpl_vars['bankAkun']->value->kode;?>
" name="bankAkun" hidden>
											   </div>
											</div>	
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">No. Rek. Pengirim
											   </label>
											   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
													<input type="text" class="form-control" name="no_rek_cmb" required>
											   </div>
											</div>		
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Nama Rek. Pengirim
											   </label>
											   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
													<input type="text" class="form-control" name="nama_rek_cmb" required>
											   </div>
											</div>										
											<div class="form-group">
											   <label class="control-label col-md-3" style="text-align:left;width: 220px;">Bukti Pembayaran
											   </label>
											   <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 0px;">
												  <input type="file" id="bukti" name="bukti" required>
												  <p class="help-block">Format : pdf|jpg|png|gif</p>
											   </div>
											</div>
											<div class="col-md-12" style="padding-bottom: 15px; padding-top: 5px; padding-right: 0px;">
											<ul class="timeline" style="left:0">
											  <li class="timeline-grey">
												 <div class="timeline-body" style="margin-left:0">
													<input type="checkbox" name="setuju" value="setuju" required>Centang Jika Anda Sudah Yakin dengan Transaksi Di atas.
												 </div>
											  </li>
											</ul>
											</div>											
										  <div class="modal-footer">
											 <button type="reset" class="btn default" data-dismiss="modal">Reset</button>
											 <button type="submit" class="btn blue" id="save" value="save" name="opt"> Simpan <i class="icon-save"></i></button>
										  </div>
										</div>
									</div>
								</div>
							   </form>
<script>

$(document).ready(function()
	{
    //$('.biaya').formatCurrency();
	$('.mBayar').click( function() {	
			opt = $(this).attr("name");
			val = $(this).attr("value");
			sau = $('#sau').attr("value");
			
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/mDetailBayar", {'opt':opt, 'val':val, 'sau':sau},function(resp){
			$('.detailBiaya').html(resp);
		});
	});
	
	
        $('.biaya').blur(function()
        {
            $('.biaya').formatCurrency();
        });
	
});



$("#typeTrans").change(function(){	
	val = $(this).val();
	//alert (val);
	if (val == '04.2' || val == '04.4'){
		document.getElementById('helpAtmno').style.display = 'none';
		document.getElementById('helpAtm').style.display = 'block';
		$("#noAtmCard").prop('disabled', false);
	}else{
		document.getElementById('helpAtmno').style.display = 'block';
		document.getElementById('helpAtm').style.display = 'none';
		$("#noAtmCard").prop('disabled', true);
	}
});	

</script>
<?php }} ?>