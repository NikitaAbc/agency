@extends("admin.layouts.app")
@section("content")

    @foreach($slides as $slide)
        <div class="slides">
            <hr>
            <img src="{{ asset($slide->image) }}">
            <label>Заменить</label>
            <form method="post" action="slides/edit" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="slide_id" value="{{$slide->id}}">
                <input type="file" class="file" name="file">
            </form>

            <button class="btn btn-danger">Удалить</button>
        </div>
    @endforeach

    <script>
        $('.slides .file').change(function () {

            $(this).parent().submit();
        });


    </script>
@endsection