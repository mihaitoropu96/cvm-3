<?php
	/*
	 *
	 * Base controller
	 * Loads the models and views
	 */
namespace App\Libraries;

	class Controller {
		// Load model
		public function model($model)
		{

//			require_once '../App/models/' . $model . '.php';

            $model = 'App\Models\\' . $model;

			return new $model();
		}

		// Load view
		public function view($view, $data = [])
		{
			// Check for view file
			if (file_exists('../App/views/' . $view . '.php')) {
				require_once '../App/views/' . $view . '.php';
			} else {
				// View dose not exist
				die('View dose not exist');
			}
		}
	}