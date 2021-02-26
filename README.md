# Inline svg nodetype for Neos CMS

A package for Neos CMS which render svg's inline.

## Installation

The NeosRulez.InlineSVG package is listed on packagist (https://packagist.org/packages/neosrulez/inlinesvg) - therefore you don't have to include the package in your "repositories" entry any more.

Just run:

```
composer require neosrulez/inlinesvg
```

## Usage as component in fusion

```
<NeosRulez.InlineSVG:Component.SVGTag 
   image={asset} 
   identifier="yourUniqueIdentifier" 
   width="500" />
```

## Author

* E-Mail: mail@patriceckhart.com
* URL: http://www.patriceckhart.com 