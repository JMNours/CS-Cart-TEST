{if !$checkbox_name}
    {$checkbox_name="staff_ids"}
{/if}

{foreach from=$staff_tree item=staff}

    {if $language_direction == "rtl"}
        {$direction = "right"}
    {else}
        {$direction = "left"}
    {/if}
    
    <div class="longtap-selection" data-ca-bulkedit-component="tableWrapper">
        <table width="100%" class="table table-tree table-middle table--relative table-nobg table-responsive">
            {if $header && !$hide_header}
                {$header=""}
                <thead data-ca-bulkedit-default-object="true" data-ca-bulkedit-component="defaultObject">
                    <tr>
                        <th class="left mobile-hide" width="6%">
                            {if $display != "radio"}
                                {include file="common/check_items.tpl"}
                            {/if}
                        </th>
                        {if !$hide_delete_button}
                            <th width="10%" class="mobile-hide">&nbsp;</th>
                        {/if}
                        {if !$picker}
                            <th width="10%" class="right">{__("status")}</th>
                        {/if}
                    </tr>
                </thead>
                {/if}
                <td class="left mobile-hide" width="6%">
                    {if $display == "radio"}
                        <input type="radio" name="{$checkbox_name}" id="radio_{$staff.id}" value="{$staff.id}" class="cm-item" />
                    {else}
                        <input type="checkbox" name="{$checkbox_name}[]" id="checkbox_{$staff.id}" value="{$staff.id}" class="cm-item cm-item-status user-success" />
                    {/if}
                </td>
                {if !$picker && !$hide_position}
                    <td width="7%" class="mobile-hide" data-th="{__("position_short")}">
                        <input type="text" name="pages_data[{$staff.id}][position]" size="3" maxlength="10" value="{$staff.position}" class="input-micro input-hidden" />
                    </td>
                {/if}
                <td class="row-status" width="70%" data-th="{__("name")}">
                    {strip}
                        <div class="text-over" {if $search.get_tree == "multi_level"}style="padding-{$direction}: {math equation="x*14" x=$page.level|default:0}px;"{/if}>
                                <span style="padding-{$direction}: 14px;">&nbsp;</span>

                            <a href="{"sd_staff.update?id=`$staff.id`&come_from=`$_come_from`"|fn_url}" id="st_staff_title_{$staff.id}" title="{$staff.staff}">
                                {$staff.staff}
                            </a>
                                <span class="muted"> <small>
                                    #{$staff.id}
                                </small></span>
                        </div>
                    {/strip}
                </td>
                {if !$picker}
                    <td width="10%" class="mobile-hide" data-th="{__("tools")}">
                        <input type="hidden" name="pages_data[{$page.page_id}][parent_id]" size="3" maxlength="10" value="{$page.parent_id}" />
                        {capture name="tools_list"}
                            {if $search.get_tree}
                                {$multi_level="&multi_level=Y"}
                            {/if}
                            {if !$picker}
                                {$_href="sd_staff.update?id=`$satff.id`&come_from=`$_come_from`"}
                            {/if}
                            <li>{btn type="list" text=__("edit") href=$_href}</li>
                        {/capture}
                        <div class="hidden-tools">
                            {dropdown content=$smarty.capture.tools_list}
                        </div>
                    </td>
                {/if}
            </tr>
        </table>
    </div>
{/foreach}