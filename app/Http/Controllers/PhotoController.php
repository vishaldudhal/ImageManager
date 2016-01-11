<?php namespace ImagesManager\Http\Controllers;

use ImagesManager\Http\Requests;
use ImagesManager\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PhotoController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getIndex()
	{
		return 'Showing all the Albums Photos';
	}

	public function getCreatePhoto()
	{
		return 'Showing the create Photo form';
    }

    public function postCreatePhoto()
    {
    	return 'Creating Photo';
    }

    public function getEditPhoto()
	{
		return 'Showing the Edit Photo form';
    }

    public function postEditPhoto()
    {
    	return 'Editing Photo';
    }

    public function postDeletePhoto()
    {
    	return 'Deleting Photo';
    }

}
