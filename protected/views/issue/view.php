<?php
/* @var $this IssueController */
/* @var $model Issue */

$this->breadcrumbs=array(
	'Issues'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Issue', 'url'=>array('index', 'pid'=>$model->project->id)),
	array('label'=>'Create Issue', 'url'=>array('create', 'pid'=>$model->project->id)),
	array('label'=>'Update Issue', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Issue', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Issue', 'url'=>array('admin', 'pid'=>$model->project->id)),
);
?>

<h1>View Issue #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		array(
			'name'=>'type_id',
			'value'=>$model->getTypeText(),
		),
		array(
			'name'=>'status_id',
			'value'=>$model->getStatusText(),
		),
		array(
			'name'=>'owner_id',
			'value'=>isset($model->owner)?$model->owner->username:"Unknown",
		),
		array(
			'name'=>'requester_id',
			'value'=>isset($model->requester)?$model->requester->username:"Unknown",
		),
	),
)); ?>
