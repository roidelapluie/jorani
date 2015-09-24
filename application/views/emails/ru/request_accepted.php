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
<html lang="ru">
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
{Firstname} {Lastname}, <br />
<br />
<p>Ваше заявление на отпуск было одобрено. Детали ниже:
</p>
<table border="0">
              <tr>
              <td>От &nbsp;
</td><td> {StartDate}&nbsp;
({StartDateType})</td>
</tr>
<tr>
<td>До &nbsp;
</td><td> {EndDate}&nbsp;
({EndDateType})</td>
</tr>
<tr>
<td>Тип &nbsp;
</td><td> {Type}</td>
</tr>
<tr>
<td>Причина &nbsp;
</td><td> {Cause}</td>
</tr>
</table>
<hr>
<h5>*** Это сообщение создано автоматически, пожалуйста, не отвечайте на него ***</h5>
</body>
</html>
