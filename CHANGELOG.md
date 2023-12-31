## Version 4.1 (08/2022)

 * Add support of the `Cache.SerializerPermissions` for default profile

## Version 4.0 (04/2022)

 * [BC Break] Drop support for Symfony < 4.4
 * add support for Symfony 6.x
 * add support for PHPUnit 10.x

## Version 3.0 (12/2019)

 * [BC break] Dropped support for PHP 5.x. PHP 7.1 minimum required.
 * [BC break] Added type hints for scalar and return type hints where possible.
 * [BC Break] The bundle configuration has changed:
    ```yaml
    # Before
    exercise_html_purifier:
        default:
            Cache.SerializerPath: '%kernel.cache_dir%/htmlpurifier'
            # ...
        custom:
            Core.Encoding: 'ISO-8859-1'
         
    # After
    exercise_html_purifier:
        default_cache_serializer_path: '%kernel.cache_dir%/htmlpurifier'
        html_profiles:
            default:
                # ...
            custom:
                config:
                    Core.Encoding: 'ISO-8859-1'
    ```
 * Added an `HTMLPurifierConfigFactory` to handle cache and custom definitions.
 * Refactored `SerializerCacheWarmer` to preload each profile configuration

## Version 2.0 (08/2018)

 * Added compatibility for Symfony 5 and Twig 3
 * Updated minimum requirement of Twig to 1.35 and 2.4 to support runtime
 * [BC break] Dropped support for Symfony 2. Symfony 3.4 minimum required.
 * [BC break] Removed classes parameters.
 * [BC break] Removed the form data transformer.
 * Added an `HTMLPurifierTextTypeExtension` to add `purify_html` and
   `purify_html_profile` options to all `TextType` children.
 * Added an `HTMLPurifierListener` to purify submitted form data.
 * Added an `HTMLPurifiersRegistryInterface` to lazy load purifiers by profile.
 * Added a Twig `HTMLPurifierRuntime` to lazy load purifiers in templates.
 * Added a pass to use custom `\HTMLPurifier` classes as custom profiles using
   a new `exercise.html_purifier` tag.
