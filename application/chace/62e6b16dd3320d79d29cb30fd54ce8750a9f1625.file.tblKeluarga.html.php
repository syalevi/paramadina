<?php /* Smarty version Smarty-3.1.14, created on 2015-12-10 14:55:51
         compiled from "application/views/portal/tblKeluarga.html" */ ?>
<?php /*%%SmartyHeaderCode:1497188749535625d4223519-71197568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62e6b16dd3320d79d29cb30fd54ce8750a9f1625' => 
    array (
      0 => 'application/views/portal/tblKeluarga.html',
      1 => 1446005811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1497188749535625d4223519-71197568',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_535625d42ace23_13084840',
  'variables' => 
  array (
    'saudara' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535625d42ace23_13084840')) {function content_535625d42ace23_13084840($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
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
                         <p>Angkatan : <?php echo $_smarty_tpl->tpl_vars['row']->value->angkatan;?>
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
<script>

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