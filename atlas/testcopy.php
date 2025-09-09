<!-- /Users/julien/Documents/GitHub/start/index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Content</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="menu">
        <button data-page="page1">Page 1</button>
        <button data-page="page2">Page 2</button>
        <button data-page="page3">Page 3</button>
        <button data-page="page4">Page 4</button>
        <button data-page="page5">Page 5</button>
    </div>
    <div id="content">
        <!-- Le contenu sera chargé ici dynamiquement -->
    </div>
    <script src="script.js"></script>
</body>
</html>


<style>

#menu {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
}

#content {
    border: 1px solid #ccc;
    padding: 20px;
    min-height: 200px;
}

</style>


<script>

    // /Users/julien/Documents/GitHub/start/script.js
const content = {
    page1: "<h1>Bienvenue sur la Page 1</h1><p>Contenu de la page 1.</p>",
    page2: "<h1>Bienvenue sur la Page 2</h1><p>Contenu de la page 2.</p>",
    page3: "<h1>Bienvenue sur la Page 3</h1><p>Contenu de la page 3.</p>",
    page4: "<h1>Bienvenue sur la Page 4</h1><p>Contenu de la page 4.</p>",
    page5: "<h1>Bienvenue sur la Page 5</h1><p>Contenu de la page 5.</p>",
};

document.querySelectorAll("#menu button").forEach(button => {
    button.addEventListener("click", () => {
        const page = button.getAttribute("data-page");
        document.getElementById("content").innerHTML = content[page];
    });
});

// Charger le contenu de la première page par défaut
document.getElementById("content").innerHTML = content.page1;

</script>