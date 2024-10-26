<?php

namespace App\Services;

use App\Models\ImportExport as Data;
use Illuminate\Http\Request;

class DataService {
    public function createData(array $data){
        return Data::create($data);
    }

    public function paginate(Request $request){
        // Ambil parameter dari request
        $limit = $request->input('length', 10); // default 10
        $start = $request->input('start', 0); // default 0
        $search = $request->input('search.value', '');

        $query = Data::query();

        if ($search) {
            $query->where(function($q) use ($search){
                $q->where("Product", "LIKE", "%$search%")
                ->orWhere("Country", "LIKE", "%$search%")
                ->orWhere("ShippingMethod", "LIKE", "%$search%")
                ->orWhere("Port", "LIKE", "%$search%")
                ->orWhere("Category", "LIKE", "%$search%")
                ->orWhere("Quantity", "LIKE", "%$search%");
            });
        }
        // hitung total data
        $totalData = $query->count();
        // ambil data dengan limit dan offset
        $data = $query->limit($limit)->offset($start)->get();

        return [
            "draw" => intval($request->input('draw')), // Pastikan draw diubah menjadi integer
            "recordsTotal" => $totalData,
            "recordsFiltered" => $totalData,
            "data" => $data,
        ];
    }
}