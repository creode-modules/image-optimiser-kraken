<?php

namespace Modules\KrakenImageOptimiser\app\Optimisers;

use Illuminate\Http\Response;
use Modules\ImageOptimiser\app\Concerns\OptimiserInterface;
use Modules\ImageOptimiser\app\Presets\Preset;

class KrakenOptimiser implements OptimiserInterface
{
    /**
     * {@inheritdoc}
     */
    public function optimise(string $imageUrl, Preset $preset): Response {
        return new Response();
    }
}
