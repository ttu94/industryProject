// <?php

Class Account extends Eloquent
{
	public function admin()
	{
		return $this->hasMany('Admin', 'admins_id', 'accounts_id');
	}

}


