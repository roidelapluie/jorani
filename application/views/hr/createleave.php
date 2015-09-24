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

<h2><?php echo lang('hr_leaves_create_title');
?> &nbsp;
<a href="<?php echo lang('global_link_doc_page_request_leave');?>" title="<?php echo lang('global_link_tooltip_documentation');?>" target="_blank" rel="nofollow"><i class="icon-question-sign"></i></a>
            &nbsp;
<span class="muted">(<?php echo $name ?>)</span>
                </h2>

                <div class="row-fluid">
                               <div class="span8">

                                              <?php echo validation_errors();
?>

<?php echo form_open($form_action) ?>

<label for="viz_startdate" required><?php echo lang('hr_leaves_create_field_start');
?></label>
<input type="text" name="viz_startdate" id="viz_startdate" value="<?php echo set_value('startdate'); ?>" />
                        <input type="hidden" name="startdate" id="startdate" />
                                    <select name="startdatetype" id="startdatetype">
                                            <option value="Morning" selected><?php echo lang('Morning');
?></option>
<option value="Afternoon"><?php echo lang('Afternoon');
?></option>
</select><br />

<label for="viz_enddate" required><?php echo lang('hr_leaves_create_field_end');
?></label>
<input type="text" name="viz_enddate" id="viz_enddate" value="<?php echo set_value('enddate'); ?>" />
                        <input type="hidden" name="enddate" id="enddate" />
                                    <select name="enddatetype" id="enddatetype">
                                            <option value="Morning"><?php echo lang('Morning');
?></option>
<option value="Afternoon" selected><?php echo lang('Afternoon');
?></option>
</select><br />

<label for="type" required><?php echo lang('hr_leaves_create_field_type');
?></label>
<select name="type" id="type">
                       <?php
                       $default_type = $this->config->item('default_leave_type');
$default_type = $default_type == FALSE ? 0 : $default_type;
foreach ($types as $types_item): ?>
        <option value="<?php echo $types_item['id'] ?>" <?php if ($types_item['id'] == $default_type) echo "selected" ?>><?php echo $types_item['name'] ?></option>
                          <?php endforeach ?>
                          </select>&nbsp;
    (<span id="lblCredit"><?php echo $credit; ?></span>)<br />

    <label for="duration" required><?php echo lang('hr_leaves_create_field_duration');
    ?></label>
    <input type="text" name="duration" id="duration" value="<?php echo set_value('duration'); ?>" />

                                          <div class="alert hide alert-error" id="lblCreditAlert" onclick="$('#lblCreditAlert').hide();">
                                                      <button type="button" class="close">&times;
    </button>
    <?php echo lang('hr_leaves_create_field_duration_message');
    ?>
    </div>

    <div class="alert hide alert-error" id="lblOverlappingAlert" onclick="$('#lblOverlappingAlert').hide();">
                                               <button type="button" class="close">&times;
    </button>
    <?php echo lang('hr_leaves_create_field_overlapping_message');
    ?>
    </div>

    <label for="cause"><?php echo lang('hr_leaves_create_field_cause');
    ?></label>
    <textarea name="cause"><?php echo set_value('cause');
    ?></textarea>

    <label for="status" required><?php echo lang('hr_leaves_create_field_status');
    ?></label>
    <select name="status">
                 <option value="1" selected><?php echo lang('Planned');
    ?></option>
    <option value="2"><?php echo lang('Requested');
    ?></option>
    <option value="3"><?php echo lang('Accepted');
    ?></option>
    <option value="4"><?php echo lang('Rejected');
    ?></option>
    </select><br />

    <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i>&nbsp;
    <?php echo lang('hr_leaves_create_button_create');
    ?></button>
    &nbsp;
    <a href="<?php echo base_url() . $source; ?>" class="btn btn-danger"><i class="icon-remove icon-white"></i>&nbsp;
    <?php echo lang('hr_leaves_create_button_cancel');
    ?></a>
    </form>

    </div>
    <div class="span4">
                   <span id="spnDayOff">&nbsp;
    </span>
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

                            <link rel="stylesheet" href="<?php echo base_url();?>assets/css/flick/jquery-ui.custom.min.css">
                                      <script src="<?php echo base_url();?>assets/js/jquery-ui.custom.min.js"></script>
                                              <?php //Prevent HTTP-404 when localization isn't needed
                                              if ($language_code != 'en') {
        ?>
        <script src="<?php echo base_url();?>assets/js/i18n/jquery.ui.datepicker-<?php echo $language_code;?>.js"></script>
                    <?php
    } ?>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/moment-with-locales.min.js" type="text/javascript"></script>
                                   <script type="text/javascript" src="<?php echo base_url();?>assets/js/lms/leave.edit.js" type="text/javascript"></script>
                                           <script type="text/javascript">
<?php if ($this->config->item('csrf_protection') == TRUE) {
    ?>
    $.ajaxSetup({
data: {
            <?php echo $this->security->get_csrf_token_name(); ?>: "<?php echo $this->security->get_csrf_hash();?>",
        }
    });
    <?php
}?>
var baseURL = '<?php echo base_url();?>';
var userId = <?php echo $employee;
?>;
var leaveId = null;
var languageCode = '<?php echo $language_code;?>';
</script>
