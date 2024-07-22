@extends("frontend.master")
@section("content")

    <div class="container">
        @php
     $num = 0;
    @endphp

    <div class="test-result">
        <span id="test-title">លិទ្ធផល{{$test[0]->title}}</span>
        <input type="text" name="test-id" value="{{$test[0]->id}}" class="d-none">


        @foreach ($test as $item)


            @if($parameter_test1 != "0")
                @if ($item->type == 1)
                    <input type="text" name="parameter1-id" class="d-none" value="{{$parameter_test1[0]->id}}">
                    @php
                    $num += 1;
                    @endphp
                    <div class="same-test-method-result">

                        <span class="method-title">{{$num}}. {{$item->test_title}} {{$parameter_test1[0]->label_main}} </span>
                        <div class="same-choice">
                            <div class="row">
                                <div class="col-6">
                                    <div class="choice1">{{$parameter_test1[0]->label_main}}</div>
                                        <div class="text-group">
                                            <span>Item No. : {{$product_test1_option1['item_code']}}</span>
                                            <span>Variant : {{$product_test1_option1['variant']}}</span>
                                            <span>Lot : {{$product_test1_option1['lot_no']}}</span>


                                    </div>
                                    <hr>
                                </div>
                                <div class="col-6">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">

                                    <input type="text" class="d-none" value="{{$parameter_test1[0]->main}}">
                                    <div class="choice1">{{$parameter_test1[0]->label2}} @if(!empty($correct_answer ) && $correct_answer  == 2 )      : ចំលើយត្រឹមត្រូវ     @endif
                                    </div>

                                        <div class="text-group">
                                            @if($product_test1_option2 != null)
                                            <span>Item No. : {{$product_test1_option2['item_code']}}</span>
                                            <span>Varaint : {{$product_test1_option2['variant']}}</span>
                                            <span>Lot : {{$product_test1_option2['lot_no']}}</span>
                                            @endif
                                        </div>
                                        <div class="percentage">
                                            <div class="progress">

                                                <div class="progress1 color2_process" style="width: 100%" id="myProgressBar2_test1"></div>
                                            </div>

                                        </div>

                                </div>
                                <div class="col-4">
                                    <div class="choice1">{{$parameter_test1[0]->label3}} @if(!empty($correct_answer ) && $correct_answer  == 3 )      : ចំលើយត្រឹមត្រូវ     @endif
                                    </div>
                                        <div class="text-group">

                                                <span>Item No :{{$product_test1_option3['item_code']}}</span>
                                                <span>Varaint : {{$product_test1_option3['variant']}}</span>
                                                <span>Lot : {{$product_test1_option3['lot_no']}}</span>
                                            </div>


                                        <div class="percentage">
                                            <div class="progress">
                                                <div class="progress1 color3_process" style="width: 100%" id="myProgressBar3_test1"></div>
                                              </div>
                                        </div>
                                </div>
                                @if(!empty($product_test1_option4) || $product_test1_option4 != null)
                                <div class="col-4">
                                    @if(!empty($parameter_test1[0]->label4) || $parameter_test1[0]->label4 != "")
                                    <div class="choice1">{{$parameter_test1[0]->label4}} @if(!empty($correct_answer ) && $correct_answer  == 4 )      : ចំលើយត្រឹមត្រូវ     @endif
                                    </div>
                                        <div class="text-group">
                                            <span>Item No. : {{$product_test1_option4['item_code']}}</span>
                                            <span>Varaint : {{$product_test1_option4['variant']}}</span>
                                            <span>Lot : {{$product_test1_option4['lot_no']}}</span>
                                        </div>


                                    <div class="percentage">
                                        <div class="progress">
                                            <div class="progress1 color4_process" style="width: 100%"  id="myProgressBar4_test1"></div>

                                          </div>
                                    </div>
                                    @endif
                                </div>
                                @endif
                            </div>



                            <div class="choice1 text-dark mt-3 fw-bold">Total progress of {{$all_employee}} Participant</div>



                              <div class="bar-process">
                                <div class="progress1  color5_process" id="myProgressBar_main_test1" ></div>
                                <div class="progress1  color6_process" id="myProgressBar_main2_test1" ></div>

                            </div>
                              <hr>
                        </div>
                        <span>Raw Data</span>&ensp; <button onclick="same_raw()" id="btn-hide-same">+</button>
                        <div class="same-raw">
                            <table border="1" class="table table-striped table-hover">
                                <tr>

                                    <th>Product</th>
                                    <th>Variant</th>
                                    <th>Lot</th>
                                    <th>Label</th>
                                    <th>Correct</th>
                                    <th>Quantity Of Participant</th>
                                    <th>Tester Select</th>
                                    <th>Percentage</th>

                                </tr>
                                <tr>

                                    <td> {{$product_test1_option1['item_code']}}</td>
                                    <td>{{$product_test1_option1['variant']}}</td>
                                    <td>{{$product_test1_option1['lot_no']}}</td>
                                    <td>{{$parameter_test1[0]->label1}}</td>
                                    <td>Main Product</td>
                                    <td>{{$all_employee}}</td>
                                    <td></td>
                                    <td></td>

                                </tr>
                                <tr>

                                    <td> {{$product_test1_option2['item_code']}}</td>
                                    <td>{{$product_test1_option2['variant']}}</td>
                                    <td>{{$product_test1_option2['lot_no']}}</td>
                                    <td>{{$parameter_test1[0]->label2}}</td>
                                    <td> @if(!empty($correct_answer ) && $correct_answer  == 2 )Correct @else Incorrect  @endif</td>
                                    <td>{{$all_employee}}</td>
                                    <td>{{$qty_select_option2}}</td>
                                    <td>{{$percent2_label}}%</td>

                                </tr>
                                <tr>
                                    <td> {{$product_test1_option3['item_code']}}</td>
                                    <td>{{$product_test1_option3['variant']}}</td>
                                    <td>{{$product_test1_option3['lot_no']}}</td>
                                    <td>{{$parameter_test1[0]->label3}}</td>
                                    <td> @if(!empty($correct_answer ) && $correct_answer  == 3 )Correct @else Incorrect  @endif</td>
                                    <td>{{$all_employee}} </td>
                                    <td>{{$qty_select_option3}} </td>
                                    <td>{{$percent3_label}}%</td>

                                </tr>
                                @if(!empty($product_test1_option4))
                                <tr>

                                    <td> {{$product_test1_option4['item_code']}}</td>
                                    <td>{{$product_test1_option4['variant']}}</td>
                                    <td>{{$product_test1_option4['lot_no']}}</td>
                                    <td>{{$parameter_test1[0]->label4}}</td>
                                    <td> @if(!empty($correct_answer ) && $correct_answer  == 4 )Correct @else Incorrect  @endif</td>
                                    <td>{{$all_employee}} </td>
                                    <td>{{$qty_select_option4}} </td>
                                    <td>{{$percent4_label}}%</td>

                                </tr>
                                @endif
                                <tr>
                                    <td>All Tester</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="/admin/view/result/tester/id={{$id}}/type={{1}}"><button>View</button></a></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                @endif
            @endif
            @if($parameter_test2 != "0")
                @if ($item->type == 2)
                    @php
                    $num += 1;
                    @endphp
                    <div class="difference-test-method-result">
                        <span class="method-title">{{$num}}. {{$item->test_title}}</span>
                        <div class="difference-choice">
                            <span class="fw-bold">Progress of {{$all_employee}} Participant</span>
                            <div class="row">
                                <div class="col-6">
                                     {{-- 1 --}}
                                    <div class="choice1">{{$parameter_test2[0]->label1}} @if(!empty($correct_answer_test2 ) && $correct_answer_test2  == 1 )      : ចំលើយត្រឹមត្រូវ     @endif</div>

                                        Item No. : {{$product_test2_option1['item_code']}}
                                        Variant : {{$product_test2_option1['variant']}}
                                        Lot : {{$product_test2_option1['lot_no']}}

                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress1 color1_process" style="width: 100%"  id="myProgressBar1_test2"></div>

                                  </div>
                            </div>
                                </div>
                                <div class="col-6">
                                        {{-- 2 --}}
                                        <div class="choice1">{{$parameter_test2[0]->label2}} @if(!empty($correct_answer_test2 ) && $correct_answer_test2  == 2 )      : ចំលើយត្រឹមត្រូវ     @endif</div>

                                           Item No. : {{$product_test2_option2['item_code']}}
                                           Variant : {{$product_test2_option2['variant']}}
                                           Lot : {{$product_test2_option2['lot_no']}}


                                        <div class="percentage">
                                            <div class="progress">
                                                <div class="progress1 color2_process" style="width: 100%" id="myProgressBar2_test2"></div>

                                              </div>
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                     {{-- 3 --}}
                                    <div class="choice1">{{$parameter_test2[0]->label3}} @if(!empty($correct_answer_test2 ) && $correct_answer_test2  == 3 )      : ចំលើយត្រឹមត្រូវ     @endif</div>

                                        Item No. : {{$product_test2_option3['item_code']}}
                                        Variant : {{$product_test2_option3['variant']}}
                                        Lot : {{$product_test2_option3['lot_no']}}
                                        <div class="percentage">
                                            <div class="progress">
                                                <div class="progress1 color3_process" style="width: 100%" id="myProgressBar3_test2"></div>

                                              </div>
                                        </div>

                                </div>
                                <div class="col-6">
                                        {{-- 4 --}}
                                    @if(!empty($parameter_test2[0]->option4) && $parameter_test2[0]->option4 != "")
                                    <div class="choice1">{{$parameter_test2[0]->label4}} @if(!empty($correct_answer_test2) && $correct_answer_test2 == 4 )      : ចំលើយត្រឹមត្រូវ     @endif</div>

                                        Item No. : {{$product_test2_option4['item_code']}}
                                        Variant : {{$product_test2_option4['variant']}}
                                        Lot : {{$product_test2_option4['lot_no']}}


                                    <div class="percentage">
                                        <div class="progress">
                                            <div class="progress1 color4_process" style="width: 100%" id="myProgressBar4_test2"></div>

                                          </div>
                                    </div>
                                    @endif
                                </div>
                            </div>



                            <div class="choice1 text-dark">Total progress of {{$all_employee}} Participant</div>

                            <div class="bar-process">
                                <div class="progress1  color5_process" id="myProgressBar_main_test2" ></div>
                                <div class="progress1  color6_process" id="myProgressBar_main2_test2" ></div>

                            </div>
                        </div>
                        <hr>
                        <div class="raw-data-diff-test">

                            <span>Raw Data</span>&ensp; <button onclick="diff_raw()" id="btn-hide-diff">+</button>
                            <div class="diff-raw">
                                <table border="1" class="table table-striped table-hover">
                                    <tr>

                                        <th>Product</th>
                                        <th>Variant</th>
                                        <th>Lot</th>
                                        <th>Label</th>
                                        <th>Correct</th>
                                        <th>Quantity Of Participant</th>
                                        <th>Tester Select</th>
                                        <th>Percentage</th>

                                    </tr>
                                    <tr>

                                        <td> {{$product_test2_option1['item_code']}}</td>
                                        <td>{{$product_test2_option1['variant']}}</td>
                                        <td>{{$product_test2_option1['lot_no']}}</td>
                                        <td>{{$parameter_test2[0]->label1}}</td>
                                        <td> @if(!empty($correct_answer_test2) && $correct_answer_test2  == 1 )Correct @else Incorrect  @endif</td>
                                        <td>{{$all_employee}} </td>
                                        <td>{{$qty_select_option1_test2}}</td>
                                        <td>{{$percent1_label_test2}}%</td>

                                    </tr>
                                    <tr>

                                        <td> {{$product_test2_option2['item_code']}}</td>
                                        <td>{{$product_test2_option2['variant']}}</td>
                                        <td>{{$product_test2_option2['lot_no']}}</td>
                                        <td>{{$parameter_test2[0]->label2}}</td>
                                        <td> @if(!empty($correct_answer_test2) && $correct_answer_test2  == 2 )Correct @else Incorrect  @endif</td>
                                        <td>{{$all_employee}} </td>
                                        <td>{{$qty_select_option2_test2}}</td>
                                        <td>{{$percent2_label_test2}}%</td>

                                    </tr>
                                    <tr>
                                        <td> {{$product_test2_option3['item_code']}}</td>
                                        <td>{{$product_test2_option3['variant']}}</td>
                                        <td>{{$product_test2_option3['lot_no']}}</td>
                                        <td>{{$parameter_test2[0]->label3}}</td>
                                        <td> @if(!empty($correct_answer_test2) && $correct_answer_test2  == 3 )Correct @else Incorrect  @endif</td>
                                        <td>{{$all_employee}} </td>
                                        <td>{{$qty_select_option3_test2}}</td>
                                        <td>{{$percent3_label_test2}}%</td>

                                    </tr>
                                    @if(!empty($product_test2_option4))
                                    <tr>

                                        <td> {{$product_test2_option4['item_code']}}</td>
                                        <td>{{$product_test2_option4['variant']}}</td>
                                        <td>{{$product_test2_option4['lot_no']}}</td>
                                        <td>{{$parameter_test2[0]->label4}}</td>
                                        <td> @if(!empty($correct_answer_test2) && $correct_answer_test2  == 4 )Correct @else Incorrect  @endif</td>
                                        <td>{{$all_employee}} </td>
                                        <td>{{$qty_select_option4_test2}}</td>
                                        <td>{{$percent4_label_test2}}%</td>

                                    </tr>
                                    @endif
                                    <tr>
                                        <td>ALL Tester</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td></td>
                                        <td><a href="/admin/view/result/tester/id={{$id}}/type={{2}}"><button>View</button></a></td>
                                    </tr>
                                </table>

                            </div>
                        </div>

                    </div>

                @endif
            @endif

        @if($parameter_test3 != "0" && $item->type == 3)

            <input type="text" name="parameter3-id" class="d-none" value="{{$parameter_test3[0]->id}}">
            @php
            $num += 1;
            @endphp
                    <div class="rating-test-method-result ">
                        <span class="method-title">{{$num}}. {{$item->test_title}}</span>

                        <div class="big-box-item mt-3">
                            @php
                                if(empty($parameter_test3[0]->option2)){
                                    $width_box = 100;
                                }else{
                                    $width_box = 50;
                                }
                            @endphp


                            <div class="box-item " style="width: {{$width_box}}%">

                                    <span class="color1" >Code : {{$parameter_test3[0]->label1}}</span>
                                    <span>គំរូ ១</span>
                                    <span>Item No. : {{$product_test3_option1['item_code']}}</span>
                                    <span>Variant : {{$product_test3_option1['variant']}}</span>
                                    <span>Lot : {{$product_test3_option1['lot_no']}}</span>
                            </div>
                            @if($product_test3_option2 != null)
                            <div class="box-item">
                                <span class="color2" >Code :  {{$parameter_test3[0]->label2}}</span>
                                <span>គំរូ ២</span>
                                <span>Item No. : {{$product_test3_option2['item_code']}}</span>
                                <span>Variant : {{$product_test3_option2['variant']}}</span>
                                <span>Lot : {{$product_test3_option2['lot_no']}}</span>
                            </div>
                            @endif

                        </div>
                        <div class="big-box-item">
                            @if($product_test3_option3 != null)
                                <div class="box-item">
                                    <span class="color3" >Code : {{$parameter_test3[0]->label3}}</span>
                                    <span>គំរូ ៣</span>
                                    <span>Item No. : {{$product_test3_option3['item_code']}}</span>
                                    <span>Variant : {{$product_test3_option3['variant']}}</span>
                                    <span>Lot : {{$product_test3_option3['lot_no']}}</span>
                                </div>
                            @endif
                            @if($product_test3_option4 != null)
                                <div class="box-item ">
                                    <span class="color4" >Code :  {{$parameter_test3[0]->label4}}</span>
                                    <span>គំរូ ៤</span>
                                    <span>Item No. : {{$product_test3_option4['item_code']}}</span>
                                    <span>Variant : {{$product_test3_option4['variant']}}</span>
                                    <span>Lot : {{$product_test3_option4['lot_no']}}</span>
                                </div>
                            @endif

                        </div>

                        <div class="big-box-item-2 ">
                            <span>ពិន្ទុ : 1 - 9</span>
                            <hr>
                            <div class="row mt-3">
                                <div class="col-4"><span>9. {{$parameter_test3[0]->add_on9}}</span></div>
                                <div class="col-4"><span>8. {{$parameter_test3[0]->add_on8}}</span></div>
                                <div class="col-4"><span>7. {{$parameter_test3[0]->add_on7}}</span> </div>
                                <div class="col-4"><span>6. {{$parameter_test3[0]->add_on6}}</span></div>
                                <div class="col-4"><span>5. {{$parameter_test3[0]->add_on5}}</span></div>
                                <div class="col-4"><span>4. {{$parameter_test3[0]->add_on4}}</span> </div>
                                <div class="col-4"><span>3. {{$parameter_test3[0]->add_on3}}</span></div>
                                <div class="col-4"><span>2. {{$parameter_test3[0]->add_on2}}</span></div>
                                <div class="col-4"><span>1. {{$parameter_test3[0]->add_on1}}</span> </div>
                            </div>
                        </div>
     @if(!empty($parameter_test3[0]->option2) || $parameter_test3[0]->option2 != "")
                        <div class="chart-box">
                            <div class="chart">

                                <div class="border-product fade1" >
                                    <div class="product" >
                                        <span class="label_chart">{{$parameter_test3[0]->value1}}</span>

                                        <div class="border-chart">
                                            <div class="state1" id="mychart1_value1">
                                                <div class="percent"></div>

                                            </div>
                                            @if(!empty($parameter_test3[0]->option2))
                                            <div class="state2" id="mychart2_value1">
                                                <div class="percent"></div>

                                            </div>
                                            @endif
                                            @if(!empty($parameter_test3[0]->option3))
                                            <div class="state3" id="mychart3_value1">
                                                <div class="percent"></div>
                                            </div>
                                            @endif
                                            @if(!empty($parameter_test3[0]->option4))

                                            <div class="state4" id="mychart4_value1">
                                                <div class="percent"></div>

                                            </div>
                                            @endif
                                        </div>

                                        <div class="height-100"></div>
                                        <span class="level-chart-100">10</span>
                                        <div class="height-90"><span class="level-chart"></span></div>
                                        <div class="height-80"></div>
                                        <span class="level-chart-80">8</span>
                                        <div class="height-70"><span class="level-chart"></span></div>
                                        <div class="height-60"><span class="level-chart">6</span></div>
                                        <span class="level-chart-60">6</span>
                                        <div class="height-50"><span class="level-chart"></span></div>
                                        <div class="height-40"></div>
                                        <span class="level-chart-40">4</span>
                                        <div class="height-30"><span class="level-chart"></span></div>
                                        <div class="height-20"><span class="level-chart">2</span></div>
                                        <span class="level-chart-20">2</span>
                                        <div class="height-10"></div>
                                        <div class="height-0"></div>
                                        <span class="level-chart-0">0</span>
                                    </div>
                                    <div class="label-product">
                                        <span>{{$parameter_test3[0]->label1}}</span>

                                        @if(!empty($parameter_test3[0]->option2))
                                            <span>{{$parameter_test3[0]->label2}}</span>
                                        @endif
                                        @if(!empty($parameter_test3[0]->option3))
                                        <span>{{$parameter_test3[0]->label3}}</span>
                                        @endif
                                        @if(!empty($parameter_test3[0]->option4))
                                        <span>{{$parameter_test3[0]->label4}}</span>
                                        @endif

                                    </div>
                                </div>

                                <div class="border-product fade1" >
                                    <div class="product" >
                                        <span class="label_chart">{{$parameter_test3[0]->value2}}</span>
                                        <div class="border-chart">
                                            <div class="state1" id="mychart1_value2">
                                                <div class="percent"></div>

                                            </div>
                                            @if(!empty($parameter_test3[0]->option2))
                                            <div class="state2" id="mychart2_value2">
                                                <div class="percent"></div>

                                            </div>
                                            @endif


                                            @if(!empty($parameter_test3[0]->option3))
                                            <div class="state3" id="mychart3_value2">
                                                <div class="percent"></div>

                                            </div>
                                            @endif
                                            @if(!empty($parameter_test3[0]->option4))
                                            <div class="state4" id="mychart4_value2">
                                                <div class="percent"></div>
                                            </div>
                                            @endif

                                        </div>

                                        <div class="height-100"></div>
                                        <span class="level-chart-100">10</span>
                                        <div class="height-90"><span class="level-chart"></span></div>
                                        <div class="height-80"></div>
                                        <span class="level-chart-80">8</span>
                                        <div class="height-70"><span class="level-chart"></span></div>
                                        <div class="height-60"><span class="level-chart">6</span></div>
                                        <span class="level-chart-60">6</span>
                                        <div class="height-50"><span class="level-chart"></span></div>
                                        <div class="height-40"></div>
                                        <span class="level-chart-40">4</span>
                                        <div class="height-30"><span class="level-chart"></span></div>
                                        <div class="height-20"><span class="level-chart">2</span></div>
                                        <span class="level-chart-20">2</span>
                                        <div class="height-10"></div>
                                        <div class="height-0"></div>
                                        <span class="level-chart-0">0</span>
                                    </div>
                                    <div class="label-product">
                                        <span>{{$parameter_test3[0]->label1}}</span>

                                        @if(!empty($parameter_test3[0]->option2))
                                            <span>{{$parameter_test3[0]->label2}}</span>
                                        @endif
                                        @if(!empty($parameter_test3[0]->option3))
                                        <span>{{$parameter_test3[0]->label3}}</span>
                                        @endif
                                        @if(!empty($parameter_test3[0]->option4))
                                        <span>{{$parameter_test3[0]->label4}}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="border-product fade1" >
                                    <div class="product" >
                                        <span class="label_chart">{{$parameter_test3[0]->value3}}</span>
                                        <div class="border-chart">
                                             <div class="state1" id="mychart1_value3">
                                                <div class="percent"></div>

                                            </div>
                                            @if(!empty($parameter_test3[0]->option2))
                                            <div class="state2" id="mychart2_value3">
                                                <div class="percent"></div>

                                            </div>
                                            @endif


                                            @if(!empty($parameter_test3[0]->option3))
                                            <div class="state3" id="mychart3_value3">
                                                <div class="percent"></div>

                                            </div>
                                            @endif
                                            @if(!empty($parameter_test3[0]->option4))
                                            <div class="state4" id="mychart4_value3">
                                                <div class="percent"></div>
                                            </div>
                                            @endif
                                        </div>

                                        <div class="height-100"></div>
                                        <span class="level-chart-100">10</span>
                                        <div class="height-90"><span class="level-chart"></span></div>
                                        <div class="height-80"></div>
                                        <span class="level-chart-80">8</span>
                                        <div class="height-70"><span class="level-chart"></span></div>
                                        <div class="height-60"><span class="level-chart">6</span></div>
                                        <span class="level-chart-60">6</span>
                                        <div class="height-50"><span class="level-chart"></span></div>
                                        <div class="height-40"></div>
                                        <span class="level-chart-40">4</span>
                                        <div class="height-30"><span class="level-chart"></span></div>
                                        <div class="height-20"><span class="level-chart">2</span></div>
                                        <span class="level-chart-20">2</span>
                                        <div class="height-10"></div>
                                        <div class="height-0"></div>
                                        <span class="level-chart-0">0</span>
                                    </div>
                                    <div class="label-product">
                                        <span>{{$parameter_test3[0]->label1}}</span>

                                        @if(!empty($parameter_test3[0]->option2))
                                            <span>{{$parameter_test3[0]->label2}}</span>
                                        @endif
                                        @if(!empty($parameter_test3[0]->option3))
                                        <span>{{$parameter_test3[0]->label3}}</span>
                                        @endif
                                        @if(!empty($parameter_test3[0]->option4))
                                        <span>{{$parameter_test3[0]->label4}}</span>
                                        @endif
                                    </div>
                                </div>

                            </div>

                                @php
                                            $height_chart = 200;
                                    if($parameter_test3[0]->value4 == ""){
                                        $height_chart = 0;
                                    }else {
                                        $height_chart = 200;
                                    }

                                @endphp

                            <div class="chart"  style=" height: {{$height_chart}}px">

                                @if(!empty($parameter_test3[0]->value4))
                                <div class="border-product fade1" >
                                    <div class="product" >
                                        <span class="label_chart">{{$parameter_test3[0]->value4}}</span>
                                        <div class="border-chart">
                                            <div class="state1" id="mychart1_value4">
                                                <div class="percent"></div>

                                            </div>
                                            @if(!empty($parameter_test3[0]->option2))
                                            <div class="state2" id="mychart2_value4">
                                                <div class="percent"></div>

                                            </div>
                                            @endif


                                            @if(!empty($parameter_test3[0]->option3))
                                            <div class="state3" id="mychart3_value4">
                                                <div class="percent"></div>

                                            </div>
                                            @endif
                                            @if(!empty($parameter_test3[0]->option4))
                                            <div class="state4" id="mychart4_value4">
                                                <div class="percent"></div>
                                            </div>
                                            @endif
                                        </div>

                                        <div class="height-100"></div>
                                        <span class="level-chart-100">10</span>
                                        <div class="height-90"><span class="level-chart"></span></div>
                                        <div class="height-80"></div>
                                        <span class="level-chart-80">8</span>
                                        <div class="height-70"><span class="level-chart"></span></div>
                                        <div class="height-60"><span class="level-chart">6</span></div>
                                        <span class="level-chart-60">6</span>
                                        <div class="height-50"><span class="level-chart"></span></div>
                                        <div class="height-40"></div>
                                        <span class="level-chart-40">4</span>
                                        <div class="height-30"><span class="level-chart"></span></div>
                                        <div class="height-20"><span class="level-chart">2</span></div>
                                        <span class="level-chart-20">2</span>
                                        <div class="height-10"></div>
                                        <div class="height-0"></div>
                                        <span class="level-chart-0">0</span>
                                    </div>
                                    <div class="label-product">
                                        <span>{{$parameter_test3[0]->label1}}</span>

                                        @if(!empty($parameter_test3[0]->option2))
                                            <span>{{$parameter_test3[0]->label2}}</span>
                                        @endif
                                        @if(!empty($parameter_test3[0]->option3))
                                        <span>{{$parameter_test3[0]->label3}}</span>
                                        @endif
                                        @if(!empty($parameter_test3[0]->option4))
                                        <span>{{$parameter_test3[0]->label4}}</span>
                                        @endif
                                    </div>
                                </div>
                                @endif
                                @if(!empty($parameter_test3[0]->value5))
                                <div class="border-product fade1" >
                                    <div class="product" >
                                        <span class="label_chart">{{$parameter_test3[0]->value5}}</span>
                                        <div class="border-chart">
                                            <div class="state1" id="mychart1_value5">
                                                <div class="percent"></div>

                                            </div>
                                            @if(!empty($parameter_test3[0]->option2))
                                            <div class="state2" id="mychart2_value5">
                                                <div class="percent"></div>

                                            </div>
                                            @endif


                                            @if(!empty($parameter_test3[0]->option3))
                                            <div class="state3" id="mychart3_value5">
                                                <div class="percent"></div>

                                            </div>
                                            @endif
                                            @if(!empty($parameter_test3[0]->option4))
                                            <div class="state4" id="mychart4_value5">
                                                <div class="percent"></div>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="height-100"></div>
                                        <span class="level-chart-100">10</span>
                                        <div class="height-90"><span class="level-chart"></span></div>
                                        <div class="height-80"></div>
                                        <span class="level-chart-80">8</span>
                                        <div class="height-70"><span class="level-chart"></span></div>
                                        <div class="height-60"><span class="level-chart">6</span></div>
                                        <span class="level-chart-60">6</span>
                                        <div class="height-50"><span class="level-chart"></span></div>
                                        <div class="height-40"></div>
                                        <span class="level-chart-40">4</span>
                                        <div class="height-30"><span class="level-chart"></span></div>
                                        <div class="height-20"><span class="level-chart">2</span></div>
                                        <span class="level-chart-20">2</span>
                                        <div class="height-10"></div>
                                        <div class="height-0"></div>
                                        <span class="level-chart-0">0</span>
                                    </div>
                                    <div class="label-product">
                                        <span>{{$parameter_test3[0]->label1}}</span>

                                        @if(!empty($parameter_test3[0]->option2))
                                            <span>{{$parameter_test3[0]->label2}}</span>
                                        @endif
                                        @if(!empty($parameter_test3[0]->option3))
                                        <span>{{$parameter_test3[0]->label3}}</span>
                                        @endif
                                        @if(!empty($parameter_test3[0]->option4))
                                        <span>{{$parameter_test3[0]->label4}}</span>
                                        @endif
                                    </div>

                                </div>
                                @endif
                            </div>

                            @php
                                $width_chart = 50;

                                if (!empty($parameter_test3[0]->option2)) {
                                    $width_chart += 5;
                                }
                                if (!empty($parameter_test3[0]->option3)) {
                                    $width_chart += 20;
                                }
                                if (!empty($parameter_test3[0]->option4)) {
                                    $width_chart += 25;
                                }

                            @endphp
                            <div class="chart2"  >

                                <div class="border-product2 fade1"  style="width: {{$width_chart}}%">
                                    <div class="product" >
                                        <span class="label_chart">Total Progress Each Product</span>
                                        <div class="border-chart">
                                            <div class="state1" id="mychart1_value_final">
                                                <div class="percent"></div>

                                            </div>
                                            @if(!empty($parameter_test3[0]->option2))
                                            <div class="state2" id="mychart2_value_final">
                                                <div class="percent"></div>

                                            </div>
                                            @endif
                                            @if(!empty($parameter_test3[0]->option3))
                                            <div class="state3" id="mychart3_value_final">
                                                <div class="percent"> </div>

                                            </div>
                                            @endif
                                            @if(!empty($parameter_test3[0]->option4))
                                            <div class="state4" id="mychart4_value_final">
                                                <div class="percent"></div>

                                            </div>
                                            @endif



                                        </div>
                                        <div class="height-100"></div>
                                        <span class="level-chart-100">10</span>
                                        <div class="height-90"><span class="level-chart"></span></div>
                                        <div class="height-80"></div>
                                        <span class="level-chart-80">8</span>
                                        <div class="height-70"><span class="level-chart"></span></div>
                                        <div class="height-60"><span class="level-chart">6</span></div>
                                        <span class="level-chart-60">6</span>
                                        <div class="height-50"><span class="level-chart"></span></div>
                                        <div class="height-40"></div>
                                        <span class="level-chart-40">4</span>
                                        <div class="height-30"><span class="level-chart"></span></div>
                                        <div class="height-20"><span class="level-chart">2</span></div>
                                        <span class="level-chart-20">2</span>
                                        <div class="height-10"></div>
                                        <div class="height-0"></div>
                                        <span class="level-chart-0">0</span>
                                    </div>
                                    <div class="label-product">
                                        <span>{{$parameter_test3[0]->label1}}</span>

                                        @if(!empty($parameter_test3[0]->option2))
                                            <span>{{$parameter_test3[0]->label2}}</span>
                                        @endif
                                        @if(!empty($parameter_test3[0]->option3))
                                        <span>{{$parameter_test3[0]->label3}}</span>
                                        @endif
                                        @if(!empty($parameter_test3[0]->option4))
                                        <span>{{$parameter_test3[0]->label4}}</span>
                                        @endif

                                    </div>

                                </div>
                            </div>
                        </div>
