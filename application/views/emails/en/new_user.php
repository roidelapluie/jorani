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
 */

//You can change the content of this template
?>
<html lang="en">
           <head>
           <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
                         <meta charset="UTF-8">
                                       <style>
                                       table {width:50%; margin:5px; border-collapse:collapse;}
                                       table, th, td {border: 1px solid black;}
                                       th, td {padding: 20px;}
                                       h5 {color:red;}
                                       </style>
                                       </head>
                                       <body>
                                       <h3> {Title}</h3>
Welcome to Jorani {Firstname} {Lastname} . Please use these credentials to <a href="{BaseURL}">login to the system</a> :
        <table border="0">
                      <tr>
                      <td>Login</td><td> {Login}</td>
                      </tr>
                      <tr>
<?php if ($this->config->item('ldap_enabled') == FALSE) {
    ?>
    <td>Password</td><td> {Password}</td>
    <?php
}
else {
    ?>
    <td>Password</td><td><i>The password you use in order to open a session on your operating system (Windows, Linux, etc.).</i></td>
    <?php
} ?>
</tr>
</table>
<?php if ($this->config->item('ldap_enabled') == FALSE) {
    ?>
    Once connected, you can change your password, as explained <a href="http:/jorani.org/how-to-change-my-password.html" title="Link to documentation" target="_blank">here</a>.
            <?php
} ?>
<hr>
<h5>*** This is an automatically generated message, please do not reply to this message ***</h5>
    </body>
    </html>
