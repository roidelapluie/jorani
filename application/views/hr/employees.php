<?php
/*
 * This file is part of Jorani.
 *
 * Jorani is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jorani is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jorani.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @copyright  Copyright (c) 2014 - 2015 Benjamin BALET
 */
?>

<div class="row-fluid">
               <div class="span12">

                              <?php echo $flash_partial_view;
?>

<h1><?php echo lang('hr_employees_title');
?>&nbsp;
<?php echo $help;
?></h1>

<div class="row-fluid">
               <div class="span4">
                              <input type="hidden" name="entity" id="entity" />
                                          <label for="txtEntity"><?php echo lang('hr_employees_field_entity');
?></label>
<div class="input-append">
               <input type="text" id="txtEntity" name="txtEntity" readonly />
                                     <a id="cmdSelectEntity" class="btn btn-primary"><?php echo lang('hr_employees_button_select');
?></a>
</div>
</div>
<div class="span4">
               <input type="checkbox" id="chkIncludeChildren" /> <?php echo lang('hr_employees_field_subdepts');
?>
</div>
<div class="span4">
               <?php echo lang('hr_employees_description');
?>
</div>
</div>

<table cellpadding="0" cellspacing="0" border="0" class="display" id="users" width="100%">
                                       <thead>
                                       <tr>
                                       <th><?php echo lang('hr_employees_thead_id');
?></th>
<th><?php echo lang('hr_employees_thead_firstname');
?></th>
<th><?php echo lang('hr_employees_thead_lastname');
?></th>
<th><?php echo lang('hr_employees_thead_email');
?></th>
<th><?php echo lang('hr_employees_thead_entity');
?></th>
<th><?php echo lang('hr_employees_thead_contract');
?></th>
<th><?php echo lang('hr_employees_thead_manager');
?></th>
</tr>
</thead>
<tbody class="context" data-toggle="context" data-target="#context-menu">
                                       </tbody>
                                       </table>
                                       </div>
                                       </div>

                                       <div class="row-fluid">
                                                   <div class="span2">
                                                               <a href="<?php echo base_url();?>users/create" class="btn btn-primary"><i class="icon-plus-sign icon-white"></i>&nbsp;
<?php echo lang('hr_employees_button_create_user');
?></a>
</div>
<div class="span2">
               <a href="#" id="cmdExportEmployees" class="btn btn-primary"><i class="fa fa-file-excel-o"></i>&nbsp;
<?php echo lang('hr_employees_button_export');
?></a>
</div>
<div class="span8">&nbsp;
</div>
</div>

<div class="row-fluid"><div class="span12">&nbsp;
</div></div>

<div id="frmSelectEntity" class="modal hide fade">
                                    <div class="modal-header">
                                                <a href="#" onclick="$('#frmSelectEntity').modal('hide');" class="close">&times;
</a>
<h3><?php echo lang('hr_employees_popup_entity_title');
?></h3>
</div>
<div class="modal-body" id="frmSelectEntityBody">
                               <img src="<?php echo base_url();?>assets/images/loading.gif">
                                        </div>
                                        <div class="modal-footer">
                                                    <a href="#" onclick="select_entity();" class="btn secondary"><?php echo lang('hr_employees_popup_entity_button_ok');
?></a>
<a href="#" onclick="$('#frmSelectEntity').modal('hide');" class="btn secondary"><?php echo lang('hr_employees_popup_entity_button_cancel');
?></a>
</div>
</div>

<div id="context-menu">
        <ul class="dropdown-menu" role="menu">
                                           <li><a tabindex="-1" href="#" data-action="<?php echo base_url();?>hr/leaves/create/{id}"><i class="icon-plus"></i>&nbsp;
<?php echo lang('hr_employees_thead_link_create_leave');
?></a></li>
<li><a tabindex="-1" href="#" data-action="<?php echo base_url();?>users/edit/{id}?source=hr%2Femployees"><i class="icon-pencil"></i>&nbsp;
<?php echo lang('hr_employees_thead_tip_edit');
?></a></li>
<li><a tabindex="-1" href="#" data-action="<?php echo base_url();?>entitleddays/user/{id}"><i class="icon-edit"></i>&nbsp;
<?php echo lang('hr_employees_thead_tip_entitlment');
?></a></li>
<li><a tabindex="-1" href="#" data-action="<?php echo base_url();?>hr/leaves/{id}"><i class="icon-list-alt"></i>&nbsp;
<?php echo lang('hr_employees_thead_link_leaves');
?></a></li>
<?php if ($this->config->item('disable_overtime') == FALSE) {
    ?>
    <li><a tabindex="-1" href="#" data-action="<?php echo base_url();?>hr/overtime/{id}"><i class="icon-list-alt"></i>&nbsp;
    <?php echo lang('hr_employees_thead_link_extra');
    ?></a></li>
    <?php
} ?>
<li><a tabindex="-1" href="#" data-action="<?php echo base_url();?>hr/counters/{id}"><i class="icon-info-sign"></i>&nbsp;
<?php echo lang('hr_employees_thead_link_balance');
?></a></li>
<li><a tabindex="-1" href="#" data-action="<?php echo base_url();?>hr/presence/employees/{id}"><i class="fa fa-pie-chart"></i>&nbsp;
<?php echo lang('hr_employees_thead_link_presence');
?></a></li>
<li><a tabindex="-1" href="#" data-action="<?php echo base_url();?>calendar/year/{id}"><i class="icon-calendar"></i>&nbsp;
<?php echo lang('hr_employees_thead_link_calendar');
?></a></li>
<li><a tabindex="-1" href="#" data-action="<?php echo base_url();?>requests/delegations/{id}"><i class="icon-share-alt"></i>&nbsp;
<?php echo lang('hr_employees_thead_link_delegation');
?></a></li>
</ul>
</div>

