<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;

class AboutController extends Controller
{
    public function index(){
        $informations = About::selection()->paginate(PAGINATION_COUNT);
        return view('admin.about.index',compact('informations'));
    }

    public function create(){
        return view('admin.about.create');
    }

    public function store(AboutRequest $request){
        try{
            About::create($request->except(['_token']));
            return redirect()->route('admin.about')->with(['success'=>'تم اضافة المعلومات بنجاح']);
        }catch (\Exception $exception){
            return redirect()->route('admin.about')->with(['error'=>'لم يتم اضافة المعلومات برجاء المحاولة مجددا']);
        }
    }

    public function edit($id){
        $info = About::selection()->find($id);
        if(! $info){
            return redirect()->route('admin.about')->with(['error'=>'هذه المعلومات غير موجودة']);
        }
        return view('admin.about.edit',compact('info'));
    }

    public function update($id,AboutRequest $request){
        try{
            $info = About::find($id);
            if(! $info){
                return redirect()->route('admin.about.edit',$id)->with(['error'=>'هذه المعلومات غير موجودة']);
            }

            //update in db
            $info->update($request->except(['_token']));
            return redirect()->route('admin.about')->with(['success'=>'تم تحديث المعلومات بنجاح']);

        }catch (\Exception $exception){
            return redirect()->route('admin.about')->with(['error'=>'لم يتم تحديث المعلومات برجاء المحاولة مجددا']);
        }

    }

    public function destroy($id){
        try{
            $info = About::find($id);
            if(! $info){
                return redirect()->route('admin.about')->with(['error'=>'هذه المعلومات غير موجودة']);
            }
            //delete in db
            $info->delete();
            return redirect()->route('admin.about')->with(['success'=>'تم حذف المعلومات بنجاح']);

        }catch (\Exception $exception){
            return redirect()->route('admin.about')->with(['error'=>'لم يتم حذف المعلومات برجاء المحاولة مجددا']);
        }

    }
}
