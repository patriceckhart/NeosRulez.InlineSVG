<?php
namespace NeosRulez\InlineSVG\Fusion;

use Neos\Flow\Annotations as Flow;
use Neos\Fusion\FusionObjects\AbstractFusionObject;

class SVGFusion extends AbstractFusionObject {

    /**
     * @return string
     */
    public function evaluate() {
        $result = false;
        $svgFile = $this->fusionValue('svgFile');
        if($svgFile) {
            $relativeFile = parse_url($svgFile);
            $fileContent = file_get_contents(constant('FLOW_PATH_ROOT') . 'Web' . $relativeFile['path']);
            $result = strstr($fileContent, '<svg');
        }
        return $result;
    }

}