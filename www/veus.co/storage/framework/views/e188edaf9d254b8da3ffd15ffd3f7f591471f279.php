<div class="row">

    <input type="text" name="name" placeholder="Name"   class="form-control mb-2" value="<?php echo e(old('name') ?? $user->name ?? ''); ?>"/>
    <input type="text" name="email" placeholder="E-mail"   class="form-control col-6 mb-2" value="<?php echo e(old('email') ?? $user->email ?? ""); ?>"/>
    <input type="text" name="password" placeholder="Password"   class="form-control col-6 mb-2" value="<?php echo e(old('password') ?? $user->password ?? ""); ?>"/>
    <input type="text" name="password_confirmation" placeholder="Password Confirmation"   class="form-control col-6 mb-2" value="<?php echo e(old('password_confirmation') ?? $user->password_confirmation ?? ""); ?>"/>



    <select name="status" id="status" class="form-control mb-2">
        <option value="2" <?php echo e((old() ? old('status', 2) : ($user->status ?? -2) == 2 ) ? 'selected' : ''); ?>>Admin</option>
        <option value="1" <?php echo e((old() ? old('status', 1) : ($user->status ?? -1) == 1 ) ? 'selected' : ''); ?>>Usuário</option>
        <option value="0" <?php echo e((old() ? old('status', 0) : ($user->status ?? -1) == 0 ) ? 'selected' : ''); ?>>Inativa</option>
    </select>

</div>
<div class="row">
<div class="col-6">

    <button type="submit" class="btn btn-primary" value="Enviar">Enviar</button>
</div>

<div class="col-6">
    <button type="reset" class="btn btn-light" value="Cancelar">Cancelar</button>
</div>
</div>
<?php /**PATH /usr/share/nginx/html/veus.co/resources/views/admin/users/form.blade.php ENDPATH**/ ?>