<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Flash;
use App\Models\Category;



class ProductController extends AppBaseController
{
    /** @var ProductRepository $productRepository*/
    private $productRepository;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Display a listing of the Product.
     */
    public function index(Request $request)
    {
        $products = $this->productRepository->paginate(10);

        return view('products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new Product.
     */

    public function create()
    {
        // Obtém as categorias com pluck, passando os campos 'id' e 'nome'
        $categories = Category::pluck('nome', 'id');

        return view('products.create', compact('categories'));
    }



    /**
     * Store a newly created Product in storage.
     */
    public function store(CreateProductRequest $request)
    {
        $input = $request->all();

        $product = $this->productRepository->create($input);

        Flash::success('Produto salvo com sucesso.');

        return redirect(route('products.index'));
    }

    /**
     * Display the specified Product.
     */
    public function show($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Produto não encontrado');

            return redirect(route('products.index'));
        }

        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified Product.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();  // Recupera todas as categorias
        return view('products.edit', compact('product', 'categories'));
    }


    /**
     * Update the specified Product in storage.
     */
    public function update($id, UpdateProductRequest $request)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Produto não encontrado');

            return redirect(route('products.index'));
        }

        $product = $this->productRepository->update($request->all(), $id);

        Flash::success('Produto atualizado com sucesso.');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified Product from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Produto atualizado com sucesso');

            return redirect(route('products.index'));
        }

        $this->productRepository->delete($id);

        Flash::success('Produto excluído com sucesso.');

        return redirect(route('products.index'));
    }
}
