<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function getServices() {
        $services = Service::all();
        return view('admin.service',compact('services'));
    }
    function create(){
        return view('admin.services.createService');
    }
    function addService(Request $request){
        $idService = $request->input('idService');
        $name = $request->input('name');
        $price = $request->input('price');
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('public/image/services/',$image);

        $service = new Service();
        $service->id_Service = $idService;
        $service->name = $name;
        $service->price = $price;
        $service->image = $image;
        $service->save();

        return redirect()->route('dichvu');
    }
    function deleteService($id){
        db::table('services')->where('id_Service','=',$id)->delete();
        return redirect()->route('dichvu');
    }
    function editService($id){
        $getService = DB::table('services')->where('id_Service','=',$id)->first();
        return view('admin.services.editService', compact('getService'));
    }
    function updateService($id, Request $request){
        $idService = $request->input('idService');
        $name = $request->input('name');
        $price = $request->input('price');
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('public/image/services/',$image);

        DB::table('services')->where('id_Service','=',$id)->update(['id_Service'=>$idService,'name'=>$name,'price'=>$price,'image'=>$image]);
        return redirect()->route('dichvu');
    }
}
