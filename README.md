# OpenAI powered fixes for wordpress sage errors

Use the OpenAI API together with Laravel Ignition's Suggestions to show AI-powered fixes for errors in your Wordpress/sage application.

## Get started

First install OpenAI Exceptions via [Composer](https://getcomposer.org/). You'll probably want to install it as dev dependency:

```bash
composer require --dev dukens/openai-exceptions
```

Next, publish the configuration file:

```bash
wp acorn vendor:publish --provider="Dukens\OpenaiExceptions\OpenAiSolutionServiceProvider" --tag="config"
```

This will create a `config/openai-exceptions.php` configuration file in your project, which you can modify to your needs. All options are documented in the file, but the only one you need is your OpenAI API key, which you'll specify in your `.env` file:

```
OPENAI_API_KEY={YOUR KEY HERE}
```

## Customising the prompt

If you wish to customise the prompt that is being sent to the OpenAI client for every exception, you can publish the blade view, and change it as desired:

```bash
 wp acorn vendor:publish --provider="Dukens\OpenaiExceptions\OpenAiSolutionServiceProvider" --tag="views"
```
