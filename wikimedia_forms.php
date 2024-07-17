<div class="container">
    <!-- Wikipedia Advanced Search Form -->
    <div class="form-container">
        <div class="form-title">
            <h2>Wikipedia Advanced Search</h2>
            <div class="icon-link">
                <a href="https://en.wikipedia.org" target="_blank">
                    <img src="images/icon-wikipedia.png" alt="Wikipedia">
                </a>
            </div>
        </div>
        <form action="https://en.wikipedia.org/w/index.php" method="get">
            <div class="form-group">
                <label for="search_wikipedia">Search for:</label>
                <input type="text" id="search_wikipedia" name="search" aria-label="Search for">
            </div>
            <div class="form-group">
                <label for="search_wikipedia_title">Search in title:</label>
                <input type="text" id="search_wikipedia_title" name="title" aria-label="Search in title">
            </div>
            <div class="form-group">
                <label for="namespace">Namespace:</label>
                <select id="namespace" name="namespace">
                    <option value="">All</option>
                    <option value="0">Article</option>
                    <option value="1">Talk</option>
                    <option value="2">User</option>
                    <option value="3">User Talk</option>
                    <option value="4">Wikipedia</option>
                    <option value="5">Wikipedia Talk</option>
                    <option value="6">File</option>
                    <option value="7">File Talk</option>
                    <option value="8">MediaWiki</option>
                    <option value="9">MediaWiki Talk</option>
                    <option value="10">Template</option>
                    <option value="11">Template Talk</option>
                    <option value="12">Help</option>
                    <option value="13">Help Talk</option>
                    <option value="14">Category</option>
                    <option value="15">Category Talk</option>
                    <option value="100">Portal</option>
                    <option value="101">Portal Talk</option>
                    <option value="118">Draft</option>
                    <option value="119">Draft Talk</option>
                    <option value="710">TimedText</option>
                    <option value="711">TimedText Talk</option>
                    <option value="828">Module</option>
                    <option value="829">Module Talk</option>
                </select>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" id="category" name="category" aria-label="Category">
            </div>
            <div class="form-actions">
                <input type="submit" value="Search">
                <input type="reset" value="Clear Form">
            </div>
        </form>
    </div>

    <!-- Wiktionary Advanced Search Form -->
    <div class="form-container">
        <div class="form-title">
            <h2>Wiktionary Advanced Search</h2>
            <div class="icon-link">
                <a href="https://en.wiktionary.org" target="_blank">
                    <img src="images/icon-wiktionary.png" alt="Wiktionary">
                </a>
            </div>
        </div>
        <form action="https://en.wiktionary.org/w/index.php" method="get">
            <div class="form-group">
                <label for="search_wiktionary">Search for:</label>
                <input type="text" id="search_wiktionary" name="search" aria-label="Search for">
            </div>
            <div class="form-group">
                <label for="search_wiktionary_title">Search in title:</label>
                <input type="text" id="search_wiktionary_title" name="title" aria-label="Search in title">
            </div>
            <div class="form-group">
                <label for="namespace_wiktionary">Namespace:</label>
                <select id="namespace_wiktionary" name="namespace">
                    <option value="">All</option>
                    <option value="0">Article</option>
                    <option value="1">Talk</option>
                    <option value="2">User</option>
                    <option value="3">User Talk</option>
                    <option value="4">Wiktionary</option>
                    <option value="5">Wiktionary Talk</option>
                    <option value="6">File</option>
                    <option value="7">File Talk</option>
                    <option value="8">MediaWiki</option>
                    <option value="9">MediaWiki Talk</option>
                    <option value="10">Template</option>
                    <option value="11">Template Talk</option>
                    <option value="12">Help</option>
                    <option value="13">Help Talk</option>
                    <option value="14">Category</option>
                    <option value="15">Category Talk</option>
                    <option value="100">Appendix</option>
                    <option value="101">Appendix Talk</option>
                    <option value="102">Concordance</option>
                    <option value="103">Concordance Talk</option>
                    <option value="104">Index</option>
                    <option value="105">Index Talk</option>
                    <option value="106">Rhymes</option>
                    <option value="107">Rhymes Talk</option>
                    <option value="108">Thesaurus</option>
                    <option value="109">Thesaurus Talk</option>
                    <option value="110">Transwiki</option>
                    <option value="111">Transwiki Talk</option>
                    <option value="112">Wikisaurus</option>
                    <option value="113">Wikisaurus Talk</option>
                    <option value="114">Citations</option>
                    <option value="115">Citations Talk</option>
                    <option value="116">Sign gloss</option>
                    <option value="117">Sign gloss Talk</option>
                    <option value="118">Reconstruction</option>
                    <option value="119">Reconstruction Talk</option>
                </select>
            </div>
            <div class="form-group">
                <label for="category_wiktionary">Category:</label>
                <input type="text" id="category_wiktionary" name="category" aria-label="Category">
            </div>
            <div class="form-actions">
                <input type="submit" value="Search">
                <input type="reset" value="Clear Form">
            </div>
        </form>
    </div>

    <!-- Wikisource Advanced Search Form -->
    <div class="form-container">
        <div class="form-title">
            <h2>Wikisource Advanced Search</h2>
            <div class="icon-link">
                <a href="https://en.wikisource.org" target="_blank">
                    <img src="images/icon-wikisource.png" alt="Wikisource">
                </a>
            </div>
        </div>
        <form action="https://en.wikisource.org/w/index.php" method="get">
            <div class="form-group">
                <label for="search_wikisource">Search for:</label>
                <input type="text" id="search_wikisource" name="search" aria-label="Search for">
            </div>
            <div class="form-group">
                <label for="search_wikisource_title">Search in title:</label>
                <input type="text" id="search_wikisource_title" name="title" aria-label="Search in title">
            </div>
            <div class="form-group">
                <label for="namespace_wikisource">Namespace:</label>
                <select id="namespace_wikisource" name="namespace">
                    <option value="">All</option>
                    <option value="0">Article</option>
                    <option value="1">Talk</option>
                    <option value="2">User</option>
                    <option value="3">User Talk</option>
                    <option value="4">Wikisource</option>
                    <option value="5">Wikisource Talk</option>
                    <option value="6">File</option>
                    <option value="7">File Talk</option>
                    <option value="8">MediaWiki</option>
                    <option value="9">MediaWiki Talk</option>
                    <option value="10">Template</option>
                    <option value="11">Template Talk</option>
                    <option value="12">Help</option>
                    <option value="13">Help Talk</option>
                    <option value="14">Category</option>
                    <option value="15">Category Talk</option>
                    <option value="100">Portal</option>
                    <option value="101">Portal Talk</option>
                    <option value="102">Page</option>
                    <option value="103">Page Talk</option>
                    <option value="104">Index</option>
                    <option value="105">Index Talk</option>
                </select>
            </div>
            <div class="form-group">
                <label for="category_wikisource">Category:</label>
                <input type="text" id="category_wikisource" name="category" aria-label="Category">
            </div>
            <div class="form-actions">
                <input type="submit" value="Search">
                <input type="reset" value="Clear Form">
            </div>
        </form>
    </div>

    <!-- Wikibooks Advanced Search Form -->
    <div class="form-container">
        <div class="form-title">
            <h2>Wikibooks Advanced Search</h2>
            <div class="icon-link">
                <a href="https://en.wikibooks.org" target="_blank">
                    <img src="images/icon-wikibooks.png" alt="Wikibooks">
                </a>
            </div>
        </div>
        <form action="https://en.wikibooks.org/w/index.php" method="get">
            <div class="form-group">
                <label for="search_wikibooks">Search for:</label>
                <input type="text" id="search_wikibooks" name="search" aria-label="Search for">
            </div>
            <div class="form-group">
                <label for="search_wikibooks_title">Search in title:</label>
                <input type="text" id="search_wikibooks_title" name="title" aria-label="Search in title">
            </div>
            <div class="form-group">
                <label for="namespace_wikibooks">Namespace:</label>
                <select id="namespace_wikibooks" name="namespace">
                    <option value="">All</option>
                    <option value="0">Article</option>
                    <option value="1">Talk</option>
                    <option value="2">User</option>
                    <option value="3">User Talk</option>
                    <option value="4">Wikibooks</option>
                    <option value="5">Wikibooks Talk</option>
                    <option value="6">File</option>
                    <option value="7">File Talk</option>
                    <option value="8">MediaWiki</option>
                    <option value="9">MediaWiki Talk</option>
                    <option value="10">Template</option>
                    <option value="11">Template Talk</option>
                    <option value="12">Help</option>
                    <option value="13">Help Talk</option>
                    <option value="14">Category</option>
                    <option value="15">Category Talk</option>
                    <option value="100">Book</option>
                    <option value="101">Book Talk</option>
                    <option value="102">Subject</option>
                    <option value="103">Subject Talk</option>
                </select>
            </div>
            <div class="form-group">
                <label for="category_wikibooks">Category:</label>
                <input type="text" id="category_wikibooks" name="category" aria-label="Category">
            </div>
            <div class="form-actions">
                <input type="submit" value="Search">
                <input type="reset" value="Clear Form">
            </div>
        </form>
    </div>

    <!-- Wikiversity Advanced Search Form -->
    <div class="form-container">
        <div class="form-title">
            <h2>Wikiversity Advanced Search</h2>
            <div class="icon-link">
                <a href="https://en.wikiversity.org" target="_blank">
                    <img src="images/icon-wikiversity.png" alt="Wikiversity">
                </a>
            </div>
        </div>
        <form action="https://en.wikiversity.org/w/index.php" method="get">
            <div class="form-group">
                <label for="search_wikiversity">Search for:</label>
                <input type="text" id="search_wikiversity" name="search" aria-label="Search for">
            </div>
            <div class="form-group">
                <label for="search_wikiversity_title">Search in title:</label>
                <input type="text" id="search_wikiversity_title" name="title" aria-label="Search in title">
            </div>
            <div class="form-group">
                <label for="namespace_wikiversity">Namespace:</label>
                <select id="namespace_wikiversity" name="namespace">
                    <option value="">All</option>
                    <option value="0">Article</option>
                    <option value="1">Talk</option>
                    <option value="2">User</option>
                    <option value="3">User Talk</option>
                    <option value="4">Wikiversity</option>
                    <option value="5">Wikiversity Talk</option>
                    <option value="6">File</option>
                    <option value="7">File Talk</option>
                    <option value="8">MediaWiki</option>
                    <option value="9">MediaWiki Talk</option>
                    <option value="10">Template</option>
                    <option value="11">Template Talk</option>
                    <option value="12">Help</option>
                    <option value="13">Help Talk</option>
                    <option value="14">Category</option>
                    <option value="15">Category Talk</option>
                    <option value="100">Portal</option>
                    <option value="101">Portal Talk</option>
                    <option value="102">School</option>
                    <option value="103">School Talk</option>
                </select>
            </div>
            <div class="form-group">
                <label for="category_wikiversity">Category:</label>
                <input type="text" id="category_wikiversity" name="category" aria-label="Category">
            </div>
            <div class="form-actions">
                <input type="submit" value="Search">
                <input type="reset" value="Clear Form">
            </div>
        </form>
    </div>

    <!-- Wikinews Advanced Search Form -->
    <div class="form-container">
        <div class="form-title">
            <h2>Wikinews Advanced Search</h2>
            <div class="icon-link">
                <a href="https://en.wikinews.org" target="_blank">
                    <img src="images/icon-wikinews.png" alt="Wikinews">
                </a>
            </div>
        </div>
        <form action="https://en.wikinews.org/w/index.php" method="get">
            <div class="form-group">
                <label for="search_wikinews">Search for:</label>
                <input type="text" id="search_wikinews" name="search" aria-label="Search for">
            </div>
            <div class="form-group">
                <label for="search_wikinews_title">Search in title:</label>
                <input type="text" id="search_wikinews_title" name="title" aria-label="Search in title">
            </div>
            <div class="form-group">
                <label for="namespace_wikinews">Namespace:</label>
                <select id="namespace_wikinews" name="namespace">
                    <option value="">All</option>
                    <option value="0">Article</option>
                    <option value="1">Talk</option>
                    <option value="2">User</option>
                    <option value="3">User Talk</option>
                    <option value="4">Wikinews</option>
                    <option value="5">Wikinews Talk</option>
                    <option value="6">File</option>
                    <option value="7">File Talk</option>
                    <option value="8">MediaWiki</option>
                    <option value="9">MediaWiki Talk</option>
                    <option value="10">Template</option>
                    <option value="11">Template Talk</option>
                    <option value="12">Help</option>
                    <option value="13">Help Talk</option>
                    <option value="14">Category</option>
                    <option value="15">Category Talk</option>
                    <option value="100">Portal</option>
                    <option value="101">Portal Talk</option>
                    <option value="102">School</option>
                    <option value="103">School Talk</option>
                </select>
            </div>
            <div class="form-group">
                <label for="category_wikinews">Category:</label>
                <input type="text" id="category_wikinews" name="category" aria-label="Category">
            </div>
            <div class="form-actions">
                <input type="submit" value="Search">
                <input type="reset" value="Clear Form">
            </div>
        </form>
    </div>

    <!-- Wikimedia Commons Advanced Search Form -->
    <div class="form-container">
        <div class="form-title">
            <h2>Wikimedia Commons Advanced Search</h2>
            <div class="icon-link">
                <a href="https://commons.wikimedia.org" target="_blank">
                    <img src="images/icon-wikimedia-commons.png" alt="Wikimedia Commons">
                </a>
            </div>
        </div>
        <form action="https://commons.wikimedia.org/w/index.php" method="get">
            <div class="form-group">
                <label for="search_commons">Search for:</label>
                <input type="text" id="search_commons" name="search" aria-label="Search for">
            </div>
            <div class="form-group">
                <label for="search_commons_title">Search in title:</label>
                <input type="text" id="search_commons_title" name="title" aria-label="Search in title">
            </div>
            <div class="form-group">
                <label for="namespace_commons">Namespace:</label>
                <select id="namespace_commons" name="namespace">
                    <option value="">All</option>
                    <option value="0">File</option>
                    <option value="1">Talk</option>
                    <option value="2">User</option>
                    <option value="3">User Talk</option>
                    <option value="4">Wikimedia Commons</option>
                    <option value="5">Wikimedia Commons Talk</option>
                    <option value="6">File</option>
                    <option value="7">File Talk</option>
                    <option value="8">MediaWiki</option>
                    <option value="9">MediaWiki Talk</option>
                    <option value="10">Template</option>
                    <option value="11">Template Talk</option>
                    <option value="12">Help</option>
                    <option value="13">Help Talk</option>
                    <option value="14">Category</option>
                    <option value="15">Category Talk</option>
                    <option value="100">Creator</option>
                    <option value="101">Creator Talk</option>
                    <option value="102">TimedText</option>
                    <option value="103">TimedText Talk</option>
                </select>
            </div>
            <div class="form-group">
                <label for="category_commons">Category:</label>
                <input type="text" id="category_commons" name="category" aria-label="Category">
            </div>
            <div class="form-actions">
                <input type="submit" value="Search">
                <input type="reset" value="Clear Form">
            </div>
        </form>
    </div>

    <!-- Wikiquote Advanced Search Form -->
    <div class="form-container">
        <div class="form-title">
            <h2>Wikiquote Advanced Search</h2>
            <div class="icon-link">
                <a href="https://en.wikiquote.org" target="_blank">
                    <img src="images/icon-wikiquote.png" alt="Wikiquote">
                </a>
            </div>
        </div>
        <form action="https://en.wikiquote.org/w/index.php" method="get">
            <div class="form-group">
                <label for="search_wikiquote">Search for:</label>
                <input type="text" id="search_wikiquote" name="search" aria-label="Search for">
            </div>
            <div class="form-group">
                <label for="search_wikiquote_title">Search in title:</label>
                <input type="text" id="search_wikiquote_title" name="title" aria-label="Search in title">
            </div>
            <div class="form-group">
                <label for="namespace_wikiquote">Namespace:</label>
                <select id="namespace_wikiquote" name="namespace">
                    <option value="">All</option>
                    <option value="0">Article</option>
                    <option value="1">Talk</option>
                    <option value="2">User</option>
                    <option value="3">User Talk</option>
                    <option value="4">Wikiquote</option>
                    <option value="5">Wikiquote Talk</option>
                    <option value="6">File</option>
                    <option value="7">File Talk</option>
                    <option value="8">MediaWiki</option>
                    <option value="9">MediaWiki Talk</option>
                    <option value="10">Template</option>
                    <option value="11">Template Talk</option>
                    <option value="12">Help</option>
                    <option value="13">Help Talk</option>
                    <option value="14">Category</option>
                    <option value="15">Category Talk</option>
                    <option value="100">Portal</option>
                    <option value="101">Portal Talk</option>
                </select>
            </div>
            <div class="form-group">
                <label for="category_wikiquote">Category:</label>
                <input type="text" id="category_wikiquote" name="category" aria-label="Category">
            </div>
            <div class="form-actions">
                <input type="submit" value="Search">
                <input type="reset" value="Clear Form">
            </div>
        </form>
    </div>
</div>
