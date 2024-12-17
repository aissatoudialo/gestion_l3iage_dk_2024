<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #495057;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Ajouter un Produit</h2>
        <form action="?controller=produit&&action=save" method="POST">
            <div class="mb-3">
                <label for="libelle" class="form-label">Libellé</label>
                <input type="text" name="libelle" id="libelle" class="form-control" placeholder="Saisissez le libellé" required>
            </div>
            <div class="mb-3">
                <label for="quantite" class="form-label">Quantité</label>
                <input type="text" name="quantite" id="quantite" class="form-control" placeholder="Saisissez la quantité" required>
            </div>
            <div class="mb-3">
                <label for="prix" class="form-label">Prix Unitaire</label>
                <input type="text" name="prix" id="prix" class="form-control" placeholder="Saisissez le prix unitaire" required>
            </div>
            <div class="mb-3">
                <label for="categorie" class="form-label">Catégorie</label>
                <select name="idcat" id="categorie" class="form-select">
                    <?php while ($c = pg_fetch_assoc($categories)) { ?>
                        <option value="<?= htmlspecialchars($c['id']) ?>"><?= htmlspecialchars($c['libelle']) ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">Ajouter</button>
        </form>
    </div>
</body>
</html>
