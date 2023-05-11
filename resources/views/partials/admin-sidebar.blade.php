<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="/" class="nav_logo">
                <i class='fa-solid fa-layer-group nav_logo-icon'></i>
                <span class="nav_logo-name">V-Drivers</span>
            </a>
            <div class="nav_list">
                <a href="{{ route('dashboard') }}" class="nav_link  {{ request()->is('*dashboard*') ? 'active' : '' }}"
                    title="Tableau de bord">
                    <i class='fa-solid fa-border-all nav_icon'></i>
                    <span class="nav_name">Tableau de bord</span>
                </a>
                <a href="{{ route('drivers-list') }}" class="nav_link {{ request()->is('*driver*') ? 'active' : '' }}"
                    title="Conducteurs">
                    <i class='fa-solid fa-user-tie nav_icon'></i>
                    <span class="nav_name">Conducteurs</span>
                </a>
                <a href="{{ route('owner-list') }}" class="nav_link {{ request()->is('*owner*') ? 'active' : '' }}"
                    title="Propriétaires">
                    <i class='fa-solid fa-user nav_icon'></i>
                    <span class="nav_name">Propriétaires</span>
                </a>
                <a href="{{ route('vehicle-list') }}" class="nav_link {{ request()->is('*vehicle*') ? 'active' : '' }}"
                    title="Conducteurs">
                    <i class='fa-solid fa-car nav_icon'></i>
                    <span class="nav_name">Véhicules</span>
                </a>
                <a href="{{ route('faqs') }}" class="nav_link {{ request()->is('*faq*') ? 'active' : '' }}"
                    title="FAQs">
                    <i class='fa-solid fa-clipboard-question nav_icon'></i>
                    <span class="nav_name">FAQs</span>
                </a>
                <a href="{{ route('users') }}" class="nav_link {{ request()->is('*user*') ? 'active' : '' }}"
                    title="Utilisateurs">
                    <i class='fa-solid fa-users nav_icon'></i>
                    <span class="nav_name">Utilisateurs</span>
                </a>
                <a href="{{ route('news-letters') }}" class="nav_link {{ request()->is('*news*') ? 'active' : '' }}"
                    title="Newletter">
                    <i class='fa-solid fa-newspaper nav_icon'></i>
                    <span class="nav_name">Newsletter</span>
                </a>
            </div>
        </div>
        <a href="{{ route('dashboard') }}" class="nav_link" title="">
            <i class='fa-solid fa-right-from-bracket nav_icon'></i>
            <span class="nav_name">Déconnexion</span>
        </a>
    </nav>
</div>
