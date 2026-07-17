<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/history.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/footer.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <title>Historique | BangsCalc</title>
</head>
<body>
    <!-- Header -->
    <?php $basePath = "../"; require_once '../includes/header.php'; ?>
    <main class="history-page">

        <!-- Présentation -->
        <section class="history-hero">

            <div class="history-hero-content">

                <div class="history-text">
                    <h1>Historique</h1>
                    <p>
                        Consultez tous vos calculs précédents,
                        recherchez un calcul ou supprimez votre historique.
                    </p>
                </div>

                <button class="history-banner" id="clearHistory">
                    <i class="fa-solid fa-trash-can"></i>
                    <h2>Clear History</h2>
                </button>

            </div>

        </section>

       <!-- Barre de contrôle -->
        <section class="history-toolbar">

            <!-- Recherche -->
            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" id="searchInput" placeholder="Rechercher un calcul...">
            </div>

            <!-- Toggle -->
            <div class="history-filter">
                <span>Seulement persistant</span>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>

        </section>


        <!-- Liste des calculs -->
        <section class="history-list">

            <article class="history-card">

                <!-- Barre colorée -->
                <div class="history-color"></div>

                <div class="history-content">

                    <!-- Haut de la carte -->
                    <div class="history-header">

                        <h3>12.5 × 3.2</h3>

                        <span class="result">= 40.0</span>

                    </div>

                    <!-- Informations -->
                    <div class="history-info">

                       <span>Inputs : 12.5 , 3.2</span>

                        <span>Operator : ×</span>

                    </div>

                    <!-- Bas -->
                    <div class="history-footer">

                        <div class="history-meta">

                            <span>
                                <i class="fa-solid fa-clock"></i>

                                07/07/2026
                            </span>

                            <span class="badge local">

                                Local

                            </span>

                        </div>

                        <div class="history-actions">

                            <button title="Copier">
                                <i class="fa-regular fa-copy"></i>
                            </button>

                            <button title="Recalculer">
                                <i class="fa-solid fa-rotate-right"></i>
                            </button>

                            <button title="Supprimer" class="delete-btn">
                                <i class="fa-solid fa-trash"></i>
                            </button>

                        </div>

                    </div>

                </div>

            </article>

            <article class="history-card">

                <!-- Barre colorée -->
                <div class="history-color"></div>

                <div class="history-content">

                    <!-- Haut de la carte -->
                    <div class="history-header">

                        <h3>1454.5 + 33455.2</h3>

                        <span class="result">= 40.0</span>

                    </div>

                    <!-- Informations -->
                    <div class="history-info">

                       <span>Inputs : 1454.5,33455.2</span>

                        <span>Operator : +</span>

                    </div>

                    <!-- Bas -->
                    <div class="history-footer">

                        <div class="history-meta">

                            <span>
                                <i class="fa-solid fa-clock"></i>

                                16/07/2026
                            </span>

                            <span class="badge local">

                                Local

                            </span>

                        </div>

                        <div class="history-actions">

                            <button title="Copier">
                                <i class="fa-regular fa-copy"></i>
                            </button>

                            <button title="Recalculer">
                                <i class="fa-solid fa-rotate-right"></i>
                            </button>

                            <button title="Supprimer" class="delete-btn">
                                <i class="fa-solid fa-trash"></i>
                            </button>

                        </div>

                    </div>

                </div>

            </article>

            <!-- Message affiché lorsqu'aucun calcul n'est trouvé -->
            <div class="empty-search" id="emptySearch">
                <i class="fa-solid fa-magnifying-glass"></i>
                <h3>Aucun calcul trouvé</h3>
                <p>Essayez un autre mot-clé.</p>
            </div>
            
        </section>
    </main>
    <?php require_once '../includes/footer.php'; ?>
</body>
</html>