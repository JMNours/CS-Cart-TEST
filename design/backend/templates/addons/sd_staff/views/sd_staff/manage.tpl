{capture name="mainbox"}
    {$title = __('sd_staff')}

    {$has_permission=fn_check_permissions("sd_staff", "update", "admin", "POST")}

    <form action="{""|fn_url}" method="post" name="sd_staff_tree_form" id="sd_staff_tree_form">
        <input type="hidden" name="redirect_url" value="{$config.current_url}" />

        {include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id=$smarty.request.content_id hide_position=$hide_position}

        {capture name="sd_staff_table"}
            <div class="items-container multi-level staff-tree__content">
                {if $staff_tree}
                    {include file="addons/sd_staff/views/sd_staff/components/sd_staff_tree.tpl" header=true show_id=true combination_suffix="_list" is_bulkedit_menu=true}
                {else}
                    {if !$hide_show_all}
                        <p class="no-items">{__("no_data")}</p>
                    {/if}
                {/if}
            </div>
        {/capture}

        {include file="common/context_menu_wrapper.tpl"
            has_permission=$has_permission
            form="sd_staff_tree_form"
            object="sd_staff"
            items=$smarty.capture.sd_staff_table
        }

        {include file="common/pagination.tpl" div_id=$smarty.request.content_id}

        {$rev=$smarty.request.content_id|default:"pagination_contents"}

        {capture name="adv_buttons"}
            {include file="common/tools.tpl" tool_href="sd_staff.add" prefix="top" title=__('sd_staff.add') hide_tools=true icon="icon-plus"}
        {/capture}        
    </form>
{/capture}

{include file="common/mainbox.tpl" title=$title content=$smarty.capture.mainbox  buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons sidebar=$smarty.capture.sidebar content_id="manage_staff"}