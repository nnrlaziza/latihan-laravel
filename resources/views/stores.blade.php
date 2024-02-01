@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row">

            @foreach ($store as $book) 
                
            <div class="col-md-4 mb-3">
              
              <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">

                        <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                            <h5 class="text-white">{{ $book ->bookCategory->name }}</h5>
                        </div>

                        <img src="https://source.unsplash.com/400x950?{{ $book ->bookCategory->name }}" class="img-fluid rounded-start" alt="...">
                      </div>

                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <button type="button" class="btn btn-success">Rp.1000</button>
                          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
                
                @endforeach

              </div>
            </div>
 @endsection