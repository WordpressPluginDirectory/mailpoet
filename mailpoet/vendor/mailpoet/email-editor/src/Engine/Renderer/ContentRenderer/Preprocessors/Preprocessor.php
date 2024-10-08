<?php declare(strict_types = 1);
namespace MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Preprocessors;
if (!defined('ABSPATH')) exit;
interface Preprocessor {
 public function preprocess(array $parsedBlocks, array $layout, array $styles): array;
}
