<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWork_experienceRequest;
use App\Http\Requests\UpdateWork_experienceRequest;
use App\Repositories\Work_experienceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Work_experienceController extends AppBaseController
{
    /** @var  Work_experienceRepository */
    private $workExperienceRepository;

    public function __construct(Work_experienceRepository $workExperienceRepo)
    {
        $this->workExperienceRepository = $workExperienceRepo;
    }

    /**
     * Display a listing of the Work_experience.
     *
     * @param Request $request
     *
     * @return Response
     */

     public function index()
     {
        returnredirect('/home');
     }
    /**
     * Show the form for creating a new Work_experience.
     *
     * @return Response
     */
    public function create()
    {
        return view('work_experiences.create');
    }

    /**
     * Store a newly created Work_experience in storage.
     *
     * @param CreateWork_experienceRequest $request
     *
     * @return Response
     */
    public function store(CreateWork_experienceRequest $request)
    {
        $input = $request->all();

        $workExperience = $this->workExperienceRepository->create($input);

        Flash::success('Work Experience saved successfully.');

        return redirect('/home');
    }

    /**
     * Display the specified Work_experience.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $workExperience = $this->workExperienceRepository->find($id);

        if (empty($workExperience)) {
            Flash::error('Work Experience not found');

            return redirect(route('workExperiences.create'));
        }

        return redirect('/home');
    }

    /**
     * Show the form for editing the specified Work_experience.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $workExperience = $this->workExperienceRepository->find($id);

        if (empty($workExperience)) {
            Flash::error('Work Experience not found');

            return redirect(route('workExperiences.index'));
        }

        return view('work_experiences.edit')->with('workExperience', $workExperience);
    }

    /**
     * Update the specified Work_experience in storage.
     *
     * @param int $id
     * @param UpdateWork_experienceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWork_experienceRequest $request)
    {
        $workExperience = $this->workExperienceRepository->find($id);

        if (empty($workExperience)) {
            Flash::error('Work Experience not found');

            return redirect(route('workExperiences.index'));
        }

        $workExperience = $this->workExperienceRepository->update($request->all(), $id);

        Flash::success('Work Experience updated successfully.');

        return redirect('/home');
    }

    /**
     * Remove the specified Work_experience from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $workExperience = $this->workExperienceRepository->find($id);

        if (empty($workExperience)) {
            Flash::error('Work Experience not found');

            return redirect(route('workExperiences.index'));
        }

        $this->workExperienceRepository->delete($id);

        Flash::success('Work Experience deleted successfully.');

        return redirect(route('workExperiences.index'));
    }
}
