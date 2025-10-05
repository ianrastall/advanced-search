# Advanced Search Hub

Advanced Search Hub is a standalone, dark-themed HTML application that brings advanced search interfaces for multiple platforms into a single place. The page uses only native HTML, CSS, and JavaScript; no build step or external dependencies.

## How it works
- Open `index.html` in a modern browser (the Fetch API is required to load the modular forms).
- Use the provider dropdowns at the top to pick the search you want to run; the matching form becomes active.
- Complete the form and submit. Each form opens the provider's site in a new tab with the query string that was built from your inputs.
- The forms reset after submission so you can run another query quickly.

## Available search forms

### Google
- Web search with support for reading level, verbatim mode, date ranges, usage rights, file types, and region/language filters.
- Images search, including license, file type, size, color, and date range filters.
- News search with region, SafeSearch, time range, and site filtering.
- Scholar search with inclusion/exclusion terms, author and publication filters, and custom date ranges.
- Books search with availability, content type, metadata fields, identifiers, and publication-range filters.

### MediaWiki projects
- Wikipedia, Wikibooks, Wikisource, and Wikimedia Commons searches with namespace toggles, language selection, and other project-specific filters.

### Developer and content platforms
- GitHub repositories/code/issues/PRs/discussions with qualifiers for owners, topics, language, activity ranges, and sorting.
- Stack Overflow advanced query builder for tags, score ranges, accepted answers, and time windows.
- Reddit search with subreddit scoping, time filters, and sorting.
- YouTube search with duration, upload date, channel, subtitle, and live content filters.
- MDN Web Docs search with area, topic, and product filters.
- IMDb title search with media type, release years, ratings, certificate, and crew filters.
- PyPI package search with classifiers, version release recency, and project metadata filters.

### Research and data resources
- PubMed clinical and literature search with fielded boolean logic, article types, text availability, date presets/custom ranges, and result pagination.
- Internet Archive search builder supporting mediatype filters, collection handling, field selection, sorting, and JSON/CSV/HTML output targets.
- data.census.gov parameter builder with dataset, geography, NAICS, year filters, and support for arbitrary query parameters.

## Project layout
- `index.html` contains global styling, the provider selector UI, and all JavaScript helpers (form initialization, URL builders, form reset helpers).
- `sites/` holds the modular form fragments for each provider; they are fetched and injected into the main page at runtime to keep maintenance manageable.

## Extending the hub
1. Add a new HTML fragment in `sites/` that follows the existing structure (form with `search-form` class and appropriate IDs).
2. Register the form in the provider selector block inside `index.html` and add a matching `site-include` placeholder.
3. Add a helper function in `index.html` to translate form inputs into the provider URL and wire it to the form's submit button.

Because everything is static, you can host the project from any static web server or open the files locally. For best results, serve the folder (for example with `python -m http.server`) so that `fetch` calls can resolve the `sites/` fragments without CORS restrictions.
