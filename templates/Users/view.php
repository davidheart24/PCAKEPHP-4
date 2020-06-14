<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User Name') ?></th>
                    <td><?= h($user->user_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($user->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Client Ip') ?></th>
                    <td><?= h($user->client_ip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Login') ?></th>
                    <td><?= h($user->last_login) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Locks') ?></h4>
                <?php if (!empty($user->locks)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Affiliate Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->locks as $locks) : ?>
                        <tr>
                            <td><?= h($locks->id) ?></td>
                            <td><?= h($locks->name) ?></td>
                            <td><?= h($locks->user_id) ?></td>
                            <td><?= h($locks->created) ?></td>
                            <td><?= h($locks->affiliate_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Locks', 'action' => 'view', $locks->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Locks', 'action' => 'edit', $locks->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Locks', 'action' => 'delete', $locks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $locks->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related People') ?></h4>
                <?php if (!empty($user->people)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Publish Email') ?></th>
                            <th><?= __('Home Phone') ?></th>
                            <th><?= __('Publish Home Phone') ?></th>
                            <th><?= __('Work Phone') ?></th>
                            <th><?= __('Work Ext') ?></th>
                            <th><?= __('Publish Work Phone') ?></th>
                            <th><?= __('Mobile Phone') ?></th>
                            <th><?= __('Publish Mobile Phone') ?></th>
                            <th><?= __('Addr Street') ?></th>
                            <th><?= __('Addr City') ?></th>
                            <th><?= __('Addr Prov') ?></th>
                            <th><?= __('Addr Country') ?></th>
                            <th><?= __('Addr Postalcode') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Birthdate') ?></th>
                            <th><?= __('Height') ?></th>
                            <th><?= __('Shirt Size') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Has Dog') ?></th>
                            <th><?= __('Contact For Feedback') ?></th>
                            <th><?= __('Complete') ?></th>
                            <th><?= __('Twitter Token') ?></th>
                            <th><?= __('Twitter Secret') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Show Gravatar') ?></th>
                            <th><?= __('Alternate First Name') ?></th>
                            <th><?= __('Alternate Last Name') ?></th>
                            <th><?= __('Alternate Email') ?></th>
                            <th><?= __('Publish Alternate Email') ?></th>
                            <th><?= __('Alternate Work Phone') ?></th>
                            <th><?= __('Alternate Work Ext') ?></th>
                            <th><?= __('Publish Alternate Work Phone') ?></th>
                            <th><?= __('Alternate Mobile Phone') ?></th>
                            <th><?= __('Publish Alternate Mobile Phone') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Gender Description') ?></th>
                            <th><?= __('Roster Designation') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->people as $people) : ?>
                        <tr>
                            <td><?= h($people->id) ?></td>
                            <td><?= h($people->first_name) ?></td>
                            <td><?= h($people->last_name) ?></td>
                            <td><?= h($people->publish_email) ?></td>
                            <td><?= h($people->home_phone) ?></td>
                            <td><?= h($people->publish_home_phone) ?></td>
                            <td><?= h($people->work_phone) ?></td>
                            <td><?= h($people->work_ext) ?></td>
                            <td><?= h($people->publish_work_phone) ?></td>
                            <td><?= h($people->mobile_phone) ?></td>
                            <td><?= h($people->publish_mobile_phone) ?></td>
                            <td><?= h($people->addr_street) ?></td>
                            <td><?= h($people->addr_city) ?></td>
                            <td><?= h($people->addr_prov) ?></td>
                            <td><?= h($people->addr_country) ?></td>
                            <td><?= h($people->addr_postalcode) ?></td>
                            <td><?= h($people->gender) ?></td>
                            <td><?= h($people->birthdate) ?></td>
                            <td><?= h($people->height) ?></td>
                            <td><?= h($people->shirt_size) ?></td>
                            <td><?= h($people->status) ?></td>
                            <td><?= h($people->has_dog) ?></td>
                            <td><?= h($people->contact_for_feedback) ?></td>
                            <td><?= h($people->complete) ?></td>
                            <td><?= h($people->twitter_token) ?></td>
                            <td><?= h($people->twitter_secret) ?></td>
                            <td><?= h($people->user_id) ?></td>
                            <td><?= h($people->show_gravatar) ?></td>
                            <td><?= h($people->alternate_first_name) ?></td>
                            <td><?= h($people->alternate_last_name) ?></td>
                            <td><?= h($people->alternate_email) ?></td>
                            <td><?= h($people->publish_alternate_email) ?></td>
                            <td><?= h($people->alternate_work_phone) ?></td>
                            <td><?= h($people->alternate_work_ext) ?></td>
                            <td><?= h($people->publish_alternate_work_phone) ?></td>
                            <td><?= h($people->alternate_mobile_phone) ?></td>
                            <td><?= h($people->publish_alternate_mobile_phone) ?></td>
                            <td><?= h($people->modified) ?></td>
                            <td><?= h($people->created) ?></td>
                            <td><?= h($people->gender_description) ?></td>
                            <td><?= h($people->roster_designation) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'People', 'action' => 'view', $people->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'People', 'action' => 'edit', $people->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'People', 'action' => 'delete', $people->id], ['confirm' => __('Are you sure you want to delete # {0}?', $people->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
