<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>DELETE MODEL</h2>
                <hr>
            </div>
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