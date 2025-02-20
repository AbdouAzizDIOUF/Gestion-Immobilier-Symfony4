<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'behat/transliterator' => 'v1.3.0@3c4ec1d77c3d05caa1f0bf8fb3aae4845005c7fc',
  'cocur/slugify' => 'v3.2@d41701efe58ba2df9cae029c3d21e1518cc6780e',
  'doctrine/annotations' => '1.10.2@b9d758e831c70751155c698c2f7df4665314a1cb',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => '2.12.0@2053eafdf60c2172ee1373d1b9289ba1db7f1fc6',
  'doctrine/dbal' => '2.10.2@aab745e7b6b2de3b47019da81e7225e14dcfdac8',
  'doctrine/doctrine-bundle' => '1.11.2@28101e20776d8fa20a00b54947fbae2db0d09103',
  'doctrine/doctrine-cache-bundle' => '1.4.0@6bee2f9b339847e8a984427353670bad4e7bdccb',
  'doctrine/doctrine-migrations-bundle' => '2.1.2@856437e8de96a70233e1f0cc2352fc8dd15a899d',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'doctrine/migrations' => '2.2.1@a3987131febeb0e9acb3c47ab0df0af004588934',
  'doctrine/orm' => 'v2.7.2@dafe298ce5d0b995ebe1746670704c0a35868a6a',
  'doctrine/persistence' => '1.3.7@0af483f91bada1c9ded6c2cfd26ab7d5ab2094e0',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'egulias/email-validator' => '2.1.17@ade6887fd9bd74177769645ab5c474824f8a418a',
  'fig/link-util' => '1.1.0@47f55860678a9e202206047bc02767556d298106',
  'fzaninotto/faker' => 'v1.9.1@fc10d778e4b84d5bd315dad194661e091d307c6f',
  'imagine/imagine' => 'v0.7.1@a9a702a946073cbca166718f1b02a1e72d742daa',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'jms/metadata' => '2.1.0@8d8958103485c2cbdd9a9684c3869312ebdaf73a',
  'knplabs/knp-components' => 'v1.3.10@fc1755ba2b77f83a3d3c99e21f3026ba2a1429be',
  'knplabs/knp-paginator-bundle' => 'v2.8.0@f4ece5b347121b9fe13166264f197f90252d4bd2',
  'liip/imagine-bundle' => '2.1.0@1acae6ac066e431c3c55c4d39971827a02cbe4d5',
  'monolog/monolog' => '1.25.3@fa82921994db851a8becaf3787a9e73c5976b6f1',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'phpdocumentor/reflection-common' => '2.0.0@63a995caa1ca9e5590304cd845c15ad6d482a62a',
  'phpdocumentor/reflection-docblock' => '5.1.0@cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e',
  'phpdocumentor/type-resolver' => '1.1.0@7462d5f123dfc080dfdf26897032a6513644fc95',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'sensio/framework-extra-bundle' => 'v5.2.4@1fdf591c4b388e62dbb2579de89c1560b33f865d',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/asset' => 'v4.1.12@99f63179af547dc3c9081cc6b28b6b202178fbcc',
  'symfony/cache' => 'v4.1.12@399ddbf0ff98f42593827141b5fcd95d51c36b28',
  'symfony/config' => 'v4.1.12@11a25a6407b7f01d5cd28a2a18269e5c7fe8e1a8',
  'symfony/console' => 'v4.1.12@9e87c798f67dc9fceeb4f3d57847b52d945d1a02',
  'symfony/debug' => 'v4.1.12@caf0f3fa57d59f2bc3a249087d6dcf017093758d',
  'symfony/dependency-injection' => 'v4.1.12@919a245e0642afa353a333d8bf3352320af85969',
  'symfony/doctrine-bridge' => 'v4.1.12@f1939a563057ee76c29c176676bef1d7a4d2735d',
  'symfony/event-dispatcher' => 'v4.1.12@51be1b61dfe04d64a260223f2b81475fa8066b97',
  'symfony/expression-language' => 'v4.1.12@3fbfc1339da476720d032227213e448aa7d69f36',
  'symfony/filesystem' => 'v4.1.12@93f4b83148903dcfb430867b8ae4902335e3446f',
  'symfony/finder' => 'v4.1.12@33bae4a56d3c95ac13bc586c1aa57b2baeaa5088',
  'symfony/flex' => 'v1.6.2@e4f5a2653ca503782a31486198bd1dd1c9a47f83',
  'symfony/form' => 'v4.1.12@4bcc0f21abfc07c5d712c6da8922a31e75891f2c',
  'symfony/framework-bundle' => 'v4.1.12@2bc4a9a50b333ba08709c9007ec62b0345feac45',
  'symfony/http-foundation' => 'v4.1.12@b08bbec147e1d2dc01b6bb2e65f6718c0821f507',
  'symfony/http-kernel' => 'v4.1.13@5cafdc218d07a97650a262140e1ba3326611d406',
  'symfony/inflector' => 'v4.1.12@eb5c654f16c0e18d3a332984dc0ce44b0d218813',
  'symfony/intl' => 'v4.1.12@abd522a6ddddba892e00003127710add0788faab',
  'symfony/monolog-bridge' => 'v4.1.12@38914f9d9e7f8fcffd9c37afa1ec89746983cd3b',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/options-resolver' => 'v4.1.12@71ac11db68d3d0ca8e6cf9547fb9752cdccd8f17',
  'symfony/orm-pack' => 'v1.0.8@c9bcc08102061f406dc908192c0f33524a675666',
  'symfony/polyfill-intl-icu' => 'v1.15.0@9c281272735eb66476e0fa7381e03fb0d4b60197',
  'symfony/polyfill-intl-idn' => 'v1.15.0@47bd6aa45beb1cd7c6a16b7d1810133b728bdfcf',
  'symfony/polyfill-mbstring' => 'v1.15.0@81ffd3a9c6d707be22e3012b827de1c9775fc5ac',
  'symfony/polyfill-php72' => 'v1.15.0@37b0976c78b94856543260ce09b460a7bc852747',
  'symfony/process' => 'v4.1.12@72d838aafaa7c790330fe362b9cecec362c64629',
  'symfony/property-access' => 'v4.1.12@bea157e52fe4d62df0dbf3d7c6bca2adef75b201',
  'symfony/property-info' => 'v4.1.12@48161081edc4ea5c818d6e0107ec6075612f0173',
  'symfony/routing' => 'v4.1.12@da122c1ee55cf15bf9784e739b2251dec638f9cc',
  'symfony/security' => 'v4.1.12@9775f1929cfa18a710c63a74a1caa768da8abc15',
  'symfony/security-bundle' => 'v4.1.12@6161cf206bf36c3994d03edbe0a73e40c9ea4700',
  'symfony/serializer' => 'v4.1.12@64681d473fd15ed79ab9e24ecb03756b17c962c8',
  'symfony/serializer-pack' => 'v1.0.3@9bbce72dcad0cca797b678d3bfb764cf923ab28a',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'symfony/stopwatch' => 'v4.1.12@2b2c0bb9e41058ad86b1b5c5bf054146ae6a0491',
  'symfony/swiftmailer-bundle' => 'v3.3.1@defa9bdfc0191ed70b389cb93c550c6c82cf1745',
  'symfony/templating' => 'v4.1.12@c14b05d166f825dfe1f50154536c49971a8d5930',
  'symfony/translation' => 'v4.1.12@347b9f093a2554ce3174ae56cc25a21381352c76',
  'symfony/twig-bridge' => 'v4.1.12@9996f433a00f858c562ed9f6f5a01579b3f63224',
  'symfony/twig-bundle' => 'v4.1.12@59f37edc168ce420ed8ad4e6c9f1272bc99e7ecc',
  'symfony/validator' => 'v4.1.12@a2956c89d13da760d07b438a0a0cd7045a628fd4',
  'symfony/web-link' => 'v4.1.12@e6b5dd07b30ff6dd8b576e9172a11d85468c8000',
  'symfony/webpack-encore-bundle' => 'v1.7.3@5c0f659eceae87271cce54bbdfb05ed8ec9007bd',
  'symfony/yaml' => 'v4.1.12@874d9210fe0ad4f6326a45d163ad815a71ad8b38',
  'twig/twig' => 'v2.12.5@18772e0190734944277ee97a02a9a6c6555fcd94',
  'vich/uploader-bundle' => '1.11.0@8ef4935f5535bb4e967f30ee95dff358c7c0705e',
  'webmozart/assert' => '1.8.0@ab2cb0b3b559010b75981b1bdce728da3ee90ad6',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'doctrine/data-fixtures' => '1.4.2@39e9777c9089351a468f780b01cffa3cb0a42907',
  'doctrine/doctrine-fixtures-bundle' => '3.2.2@90e4a4f968b2dae40e290a6ee516957af043f16c',
  'nikic/php-parser' => 'v4.4.0@bd43ec7152eaaab3bd8c6d0aa95ceeb1df8ee120',
  'symfony/browser-kit' => 'v4.1.12@a3e81b995be65597ec709bb5fa188397a38a8c25',
  'symfony/css-selector' => 'v4.1.12@70f0cdf76779af4d5be14a3cd11c0200fd304ee6',
  'symfony/debug-bundle' => 'v4.1.12@29b2b8e2a06b067c16d8a5364b69c29488d4a902',
  'symfony/debug-pack' => 'v1.0.8@7310a66f9f81c9f292ff9089f0b0062386cb83fb',
  'symfony/dom-crawler' => 'v4.1.12@191419afb4e38633a7dd6dfe1450c2211a057e9e',
  'symfony/dotenv' => 'v4.1.12@67feddcfa6f31f6845899514e007af7532b84663',
  'symfony/maker-bundle' => 'v1.15.0@31396f2e61803f0e2debbb43ba5aa21acbc6e15a',
  'symfony/phpunit-bridge' => 'v5.0.7@0258b43a94972abf1ee99ce2221359f8ac2a17fd',
  'symfony/profiler-pack' => 'v1.0.4@99c4370632c2a59bb0444852f92140074ef02209',
  'symfony/test-pack' => 'v1.0.6@ff87e800a67d06c423389f77b8209bc9dc469def',
  'symfony/var-dumper' => 'v4.1.12@229cd66245a78088fe580a22bfcc48ba2f014605',
  'symfony/web-profiler-bundle' => 'v4.1.12@3114509724ebf58aa1e30c33e7528015111411df',
  'symfony/web-server-bundle' => 'v4.1.12@95ca07ea9caed4e94f584cd2324599b922f648eb',
  'paragonie/random_compat' => '2.*@f102614bbf185f7e99071ae03c0580633e1452b0',
  'symfony/polyfill-ctype' => '*@f102614bbf185f7e99071ae03c0580633e1452b0',
  'symfony/polyfill-iconv' => '*@f102614bbf185f7e99071ae03c0580633e1452b0',
  'symfony/polyfill-php71' => '*@f102614bbf185f7e99071ae03c0580633e1452b0',
  'symfony/polyfill-php70' => '*@f102614bbf185f7e99071ae03c0580633e1452b0',
  'symfony/polyfill-php56' => '*@f102614bbf185f7e99071ae03c0580633e1452b0',
  '__root__' => 'dev-master@f102614bbf185f7e99071ae03c0580633e1452b0',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
