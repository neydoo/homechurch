<div class="row">
    <div class="col-md-12">
        <?php foreach ($permissions as $name => $value): ?>
        <div class="col-md-12">
            <h3>{{ ucfirst($name) }}</h3>
        </div>
        <div class="clearfix"></div>
        <?php foreach ($value as $subPermissionTitle => $permissionActions): ?>
        <div class="permissionGroup">
            <div class="col-md-8">
                <h4 class="pull-left">{{ ucfirst($subPermissionTitle) }}</h4>
                <p class="pull-right" style="margin-top: 10px;">
                    <a href="" class="jsSelectAllInGroup">select all</a> |
                    <a href="" class="jsDeselectAllInGroup">deselect all</a>
                </p>
            </div>
            <div class="clearfix"></div>
            <?php foreach (array_chunk($permissionActions, ceil(count($permissionActions)/2)) as $permissionActionGroup): ?>
            <div class="col-md-3">
                <?php foreach ($permissionActionGroup as $permissionAction): ?>
                <div class="checkbox">
                    <label for="<?php echo "$subPermissionTitle.$permissionAction" ?>">
                        <input name="permissions[<?php echo "$subPermissionTitle.$permissionAction" ?>]" type="hidden" value="false" />
                        <input id="<?php echo "$subPermissionTitle.$permissionAction" ?>" name="permissions[<?php echo "$subPermissionTitle.$permissionAction" ?>]" type="checkbox" class="flat-blue" <?php echo array_get($model->permissions, "$subPermissionTitle.$permissionAction", false) == true ? 'checked' : '' ?> value="true" /> {{ ucfirst($permissionAction) }}
                    </label>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endforeach; ?>
            <div class="clearfix"></div>
        </div>
        <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
</div>