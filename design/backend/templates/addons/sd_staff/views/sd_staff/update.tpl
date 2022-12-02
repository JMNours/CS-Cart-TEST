{if $staff_data}
    {assign var="id" value=$staff_data.id}
{else}
    {assign var="id" value=0}
{/if}

<form name="staff_form" enctype="multipart/form-data" action="{""|fn_url}" method="post" class="admin-content-external-form form-horizontal form-edit">
    {capture name="mainbox"}

        {capture name="tabsbox"}
            {$hide_inputs=false}

            <input type="hidden" name="id" value="{$id}" />
            <input type="hidden" class="cm-no-hide-input" name="selected_section" id="selected_section" value="{$selected_section}" />

            <div id="content_general">

                <div class="control-group">
                    <label for="first_name" class="control-label cm-required cm-first_name">{__("sd_staff.first_name")}:</label>
                    <div class="controls">
                        <input type="text" id="first_name" name="staff_data[first_name]" class="input-large" size="32" maxlength="128" value="{$staff_data.first_name}" />
                    </div>
                </div>

                <div class="control-group">
                    <label for="last_name" class="control-label cm-required cm-last_name">{__("sd_staff.last_name")}:</label>
                    <div class="controls">
                        <input type="text" id="last_name" name="staff_data[last_name]" class="input-large" size="32" maxlength="128" value="{$staff_data.last_name}" />
                    </div>
                </div>

                <div class="control-group">
                    <label for="email" class="control-label cm-required cm-email">{__("sd_staff.email")}:</label>
                    <div class="controls">
                        <input type="text" id="email" name="staff_data[email]" class="input-large" size="32" maxlength="128" value="{$staff_data.email}" />
                    </div>
                </div>

                <div class="control-group">
                    <label for="function" class="control-label cm-required cm-function">{__("sd_staff.function")}:</label>
                    <div class="controls">
                        <input type="text" id="function" name="staff_data[function]" class="input-large" size="32" maxlength="128" value="{$staff_data.function}" />
                    </div>
                </div>

                <div class="control-group">
                    <label for="function" class="control-label cm-required cm-function">{__("sd_staff.internal_description")}:</label>
                    <div class="controls">
                        <textarea id="internal_description" name="staff_data[internal_description]" class="input-large">{$staff_data.function}</textarea>
                    </div>
                </div>
            </div>
        {/capture}

        {include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox group_name=$runtime.controller active_tab=$selected_section track=true}

    {/capture}

    {if !$id}
        {$title = "{__('sd_staff.new_staff')}"}
    {else}
        {$title = "`$staff_data.first_name` `$staff_data.last_name`"}
    {/if}

    {$redirect_url = "sd_staff.manage`"}
    {capture name="buttons"}
        <div class="btn-group btn-hover dropleft">
            {if $id}
                {include file="buttons/save_cancel.tpl" but_meta="dropdown-toggle" but_role="submit-link" but_name="dispatch[sd_staff.`$runtime.mode`]" but_target_form="staff_form" save=$id}
            {else}
                {include file="buttons/button.tpl" but_text=__("create") but_meta="dropdown-toggle" but_role="submit-link" but_name="dispatch[sd_staff.`$runtime.mode`]" but_target_form="staff_form" save=$id}
            {/if}
        </div>
    {/capture}

    {include file="common/mainbox.tpl"
    title=$title
    content=$smarty.capture.mainbox
    buttons=$smarty.capture.buttons}
</form>
