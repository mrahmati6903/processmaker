<?php

namespace ProcessMaker\Transformers;

use League\Fractal\TransformerAbstract;
use ProcessMaker\Model\Script;

/**
 * Script transformer, used to prepare the JSON response returned in the
 * designer's endpoints.
 *
 * @package ProcessMaker\Transformer
 */
class ScriptTransformer extends TransformerAbstract
{

    /**
     * Transform the script.
     *
     * @param Script $script
     *
     * @return array
     */
    public function transform(Script $script)
    {
        return [
            'uid' => $script->uid,
            'title' => $script->title,
            'description' => $script->description,
            'type' => $script->type,
            'webbot' => $script->webbot,
            'param' => $script->param,
        ];
    }
}
