<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 07:56:54
         compiled from "application\views\smb\kontenDaftarUlang.html" */ ?>
<?php /*%%SmartyHeaderCode:2062852aebc0830b036-03282285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ec17d455eb987879506b9adaf7b5769f1653955' => 
    array (
      0 => 'application\\views\\smb\\kontenDaftarUlang.html',
      1 => 1389167716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2062852aebc0830b036-03282285',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52aebc08458aa3_64447090',
  'variables' => 
  array (
    'periode' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52aebc08458aa3_64447090')) {function content_52aebc08458aa3_64447090($_smarty_tpl) {?>				<div class="tab-pane" id="tab_1_4">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="add-portfolio" style="margin-bottom:10px">
                                 <span>Daftar Calon Mahasiswa Baru - Pendaftaran Ulang</span> 
                              </div>							  
							   <div class="col-md-12" style="margin-bottom:10px;margin-left: -13px;">
									<select  class="form-control" name="periode" id="periode">
										<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periode']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
										<?php } ?>
									</select>
							   </div>
							<div id="selectJalur"> </div>
                           </div>						   
                        </div>
						<div id="tblJadwal" name="tblJadwal">
						</div>
					</div>
				<div id="tablePeserta">
					<!-- Isi table Peserta -->
				</div>
				
<script>

jQuery(document).ready(function() {       
         // initiate layout and plugins
		 id = "smbDaftarUlang";
		 $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbJalur",{
					'periode':$('#periode').val(), 'fungsi':id					
				},function(resp){
                $('#selectJalur').html(resp);
            });
      });

	$("#periode").change(function(){
		id = "smbDaftarUlang";
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbJalur",{
					'periode':$('#periode').val(), 'fungsi':id					
				},function(resp){
                $('#selectJalur').html(resp);
            });
	});


//$("#data").jExpand(); 
</script><?php }} ?>