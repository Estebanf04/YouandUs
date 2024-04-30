<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Search\SearchRequest;
use App\Models\User;
use App\Http\Services\SearchService;

class SearchController extends Controller
{
    public function __construct(protected SearchService $searchService){
        $this->middleware('auth');
    }
    
    public function search(SearchRequest $request){
        $users = $this->searchService->search($request);
        return view('result-search', compact('users'));
    }
}
