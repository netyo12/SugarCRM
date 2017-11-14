

<script language="javascript">
{literal}
SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0;
}, SUGAR.themes.actionMenu);
{/literal}
</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
</form>
<ul id="detail_header_action_menu" class="clickMenu fancymenu" ><li class="sugar_action_button" ><input title="Править" accessKey="i" name="Edit" id="edit_button" value="Править" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='Users'; _form.return_action.value='DetailView'; _form.return_id.value='{$fields.id.value}'; _form.action.value='EditView';_form.submit();" type="button"/><ul id class="subnav" ><li><input id="duplicate_button" title="Дублировать" accessKey="u" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='Users'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView';_form.submit();" type="button" name="Duplicate" value="Дублировать"/></li><li><input id="delete_button" type="button" class="button" onclick="confirmDelete();" value="Удалить" //></li><li><input title="Установить стандартные значения" class="button" LANGUAGE="javascript" onclick="if(confirm('Вы действительно хотите сбросить все настройки данного пользователя?')) window.location='index.php?module=Users&action=resetPreferences&reset_preferences=true&record={$fields.id.value}';" type="button" name="password" value="Установить стандартные значения"/></li><li><input title="Сбросить настройки закладки " ГЛАВНАЯ class="button" LANGUAGE="javascript" onclick="if(confirm('Вы действительно хотите сбросить настройки закладки ГЛАВНАЯ?')) window.location='index.php?module=Users&action=DetailView&reset_homepage=true&record={$fields.id.value}';" type="button" name="password" value="Сбросить настройки закладки "/></li><li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Users", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li></ul></li></ul>
</div>
</td>
<td align="right" width="20%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="Users_detailview_tabs"
class="yui-navset detailview_tabs"
>

<ul class="yui-nav">

<li><a id="tab0" href="javascript:void(0)"><em>{sugar_translate label='LBL_USER_INFORMATION' module='Users'}</em></a></li>

<li {if $IS_GROUP_OR_PORTAL}style="display: none;"{/if}>
<a id="tab1" href="javascript:void(0)"><em>{$MOD.LBL_ADVANCED}</em></a>
</li>
{if $SHOW_ROLES}
<li>
<a id="tab2" href="javascript:void(0)"><em>{$MOD.LBL_USER_ACCESS}</em></a>
</li>
{/if}
</ul>
<div class="yui-content">
<div id='tabcontent0'>
<div id='detailpanel_1' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<!-- PANEL CONTAINER HERE.. -->
<table id='LBL_USER_INFORMATION' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.full_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="name" field="full_name" width='37.5%'  >
{if !$fields.full_name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.full_name.value) <= 0}
{assign var="value" value=$fields.full_name.default_value }
{else}
{assign var="value" value=$fields.full_name.value }
{/if} 
<span class="sugar_field" id="{$fields.full_name.name}">{$fields.full_name.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.user_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_USER_NAME' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="user_name" field="user_name" width='37.5%'  >
{if !$fields.user_name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.user_name.value) <= 0}
{assign var="value" value=$fields.user_name.default_value }
{else}
{assign var="value" value=$fields.user_name.value }
{/if} 
<span class="sugar_field" id="{$fields.user_name.name}">{$fields.user_name.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.status.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="enum" field="status" width='37.5%'  >
{if !$fields.status.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.status.options)}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.options }">
{ $fields.status.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.value }">
{ $fields.status.options[$fields.status.value]}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.UserType.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_USER_TYPE' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="enum" field="UserType" width='37.5%'  >
{if !$fields.UserType.hidden}
{counter name="panelFieldCount"}
<span id="UserType" class="sugar_field">{$USER_TYPE_READONLY}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_USER_INFORMATION").style.display='none';</script>
{/if}
<div id='detailpanel_2' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EMPLOYEE_INFORMATION' module='Users'}
<script>
      document.getElementById('detailpanel_2').className += ' expanded';
    </script>
</h4>
<!-- PANEL CONTAINER HERE.. -->
<table id='LBL_EMPLOYEE_INFORMATION' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.employee_status.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_EMPLOYEE_STATUS' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="employee_status" width='37.5%'  >
{if !$fields.employee_status.hidden}
{counter name="panelFieldCount"}
<span id='employee_status_span'>
{$fields.employee_status.value}
</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.show_on_employees.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SHOW_ON_EMPLOYEES' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="bool" field="show_on_employees" width='37.5%'  >
{if !$fields.show_on_employees.hidden}
{counter name="panelFieldCount"}