<div class="modal hide fade" id="frmContextMenu">
                                    <div class="modal-body">
                                                <a class="context-mobile" href="<?php echo base_url();?>hr/leaves/create/{id}"><i class="icon-plus"></i>&nbsp;
<?php echo lang('hr_employees_thead_link_create_leave');
?></a><br />
<a class="context-mobile" href="<?php echo base_url();?>users/edit/{id}?source=hr%2Femployees"><i class="icon-pencil"></i>&nbsp;
<?php echo lang('hr_employees_thead_tip_edit');
?></a><br />
<a class="context-mobile" href="<?php echo base_url();?>entitleddays/user/{id}"><i class="icon-edit"></i>&nbsp;
<?php echo lang('hr_employees_thead_tip_entitlment');
?></a><br />
<a class="context-mobile" href="<?php echo base_url();?>hr/leaves/{id}"><i class="icon-list-alt"></i>&nbsp;
<?php echo lang('hr_employees_thead_link_leaves');
?></a><br />
<?php if ($this->config->item('disable_overtime') == FALSE) {
    ?>
    <a class="context-mobile" href="<?php echo base_url();?>hr/overtime/{id}"><i class="icon-list-alt"></i>&nbsp;
    <?php echo lang('hr_employees_thead_link_extra');
    ?></a><br />
    <?php
} ?>
<a class="context-mobile" href="<?php echo base_url();?>hr/counters/{id}"><i class="icon-info-sign"></i>&nbsp;
<?php echo lang('hr_employees_thead_link_balance');
?></a><br />
<a class="context-mobile" href="<?php echo base_url();?>hr/presence/employees/{id}"><i class="fa fa-pie-chart"></i>&nbsp;
<?php echo lang('hr_employees_thead_link_presence');
?></a><br />
<a class="context-mobile" href="<?php echo base_url();?>calendar/year/{id}"><i class="icon-calendar"></i>&nbsp;
<?php echo lang('hr_employees_thead_link_calendar');
?></a><br />
<a class="context-mobile" href="<?php echo base_url();?>requests/delegations/{id}"><i class="icon-share-alt"></i>&nbsp;
<?php echo lang('hr_employees_thead_link_delegation');
?></a>
</div>
</div>

<div class="modal hide" id="frmModalAjaxWait" data-backdrop="static" data-keyboard="false">
                               <div class="modal-header">
                                              <h1><?php echo lang('global_msg_wait');
?></h1>
</div>
<div class="modal-body">
               <img src="<?php echo base_url();?>assets/images/loading.gif"  align="middle">
                        </div>
                        </div>

                        <link href="<?php echo base_url();?>assets/datatable/css/jquery.dataTables.css" rel="stylesheet">
                                   <script type="text/javascript" src="<?php echo base_url();?>assets/datatable/js/jquery.dataTables.min.js"></script>
                                           <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.pers-brow.js"></script>
                                                   <script type="text/javascript" src="<?php echo base_url();?>assets/js/context.menu.min.js"></script>
                                                           <script type="text/javascript" src="<?php echo base_url();?>assets/js/toe.min.js"></script>
                                                                   <script type="text/javascript">
                                                                           var entity = 0; //Root of the tree by default
var entityName = '';
var includeChildren = true;
var contextObject;
var oTable;

//Handle choose of entity with the modal form "select an entity". Update cookie with selected values
function select_entity() {
    entity = $('#organization').jstree('get_selected')[0];
    entityName = $('#organization').jstree().get_text(entity);
    includeChildren = $('#chkIncludeChildren').is(':checked');
    $('#entity').val(entity);
    $('#txtEntity').val(entityName);
    $.cookie('entity', entity);
    $.cookie('entityName', entityName);
    $.cookie('includeChildren', includeChildren);
    $("#frmSelectEntity").modal('hide');
    //Refresh datatable
    $('#frmModalAjaxWait').modal('show');
    oTable.api().ajax.url('<?php echo base_url();?>hr/employees/entity/' + entity + '/' + includeChildren)
    .load(function() {
        $("#frmModalAjaxWait").modal('hide');
    }, true);
}

//Prevent text selection after double click
function clearSelection() {
    if(document.selection && document.selection.empty) {
        document.selection.empty();
    } else if(window.getSelection) {
        var sel = window.getSelection();
        sel.removeAllRanges();
    }
}

