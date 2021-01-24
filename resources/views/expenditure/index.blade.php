@extends('layout.main')

@section('content')


    @include('continent.create')

    @foreach ($list as $item)

        @include('continent.edit')

    @endforeach

    <div class="col-md-12" align="right" style="margin-bottom: 11px;margin-top: 11px;">
        <a data-toggle="modal" data-target="#create" href="#" class="btn btn-sm btn-primary">+ Continent</a>
    </div>

    <div class="col-md-12">
        {{ $percent(20,1000) }}
    </div>

    <div class="col-md-12">
        <table class="table">

            <tr>

                <th>
                    Category
                </th>
                <th>
                    Item
                </th>
                <th>
                    Cost
                </th>
                <th>
                    Created
                </th>
                <th>
                    Action
                </th>

            </tr>


            @foreach ($list as $item)

                <tr>

                    <td>
                        {{ $item->category_id }}
                    </td>

                    <td>
                        {{ $item->item }}
                    </td>

                    <td>
                        {{ $item->cost }}
                    </td>

                    <td>
                        {{ $item->created_at }}
                    </td>


                    <td>

                        <a href="#" data-target="#edit{{ $item->id }}" data-toggle="modal" class="btn btn-sm btn-warning">Edit</a>


                        <form style="display: inline-block;" onsubmit="return confirm('Do you want to remove this record?');" action="{{ route('expenditure.destroy',[$item->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Remove</button>
                        </form>
                    </td>

                </tr>

            @endforeach

        </table>
    </div>



@endsection