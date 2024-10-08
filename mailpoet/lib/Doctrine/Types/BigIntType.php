<?php // phpcs:ignore SlevomatCodingStandard.TypeHints.DeclareStrictTypes.DeclareStrictTypesMissing

namespace MailPoet\Doctrine\Types;

if (!defined('ABSPATH')) exit;


use MailPoetVendor\Doctrine\DBAL\ParameterType;
use MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform;
use MailPoetVendor\Doctrine\DBAL\Types\BigIntType as DoctrineBigIntType;

class BigIntType extends DoctrineBigIntType {
  // override Doctrine's bigint type that historically maps DB's "bigint" to PHP's "string"
  // (we want to map DB's "bigint" to PHP's "int" in today's 64-bit world)
  const NAME = 'bigint';

  public function getBindingType() {
    return ParameterType::INTEGER;
  }

  public function convertToPHPValue($value, AbstractPlatform $platform) {
    return $value === null ? null : (int)$value;
  }

  public function getName() {
    return self::NAME;
  }
}
