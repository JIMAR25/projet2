<?php
namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Professional;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        
        $services = Service::with('professionals')->get();

        return view('services.index', compact('services'));
    }
    public function create()
    {
        $services = Service::all();
        return view('services.create', compact('services'));
    }
    
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'provider_name' => 'required|max:255',
        'provider_age' => 'required|integer',
        'provider_time' => 'required|max:255',
    ]);

    $serviceName = $request->input('name');
    $newServiceName = $request->input('new_service');

    if (!empty($serviceName)) {
        $service = Service::where('name', $serviceName)->first();
    } elseif (!empty($newServiceName)) {
        $service = new Service;
        $service->name = $newServiceName;
        $service->save();
    } else {
        return back()->withErrors(['name' => 'Le nom du service est requis.']);
    }

    $provider = new Professional;
    $provider->name = $validatedData['provider_name'];
    $provider->age = $validatedData['provider_age'];
    $provider->available_time = $validatedData['provider_time'];
    $provider->service_id = $service->id;
    $provider->save();

    return redirect()->route('services.index');
}


}
