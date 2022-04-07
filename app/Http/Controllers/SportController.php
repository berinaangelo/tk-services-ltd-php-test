<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;

class SportController extends Controller
{
	private $viewPath = 'sports';
	
	private function viewGenerator($blade) {
		return "{$this->viewPath}.{$blade}";
	}

	private function saveSport(Sport $sport, Request $request) {
		$sport->name = request('name');

		$isValid = $request->validate([ 'name' => 'required|unique:sports']);

		if ($isValid) {
			$sport->save();
		}

		return redirect('/sports')->withSuccess('Sport saved.');
	}

	public function index() {
		$q = request('q');
		$model = Sport::orderBy('name');
		
		if (null != $q) {
			$sports = $model->where('id', $q)->orWhere('name', 'LIKE', '%'.$q.'%')->get();
			$param = [ 'sports' => $sports, 'paginatable' => false ];
		} else {
			$sports = $model->paginate(6);
			$param = [ 'sports' => $sports, 'paginatable' => true ];
		}
		
		return view($this->viewGenerator('index'), $param);
	}

	public function create() {
		return view($this->viewGenerator('create'));
	}

	public function store(Request $request) {
		$sport = new Sport();
		return $this->saveSport($sport, $request);
	}

	public function edit(Sport $sport) {
		return view($this->viewGenerator('edit'), [ 'sport' => $sport ]);
	}

	public function update(Request $request, Sport $sport) {
		return $this->saveSport($sport, $request);
	}

	public function destroy(Sport $sport) {
		$sport->delete();
		return redirect('/sports')->withSuccess('Sport removed.');
	}
}
