<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::latest()->paginate('10');
        return view('suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suppliers.create', ['mode' => 'create']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('suppliers', 'public');
            $data['photo'] = $photoPath;
        }
        Supplier::create($data);
        return redirect(route('suppliers.index'))->with('success', 'Supplier added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        return view('suppliers.view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        return view('suppliers.edit', compact('supplier'))->with('mode', 'edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            if ($supplier->photo && \Storage::disk('public')->exists($supplier->photo)) {
                \Storage::disk('public')->delete($supplier->photo);
            }
            $data['photo'] = $request->file('photo')->store('suppliers', 'public');
        }
        $supplier->update($data);
        return redirect(route('suppliers.index'))->with('success', 'Successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect(route('suppliers.index'))->with('success', 'Deleted Successfully!');
    }
}
