<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <a class="navbar-brand navbar-brand-custom" href="#">Panel de Control del Proveedor</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-black" href="#">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="#">Ordenes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="#">Inventario</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <h5>Productos</h5>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-black" href="#">Administrar Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" href="#">Añadir Nuevos Productos</a>
            </li>
        </ul>
        <h5>Ordenes</h5>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-black" href="#">Listado de Pedidos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" href="#">Detalle de Pedidos</a>
            </li>
        </ul>
        <h5>Inventario</h5>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-black" href="#">Lista de Inventarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" href="#">Añadir Nuevos Articulos</a>
            </li>
        </ul>
    </div>

    <!-- Content -->
    <div class="container">
        <div class="row">
          <div class="col-md-3">
            <!-- Sidebar content -->
          </div>
          <div class="col-md-9 mt-5">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Lista de Productos</h5>
              </div>
              <div class="card-body">
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action">Producto 1</a>
                  <a href="#" class="list-group-item list-group-item-action">Producto 2</a>
                  <a href="#" class="list-group-item list-group-item-action">Producto 3</a>
                </div>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary">Terminar</button>
              </div>
            </div>
          </div>
        </div>
      </div>