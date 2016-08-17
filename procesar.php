<?php
if (isset ( $_GET ['procesar'] )) 

{
	$ventas = $_GET ['listadoventas'];
	// var_dump($ventas);
	$codigoProd=$_GET['codigobuscar'];
	//var_dump($codigoProd);
	
	function mostrarListado($ventasProd)
	{
		$arregloVentas = explode ( ',', $ventasProd );
		// var_dump($arregloVentas);
		echo "Codigo | Cantidad de ventas";
		echo "</br>";
		foreach ( $arregloVentas as $valor )
		{
			echo $valor;
			echo "</br>";
		}
		; // foreach()
	} // function
	//mostrarListado ( $ventas );
	
	function contarCodigoBuscado($ventasProd,$codBuscado) {
		$arregloCodigo=array();
		$arregloVentas = explode ( ',', $ventasProd );
		$contarCodigo=0;
		foreach ($arregloVentas as $valor)
		{
		array_push($arregloCodigo,substr($valor,0,4));
		}//foreach
		foreach ($arregloCodigo as $valor)
		{
			if ($codBuscado==$valor){
				$contarCodigo++;
			}//if
		}//foreach
		return $contarCodigo;
	}//contarCodigoBuscado
		mostrarListado($ventas);
		$cuentaBuscado=contarCodigoBuscado($ventas,$codigoProd);
		echo "La cantidad de codigos encontrados es: ".$cuentaBuscado;
}//isset()
