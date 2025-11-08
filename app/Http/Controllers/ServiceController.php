<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('CRUD.index', compact('services'));
    }

    public function create()
    {
        $status = 'create';
        return view('CRUD.create', compact('status'));
    }

    public function store(StoreServiceRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('services', 'public');
        }

        Service::create($data);
        return redirect()->route('services.index')->with('success', 'Service ajouté avec succès !');
    }

    public function show(Service $service)
    {
        return view('CRUD.show', compact('service'));
    }

    public function edit(Service $service)
    {
        $status = 'update';
        return view('CRUD.create', compact('service', 'status'));
    }

    public function update(StoreServiceRequest $request, Service $service)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('services', 'public');
        }

        $service->update($data);
        return redirect()->route('services.index')->with('success', 'Service mis à jour avec succès !');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service supprimé avec succès !');
    }
}
