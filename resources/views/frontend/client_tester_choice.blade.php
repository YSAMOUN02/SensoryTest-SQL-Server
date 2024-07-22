@extends("frontend.master")
@section("content")
<div class="container">

        @php
         $num = 0;
        @endphp
    
        <div class="test fade1">
            <span id="test-title">{{$test[0]->title}}</span>
            <div class="user-info fade1">
                <span class="method-title">Tester Info</span>
                <hr>
                
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="idem" value="{{$employee[0]->id}}" class="d-none">
                     
                        @if($employee[0]->idem != "" )
                            <span>ID : {{$employee[0]->idem}}</span>
                        @else
                            <span>ID : N/A</span>
                        @endif
                      
                        
                        @if($employee[0]->serial != "")
                            <span>Serial : {{$employee[0]->serial}}</span>
                        @else
                            <span>Serial : N/A</span>
                        @endif

                        @if($employee[0]->name != "")
                            <span>ឈ្មោះ : {{$employee[0]->name}}</span>
                        @else
                            <span>ឈ្មោះ : N/A</span>
                        @endif
                    </div>
                    <div class="col-6">
                        @if ($employee[0]->dob != 0)
                        <span>អាយុ : {{$employee[0]->dob}}</span>
                        @else
                        <span>អាយុ : N/A</span>
                        @endif
                       

                        @if($employee[0]->position != "")
                            <span>Position : {{$employee[0]->position}}</span>
                        @else
                            <span>Position : N/A</span>
                        @endif
                        

                        @if($employee[0]->department != "")
                        <span>Department : {{$employee[0]->department}}</span>

                        @else
                        <span>Department : N/A</span>

                        @endif
                
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                       <span> Date:  {{$employee[0]->created_at}}</span>
                    </div>
                </div>
                <hr>
            </div>
    
            @foreach ($test as $item)
    
    
                @if($parameter_test1 != "0")
                    @if ($item->type == 1)
                        <input type="text" name="parameter1-id" class="d-none" value="{{$parameter_test1[0]->id}}">
                        @php
                        $num += 1;
                        @endphp
                        <div class="same-test-method fade1">
                        
                            <span class="method-title">{{$num}}. {{$item->test_title}} {{$parameter_test1[0]->label_main}} </span>
                            <div class="same-choice">
                               
                                <div class="choice1">{{$parameter_test1[0]->label2}} @if(!empty($tester_choice) && $tester_choice == 2)<div class="circle"></div> @endif</div>
    
                                <div class="choice1">{{$parameter_test1[0]->label3}}  @if(!empty($tester_choice) && $tester_choice == 3)<div class="circle"></div> @endif</div>
                               
                                @if(!empty($parameter_test1[0]->label4) || $parameter_test1[0]->label4 != "")
                                <div class="choice1">{{$parameter_test1[0]->label4}}  @if(!empty($tester_choice) && $tester_choice == 4)<div class="circle"></div> @endif</div>
                                
                                @endif
                      
                            </div>
                        </div>
                    @endif
                @endif
                @if($parameter_test2 != "0")
                    @if ($item->type == 2)
                        <input type="text" name="parameter2-id" class="d-none" value="{{$parameter_test2[0]->id}}">
                     
                        @php
                        $num += 1;
                        @endphp
                        <div class="difference-test-method fade1">
                            <span class="method-title">{{$num}}. {{$item->test_title}}</span>
                            <div class="difference-choice">
                                <div class="choice1">{{$parameter_test2[0]->label1}} @if(!empty($tester_choice_test2) && $tester_choice_test2 == 1)<div class="circle"></div> @endif</div>
                                <div class="choice1">{{$parameter_test2[0]->label2}} @if(!empty($tester_choice_test2) && $tester_choice_test2 == 2)<div class="circle"></div> @endif</div>
                                <div class="choice1">{{$parameter_test2[0]->label3}} @if(!empty($tester_choice_test2) && $tester_choice_test2 == 3)<div class="circle"></div> @endif</div>
                                @if(!empty($parameter_test2[0]->option4) || $parameter_test2[0]->option4 != "")
                                <div class="choice1">{{$parameter_test2[0]->label4}} @if(!empty($tester_choice_test2) && $tester_choice_test2 == 4)<div class="circle"></div> @endif</div>
                                @endif
                            </div>
                        </div>
                    @endif
                @endif
                @if($parameter_test4 != "0")
                @if ($item->type == 4)
                    <input type="text" name="parameter4-id" class="d-none" value="{{$parameter_test4[0]->id}}">
                    @php
                    $num += 1;
                    @endphp
                    <div class="ranking-test-method fade1 ">
                        <div class="choice">
                            <div class="ranking-test-method">
                                <span class="method-title">{{$num}}. {{$item->test_title}}</span>
                                <table class="table table-light table-striped table-hover fade1 mt-5">
                                    <tr>
                                        <th>Rank</th>
                                        <th>Code</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>{{$choice_tester_test4[0]->option1}}</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>{{$choice_tester_test4[0]->option2}}</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>{{$choice_tester_test4[0]->option3}}</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>{{$choice_tester_test4[0]->option4}}</td>
                                    </tr>
                                </table>
                                
      
                            
                            
                        
                            </div>
                        </div>
                    </div>
                @endif
            @endif
            @if($parameter_test3 != "0")
                @if ($item->type == 3)
                <input type="text" name="rating-test" class="d-none" value="1">
                <input type="text" name="parameter3-id" class="d-none" value="{{$parameter_test3[0]->id}}">
                @php
                $num += 1;
                @endphp
                        <div class="rating-test-method-user  fade1">
                            <span class="method-title">{{$num}}. {{$item->test_title}}</span>
                            <span>ពិន្ទុ :</span>
                            <div class="row mt-3">
                                <div class="col-4"><span>1. {{$parameter_test3[0]->add_on1}}</span> </div>
                                <div class="col-4"><span>2. {{$parameter_test3[0]->add_on2}}</span></div>
                                <div class="col-4"><span>3. {{$parameter_test3[0]->add_on3}}</span></div>
                                <div class="col-4"><span>4. {{$parameter_test3[0]->add_on4}}</span> </div>
                                <div class="col-4"><span>5. {{$parameter_test3[0]->add_on5}}</span></div>
                                <div class="col-4"><span>6. {{$parameter_test3[0]->add_on6}}</span></div>
                                <div class="col-4"><span>7. {{$parameter_test3[0]->add_on7}}</span> </div>
                                <div class="col-4"><span>8. {{$parameter_test3[0]->add_on8}}</span></div>
                                <div class="col-4"><span>9. {{$parameter_test3[0]->add_on9}}</span></div>
                            </div>
    
                            <table class="table table-light table-striped table-hover fade1 mt-5">
                                <tr>
                                    <th>គំរូ</th>
                                    <th>{{$parameter_test3[0]->value1}}</th>
                                    <th>{{$parameter_test3[0]->value2}}</th>
                                    <th>{{$parameter_test3[0]->value3}}</th>
                                    <th>{{$parameter_test3[0]->value4}}</th>
                                    <th>{{$parameter_test3[0]->value5}}</th>
                                </tr>
                                <tr>
                                    @foreach($rating_user_choice as $item)
                                        <tr>
                                            <td>
                                                @if($parameter_test3[0]->option1 == $item->value){{$parameter_test3[0]->label1}} @endif
                                                @if($parameter_test3[0]->option2 == $item->value){{$parameter_test3[0]->label2}} @endif
                                                @if($parameter_test3[0]->option3 == $item->value){{$parameter_test3[0]->label3}} @endif
                                                @if($parameter_test3[0]->option4 == $item->value){{$parameter_test3[0]->label4}} @endif

                                            </td>
                                            <td>{{$item->value1_option1}}</td>
                                            <td>{{$item->value1_option2}}</td>
                                            <td>{{$item->value1_option3}}</td>
                                            <td>{{$item->value1_option4}}</td>
                                            <td>{{$item->value1_option5}}</td>
                                        </tr>
                                    @endforeach
                                </tr>
              
                            </table>
                    </div>
                @endif
            @endif
     @endforeach
    
    
    
    
           <label for="" id="comment-tester"  class="mt-3">មតិយោបល់</label>
           <div class="remark">
                <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder=".....">{{$employee[0]->remark}}</textarea></div>
      
             
     


           <div class="align-right mt-4">
            
            <a href="/result/test_id={{$test_id}}/tested={{$tested}}"><button>Back</button></a>
        
            </div>
        </div>
        
</div>

@endsection
