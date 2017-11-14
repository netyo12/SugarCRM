<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    //module
    'LBL_MODULE_NAME' => 'Документы',
    'LBL_MODULE_TITLE' => 'Документы - ГЛАВНАЯ',
    'LNK_NEW_DOCUMENT' => 'Создать документ',
    'LNK_DOCUMENT_LIST' => 'Документы',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск документа',
    //vardef labels
    'LBL_NAME' => 'Название документа',
    'LBL_DESCRIPTION' => 'Описание',
    'LBL_ASSIGNED_TO' => 'Ответственный(ая):',
    'LBL_CATEGORY' => 'Категория',
    'LBL_SUBCATEGORY' => 'Подкатегория',
    'LBL_STATUS' => 'Статус',
    'LBL_IS_TEMPLATE' => 'Шаблон',
    'LBL_TEMPLATE_TYPE' => 'Тип документа',
    'LBL_REVISION_NAME' => 'Номер версии',
    'LBL_MIME' => 'Тип MIME',
    'LBL_REVISION' => 'Версия',
    'LBL_DOCUMENT' => 'Связанные документы',
    'LBL_LATEST_REVISION' => 'Последняя версия',
    'LBL_CHANGE_LOG' => 'Журнал изменений:',
    'LBL_ACTIVE_DATE' => 'Дата публикации',
    'LBL_EXPIRATION_DATE' => 'Дата окончания',
    'LBL_FILE_EXTENSION' => 'Расширение файла',

    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Неопределенный',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Новый документ',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Название документа:',
    'LBL_FILENAME' => 'Имя файла:',
    'LBL_FILE_UPLOAD' => 'Файл:',
    'LBL_DOC_VERSION' => 'Версия:',
    'LBL_CATEGORY_VALUE' => 'Категория:',
    'LBL_SUBCATEGORY_VALUE' => 'Подкатегория:',
    'LBL_DOC_STATUS' => 'Статус:',
    'LBL_DET_TEMPLATE_TYPE' => 'Тип документа:',
    'LBL_DOC_DESCRIPTION' => 'Описание:',
    'LBL_DOC_ACTIVE_DATE' => 'Дата публикации:',
    'LBL_DOC_EXP_DATE' => 'Актуален до:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Список документов',
    'LBL_LIST_DOCUMENT' => 'Документ',
    'LBL_LIST_CATEGORY' => 'Категория',
    'LBL_LIST_SUBCATEGORY' => 'Подкатегория',
    'LBL_LIST_REVISION' => 'Версия',
    'LBL_LIST_LAST_REV_CREATOR' => 'Опубликовано',
    'LBL_LIST_LAST_REV_DATE' => 'Дата изменения',
    'LBL_LIST_VIEW_DOCUMENT' => 'Просмотр',
    'LBL_LIST_ACTIVE_DATE' => 'Дата публикации',
    'LBL_LIST_EXP_DATE' => 'Актуален до',
    'LBL_LIST_STATUS' => 'Статус',

    //document search form.
    'LBL_SF_CATEGORY' => 'Категория:',
    'LBL_SF_SUBCATEGORY' => 'Подкатегория:',

    'DEF_CREATE_LOG' => 'Документ создан',

    //error messages
    'ERR_DOC_NAME' => 'Название документа',
    'ERR_DOC_ACTIVE_DATE' => 'Дата публикации',
    'ERR_FILENAME' => 'Имя файла',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Название документа',

    'LBL_EDIT_BUTTON' => 'Править',
    'LBL_REMOVE' => 'Удалить',

);
