<?php

namespace App\Http\Controllers;

use App\Services\DataService;
use Exception;
use Illuminate\Http\Request;

class DataController extends Controller
{
    protected $dataService;
    public function __construct(DataService $dataService)
    {
        $this->dataService = $dataService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view("data.index", []);
    }

    public function paginate(Request $request){
        try {
            return response()->json($this->dataService->paginate($request), 200);
        } catch (Exception $e) {
            return response()->json([
                "code" => 500,
                "title" => "Error",
                "message" => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            return response()->json($this->dataService->createData($request->all()));
        } catch (Exception $e) {
            return response()->json([
                "code" => 500,
                "title" => "Error",
                "message" => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
