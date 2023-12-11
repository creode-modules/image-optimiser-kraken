<?php

namespace Modules\KrakenImageOptimiser\app\Optimisers;

use Kraken;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Modules\ImageOptimiser\app\Presets\Preset;
use Modules\ImageOptimiser\app\Concerns\OptimiserInterface;

class KrakenOptimiser implements OptimiserInterface
{
    /**
     * {@inheritdoc}
     */
    public function optimise(string $imageUrl, Preset $preset): Response {
        $method = 'url';
        if (Str::startsWith($imageUrl, '/storage')) {
            $method = 'upload';
            $imageUrl = public_path($imageUrl);
        }

        $kraken = new Kraken(config('kraken-image-optimiser.api_key'), config('kraken-image-optimiser.api_secret'));

        $uploadData = [
            'file' => $imageUrl,
            'wait' => true,
            'lossy' => true,
            'webp' => config('kraken-image-optimiser.webp_enabled', true),
        ];





        $krakenResponse = $kraken->upload($uploadData);

        // Cache/Save the image?

        // Send it back.
            // ->wait(true)
            // ->lossy(true)
            // ->resize([
            //     'width' => $preset->width,
            //     'height' => $preset->height,
            //     'strategy' => 'auto',
            // ])
            // ->webp(config('kraken-image-optimiser.webp_enabled', true));

        $requestData = [
            'auth' => [
                config('kraken-image-optimiser.api_key'),
                config('kraken-image-optimiser.api_secret'),
            ],
            'form_params' => [

            ],
        ];

        return new Response();
    }
}
