# PHP Static Analysis Tools configurations

This repository, besides the PHPCS **LynxSolutionsCodingStandard**, includes also configuration files for various static analysis tools used by LynxSolutions PHP(mostly Laravel) projects.

## Installation

Composer:
```shell
composer require --dev lynxsolutions/php-static-analysis
```

## Usage

### PHP_CodeSniffer:

In your project's `phpcs.xml` file add the following line:
```xml
<rule ref="LynxSolutionsCodingStandard"/>
```

If you don't have a `phpcs.xml` file, here's a simple example:
```xml
<?xml version="1.0"?>
<ruleset
        name="LynxSolutions PHPCS default configuration"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:noNamespaceSchemaLocation="./vendor/squizlabs/php_codesniffer/phpcs.xsd"
>
    <description>LynxSolutions PHPCS default configuration.</description>
    
    <arg name="extensions" value="php"/>
    <arg name="colors" />

    <arg value="sp"/>

    <file>app</file>
    <file>bootstrap</file>
    <file>config</file>
    <file>database</file>
    <file>routes</file>
    <file>tests</file>

    <exclude-pattern>cache/*</exclude-pattern>

    <rule ref="LynxSolutionsCodingStandard"/>
</ruleset>
```

Now you should be able to run:
```shell
vendor/bin/phpcs
```

### PHP Mess Detector:
If you don't have the `phpmd/phpmd` package installed, you can install it by running:
```shell
composer require --dev phpmd/phpmd
```

Then, in your project's `phpmd.xml` file add the following line:
```xml
<rule ref="vendor/lynxsolutions/php-static-analysis/phpmd/phpmd.xml"/>
```

If you don't have a `phpmd.xml` file, here's a simple example:
```xml
<?xml version="1.0"?>
<ruleset
    name="LynxSolutions PHPMD default configuration"
    xmlns="http://pmd.sf.net/ruleset/1.0.0"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://pmd.sf.net/ruleset/1.0.0 http://pmd.sf.net/ruleset_xml_schema.xsd"
    xsi:noNamespaceSchemaLocation="http://pmd.sf.net/ruleset_xml_schema.xsd"
>
    <description>LynxSolutions PHPMD default configuration.</description>

    <rule ref="vendor/lynxsolutions/php-static-analysis/phpmd/phpmd.xml"/>
</ruleset>
```

Now you can run:
```shell
vendor/bin/phpmd app,bootstrap,config,database,routes,tests text phpmd.xml
```