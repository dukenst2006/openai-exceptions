<?php

namespace Dukens\OpenaiExceptions;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Spatie\Ignition\Contracts\SolutionProviderRepository;

class OpenAiSolutionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/openai-exceptions.php' => $this->app->configPath('openai-exceptions.php'),
        ], 'config');

        if (config('openai-exceptions.api_key')) {
            $this->app->make(SolutionProviderRepository::class)
                ->registerSolutionProvider(OpenAiSolutionProvider::class);
        }
    }
}
