<!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/">Main</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if ($action == 'home'){ echo 'active';} ?>">
              <a class="nav-link" href="/index.php?action=home">Главная<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php echo ($action == 'about') ? 'active' : '' ?>">
              <a class="nav-link" href="/index.php?action=about">О нас</a>
            </li>
            <li class="nav-item <?php echo ($action == 'create') ? 'active' : '' ?>">
              <a class="nav-link" href="/index.php?action=create">Создать</a>
            </li>
            <li class="nav-item <?php echo ($action == 'shop') ? 'active' : '' ?>">
              <a class="nav-link" href="/index.php?action=shop">Магазин</a>
            </li>
            <li class="nav-item <?php echo ($action == 'basket') ? 'active' : '' ?>">
              <a class="nav-link" href="/index.php?action=basket">Корзина</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>