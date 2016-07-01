<?php

namespace Camisa\Presenters;

use Camisa\Transformers\CategoryTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CategoryPresenter
 *
 * @package namespace Camisa\Presenters;
 */
class CategoryPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CategoryTransformer();
    }
}
