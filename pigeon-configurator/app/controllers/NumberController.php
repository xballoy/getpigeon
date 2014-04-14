<?php

class NumberController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$files = array();

		$handler  = opendir(Config::get('app.pathConfiguration'));
        while (false !== ($filename = readdir($handler))) {
        	if ($filename == '.' || $filename == '..') {
        		continue;
	        }

            $files[] = $filename;
        }
        closedir($handler);

        return View::make('numbers.index')
            ->withNumbers($files);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();

		file_put_contents(Config::get('app.pathConfiguration') . $data['number'], $data['number']);

		return Redirect::to('/');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		unlink(Config::get('app.pathConfiguration') . $id);

		return Redirect::to('/');
	}


}
