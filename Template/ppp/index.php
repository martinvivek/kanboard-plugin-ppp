<div class="page-header">
    <h2><?= t('Progress, Plans, and Problems Report') ?></h2>
</div>

<p> Report date: <?php echo $report_date ?> </p>
<h3> Progress </h3>
<?php if (! empty($progress)): ?>

    <?php foreach ($progress as $task): ?>
    &#8211; <?= $task['title']; ?>
    <br />
    <?php endforeach ?>

<?php else: ?>

    <p> No tasks where completed this week. </p>

<?php endif ?>

<h3> Plans </h3>
<?php if (! empty($plans)): ?>

    <?php foreach ($plans as $task): ?>
    &#8211; <?= $task['title']; ?>
    <br />
    <?php endforeach ?>

<?php else: ?>

    <p> No plans this week. </p>

<?php endif ?>

<h3> Problem </h3>
<?php if (! empty($problems)): ?>

    <?php foreach ($problems as $task): ?>
    &#8211; <?= $task['title']; ?>
    <br />
    <?php endforeach ?>

<?php else: ?>

    <p> Nothing to report. </p>

<?php endif ?>
