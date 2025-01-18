<head>
  <style>
      /* Fondo más oscuro para el navbar */
      .navbar {
          background-color: #e6d8ad; /* Hueso oscuro para el navbar */
      }

      .navbar-brand {
          color: #3f3e3e;
      }

      .navbar-brand:hover {
          color: #333; /* Gris más oscuro para hover */
      }

      .navbar-nav .nav-link {
          color: #000000; /* Gris oscuro para los enlaces */
      }

      .navbar-nav .nav-link:hover {
          color: #333; /* Gris más oscuro en hover */
      }

      .navbar-nav .nav-link.active {
          color: #8a816b;
          font-weight: bold;
      }

      .navbar-toggler-icon {
          background-color: #00000000;
      }


      body.bg-light {
          background-color: #f9f6f0 !important;
      }
  </style>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg fixed-top">

      <div class="container-fluid">
          <a class="navbar-brand" href="{{route('index')}}"><i class="fa-brands fa-laravel"></i></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{route('index')}}">Inicio</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link fw-bold" href="{{route('categories.index')}}">Categorías</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link fw-bold" href="{{route('clients.index')}}">Clientes</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link fw-bold" href="{{route('products.index')}}">Productos</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link fw-bold" href="{{route('purchases.index')}}">Compras</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link fw-bold" href="{{route('sales.index')}}">Ventas</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link fw-bold" href="{{route('sales_details.index')}}">Detalles de ventas</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link fw-bold" href="{{route('suppliers.index')}}">Proveedores</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>


</body>
