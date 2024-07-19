@extends("frontend.master")
@section("content")
<div class="container">
    <form action="/test/submit" method="get" >
        @php
         $num = 0;
        @endphp

        <div class="test">
            <span id="test-title">{{$test[0]->title}}</span>
            <input type="text" name="test-id" value="{{$test[0]->TID}}" class="d-none">
            <div class="user-info">
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
                        @if ($age != 0)
                        <span>អាយុ : {{$age}}</span>
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
                
                        <input type="text" class="d-none" name="em-name" value="{{$employee[0]->name}}" >
                        <input type="text" class="d-none" name="em-id" value="{{$employee[0]->idem}}" >
                        <input type="text" class="d-none" name="em-name" value="{{$employee[0]->dob}}" >
                        <input type="text" class="d-none" name="em-name" value="{{$employee[0]->name}}" >
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
                        <div class="same-test-method">

                            <span class="method-title">{{$num}}. {{$item->test_title}} {{$parameter_test1[0]->label_main}} </span>
                            <div class="same-choice">
                                <input type="text" class="d-none" name="state-test1" value="1">
                                <input type="text" class="d-none" value="{{$parameter_test1[0]->main}}">
                                <div class="choice1"><input type="radio" class="dif-test"  value="{{$parameter_test1[0]->option2}}"  name="same-test"> &ensp;{{$parameter_test1[0]->label2}}</div>

                                <div class="choice1"><input type="radio" class="dif-test"  value="{{$parameter_test1[0]->option3}}"  name="same-test"> &ensp;{{$parameter_test1[0]->label3}}</div>

                                @if(!empty($parameter_test1[0]->label4) || $parameter_test1[0]->label4 != "")
                                <div class="choice1"><input type="radio" class="dif-test"  value="{{$parameter_test1[0]->option4}}"  name="same-test"> &ensp;{{$parameter_test1[0]->label4}}</div>

                                @endif
                            </div>
                        </div>
                    @endif
                @endif
                @if($parameter_test2 != "0")
                    @if ($item->type == 2)
                        <input type="text" name="parameter2-id" class="d-none" value="{{$parameter_test2[0]->id}}">
                        <input type="text" class="d-none" name="state-test2" value="1">
                        @php
                        $num += 1;
                        @endphp
                        <div class="difference-test-method">
                            <span class="method-title">{{$num}}. {{$item->test_title}}</span>
                            <div class="difference-choice">
                                <div class="choice1"><input type="radio" name="dif-test" value="{{$parameter_test2[0]->option1}}" > &ensp;{{$parameter_test2[0]->label1}}</div>
                                <div class="choice1"><input type="radio" name="dif-test" value="{{$parameter_test2[0]->option2}}" >  &ensp;{{$parameter_test2[0]->label2}}</div>
                                <div class="choice1"><input type="radio" name="dif-test" value="{{$parameter_test2[0]->option3}}" > &ensp;{{$parameter_test2[0]->label3}}</div>
                                @if(!empty($parameter_test2[0]->option4) || $parameter_test2[0]->option4 != "")
                                <div class="choice1"><input type="radio" name="dif-test" value="{{$parameter_test2[0]->option4}}" > &ensp;{{$parameter_test2[0]->label4}}</div>
                                @endif
                            </div>
                        </div>
                    @endif
                @endif
                @if($parameter_test4 != "0")
                @if ($item->type == 4)
                    <input type="text" name="parameter4-id" class="d-none" value="{{$parameter_test4[0]->id}}">
                    <input type="text" class="d-none" name="state-test4" value="1">
                    @php
                    $num += 1;
                    @endphp
                    <div class="ranking-test-method">
                        <div class="choice">
                            <div class="ranking-test-method">
                                <span class="method-title">{{$num}}. {{$item->test_title}}</span>
                                <span class="method-detail">ចូររៀបគំរូទាំងអស់តាមចំណាត់ថ្នាក់ ដោយចាប់ទាញ</span>
                                <div class="ul">
                                    <ul>
                                        <li>
                                            <span>Rank</span>
                                        </li>
                                        <li>1</li>
                                        <li>2</li>
                                        @if(!empty($parameter_test4[0]->option3))
                                        <li>3</li>
                                        @endif
                                        @if(!empty($parameter_test4[0]->option4))
                                        <li>4</li>
                                        @endif
                                    </ul>
                                    <ul id="sortablelist" class="sortable-list">
                                        <li>
                                            <span> Code </span>
                                        </li>
                                        @php
                                        if(!empty($parameter_test4[0]->option4)){

                                            $labels = [$parameter_test4[0]->label1,$parameter_test4[0]->label2, $parameter_test4[0]->label3, $parameter_test4[0]->label4];
                                            shuffle($labels);
                                        }
                                        if(!empty($parameter_test4[0]->option3)  && empty($parameter_test4[0]->option4)){

                                            $labels = [$parameter_test4[0]->label1,$parameter_test4[0]->label2, $parameter_test4[0]->label3];
                                            shuffle($labels);
                                        }
                                        if(empty($parameter_test4[0]->option3) ){

                                            $labels = [$parameter_test4[0]->label1,$parameter_test4[0]->label2];
                                            shuffle($labels);
                                        }

                                      
                                        @endphp
                                        @foreach($labels as $label)
                                            <li class="item" draggable="true"><div class="detail">{{$label}}</div></li>
                                        @endforeach
                                    </ul>
                                </div>
                                @if(!empty($labels[0]))
                                    <input type="text" name="ranksuffle1"  value="{{$labels[0]}}" class="d-none">
                                @endif
                                @if(!empty($labels[1]))
                                <input type="text" name="ranksuffle2"  value="{{$labels[1]}}" class="d-none">
                                @endif
                                @if(!empty($labels[2]))
                                <input type="text" name="ranksuffle3"  value="{{$labels[2]}}" class="d-none">
                                @endif
                                @if(!empty($labels[3]))
                                <input type="text" name="ranksuffle4"  value="{{$labels[3]}}" class="d-none">
                                @endif
                                <input type="text" id="rankingInput" value="1" name="user-ranking" class="d-none">
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
                        <div class="rating-test-method ">
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

                            <table>
                                <tr>
                                    <th>គំរូ</th>
                                    <th>{{$parameter_test3[0]->value1}}</th>
                                    <th>{{$parameter_test3[0]->value2}}</th>
                                    <th>{{$parameter_test3[0]->value3}}</th>
                                    @if(!empty($parameter_test3[0]->value4))
                                        <th>{{$parameter_test3[0]->value4}}</th>
                                    @endif
                                    @if(!empty($parameter_test3[0]->value5))
                                    <th>{{$parameter_test3[0]->value5}}</th>
                                @endif
                                </tr>
                                @if(!empty($parameter_test3[0]->option1  && $parameter_test3[0]->option1 != ""))
                                <tr>
                                    <td>{{$parameter_test3[0]->label1}}</td>
                                    <input type="text" class="d-none" name="value1" value="{{$parameter_test3[0]->option1}}">
                                    <td>
                                        <select name="value1_option1" id="">
                                            <option value="N/A"></option>
                                            <option value="1">1. {{$parameter_test3[0]->add_on1}}</option>
                                            <option value="2">2. {{$parameter_test3[0]->add_on2}}</option>
                                            <option value="3">3. {{$parameter_test3[0]->add_on3}}</option>
                                            <option value="4">4. {{$parameter_test3[0]->add_on4}}</option>
                                            <option value="5">5. {{$parameter_test3[0]->add_on5}}</option>
                                            <option value="6">6. {{$parameter_test3[0]->add_on6}}</option>
                                            <option value="7">7. {{$parameter_test3[0]->add_on7}}</option>
                                            <option value="8">8. {{$parameter_test3[0]->add_on8}}</option>
                                            <option value="9">9. {{$parameter_test3[0]->add_on9}}</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="value1_option2" id="">
                                            <option value="N/A"></option>
                                            <option value="1">1. {{$parameter_test3[0]->add_on1}}</option>
                                            <option value="2">2. {{$parameter_test3[0]->add_on2}}</option>
                                            <option value="3">3. {{$parameter_test3[0]->add_on3}}</option>
                                            <option value="4">4. {{$parameter_test3[0]->add_on4}}</option>
                                            <option value="5">5. {{$parameter_test3[0]->add_on5}}</option>
                                            <option value="6">6. {{$parameter_test3[0]->add_on6}}</option>
                                            <option value="7">7. {{$parameter_test3[0]->add_on7}}</option>
                                            <option value="8">8. {{$parameter_test3[0]->add_on8}}</option>
                                            <option value="9">9. {{$parameter_test3[0]->add_on9}}</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="value1_option3" id="">
                                            <option value="N/A"></option>
                                            <option value="1">1. {{$parameter_test3[0]->add_on1}}</option>
                                            <option value="2">2. {{$parameter_test3[0]->add_on2}}</option>
                                            <option value="3">3. {{$parameter_test3[0]->add_on3}}</option>
                                            <option value="4">4. {{$parameter_test3[0]->add_on4}}</option>
                                            <option value="5">5. {{$parameter_test3[0]->add_on5}}</option>
                                            <option value="6">6. {{$parameter_test3[0]->add_on6}}</option>
                                            <option value="7">7. {{$parameter_test3[0]->add_on7}}</option>
                                            <option value="8">8. {{$parameter_test3[0]->add_on8}}</option>
                                            <option value="9">9. {{$parameter_test3[0]->add_on9}}</option>
                                        </select>
                                    </td>
                                    @if(!empty($parameter_test3[0]->value4))
                                    <td>
                                        <select name="value1_option4" id="">
                                            <option value="N/A"></option>
                                            <option value="1">1. {{$parameter_test3[0]->add_on1}}</option>
                                            <option value="2">2. {{$parameter_test3[0]->add_on2}}</option>
                                            <option value="3">3. {{$parameter_test3[0]->add_on3}}</option>
                                            <option value="4">4. {{$parameter_test3[0]->add_on4}}</option>
                                            <option value="5">5. {{$parameter_test3[0]->add_on5}}</option>
                                            <option value="6">6. {{$parameter_test3[0]->add_on6}}</option>
                                            <option value="7">7. {{$parameter_test3[0]->add_on7}}</option>
                                            <option value="8">8. {{$parameter_test3[0]->add_on8}}</option>
                                            <option value="9">9. {{$parameter_test3[0]->add_on9}}</option>
                                        </select>
                                    </td>
                                    @endif
                                    @if(!empty($parameter_test3[0]->value5))
                                    <td>
                                        <select name="value1_option5" id="">
                                            <option value="N/A"></option>
                                            <option value="1">1. {{$parameter_test3[0]->add_on1}}</option>
                                            <option value="2">2. {{$parameter_test3[0]->add_on2}}</option>
                                            <option value="3">3. {{$parameter_test3[0]->add_on3}}</option>
                                            <option value="4">4. {{$parameter_test3[0]->add_on4}}</option>
                                            <option value="5">5. {{$parameter_test3[0]->add_on5}}</option>
                                            <option value="6">6. {{$parameter_test3[0]->add_on6}}</option>
                                            <option value="7">7. {{$parameter_test3[0]->add_on7}}</option>
                                            <option value="8">8. {{$parameter_test3[0]->add_on8}}</option>
                                            <option value="9">9. {{$parameter_test3[0]->add_on9}}</option>
                                        </select>
                                    </td>

                                    @endif

                                </tr>
                                @endif
                                @if(!empty($parameter_test3[0]->option2  && $parameter_test3[0]->option2 != ""))
                                <tr>
                                    <td>{{$parameter_test3[0]->label2}}</td>

                                    <input type="text" class="d-none" name="value2" value="{{$parameter_test3[0]->option2}}">
                                    <td>
                                        <select name="value2_option1" id="">
                                            <option value="N/A"></option>
                                            <option value="1">1. {{$parameter_test3[0]->add_on1}}</option>
                                            <option value="2">2. {{$parameter_test3[0]->add_on2}}</option>
                                            <option value="3">3. {{$parameter_test3[0]->add_on3}}</option>
                                            <option value="4">4. {{$parameter_test3[0]->add_on4}}</option>
                                            <option value="5">5. {{$parameter_test3[0]->add_on5}}</option>
                                            <option value="6">6. {{$parameter_test3[0]->add_on6}}</option>
                                            <option value="7">7. {{$parameter_test3[0]->add_on7}}</option>
                                            <option value="8">8. {{$parameter_test3[0]->add_on8}}</option>
                                            <option value="9">9. {{$parameter_test3[0]->add_on9}}</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="value2_option2" id="">
                                            <option value="N/A"></option>
                                            <option value="1">1. {{$parameter_test3[0]->add_on1}}</option>
                                            <option value="2">2. {{$parameter_test3[0]->add_on2}}</option>
                                            <option value="3">3. {{$parameter_test3[0]->add_on3}}</option>
                                            <option value="4">4. {{$parameter_test3[0]->add_on4}}</option>
                                            <option value="5">5. {{$parameter_test3[0]->add_on5}}</option>
                                            <option value="6">6. {{$parameter_test3[0]->add_on6}}</option>
                                            <option value="7">7. {{$parameter_test3[0]->add_on7}}</option>
                                            <option value="8">8. {{$parameter_test3[0]->add_on8}}</option>
                                            <option value="9">9. {{$parameter_test3[0]->add_on9}}</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="value2_option3" id="">
                                            <option value="N/A"></option>
                                            <option value="1">1. {{$parameter_test3[0]->add_on1}}</option>
                                            <option value="2">2. {{$parameter_test3[0]->add_on2}}</option>
                                            <option value="3">3. {{$parameter_test3[0]->add_on3}}</option>
                                            <option value="4">4. {{$parameter_test3[0]->add_on4}}</option>
                                            <option value="5">5. {{$parameter_test3[0]->add_on5}}</option>
                                            <option value="6">6. {{$parameter_test3[0]->add_on6}}</option>
                                            <option value="7">7. {{$parameter_test3[0]->add_on7}}</option>
                                            <option value="8">8. {{$parameter_test3[0]->add_on8}}</option>
                                            <option value="9">9. {{$parameter_test3[0]->add_on9}}</option>
                                        </select>
                                    </td>
                                    @if(!empty($parameter_test3[0]->value4))
                                    <td>
                                        <select name="value2_option4" id="">
                                            <option value="N/A"></option>
                                            <option value="1">1. {{$parameter_test3[0]->add_on1}}</option>
                                            <option value="2">2. {{$parameter_test3[0]->add_on2}}</option>
                                            <option value="3">3. {{$parameter_test3[0]->add_on3}}</option>
                                            <option value="4">4. {{$parameter_test3[0]->add_on4}}</option>
                                            <option value="5">5. {{$parameter_test3[0]->add_on5}}</option>
                                            <option value="6">6. {{$parameter_test3[0]->add_on6}}</option>
                                            <option value="7">7. {{$parameter_test3[0]->add_on7}}</option>
                                            <option value="8">8. {{$parameter_test3[0]->add_on8}}</option>
                                            <option value="9">9. {{$parameter_test3[0]->add_on9}}</option>
                                        </select>
                                    </td>
                                    @endif
                                    @if(!empty($parameter_test3[0]->value5))
                                    <td>
                                        <select name="value2_option5" id="">
                                            <option value="N/A"></option>
                                            <option value="1">1. {{$parameter_test3[0]->add_on1}}</option>
                                            <option value="2">2. {{$parameter_test3[0]->add_on2}}</option>
                                            <option value="3">3. {{$parameter_test3[0]->add_on3}}</option>
                                            <option value="4">4. {{$parameter_test3[0]->add_on4}}</option>
                                            <option value="5">5. {{$parameter_test3[0]->add_on5}}</option>
                                            <option value="6">6. {{$parameter_test3[0]->add_on6}}</option>
                                            <option value="7">7. {{$parameter_test3[0]->add_on7}}</option>
                                            <option value="8">8. {{$parameter_test3[0]->add_on8}}</option>
                                            <option value="9">9. {{$parameter_test3[0]->add_on9}}</option>
                                        </select>
                                    </td>

                                    @endif
                                </tr>
                                @endif
                                @if (!empty($parameter_test3[0]->option3 && $parameter_test3[0]->option3 != ""))
                                <tr>
                                    <td>{{$parameter_test3[0]->label3}}</td>

                                    <input type="text" class="d-none" name="value3" value="{{$parameter_test3[0]->option3}}">
                                    <td>
                                        <select name="value3_option1" id="">
                                            <option value="N/A"></option>
                                            <option value="1">1. {{$parameter_test3[0]->add_on1}}</option>
                                            <option value="2">2. {{$parameter_test3[0]->add_on2}}</option>
                                            <option value="3">3. {{$parameter_test3[0]->add_on3}}</option>
                                            <option value="4">4. {{$parameter_test3[0]->add_on4}}</option>
                                            <option value="5">5. {{$parameter_test3[0]->add_on5}}</option>
                                            <option value="6">6. {{$parameter_test3[0]->add_on6}}</option>
                                            <option value="7">7. {{$parameter_test3[0]->add_on7}}</option>
                                            <option value="8">8. {{$parameter_test3[0]->add_on8}}</option>
                                            <option value="9">9. {{$parameter_test3[0]->add_on9}}</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="value3_option2" id="">
                                            <option value="N/A"></option>
                                            <option value="1">1. {{$parameter_test3[0]->add_on1}}</option>
                                            <option value="2">2. {{$parameter_test3[0]->add_on2}}</option>
                                            <option value="3">3. {{$parameter_test3[0]->add_on3}}</option>
                                            <option value="4">4. {{$parameter_test3[0]->add_on4}}</option>
                                            <option value="5">5. {{$parameter_test3[0]->add_on5}}</option>
                                            <option value="6">6. {{$parameter_test3[0]->add_on6}}</option>
                                            <option value="7">7. {{$parameter_test3[0]->add_on7}}</option>
                                            <option value="8">8. {{$parameter_test3[0]->add_on8}}</option>
                                            <option value="9">9. {{$parameter_test3[0]->add_on9}}</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="value3_option3" id="">
                                            <option value="N/A"></option>
                                            <option value="1">1. {{$parameter_test3[0]->add_on1}}</option>
                                            <option value="2">2. {{$parameter_test3[0]->add_on2}}</option>
                                            <option value="3">3. {{$parameter_test3[0]->add_on3}}</option>
                                            <option value="4">4. {{$parameter_test3[0]->add_on4}}</option>
                                            <option value="5">5. {{$parameter_test3[0]->add_on5}}</option>
                                            <option value="6">6. {{$parameter_test3[0]->add_on6}}</option>
                                            <option value="7">7. {{$parameter_test3[0]->add_on7}}</option>
                                            <option value="8">8. {{$parameter_test3[0]->add_on8}}</option>
                                            <option value="9">9. {{$parameter_test3[0]->add_on9}}</option>
                                        </select>
                                    </td>
                                    @if(!empty($parameter_test3[0]->value4))
                                    <td>
                                        <select name="value3_option4" id="">
                                            <option value="N/A"></option>
                                            <option value="1">1. {{$parameter_test3[0]->add_on1}}</option>
                                            <option value="2">2. {{$parameter_test3[0]->add_on2}}</option>
                                            <option value="3">3. {{$parameter_test3[0]->add_on3}}</option>
                                            <option value="4">4. {{$parameter_test3[0]->add_on4}}</option>
                                            <option value="5">5. {{$parameter_test3[0]->add_on5}}</option>
                                            <option value="6">6. {{$parameter_test3[0]->add_on6}}</option>
                                            <option value="7">7. {{$parameter_test3[0]->add_on7}}</option>
                                            <option value="8">8. {{$parameter_test3[0]->add_on8}}</option>
                                            <option value="9">9. {{$parameter_test3[0]->add_on9}}</option>
                                        </select>
                                    </td>
                                    @endif
                                    @if(!empty($parameter_test3[0]->value5))
                                    <td>
                                        <select name="value3_option5" id="">
                                            <option value="N/A"></option>
                                            <option value="1">1. {{$parameter_test3[0]->add_on1}}</option>
                                            <option value="2">2. {{$parameter_test3[0]->add_on2}}</option>
                                            <option value="3">3. {{$parameter_test3[0]->add_on3}}</option>
                                            <option value="4">4. {{$parameter_test3[0]->add_on4}}</option>
                                            <option value="5">5. {{$parameter_test3[0]->add_on5}}</option>
                                            <option value="6">6. {{$parameter_test3[0]->add_on6}}</option>
                                            <option value="7">7. {{$parameter_test3[0]->add_on7}}</option>
                                            <option value="8">8. {{$parameter_test3[0]->add_on8}}</option>
                                            <option value="9">9. {{$parameter_test3[0]->add_on9}}</option>
                                        </select>
                                    </td>

                                    @endif
                                </tr>
                                @endif
                                @if (!empty($parameter_test3[0]->option4))
                                <tr>
                                    <td>{{$parameter_test3[0]->label4}}</td>

                                    <input type="text" class="d-none" name="value4" value="{{$parameter_test3[0]->option4}}">
                                    <td>
                                        <select name="value4_option1" id="">
                                            <option value="N/A"></option>
                                            <option value="1">1. {{$parameter_test3[0]->add_on1}}</option>
                                            <option value="2">2. {{$parameter_test3[0]->add_on2}}</option>
                                            <option value="3">3. {{$parameter_test3[0]->add_on3}}</option>
                                            <option value="4">4. {{$parameter_test3[0]->add_on4}}</option>
                                            <option value="5">5. {{$parameter_test3[0]->add_on5}}</option>
                                            <option value="6">6. {{$parameter_test3[0]->add_on6}}</option>
                                            <option value="7">7. {{$parameter_test3[0]->add_on7}}</option>
                                            <option value="8">8. {{$parameter_test3[0]->add_on8}}</option>
                                            <option value="9">9. {{$parameter_test3[0]->add_on9}}</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="value4_option2" id="">
                                            <option value="N/A"></option>
                                            <option value="1">1. {{$parameter_test3[0]->add_on1}}</option>
                                            <option value="2">2. {{$parameter_test3[0]->add_on2}}</option>
                                            <option value="3">3. {{$parameter_test3[0]->add_on3}}</option>
                                            <option value="4">4. {{$parameter_test3[0]->add_on4}}</option>
                                            <option value="5">5. {{$parameter_test3[0]->add_on5}}</option>
                                            <option value="6">6. {{$parameter_test3[0]->add_on6}}</option>
                                            <option value="7">7. {{$parameter_test3[0]->add_on7}}</option>
                                            <option value="8">8. {{$parameter_test3[0]->add_on8}}</option>
                                            <option value="9">9. {{$parameter_test3[0]->add_on9}}</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="value4_option3" id="">
                                            <option value="N/A"></option>
                                            <option value="1">1. {{$parameter_test3[0]->add_on1}}</option>
                                            <option value="2">2. {{$parameter_test3[0]->add_on2}}</option>
                                            <option value="3">3. {{$parameter_test3[0]->add_on3}}</option>
                                            <option value="4">4. {{$parameter_test3[0]->add_on4}}</option>
                                            <option value="5">5. {{$parameter_test3[0]->add_on5}}</option>
                                            <option value="6">6. {{$parameter_test3[0]->add_on6}}</option>
                                            <option value="7">7. {{$parameter_test3[0]->add_on7}}</option>
                                            <option value="8">8. {{$parameter_test3[0]->add_on8}}</option>
                                            <option value="9">9. {{$parameter_test3[0]->add_on9}}</option>
                                        </select>
                                    </td>
                                    @if(!empty($parameter_test3[0]->value4))
                                    <td>
                                        <select name="value4_option4" id="">
                                            <option value="N/A"></option>
                                            <option value="1">1. {{$parameter_test3[0]->add_on1}}</option>
                                            <option value="2">2. {{$parameter_test3[0]->add_on2}}</option>
                                            <option value="3">3. {{$parameter_test3[0]->add_on3}}</option>
                                            <option value="4">4. {{$parameter_test3[0]->add_on4}}</option>
                                            <option value="5">5. {{$parameter_test3[0]->add_on5}}</option>
                                            <option value="6">6. {{$parameter_test3[0]->add_on6}}</option>
                                            <option value="7">7. {{$parameter_test3[0]->add_on7}}</option>
                                            <option value="8">8. {{$parameter_test3[0]->add_on8}}</option>
                                            <option value="9">9. {{$parameter_test3[0]->add_on9}}</option>
                                        </select>
                                    </td>
                                    @endif
                                    @if(!empty($parameter_test3[0]->value5))
                                    <td>
                                        <select name="value4_option5" id="">
                                            <option value="N/A"></option>
                                            <option value="1">1. {{$parameter_test3[0]->add_on1}}</option>
                                            <option value="2">2. {{$parameter_test3[0]->add_on2}}</option>
                                            <option value="3">3. {{$parameter_test3[0]->add_on3}}</option>
                                            <option value="4">4. {{$parameter_test3[0]->add_on4}}</option>
                                            <option value="5">5. {{$parameter_test3[0]->add_on5}}</option>
                                            <option value="6">6. {{$parameter_test3[0]->add_on6}}</option>
                                            <option value="7">7. {{$parameter_test3[0]->add_on7}}</option>
                                            <option value="8">8. {{$parameter_test3[0]->add_on8}}</option>
                                            <option value="9">9. {{$parameter_test3[0]->add_on9}}</option>
                                        </select>
                                    </td>

                                    @endif
                                </tr>


                                @endif
                            </table>
                    </div>




                @endif
            @endif
     @endforeach




           <label for="" id="comment-tester"  class="mt-3">មតិយោបល់</label>
           <div class="remark">
                <textarea name="ramark-tester" id="" cols="30" rows="5" class="form-control" placeholder="....."></textarea>
           </div>
           <div class="text-right">
                <p class="text-danger">(សូមពិនិត្យមើលចម្លើយដែលបានជ្រើសរើសម្ដងទៀត ជៀសវាងមិនបានបំពេញចំណុចណាមួយ។)</p>
            </div>
           <div class="float-right">
           <a href="/login"><button type="button" class="button-fail2">Cancel</button></a>
            <button onclick="this.disabled=true; this.form.submit();" class="button-submit2">Submit</button>
           </div>

        </div>
    </form>


