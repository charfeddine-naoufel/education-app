<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateviewRequest;
use App\Http\Requests\UpdateviewRequest;
use App\Repositories\viewRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class viewController extends AppBaseController
{
    /** @var  viewRepository */
    private $viewRepository;

    public function __construct(viewRepository $viewRepo)
    {
        $this->viewRepository = $viewRepo;
    }

    /**
     * Display a listing of the view.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $views = $this->viewRepository->all();

        return view('views.index')
            ->with('views', $views);
    }

    /**
     * Show the form for creating a new view.
     *
     * @return Response
     */
    public function create()
    {
        return view('views.create');
    }

    /**
     * Store a newly created view in storage.
     *
     * @param CreateviewRequest $request
     *
     * @return Response
     */
    public function store(CreateviewRequest $request)
    {
        $input = $request->all();

        $view = $this->viewRepository->create($input);

        Flash::success('View saved successfully.');

        return redirect(route('views.index'));
    }

    /**
     * Display the specified view.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $view = $this->viewRepository->find($id);

        if (empty($view)) {
            Flash::error('View not found');

            return redirect(route('views.index'));
        }

        return view('views.show')->with('view', $view);
    }

    /**
     * Show the form for editing the specified view.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $view = $this->viewRepository->find($id);

        if (empty($view)) {
            Flash::error('View not found');

            return redirect(route('views.index'));
        }

        return view('views.edit')->with('view', $view);
    }

    /**
     * Update the specified view in storage.
     *
     * @param int $id
     * @param UpdateviewRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateviewRequest $request)
    {
        $view = $this->viewRepository->find($id);

        if (empty($view)) {
            Flash::error('View not found');

            return redirect(route('views.index'));
        }

        $view = $this->viewRepository->update($request->all(), $id);

        Flash::success('View updated successfully.');

        return redirect(route('views.index'));
    }

    /**
     * Remove the specified view from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $view = $this->viewRepository->find($id);

        if (empty($view)) {
            Flash::error('View not found');

            return redirect(route('views.index'));
        }

        $this->viewRepository->delete($id);

        Flash::success('View deleted successfully.');

        return redirect(route('views.index'));
    }
}
