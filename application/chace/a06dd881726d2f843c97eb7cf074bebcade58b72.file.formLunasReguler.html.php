<?php /* Smarty version Smarty-3.1.14, created on 2016-02-05 09:04:12
         compiled from "application/views/master/formLunasReguler.html" */ ?>
<?php /*%%SmartyHeaderCode:204943538856b4031c38ba95-67437245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a06dd881726d2f843c97eb7cf074bebcade58b72' => 
    array (
      0 => 'application/views/master/formLunasReguler.html',
      1 => 1430888231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204943538856b4031c38ba95-67437245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
    'metod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56b4031c40d174_28166657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b4031c40d174_28166657')) {function content_56b4031c40d174_28166657($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/js/jquery.formatCurrency-1.4.0.js"></script>
<div class="form-group">
    <label class="control-label col-md-3">Uang Masuk Rank 1</label>
    <div class="input-group col-md-8">
        <input type="text" class="biaya form-control" placeholder="Uang Masuk Peringkat 1 (Rp.)" id="um1" name="um1">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3">Uang Masuk Rank 2</label>
    <div class="input-group col-md-8">
        <input type="text" class="biaya form-control" placeholder="Uang Masuk Peringkat 2 (Rp.)" id="um2" name="um2">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3">Uang Masuk Rank 3</label>
    <div class="input-group col-md-8">
        <input type="text" class="biaya form-control" placeholder="Uang Masuk Peringkat 3 (Rp.)" id="um3" name="um3">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3">BPP</label>
    <div class="input-group col-md-8">
        <input type="text" class="biaya form-control" placeholder="Biaya BPP (Rp.)" id="bpp" name="bpp">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3">Jumlah SKS</label>
    <div class="input-group col-md-8">
        <input type="text" class="biaya form-control" placeholder="Jumlah SKS Semester 1" id="jumlahSks" name="jumlahSks">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3">SKS</label>
    <div class="input-group col-md-8">
        <input type="text" class="biaya form-control" placeholder="Biaya Total SKS (Rp.)" id="sks" name="sks">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3">SPP</label>
    <div class="input-group col-md-8">
        <input type="text" class="biaya form-control" placeholder="Biaya SPP (Rp.)" id="spp" name="spp">
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['metod']->value=='69'){?>
<div class="form-group">
    <label class="control-label col-md-3">Tempo Angsuran</label>
    <div class="input-group col-md-5">
        <input type="number" class="form-control" placeholder="Tempo Ansuran " id="angsur" name="angsurCount" pattern="[0-9]">
    </div>
</div>
<hr>
<div class="form-group">
    <label class="control-label col-md-3">Angsuran 1</label>
    <div class="input-group col-md-4">
        <input type="text" class="biaya form-control" placeholder="(RP.) Angsuran Rank. 1" id="angsuran1" name="angsuran1_1">
    </div>
    <div class="input-group col-md-4">
        <input type="text" class="biaya form-control" placeholder="(RP.) Angsuran Rank. 2" id="angsuran1" name="angsuran1_2">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3"></label>
    <div class="input-group col-md-4">
        <input type="text" class="biaya form-control" placeholder="(RP.) Angsuran Rank. 3" id="angsuran1" name="angsuran1_3">
    </div>
    <div class="input-group col-md-4">
        <input type="text" class="form-control" placeholder="Due Date 1 (DD-MM-YYYY)" id="d_angsur1" name="d_angsur1">
    </div>
</div>
<hr>
<div class="form-group">
    <label class="control-label col-md-3">Angsuran 2</label>
    <div class="input-group col-md-4">
        <input type="text" class="biaya form-control" placeholder="(RP.) Angsuran Rank. 1" id="angsuran2" name="angsuran2_1">
    </div>
	<div class="input-group col-md-4">
        <input type="text" class="biaya form-control" placeholder="(RP.) Angsuran Rank. 2" id="angsuran2" name="angsuran2_2">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3"></label>
	<div class="input-group col-md-4">
        <input type="text" class="biaya form-control" placeholder="(RP.) Angsuran Rank. 3" id="angsuran2" name="angsuran2_3">
    </div>
    <div class="input-group col-md-4">
        <input type="text" class="form-control" placeholder="Due Date 2 (DD-MM-YYYY)" id="d_angsur2" name="d_angsur2">
    </div>
</div>
<hr>
<div class="form-group">
    <label class="control-label col-md-3">Angsuran 3</label>
    <div class="input-group col-md-4">
        <input type="text" class="biaya form-control" placeholder="(RP.) Angsuran Rank. 1" id="angsuran3" name="angsuran3_1">
    </div>
    <div class="input-group col-md-4">
        <input type="text" class="biaya form-control" placeholder="(RP.) Angsuran Rank. 2" id="angsuran3" name="angsuran3_2">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3"></label>
    <div class="input-group col-md-4">
        <input type="text" class="biaya form-control" placeholder="(RP.) Angsuran Rank. 3" id="angsuran3" name="angsuran3_3">
    </div>
    <div class="input-group col-md-4">
        <input type="text" class="form-control" placeholder="Due Date 3 (DD-MM-YYYY)" id="d_angsur3" name="d_angsur3">
    </div>
</div>
<?php }?>
<div class="form-group">
    <label class="control-label col-md-3">Status</label>
    <div class="col-md-6">
        <select class="form-control" id="status" name="status" class="status">
            <option value="1">AKTIF</option>
            <option value="0">TIDAK AKTIF</option>
        </select>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn default" data-dismiss="modal">Close</button>
    <button type="submit" class="btn blue" id="save" value="save" name="opt">Tambah <i class="icon-plus"></i>
        </a>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('.biaya').blur(function() {
        $('.biaya').formatCurrency();
    });
}); 
</script><?php }} ?>