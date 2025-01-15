<?php // phpcs:ignore SlevomatCodingStandard.TypeHints.DeclareStrictTypes.DeclareStrictTypesMissing

namespace MailPoet\Captcha;

if (!defined('ABSPATH')) exit;


class CaptchaConstants {
  const TYPE_BUILTIN = 'built-in';
  const TYPE_RECAPTCHA = 'recaptcha';
  const TYPE_RECAPTCHA_INVISIBLE = 'recaptcha-invisible';
  const TYPE_DISABLED = null;
  const TYPE_SETTING_NAME = 'captcha.type';

  public static function isReCaptcha(?string $captchaType) {
    return in_array($captchaType, [self::TYPE_RECAPTCHA, self::TYPE_RECAPTCHA_INVISIBLE]);
  }

  public static function isBuiltIn(?string $captchaType) {
    return $captchaType === self::TYPE_BUILTIN;
  }
}