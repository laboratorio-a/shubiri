<?php 

/* LISTA QUERY DIVISE PER PAGINE */

if($pag == "account"):

	$sqlAccount = "SELECT * FROM `admin`"; 

	$rAccount = $mysqli->query($sqlAccount);

	$countAccount =  $rAccount->num_rows;

endif;


if($pag == "pagina"):

	$sqlPagina = "SELECT * FROM `pagina`"; 

	$rPagina = $mysqli->query($sqlPagina);

	$countPagina =  $rPagina->num_rows;

endif;

?>