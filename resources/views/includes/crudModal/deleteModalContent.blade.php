<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>DELETE MODEL</h2>
                <hr>
            </div>
            @if (session('message'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Message success </strong> <br>{{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        
                    </button>
        
                </div>
    
            @endif
    
            @if (session('error'))
        
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Message success </strong> <br>{{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
        
            @endif
        
            @if ($errors->any())
        
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li><br />
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
        
            @endif
            <div class="crud">
                <form method="POST" action="{{route('sendDeleteModalCar')}}">
                    @csrf

                    <div class="field">
                        <label for="name">Model</label>
                        <select class="form-select" aria-label="Default select example"  name="modal_id">
                            <option value="">Select a model</option>
                            @if(isset($modals))
                                @foreach ($modals as $modal)
                                <option value="{{ $modal->id }}">
                                    {{$modal->brandContent->name.' '.$modal->model_name.' '.$modal->year}}
                                </option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="btn__form">
                        <button>Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>