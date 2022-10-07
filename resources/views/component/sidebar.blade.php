<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin E-PRINT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrateur</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('accueil') }}" class="nav-link @if (request()->is('/')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('typeImpression.index') }}"
                class="nav-link @if (request()->is('typeImpression*')) active @endif">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Types Impression
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('format.index') }}"
                class="nav-link @if (request()->is('format*')) active @endif">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Formats Impression
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('article.index') }}"
                class="nav-link @if (request()->is('article*')) active @endif">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Articles
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('clients.index') }}"
                class="nav-link @if (request()->is('client*')) active @endif">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Clients
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('avis.index') }}"
                class="nav-link @if (request()->is('avis*')) active @endif">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Avis
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('commandes.index') }}"
                class="nav-link @if (request()->is('commande*')) active @endif">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Commandes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('detailCommande.index') }}"
                class="nav-link @if (request()->is('detailCommande*')) active @endif">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Article_Commandes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('facture.index') }}"
                class="nav-link @if (request()->is('facture*')) active @endif">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Factures
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('centreImpression.index') }}"
                class="nav-link @if (request()->is('centreImpression*')) active @endif">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Centres Impressions
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
