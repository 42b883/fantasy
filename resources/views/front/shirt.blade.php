@extends('layout.main')

@section('title', 'shirt')

@section('content')

<!-- products listing -->
        <!-- Latest SHirts -->
        <div class="row">
                <div class="small-5 small-offset-1 columns">
                    <div class="item-wrapper">
                        <div class="img-wrapper">
                            <a href="#">
                                 <img src="http://i.imgur.com/Mcw06Yt.png"/>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="small-6 columns">
                    <div class="item-wrapper">
                        <h3 class="subheader">
                           <span class="price-tag">$20</span> Костюмы
                        </h3>
                        <div class="row">
                            <div class="large-12 columns">
                                <label>
                                    Выбрать размер
                                    <select>
                                        <option value="small">
                                            S
                                        </option>
                                        <option value="medium">
                                            M
                                        </option>
                                        <option value="large">
                                            L
                                        </option>
                                       
                                    </select>
                                </label>
                                <a href="#" class="button  expanded"> Добавить в корзинку</a>
                            </div>
                        </div>
                    <p class="text-left subheader"><small>*  <a href="https://www.youtube.com/webdevmatics">ПИ-3-17</a></small></p>
    
                    </div>
                </div>
            </div>

@endsection