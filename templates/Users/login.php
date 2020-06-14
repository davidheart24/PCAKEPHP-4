
<h3><?= __('Login') ?></h3>

<?php
echo $this->Form->create(NULL, ['method' => 'post']);
    echo $this->Form->control('user_name', [
        'label' => false,
        'placeholder' => __('Username'),
        'tabindex' => 1
    ]);
    echo $this->Form->control("password", [
        'type' => 'password',
        'label' => false,
        'placeholder' => __('Password'),
        'tabindex' => 1
    ]);
    echo $this->Form->button(__('Login'), ['class' => 'btn-success', 'tabindex' => 1]);
echo $this->Form->end();
?>
