<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * To re-generate this file run bin/build.php
 *
 *
 * @generated SignedSource<<6039f462ffeaf01ad233660e95c2691c>>
 */

final class JumpControllerParameters
  extends \Facebook\HackRouter\RequestParametersCodegen {

  const type TParameters = shape(
    'Keyword' => string,
  );

  public function get(): self::TParameters {
    $p = $this->getParameters();
    return shape(
      'Keyword' => $p->getString('Keyword'),
    );
  }
}

trait JumpControllerParametersTrait {

  require extends \WebController;

  <<__Memoize>>
  final protected function getParameters(
  ): JumpControllerParameters::TParameters {
    $raw = $this->getParameters_PRIVATE_IMPL();
    return (new JumpControllerParameters($raw))
      ->get();
  }
}
