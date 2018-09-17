@extends("admin.layouts.app")

@section("content")

    @foreach($slides as $slide)
        <div class="slides">
            <hr>

            <label>Заменить</label>

            <div class="col-md-5" >
                <img src="{{ asset("public/img/slides/".$slide->image) }}" class="img-responsive" alt="img">
                @isset($slide->image)
                <ul class="list-inline padding-10">
                    <li rel="{{ $slide->id }}">

                        <button class="btn btn-danger" onclick="remove(this)">Удалить фото</button>

                    </li>
                </ul>
                @endisset
                <form method="post" action="slides/edit" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="slide_id" value="{{$slide->id}}">
                    <input type="file" class="file" name="file">
                </form>
            </div>

        </div>
    @endforeach

    <script>
        var remove = function (self) {
            let id = $(self).parent().attr("rel");

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "slides",
                dataType: 'json',
                type: 'delete',
                data: {
                    "id": id,
                },
                complete: function (response) {
                    location.reload();
                }
            });

        };

        $('.slides .file').change(function () {

            $(this).parent().submit();
        });
    </script>
@endsection