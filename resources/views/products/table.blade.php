<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="products-table">
            <thead>
            <tr>
                <th>Nome:</th>
                <th>Descrição:</th>
                <th>Preço:</th>
                <th>Quantidade:</th>
                <th>Categoria:</th>
                <th colspan="3">Ação:</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->nome }}</td>
                    <td>{{ $product->descricao }}</td>
                    <td>$ {{ number_format($product->preco, 2, ',', '.') }}</td> <!-- Preço formatado -->
                    <td>{{ $product->quantidade }}</td>
                    <td>{{ $product->category->nome }}</td>
                    <td style="width: 120px">
                        {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('products.show', [$product->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('products.edit', [$product->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $products])
        </div>
    </div>
</div>