@endif
@if(empty($parameter_test3[0]->option2) || $parameter_test3[0]->option2 == "")
                        <div class="chart-box">

                             <div class="chart2"  >

                                <div class="border-product2 fade1"  style="width:100%">
                                    <div class="product" >
                                        <span class="label_chart">Product Code :     {{$parameter_test3[0]->label1 }}</span>
                                        <div class="border-chart">
                                            <div class="state1" id="single_chart_val1">
                                                <div class="percent"></div>

                                            </div>
                                            @if(!empty($parameter_test3[0]->value2))
                                            <div class="state2" id="single_chart_val2">
                                                <div class="percent"></div>

                                            </div>
                                            @endif
                                            @if(!empty($parameter_test3[0]->value3))
                                            <div class="state3" id="single_chart_val3">
                                                <div class="percent"> </div>

                                            </div>
                                            @endif
                                            @if(!empty($parameter_test3[0]->value4))
                                            <div class="state4" id="single_chart_val4">
                                                <div class="percent"></div>

                                            </div>
                                            @endif
                                            @if(!empty($parameter_test3[0]->value5))
                                            <div class="state5" id="single_chart_val5">
                                                <div class="percent"></div>

                                            </div>
                                            @endif

                                        </div>
                                        <div class="height-100"></div>
                                        <span class="level-chart-100">10</span>
                                        <div class="height-90"><span class="level-chart"></span></div>
                                        <div class="height-80"></div>
                                        <span class="level-chart-80">8</span>
                                        <div class="height-70"><span class="level-chart"></span></div>
                                        <div class="height-60"><span class="level-chart">6</span></div>
                                        <span class="level-chart-60">6</span>
                                        <div class="height-50"><span class="level-chart"></span></div>
                                        <div class="height-40"></div>
                                        <span class="level-chart-40">4</span>
                                        <div class="height-30"><span class="level-chart"></span></div>
                                        <div class="height-20"><span class="level-chart">2</span></div>
                                        <span class="level-chart-20">2</span>
                                        <div class="height-10"></div>
                                        <div class="height-0"></div>
                                        <span class="level-chart-0">0</span>
                                    </div>
                                    <div class="label-product">
                                        <span>{{$parameter_test3[0]->value1}}</span>

                                        @if(!empty($parameter_test3[0]->value2))
                                            <span>{{$parameter_test3[0]->value2}}</span>
                                        @endif
                                        @if(!empty($parameter_test3[0]->value3))
                                        <span>{{$parameter_test3[0]->value3}}</span>
                                        @endif
                                        @if(!empty($parameter_test3[0]->value4))
                                        <span>{{$parameter_test3[0]->value4}}</span>
                                        @endif
                                        @if(!empty($parameter_test3[0]->value5))
                                        <span>{{$parameter_test3[0]->value5}}</span>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
