<?php

namespace App\Http\Controllers;

use DemeterChain\A;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Validator;
use Crypt;
use App\FileType;
use App\EPUBType;
class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrator.parameters.organisation');
    }

    public function epubType()
    {
        $epubTypes = EPUBType::get();
        return view('administrator.parameters.EPubType',['epubTypes'=>$epubTypes]);
    }

    public function  store_epubType(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'name'=>'required',
                'format'=>'required',
            ],[
                'name'=>'Name required',
                'format'=>'Format required',
            ]);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else{
            $newEPUBType = new EPUBType();
            $newEPUBType->name = $request['name'];
            $newEPUBType->format = $request['format'];
            $newEPUBType->save();

            if($newEPUBType)
            {
                return redirect()->back()->with('result','Successfully created');
            }
        }
    }




    public function update_epubType($epubtypeId)
    {
        $epubType = EPUBType::find(Crypt::decrypt($epubtypeId));
        return view('administrator.parameters.EPubType_update',['epubType'=>$epubType]);
    }


    public function update_store_epubType(Request $request,$epubtypeId)
    {
        $validator = Validator::make($request->all(),
            [
                'name'=>'required',
                'format'=>'required',
            ],[
                'name'=>'Name required',
                'format'=>'Format required',
            ]);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else{
            $newEPUBType = EPUBType::find(Crypt::decrypt($epubtypeId));
            $newEPUBType->name = $request['name'];
            $newEPUBType->format = $request['format'];
            $newEPUBType->save();

            if($newEPUBType)
            {
                return redirect()->back()->with('success','Successfully updated');
            }
        }
    }



    public function fileType()
    {
        $fileTypes = FileType::get();
        return view('administrator.parameters.fileType',['fileTypes'=>$fileTypes]);
    }

    public function store_fileType(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'name'=>'required'
            ],[
                'name.required'=>'File type name required',
            ]);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else{
            $newFileType = new FileType();
            $newFileType->name = $request['name'];
            $newFileType->save();
            if($newFileType)
            {
                return redirect()->back()->with('success','Successfully created');
            }
        }
    }

    public function update_fileType($filetypeId)
    {
        $fileType = FileType::find(Crypt::decrypt($filetypeId));
        return view('administrator.parameters.fileType_update',['fileType'=>$fileType]);
    }

    public function update_store_fileType(Request $request,$filetypeId)
    {
        $validator = Validator::make($request->all(),
            [
                'name'=>'required'
            ],[
                'name.required'=>'File type name required',
            ]);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else{
            $newFileType = FileType::find(Crypt::decrypt($filetypeId));
            $newFileType->name = $request['name'];
            $newFileType->save();
            if($newFileType)
            {
                return redirect()->back()->with('success','Successfully updated');
            }
        }
    }


    public function publisher()
    {
        return view('administrator.parameters.publisher');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function destroy_epubType($id)
    {
        EPUBType::where('id',Crypt::decrypt($id))->delete();
        return redirect()->back()->with('result','Deleted successfully');
    }
    public function destroy_fileType($id)
    {
        FileType::where('id',Crypt::decrypt($id))->delete();
        return redirect()->back()->with('result','Deleted successfully');
    }


}
