<?php

namespace Yandex\Beru\Partner\Models;

use Yandex\Common\ObjectModel;

class Mapping extends ObjectModel
{
    protected $marketSku;
    protected $categoryId;
    protected $modelId;

    /**
     * @return int
     */
    public function getMarketSku()
    {
        return $this->marketSku;
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @return int
     */
    public function getModelId()
    {
        return $this->modelId;
    }
}