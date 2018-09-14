@extends("admin.layouts.app")
@section("content")

    @foreach($slides as $slide)
        <div class="slides">
            <hr>

            <label>Заменить</label>

            <div class="col-md-5" >
                <img src="{{ asset("public/img/slides/".$slide->image) }}" class="img-responsive" alt="img">
                <ul class="list-inline padding-10">
                    <li>
                        <button class="btn btn-danger">Удалить</button>
                    </li>
                </ul>
                <form method="post" action="slides/edit" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="slide_id" value="{{$slide->id}}">
                    <input type="file" class="file" name="file">
                </form>
            </div>

        </div>
    @endforeach

    <script>
        $('.slides .file').change(function () {

            $(this).parent().submit();
        });


    </script>
@endsection