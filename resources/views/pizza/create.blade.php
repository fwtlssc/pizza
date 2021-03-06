@extends('welcome')

@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h2>Menu</h2>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <li class="list-group-item list-group-item-action"><a href="">View</a></li>
                            <li class="list-group-item list-group-item-action"><a href="">Create</a></li>
                        </div>
                    </div>
                </div>
                @if ($errors->count() > 0)
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <p> {{ $error }} </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-md-9 mt-md-0 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Pizza</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pizza.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="name">
                                    Name of pizza
                                </label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name') }}" placeholder="name of pizza" required>
                            </div>
                            <div class="form-group mt-3">
                                <label class="form-label" for="description">
                                    Description of pizza
                                </label>
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group mt-3">
                                <label for="price" class="form-label">
                                    Pizza price($):
                                </label>
                                <div class="row gy-3">
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" placeholder="small pizza price"
                                            name="pizza[small]" value="{{ old('pizza.small') }}">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" placeholder="medium pizza price"
                                            name="pizza[medium]" value="{{ old('pizza.medium') }}">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control"placeholder="large pizza price"
                                            name="pizza[large]" value="{{ old('pizza.large') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="category" class="form-label">Category</label>
                                <select name="category" id="category" class="form-select">
                                    <option value=""></option>
                                    <option value="vegetarian" {{ old('category') === 'vegetarian' ? 'selected' : '' }}>
                                        Vegetarian Pizza</option>
                                    <option value="non-vegetarian"
                                        {{ old('category') === 'non-vegetarian' ? 'selected' : '' }}>Non-Vegetarian Pizza
                                    </option>
                                    <option value="traditional" {{ old('category') === 'traditional' ? 'selected' : '' }}>
                                        Traditional Pizza</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="image" class="form-label">Image</label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                            </div>
                            <div class="form-group text-center mt-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
