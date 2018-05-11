<?php

/**
 * @var rex_addon $this
 */

// register a custom yrewrite scheme
// rex_yrewrite::setScheme(new rex_project_rewrite_scheme());

// register yform template path
// rex_yform::addTemplatePath($this->getPath('yform-templates'));

\rex_view::addJsFile($this->getAssetsUrl('jquery.tablesorter.combined.js'));
\rex_view::addJsFile($this->getAssetsUrl('jquery.metadata.js'));
\rex_view::addJsFile($this->getAssetsUrl('tablesorter-custom.js'));
\rex_view::addCssFile($this->getAssetsUrl('theme.default.css'));
