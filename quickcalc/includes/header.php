<header>
    <!-- Icone -->
    <div class="logo">
        <i class="fa-solid fa-calculator"></i> 
        <h1>Calcul</h1>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
    </div>
    <!-- la liste des navigations -->
    <nav>
        <ul>
            <li><a href="<?= $basePath ?>calculator.php"><i class="fa-solid fa-house"></i> Acceuil </a></li>
            <li><a href="<?= $basePath ?>pages/history.php"><i class="fa-solid fa-clock-rotate-left"></i>Historique</a></li>
            <li><a href="<?= $basePath ?>pages/settings.php"><i class="fa-solid fa-gear"></i>Paramètres</a></li> 
        </ul>
    </nav>
    <!-- Actions Mobile -->
    <div class="mobile-action">
        <a href="pages/history.php" class="history-btn"><i class="fa-solid fa-clock-rotate-left"></i></a>
        <button class="menu-btn" id="menuBtn" aria-label="Ouvrir le menu" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical"></i></button>
    </div>
    <!-- menu des trois points -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="menu-item" data-action="about">
            <i class="fa-solid fa-circle-info"></i>
            <span>À propos</span>
        </div>

        <div class="menu-item" data-action="clear-history">
            <i class="fa-solid fa-trash"></i>
            <span>Vider l'historique</span>
        </div>

        <div class="menu-item" data-action="toggle-theme">
            <i class="fa-solid fa-moon"></i>
            <span>Mode sombre</span>
        </div>
    </div>

</header>
