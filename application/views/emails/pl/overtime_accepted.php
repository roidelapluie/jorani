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
<html lang="pl">
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
Twój wniosek o nadgodziny został zatwierdzony. Poniżej, detale:
<table border="0">
              <tr>
              <td>Data &nbsp;
</td><td> {Date}</td>
</tr>
<tr>
<td>Czas trwania &nbsp;
</td><td> {Duration}</td>
</tr>
<tr>
<td>Przyczyna &nbsp;
</td><td> {Cause}</td>
</tr>
</table>
<hr>
<h5>*** Ta wiadomość została wygenerowana automatycznie, prosimy nie odpowiadać na tę wiadomość ***</h5>
</body>
</html>
