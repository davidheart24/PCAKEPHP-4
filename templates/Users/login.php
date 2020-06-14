<?= $this->Form->create(NULL, ['method' => 'post', 'class' => 'form-signin']); ?>
<?= $this->Flash->render() ?>
    <!-- <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

    <label for="username" class="sr-only">Username</label>
    <?= $this->Form->control('user_name', [
        'label'       => false,
        'placeholder' => __('Username'),
        'tabindex'    => 1,
        'class'       => 'form-control'
    ]); ?>

    <label for="password" class="sr-only">Username</label>
    <?= $this->Form->control('password', [
        'type'        => 'password',
        'label'       => false,
        'placeholder' => __('Password'),
        'tabindex'    => 1,
        'class'       => 'form-control'
    ]); ?>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <?= $this->Form->submit(__('Sign in'), ['class' => 'btn btn-lg btn-primary btn-block', 'tabindex' => 1]);?>
    <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
<?= $this->Form->end(); ?>
