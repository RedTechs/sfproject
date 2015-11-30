@extends('layouts.master')
@section ('content')
<div>
<h1 style="padding-top:50px;">Testing</h1>
</div>	

	<?php 
		$recordTypeMappings = $account->recordTypeMappings;
		dd($recordTypeMappings[0]);
	?>
@stop

