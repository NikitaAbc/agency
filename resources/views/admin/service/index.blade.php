@extends("admin.layouts.app")
@section("content")


    <div class="container">


    <div class="widget-body no-padding">
        <div class="alert alert-warning no-margin">
            <button class="close" data-dismiss="alert">
                ×
            </button>

           <div class="text-center"><i class="fa-fw fa fa-info"></i>Чем ниже приоритет, тем выше услуга.</div>
        </div>

        @if(session("success"))
            <div class="alert alert-success no-margin">
                <button class="close" data-dismiss="alert">
                    ×
                </button>
                <div class="text-center">{{ session("success") }}</div>
            </div>
        @endif

        <div><a href="{{ route("admin.services.create") }}" class="btn btn-success pull-right">Добавить</a></div>

        <div class="table-responsive" style="margin-top:70px;">



            <table class="table table-bordered table-striped table-condensed table-hover smart-form has-tickbox">
                <thead>
                <tr>

                    <th>Позиция <a href="#" class="btn btn-xs btn-default pull-right"></a></th>
                    <th>Заголовок <a href="#" class="btn btn-xs btn-default pull-right"></a> </th>
                    <th>Описание <a href="#" class="btn btn-xs btn-default pull-right"></a></th>
                    <th>Нижний текст <a href="#" class="btn btn-xs btn-default pull-right"></a></th>
                    <th>Подвинуть</th>
                    <th>Действие</th>

                </tr>
                </thead>
                <tbody >
                @foreach($services as $service)
                <tr>
                    <td>{{ $service->position }}</td>
                    <td>{{ $service->title }}</td>
                    <td>{{ str_limit($service->text, 66) }}</td>
                    <td>{{ $service->footer_text }}</td>

                    <td class="action" rel="{{$service->id}}">
                        <i rel="up" class="fa fa-sort-asc txt-color-green repos" title="Вверх"></i>
                        <i rel="down"class="fa fa-sort-desc txt-color-red repos" title="Вниз"></i>
                    </td>

                    <td class="action" rel="{{$service->id}}">
                        <a href="{{ route("admin.services.edit",$service->route) }}"><i class="fa fa-pencil txt-color-orange" aria-hidden="true" title="К редактированию" ></i></a>
                        <i class="fa fa-trash txt-color-red" aria-hidden="true" title="Удалить" onclick="destroy(this)"></i>
                    </td>

                </tr>

                @endforeach

                </tbody>
            </table>

        </div>

    </div>
    </div>

    <script>
        //$('#entry i[rel=up]').eq(0).css({'opacity': 0.1});
        //$('#entry i[rel=down]').last().css({'opacity': 0.1});





        $('.repos').on('click', function() {

            let action=$(this).attr('rel'),
                id=$(this).parent().attr('rel'),
                currentTr = $(this).closest('tr'),
                prevId;

            if(action == "up"){

                prevId = currentTr.prev();

                currentTr.insertBefore($(this).closest('tr').prev());

            } if(action == "down") {

                prevId = currentTr.next();

                currentTr.insertAfter($(this).closest('tr').next());

            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

           $.ajax({
                url: "services",
                dataType : 'json',
                type: 'post',
                data: {
                    "action": action,
                    "id": id,
                    "prevId": prevId.find('[rel]').eq(0).attr('rel')
                }
            });


        });

        var destroy =(self) => {

            let id = $(self).parent().attr("rel");

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "services",
                dataType : 'json',
                type: 'delete',
                data: {
                    "id": id,
                },
                complete: function(){
                    $(self).parents("tr").remove();

                }
            });

        };

    </script>

@endsection
