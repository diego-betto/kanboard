<div class="page-header">
    <h2><?= t('Integration with third-party services') ?></h2>
</div>

<form method="post" action="<?= $this->u('project', 'integration', array('project_id' => $project['id'])) ?>" autocomplete="off">
    <?= $this->formCsrf() ?>


    <h3><i class="fa fa-github fa-fw"></i>&nbsp;<?= t('Github webhooks') ?></h3>
    <div class="listing">
    <input type="text" class="auto-select" readonly="readonly" value="<?= $this->getCurrentBaseUrl().$this->u('webhook', 'github', array('token' => $webhook_token, 'project_id' => $project['id'])) ?>"/><br/>
    <p class="form-help"><a href="http://kanboard.net/documentation/github-webhooks" target="_blank"><?= t('Help on Github webhooks') ?></a></p>
    </div>


    <h3><img src="assets/img/gitlab-icon.png"/>&nbsp;<?= t('Gitlab webhooks') ?></h3>
    <div class="listing">
    <input type="text" class="auto-select" readonly="readonly" value="<?= $this->getCurrentBaseUrl().$this->u('webhook', 'gitlab', array('token' => $webhook_token, 'project_id' => $project['id'])) ?>"/><br/>
    <p class="form-help"><a href="http://kanboard.net/documentation/gitlab-webhooks" target="_blank"><?= t('Help on Gitlab webhooks') ?></a></p>
    </div>


    <h3><i class="fa fa-bitbucket fa-fw"></i>&nbsp;<?= t('Bitbucket webhooks') ?></h3>
    <div class="listing">
    <input type="text" class="auto-select" readonly="readonly" value="<?= $this->getCurrentBaseUrl().$this->u('webhook', 'bitbucket', array('token' => $webhook_token, 'project_id' => $project['id'])) ?>"/><br/>
    <p class="form-help"><a href="http://kanboard.net/documentation/bitbucket-webhooks" target="_blank"><?= t('Help on Bitbucket webhooks') ?></a></p>
    </div>


    <h3><img src="assets/img/hipchat-icon.png"/> <?= t('Hipchat') ?></h3>
    <div class="listing">
        <?= $this->formCheckbox('hipchat', t('Send notifications to Hipchat'), 1, isset($values['hipchat']) && $values['hipchat'] == 1) ?>

        <?= $this->formLabel(t('API URL'), 'hipchat_api_url') ?>
        <?= $this->formText('hipchat_api_url', $values, $errors) ?>

        <?= $this->formLabel(t('Room API ID or name'), 'hipchat_room_id') ?>
        <?= $this->formText('hipchat_room_id', $values, $errors) ?>

        <?= $this->formLabel(t('Room notification token'), 'hipchat_room_token') ?>
        <?= $this->formText('hipchat_room_token', $values, $errors) ?>

        <p class="form-help"><a href="http://kanboard.net/documentation/hipchat" target="_blank"><?= t('Help on Hipchat integration') ?></a></p>

        <div class="form-actions">
            <input type="submit" value="<?= t('Save') ?>" class="btn btn-blue"/>
        </div>
    </div>


    <h3><i class="fa fa-slack fa-fw"></i>&nbsp;<?= t('Slack') ?></h3>
    <div class="listing">
        <?= $this->formCheckbox('slack', t('Send notifications to a Slack channel'), 1, isset($values['slack']) && $values['slack'] == 1) ?>

        <?= $this->formLabel(t('Webhook URL'), 'slack_webhook_url') ?>
        <?= $this->formText('slack_webhook_url', $values, $errors) ?>

        <p class="form-help"><a href="http://kanboard.net/documentation/slack" target="_blank"><?= t('Help on Slack integration') ?></a></p>

        <div class="form-actions">
            <input type="submit" value="<?= t('Save') ?>" class="btn btn-blue"/>
        </div>
    </div>
</form>