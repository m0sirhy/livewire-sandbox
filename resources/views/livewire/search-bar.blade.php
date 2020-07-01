<div class="container">
    <form>

        <div class="form-group">
            <label for="exampleInputEmail1">الاسم</label>
            <input type="text" class="form-control"  placeholder="Enter full name"
                   wire:model="query"
            >
        </div>
        @if(!empty($query))
        <div class="form-group">
            <ul class="list-group">
                @foreach($clients as $i => $client)

                <li class="list-group-item">{{ $client['full_name'] }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="form-group ">
            <input type="number" class="form-control" id="exampleCheck1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>



            <div class="fixed top-0 right-0 bottom-0 left-0" ></div>
    </form>
</div>
