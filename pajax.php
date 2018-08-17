<?php

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"id2087542_search_db"); 

$province=(isset( $_GET["province"] ));
$district=(isset( $_GET["district"] ));
$sector=(isset( $_GET["sector"] ));
$cell=(isset( $_GET["cell"] ));
$village=(isset( $_GET["village"] ));
if($province!="")
{
	$res=mysqli_query($link,"select * from district where prov_id=$_GET[province]");
	echo "<select style='padding:10px 12px; background-color:#EAEDED; width: 100%; border-radius: 6px; border:2px solid #F9F904;' name='district' id='districtd' onchange='change_district()'>";
	echo "<option> Select </option>";
	while ($row=mysqli_fetch_array($res))
	{
		echo "<option value='$row[dis_id]'>"; echo $row["dis_name"]; echo "</option>";
	
	}
	echo "</select>";
}

if($district!="")
{
	$res=mysqli_query($link,"select * from sector where dis_id=$_GET[district]");
	echo "<select style='padding:10px 12px; background-color:#EAEDED; width: 100%; border-radius: 6px; border:2px solid #F9F904;' name='sector' id='sectord' onchange='change_sector()'>";
	echo "<option> Select </option>";
	while ($row=mysqli_fetch_array($res))
	{
		echo "<option value='$row[sec_id]'>"; echo $row["sec_name"]; echo "</option>";
		
	}
	echo "</select>";
}
if($sector!="")
{
	$res=mysqli_query($link,"select * from cell where sec_id=$_GET[sector]");
	echo "<select style='padding:10px 12px; background-color:#EAEDED; width: 100%; border-radius: 6px; border:2px solid #F9F904;' name='cell' id='celld' onchange='change_cell()'>";
	echo "<option> Select </option>";
	while ($row=mysqli_fetch_array($res))
	{
		echo "<option value='$row[cel_id]'>"; echo $row["cel_name"]; echo "</option>";
		
	}
	echo "</select>";
}

if($cell!="")
{
	$res=mysqli_query($link,"select * from village where cel_id=$_GET[cell]");
	echo "<select style='padding:10px 12px; background-color:#EAEDED; width: 100%; border-radius: 6px; border:2px solid #F9F904;' name='village'>";
	echo "<option> Select </option>";
	while ($row=mysqli_fetch_array($res))
	{
		echo "<option value='$row[vil_id]'>"; echo $row["vil_name"]; echo "</option>";
		
	}
	echo "</select>";
}



?>

