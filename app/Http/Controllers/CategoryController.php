<?php

namespace Camisa\Http\Controllers;

use Camisa\Http\Requests;
use Camisa\Http\Requests\CategoryCreateRequest;
use Camisa\Http\Requests\CategoryUpdateRequest;
use Camisa\Repositories\CategoryRepository;
use Camisa\Repositories\CategoryRepositoryEloquent;
use Camisa\Transformers\CategoryTransformer;
use Camisa\Validators\CategoryValidator;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Spatie\Fractal\ArraySerializer;

class CategoryController extends Controller
{
    /**
     * @var CategoryRepository
     */
    protected $repository;

    /**
     * @var CategoryValidator
     */
    protected $validator;
    
    /**
     * @var Manager
     */
    protected $fractal;

    public function __construct(CategoryRepositoryEloquent $repository, CategoryValidator $validator, Manager $fractal)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
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

        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        
        $categories = $this->repository->all();

        if (request()->wantsJson()) {
            return response()->json([
                'data' => $categories,
            ]);
        }

        $collection = new Collection($categories, new CategoryTransformer);

        return $this->fractal->createData($collection)->toArray();
//        return compact('categories');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CategoryCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $category = $this->repository->create($request->all());

            $response = [
                'message' => 'Category created.',
                'data'    => $category->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->fractal->setSerializer(new ArraySerializer());

        $category = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $category,
            ]);
        }

        $collection = new Item($category, new CategoryTransformer);

        return $this->fractal->createData($collection)->toArray();

//        return compact('category');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->repository->find($id);
//        return compact('category');
        return $category;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  CategoryUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(CategoryUpdateRequest $request, $id)
    {

        try {
            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);
            $category = $this->repository->update($id, $request->all());
            $response = [
                'message' => 'Categoria atualizada.',
                'data'    => $category->toArray(),
            ];
            if ($request->wantsJson()) {
                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);

        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return $category;
//            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Category deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Category deleted.');
    }
}
