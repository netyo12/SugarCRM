<?php /* Smarty version 2.6.29, created on 2017-11-13 15:45:20
         compiled from include/SubPanel/tpls/SubPanelDynamic.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'include/SubPanel/tpls/SubPanelDynamic.tpl', 67, false),array('function', 'sugar_action_menu', 'include/SubPanel/tpls/SubPanelDynamic.tpl', 68, false),)), $this); ?>
<?php echo $this->_tpl_vars['PAGINATION']; ?>

<table cellpadding="0" cellspacing="0" border="0"  data-empty="<?php echo $this->_tpl_vars['APP']['MSG_LIST_VIEW_NO_RESULTS_BASIC']; ?>
" class="list view table-responsive">
    <thead>
        <tr>
            <?php $_from = $this->_tpl_vars['HEADER_CELLS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['colHeader'] => $this->_tpl_vars['header']):
?>
                <th data-type="html"><?php echo $this->_tpl_vars['header']; ?>
</th>
            <?php endforeach; endif; unset($_from); ?>
            <th data-type="html"><!-- extra th for the button --></th>
        </tr>
        <tr id="<?php echo $this->_tpl_vars['SUBPANEL_ID']; ?>
_search" class="pagination" style="<?php echo $this->_tpl_vars['DISPLAY_SPS']; ?>
">
            <td align="right" colspan="20">
                <?php echo $this->_tpl_vars['SUBPANEL_SEARCH']; ?>

            </td>
        </tr>
    </thead>
    <tbody>
    <?php $_from = $this->_tpl_vars['ROWS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rowHeader'] => $this->_tpl_vars['row']):
?>
        <tr>
            <?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['colHeader'] => $this->_tpl_vars['cell']):
?>
                <td><?php echo $this->_tpl_vars['cell']; ?>
</td>
            <?php endforeach; endif; unset($_from); ?>
            <td>
                <?php if (count($this->_tpl_vars['ROWS_BUTTONS'][$this->_tpl_vars['rowHeader']]) > 0): ?>
                    <?php echo smarty_function_sugar_action_menu(array('id' => ($this->_tpl_vars['rowHeader']),'buttons' => $this->_tpl_vars['ROWS_BUTTONS'][$this->_tpl_vars['rowHeader']],'class' => 'clickMenu subpanel records fancymenu button','flat' => false), $this);?>

                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; endif; unset($_from); ?>
    </tbody>
</table>