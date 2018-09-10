@extends("admin.layouts.app")
@section("content")
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <h2 class="text-center bg-success" >{{ session('success')  }} </h2>

    <div class="container">


    <div class="widget-body no-padding">
        <div class="alert alert-warning no-margin">
            <button class="close" data-dismiss="alert">
                ×
            </button>

           <div class="text-center"><i class="fa-fw fa fa-info"></i>Чем ниже приоритет, тем выше услуга.</div>
        </div>

        <div><a href="{{ route("admin.services.create") }}" class="btn btn-success pull-right">Добавить</a></div>

        <div class="table-responsive" style="margin-top:70px;">

            <div style="cursor: pointer; font-size:28px; display:none;" class="pull-right elements">

            </div>

            <table class="table table-bordered table-striped table-condensed table-hover smart-form has-tickbox">
                <thead>
                <tr>
                    <th>Приоритет <a href="javascript:void(0);" class="btn btn-xs btn-default pull-right"><i class="fa fa-filter"></i></a></th>
                    <th>Заголовок <a href="javascript:void(0);" class="btn btn-xs btn-default pull-right"><i class="fa fa-filter"></i></a> </th>
                    <th>Описание <a href="javascript:void(0);" class="btn btn-xs btn-default pull-right"><i class="fa fa-filter"></i></a></th>
                    <th>Нижний текст <a href="javascript:void(0);" class="btn btn-xs btn-default pull-right"><i class="fa fa-filter"></i></a></th>
                    <th>Подвинуть</th>
                    <th>Действие</th>

                </tr>
                </thead>
                <tbody >
                @foreach($services as $service)
                <tr id="entry">

                    <td id="position">{{ $service->position }}</td>
                    <td contenteditable="false" class="selected">{{ $service->title }}</td>
                    <td contenteditable="false" class="selected">{{ str_limit($service->text, 66) }}</td>
                    <td contenteditable="false" class="selected">{{ $service->footer_text }}</td>

                    <td style="cursor: pointer; font-size:26px" rel="{{$service->id}}">
                        <i rel="up" class="fa fa-sort-asc txt-color-green repos" title="Вверх"></i>
                        <i rel="down"class="fa fa-sort-desc txt-color-red repos" title="Вниз"></i>
                    </td>

                    <td style="cursor: pointer; font-size:26px">
                        <a href="{{ route("admin.services.show",$service->route) }}"><i class="fa fa-mail-forward txt-color-orange" aria-hidden="true" title="К редактированию" ></i></a>
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


        var action;

        $('.repos').on('click', function() {

            let action=$(this).attr('rel'),
                id=$(this).parent().attr('rel'),
                position = $(this).closest("tr").find("#position").text();


            $(this).closest('tr').insertBefore($(this).closest('tr').prev());

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
                    "position": position,
                }
            });

        });




/*
        $("#entry #checkbox-inline").on("click",function () {

            if($("#entry #checkbox-inline").is(":checked")){
                $(".elements").show(500);
            } else {
                $(".elements").hide(500);
            }

        });
*/

       var destroy = (self) => {

            let position = $(self).parents("#entry").find("#position");

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
                    "position": position.text(),
                },
                complete: function(response){
                  $(self).parents("#entry").remove();

                }
            });
        };

    </script>

@endsection
