@extends("frontend.master")
@section("content")
<div class="container">
    
<div class="test-list-panel">
    <span id="title-list-test"> Test For Today   </span>
<table>
        <tr>
            <th>Title</th>
            <th>Test Method</th>
            <th>Prodct</th>
            <th>Created Date</th>
            <th>Action</th>
        </tr>
        @if(count($test_today) != 0)
            @foreach($test_today as $item)
                <tr>
                    <td>{{$item->title}}</td>
                    <td>{{$item->product_qty}}</td>
                    <td>{{$item->option_qty}}</td>
                    <td>{{$item->created_at}}</td>
                    <td><a href="/test/takepart/id={{$item->id}}/em={{$employee->serial}}"><button>Take Path</button></a></td>
                </tr>
            @endforeach
        @else
            <tr>
                <td>No Test For Today</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

        @endif
    
    
   
</table>

    <a href="/login" class="float-right"><button>Back</button></a>

</div>

</div>
@endsection