@endif
                        <span>Raw Data  <button onclick="ratingraw()" id="btn-rating-raw">+</button></span>
                      <div class="raw-rating">




                        <table border="1" class="table table-striped table-hover text-center">
                            <tr>
                                <th>Product</th>
                                <th>Tester</th>
                                <th>{{$parameter_test3[0]->value1}}</th>
                                <th>{{$parameter_test3[0]->value2}}</th>
                                <th>{{$parameter_test3[0]->value3}}</th>
                                @if(!empty($parameter_test3[0]->value4) || $parameter_test3[0]->value4 != "")
                                <th>{{$parameter_test3[0]->value4}}</th>
                                <th>{{$parameter_test3[0]->value5}}</th>
                                @endif
                            </tr>
                            <tr>
                                <td>
                                    Item <br>{{$product_test3_option1['item_code']}} <br>
                                     Variant : {{$product_test3_option1['variant']}} <br>
                                       Lot : {{$product_test3_option1['lot_no']}} <br>
                                       Label: {{$parameter_test3[0]->label1}} <br>

                                </td>
                                <td>{{$all_employee}}</td>
                                <td>{{$qty_select_option1_test3}} score  :  {{$percent1_label_test3}} Average</td>
                                <td>{{$qty_select_option1_value2_test3}} score  :  {{$percent1_label_value2_test3}} Average</td>
                                <td>{{$qty_select_option1_value3_test3}} score  :  {{$percent1_label_value3_test3}} Average</td>

                                @if(!empty($parameter_test3[0]->value4) || $parameter_test3[0]->value4 != "")
                                <td>{{$qty_select_option1_value4_test3}} score  :  {{$percent1_label_value4_test3}} Average</td>
                                <td>{{$qty_select_option1_value5_test3}} score  :  {{$percent1_label_value5_test3}} Average</td>
                                @endif
                            </tr>

                            @if(!empty($product_test3_option2))
                            <tr>
                                <td>
                                    Item <br>{{$product_test3_option2['item_code']}} <br>
                                     Variant : {{$product_test3_option2['variant']}} <br>
                                       Lot : {{$product_test3_option2['lot_no']}} <br>
                                       Label: {{$parameter_test3[0]->label2}} <br>

                                </td>
                                <td>{{$all_employee}}</td>
                                <td>{{$qty_select_option2_test3}} score  :  {{$percent2_label_test3}} Average</td>
                                <td>{{$qty_select_option2_value2_test3}} score  :  {{$percent2_label_value2_test3}} Average</td>
                                <td>{{$qty_select_option2_value3_test3}} score  :  {{$percent2_label_value3_test3}} Average</td>
                                @if(!empty($parameter_test3[0]->value4) || $parameter_test3[0]->value4 != "")

                                <td>{{$qty_select_option2_value4_test3}} score  :  {{$percent2_label_value4_test3}} Average</td>
                                <td>{{$qty_select_option2_value5_test3}} score  :  {{$percent2_label_value5_test3}} Average</td>
                                @endif
                            </tr>
                            @endif
                            @if(!empty($product_test3_option3))
                            <tr>

                                <td>
                                    Item <br>{{$product_test3_option3['item_code']}} <br>
                                     Variant : {{$product_test3_option3['variant']}} <br>
                                       Lot : {{$product_test3_option3['lot_no']}} <br>
                                       Label: {{$parameter_test3[0]->label3}} <br>

                                </td>
                                <td>{{$all_employee}}</td>
                                <td>{{$qty_select_option3_test3}} score  :  {{$percent3_label_test3}} Average</td>
                                <td>{{$qty_select_option3_value2_test3}} score  :  {{$percent3_label_value2_test3}} Average</td>
                                <td>{{$qty_select_option3_value3_test3}} score  :  {{$percent3_label_value3_test3}} Average</td>

                                @if(!empty($qty_select_option3_value4_test3))
                                <td>{{$qty_select_option3_value4_test3}} score  :  {{$percent3_label_value4_test3}} Average</td>
                                <td>{{$qty_select_option3_value5_test3}} score  :  {{$percent3_label_value5_test3}} Average</td>
                                @endif
                            </tr>
                            @endif
                            @if(!empty($product_test3_option4))
                            <tr>
                                <td>
                                    Item <br>{{$product_test3_option4['item_code']}} <br>
                                     Variant : {{$product_test3_option4['variant']}} <br>
                                       Lot : {{$product_test3_option4['lot_no']}} <br>
                                       Label: {{$parameter_test3[0]->label4}} <br>

                                </td>
                                <td>{{$all_employee}}</td>
                                <td>{{$qty_select_option4_test3}} score  :  {{$percent4_label_test3}} Average</td>
                                <td>{{$qty_select_option4_value2_test3}} score  :  {{$percent4_label_value2_test3}} Average</td>
                                <td>{{$qty_select_option4_value3_test3}} score  :  {{$percent4_label_value3_test3}} Average</td>
                                @if(!empty($parameter_test3[0]->value4) || $parameter_test3[0]->value4 != "")

                                <td>{{$qty_select_option4_value4_test3}} score  :  {{$percent4_label_value4_test3}} Average</td>
                                <td>{{$qty_select_option4_value5_test3}} score  :  {{$percent4_label_value5_test3}} Average</td>
                                @endif
                            </tr>
                            @endif
                            <tr>
                                <td>View All Tester</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="/admin/view/result/tester/id={{$id}}/type={{3}}"><button>View</button></a></td>
                            </tr>
                        </table>
                      </div>



                </div>





        @endif
        @if($parameter_test4 != "0")
        @if ($item->type == 4)
            <input type="text" name="parameter4-id" class="d-none" value="{{$parameter_test4[0]->id}}">
            @php
            $num += 1;
            @endphp
            <div class="ranking-test-method">

                <div class="choice">
                    <div class="ranking-test-method">
                        <span class="method-title">{{$num}}. {{$item->test_title}}</span>

                        <div class="big-box-item mt-3">
                            <div class="box-item  fade1">

                                        <span class="color1_rank1" >Code : {{$parameter_test4[0]->label1}}</span>
                                        <span>គំរូ ១</span>
                                        <span>Item No. : {{$product_test4_option1['item_code']}}</span>
                                        <span>Variant : {{$product_test4_option1['variant']}}</span>
                                        <span>Lot : {{$product_test4_option1['lot_no']}}</span>

                            </div>
                            @if($product_test4_option2)
                            <div class="box-item fade1">

                                    <span class="color2_rank2" >Code :  {{$parameter_test4[0]->label2}}</span>
                                    <span>គំរូ ២</span>
                                    <span>Item No. : {{$product_test4_option2['item_code']}}</span>
                                    <span>Variant : {{$product_test4_option2['variant']}}</span>
                                    <span>Lot : {{$product_test4_option2['lot_no']}}</span>

                            </div>
                            @endif

                        </div>

                        <div class="big-box-item">
                            @if($product_test4_option3 != null)
                                <div class="box-item fade1">

                                        <span class="color3_rank3" >Code : {{$parameter_test4[0]->label3}}</span>
                                        <span>គំរូ ៣</span>
                                        <span>Item No. : {{$product_test4_option3['item_code']}}</span>
                                        <span>Variant : {{$product_test4_option3['variant']}}</span>
                                        <span>Lot : {{$product_test4_option3['lot_no']}}</span>

                                </div>
                            @endif
                            @if($product_test4_option4 != null)
                                <div class="box-item  fade1">

                                        <span class="color4_rank4" >Code :  {{$parameter_test4[0]->label4}}</span>
                                        <span>គំរូ ៤</span>
                                        <span>Item No. : {{$product_test4_option4['item_code']}}</span>
                                        <span>Variant : {{$product_test4_option4['variant']}}</span>
                                        <span>Lot : {{$product_test4_option4['lot_no']}}</span>

                                </div>
                                @endif

                        </div>
                        <div class="big-box-item">
                            <div class="stacked-bar">
                                <div class="left-stacked-bar">
                                    @if (!empty($parameter_test4[0]->option3))
                                    <div class="progress-state">ខ្លាំងជាងគេ</div>
                                    @endif
                                    <div class="progress-state">ខ្លាំង</div>
                                    <div class="progress-state">ខ្សោយ</div>
                                    @if ( !empty($parameter_test4[0]->option4))
                                    <div class="progress-state">ខ្សោយជាងគេ</div>
                                    @endif
                                </div>
                                <div class="right-stack-bar">
                                    <div class="bar">
                                        @php
                                            $width_rank1_option1 = ceil($percent_rank1_option1);
                                            $width_rank1_option2 = ceil($percent_rank1_option2);
                                            $width_rank1_option3 = ceil($percent_rank1_option3);
                                            $width_rank1_option4 = ceil($percent_rank1_option4);
                                        @endphp
                                        @if($width_rank1_option1 != 0)
                                        <div class="progress12" style="width: {{$width_rank1_option1}}%">
                                            <div class="progress-stack-bar" id="stack-bar1"></div>
                                        </div>
                                        @endif
                                        @if($width_rank1_option2 != 0)
                                        <div class="progress2" style="width: {{$width_rank1_option2}}%">
                                            <div class="progress-stack-bar" id="stack-bar2"></div>
                                        </div>
                                        @endif
                                        @if($width_rank1_option3 != 0)
                                        <div class="progress3" style="width: {{$width_rank1_option3}}%">
                                            <div class="progress-stack-bar" id="stack-bar3"></div>
                                        </div>
                                        @endif
                                        @if($width_rank1_option4 != 0)
                                        <div class="progress4" style="width: {{$width_rank1_option4}}%">
                                            <div class="progress-stack-bar" id="stack-bar4"></div>
                                        </div>
                                        @endif
                                    </div>
                                    @if ( !empty($parameter_test4[0]->option3))
                                    <div class="bar">
                                        @php
                                            $width_rank2_option1 = ceil($percent_rank2_option1);
                                            $width_rank2_option2 = ceil($percent_rank2_option2);
                                            $width_rank2_option3 = ceil($percent_rank2_option3);
                                            $width_rank2_option4 = ceil($percent_rank2_option4);
                                        @endphp
                                        @if($width_rank2_option1 != 0)
                                        <div class="progress12" style="width: {{$width_rank2_option1}}%">    <div class="progress-stack-bar" id="stack-bar5"></div></div>
                                        @endif
                                        @if($width_rank2_option2 != 0)
                                        <div class="progress2" style="width: {{$width_rank2_option2}}%"><div class="progress-stack-bar" id="stack-bar6"></div></div>
                                        @endif
                                        @if($width_rank2_option3 != 0)
                                        <div class="progress3" style="width: {{$width_rank2_option3}}%"><div class="progress-stack-bar" id="stack-bar7"></div></div>
                                        @endif
                                        @if($width_rank2_option4 != 0)
                                        <div class="progress4" style="width: {{$width_rank2_option4}}%"><div class="progress-stack-bar" id="stack-bar8"></div></div>
                                        @endif
                                    </div>
                                    <div class="bar">
                                        @php
                                            $width_rank3_option1 = ceil($percent_rank3_option1);
                                            $width_rank3_option2 = ceil($percent_rank3_option2);
                                            $width_rank3_option3 = ceil($percent_rank3_option3);
                                            $width_rank3_option4 = ceil($percent_rank3_option4);
                                        @endphp
                                        @if($width_rank3_option1 != 0)
                                        <div class="progress12" style="width: {{$width_rank3_option1}}%"><div class="progress-stack-bar" id="stack-bar9"></div></div>
                                        @endif
                                        @if($width_rank3_option2 != 0)
                                        <div class="progress2" style="width: {{$width_rank3_option2}}%"><div class="progress-stack-bar" id="stack-bar10"></div></div>
                                        @endif
                                        @if($width_rank3_option3 != 0)
                                        <div class="progress3" style="width: {{$width_rank3_option3}}%"><div class="progress-stack-bar" id="stack-bar11"></div></div>
                                        @endif
                                        @if($width_rank3_option4 != 0)
                                        <div class="progress4" style="width: {{$width_rank3_option4}}%"><div class="progress-stack-bar" id="stack-bar12"></div></div>
                                        @endif
                                    </div>
                                    @endif
                                    @if ( !empty($parameter_test4[0]->option4))
                                    <div class="bar">
                                        @php
                                            $width_rank4_option1 = floor($percent_rank4_option1);
                                            $width_rank4_option2 = floor($percent_rank4_option2);
                                            $width_rank4_option3 = floor($percent_rank4_option3);
                                            $width_rank4_option4 = floor($percent_rank4_option4);
                                        @endphp
                                        @if($width_rank4_option1 != 0)
                                        <div class="progress12" style="width: {{$width_rank4_option1}}%"><div class="progress-stack-bar" id="stack-bar13"></div></div>
                                        @endif
                                        @if($width_rank4_option2 != 0)
                                        <div class="progress2" style="width: {{$width_rank4_option2}}%"><div class="progress-stack-bar" id="stack-bar14"></div></div>
                                        @endif
                                        @if($width_rank4_option3 != 0)
                                        <div class="progress3" style="width: {{$width_rank4_option3}}%"><div class="progress-stack-bar" id="stack-bar15"></div></div>
                                        @endif
                                        @if($width_rank4_option4 != 0)
                                        <div class="progress4" style="width: {{$width_rank4_option4}}%"><div class="progress-stack-bar" id="stack-bar16"></div></div>
                                        @endif
                                    </div>
                                    @endif
                                </div>

                            </div>
                        </div>
                        <span>Raw Data &ensp; <button onclick="ranking_raw()"  id="btn-ranking-raw">+</button></span>
                        <div class="raw-ranking">
                            <table class="table table-striped table-hover text-left" >
                                <tr>
                                    <th>Item No</th>
                                    <th>Variant</th>
                                    <th>Lot</th>
                                    <th>Rank</th>
                                    <th>Quantity Of Participant</th>
                                    <th>Tester Select</th>
                                    <th>Percentage</th>
                                </tr>
                                <tr>
                                    <td>{{$product_test4_option1['item_code']}}</td>
                                    <td>{{$product_test4_option1['variant']}}</td>
                                    <td>{{$product_test4_option1['lot_no']}}</td>
                                    <td>ខ្លាំងជាងគេ</td>
                                    <td>{{$all_employee}}</td>
                                    <td>{{$qty_select_rank1_option1}}</td>
                                    <td>{{$percent_rank1_option1}}%</td>
                                </tr>
                                @if(!empty($product_test4_option2))
                                <tr>

                                    <td>{{$product_test4_option2['item_code']}}</td>
                                    <td>{{$product_test4_option2['variant']}}</td>
                                    <td>{{$product_test4_option2['lot_no']}}</td>
                                    <td>ខ្លាំងជាងគេ</td>
                                    <td>{{$all_employee}}</td>
                                    <td>{{$qty_select_rank1_option2}}</td>
                                    <td>{{$percent_rank1_option2}}%</td>
                                </tr>
                                @endif
                                @if(!empty($product_test4_option3))
                                <tr>
                                    <td>{{$product_test4_option3['item_code']}}</td>
                                    <td>{{$product_test4_option3['variant']}}</td>
                                    <td>{{$product_test4_option3['lot_no']}}</td>
                                    <td>ខ្លាំងជាងគេ</td>
                                    <td>{{$all_employee}}</td>
                                    <td>{{$qty_select_rank1_option3}}</td>
                                    <td>{{$percent_rank1_option3}}%</td>
                                </tr>
                                @endif
                                @if(!empty($product_test4_option4))
                                <tr>
                                    <td>{{$product_test4_option4['item_code']}}</td>
                                    <td>{{$product_test4_option4['variant']}}</td>
                                    <td>{{$product_test4_option4['lot_no']}}</td>
                                    <td>ខ្លាំងជាងគេ</td>
                                    <td>{{$all_employee}}</td>
                                    <td>{{$qty_select_rank1_option4}}</td>
                                    <td>{{$percent_rank1_option4}}%</td>
                                </tr>
                                @endif



                                <tr>
                                    <td>{{$product_test4_option1['item_code']}}</td>
                                    <td>{{$product_test4_option1['variant']}}</td>
                                    <td>{{$product_test4_option1['lot_no']}}</td>
                                    <td>ខ្លាំង</td>
                                    <td>{{$all_employee}}</td>
                                    <td>{{$qty_select_rank2_option1}}</td>
                                    <td>{{$percent_rank2_option1}}%</td>
                                </tr>
                                @if(!empty($product_test4_option2))
                                <tr>
                                    <td>{{$product_test4_option2['item_code']}}</td>
                                    <td>{{$product_test4_option2['variant']}}</td>
                                    <td>{{$product_test4_option2['lot_no']}}</td>
                                    <td>ខ្លាំង</td>
                                    <td>{{$all_employee}}</td>
                                    <td>{{$qty_select_rank2_option2}}</td>
                                    <td>{{$percent_rank2_option2}}%</td>
                                </tr>
                                @endif
                                @if(!empty($product_test4_option3))
                                <tr>
                                    <td>{{$product_test4_option3['item_code']}}</td>
                                    <td>{{$product_test4_option3['variant']}}</td>
                                    <td>{{$product_test4_option3['lot_no']}}</td>
                                    <td>ខ្លាំង</td>
                                    <td>{{$all_employee}}</td>
                                    <td>{{$qty_select_rank2_option3}}</td>
                                    <td>{{$percent_rank2_option3}}%</td>
                                </tr>
                                @endif
                                @if(!empty($product_test4_option4))
                                <tr>
                                    <td>{{$product_test4_option4['item_code']}}</td>
                                    <td>{{$product_test4_option4['variant']}}</td>
                                    <td>{{$product_test4_option4['lot_no']}}</td>
                                    <td>ខ្លាំង</td>
                                    <td>{{$all_employee}}</td>
                                    <td>{{$qty_select_rank2_option4}}</td>
                                    <td>{{$percent_rank2_option4}}%</td>
                                </tr>
                                @endif



                                <tr>
                                    <td>{{$product_test4_option1['item_code']}}</td>
                                    <td>{{$product_test4_option1['variant']}}</td>
                                    <td>{{$product_test4_option1['lot_no']}}</td>
                                    <td>ខ្សោយ</td>
                                    <td>{{$all_employee}}</td>
                                    <td>{{$qty_select_rank3_option1}}</td>
                                    <td>{{$percent_rank3_option1}}%</td>
                                </tr>
                                @if(!empty($product_test4_option2))
                                <tr>
                                    <td>{{$product_test4_option2['item_code']}}</td>
                                    <td>{{$product_test4_option2['variant']}}</td>
                                    <td>{{$product_test4_option2['lot_no']}}</td>
                                    <td>ខ្សោយ</td>
                                    <td>{{$all_employee}}</td>
                                    <td>{{$qty_select_rank3_option2}}</td>
                                    <td>{{$percent_rank3_option2}}%</td>
                                </tr>
                                @endif
                                @if(!empty($product_test4_option3))
                                <tr>
                                    <td>{{$product_test4_option3['item_code']}}</td>
                                    <td>{{$product_test4_option3['variant']}}</td>
                                    <td>{{$product_test4_option3['lot_no']}}</td>
                                    <td>ខ្សោយ</td>
                                    <td>{{$all_employee}}</td>
                                    <td>{{$qty_select_rank3_option3}}</td>
                                    <td>{{$percent_rank3_option3}}%</td>
                                </tr>
                                @endif
                                @if(!empty($product_test4_option4))
                                <tr>
                                    <td>{{$product_test4_option4['item_code']}}</td>
                                    <td>{{$product_test4_option4['variant']}}</td>
                                    <td>{{$product_test4_option4['lot_no']}}</td>
                                    <td>ខ្សោយ</td>
                                    <td>{{$all_employee}}</td>
                                    <td>{{$qty_select_rank3_option4}}</td>
                                    <td>{{$percent_rank3_option4}}%</td>
                                </tr>
                                @endif



                    @if(!empty($product_test4_option4))
                                <tr>
                                    <td>{{$product_test4_option1['item_code']}}</td>
                                    <td>{{$product_test4_option1['variant']}}</td>
                                    <td>{{$product_test4_option1['lot_no']}}</td>
                                    <td>ខ្សោយជាងគេ</td>
                                    <td>{{$all_employee}}</td>
                                    <td>{{$qty_select_rank4_option1}}</td>
                                    <td>{{$percent_rank4_option1}}%</td>
                                </tr>
                                @if(!empty($product_test4_option2))
                                <tr>
                                    <td>{{$product_test4_option2['item_code']}}</td>
                                    <td>{{$product_test4_option2['variant']}}</td>
                                    <td>{{$product_test4_option2['lot_no']}}</td>
                                    <td>ខ្សោយជាងគេ</td>
                                    <td>{{$all_employee}}</td>
                                    <td>{{$qty_select_rank4_option2}}</td>
                                    <td>{{$percent_rank4_option2}}%</td>
                                </tr>
                                @endif
                                @if(!empty($product_test4_option3))
                                <tr>
                                    <td>{{$product_test4_option3['item_code']}}</td>
                                    <td>{{$product_test4_option3['variant']}}</td>
                                    <td>{{$product_test4_option3['lot_no']}}</td>
                                    <td>ខ្សោយជាងគេ</td>
                                    <td>{{$all_employee}}</td>
                                    <td>{{$qty_select_rank4_option3}}</td>
                                    <td>{{$percent_rank4_option1}}%</td>
                                </tr>
                                @endif
                                @if(!empty($product_test4_option4))
                                <tr>
                                    <td>{{$product_test4_option4['item_code']}}</td>
                                    <td>{{$product_test4_option4['variant']}}</td>
                                    <td>{{$product_test4_option4['lot_no']}}</td>
                                    <td>ខ្សោយជាងគេ</td>
                                    <td>{{$all_employee}}</td>
                                    <td>{{$qty_select_rank4_option4}}</td>
                                    <td>{{$percent_rank4_option4}}%</td>
                                </tr>
                                @endif
                        @endif
                                <tr>
                                   <td>View All Tester</td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td><a href="/admin/view/result/tester/id={{$id}}/type={{4}}"><button>View</button></a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif
 @endforeach

    <div class="row cs">
        <div class="col-12">
            <div class="align-right">
                <button type="button" onclick="savelink()">Share Result</button>
                <a href="/admin/view/tester/comment/{{$id}}"><button type="button">Tester Comment</button></a>
                <a href="/result/tester/test_id={{$id}}"><button type="button">List Tester</button></a>
                <a href="/admin/view/test"><button type="button">Back</button></a>
            </div>
        </div>
    </div>
    </div>
    </div>


