<?php /* Smarty version Smarty-3.1.14, created on 2014-02-03 11:23:51
         compiled from "application\views\portal\sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:3178052c22e979e6cc3-71720993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a17855b0f6aa8b3f654a29f22ca5c2625b9add12' => 
    array (
      0 => 'application\\views\\portal\\sidebar.html',
      1 => 1391401428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3178052c22e979e6cc3-71720993',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c22e97b063e0_28563588',
  'variables' => 
  array (
    'site' => 0,
    'host' => 0,
    'cmb' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c22e97b063e0_28563588')) {function content_52c22e97b063e0_28563588($_smarty_tpl) {?><div class="page-sidebar navbar-collapse collapse">
         <!-- BEGIN SIDEBAR MENU -->        
         <ul class="page-sidebar-menu">
            <li>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
               <div class="sidebar-toggler hidden-phone"></div>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li>
               <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
			   <hr>
               <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="start <?php if ($_smarty_tpl->tpl_vars['site']->value=='tiles'){?>active <?php }?>">
               <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal">
               <i class="icon-home"></i> 
               <span class="title">Dashboard</span>
               <span class="selected"></span>
               </a>
            </li>
            <li class="start <?php if ($_smarty_tpl->tpl_vars['site']->value=='pendaftaran'){?>active <?php }?>">
               <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/pendaftaran">
               <i class="icon-home"></i>
			   <span class="badge badge-default">1</span>
               <span class="title">Pendaftaran</span>
               <span class="selected"></span>
               </a>
            </li>
            <li class="start <?php if ($_smarty_tpl->tpl_vars['site']->value=='pembayaran'||$_smarty_tpl->tpl_vars['site']->value=='pembayaranPaid'||$_smarty_tpl->tpl_vars['site']->value=='buktiBayar'){?>active <?php }?>">
               <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/pembayaran">
               <i class="icon-money"></i> 
			   <span class="badge badge-info">2</span>
               <span class="title">Pembayaran</span>
               <span class="selected"></span>
               </a>
            </li>
            <li class="start <?php if ($_smarty_tpl->tpl_vars['site']->value=='formulir'){?>active <?php }?>">
               <a href="<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsApplyPaidConfirm=='1'){?><?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir<?php }else{ ?>#<?php }?>">
               <i class="icon-pencil"></i> 
			   <span class="badge badge-primary">3</span>
               <span class="title">Lengkapi Formulir</span>
               <span class="selected"></span>
               </a>
            </li>
            <li class="start <?php if ($_smarty_tpl->tpl_vars['site']->value=='jadwal'){?>active <?php }?>">
               <a href="<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsEventConfirm=='1'){?><?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/jadwal<?php }else{ ?>#<?php }?>">
               <i class="icon-list-ol"></i> 
			   <span class="badge badge-success">4</span>
               <span class="title">Jadwal Ujian</span>
               <span class="selected"></span>
               </a>
            </li>
            <li class="start <?php if ($_smarty_tpl->tpl_vars['site']->value=='hasilSeleksi'){?>active <?php }?>">
               <a href="<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultConfirm=='1'){?><?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/seleksi<?php }else{ ?>#<?php }?>">
               <i class="icon-paste"></i> 
			   <span class="badge badge-important">5</span>
               <span class="title">Hasil Ujian</span>
               <span class="selected"></span>
               </a>
            </li>
            <li class="start <?php if ($_smarty_tpl->tpl_vars['site']->value=='daftarUlang'||$_smarty_tpl->tpl_vars['site']->value=='daftarUlangPaid'||$_smarty_tpl->tpl_vars['site']->value=='daftarUlangConfirmed'){?>active <?php }?>">
               <a href="<?php if ($_smarty_tpl->tpl_vars['cmb']->value->stsResultPass=='1'){?><?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/daftarUlang<?php }else{ ?>#<?php }?>">
               <i class="icon-check"></i> 
			   <span class="badge badge-warning">6</span>
               <span class="title">Daftar Ulang</span>
               <span class="selected"></span>
               </a>
            </li>
         </ul>
         <!-- END SIDEBAR MENU -->
      </div><?php }} ?>