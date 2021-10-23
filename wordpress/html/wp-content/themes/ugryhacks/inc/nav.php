<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/"><?php bloginfo( 'name' ); ?></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/archives/">Archives</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/about/">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex wp-block-search__button-outside wp-block-search__text-button wp-block-search" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input name="s" value="" required="" id="wp-block-search__input-1" class="form-control me-2 btn-outline-secondary search-form wp-block-search__input" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-secondary search-btn wp-block-search__button" type="submit"><i class="fas fa-search"></i></button>
      </form>

      <!-- <form class="d-flex">
        <input class="form-control me-2 btn-outline-secondary search-form" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-secondary search-btn" type="submit"><i class="fas fa-search"></i></button>
      </form> -->

    </div>
  </div>
</nav>