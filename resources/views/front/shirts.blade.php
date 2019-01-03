@extends('layout.main')

@section('title', 'Shirts')
@section('content')

 <!-- products listing -->
         <!-- Latest SHirts -->
         <div class="row">
             @forelse($shirts as $shirt)
                <div class="small-3 columns">
                    <div class="item-wrapper">
                        <div class="img-wrapper">
                            <a class="button expanded add-to-cart">
                                    Все товары
                            </a>
                            <a href="#">
                            <img src="{{url('images',$shirt->photo)}}"/>
                            </a>
                        </div>
                        <a href="{{route('shirt')}}">
                            <h3>
                                {{$shirt->suit_name}}
                            </h3>
                        </a>
                        <h5>
                            {{$shirt->suit_price}} c.
                        </h5>
                        <p>
                            {{$shirt->suit_descript}}
                        </p>
                    </div>
                </div>
                @empty
                <h3>Пусто</h3>
                @endforelse
              
            </div>

@endsection
