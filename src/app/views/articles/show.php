<?php

echo $pageTitle, '<br>';

if ($pageId) {
    echo 'Page ID: ' . $pageId . '<br>';
}

if ($article) {
    debug($article);
}
