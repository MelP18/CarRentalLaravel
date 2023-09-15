
<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>ADD CATEGORY</h2>
                <hr>
            </div>
            <div class="crud">
                <form method="POST" action="{{route('sendCategoryCar')}}">
                    @csrf
                    <div>
                        <h5>CATEGORY</h5>
                    </div>
                    <div class="field"> 
                        <input type="text" name="name">    
                    </div>
                    <div class="btn__form">
                        <button>Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


