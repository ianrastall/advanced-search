<?php
function compile_template($template_file) {
    ob_start();
    include $template_file;
    return ob_get_clean();
}

$template_files = [
    'header.php',
    'wikimedia_search.php',
    'google_search.php',
    'footer.php'
];

$compiled_content = '';
foreach ($template_files as $file) {
    $compiled_content .= compile_template("templates/$file");
}

file_put_contents('index.html', $compiled_content);
echo "Compiled index.html successfully.";
?>
