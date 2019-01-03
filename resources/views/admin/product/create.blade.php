@extends('admin.layout.admin')

@section('content')

    <h3>Add Product</h3>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        {!! Form::open(['route' => 'product.store', 'method' => 'post', 'files' => true]) !!}
          <div class="form-group">
            {{ Form::label('suit_name', 'Наименованине')}}
            {{ Form::text('suit_name', null, array('class' => 'form-control'))}}
          </div>

          <div class="form-group">
                {{ Form::label('suit_descript', 'Описание')}}
                {{ Form::text('suit_descript', null, array('class' => 'form-control'))}}
              </div>
          
          <div class="form-group">
                {{ Form::label('suit_size', 'Размер')}}
                {{ Form::select('suit_size', [11 => 'Small', 22 => 'Medium', 33 => 'Large'], null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                    {{ Form::label('categories_cat_id', 'Категории')}}
                    {{ Form::select('categories_cat_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Select Category']) }}
            </div>
            <div class="form-group">
                    {{ Form::label('photo', 'Фото')}}
                    {{ Form::file('photo', array('class' => 'form-control'))}}
             </div>

             <div class="form-group">
                    {{ Form::label('suit_price', 'Цена')}}
                    {{ Form::text('suit_price', null, array('class' => 'form-control'))}}
            </div>

            <div class="form-group">
                    {{ Form::label('suit_quantity', 'Количество')}}
                    {{ Form::text('suit_quantity', null, array('class' => 'form-control'))}}
                  </div>
          <div class="form-group">
                        {{ Form::submit('Create', array('class' => 'btn btn-primary'))}}
                 </div>
        
         

        {!! Form::close() !!}
    </div>
    </div>