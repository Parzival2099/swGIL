<!DOCTYPE html>
<html>
<head>
    <title>Basic data product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/styleDatPrd.css">
</head>
<body>
    <div class="header">
        <h1>Datos Básicos del Producto</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3 form-container">
                <form>
                    <div class="form-group">
                        <label for="expirationDate" class="w-100">Fecha de vencimiento:</label>
                        <input type="date" class="form-control" id="expirationDate" min="<?php echo date('Y-m-d'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="serialNumber" class="w-100">Código SKU:</label>
                        <input type="text" class="form-control" id="serialNumber" placeholder="Ingrese el código SKU">
                    </div>
                    <div class="form-group long-input">
                        <label for="productName" class="w-100">Cantidad Entrante:</label>
                        <input type="number" class="form-control" id="productName" placeholder="Ingrese la cantidad">
                    </div>
                    <div class="form-group long-input">
                        <label for="productDescription" class="w-100">Valor Unitario:</label>
                        <input type="number" class="form-control" id="productName" placeholder="Ingrese el valor unitario">
                    </div>
                    <button type="button" class="btn btn-warning">Siguiente</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>