<?php 

class testCtrl extends appCtrl
{
	public function checkInherit()
	{
		echo $this->appMethod();
	}

	public function createCourse()
	{
		if( $this->canManageCourse() )
		{
			echo 'creating course';
		}

		else 
		{
			echo 'you cannot do this';
		}
	}

	public function udpateCourse()
	{
		if( $this->canManageCourse() )
		{
			echo 'update course';
		}

		else 
		{
			echo 'you cannot do update this';
		}	
	}
}