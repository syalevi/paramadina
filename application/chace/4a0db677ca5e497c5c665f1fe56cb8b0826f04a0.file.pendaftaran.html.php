<?php /* Smarty version Smarty-3.1.14, created on 2017-03-27 12:36:56
         compiled from "application/views/portal/pendaftaran.html" */ ?>
<?php /*%%SmartyHeaderCode:676436387535625c7d93731-41092116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a0db677ca5e497c5c665f1fe56cb8b0826f04a0' => 
    array (
      0 => 'application/views/portal/pendaftaran.html',
      1 => 1490234873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '676436387535625c7d93731-41092116',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_535625c7e075e5_04694993',
  'variables' => 
  array (
    'host' => 0,
    'nama' => 0,
    'cmb' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535625c7e075e5_04694993')) {function content_535625c7e075e5_04694993($_smarty_tpl) {?> 				<!-- BEGIN FORM-->
<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
registrasi/formRegistrasi" class="form-horizontal form-bordered form-row-stripped" id="form_sample_1" method="post">	
<div class="portlet box grey">
   <div class="portlet-body form" style="border-top: 1px double #4682B4;">
                 <div class="form-body">
                        <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Pendaftaran</h3>
                        <div class="form-group">
                           <label class="control-label col-md-3" style="text-align:left;width: 220px;">Nama Lengkap
                           </label>
                           <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                                <label><h4><?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
</h4></label>
                                  <!-- <input type="text" placeholder="email" class="form-control placeholder-no-fix" value="<?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
" disabled> -->
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-3" style="text-align:left;width: 220px;">E-mail
                           </label>
                           <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                                  <label><h4><?php echo $_smarty_tpl->tpl_vars['cmb']->value->kode_smb;?>
</h4></label>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-3" style="text-align:left;width: 220px;">Jenjang Studi
                           </label>
                           <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                                  <label><h4><?php if ($_smarty_tpl->tpl_vars['cmb']->value->jenjangType=='1'){?>S1<?php }else{ ?>S2<?php }?></h4></label>
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
                        <div class="form-group">
                           <label class="control-label col-md-3" style="text-align:left;width: 220px;">No Handphone
                           </label>
                           <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                                  <label><h4><?php echo $_smarty_tpl->tpl_vars['cmb']->value->rumahCell;?>
</h4></label>
                           </div>
                        </div>
                 </div>
                 <div class="form-body">
                        <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Data Formulir</h3>	
                        <div class="form-group">
                           <label class="control-label col-md-3" style="text-align:left;width: 220px;">Tahun
                           </label>
                           <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                                  <label><h4><?php echo $_smarty_tpl->tpl_vars['cmb']->value->tahun;?>
</h4></label>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-3" style="text-align:left;width: 220px;">Semester
                           </label>
                           <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                                  <label><h4><?php if ($_smarty_tpl->tpl_vars['cmb']->value->semester=='1'){?>Ganjil<?php }else{ ?>Genap<?php }?></h4></label>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-3" style="text-align:left;width: 220px;">Jalur Seleksi
                           </label>
                           <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                                  <label><h4><?php echo $_smarty_tpl->tpl_vars['cmb']->value->n_jalur;?>
</h4></label>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-3" style="text-align:left;width: 220px;">Biaya Pendaftaran
                           </label>
                           <div class="col-md-9" style="width: 862px; height: 46px; padding-left: 35px; padding-top: 5px;">
                                  <label><h4>Rp. <?php if ($_smarty_tpl->tpl_vars['cmb']->value->jenjangType==1){?>300.000<?php }else{ ?>500.000<?php }?></h4></label>
                           </div>
                        </div>
                        <div class="col-md-12" style="padding-bottom: 15px; padding-top: 5px; padding-right: 0px;">
                        <ul class="timeline" style="left:0">
                          <li class="timeline-parmad">
                                 <div class="timeline-body" style="margin-left:0">
                                        <h2>Pembayaran Pendaftaran</h2>
                                        <div class="timeline-content">
                                        Untuk melanjutkan proses pendaftaran,
                                        lakukan pembayaran sebesar 
										<?php if ($_smarty_tpl->tpl_vars['cmb']->value->jenjangType==1){?><b>Rp. 300.000 ( Tiga Ratus Ribu Rupiah )</b><?php }else{ ?>
										<b>Rp. 500.000 ( Lima Ratus Ribu Rupiah )</b><?php }?><br>
                                        ke <b>BANK MANDIRI</b> nomor rekening <b>070-0000043526</b><br>
                                        atas nama <b>Universitas Paramadina</b>
                                        </div>
                                        <div class="timeline-footer">
                                           <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/pembayaran" class="btn red">
                                           Masuk ke Form Pembayaran <i class="m-icon-swapright m-icon-white"></i>                              
                                           </a>                         
                                        </div>
                                 </div>
                          </li>
                        </ul>
                        </div>
                </div>
        </div>
</div>
</form>
							  
<?php }} ?>