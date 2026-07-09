<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/calculator.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Accueil | BangsCalc</title>
</head>
<body>
    <!-- Header du Body -->
    <?php require_once 'includes/header.php'; ?>

    <!-- Le main -->
    <main class="calculator-page">

        <!-- Présentation -->
        <section class="hero-card">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Calculatrice</h1>
                    <p>Des calculs rapides et précis pour les besoins du quotidien — prend en charge les nombres décimaux et négatifs.</p>
                </div>
                <div class="hero-image">
                    <img src="./assets/images/Illustration.png" alt="Illustration d'une calculatrice">
                </div>
            </div>
        </section>

        <!-- Formulaire -->
        <section class="calculator-card">

            <form action="" method="POST" class="calculator-form" >

                <div class="form-group">
                    <label for="number1">Numéro 1 </label>
                    <input type="number" id="number1" name="number1" placeholder="Ex : 12.5" step="any" required>
                </div>

                <div class="form-group">
                    <label for="number2">Numéro 2</label>
                    <input type="number" id="number2" name="number2" placeholder="Ex : 4" step="any" required>
                </div>
                
                <div class="form-group">

                    <label>Operation</label>

                    <div class="operation-grid">

                        <label class="operation-card">
                            <input type="radio" name="operation" value="addition" checked> 
                            <div class="operation-icon">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <h3>Addition</h3>
                            
                        </label>

                        <label class="operation-card">
                            <input type="radio" name="operation" value="soustraction" >
                            <div class="operation-icon">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <h3>Soustraction</h3>
                            
                        </label>

                        <label class="operation-card">
                            <input type="radio" name="operation" value="multiplication">
                            <div class="operation-icon">
                                &#215;
                            </div>
                            <h3>Multiplication</h3>
                            
                        </label>

                        <label class="operation-card">
                            <input type="radio" name="operation" value="division">
                            <div class="operation-icon">
                                &#247;
                            </div>
                            <h3>Division</h3>
                        </label>

                    </div>
                    <div class="form-actions">
                        <button type="submit" class="calculate-btn">
                            Calculer
                        </button>
                    </div>

                </div>
                
            </form>

        </section>

        <!-- Card pour le resultat -->
       <section class="result-card">
            <div class="result-header">
                <i class="fa-solid fa-square-poll-horizontal"></i>
                <h2>Résultat</h2>
            </div>

            <div class="result-content">
                <p class="result-placeholder">
                    Le résultat apparaîtra ici après un calcul.
                </p>
            </div>

        </section>

    </main>


    <?php require_once 'includes/footer.php'; ?>
    
</body>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
</html>