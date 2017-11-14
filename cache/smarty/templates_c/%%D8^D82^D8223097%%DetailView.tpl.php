<?php /* Smarty version 2.6.29, created on 2017-11-13 15:45:17
         compiled from cache/themes/SuiteR/modules/Users/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/themes/SuiteR/modules/Users/DetailView.tpl', 33, false),array('function', 'sugar_translate', 'cache/themes/SuiteR/modules/Users/DetailView.tpl', 40, false),array('function', 'counter', 'cache/themes/SuiteR/modules/Users/DetailView.tpl', 54, false),array('function', 'sugar_getimage', 'cache/themes/SuiteR/modules/Users/DetailView.tpl', 79, false),array('function', 'sugar_getimagepath', 'cache/themes/SuiteR/modules/Users/DetailView.tpl', 156, false),array('function', 'sugar_phone', 'cache/themes/SuiteR/modules/Users/DetailView.tpl', 247, false),array('function', 'sugar_help', 'cache/themes/SuiteR/modules/Users/DetailView.tpl', 613, false),array('function', 'sugar_getjspath', 'cache/themes/SuiteR/modules/Users/DetailView.tpl', 678, false),array('modifier', 'strip_semicolon', 'cache/themes/SuiteR/modules/Users/DetailView.tpl', 65, false),array('modifier', 'escape', 'cache/themes/SuiteR/modules/Users/DetailView.tpl', 353, false),array('modifier', 'url2html', 'cache/themes/SuiteR/modules/Users/DetailView.tpl', 353, false),array('modifier', 'nl2br', 'cache/themes/SuiteR/modules/Users/DetailView.tpl', 353, false),)), $this); ?>


<script language="javascript">
<?php echo '
SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0;
}, SUGAR.themes.actionMenu);
'; ?>

</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
</form>
<ul id="detail_header_action_menu" class="clickMenu fancymenu" ><li class="sugar_action_button" ><input title="Править" accessKey="i" name="Edit" id="edit_button" value="Править" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='Users'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'; _form.action.value='EditView';_form.submit();" type="button"/><ul id class="subnav" ><li><input id="duplicate_button" title="Дублировать" accessKey="u" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='Users'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView';_form.submit();" type="button" name="Duplicate" value="Дублировать"/></li><li><input id="delete_button" type="button" class="button" onclick="confirmDelete();" value="Удалить" //></li><li><input title="Установить стандартные значения" class="button" LANGUAGE="javascript" onclick="if(confirm('Вы действительно хотите сбросить все настройки данного пользователя?')) window.location='index.php?module=Users&action=resetPreferences&reset_preferences=true&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
';" type="button" name="password" value="Установить стандартные значения"/></li><li><input title="Сбросить настройки закладки " ГЛАВНАЯ class="button" LANGUAGE="javascript" onclick="if(confirm('Вы действительно хотите сбросить настройки закладки ГЛАВНАЯ?')) window.location='index.php?module=Users&action=DetailView&reset_homepage=true&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
';" type="button" name="password" value="Сбросить настройки закладки "/></li><li><?php if ($this->_tpl_vars['bean']->aclAccess('detail')): ?><?php if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Users", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif; ?><?php endif; ?></li></ul></li></ul>
</div>
</td>
<td align="right" width="20%"><?php echo $this->_tpl_vars['ADMIN_EDIT']; ?>

<?php echo $this->_tpl_vars['PAGINATION']; ?>

</td>
</tr>
</table><?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<div id="Users_detailview_tabs"
class="yui-navset detailview_tabs"
>

<ul class="yui-nav">

<li><a id="tab0" href="javascript:void(0)"><em><?php echo smarty_function_sugar_translate(array('label' => 'LBL_USER_INFORMATION','module' => 'Users'), $this);?>
</em></a></li>

<li <?php if ($this->_tpl_vars['IS_GROUP_OR_PORTAL']): ?>style="display: none;"<?php endif; ?>>
<a id="tab1" href="javascript:void(0)"><em><?php echo $this->_tpl_vars['MOD']['LBL_ADVANCED']; ?>
</em></a>
</li>
<?php if ($this->_tpl_vars['SHOW_ROLES']): ?>
<li>
<a id="tab2" href="javascript:void(0)"><em><?php echo $this->_tpl_vars['MOD']['LBL_USER_ACCESS']; ?>
</em></a>
</li>
<?php endif; ?>
</ul>
<div class="yui-content">
<div id='tabcontent0'>
<div id='detailpanel_1' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<!-- PANEL CONTAINER HERE.. -->
<table id='LBL_USER_INFORMATION' class="panelContainer" cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['full_name']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="name" field="full_name" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['full_name']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['full_name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['full_name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['full_name']['value']); ?>
<?php endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['full_name']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['full_name']['value']; ?>
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['user_name']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_USER_NAME','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="user_name" field="user_name" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['user_name']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['user_name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['user_name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['user_name']['value']); ?>
<?php endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['user_name']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['user_name']['value']; ?>
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['status']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="enum" field="status" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['status']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['status']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['status']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['status']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['status']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['status']['options'][$this->_tpl_vars['fields']['status']['value']]; ?>

<?php endif; ?>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['UserType']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_USER_TYPE','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="enum" field="UserType" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['UserType']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id="UserType" class="sugar_field"><?php echo $this->_tpl_vars['USER_TYPE_READONLY']; ?>
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_USER_INFORMATION").style.display='none';</script>
<?php endif; ?>
<div id='detailpanel_2' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
"></a>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMPLOYEE_INFORMATION','module' => 'Users'), $this);?>

<script>
      document.getElementById('detailpanel_2').className += ' expanded';
    </script>
</h4>
<!-- PANEL CONTAINER HERE.. -->
<table id='LBL_EMPLOYEE_INFORMATION' class="panelContainer" cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['employee_status']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMPLOYEE_STATUS','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="varchar" field="employee_status" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['employee_status']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id='employee_status_span'>
<?php echo $this->_tpl_vars['fields']['employee_status']['value']; ?>

</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['show_on_employees']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SHOW_ON_EMPLOYEES','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="bool" field="show_on_employees" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['show_on_employees']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['show_on_employees']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['show_on_employees']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['show_on_employees']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'checked="checked"'); ?>
<?php else: ?>
<?php $this->assign('checked', ""); ?>
<?php endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['show_on_employees']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['show_on_employees']['name']; ?>
" value="$fields.show_on_employees.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['title']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="enum" field="title" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['title']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['title']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['title']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['title']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['title']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['title']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['title']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['title']['options'][$this->_tpl_vars['fields']['title']['value']]; ?>

<?php endif; ?>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['phone_work']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_WORK_PHONE','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="phone" field="phone_work" width='37.5%'  class="phone">
<?php if (! $this->_tpl_vars['fields']['phone_work']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_work']['value'] )): ?>
<?php $this->assign('phone_value', $this->_tpl_vars['fields']['phone_work']['value']); ?>
<?php echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif; ?>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['reports_to_name']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO_NAME','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="relate" field="reports_to_name" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['reports_to_name']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span id="reports_to_id" class="sugar_field" data-id-value="<?php echo $this->_tpl_vars['fields']['reports_to_id']['value']; ?>
"><?php echo $this->_tpl_vars['fields']['reports_to_name']['value']; ?>
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['phone_mobile']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_MOBILE_PHONE','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="phone" field="phone_mobile" width='37.5%'  class="phone">
<?php if (! $this->_tpl_vars['fields']['phone_mobile']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_mobile']['value'] )): ?>
<?php $this->assign('phone_value', $this->_tpl_vars['fields']['phone_mobile']['value']); ?>
<?php echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif; ?>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['date_entered']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_ENTERED','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="datetime" field="date_entered" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['date_entered']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php $this->assign('value', "11/13/2017"); ?>
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
"><?php echo $this->_tpl_vars['value']; ?>
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['phone_home']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_HOME_PHONE','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="phone" field="phone_home" width='37.5%'  class="phone">
<?php if (! $this->_tpl_vars['fields']['phone_home']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_home']['value'] )): ?>
<?php $this->assign('phone_value', $this->_tpl_vars['fields']['phone_home']['value']); ?>
<?php echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif; ?>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['description']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="text" field="description" width='37.5%' colspan='3' >
<?php if (! $this->_tpl_vars['fields']['description']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['description']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['description']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html_entity_decode') : smarty_modifier_escape($_tmp, 'html_entity_decode')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(2, 'expanded'); }); </script>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_EMPLOYEE_INFORMATION").style.display='none';</script>
<?php endif; ?>
</div>
<div id='tabcontent1'>
<div id="detailpanel_2" class="detail view  detail508 expanded">
<div id="settings">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th colspan='4' align="left" width="100%" valign="top">
<h4>
<slot><?php echo $this->_tpl_vars['MOD']['LBL_USER_SETTINGS']; ?>
</slot>
</h4>
</th>
</tr>
<tr>
<td scope="row">
<slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_RECEIVE_NOTIFICATIONS'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot>
</td>
<td>
<slot><input class="checkbox" type="checkbox" disabled <?php echo $this->_tpl_vars['RECEIVE_NOTIFICATIONS']; ?>
></slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['MOD']['LBL_RECEIVE_NOTIFICATIONS_TEXT']; ?>
&nbsp;</slot>
</td>
</tr>
<tr>
<td scope="row" valign="top">
<slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_REMINDER'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<!--
<td valign="top" nowrap><slot><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/Meetings/tpls/reminders.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></slot></td>
-->
<td valign="top" nowrap>
<slot><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/Reminders/tpls/remindersDefaults.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['MOD']['LBL_REMINDER_TEXT']; ?>
&nbsp;</slot>
</td>
</tr>
<tr>
<td valign="top" scope="row">
<slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_MAILMERGE'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot>
</td>
<td valign="top" nowrap>
<slot><input tabindex='3' name='mailmerge_on' disabled class="checkbox"
type="checkbox" <?php echo $this->_tpl_vars['MAILMERGE_ON']; ?>
></slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['MOD']['LBL_MAILMERGE_TEXT']; ?>
&nbsp;</slot>
</td>
</tr>
<tr>
<td valign="top" scope="row">
<slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_SETTINGS_URL'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot>
</td>
<td valign="top" nowrap>
<slot><?php echo $this->_tpl_vars['SETTINGS_URL']; ?>
</slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['MOD']['LBL_SETTINGS_URL_DESC']; ?>
&nbsp;</slot>
</td>
</tr>
<tr>
<td scope="row" valign="top">
<slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_EXPORT_DELIMITER'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['EXPORT_DELIMITER']; ?>
</slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['MOD']['LBL_EXPORT_DELIMITER_DESC']; ?>
</slot>
</td>
</tr>
<tr>
<td scope="row" valign="top">
<slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_EXPORT_CHARSET'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['EXPORT_CHARSET_DISPLAY']; ?>
</slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['MOD']['LBL_EXPORT_CHARSET_DESC']; ?>
</slot>
</td>
</tr>
<tr>
<td scope="row" valign="top">
<slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_USE_REAL_NAMES'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot>
</td>
<td>
<slot><input tabindex='3' name='use_real_names' disabled class="checkbox"
type="checkbox" <?php echo $this->_tpl_vars['USE_REAL_NAMES']; ?>
></slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['MOD']['LBL_USE_REAL_NAMES_DESC']; ?>
</slot>
</td>
</tr>
<?php if ($this->_tpl_vars['DISPLAY_EXTERNAL_AUTH']): ?>
<tr>
<td scope="row" valign="top">
<slot><?php echo ((is_array($_tmp=$this->_tpl_vars['EXTERNAL_AUTH_CLASS'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot>
</td>
<td valign="top" nowrap>
<slot><input id="external_auth_only" name="external_auth_only" type="checkbox"
class="checkbox" <?php echo $this->_tpl_vars['EXTERNAL_AUTH_ONLY_CHECKED']; ?>
></slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['MOD']['LBL_EXTERNAL_AUTH_ONLY']; ?>
 <?php echo $this->_tpl_vars['EXTERNAL_AUTH_CLASS']; ?>
</slot>
</td>
</tr>
<?php endif; ?>
</table>
</div>
<div id='locale'>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th colspan='4' align="left" width="100%" valign="top">
<h4>
<slot><?php echo $this->_tpl_vars['MOD']['LBL_USER_LOCALE']; ?>
</slot>
</h4>
</th>
</tr>
<tr>
<td width="15%" scope="row">
<slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_DATE_FORMAT'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['DATEFORMAT']; ?>
&nbsp;</slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['MOD']['LBL_DATE_FORMAT_TEXT']; ?>
&nbsp;</slot>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_TIME_FORMAT'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['TIMEFORMAT']; ?>
&nbsp;</slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['MOD']['LBL_TIME_FORMAT_TEXT']; ?>
&nbsp;</slot>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_TIMEZONE'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot>
</td>
<td nowrap>
<slot><?php echo $this->_tpl_vars['TIMEZONE']; ?>
&nbsp;</slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['MOD']['LBL_ZONE_TEXT']; ?>
&nbsp;</slot>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_CURRENCY'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['CURRENCY_DISPLAY']; ?>
&nbsp;</slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['MOD']['LBL_CURRENCY_TEXT']; ?>
&nbsp;</slot>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_CURRENCY_SIG_DIGITS'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['CURRENCY_SIG_DIGITS']; ?>
&nbsp;</slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['MOD']['LBL_CURRENCY_SIG_DIGITS_DESC']; ?>
&nbsp;</slot>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_NUMBER_GROUPING_SEP'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['NUM_GRP_SEP']; ?>
&nbsp;</slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['MOD']['LBL_NUMBER_GROUPING_SEP_TEXT']; ?>
&nbsp;</slot>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_DECIMAL_SEP'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['DEC_SEP']; ?>
&nbsp;</slot>
</td>
<td>
<slot></slot><?php echo $this->_tpl_vars['MOD']['LBL_DECIMAL_SEP_TEXT']; ?>
&nbsp;</td>
</tr>
</tr>
<tr>
<td width="15%" scope="row">
<slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_LOCALE_DEFAULT_NAME_FORMAT'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['NAME_FORMAT']; ?>
&nbsp;</slot>
</td>
<td>
<slot></slot><?php echo $this->_tpl_vars['MOD']['LBL_LOCALE_NAME_FORMAT_DESC']; ?>
&nbsp;</td>
</tr>
</table>
</div>
<div id='calendar_options'>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th colspan='4' align="left" width="100%" valign="top">
<h4>
<slot><?php echo $this->_tpl_vars['MOD']['LBL_CALENDAR_OPTIONS']; ?>
</slot>
</h4>
</th>
</tr>
<tr>
<td width="15%" scope="row">
<slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_PUBLISH_KEY'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot>
</td>
<td width="20%">
<slot><?php echo $this->_tpl_vars['CALENDAR_PUBLISH_KEY']; ?>
&nbsp;</slot>
</td>
<td width="65%">
<slot><?php echo $this->_tpl_vars['MOD']['LBL_CHOOSE_A_KEY']; ?>
&nbsp;</slot>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<slot>
<nobr><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_YOUR_PUBLISH_URL'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</nobr>
</slot>
</td>
<td colspan=2><?php if ($this->_tpl_vars['CALENDAR_PUBLISH_KEY']): ?><?php echo $this->_tpl_vars['CALENDAR_PUBLISH_URL']; ?>
<?php else: ?><?php echo $this->_tpl_vars['MOD']['LBL_NO_KEY']; ?>
<?php endif; ?></td>
</tr>
<tr>
<td width="15%" scope="row">
<slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_SEARCH_URL'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot>
</td>
<td colspan=2>
<slot><?php if ($this->_tpl_vars['CALENDAR_PUBLISH_KEY']): ?><?php echo $this->_tpl_vars['CALENDAR_SEARCH_URL']; ?>
<?php else: ?><?php echo $this->_tpl_vars['MOD']['LBL_NO_KEY']; ?>
<?php endif; ?></slot>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_ICAL_PUB_URL'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
: <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_ICAL_PUB_URL_HELP']), $this);?>
</slot>
</td>
<td colspan=2>
<slot><?php if ($this->_tpl_vars['CALENDAR_PUBLISH_KEY']): ?><?php echo $this->_tpl_vars['CALENDAR_ICAL_URL']; ?>
<?php else: ?><?php echo $this->_tpl_vars['MOD']['LBL_NO_KEY']; ?>
<?php endif; ?></slot>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_FDOW'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['FDOWDISPLAY']; ?>
&nbsp;</slot>
</td>
<td>
<slot></slot><?php echo $this->_tpl_vars['MOD']['LBL_FDOW_TEXT']; ?>
&nbsp;</td>
</tr>
</table>
</div>
<div id='edit_tabs'>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th colspan='4' align="left" width="100%" valign="top">
<h4>
<slot><?php echo $this->_tpl_vars['MOD']['LBL_LAYOUT_OPTIONS']; ?>
</slot>
</h4>
</th>
</tr>
<tr>
<td width="15%" scope="row">
<slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_USE_GROUP_TABS'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot>
</td>
<td>
<slot><input class="checkbox" type="checkbox" disabled <?php echo $this->_tpl_vars['USE_GROUP_TABS']; ?>
></slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['MOD']['LBL_NAVIGATION_PARADIGM_DESCRIPTION']; ?>
&nbsp;</slot>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_SUBPANEL_TABS'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot>
</td>
<td>
<slot><input class="checkbox" type="checkbox" disabled <?php echo $this->_tpl_vars['SUBPANEL_TABS']; ?>
></slot>
</td>
<td>
<slot><?php echo $this->_tpl_vars['MOD']['LBL_SUBPANEL_TABS_DESCRIPTION']; ?>
&nbsp;</slot>
</td>
</tr>
</table>
</div>
</div>
</div>
<div id='tabcontent2'>
<div id="detailpanel_3" class="detail view  detail508 expanded">
<div id="advanced">
<TABLE width='100%' class='detail view' border='0' cellpadding=0 cellspacing = 1  ><TR><td style="background: transparent;"></td><td style="text-align: center;" scope="row"><b>Доступ к модулю</b></td><td style="text-align: center;" scope="row"><b>Удаление</b></td><td style="text-align: center;" scope="row"><b>Правка</b></td><td style="text-align: center;" scope="row"><b>Экспорт</b></td><td style="text-align: center;" scope="row"><b>Импорт</b></td><td style="text-align: center;" scope="row"><b>Список</b></td><td style="text-align: center;" scope="row"><b>Массовое обновление</b></td><td style="text-align: center;" scope="row"><b>Просмотр</b></td></TR><TR><td nowrap width='1%' scope="row"><b>E-mail</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>KB - категории</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>PDF - шаблоны</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Адресаты</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>База знаний</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Внешние учётные записи (EAPM)</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Встречи</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Договоры</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Документы</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Задачи</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Заметки</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Звонки</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Индекс</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Индексирование</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Кампании</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Карты</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Карты - адрес кэш</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Карты - маркеры</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Карты - районы</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Контакты</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Контрагенты</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Контроль процесса</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Места</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Обновления обращения</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Обращения</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Отложенные звонки</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Отчёт</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Отчёты по расписанию</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Ошибки</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Пользователи</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Предварит. контакты</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Предложения</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Продукция - категории</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Проектные задачи</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Проекты</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Проекты - шаблоны</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Процессы</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Рассылки E-mail</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Сводки</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Сделки</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Серверы исходящей почты (SMTP)</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>События</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>События обращения</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Счета</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Товары</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Уведомления</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Управление Группами пользователей</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Фрагменты шаблонов</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Цели - списки</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Шаблоны проектных задач</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Шаблоны эл. почты</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Доступен</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>Все</b></div></td></TR></TABLE>
</div>
</div>
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
</script><script type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/javascript/popup_helper.js'), $this);?>
'></script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'cache/include/javascript/sugar_grp_yui_widgets.js'), $this);?>
"></script>
<script type="text/javascript">
var Users_detailview_tabs = new YAHOO.widget.TabView("Users_detailview_tabs");
Users_detailview_tabs.selectTab(0);
</script>
<script type="text/javascript" src="include/InlineEditing/inlineEditing.js"></script>
<script type="text/javascript" src="modules/Favorites/favorites.js"></script>
<script type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Users/DetailView.js'), $this);?>
'></script>