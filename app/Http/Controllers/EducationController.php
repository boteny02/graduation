<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEducationRequest;
use App\Http\Requests\UpdateEducationRequest;
use App\Repositories\EducationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EducationController extends AppBaseController
{
    /** @var  EducationRepository */
    private $educationRepository;

    public function __construct(EducationRepository $educationRepo)
    {
        $this->educationRepository = $educationRepo;
    }

    /**
     * Display a listing of the Education.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        return redirect('/home');
    }

    /**
     * Show the form for creating a new Education.
     *
     * @return Response
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created Education in storage.
     *
     * @param CreateEducationRequest $request
     *
     * @return Response
     */
    public function store(CreateEducationRequest $request)
    {
        $input = $request->all();

        $education = $this->educationRepository->create($input);

        Flash::success('Education saved successfully.');

        return redirect(route('education.index'));
    }

    /**
     * Display the specified Education.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $education = $this->educationRepository->find($id);

        if (empty($education)) {
            Flash::error('Education not found');

            return redirect(route('education.index'));
        }

        return view('education.show')->with('education', $education);
    }

    /**
     * Show the form for editing the specified Education.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $education = $this->educationRepository->find($id);

        if (empty($education)) {
            Flash::error('Education not found');

            return redirect(route('education.index'));
        }

        return view('education.edit')->with('education', $education);
    }

    /**
     * Update the specified Education in storage.
     *
     * @param int $id
     * @param UpdateEducationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEducationRequest $request)
    {
        $education = $this->educationRepository->find($id);

        if (empty($education)) {
            Flash::error('Education not found');

            return redirect(route('education.index'));
        }

        $education = $this->educationRepository->update($request->all(), $id);

        Flash::success('Education updated successfully.');

        return redirect(route('education.index'));
    }

    /**
     * Remove the specified Education from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $education = $this->educationRepository->find($id);

        if (empty($education)) {
            Flash::error('Education not found');

            return redirect(route('education.index'));
        }

        $this->educationRepository->delete($id);

        Flash::success('Education deleted successfully.');

        return redirect(route('education.index'));
    }
}
