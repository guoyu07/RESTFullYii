<?php
$this->widget('ext.starship.RestfullYii.widgets.ERestJSONOutputWidget', array(
	'type'				=>(isset($type)? $type: 'raw'),
	'success'			=>(isset($success)? $success: true),
	'message'			=>(isset($message)? $message: ""),
	'totalCount'	=>(isset($totalCount)? $totalCount: ""),
	'modelName'		=>(isset($modelName)? $modelName: null),
	'data'				=>(isset($data)? $data: null),
	'relations'		=>(isset($relations)? $relations: []),
	'errorCode'		=>(isset($errorCode)? $errorCode: null),
));
