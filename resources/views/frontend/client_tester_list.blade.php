@extends("frontend.master")
@section("content")

    <div class="container">
        @php
     $num = 0;
    @endphp

    <div class="test-result">
        <span class="method-title">Participant List</span>
        <table class="table table-light table-responsive table-striped table-hover fade1 mt-3" >
            <tr>
                <th>Serail</th>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Department</th>
                <th>Position</th>
                <th>Test Date</th>
                <th>View Tester Choice</th>
            </tr>
            <tr>
                @foreach ($employee as $item)
                    <tr>
                        <td>{{$item->serial}}</td>
                        <td>{{$item->idem}}</td>
                        <td>{{$item->name}}</td>
                        @if ($item->dob == 0)
                            <td>N/A</td>
                        @else
                        <td>{{$item->dob}}</td>
                        @endif

                        <td>{{$item->department}}</td>
                        <td>{{$item->position}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <a href="/admin/view/result/tester/choice/id={{$id}}/em={{$item->id_em}}"><button>View</button></a>
                        </td>

                    </tr>
                @endforeach
            </tr>
        </table>

    <div class="row cs">
        <div class="col-12">
            <div class="align-right">

                <a href="/result/test_id={{$id}}"><button>Back</button></a>
            </div>
        </div>
    </div>
    </div>



    </div>


@endsection
