<?php 

namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Http\Requests\Search\SearchRequest;
use App\Models\User;

class SearchService{

    public function search(SearchRequest $request){
        $users = User::where('name', 'LIKE', "%".$request->busqueda."%")
        ->orWhere('surname', 'LIKE', "%".$request->busqueda."%")
        ->orWhere('nickname', 'LIKE', "%".$request->busqueda."%")->get();
        return $users;
    }
}