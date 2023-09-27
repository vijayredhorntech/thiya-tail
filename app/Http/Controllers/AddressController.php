<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use App\Models\Address;
use ProtoneMedia\Splade\Facades\Toast;

class AddressController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        $formMeta = [
            'method' => 'POST',
            'action' => route('user.address.store'),
            'title' => 'Add New Address',
        ];
        return view('user.address.form')->with('formMeta', $formMeta);
    }

    public function store(AddressRequest $request)
    {
        $address = auth()->user()->addresses()->create($request->validated());
        Toast::success('Address added successfully.')->rightBottom();
        return redirect()->back();
    }

    public function edit(Address $address)
    {
        $formMeta = [
            'method' => 'PUT',
            'action' => route('user.address.update', $address),
            'title' => 'Edit Address',
        ];
        return view('user.address.form')->with([
            'formMeta' => $formMeta,
            'address' => $address,
        ]);
    }
    public function update(AddressRequest $request, Address $address)
    {
        $address->update($request->validated());
        if($address->default) {
            auth()->user()->addresses()->where('id', '!=', $address->id)->update([
                'default' => false,
            ]);
        }
        Toast::success('Address updated successfully.')->rightBottom();
        return redirect()->back();
    }

    public function delete(Address $address)
    {
        $address->delete();
        Toast::success('Address deleted successfully.')->rightBottom();
        return redirect()->back();
    }
}
