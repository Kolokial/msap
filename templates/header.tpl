<nav>
	<ul>
	{foreach from=$navigation item=keyValues}
		<li><a href="{$realPath}{$keyValues.href}">{$keyValues.text}</a></li>
	{/foreach}
	</ul>
</nav>