$(function () {
    //Handle a context menu of the DataTable
    $('.context').contextmenu({
before: function (e, element, target) {
            e.preventDefault();
            if (oTable.fnSettings().fnRecordsDisplay() != 0) {
                contextObject = e.target;
                return true;
            } else {
                return false;
            }
        },
onItem: function(context,e) {
            var action = null;
            if (e != "a") {
                action = $(e.target).closest("a").data("action");
            } else {
                action = $(e.target).data("action");
            }
            var id = $(contextObject).closest("tr").find('td:eq(0)').text();
            var url = action.replace("{id}", id.trim());
            window.location = url;
        }
    });

    //Taphold on mobile, display contextual menu as a popup
    $(document).on('taphold', '.context', function(e) {
        id = $(e.target).closest("tr").find('td:eq(0)').text();
        $("#frmContextMenu").modal('show');
        $('.context-mobile').each(function() {
            action =  $(this).attr( 'href');
            var url = action.replace("{id}", id.trim());
            $(this).attr( 'href', url);
        });
    });

    //On double click, display contextual menu as a popup
    $(document).on('dblclick', '.context', function (e) {
        clearSelection();
        id = $(e.target).closest("tr").find('td:eq(0)').text();
        $("#frmContextMenu").modal('show');
        $('.context-mobile').each(function() {
            action =  $(this).attr( 'href');
            var url = action.replace("{id}", id.trim());
            $(this).attr( 'href', url);
        });
    });

    //On keying ESC, hide context menu
    $("body").on("keyup", function(e) {
        if (e.keyCode == 27) {
            if ($('#frmContextMenu').hasClass('in')) {
                $('#frmContextMenu').modal('hide');
            }
        }
    });

    //Cookie has value ? take -1 by default
    if($.cookie('entity') != null) {
        entity = $.cookie('entity');
        entityName = $.cookie('entityName');
        includeChildren = $.cookie('includeChildren');
        //Parse boolean value contained into the string
        includeChildren = $.parseJSON(includeChildren.toLowerCase());
        $('#txtEntity').val(entityName);
        $('#chkIncludeChildren').prop('checked', includeChildren);
    } else { //Set default value
        $.cookie('entity', entity);
        $.cookie('entityName', entityName);
        $.cookie('includeChildren', includeChildren);
    }

    //Transform the HTML table in a fancy datatable
    oTable = $('#users').dataTable({
"ajax": '<?php echo base_url();?>hr/employees/entity/' + entity + '/' + includeChildren,
        "iDisplayLength": 50,
"oLanguage": {
"sEmptyTable":     "<?php echo lang('datatable_sEmptyTable');?>",
"sInfo":           "<?php echo lang('datatable_sInfo');?>",
"sInfoEmpty":      "<?php echo lang('datatable_sInfoEmpty');?>",
"sInfoFiltered":   "<?php echo lang('datatable_sInfoFiltered');?>",
"sInfoPostFix":    "<?php echo lang('datatable_sInfoPostFix');?>",
"sInfoThousands":  "<?php echo lang('datatable_sInfoThousands');?>",
"sLengthMenu":     "<?php echo lang('datatable_sLengthMenu');?>",
"sLoadingRecords": "<?php echo lang('datatable_sLoadingRecords');?>",
"sProcessing":     "<?php echo lang('datatable_sProcessing');?>",
"sSearch":         "<?php echo lang('datatable_sSearch');?>",
"sZeroRecords":    "<?php echo lang('datatable_sZeroRecords');?>",
"oPaginate": {
"sFirst":    "<?php echo lang('datatable_sFirst');?>",
"sLast":     "<?php echo lang('datatable_sLast');?>",
"sNext":     "<?php echo lang('datatable_sNext');?>",
"sPrevious": "<?php echo lang('datatable_sPrevious');?>"
            },
"oAria": {
"sSortAscending":  "<?php echo lang('datatable_sSortAscending');?>",
"sSortDescending": "<?php echo lang('datatable_sSortDescending');?>"
            }
        }
    });
    $("#frmEntitledDays").alert();

    //Popup select entity
    $("#cmdSelectEntity").click(function() {
        $("#frmSelectEntity").modal('show');
        $("#frmSelectEntityBody").load('<?php echo base_url(); ?>organization/select');
    });

    //Prevent to load always the same content (refreshed each time)
    $('#frmEntitledDays').on('hidden', function() {
        $(this).removeData('modal');
    });

    $("#chkIncludeChildren").on('change', function() {
        includeChildren = $('#chkIncludeChildren').is(':checked');
        $.cookie('includeChildren', includeChildren);
        //Refresh datatable
        $('#frmModalAjaxWait').modal('show');
        oTable.api().ajax.url('<?php echo base_url();?>hr/employees/entity/' + entity + '/' + includeChildren)
        .load(function() {
            $("#frmModalAjaxWait").modal('hide');
        }, true);
    });

    $("#cmdExportEmployees").click(function() {
        window.location = '<?php echo base_url();?>hr/employees/export/' + entity + '/' + includeChildren;
    });
});
</script>

