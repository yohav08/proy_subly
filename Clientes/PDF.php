<?php
ob_start(); // <-- inicializando...
require('../PDF/fpdf.php');
include('./consultar_SQL.php');

$cod_compra=$_GET['cod_compra'];

        class PDF extends FPDF
        {
            // Cabecera de página
            function Header()
            {
                // Logo
                // Arial bold 15
                $this->SetFont('Arial', 'B', 15);
                // Movernos a la derecha
                $this->Cell(80);
                // Título
                $this->Cell(30, 10, 'ACC Cinema', 0, 0, 'C');
                // Salto de línea
                $this->Ln(20);
            }

            // Pie de página
            function Footer()
            {
                // Posición: a 1,5 cm del final
                $this->SetY(-15);
                // Arial italic 8
                $this->SetFont('Arial', 'I', 8);
                // Número de página
                $this->Cell(0, 10, 'Página ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
            }
        }
        $datosCompra = consultarCompra($cod_compra);
        $datosCompra_res = $datosCompra->fetch_assoc();
        $datosCliente = consultarCliente($datosCompra_res['id_cliente']);
        $datosCliente_res = $datosCliente->fetch_assoc();

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, 'Factura', 0, 1, 'C');

        // Contenido del PDF
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, 'Datos de Cliente', 0, 1);
        $pdf->Cell(0, 10, 'Nombre: ' . $datosCliente_res['nombre'], 0, 1);
        $pdf->Cell(0, 10, 'CC: ' . $datosCliente_res['id_cliente'], 0, 1);
        $pdf->Cell(0, 10, 'Correo: ' . $datosCliente_res['correo'], 0, 1);
        $pdf->Cell(0, 10, 'Datos de Productos', 0, 1);

        $datosProductos = consultarCarrito($datosCliente_res['id_cliente']);
        $valor = 0;
        foreach($datosProductos as $row){
            $precio = $row['precio'];
            $valor += $precio;
            $pdf->Cell(0, 10, 'Codigo: ' . $row['cod_producto'], 0, 1);
            $pdf->Cell(0, 10, 'Nombre: ' . $row['nombre'], 0, 1);
            $pdf->Cell(0, 10, 'Precio: ' . $row['precio'], 0, 1);
            $pdf->Cell(0, 10, 'Tipo: ' . $row['tipo'], 0, 1);
        }
        
        $pdf->Cell(0, 10, 'Datos de Compra', 0, 1);
        $pdf->Cell(0, 10, 'Fecha: ' . $datosCompra_res['fecha'], 0, 1);
        $pdf->Cell(0, 10, 'Direccion: ' . $datosCompra_res['direccion'], 0, 1);
        $pdf->Cell(0, 10, 'Ciudad: ' . $datosCompra_res['ciudad'], 0, 1);
        $pdf->Cell(0, 10, 'Numero de Tarjeta: ' . $datosCompra_res['num_tarjeta'], 0, 1);

        $pdf->Cell(0, 10, 'Total a Pagar: ' . $valor, 0, 1);
        ob_end_clean();
        $pdf->Output('D', 'factura.pdf');

?>