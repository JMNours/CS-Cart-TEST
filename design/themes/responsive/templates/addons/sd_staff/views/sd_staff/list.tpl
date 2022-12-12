{if !$config.tweaks.disable_dhtml}
    {assign var="ajax_class" value="cm-ajax"}

{/if}

{include file="common/pagination.tpl"}

<table class="ty-table ty-orders-search">
    <thead>
        <tr>
            <th><a class="{$ajax_class}" href="{"`$c_url`&sort_by=name"|fn_url}" data-ca-target-id="pagination_contents">{__("sd_staff.name")}</a>{if $staff.sort_by === "name"}{$sort_sign nofilter}{/if}</th>
            <th><a class="{$ajax_class}" href="{"`$c_url`&sort_by=function"|fn_url}" data-ca-target-id="pagination_contents">{__("sd_staff.function")}</a>{if $staff.sort_by === "function"}{$sort_sign nofilter}{/if}</th>
            <th><a class="{$ajax_class}" href="{"`$c_url`&sort_by=email"|fn_url}" data-ca-target-id="pagination_contents">{__("sd_staff.email")}</a>{if $staff.sort_by === "email"}{$sort_sign nofilter}{/if}</th>
        </tr>
    </thead>
    {foreach from=$staff item="item"}
        <tr>
            <td class="ty-orders-search__item">{$item.name}</td>
            <td class="ty-orders-search__item">{$item.function}</td>
            <td class="ty-orders-search__item">{$item.email}</td>
        </tr>
    {foreachelse}
        <tr class="ty-table__no-items">
            <td colspan="7">
                <p class="ty-no-items">{__("sd_staff.no_staff")}</p>
            </td>
        </tr>
    {/foreach}
</table>

{include file="common/pagination.tpl"}

{capture name="mainbox_title"}{__("sd_staff")}{/capture}
