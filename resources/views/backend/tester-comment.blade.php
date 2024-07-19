@extends("frontend.master")
@section("content")
<div class="container">
    
    <div class="comment-big-box">
        <span id="test-title" class="text-light fade1 mt-3">មតិយោបលអ្នកចូលរួមទាំងអស់</span>
    @forEach($comment as $item)

            <div class="comment-box fade2">
                <div class="row">
                    <div class="col-6">
                        Serial : @if($item->serail != "") {{$item->serail}} @else N/A @endif </div>
                    <div class="col-6">ID : @if($item->idem != "") {{$item->idem}} @else N/A @endif</div>
                </div>
              
    
                <div class="row">
                    <div class="col-6">Name : @if($item->name != "") {{$item->name}} @else N/A @endif</div>
                    <div class="col-6">Age : @if($item->dob != 0) {{$item->dob}} @else N/A @endif</div>
                </div>
                <div class="row">
                    <div class="col-6">Position : @if($item->position != "") {{$item->position}} @else N/A @endif</div>
                    <div class="col-6">Department : @if($item->department != "") {{$item->department}} @else N/A @endif</div>
                </div>
                <div class="row">
                    <div class="col-12">
                        Date: {{$item->created_at}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 comment">
                        Comment
                    </div>
               
                </div>
                <div class="row">
                    <div class="col-12 comment">{{$item->remark}}</div>
                </div>
            </div>
   
    @endforeach

</div>
<div class="float-right-fix">
    <a href="/admin"><button> Main Menu</button></a>
    <a href="/admin/view/result/{{$item->test_id}}"> <button> Back</button></a>
</div>


</div>

@endsection
