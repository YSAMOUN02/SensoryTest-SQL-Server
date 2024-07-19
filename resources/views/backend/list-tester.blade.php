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
                          <button  type="button" class="btn-reset">
                            <input type="text" data-id class="d-none" value="{{$item->id_em}}">
                            Delete</button>
                        </td>

                    </tr>
                @endforeach
            </tr>
        </table>

    <div class="row cs">
        <div class="col-12">
            <div class="align-right">
                <a href="/admin/view/test" ><button type="button" class="m-1">Main Menu</button></a>
                <a href="/admin/view/result/{{$id}}"><button>Back</button></a>
            </div>
        </div>
    </div>
    </div>


        <div class="alert-confirm">
            <div class="inner-alert">

                <span> Are you sure? All Value from that Tester will be reset from this test</span>
                <div class="btn-confirm">
                    <form action="/admin/delete/tester/data">
                    <input type="text"   id="id-delete-box" class="d-none" name="em_id" >
                    <input type="text" name="test_id" class="d-none" value="{{$id}}">
                    <button>Yes</button>
                    </form>
                    <button class="alert-no" onclick="hide_alert()" >No</button>
                </div>
            </div>
        </div>
    </div>


@endsection
