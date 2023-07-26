<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand fst-italic" href="/">Sport Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-flex" id="navbarNav">
      <ul class="navbar-nav">
        <li class="fw-normal">
          <a class="nav-link {{ ($title === "artikel") ? 'active' : '' }}" href="/">Artikel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Blog") ? 'active' : '' }}" href="/blog">Kategori</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>