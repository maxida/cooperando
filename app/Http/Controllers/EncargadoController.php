<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEncargadoRequest;
use App\Http\Requests\UpdateEncargadoRequest;
use App\Repositories\EncargadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Storage;


class EncargadoController extends AppBaseController
{
    /** @var  EncargadoRepository */
    private $encargadoRepository;

    public function __construct(EncargadoRepository $encargadoRepo)
    {
        $this->encargadoRepository = $encargadoRepo;
    }

    /**
     * Display a listing of the Encargado.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $encargados = $this->encargadoRepository->all();

        return view('encargados.index')
            ->with('encargados', $encargados);
    }

    /**
     * Show the form for creating a new Encargado.
     *
     * @return Response
     */
    public function create()
    {
        return view('encargados.create');
    }

    /**
     * Store a newly created Encargado in storage.
     *
     * @param CreateEncargadoRequest $request
     *
     * @return Response
     */
    public function store(CreateEncargadoRequest $request)
    {
        $input = $request->all();

        $encargado = $this->encargadoRepository->create($input);

        if ($request->file('image')){
            $path = Storage::disk('public')->put('photos',$request->file('image'));
            $encargado->fill(['image' => asset($path)])->save();
        }

        Flash::success('Encargado saved successfully.');

        return redirect(route('encargados.index'));
    }

    /**
     * Display the specified Encargado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $encargado = $this->encargadoRepository->find($id);

        if (empty($encargado)) {
            Flash::error('Encargado not found');

            return redirect(route('encargados.index'));
        }

        return view('encargados.show')->with('encargado', $encargado);
    }

    /**
     * Show the form for editing the specified Encargado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $encargado = $this->encargadoRepository->find($id);

        if (empty($encargado)) {
            Flash::error('Encargado not found');

            return redirect(route('encargados.index'));
        }

        return view('encargados.edit')->with('encargado', $encargado);
    }

    /**
     * Update the specified Encargado in storage.
     *
     * @param int $id
     * @param UpdateEncargadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEncargadoRequest $request)
    {
        $encargado = $this->encargadoRepository->find($id);

        if (empty($encargado)) {
            Flash::error('Encargado not found');

            return redirect(route('encargados.index'));
        }

        $encargado = $this->encargadoRepository->update($request->all(), $id);

        Flash::success('Encargado updated successfully.');

        return redirect(route('encargados.index'));
    }

    /**
     * Remove the specified Encargado from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $encargado = $this->encargadoRepository->find($id);

        if (empty($encargado)) {
            Flash::error('Encargado not found');

            return redirect(route('encargados.index'));
        }

        $this->encargadoRepository->delete($id);

        Flash::success('Encargado deleted successfully.');

        return redirect(route('encargados.index'));
    }
}