<script>
    function savelink(){
        var data = "http://192.168.1.71:8400/result/test_id={{$id}}/tested={{$test[0]->tested_employee}}";

            // Create a temporary textarea element to hold the data
            var tempTextarea = document.createElement('textarea');
            tempTextarea.value = data;
            document.body.appendChild(tempTextarea);

            // Select the text and copy it to the clipboard
            tempTextarea.select();
            document.execCommand('copy');

            // Remove the temporary textarea
            document.body.removeChild(tempTextarea);

            alert('Share Link copied to clipboard!');
    }

     document.addEventListener("DOMContentLoaded", function () {

        var targetWidth2 = {{$percent2_label}}; // Set the target width for the second progress bar
        var targetWidth3 = {{$percent3_label}}; // Set the target width for the third progress bar
        var targetWidth4 = {{$percent4_label}}; // Set the target width for the fourth progress bar
        var targetwidthmain = {{$total_percent_test1_label}};

        // Test2

        var targetWidth1_test2 = {{$percent1_label_test2}};
        var targetWidth2_test2 = {{$percent2_label_test2}};
        var targetWidth3_test2 = {{$percent3_label_test2}};
        var targetWidth4_test2 = {{$percent4_label_test2}};
        var targetWithMain_test2 = {{$total_percent_test2_label}};






        var progressBar2 = document.getElementById("myProgressBar2_test1");
        var progressBar3 = document.getElementById("myProgressBar3_test1");
        var progressBar4 = document.getElementById("myProgressBar4_test1");
        var progressmain = document.getElementById("myProgressBar_main_test1")
        var progressmain2 = document.getElementById("myProgressBar_main2_test1")

        // Test2
        var progressBar1_test2 = document.getElementById("myProgressBar1_test2");
        var progressBar2_test2 = document.getElementById("myProgressBar2_test2");
        var progressBar3_test2 = document.getElementById("myProgressBar3_test2");
        var progressBar4_test2 = document.getElementById("myProgressBar4_test2");
        var progressBar_main_test2 = document.getElementById("myProgressBar_main_test2");
        var progressBar_main2_test2 = document.getElementById("myProgressBar_main2_test2");




        function animateProgressBar(currentWidth, targetWidth, duration, progressBar) {
            var startTime = null;

            function step(timestamp) {
                if (!startTime) startTime = timestamp;

                var progress = timestamp - startTime;
                var percentage = Math.min(progress / duration, 1);
                var newWidth = currentWidth + percentage * (targetWidth - currentWidth);

                progressBar.style.width = newWidth + "%";
                progressBar.innerHTML = newWidth.toFixed(2) + "%"; // Display float value with two decimal places

                if (progress < duration) {
                    requestAnimationFrame(step);
                }
            }

            requestAnimationFrame(step);
        }
        function animateProgressBar2(currentWidth, targetWidth, duration, progressBar) {
            var startTime = null;

            function step(timestamp) {
                if (!startTime) startTime = timestamp;

                var progress = timestamp - startTime;
                var percentage = Math.min(progress / duration, 1);
                var newWidth = currentWidth + percentage * (targetWidth - currentWidth);

                progressBar.style.width = newWidth + "%";
                progressBar.innerHTML = "Correct  "+newWidth.toFixed(2) + "%"; // Display float value with two decimal places

                if (progress < duration) {
                    requestAnimationFrame(step);
                }
            }

            requestAnimationFrame(step);
        }
        function animateProgressBar3(currentWidth, targetWidth, duration, progressBar) {
            var startTime = null;

            function step(timestamp) {
                if (!startTime) startTime = timestamp;

                var progress = timestamp - startTime;
                var percentage = Math.min(progress / duration, 1);
                var newWidth = currentWidth + percentage * (targetWidth - currentWidth);

                progressBar.style.width = newWidth + "%";
                progressBar.innerHTML = "Incorrect  "+newWidth.toFixed(2) + "%"; // Display float value with two decimal places

                if (progress < duration) {
                    requestAnimationFrame(step);
                }
            }

            requestAnimationFrame(step);
        }

        function chart(currentWidth, targetWidth, duration, progressBar) {
            var startTime = null;


            function step(timestamp) {
                if (!startTime) startTime = timestamp;

                var progress = timestamp - startTime;
                var percentage = Math.min(progress / duration, 1);
                var newWidth = currentWidth + percentage * (targetWidth - currentWidth);

                progressBar.style.height = newWidth*10 + "%";
                progressBar.innerHTML = newWidth.toFixed(2); // Display float value with two decimal places

                if (progress < duration) {
                    requestAnimationFrame(step);
                }
            }

            requestAnimationFrame(step);
        }
        // Set the animation duration (in milliseconds)



        if(targetWidth2 != null ){animateProgressBar(0, targetWidth2, 1000, progressBar2);}
        if(targetWidth3 != null ){animateProgressBar(0, targetWidth3, 1000, progressBar3);}
        if(targetWidth4 != null ){animateProgressBar(0, targetWidth4, 1000, progressBar4);}
        if(targetwidthmain != null){animateProgressBar2(0, targetwidthmain, 1000, progressmain);}


        if(targetwidthmain != null){animateProgressBar3(0, 100-targetwidthmain, 1000, progressmain2);}
        if(targetWidth1_test2 != null){animateProgressBar(0, targetWidth1_test2, 1000, progressBar1_test2);}
        if(targetWidth2_test2 != null){animateProgressBar(0, targetWidth2_test2, 1000, progressBar2_test2);}
        if(targetWidth3_test2 != null){animateProgressBar(0, targetWidth3_test2, 1000, progressBar3_test2);}
        if(targetWidth4_test2 != null){animateProgressBar(0, targetWidth4_test2, 1000, progressBar4_test2);}
        if(targetWithMain_test2 != null ){animateProgressBar2(0, targetWithMain_test2, 1000, progressBar_main_test2);}
        if(targetWithMain_test2 != null){animateProgressBar3(0, 100- targetWithMain_test2,1000, progressBar_main2_test2);}






        //test3
        var chart1 = document.getElementById("mychart1_value1");
        var chart2 = document.getElementById("mychart2_value1");
        var chart3 = document.getElementById("mychart3_value1");
        var chart4 = document.getElementById("mychart4_value1");

        var chart1_value2 = document.getElementById("mychart1_value2");
        var chart2_value2 = document.getElementById("mychart2_value2");
        var chart3_value2 = document.getElementById("mychart3_value2");
        var chart4_value2 = document.getElementById("mychart4_value2");

        var chart1_value3 = document.getElementById("mychart1_value3");
        var chart2_value3 = document.getElementById("mychart2_value3");
        var chart3_value3 = document.getElementById("mychart3_value3");
        var chart4_value3 = document.getElementById("mychart4_value3");


        var chart1_value4 = document.getElementById("mychart1_value4");
        var chart2_value4 = document.getElementById("mychart2_value4");
        var chart3_value4 = document.getElementById("mychart3_value4");
        var chart4_value4 = document.getElementById("mychart4_value4");

        var chart1_value5 = document.getElementById("mychart1_value5");
        var chart2_value5 = document.getElementById("mychart2_value5");
        var chart3_value5 = document.getElementById("mychart3_value5");
        var chart4_value5 = document.getElementById("mychart4_value5");

        var chart1_final = document.getElementById("mychart1_value_final");
        var chart2_final = document.getElementById("mychart2_value_final");
        var chart3_final = document.getElementById("mychart3_value_final");
        var chart4_final = document.getElementById("mychart4_value_final");
        // var chart1_progress1 =   {{$percent1_label_test3}};

        //Test3 value1
        var chart1_progress1 = {{$percent1_label_test3}};
        var chart2_progress1 = {{$percent2_label_test3}};
        var chart3_progress1 = {{$percent3_label_test3}};
        var chart4_progress1 = {{$percent4_label_test3}};

        //Test3 Value2
        var chart1_progress2 = {{$percent1_label_value2_test3}};
        var chart2_progress2 = {{$percent2_label_value2_test3}};
        var chart3_progress2 = {{$percent3_label_value2_test3}};
        var chart4_progress2 = {{$percent4_label_value2_test3}};

        //Test3 Value3
        var chart1_progress3 = {{$percent1_label_value3_test3}};
        var chart2_progress3 = {{$percent2_label_value3_test3}};
        var chart3_progress3 = {{$percent3_label_value3_test3}};
        var chart4_progress3 = {{$percent4_label_value3_test3}};

        //Test3 Value4
        var chart1_progress4 = {{$percent1_label_value4_test3}};
        var chart2_progress4 = {{$percent2_label_value4_test3}};
        var chart3_progress4 = {{$percent3_label_value4_test3}};
        var chart4_progress4 = {{$percent4_label_value4_test3}};

        //Test3 Value5
        var chart1_progress5 = {{$percent1_label_value5_test3}};
        var chart2_progress5 = {{$percent2_label_value5_test3}};
        var chart3_progress5 = {{$percent3_label_value5_test3}};
        var chart4_progress5 = {{$percent4_label_value5_test3}};



        var single_chart_val1 = document.getElementById("single_chart_val1");
        var single_chart_val2 = document.getElementById("single_chart_val2");
        var single_chart_val3 = document.getElementById("single_chart_val3");
        var single_chart_val4 = document.getElementById("single_chart_val4");
        var single_chart_val5 = document.getElementById("single_chart_val5");
        //Test3 Single Chart
        if(chart1_progress1 != 0){chart(0, chart1_progress1 ,3000,single_chart_val1 );}
        if(chart1_progress2  != 0){chart(0, chart1_progress2 ,3000,single_chart_val2);}
        if(chart1_progress3 != 0){chart(0, chart1_progress3 ,3000,single_chart_val3);}
        if(chart1_progress4 != 0){chart(0, chart1_progress4 ,3000,single_chart_val4);}
        if(chart1_progress5 != 0){chart(0, chart1_progress5 ,3000,single_chart_val5);}






        var qty_value = 3;

        if(chart1_progress4 != 0 ){
            qty_value += 1;
        }
        if( chart1_progress5  != 0){
            qty_value += 1;
        }
        var  progress_final_progress1 = (chart1_progress1 + chart1_progress2 + chart1_progress3 + chart1_progress4 + chart1_progress5)/qty_value;
        var  progress_final_progress2 = (chart2_progress1 + chart2_progress2 + chart2_progress3 + chart2_progress4 + chart2_progress5)/qty_value;
        var  progress_final_progress3 = (chart3_progress1 + chart3_progress2 + chart3_progress3 + chart3_progress4 + chart3_progress5)/qty_value;
        var  progress_final_progress4 = (chart4_progress1 + chart4_progress2 + chart4_progress3 + chart4_progress4 + chart4_progress5)/qty_value;

        //Value 1
        if(chart1_progress1 != 0){chart(0, chart1_progress1 ,1000,chart1 );}
        if(chart2_progress1 != 0){chart(0, chart2_progress1 ,1000,chart2 );}
        if(chart3_progress1 != 0){chart(0, chart3_progress1 ,1000,chart3 );}
        if(chart4_progress1 != 0){chart(0, chart4_progress1 ,1000,chart4 ) ;}


        //Value 2
        if(chart1_progress2  != 0){chart(0, chart1_progress2 ,4000,chart1_value2 );}
        if(chart2_progress2  != 0){chart(0, chart2_progress2 ,4000,chart2_value2 );}
        if(chart3_progress2  != 0){chart(0, chart3_progress2 ,4000,chart3_value2 );}
        if(chart4_progress2  != 0){chart(0, chart4_progress2 ,4000,chart4_value2 ) ;}



        //Value 3
        if(chart1_progress3 != 0){chart(0, chart1_progress3 ,4000,chart1_value3 );}
        if(chart2_progress3 != 0){chart(0, chart2_progress3 ,4000,chart2_value3 );}
        if(chart3_progress3 != 0){chart(0, chart3_progress3 ,4000,chart3_value3 );}
        if(chart4_progress3 != 0){chart(0, chart4_progress3 ,4000,chart4_value3 ) ;}


        //Value 4
        if(chart1_progress4 != 0){chart(0, chart1_progress4 ,4000,chart1_value4 );}
        if(chart2_progress4 != 0){chart(0, chart2_progress4 ,4000,chart2_value4 );}
        if(chart3_progress4 != 0){chart(0, chart3_progress4 ,4000,chart3_value4 );}
        if(chart4_progress4 != 0){chart(0, chart4_progress4 ,4000,chart4_value4 ) ;}

         //Value 5
        if(chart1_progress5 != 0){chart(0, chart1_progress5 ,4000,chart1_value5 );}
        if(chart2_progress5 != 0){chart(0, chart2_progress5 ,4000,chart2_value5 );}
        if(chart3_progress5 != 0){chart(0, chart3_progress5 ,4000,chart3_value5 );}
        if(chart4_progress5 != 0){chart(0, chart4_progress5 ,4000,chart4_value5 ) ;}

        if(progress_final_progress1 != 0){chart(0, progress_final_progress1 ,5000,chart1_final ) ;}
        if(progress_final_progress2 != 0){chart(0, progress_final_progress2 ,5000,chart2_final ) ;}
        if(progress_final_progress3 != 0){chart(0, progress_final_progress3 ,5000,chart3_final ) ;}
        if(progress_final_progress4 != 0){chart(0, progress_final_progress4 ,5000,chart4_final ) ;}






        function stack_bar(currentWidth, targetWidth, duration, progressBar,$display_percent) {
            var startTime = null;

            function step(timestamp) {
                if (!startTime) startTime = timestamp;

                var progress = timestamp - startTime;
                var percentage = Math.min(progress / duration, 1);
                var newWidth = currentWidth + percentage * (targetWidth - currentWidth);
                var Display = percentage * $display_percent;
                progressBar.style.width = newWidth + "%";
                progressBar.innerHTML = Display.toFixed(2) + "%"; // Display float value with two decimal places

                if (progress < duration) {
                    requestAnimationFrame(step);
                }
            }

            requestAnimationFrame(step);
        }
        var display_percent_rank1_option1 = {{$percent_rank1_option1}};
        var display_percent_rank1_option2 = {{$percent_rank1_option2}};
        var display_percent_rank1_option3 = {{$percent_rank1_option3}};
        var display_percent_rank1_option4 = {{$percent_rank1_option4}};

        var display_percent_rank2_option1 = {{$percent_rank2_option1}};
        var display_percent_rank2_option2 = {{$percent_rank2_option2}};
        var display_percent_rank2_option3 = {{$percent_rank2_option3}};
        var display_percent_rank2_option4 = {{$percent_rank2_option4}};

        var display_percent_rank3_option1 = {{$percent_rank3_option1}};
        var display_percent_rank3_option2 = {{$percent_rank3_option2}};
        var display_percent_rank3_option3 = {{$percent_rank3_option3}};
        var display_percent_rank3_option4 = {{$percent_rank3_option4}};

        var display_percent_rank4_option1 = {{$percent_rank4_option1}};
        var display_percent_rank4_option2 = {{$percent_rank4_option2}};
        var display_percent_rank4_option3 = {{$percent_rank4_option3}};
        var display_percent_rank4_option4 = {{$percent_rank4_option4}};


        var stack_bar1 = document.getElementById("stack-bar1");
        var stack_bar2 = document.getElementById("stack-bar2");
        var stack_bar3 = document.getElementById("stack-bar3");
        var stack_bar4 = document.getElementById("stack-bar4");


        var stack_bar5 = document.getElementById("stack-bar5");
        var stack_bar6 = document.getElementById("stack-bar6");
        var stack_bar7 = document.getElementById("stack-bar7");
        var stack_bar8 = document.getElementById("stack-bar8");

        var stack_bar9 = document.getElementById("stack-bar9");
        var stack_bar10 = document.getElementById("stack-bar10");
        var stack_bar11 = document.getElementById("stack-bar11");
        var stack_bar12 = document.getElementById("stack-bar12");

        var stack_bar13 = document.getElementById("stack-bar13");
        var stack_bar14 = document.getElementById("stack-bar14");
        var stack_bar15 = document.getElementById("stack-bar15");
        var stack_bar16 = document.getElementById("stack-bar16");


        stack_bar(0,100,1400,stack_bar1,display_percent_rank1_option1);
        stack_bar(0,100,1200,stack_bar2,display_percent_rank1_option2);
        stack_bar(0,100,1300,stack_bar3,display_percent_rank1_option3 );
        stack_bar(0,100,1700,stack_bar4,display_percent_rank1_option4 );

        stack_bar(0,100,2500,stack_bar5,display_percent_rank2_option1 );
        stack_bar(0,100,2400,stack_bar6,display_percent_rank2_option2 );
        stack_bar(0,100,2000,stack_bar7,display_percent_rank2_option3 );
        stack_bar(0,100,2100,stack_bar8,display_percent_rank2_option4 );

        stack_bar(0,100,1800,stack_bar9,display_percent_rank3_option1 );
        stack_bar(0,100,1600,stack_bar10,display_percent_rank3_option2 );
        stack_bar(0,100,1100,stack_bar11,display_percent_rank3_option3 );
        stack_bar(0,100,1000,stack_bar12,display_percent_rank3_option4 );

        stack_bar(0,100,1500,stack_bar13,display_percent_rank4_option1 );
        stack_bar(0,100,1300,stack_bar14,display_percent_rank4_option2 );
        stack_bar(0,100,1700,stack_bar15,display_percent_rank4_option3 );
        stack_bar(0,100,1100,stack_bar16,display_percent_rank4_option4 );

    });
</script>


@endsection
