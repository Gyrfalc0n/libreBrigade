<?php

# project: eBrigade
# homepage: https://ebrigade.app
# version: 5.3

# Copyright (C) 2004, 2021 Nicolas MARCHE (eBrigade Technologies)
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

include_once ("config.php");
check_all(18);
get_session_parameters();

?>

<html>
<script type='text/javascript' src='js/upd_grades.js'></script>
<script type='text/javascript' src='js/swal.js'></script>

<?php
$CG_CATEGORY=secure_input($dbc,$_GET["CG_CATEGORY"]);

//=====================================================================
// suppression Catégorie de garde
//=====================================================================
$query="delete from categorie_grade where CG_CODE='".$CG_CATEGORY."'";
$result=mysqli_query($dbc,$query);
$catGrade = "ALL";

echo "<body onload=redirect('parametrage.php?tab=5&child=14&catGrade=ALL')>";

?>
