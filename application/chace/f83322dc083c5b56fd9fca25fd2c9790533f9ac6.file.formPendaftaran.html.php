<?php /* Smarty version Smarty-3.1.14, created on 2017-03-27 09:48:49
         compiled from "application/views/pendaftaran/formPendaftaran.html" */ ?>
<?php /*%%SmartyHeaderCode:21244918415359bd01368811-52081922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f83322dc083c5b56fd9fca25fd2c9790533f9ac6' => 
    array (
      0 => 'application/views/pendaftaran/formPendaftaran.html',
      1 => 1490582833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21244918415359bd01368811-52081922',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5359bd0139fc45_06935216',
  'variables' => 
  array (
    'host' => 0,
    'gender' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5359bd0139fc45_06935216')) {function content_5359bd0139fc45_06935216($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/admission/public_html/application/libraries/smarty/libs/plugins/modifier.date_format.php';
?>   <!-- BEGIN FORM-->
<form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
registrasi/formRegistrasi" class="form-horizontal form-bordered form-row-stripped" id="form_sample_1" method="post">
    <div class="portlet box grey">
        <div class="portlet-body form" style="border-top: 1px double #4682B4;">
            <div class="form-body">
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Registrasi</h3>
                <div class="alert alert-error display-hide">
                    <button class="close" data-dismiss="alert"></button>
                    You have some form errors. Please check below.
                </div>
                <div class="alert alert-success display-hide">
                    <button class="close" data-dismiss="alert"></button>
                    Your form validation is successful!
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Jenjang
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <select class="form-control" name="jenjang" id="jenjang" required>
                            <option value="">--Silahkan Pilih--</option>
                            <option value="1">S1 (Sarjana)</option>
                            <option value="2">S2 (Pasca Sarjana)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Program Studi
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <select class="form-control" name="prodi" id="prodi" required>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Jalur Seleksi
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <select class="form-control" name="jalur" id="jalur" required>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-body">
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Login Pengguna</h3>
                <!-- <div class="form-group">
											   <label class="control-label col-md-2" >Username<span class="required">*</span>
											   </label>
											   <div class="col-md-10" >
												   <div class="input-icon">
													<i class="icon-user"></i>
													  <input type="text" placeholder="username" class="form-control" data-required="1" name="username"/>
													</div>
													  <span class="help-block">Username untuk Login</span>
											   </div>
											</div> -->
                <div class="form-group">
                    <label class="control-label col-md-2">Email
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <div class="input-icon">
                            <i class="icon-envelope"></i>
                            <input type="text" placeholder="email" class="form-control placeholder-no-fix" name="email" id="email" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Konfirmasi Email
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <div class="input-icon">
                            <i class="icon-envelope"></i>
                            <input type="text" placeholder="Retype email" class="form-control placeholder-no-fix" name="remail" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Password
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <div class="input-icon">
                            <i class="icon-key"></i>
                            <input type="password" placeholder="Password" class="form-control" name="password" id="password" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Konfirmasi Password
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <div class="input-icon">
                            <i class="icon-key"></i>
                            <input type="password" placeholder="Retype password" class="form-control" name="rpassword" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-body">
                <h3 class="form-section" style="margin-bottom: 0px; margin-left: 50px;margin-top: 12px;">Data Pribadi</h3>
                <div class="form-group">
                    <label class="control-label col-md-2">Nama Lengkap
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <input type="text" placeholder="Nama Lengkap" class="form-control placeholder-no-fix" name="name"  required/>
                        <span class="help-block">Sesuai dengan ijazah terakhir</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Alamat Rumah
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <textarea rows="3" name="occupation" placeholder="Alamat Sekarang" class="form-control placeholder-no-fix" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Alamat Orang Tua/Wali
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <textarea rows="3" name="occupationOrtu" placeholder="Alamat Orang Tua/Wali" class="form-control placeholder-no-fix" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Jenis Kelamin
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="icon-male"></i>
                            </span>
                            <select class="form-control" name="sex" required>
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gender']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                <div class="form-group">
                    <label class="control-label col-md-2">Nomor Handphone
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <input type="text" placeholder="No. HP" class="form-control"  name="no_hp" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Tempat/Tanggal Lahir
                    <span class="required">*</span>
                    </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempatLahir"  required> 
                    </div>
                    <div class="col-md-3">
<!--                        <input type="text" class="form-control form-control-inline input-medium " placeholder="DD-MM-YYYY" name="tanggalLahir">
                        <p class="help-block">
                            <span>Format : <b><?php echo smarty_modifier_date_format(time(),"%d-%m-%Y");?>
</b></span>
                        </p>                                               -->
                        <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy-mm-dd">
                            <input type="text" class="form-control" name="tanggalLahir" placeholder="" style="text-align: left;" required>
                        </div>
                        <p class="help-block">
                            <span>Tanggal Lahir</span>
                        </p> 
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Asal Sekolah/PT
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <input type="text" placeholder="Nama Sekolah Asal" class="form-control" name="sekolah"  required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Tahun Lulus
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <input type="number" placeholder="Tahun Kelulusan" class="form-control" name="tahunLulus"  required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Jurusan/Prodi
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                        <input type="text" placeholder="Jurusan SMA" class="form-control" name="jurusan"  required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Kode reCaptcha</label>
                    <div class="col-md-10">

                        <!-- BEGIN REPCAPTCHA -->
                        <div id="recaptcha_widget" class="form-recaptcha">

                            <div class="form-recaptcha-img" style="width: 325px">
                                <a id="recaptcha_image" href="#"></a>
                                <div class="recaptcha_only_if_incorrect_sol" style="color:red">Salah, Silahkan coba lagi</div>
                            </div>

                            <div class="input-group" style="width: 325px">
                                <input type="text" class="form-control" id="recaptcha_response_field" name="recaptcha_response_field">
                                <div class="input-group-btn">
                                    <a class="btn default" href="javascript:Recaptcha.reload()"><i class="icon-refresh"></i></a>
                                    <a class="btn default recaptcha_only_if_image" href="javascript:Recaptcha.switch_type('audio')"><i title="Get an audio CAPTCHA" class="icon-headphones"></i></a>
                                    <a class="btn default recaptcha_only_if_audio" href="javascript:Recaptcha.switch_type('image')"><i title="Get an image CAPTCHA" class="icon-picture"></i></a>
                                    <a class="btn default" href="javascript:Recaptcha.showhelp()"><i class="icon-question-sign"></i></a>
                                </div>
                            </div>

                            <p class="help-block">
                                <span class="recaptcha_only_if_image">Masukkan kata di atas</span>
                                <span class="recaptcha_only_if_audio">Masukkan angka yang anda dengar</span>
                            </p>

                        </div>
                        <!-- END REPCAPTCHA -->
                    </div>
                </div>
                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-10">
                        <button type="reset" class="btn blue">Reset</button>
                        <button type="submit" class="btn green">Submit</button>
                        <button type="button" class="btn default">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

							  
			
<!-- BEGIN GOOGLE RECAPTCHA -->
   <script type="text/javascript">
      var RecaptchaOptions = {
         theme : 'custom',
         custom_theme_widget: 'recaptcha_widget'
      };
   </script>
   <script type="text/javascript" src="https://www.google.com/recaptcha/api/challenge?k=6Lcj_eoSAAAAAM43ZI_sA8acDwPxPIJn6nwRS5WV"></script>
   <!-- END GOOGLE RECAPTCHA -->				  
   
<script>

function prodi() {
    $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
registrasi/selectProdi",{
					'jenjang':$('#jenjang').val()				
				},function(resp){
                $('select#prodi').html(resp);
            });
}


function jalur() {
    $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
registrasi/selectJalur",{
					'prodi':$('#prodi').val()				
				},function(resp){
                $('select#jalur').html(resp);
            });
}


$(document).ready(function(){
	prodi();
	jalur();
});

$("#jenjang").change(function(){
	prodi();
	jalur();
});

$("#prodi").change(function(){
	jalur()
});
</script><?php }} ?>