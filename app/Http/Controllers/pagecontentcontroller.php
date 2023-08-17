<?php

namespace App\Http\Controllers;
use App\Models\PageContent;
use Illuminate\Http\Request;


class pagecontentcontroller extends Controller
{
    public function add(Request $request)
    {
        $data=[];
        
        if($request->has('Title'))
        {
            
            $data['Title']=$request->input('Title');
        }
    
        if($request->has('description'))
        {
            $validatedata=$request->validate(['description'=>'required|string']);
            $data['description']=$validatedata['description'];
        }
        
        if($request->has('projects'))
        {
            
            $data['projects']=$request->input('projects');
        }
    
        if($request->has('outcomes'))
        {
            $validatedata=$request->validate(['outcomes'=>'required|string']);
            $data['outcomes']=$validatedata['outcomes'];
        }
        
        if($request->has('Days'))
        {
            $validatedata=$request->validate(['Days'=>'required|string']);
            $data['Days']=$validatedata['Days'];
        }
        
        if($request->has('schedule-Time'))
        {
            $data['schedule-Time']=$request->input('schedule-Time');
            
        }
        
        if($request->has('image-url'))
        {
            
            $data['image-url'] = $request->input('image-url');
            
        }
        
        if (empty($data)) {
            return response()->json(['message' => 'No valid data provided'], 400);
        }
    
       
    
        $pageContent = PageContent::create($data);
    
        return response()->json([
            'message' => 'Page content added successfully',
            'data' => $pageContent
        ], 201);
    }


    public function update(Request $request,$id)
    {
        $pageContent = PageContent::findOrFail($id);

    $data = [];

    if ($request->has('title')) {
        $data['Title'] = $request->input('title');
    }

    if ($request->has('description')) {
        $data['description'] = $request->input('description');
    }
    if ($request->has('projects')) {
        $data['projects'] = $request->input('projects');
    }

    if ($request->has('outcomes')) {
        $data['outcomes'] = $request->input('outcomes');
    }

    if ($request->has('Days')) {
        $data['Days'] = $request->input('Days');
    }

    if ($request->has('schedule-Time')) {
        $data['schedule-Time'] = $request->input('schedule-Time');
    }

    if ($request->has('image-url')) {
        $data['image-url'] = $request->input('image-url');
    }

    if (empty($data)) {
        return response()->json(['message' => 'No valid data provided'], 400);
    }
    $pageContent->update($data);

    return response()->json(['message' => 'Record updated successfully']);




    }
}
