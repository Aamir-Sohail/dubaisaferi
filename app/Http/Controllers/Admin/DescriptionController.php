<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\DescriptionModel;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    public function index()
    {
        $descriptions = new DescriptionModel();
        return view('admin.description.description');

    }

    public function des_store(Request $request)
    {

        $this->validate($request, [
            'description' => 'required|string|max:255',

        ]);
        $description = new DescriptionModel();
        $description->description = $request->input('description');
        $description->ckeditor = $request->input('ckeditor');
        $description->save();
        return redirect()->back();
    }

    public function descriptiontable()
    {
        $descriptions = DescriptionModel::all();
        return view('admin.description.alldescription', compact('descriptions'));
    }

    public function edit_table($id)
    {

        $description = DescriptionModel::find($id);
        return view('admin.description.descriptionedit', compact('description'));
    }

    

    public function deletedescription($id)
    {

        $description = DescriptionModel::find($id);
        $description->delete();
        return redirect()->back();
    }

    public function update_des(Request $request)
    {


        $description = DescriptionModel::find($request->id);

        $description->description = $request->description;
        $description->ckeditor = $request->ckeditor;

        $description->update();
        return redirect('admin/des_table');
    }

}