{if strval($fields.show_on_employees.value) == "1" || strval($fields.show_on_employees.value) == "yes" || strval($fields.show_on_employees.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.show_on_employees.name}" id="{$fields.show_on_employees.name}" value="$fields.show_on_employees.value" disabled="true" {$checked}>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.title.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TITLE' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="enum" field="title" width='37.5%'  >
{if !$fields.title.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.title.options)}
<input type="hidden" class="sugar_field" id="{$fields.title.name}" value="{ $fields.title.options }">
{ $fields.title.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.title.name}" value="{ $fields.title.value }">
{ $fields.title.options[$fields.title.value]}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.phone_work.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_WORK_PHONE' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="phone" field="phone_work" width='37.5%'  class="phone">
{if !$fields.phone_work.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.phone_work.value)}
{assign var="phone_value" value=$fields.phone_work.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.reports_to_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_REPORTS_TO_NAME' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="relate" field="reports_to_name" width='37.5%'  >
{if !$fields.reports_to_name.hidden}
{counter name="panelFieldCount"}

<span id="reports_to_id" class="sugar_field" data-id-value="{$fields.reports_to_id.value}">{$fields.reports_to_name.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.phone_mobile.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_MOBILE_PHONE' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="phone" field="phone_mobile" width='37.5%'  class="phone">
{if !$fields.phone_mobile.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.phone_mobile.value)}
{assign var="phone_value" value=$fields.phone_mobile.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.date_entered.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="datetime" field="date_entered" width='37.5%'  >
{if !$fields.date_entered.hidden}
{counter name="panelFieldCount"}


{assign var="value" value=11/13/2017 }
<span class="sugar_field" id="{$fields.date_entered.name}">{$value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.phone_home.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_HOME_PHONE' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="phone" field="phone_home" width='37.5%'  class="phone">
{if !$fields.phone_home.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.phone_home.value)}
{assign var="phone_value" value=$fields.phone_home.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.description.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="text" field="description" width='37.5%' colspan='3' >
{if !$fields.description.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.description.name|escape:'html'|url2html|nl2br}">{$fields.description.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(2, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EMPLOYEE_INFORMATION").style.display='none';</script>
{/if}
</div>
<div id='tabcontent1'>
<div id="detailpanel_2" class="detail view  detail508 expanded">
<div id="settings">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th colspan='4' align="left" width="100%" valign="top">
<h4>
<slot>{$MOD.LBL_USER_SETTINGS}</slot>
</h4>
</th>
</tr>
<tr>
<td scope="row">
<slot>{$MOD.LBL_RECEIVE_NOTIFICATIONS|strip_semicolon}:</slot>
</td>
<td>
<slot><input class="checkbox" type="checkbox" disabled {$RECEIVE_NOTIFICATIONS}></slot>
</td>
<td>
<slot>{$MOD.LBL_RECEIVE_NOTIFICATIONS_TEXT}&nbsp;</slot>
</td>
</tr>
<tr>
<td scope="row" valign="top">
<slot>{$MOD.LBL_REMINDER|strip_semicolon}:
</td>
<!--
<td valign="top" nowrap><slot>{include file="modules/Meetings/tpls/reminders.tpl"}</slot></td>
-->
<td valign="top" nowrap>
<slot>{include file="modules/Reminders/tpls/remindersDefaults.tpl"}</slot>
</td>
<td>
<slot>{$MOD.LBL_REMINDER_TEXT}&nbsp;</slot>
</td>
</tr>
<tr>
<td valign="top" scope="row">
<slot>{$MOD.LBL_MAILMERGE|strip_semicolon}:</slot>
</td>
<td valign="top" nowrap>
<slot><input tabindex='3' name='mailmerge_on' disabled class="checkbox"
type="checkbox" {$MAILMERGE_ON}></slot>
</td>
<td>
<slot>{$MOD.LBL_MAILMERGE_TEXT}&nbsp;</slot>
</td>
</tr>
<tr>
<td valign="top" scope="row">
<slot>{$MOD.LBL_SETTINGS_URL|strip_semicolon}:</slot>
</td>
<td valign="top" nowrap>
<slot>{$SETTINGS_URL}</slot>
</td>
<td>
<slot>{$MOD.LBL_SETTINGS_URL_DESC}&nbsp;</slot>
</td>
</tr>
<tr>
<td scope="row" valign="top">
<slot>{$MOD.LBL_EXPORT_DELIMITER|strip_semicolon}:</slot>
</td>
<td>
<slot>{$EXPORT_DELIMITER}</slot>
</td>
<td>
<slot>{$MOD.LBL_EXPORT_DELIMITER_DESC}</slot>
</td>
</tr>
<tr>
<td scope="row" valign="top">
<slot>{$MOD.LBL_EXPORT_CHARSET|strip_semicolon}:</slot>
</td>
<td>
<slot>{$EXPORT_CHARSET_DISPLAY}</slot>
</td>
<td>
<slot>{$MOD.LBL_EXPORT_CHARSET_DESC}</slot>
</td>
</tr>
<tr>
<td scope="row" valign="top">
<slot>{$MOD.LBL_USE_REAL_NAMES|strip_semicolon}:</slot>
</td>
<td>
<slot><input tabindex='3' name='use_real_names' disabled class="checkbox"
type="checkbox" {$USE_REAL_NAMES}></slot>
</td>
<td>
<slot>{$MOD.LBL_USE_REAL_NAMES_DESC}</slot>
</td>
</tr>
{if $DISPLAY_EXTERNAL_AUTH}
<tr>
<td scope="row" valign="top">
<slot>{$EXTERNAL_AUTH_CLASS|strip_semicolon}:</slot>
</td>
<td valign="top" nowrap>
<slot><input id="external_auth_only" name="external_auth_only" type="checkbox"
class="checkbox" {$EXTERNAL_AUTH_ONLY_CHECKED}></slot>
</td>
<td>
<slot>{$MOD.LBL_EXTERNAL_AUTH_ONLY} {$EXTERNAL_AUTH_CLASS}</slot>
</td>
</tr>
{/if}
</table>
</div>
<div id='locale'>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th colspan='4' align="left" width="100%" valign="top">
<h4>
<slot>{$MOD.LBL_USER_LOCALE}</slot>
</h4>
</th>
</tr>
<tr>
<td width="15%" scope="row">
<slot>{$MOD.LBL_DATE_FORMAT|strip_semicolon}:</slot>
</td>
<td>
<slot>{$DATEFORMAT}&nbsp;</slot>
</td>
<td>
<slot>{$MOD.LBL_DATE_FORMAT_TEXT}&nbsp;</slot>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<slot>{$MOD.LBL_TIME_FORMAT|strip_semicolon}:</slot>
</td>
<td>
<slot>{$TIMEFORMAT}&nbsp;</slot>
</td>
<td>
<slot>{$MOD.LBL_TIME_FORMAT_TEXT}&nbsp;</slot>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<slot>{$MOD.LBL_TIMEZONE|strip_semicolon}:</slot>
</td>
<td nowrap>
<slot>{$TIMEZONE}&nbsp;</slot>
</td>
<td>
<slot>{$MOD.LBL_ZONE_TEXT}&nbsp;</slot>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<slot>{$MOD.LBL_CURRENCY|strip_semicolon}:</slot>
</td>
<td>
<slot>{$CURRENCY_DISPLAY}&nbsp;</slot>
</td>
<td>
<slot>{$MOD.LBL_CURRENCY_TEXT}&nbsp;</slot>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<slot>{$MOD.LBL_CURRENCY_SIG_DIGITS|strip_semicolon}:</slot>
</td>
<td>
<slot>{$CURRENCY_SIG_DIGITS}&nbsp;</slot>
</td>
<td>
<slot>{$MOD.LBL_CURRENCY_SIG_DIGITS_DESC}&nbsp;</slot>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<slot>{$MOD.LBL_NUMBER_GROUPING_SEP|strip_semicolon}:</slot>
</td>
<td>
<slot>{$NUM_GRP_SEP}&nbsp;</slot>
</td>
<td>
<slot>{$MOD.LBL_NUMBER_GROUPING_SEP_TEXT}&nbsp;</slot>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<slot>{$MOD.LBL_DECIMAL_SEP|strip_semicolon}:</slot>
</td>
<td>
<slot>{$DEC_SEP}&nbsp;</slot>
</td>
<td>
<slot></slot>{$MOD.LBL_DECIMAL_SEP_TEXT}&nbsp;</td>
</tr>
</tr>
<tr>
<td width="15%" scope="row">
<slot>{$MOD.LBL_LOCALE_DEFAULT_NAME_FORMAT|strip_semicolon}:</slot>
</td>
<td>
<slot>{$NAME_FORMAT}&nbsp;</slot>
</td>
<td>
<slot></slot>{$MOD.LBL_LOCALE_NAME_FORMAT_DESC}&nbsp;</td>
</tr>
</table>
</div>
<div id='calendar_options'>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th colspan='4' align="left" width="100%" valign="top">
<h4>
<slot>{$MOD.LBL_CALENDAR_OPTIONS}</slot>
</h4>
</th>
</tr>
<tr>
<td width="15%" scope="row">
<slot>{$MOD.LBL_PUBLISH_KEY|strip_semicolon}:</slot>
</td>
<td width="20%">
<slot>{$CALENDAR_PUBLISH_KEY}&nbsp;</slot>
</td>
<td width="65%">
<slot>{$MOD.LBL_CHOOSE_A_KEY}&nbsp;</slot>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<slot>
<nobr>{$MOD.LBL_YOUR_PUBLISH_URL|strip_semicolon}:</nobr>
</slot>
</td>
<td colspan=2>{if $CALENDAR_PUBLISH_KEY}{$CALENDAR_PUBLISH_URL}{else}{$MOD.LBL_NO_KEY}{/if}</td>
</tr>
<tr>
<td width="15%" scope="row">
<slot>{$MOD.LBL_SEARCH_URL|strip_semicolon}:</slot>
</td>
<td colspan=2>
<slot>{if $CALENDAR_PUBLISH_KEY}{$CALENDAR_SEARCH_URL}{else}{$MOD.LBL_NO_KEY}{/if}</slot>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<slot>{$MOD.LBL_ICAL_PUB_URL|strip_semicolon}: {sugar_help text=$MOD.LBL_ICAL_PUB_URL_HELP}</slot>
</td>
<td colspan=2>
<slot>{if $CALENDAR_PUBLISH_KEY}{$CALENDAR_ICAL_URL}{else}{$MOD.LBL_NO_KEY}{/if}</slot>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<slot>{$MOD.LBL_FDOW|strip_semicolon}:</slot>
</td>
<td>
<slot>{$FDOWDISPLAY}&nbsp;</slot>
</td>
<td>
<slot></slot>{$MOD.LBL_FDOW_TEXT}&nbsp;</td>
</tr>
</table>
</div>
<div id='edit_tabs'>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th colspan='4' align="left" width="100%" valign="top">
<h4>
<slot>{$MOD.LBL_LAYOUT_OPTIONS}</slot>
</h4>
</th>
</tr>
<tr>
<td width="15%" scope="row">
<slot>{$MOD.LBL_USE_GROUP_TABS|strip_semicolon}:</slot>
</td>
<td>
<slot><input class="checkbox" type="checkbox" disabled {$USE_GROUP_TABS}></slot>
</td>
<td>
<slot>{$MOD.LBL_NAVIGATION_PARADIGM_DESCRIPTION}&nbsp;</slot>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<slot>{$MOD.LBL_SUBPANEL_TABS|strip_semicolon}:</slot>
</td>
<td>
<slot><input class="checkbox" type="checkbox" disabled {$SUBPANEL_TABS}></slot>
</td>
<td>
<slot>{$MOD.LBL_SUBPANEL_TABS_DESCRIPTION}&nbsp;</slot>
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
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script><script type='text/javascript' src='{sugar_getjspath file='modules/javascript/popup_helper.js'}'></script>
<script type="text/javascript" src="{sugar_getjspath file='cache/include/javascript/sugar_grp_yui_widgets.js'}"></script>
<script type="text/javascript">
var Users_detailview_tabs = new YAHOO.widget.TabView("Users_detailview_tabs");
Users_detailview_tabs.selectTab(0);
</script>
<script type="text/javascript" src="include/InlineEditing/inlineEditing.js"></script>
<script type="text/javascript" src="modules/Favorites/favorites.js"></script>
<script type='text/javascript' src='{sugar_getjspath file='modules/Users/DetailView.js'}'></script>