</div>
<script>
    const sortableList = document.getElementById("sortablelist");
const rankingInput = document.getElementById("rankingInput");

let draggedItem = null;

sortableList.addEventListener("dragstart", (e) => {
    const item = e.target.closest(".item");
    if (!item) return;

    draggedItem = item;
    setTimeout(() => item.classList.add("dragging"), 0);
});

sortableList.addEventListener("dragend", () => {
    draggedItem.classList.remove("dragging");
    updateRankings();
});

sortableList.addEventListener("dragover", (e) => {
    e.preventDefault();
    const afterElement = getDragAfterElement(sortableList, e.clientY);
    const draggingItem = document.querySelector(".dragging");

    if (afterElement == null) {
        sortableList.appendChild(draggingItem);
    } else {
        sortableList.insertBefore(draggingItem, afterElement);
    }
});

sortableList.addEventListener("dragenter", (e) => {
    e.preventDefault();
});

sortableList.addEventListener("drop", (e) => {
    e.preventDefault();
});

function getDragAfterElement(container, y) {
    const draggableElements = [...container.querySelectorAll('.item:not(.dragging)')];

    return draggableElements.reduce((closest, child) => {
        const box = child.getBoundingClientRect();
        const offset = y - box.top - box.height / 2;

        if (offset < 0 && offset > closest.offset) {
            return { offset, element: child };
        } else {
            return closest;
        }
    }, { offset: Number.NEGATIVE_INFINITY }).element;
}

function updateRankings() {
    const items = [...sortableList.querySelectorAll(".item")];
    const rankingsArray = [];

    items.forEach((item, index) => {
        const detail = item.querySelector('.detail').textContent;
        rankingsArray.push(`${index + 1}: ${detail}`);
    });

    const rankingsString = rankingsArray.join(', ');
    rankingInput.value = rankingsString;
}


</script>

@endsection
