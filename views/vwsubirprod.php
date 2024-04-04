</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(8, 57, 102);">
    <div class="container px-4">
      <a class="navbar-brand" href="/">
        <span style="color:#ffffff; font-size:26px; font-weight:bold; letter-spacing: 1px;">Logo</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="/code">Ayuda</a></li>
          <li class="nav-item"><a class="nav-link" href="/about">Acerca de la página</a></li>
          <li class="nav-item"><a class="nav-link" href="/faq">Contactenos</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>
</html>
</head>
<body>
    <div class="container mt-5">
        <h1>Subir Producto</h1>
        <form>
            <div class="form-group">
                <label for="product-name">Nombre del Producto</label>
                <input type="text" class="form-control" id="product-name" placeholder="Ingresar Nombre del Producto">
            </div>
            <div class="form-group">
                <label for="product-description">Descripción del Producto</label>
                <textarea class="form-control" id="product-description" rows="3" placeholder="Ingresar Descripción del Producto"></textarea>
            </div>
            <div class="form-group">
                <label for="product-image">Imagen del Producto</label>
                <input type="file" class="form-control-file" id="product-image">
            </div>
            <div class="form-group">
                <label for="product-price">Precio del Producto</label>
                <input type="number" class="form-control" id="product-price" placeholder="Ingresar Precio del Producto">
            </div>
            <div class="form-group">
                <label for="product-category">Categoria del Producto</label>
                <input type="text" class="form-control" id="product-category" placeholder="Ingresar Categoria del Producto">
            </div>
            <button type="submit" class="btn btn-primary">Subir</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>