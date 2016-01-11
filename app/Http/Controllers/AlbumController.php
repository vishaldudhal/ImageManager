<?php namespace ImagesManager\Http\Controllers;

use ImagesManager\Http\Requests;
use ImagesManager\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AlbumController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getIndex()
	{
		return 'Showing all the user Albums';
	}

	public function getCreateAlbum()
	{
		return 'Showing the create album form';
    }

    public function postCreateAlbum()
    {
    	return 'Creating Album';
    }

    public function getEditAlbum()
	{
		return 'Showing the Edit album form';
    }

    public function postEditAlbum()
    {
    	return 'Editing Album';
    }

    public function postDeleteAlbum()
    {
    	return 'Deleting Album';
    }



}
