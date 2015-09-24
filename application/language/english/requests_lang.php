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

$lang['requests_index_title'] = 'Leave Requests submitted to me';
$lang['requests_index_description'] = 'This screen lists the leave requests submitted to you. If you are not a manager, this list will always be empty.';
$lang['requests_index_thead_tip_view'] = 'view';
$lang['requests_index_thead_tip_accept'] = 'accept';
$lang['requests_index_thead_tip_reject'] = 'reject';
$lang['requests_index_thead_id'] = 'ID';
$lang['requests_index_thead_fullname'] = 'Fullname';
$lang['requests_index_thead_startdate'] = 'Start Date';
$lang['requests_index_thead_enddate'] = 'End Date';
$lang['requests_index_thead_duration'] = 'Duration';
$lang['requests_index_thead_type'] = 'Type';
$lang['requests_index_thead_status'] = 'Status';

$lang['requests_collaborators_title'] = 'List of my collaborators';
$lang['requests_collaborators_description'] = 'This screen lists your collaborators. If you are not a manager, this list will always be empty.';
$lang['requests_collaborators_thead_id'] = 'ID';
$lang['requests_collaborators_thead_link_balance'] = 'Leave Balance';
$lang['requests_collaborators_thead_link_presence'] = 'Presence report';
$lang['requests_collaborators_thead_link_year'] = 'Yearly calendar';
$lang['requests_collaborators_thead_link_create_leave'] = 'Create a leave request in behalf of this collaborator';
$lang['requests_collaborators_thead_firstname'] = 'Firstname';
$lang['requests_collaborators_thead_lastname'] = 'Lastname';
$lang['requests_collaborators_thead_email'] = 'E-mail';

$lang['requests_summary_title'] = 'Leave balance for user #';
$lang['requests_summary_thead_type'] = 'Leave type';
$lang['requests_summary_thead_available'] = 'Available';
$lang['requests_summary_thead_taken'] = 'Taken';
$lang['requests_summary_thead_entitled'] = 'Entitled';
$lang['requests_summary_thead_description'] = 'Description';
$lang['requests_summary_flash_msg_error'] = 'This employee has no contract.';
$lang['requests_summary_flash_msg_forbidden'] = 'Your are not the manager of this employee.';
$lang['requests_summary_button_list'] = 'List of collaborators';

$lang['requests_index_button_export'] = 'Export this list';
$lang['requests_index_button_show_all'] = 'All requests';
$lang['requests_index_button_show_pending'] = 'Pending requests ';

$lang['requests_accept_flash_msg_error'] = 'You are not the line manager of this employee. You cannot accept this leave request.';
$lang['requests_accept_flash_msg_success'] = 'The leave request has been successfully accepted.';

$lang['requests_reject_flash_msg_error'] = 'You are not the line manager of this employee. You cannot reject this leave request.';
$lang['requests_reject_flash_msg_success'] = 'The leave request has been successfully rejected.';

$lang['requests_export_title'] = 'List of leave requests';
$lang['requests_export_thead_id'] = 'ID';
$lang['requests_export_thead_fullname'] = 'Fullname';
$lang['requests_export_thead_startdate'] = 'Start Date';
$lang['requests_export_thead_startdate_type'] = 'Morning/Afternoon';
$lang['requests_export_thead_enddate'] = 'End Date';
$lang['requests_export_thead_enddate_type'] = 'Morning/Afternoon';
$lang['requests_export_thead_duration'] = 'Duration';
$lang['requests_export_thead_type'] = 'Type';
$lang['requests_export_thead_cause'] = 'Reason';
$lang['requests_export_thead_status'] = 'Status';

$lang['requests_delegations_title'] = 'List of delegations';
$lang['requests_delegations_description'] = 'This is the list of employees who can accept or reject a request in your behalf.';
$lang['requests_delegations_thead_employee'] = 'Employee';
$lang['requests_delegations_thead_tip_delete'] = 'Revoke';
$lang['requests_delegations_button_add'] = 'Add';
$lang['requests_delegations_popup_delegate_title'] = 'Add a delegate';
$lang['requests_delegations_popup_delegate_button_ok'] = 'OK';
$lang['requests_delegations_popup_delegate_button_cancel'] = 'Cancel';
$lang['requests_delegations_confirm_delete_message'] = 'Are you sure that you want to revoke this delegation?';
$lang['requests_delegations_confirm_delete_cancel'] = 'Cancel';
$lang['requests_delegations_confirm_delete_yes'] = 'Yes';
