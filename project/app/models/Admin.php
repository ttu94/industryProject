<?php

Class Admin extends Eloquent
{
	public function account()
	{
		return $this->belongsTo('Account', 'accounts_id', 'admins_id');
	}

}


