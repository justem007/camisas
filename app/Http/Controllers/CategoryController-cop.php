<?php

namespace Camisa\Http\Controllers;

use Camisa\Repositories\CategoryRepositoryEloquent;
use Camisa\Transformers\CategoryTransformer;
use Illuminate\Http\Request;
use Camisa\Http\Requests;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use Spatie\Fractal\ArraySerializer;

class CategoryController extends Controller
{
    /**
     * @var CategoryRepositoryEloquent
     */
    protected $categoryRepository;
    /**
     * @var Manager
     */
    protected $fractal;

    public function __construct(CategoryRepositoryEloquent $categoryRepository, Manager $fractal)
    {
        $this->categoryRepository = $categoryRepository;
        $this->fractal = $fractal;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->fractal->setSerializer(new ArraySerializer());
        $categoria = $this->categoryRepository->all();
        $collection = new Collection($categoria, new CategoryTransformer);
        return $this->fractal->createData($collection)->toArray();
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
}
