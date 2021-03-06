/**
 * Override or insert variables into the comment templates.
 *
 * @param \$vars
 *   An array of variables to pass to the theme template.
 * @param \$hook
 *   The name of the template being rendered ("comment" in this case.)
 */
function ${1:phptemplate}_preprocess_comment(&\$vars, \$hook) {
  \$comment = \$vars['comment'];$2
}

$3