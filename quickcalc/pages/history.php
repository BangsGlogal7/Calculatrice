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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <title>Historique | BangsCalc</title>
</head>
<body>
    <!-- Header -->
    <?php require_once '../includes/header.php'; ?>
    <main class="history-pag">

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

                <div class="history-image">
                    <img src="../assets/images/history.png" alt="Historique des calculs">
                </div>

            </div>

        </section>

        <!-- Barre d'actions -->
        <section class="history-toolbar">

            <div class="toolbar-left">

                <button class="toolbar-btn active">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    Historique
                </button>

            </div>

            <div class="toolbar-right">

                <button class="clear-btn">
                    <i class="fa-solid fa-trash"></i>
                    Vider l'historique
                </button>

            </div>

        </section>

         <!-- Recherche -->
        <section class="history-search">

            <input
                type="text"
                placeholder="Rechercher un calcul..."
            >

        </section>


        <!-- Liste des calculs -->
        <section class="history-list">

            <!-- Carte 1 -->
            <article class="history-card">

                <div class="history-expression">
                    12 × 5 = 60
                </div>

                <div class="history-meta">

                    <span>
                        <i class="fa-regular fa-clock"></i>
                        13/07/2026 - 10:30
                    </span>

                </div>

                <div class="history-actions">

                    <button title="Copier">
                        <i class="fa-regular fa-copy"></i>
                    </button>

                    <button title="Recalculer">
                        <i class="fa-solid fa-rotate-right"></i>
                    </button>

                    <button title="Supprimer">
                        <i class="fa-solid fa-trash"></i>
                    </button>

                </div>

            </article>

        </section>
    </main>
</body>
</html>