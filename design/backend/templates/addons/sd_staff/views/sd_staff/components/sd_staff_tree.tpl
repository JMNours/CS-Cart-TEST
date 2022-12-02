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
                <thead>
                    <tr>
                        <th class="text-over" width="7%">
                            <span style="padding-{$direction}: 14px;">&nbsp;</span>
                            {__("sd_staff.id")}
                        </th>
                        <th width="70%" class="left">{__("sd_staff.name")}</th>
                        <th width="10%" class="left">{__("sd_staff.function")}</th>
                    </tr>
                </thead>
                {/if}
                <td class="row-status" width="7%" data-th="{__("sd_staff.id")}">
                    {strip}
                        <div class="text-over">
                                <span style="padding-{$direction}: 14px;">&nbsp;</span>
                                {$staff.id}
                        </div>
                    {/strip}
                </td>
                <td class="row-status" width="70%" data-th="{__("sd_staff.name")}">
                    {strip}
                        <div class="text-over">
                            <a href="{"sd_staff.update?id=`$staff.id`&come_from=`$_come_from`"|fn_url}" id="sd_staff_title_{$staff.id}" title="{$staff.name}">
                                {$staff.name}
                            </a>
                        </div>
                    {/strip}
                </td>
                
                <td width="10%" class="mobile-hide" data-th="{__("sd_staff.function")}">
                    <div class="text-over">
                        {$staff.function}
                    </div>
                </td>
            </tr>
        </table>
    </div>
{/foreach}