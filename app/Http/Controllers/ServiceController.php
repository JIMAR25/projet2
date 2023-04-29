<?php
namespace App\Http\Controllers;

use App\Models\Service;
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
        return view('services.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        $service = new Service;
        $service->name = $validatedData['name'];
        $service->save();

        return redirect()->route('services.index');
    }

}
