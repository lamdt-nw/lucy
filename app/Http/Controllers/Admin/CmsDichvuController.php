<?php

namespace App\Http\Controllers\Admin;

use App\Consts;
use App\Http\Services\ContentService;
use App\Models\CmsDichvu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CmsDichvuController extends Controller
{
    public function __construct()
    {
        $this->routeDefault  = 'cms_dichvu';
        $this->viewPart = 'admin.pages.cms_dichvu';
        $this->responseData['module_name'] = __('Quản lý danh mục dịch vụ');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $params = $request->all();
        $this->responseData['rows'] =  ContentService::getCmsDichvu($params)->paginate(Consts::DEFAULT_PAGINATE_LIMIT);

        return $this->responseView($this->viewPart . '.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Get all taxonomy is active
        // $params['status'] = Consts::TAXONOMY_STATUS['active'];
        // $this->responseData['taxonomys'] = ContentService::getCmsTaxonomy($params)->get();

        return $this->responseView($this->viewPart . '.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255'
        ]);

        $params = $request->all();
		
		$hienthi = isset($params['hienthi']) ? implode(';',$params['hienthi']) : '';
		$params['hienthi'] = ';'.$hienthi.';';
		
        $params['admin_created_id'] = Auth::guard('admin')->user()->id;
        $params['admin_updated_id'] = Auth::guard('admin')->user()->id;

        CmsDichvu::create($params);

        return redirect()->route($this->routeDefault . '.index')->with('successMessage', __('Add new successfully!'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CmsTaxonomy  $cmsTaxonomy
     * @return \Illuminate\Http\Response
     */
    public function show(CmsDichvu $cmsDichvu)
    {
        // Do not use this function
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CmsTaxonomy  $cmsTaxonomy
     * @return \Illuminate\Http\Response
     */
    public function edit(CmsDichvu $cmsDichvu)
    {
        // Get all parents which have status is active
        $params['status'] = Consts::TAXONOMY_STATUS['active'];
        $params['different_id'] = $cmsDichvu->id;
        $this->responseData['taxonomys'] = ContentService::getCmsTaxonomy($params)->get();
        $this->responseData['detail'] = $cmsDichvu;

        return $this->responseView($this->viewPart . '.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CmsTaxonomy  $cmsTaxonomy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CmsDichvu $cmsDichvu)
    {
        $request->validate([
            'title' => 'required|max:255',
            'taxonomy' => 'required|max:255',
        ]);

        $params = $request->all();
		
		$hienthi = isset($params['hienthi']) ? implode(';',$params['hienthi']) : '';
		
		$params['hienthi'] = ';'.$hienthi.';';
		
        $params['admin_updated_id'] = Auth::guard('admin')->user()->id;

        $cmsDichvu->fill($params);
        $cmsDichvu->save();

        return redirect()->back()->with('successMessage', __('Successfully updated!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CmsTaxonomy  $cmsTaxonomy
     * @return \Illuminate\Http\Response
     */
    public function destroy(CmsDichvu $cmsDichvu)
    {
        $cmsDichvu->status = Consts::STATUS_DELETE;
        $cmsDichvu->save();

        // Update delete status sub
        CmsDichvu::where('parent_id', '=', $cmsDichvu->id)->update(['status' => Consts::STATUS_DELETE]);

        return redirect()->back()->with('successMessage', __('Delete record successfully!'));
    }
}
