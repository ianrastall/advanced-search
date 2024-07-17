<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Advanced search forms for Google, Wikimedia, and more">
    <title>Advanced Search Forms</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="advanced_search.js" type="module" defer></script>
</head>
<body>
    <?php include 'header.php'; ?>
    <main id="main-content">
        <div id="forms-container">
            <?php include 'google_forms.php'; ?>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
