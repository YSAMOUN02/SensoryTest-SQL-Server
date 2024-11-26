@extends("frontend.master")
@section("content")


        <div class="tester-viewer fade1 ">

            <br>
            <span class="test_title fade1">{{$test[0]->test_title}}</span>
         @if($type == 4)
            <table class="table table-light table-striped table-hover fade1">
                <tr >
                    <th>Rank</th>
                    <th>Label</th>
                    <th>Item No</th>
                    <th>Variant</th>
                    <th>Lot</th>

                </tr>
                <tr>
                    <td>1</td>
                    <td>{{$label[0]->label1}}</td>

                       @if($product_group != null)
                            @foreach( $product_group as $item)
                                @if($label[0]->option1  == $item->id)
                                    <td>
                                        {{$item->item_code}}
                                    </td>
                                    <td>{{$item->variant}}</td>
                                    <td>{{$item->lot_no}}</td>

                                @endif
                            @endforeach
                       @endif


                </tr>
                @if(!empty($label[0]->option2))
                <tr>
                    <td>2</td>
                    <td>{{$label[0]->label2}}</td>
                @if($product_group != null)
                    @foreach( $product_group as $item)
                        @if($label[0]->option2  == $item->id)
                            <td>
                                {{$item->item_code}}
                            </td>
                            <td>{{$item->variant}}</td>
                            <td>{{$item->lot_no}}</td>

                        @endif

                    @endforeach
                 @endif

                </tr>
                @endif

                @if(!empty($label[0]->option3))
                <tr>
                    <td>3</td>
                    <td>{{$label[0]->label3}}</td>
                 @if($product_group != null)
                    @foreach( $product_group as $item)
                        @if($label[0]->option3  == $item->id)
                            <td>
                                {{$item->item_code}}
                            </td>
                            <td>{{$item->variant}}</td>
                            <td>{{$item->lot_no}}</td>

                        @endif

                    @endforeach
                    @endif

                </tr>
                @endif
                @if(!empty($label[0]->option4))
                <tr>
                    <td>4</td>
                    <td>{{$label[0]->label4}}</td>
                    @if($product_group != null)
                    @foreach( $product_group as $item)
                        @if($label[0]->option4 == $item->id)
                            <td>
                                {{$item->item_code}}
                            </td>
                            <td>{{$item->variant}}</td>
                            <td>{{$item->lot_no}}</td>

                        @endif

                    @endforeach
                    @endif

                </tr>
                @endif
            </table>
            @endif






            <table class="table table-light table-striped table-hover fade1">
                <tr>
                    <th>Serial</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Position</th>
                    <th>Department</th>


                    @if($type != 4)
                        <th>Label</th>
                        <th>Selected Product</th>
                        <th>Variant</th>
                        <th>Lot</th>

                    @endif
                    @if(!empty($label[0]->value1)) <th>{{$label[0]->value1}}</th> @endif
                    @if(!empty($label[0]->value2)) <th>{{$label[0]->value2}}</th> @endif
                    @if(!empty($label[0]->value3)) <th>{{$label[0]->value3}}</th> @endif
                    @if(!empty($label[0]->value4)) <th>{{$label[0]->value4}}</th> @endif
                    @if(!empty($label[0]->value5)) <th>{{$label[0]->value5}}</th> @endif



                    @if($type == 4)
                        <th>Rank1</th>
                        <th>Rank2</th>
                        <th>Rank3</th>
                        @if($test[0]->option4)<th>Rank4</th> @endif
                    @endif
                    <th>Test Date</th>
                    <th>Action</th>
                </tr>

                    @foreach($test as $item)
                    <tr>
                        <td>{{$item->serial}}</td>
                        <td>{{$item->idem}}</td>
                        <td>{{$item->em_name}}</td>
                        @if($item->dob == 0)
                        <td>N/A</td>
                        @else
                        <td>{{$item->dob}}</td>

                        @endif

                        <td>{{$item->position}}</td>
                        <td>{{$item->department}}</td>

                        @if(!empty($item->user_select))
                            <td>@foreach($label as $item_label)
                                @if ($item->user_select == $item_label->option1)
                                    {{$item_label->label1}}
                                @elseif($item->user_select == $item_label->option2)
                                    {{$item_label->label2}}
                                @elseif($item->user_select == $item_label->option3)
                                    {{$item_label->label3}}
                                @elseif($item->user_select == $item_label->option4)
                                    {{$item_label->label4}}


                                    @endif

                            @endforeach
                            </td>
                        @endif
                        @if(!empty($product_group_test1))

                                @if($item->user_select == "N/A")

                                    <td>User Not Select Product</td>
                                    <td></td>
                                    <td></td>
                                @endif

                        @endif
                        @if(!empty($product_group_test1))
                            @foreach($product_group_test1 as $product)
                                @if($item->user_select == $product->product_id)
                                    <td>{{$product->item_code}}</td>
                                    <td>{{$product->variant}}</td>
                                    <td>{{$product->lot}}</td>

                                @endif

                            @endforeach
                        @endif
                        @if(!empty($product_group_test2))
                        @foreach($product_group_test2 as $product)
                            @if($item->user_select == $product->product_id)
                                <td>{{$product->item_code}}</td>
                                <td>{{$product->variant}}</td>
                                <td>{{$product->lot}}</td>
                            @endif

                        @endforeach
                        @endif




                        @if(!empty($item->value1_option1))
                                <td>{{$item->value1_option1}}</td>


                        @endif

                        @if(!empty($item->value1_option2))
                        <td>{{$item->value1_option2}}</td>

                        @endif


                        @if(!empty($item->value1_option3))
                        <td>{{$item->value1_option3}}</td>


                        @endif
                    @if(!empty($item->value1_option4))
                    <td>{{$item->value1_option4}}</td>

                    @endif
                    @if(!empty($item->value1_option5))
                    <td>{{$item->value1_option5}}</td>


                    @endif

                        @if($type == 4)
                            @if(!empty($item->option1)) <td>{{$item->option1}}</td> @endif
                            @if(!empty($item->option2)) <td>{{$item->option2}}</td> @endif
                            @if(!empty($item->option3)) <td>{{$item->option3}}</td> @endif
                            @if(!empty($item->option4)) <td>{{$item->option4}}</td> @endif
                        @endif

                        <td>{{$item->test_date}}</td>
                        <td><a href="/admin/view/result/tester/choice/id={{$id}}/em={{$item->id_em}}/type={{$type}}"><button>View</button></a></td>
                    </tr>

                    @endforeach

            </table>




        <div class="row cs">

                <div class="align-right fade1">

                    <a href="/admin/view/test" ><button type="button" class="m-1">Main Menu</button></a>
                    <a href="/admin/view/result/{{$id}}"><button>Back</button></a>


                </div>

        </div>

        </div>





@endsection
