<!DOCTYPE html>
<html>
<head>
    <title>Product Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/styleRegPrd.css">
</head>
<body>
    <div class="header">
        <h1>Registro del Producto</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3 form-container">
                <form>
                    <div class="form-group">
                        <label for="productType" class="w-100">Tipo de Producto:</label>
                        <input type="text" class="form-control" id="productType" placeholder="Ingrese el tipo de producto">
                    </div>
                    <div class="form-group">
                        <label for="serialNumber" class="w-100">Número de Serie:</label>
                        <input type="number" class="form-control" id="serialNumber" placeholder="Ingrese el número de serie">
                    </div>
                    <div class="form-group long-input">
                        <label for="productName" class="w-100">Nombre:</label>
                        <input type="text" class="form-control" id="productName" placeholder="Ingrese el nombre del producto">
                    </div>
                    <div class="form-group long-input">
                        <label for="productDescription" class="w-100">Descripción:</label>
                        <textarea class="form-control" id="productDescription" rows="3"></textarea>
                    </div>
                    <button type="button" class="btn btn-warning">Siguiente</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>