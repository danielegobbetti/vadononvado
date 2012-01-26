<?
/*
    This file is part of vado!vado.

    vado!vado is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    vado!vado is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with vado!vado.  If not, see <http://www.gnu.org/licenses/>.
*/


$next_meeting = "next tuesday 20:00";
$next_meeting_date = strtotime($next_meeting);

$data_folder = dirname(__FILE__).'/data/';

?>
<!DOCTYPE html>
<html>
<head>
<title>vado!vado - planner dei meeting informali del lugbz</title>
<link type="text/css" rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
<h1>Prossimo&nbsp;incontro:<br><?=date('d/m/Y H:i',$next_meeting_date)?></h1>
<form action="#">
<input type="hidden" value="<?=$next_meeting_date?>" name="meeting" />
<div id="choices">
<input type="radio" value="true" id="attending" name="attending" />
<label for="attending">Vado</label>
<input type="radio" value="false" id="notattending" name="attending" />
<label for="notattending">Non Vado</label>
</div>
<input type="submit" />
</form>
<p class="notes">
vado!vado is a project by Daniele Gobbetti. It's free software released under the Affero GPLv3 license or any later version. Get the sources or fork me on <a href="https://github.com/danielegobbetti/vadononvado">github</a></p>
</body>
</html>
