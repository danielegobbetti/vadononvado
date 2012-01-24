<?
$next_meeting = "next tuesday 20:00";
$next_meeting_date = strtotime($next_meeting);
?>
<!DOCTYPE html>
<html>
<head>
<title>vado!vado - planner dei meeting informali del lugbz</title>
</head>
<body>
<h1>Prossimo incontro: <?=date('d/m/Y H:i',$next_meeting_date)?></h1>
<form action="#">
<input type="hidden" value="<?=$next_meeting_date?>" name="meeting" />
<label for="attending">Vado</label>
<input type="radio" value="true" id="attending" name="attending" checked/>
<label for="notattending">Non Vado</label>
<input type="radio" value="false" id="notattending" name="attending" />
<input type="submit" />
</form>
</body>
</html>
