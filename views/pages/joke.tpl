{extends file="layouts/main.tpl"}
{block name="body"}
<h1 class="mb-4 pb-2">Random Joke</h1>
<p>{$joke.setup}</p>
<p>... {$joke.delivery}</p>
{/block}
