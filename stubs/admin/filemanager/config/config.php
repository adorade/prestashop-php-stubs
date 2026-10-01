<?php

// Properly assign admin directory path, we don't want to use relative traversal here,
// it creates problems in some methods that use basename(_PS_ADMIN_DIR_), like Link class.
\define('_PS_ADMIN_DIR_', \dirname(__DIR__, 2));
