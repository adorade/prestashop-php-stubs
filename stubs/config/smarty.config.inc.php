<?php

// This escape modifier is required for invoice PDF generation
function smartyEscape($string, $esc_type = 'html', $char_set = \null, $double_encode = \true)
{
}
function smarty_modifier_htmlentitiesUTF8($string)
{
}
function smartyRegisterFunction($smarty, $type, $function, $params, $lazy = \true, $initial_lazy_register = \null)
{
}
function smartyHook($params, &$smarty)
{
}
function smartyCleanHtml($data)
{
}
function smartyClassname($classname)
{
}
function smartyClassnames(array $classnames)
{
}
/**
 * We add this intermediate method to prevent a warning because end expects its input to be a reference
 *
 * @param array<mixed> $arrayValue
 *
 * @return false|mixed
 */
function smarty_endWithoutReference($arrayValue)
{
}
