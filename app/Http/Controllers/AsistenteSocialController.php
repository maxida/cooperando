<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAsistenteSocialRequest;
use App\Http\Requests\UpdateAsistenteSocialRequest;
use App\Repositories\AsistenteSocialRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Storage;

class AsistenteSocialController extends AppBaseController
{
    /** @var  AsistenteSocialRepository */
    private $asistenteSocialRepository;

    public function __construct(AsistenteSocialRepository $asistenteSocialRepo)
    {
        $this->asistenteSocialRepository = $asistenteSocialRepo;
    }

    /**
     * Display a listing of the AsistenteSocial.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $asistenteSocials = $this->asistenteSocialRepository->all();

        return view('asistente_socials.index')
            ->with('asistenteSocials', $asistenteSocials);
    }

    /**
     * Show the form for creating a new AsistenteSocial.
     *
     * @return Response
     */
    public function create()
    {
        return view('asistente_socials.create');
    }

    /**
     * Store a newly created AsistenteSocial in storage.
     *
     * @param CreateAsistenteSocialRequest $request
     *
     * @return Response
     */
    public function store(CreateAsistenteSocialRequest $request)
    {
        $input = $request->all();

        $asistenteSocial = $this->asistenteSocialRepository->create($input);

        Flash::success('Asistente Social saved successfully.');

        return redirect(route('asistenteSocials.index'));
    }

    /**
     * Display the specified AsistenteSocial.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $asistenteSocial = $this->asistenteSocialRepository->find($id);

        if (empty($asistenteSocial)) {
            Flash::error('Asistente Social not found');

            return redirect(route('asistenteSocials.index'));
        }

        return view('asistente_socials.show')->with('asistenteSocial', $asistenteSocial);
    }

    /**
     * Show the form for editing the specified AsistenteSocial.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $asistenteSocial = $this->asistenteSocialRepository->find($id);

        if (empty($asistenteSocial)) {
            Flash::error('Asistente Social not found');

            return redirect(route('asistenteSocials.index'));
        }

        return view('asistente_socials.edit')->with('asistenteSocial', $asistenteSocial);
    }

    /**
     * Update the specified AsistenteSocial in storage.
     *
     * @param int $id
     * @param UpdateAsistenteSocialRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAsistenteSocialRequest $request)
    {
        $asistenteSocial = $this->asistenteSocialRepository->find($id);

        if (empty($asistenteSocial)) {
            Flash::error('Asistente Social not found');

            return redirect(route('asistenteSocials.index'));
        }

        $asistenteSocial = $this->asistenteSocialRepository->update($request->all(), $id);

        Flash::success('Asistente Social updated successfully.');

        return redirect(route('asistenteSocials.index'));
    }

    /**
     * Remove the specified AsistenteSocial from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $asistenteSocial = $this->asistenteSocialRepository->find($id);

        if (empty($asistenteSocial)) {
            Flash::error('Asistente Social not found');

            return redirect(route('asistenteSocials.index'));
        }

        $this->asistenteSocialRepository->delete($id);

        Flash::success('Asistente Social deleted successfully.');

        return redirect(route('asistenteSocials.index'));
    }
}
