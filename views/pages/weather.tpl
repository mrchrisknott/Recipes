{extends file="layouts/main.tpl"}
{block name="body"}
<h1 class="mb-4 pb-2">The weather in {$current_location}</h1>
<p>The current weather in {$current_location} is {$current_weather.weather[0].main}.</p>
{/block}
 