<?
function lacz_db()
{
$wynik =new mysqli('localhost','strimer','pHbZa9wmh7Y995Sp','strimer');

if(!$wynik)
{
	 return false;
}

return $wynik;
}
?>