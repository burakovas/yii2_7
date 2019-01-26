
<a href="index.php?r=task/one&id=<?= $model->id ?>">


<?= \app\widgets\MyWidget::widget([
    'id' => $model->id,
    'name' => $model->name,
    'date' => $model->date,
    'description' => $model->description,
])?>

</a>
