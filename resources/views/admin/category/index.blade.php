 @extends('admin.layout.admin')

@section('content')
<div class="navbar">
    <a href="#" class="navbar-brand">Категории: </a>
    <ul class="nav navbar-nav">
        @if(!empty($categories))
        @forelse($categories as $category)
            <li>
            <a href="{{route('category.show', $category->id)}}">{{$category->cat_name}}</a>
            </li>
            @empty
            <li>Пусто</li>
            @endforelse 
        @endif
        
    </ul>


    <a href="#modal-id" class="btn btn-primary" data-toggle="modal">Добавить категорию</a>
    <div class="modal fade" id="modal-id">
        <div class="modal-dialog">

                {!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}
                <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidder="true">&times;</button>
                            <h4 class="modal-title">Название категории</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                {{ Form::label('cat_name', 'Title') }}
                                {{ Form::text('cat_name', null, array('class' => 'form-control')) }}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                            <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                        </div>
                    </div>
                {!! Form::close() !!}

            
        </div>
    </div>

</div>
@if(!empty($products))
<section>
    <h3>Костюмы</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <td>{{$product->suit_name}}</td>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
            <tr>
                <td>{{$product->suit_name}}</td>
            </tr>
            @empty
            <tr>
                <td>Пусто</td>
            </tr>

            @endforelse
        </tbody>
    </table>
</section>
@endif
@endsection