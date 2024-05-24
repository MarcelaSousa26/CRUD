<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Produto') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" p-6 text-gray-900">
                    <h1 class="d-flex justify-content-center mb-0">Editar produto</h1>
                    <hr />
                    <form action="{{ route('admin/products/update', $products->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Nome do produto</label>
                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{$products->title}}">
                                @error('title')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Categoria</label>
                                <input type="text" name="category" class="form-control" placeholder="Category" value="{{$products->category}}">
                                @error('category')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Preço</label>
                                <input type="text" name="price" class="form-control" placeholder="Product Price" value="{{$products->price}}">
                                @error('price')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex align-items-center justify-content-center">
                                <p>
                                    <a href="{{ route('admin/products') }}" class="bg-trevoso hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md mr-2" style="text-decoration: none;">Voltar</a>
                                </p>
                                <p>
                                    <button class="d-flex items-center bg-rosa hover:bg-rosaH text-white font-bold py-2 px-4 rounded-md h-9">Editar</button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
