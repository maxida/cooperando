<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNiñoRequest;
use App\Http\Requests\UpdateNiñoRequest;
use App\Repositories\NiñoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Storage;

class NiñoController extends AppBaseController
{
    /** @var  NiñoRepository */
    private $niñoRepository;

    public function __construct(NiñoRepository $niñoRepo)
    {
        $this->niñoRepository = $niñoRepo;
    }

    /**
     * Display a listing of the Niño.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $niños = $this->niñoRepository->all();

        return view('niños.index')
            ->with('niños', $niños);
    }

    /**
     * Show the form for creating a new Niño.
     *
     * @return Response
     */
    public function create()
    {
        return view('niños.create');
    }

    /**
     * Store a newly created Niño in storage.
     *
     * @param CreateNiñoRequest $request
     *
     * @return Response
     */
    public function store(CreateNiñoRequest $request)
    {
        $input = $request->all();

        $niño = $this->niñoRepository->create($input);

        Flash::success('Niño saved successfully.');

        return redirect(route('niños.index'));
    }

    /**
     * Display the specified Niño.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $niño = $this->niñoRepository->find($id);

        if (empty($niño)) {
            Flash::error('Niño not found');

            return redirect(route('niños.index'));
        }

        return view('niños.show')->with('niño', $niño);
    }

    /**
     * Show the form for editing the specified Niño.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $niño = $this->niñoRepository->find($id);

        if (empty($niño)) {
            Flash::error('Niño not found');

            return redirect(route('niños.index'));
        }

        return view('niños.edit')->with('niño', $niño);
    }

    /**
     * Update the specified Niño in storage.
     *
     * @param int $id
     * @param UpdateNiñoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNiñoRequest $request)
    {
        $niño = $this->niñoRepository->find($id);

        if (empty($niño)) {
            Flash::error('Niño not found');

            return redirect(route('niños.index'));
        }

        $niño = $this->niñoRepository->update($request->all(), $id);

        Flash::success('Niño updated successfully.');

        return redirect(route('niños.index'));
    }

    /**
     * Remove the specified Niño from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $niño = $this->niñoRepository->find($id);

        if (empty($niño)) {
            Flash::error('Niño not found');

            return redirect(route('niños.index'));
        }

        $this->niñoRepository->delete($id);

        Flash::success('Niño deleted successfully.');

        return redirect(route('niños.index'));
    }
}
