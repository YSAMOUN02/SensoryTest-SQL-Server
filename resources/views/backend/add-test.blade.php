@extends('backend.master-admin')
@section('content')
    
<div class="title-page">
    <span>Test for Testing</span>
  </div>
  <div class="dashboard-body">
    <div class="dashboard-body-sub">
      <form action="/admin/add/test/submit" method="POST">
        @csrf
        <div class="row mt-3">
          <div class="sub-left">
            <label for="">Test Title</label>
            <input class="form-control" type="text" name="title">
          </div>
          <div class="sub-right">
            <label for="">Test Status</label>
            <select name="status" class="form-control" id="">
              <option value="1">Active</option>
              <option value="0">Finished</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="sub-left">
            <label for="">For Date</label>
            <input type="date" class="form-control" name="due-date">
          </div>
          <div class="sub-right">

          </div>
        </div>

        
        <div class="row mt-3">
          <div class="sub-left">
            <input type="text" name="product1" id="product1" class="d-none">
        
            <label for="">Add Product For Testing</label>
            <button class="button-add" type="button" onclick="refill_data_table()" >...</button>
          </div>
          <div class="sub-right">
            <label for="">Add Method For Testing</label>
            <button class="button-add" type="button" onclick="refill_data_table_method()">...</button>
          </div>

        </div>

        <div class="row">
          <div class="full-sub">
            <div class="extent-text">
       
          </div>
        </div>
    </div>
      <div class="row mt-5">
        <div class="col-2 mt-3 mb-5"><button>Submit</button></div>
      </div>
  </div>
  <div class="add-product">
    <div class="sub-add-product">
      <div class="inner-add-product">
        <center>
          <h1>Add Product</h1>
        </center>
        <table class="align-middle" id="table-select-product">
          <tr>
            <th>ID</th>
            <th>Code</th>
            <th>Item Name</th>
            <th>variant</th>
            <th>Lot No</th>
            <th>Category</th>
            <th>Lot Tracking code</th>
            <th>Remove</th>
          </tr>
        </table>
        <label for="">Select Item For Test</label>
        <label for=""><span class="text-danger" id="max-product">Max product on selection</span></label>
        <select name="" class="form-control" onchange="select_data_change()" style="width: 90%;" id="select-option">

          <option value=""></option>
        </select>
        <input type="text" class="form-control" style="width: 90%;"  id="search-add-product"
          placeholder="Search....">
        <button onclick="close_panel_add_product() " onmouseover="fade_diff()" type="button">Back</button>
      </div>
    </div>
  </div>
  <div class="add-method">
    <div class="sub-add-method">
      <div class="inner-add-method">
        <center>
          <h1>Add Test Method</h1>
        </center>
        <table class="align-middle" id="table-select-method">
          <tr>
            <th>ID</th>
            <th>Test</th>
            <th width="20%">Remove</th>
          </tr>
        </table>
        <label for="">Select Test Method For Test &ensp; </label>
        <label for=""><span class="text-danger" id="test-max">Test Max</span></label>
        <label for=""><span class="text-danger" id="test-select-product-first">Select Product First</span></label>
        <select  class="form-control" onchange="method_select()" style="width: 90%;"
          id="select-method-option">
          <option value=""></option>
          <option value="1">Duo-Trio Test (ស្វែងរកផលិតផលដែលដូចផលិតផលគោល​ឬ Lot គោល ក្នុងចំណោមផលិតផលផ្សេង)</option>
          <option value="2">Triangle Test Method(ស្វែងរកផលិតផលដែលខុស ពី ផលិតផលគោល)</option>
          <option value="3">Category Scale (ដាក់ពិន្ទុលើផលិតផលគោល ឬ ផលិតផលផ្សេងទៀត)</option>
          <option value="4">Ranking Test (តម្រៀបផលិតផលគោលនិង ផលិតផលផ្សេងទៀត​ តាមចំណាត់ថ្នាក់)</option>
        </select>
        <button onclick="close_panel_add_method() " type="button">Back</button>
      </div>

    </div>

  </div>
              <div class="test-info-diff info">
                <button type="button" onclick="close_info_diff()"><i class="fa-solid fa-xmark"></i></button>
                <div class="inner-test-info-diff"> 
                <div class="text-danger fs-3"><u>Triangle Test</u></div> 
                <div class="text-danger fs-4 mt-3">អត្តន័យ</div>
              
                &ensp;&ensp;Triangle Test គឺជាការធ្វើតេស្តដោយញ្ញាណ ដែលយើងត្រូវបង្ហាញ​ អ្នកចូលរួមជាមួយនឹងគំរូចំនួនបី ដែលពីរគឺដូចគ្នាបេះបិទ ហើយត្រូវអោយអ្នកតេស្តកំណត់អត្តសញ្ញាណគំរូមួយណាដែលខុសពីគេ។

                
                <div class="text-danger fs-4 mt-3">គោលបំណង</div>
                <p>&ensp;&ensp;គោលបំណងចម្បងគឺដើម្បីវាយតម្លៃថាតើមានភាពខុសប្លែកគ្នាខាងញ្ញាណអារម្មណ៍ដែលអាចរកឃើញរវាងផលិតផល ឬសំណាកពីរ។ 
                ការធ្វើតេស្តនេះមានប្រយោជន៍ជាពិសេសក្នុងការអភិវឌ្ឍន៍ផលិតផល ការត្រួតពិនិត្យគុណភាព និងការស្រាវជ្រាវទីផ្សារ 
                ដើម្បីធានាបាននូវភាពស៊ីសង្វាក់គ្នានៃការបង្កើតផលិតផល ឬដើម្បីវាយតម្លៃផលប៉ះពាល់នៃការផ្លាស់ប្តូរគ្រឿងផ្សំ វិធីសាស្រ្តកែច្នៃ ឬការវេចខ្ចប់លើគុណលក្ខណៈអារម្មណ៍។
                </p>
                <br>
                <div class="text-danger fs-4 ">របៀបដំណើរការ</div>

                <div class="fs-5 mt-3">I.ការរៀបចំគំរូ</div>

                
                
                &ensp;&ensp;សំណាកពីរគឺដូចគ្នាបេះបិទ ចំណែកឯសំណាកទីបីគឺខុសគេ។ អ្នកចូលរួមមិនត្រូវបានជូនដំណឹងអំពីលក្ខណៈនៃភាពខុសគ្នារវាងគំរូនោះទេ។
                <div class="fs-5 mt-3">II.ការរៀបគំរូអោយចៃដន្យ</div>

                &ensp;&ensp;សំណាកគំរូត្រូវបានបង្ហាញដល់អ្នកចូលរួមក្នុងលំដាប់ចៃដន្យដើម្បីការពារការលំអៀងណាមួយដែលទាក់ទងនឹងលំដាប់នៃការបង្ហាញ។ បើសិនជាដាក់ Label អោយមានការវង្វេងកាន់តែមានប្រសិទ្ធភាព។
                <div class="fs-5 mt-3">III.ការណែនាំដល់អ្នកចូលរួម</div>


                &ensp;&ensp;អ្នកចូលរួមត្រូវបានណែនាំឱ្យវាយតម្លៃគំរូ និងកំណត់អត្តសញ្ញាណដែលខុសពីគេដោយផ្អែកលើលក្ខណៈនៃញ្ញាណដូចជា រសជាតិ ក្លិន វាយនភាព រូបរាង ឬលក្ខណៈដែលពាក់ព័ន្ធផ្សេងទៀត។ ជាធម្មតា ពួកគេត្រូវបានផ្តល់ការណែនាំច្បាស់លាស់ និងត្រូវបានស្នើឱ្យផ្តោតលើការរកឃើញភាពខុសគ្នាគួរឱ្យកត់សម្គាល់ណាមួយ។
                <div class="fs-5 mt-3">IV.ការប្រមូលទិន្នន័យ</div>

                &ensp;&ensp;អ្នកចូលរួមបង្ហាញពីជម្រើសរបស់ពួកគេដោយជ្រើសរើសគំរូដែលពួកគេយល់ថាខុសគ្នា។ ទិន្នន័យដែលប្រមូលបានរួមមានចំនួននៃការកំណត់អត្តសញ្ញាណត្រឹមត្រូវ និងមិនត្រឹមត្រូវ។

                <div class="fs-5 mt-3">V.ការជ្រើសរើសអ្នកវិភាគ</div>
                &ensp;ជ្រើសរើសក្រុម​អ្នកវិភាគដែលបានបណ្តុះបណ្តាល ។ បុគ្គល​ទាំងនេះ​គួរ​មាន​ការ​យល់​ឃើញ​យ៉ាង​ខ្លាំង ហើយ​ស៊ាំ​នឹង​លក្ខណៈ​ដែល​ត្រូវ និងការ​វាយ​តម្លៃ។


                <div class="text-danger fs-4 mt-3">ឧទាហរណ៍</div>
                &ensp;&ensp;យើងមាន ផលិតផល ៣  Label : A  ,  B ,  C
              <br>
              &ensp;&ensp;រួចអោយអ្នកតេស្ត តេស្តដោយញាណ លើផលិតផលទាំង ៣ រួចអោយអ្នកតេស្តរើសយកគំរូណាដែលខុសគេ
              គំរូផលិតផលដែលខុសគេមានតែមួយប៉ុណ្ណោះ ហើយកំណត់ដោយ Admin system បើសិនជាអ្នកតេស្តជ្រើសរើសត្រឺមត្រូវ នោះភាគរយនៃលទ្ធផលនីងផ្លាស់ប្តូរ។

                </div>

            </div>



            <div class="test-info-same info">
              <button type="button" onclick="close_info_same()"><i class="fa-solid fa-xmark"></i></button>
              <div class="inner-test-info-same"> 
              <div class="text-danger fs-3"><u>Duo-Trio Test</u></div> 
              <div class="text-danger fs-4 mt-3">អត្តន័យ</div>
            
              &ensp;&ensp;Duo-Trio Test គឺជាការតេស្ដស្វែងរក ផលិតផលណាដែលមានគុណលក្ខណះ ដូចទៅនិងគំរូគោលដែលមាន។

              <div class="text-danger fs-4 mt-3">គោលបំណង</div>
              <p>&ensp;&ensp;
                ការធ្វើតេស្ត Duo-Trio គឺដើម្បីកំណត់ថាតើមានភាពខុសគ្នាដែលអាចយល់បានរវាងគំរូពីរឬអត់។ វិធីសាស្រ្តនេះជារឿយៗត្រូវបានប្រើប្រាស់ដើម្បីវាយតម្លៃការផ្លាស់ប្តូរក្នុងទម្រង់បែបបទ វិធីសាស្រ្តកែច្នៃ ឬគ្រឿងផ្សំ និងដើម្បីធានាបាននូវភាពស៊ីសង្វាក់គ្នា និងការត្រួតពិនិត្យគុណភាពនៅក្នុងផលិតផលម្ហូបអាហារ។

              </p>
              <br>
              <div class="text-danger fs-4 ">របៀបដំណើរការ</div>

              <div class="fs-5 mt-3">I.ការរៀបចំគំរូ</div>

              &ensp;រៀបចំសំណាកចំនួនបី - ពីរដែលដូចគ្នាបេះបិទ​ និងមួយទៀតដែលខុសគេ។ 
              
              <div class="fs-5 mt-3">II.ការរៀបគំរូអោយចៃដន្យ</div>

              &ensp;សំណាកគំរូត្រូវបានបង្ហាញដល់អ្នកចូលរួមក្នុងលំដាប់ចៃដន្យ (Random) ដើម្បីការពារការលំអៀងណាមួយដែលទាក់ទងនឹងលំដាប់នៃការបង្ហាញ។ បើសិនជាដាក់ Label អោយមានការវង្វេងកាន់តែមានប្រសិទ្ធភាព ការដាក់ label នេះអាចដាក់ ៤ ទៅ ៥ អក្ស។
              <div class="fs-5 mt-3">III.ការណែនាំដល់អ្នកចូលរួម</div>


              &ensp;អ្នកចូលរួមត្រូវបានណែនាំឱ្យវាយតម្លៃគំរូ ជ្រើរើសលើគំរូណាមួយជាដាច់ខាត ដែលយល់ឃើញថាសមស្រប និងកំណត់អត្តសញ្ញាណដែលខុសពីគេដោយផ្អែកលើលក្ខណៈនៃញ្ញាណដូចជា រសជាតិ ក្លិន រូបរាង ឬលក្ខណៈដែលពាក់ព័ន្ធផ្សេងទៀត។ ជាធម្មតា ពួកគេត្រូវបានផ្តល់ការណែនាំច្បាស់លាស់ និងត្រូវបានស្នើឱ្យផ្តោតលើការរកឃើញភាពខុសគ្នាគួរឱ្យកត់សម្គាល់ណាមួយ។
              <div class="fs-5 mt-3">IV.ការប្រមូលទិន្នន័យ</div>

              &ensp;អ្នកចូលរួមបង្ហាញពីជម្រើសរបស់ពួកគេដោយជ្រើសរើសគំរូដែលពួកគេយល់ថា ដូចទៅនិងគំរូគោល។ ទិន្នន័យដែលប្រមូលបានរួមមានចំនួននៃការកំណត់អត្តសញ្ញាណត្រឹមត្រូវ និងមិនត្រឹមត្រូវ។
              
              <div class="fs-5 mt-3">V.ការជ្រើសរើសអ្នកវិភាគ</div>
              &ensp;ជ្រើសរើសក្រុម​អ្នកវិភាគដែលបានបណ្តុះបណ្តាល ។ បុគ្គល​ទាំងនេះ​គួរ​មាន​ការ​យល់​ឃើញ​យ៉ាង​ខ្លាំង ហើយ​ស៊ាំ​នឹង​លក្ខណៈ​ដែល​ត្រូវ និងការ​វាយ​តម្លៃ។
              <div class="text-danger fs-4 mt-3">ឧទាហរណ៍</div>
              &ensp;&ensp;យើងមាន ផលិតផល ៣  Label : A  ,  B ,  C រួចប្រាប់អ្នកតេស្ដ គំរូគោលមួយណា
            <br>
            &ensp;&ensp;រួចអោយអ្នកតេស្ត តេស្តដោយញាណ លើផលិតផលទាំង ៣ បន្ទាប់មកអោយអ្នកតេស្តរើសយក​១គំរូ ក្នុងចំណោមគំរូ ២ ដែលមានលក្វណះដូចនិងគំរូគោល
            គំរូផលិតផលដែលដូចនិងគំរូគោលមានតែមួយប៉ុណ្ណោះ ហើយកំណត់ដោយ Admin system បើសិនជាអ្នកតេស្តជ្រើសរើសត្រឺមត្រូវ នោះភាគរយនៃលទ្ធផលនីងផ្លាស់ប្តូរ។

              </div>

          </div>

          <div class="test-info-rank info">
            <button type="button" onclick="close_info_rank()"><i class="fa-solid fa-xmark"></i></button>
            <div class="inner-test-info-rank"> 
            <div class="text-danger fs-3"><u>Ranking Test</u></div> 
            <div class="text-danger fs-4 mt-3">អត្តន័យ</div>
          
            &ensp;&ensp;The Ranking Test គឺជាវិធីសាស្រ្តដែលប្រើដើម្បីវាយតម្លៃ និងប្រៀបធៀបសំណុំនៃធាតុដោយផ្អែកលើការយល់ឃើញពីគុណភាព ឬចំណូលចិត្តរបស់ពួកគេ។ វាពាក់ព័ន្ធនឹងការផ្តល់ចំណាត់ថ្នាក់ទៅធាតុនីមួយៗនៅក្នុងសំណុំ ពីគុណភាពដែលពេញចិត្តបំផុត ឬគុណភាពខ្ពស់បំផុតទៅគុណភាពដែលពេញចិត្តតិចបំផុត ឬទាបបំផុត។

            <div class="text-danger fs-4 mt-3">គោលបំណង</div>
            <p>&ensp;&ensp;
              ការធ្វើតេស្ត The Ranking Test គោលបំណងគឺដើម្បីកំណត់ចំណូលចិត្តដែលទាក់ទង ឬគុណភាពនៃផលិតផលផ្សេងៗគ្នានៅក្នុងចំណោមផលិតផលទាំងអស់ ។ ការធ្វើតេស្តនេះជួយក្នុងការកំណត់ថាផលិតផលមួយណាមានគុណភាពល្អជាងផលិតផលមួយណា ក្នុងចំណោមផលិតផលដែលមាន ដើម្បីប្រៀបធៀបលើគុណភាព ឬ គុណលក្ខណះផ្សេងណាមួយ នៃផលិតផលនីមួយៗ។ វាអាចត្រូវបានប្រើក្នុងវិស័យផ្សេងៗដូចជា ការស្រាវជ្រាវទីផ្សារ ការអភិវឌ្ឍន៍ផលិតផល និងការវាយតម្លៃ sensory evaluation ដើម្បីស្វែងយល់ពីចំណូលចិត្តរបស់អ្នកប្រើប្រាស់ បង្កើនប្រសិទ្ធភាពលក្ខណៈពិសេសផលិតផល ។
            </p>
            <br>
            <div class="text-danger fs-4 ">របៀបដំណើរការ</div>

            <div class="fs-5 mt-3">I.ការរៀបចំគំរូ</div>

            &ensp;រៀបចំសំណាកចំនួនបី  ដែលមានជាប្រភេទផលិតផលតែមួយ តែគុណលក្ខណះខុសៗគ្នា ដូចជា lot batch ឬ  ផ្សេងទៀត ដើម្បីប្រៀបធៀបលើគុណភាព ឬ គុណលក្ខណះណាមួយ​ នៃផលិតផលទាំងនោះ ។ 
            
            <div class="fs-5 mt-3">II.ការរៀបគំរូអោយចៃដន្យ</div>

            &ensp;សំណាកគំរូត្រូវបានបង្ហាញដល់អ្នកចូលរួមក្នុងលំដាប់ចៃដន្យ (Random) ដើម្បីការពារការលំអៀងណាមួយដែលទាក់ទងនឹងលំដាប់នៃការបង្ហាញ។ បើសិនជាដាក់ Label អោយមានការវង្វេងកាន់តែមានប្រសិទ្ធភាព ការដាក់ label នេះអាចដាក់ ៤ ទៅ ៥ អក្ស។
            <div class="fs-5 mt-3">III.ការណែនាំដល់អ្នកចូលរួម</div>


            &ensp;អ្នកចូលរួមត្រូវបានណែនាំឱ្យវាយតម្លៃគំរូ អោយរៀបគំរូតាមលំដាប់ ដែលយល់ឃើញថាសមស្រប និងកំណត់ចំណាត់ថ្នាក់ផលិតផលដោយផ្អែកលើលក្ខណៈនៃញ្ញាណដូចជា រសជាតិ ក្លិន រូបរាង ឬលក្ខណៈដែលពាក់ព័ន្ធផ្សេងទៀត។ ជាធម្មតា ពួកគេត្រូវបានផ្តល់ការណែនាំច្បាស់លាស់ និងត្រូវបានស្នើឱ្យផ្តោតលើការរកឃើញភាពខុសគ្នាគួរឱ្យកត់សម្គាល់ណាមួយ។
            <div class="fs-5 mt-3">IV.ការប្រមូលទិន្នន័យ</div>

            &ensp;អ្នកចូលរួមបង្ហាញពីជម្រើសរបស់ពួកគេដោយផ្ដល់ចំណាត់ថ្នាក់គំរូដែលពួកគេយល់ឃើញ ។ ទិន្នន័យដែលប្រមូលបានរួមមាន ចំនួនភាគរយនៃ ផលិតផលនីមួយៗតាម ចំណាត់ថ្នាក់នីមួយៗ។
            
            <div class="fs-5 mt-3">V.ការជ្រើសរើសអ្នកវិភាគ</div>
            &ensp;ជ្រើសរើសក្រុម​អ្នកវិភាគដែលបានបណ្តុះបណ្តាល ។ បុគ្គល​ទាំងនេះ​គួរ​មាន​ការ​យល់​ឃើញ​យ៉ាង​ខ្លាំង ហើយ​ស៊ាំ​នឹង​លក្ខណៈ​ដែល​ត្រូវ និងការ​វាយ​តម្លៃ។
            <div class="text-danger fs-4 mt-3">ឧទាហរណ៍</div>
            &ensp;&ensp;យើងមាន ផលិតផល ៣  Label : A  ,  B ,  C 
          <br>
          &ensp;&ensp;រួចអោយអ្នកតេស្ត ផ្ដល់ចំណាត់ថ្នាក់ដោយចាប់ទាញគំរូដាក់តាមចំណាត់ថ្នាក់ឌែលមាន  ចំណាត់ថ្នាក់ដែលត្រឺមត្រូវគឺកំណត់ដោយ Admin system បើសិនជាអ្នកតេស្តជ្រើសរើសត្រឺមត្រូវ នោះភាគរយនៃលទ្ធផលនីងផ្លាស់ប្តូរ។

            </div>

        </div>



        <div class="test-info-rating info">
          <button type="button" onclick="close_info_rating()"><i class="fa-solid fa-xmark"></i></button>
          <div class="inner-test-info-rating"> 
          <div class="text-danger fs-3"><u>Category Scale</u></div> 
          <div class="text-danger fs-4 mt-3">អត្តន័យ</div>
        
          &ensp;&ensp;គឺជាការតេស្ដ វាស់វែងស្ទង់មតិ គុណលក្ខណះរបស់ផលិតផលនីមួយៗ ចាត់​ថ្នាក់​ជា​ក្រុម ឬ​ប្រភេទ​ផ្សេង​ៗ  ដែលអ្នកតេស្ដត្រូវផ្ដល់ពិន្ទុ លើគុណលក្ខណះនីមួយៗ ពី ១​ (មិនចូលចិត្តខ្លាំង)  ទៅ ៩ (ចូលចិត្ដខ្លាំង) ។  ឧ. ក្លិន រសជាតិ ការវេចខ្ចប់ រូបរាង ភាពស្រួយ កំរិតអាកុល ភាពចូលចិត្តជាដើម។
          
          
          <div class="text-danger fs-4 mt-3">គោលបំណង</div>
          <p>
            Ease of Responding: It simplifies the response process for participants as they only need to select from predefined options.
            <br>
            Standardization: Helps in standardizing responses, making it easier to analyze and interpret the data.
            <br>
              Quantification: Allows for quantification of qualitative data, making it suitable for statistical analysis.</p>
          <br>
          <div class="text-danger fs-4 ">របៀបដំណើរការ</div>

          &ensp;a. Define Categories: Determine the categories that best represent the variable you are measuring. These categories should be mutually exclusive and collectively exhaustive. For example, if you are measuring satisfaction with a product, categories could be "Very Satisfied," "Satisfied," "Neutral," "Dissatisfied," and "Very Dissatisfied."

          &ensp;b. Determine Scale Range: Decide on the range of the scale. This could be nominal (no inherent order), ordinal (ordered categories), interval (equal intervals between categories), or ratio (has a true zero point).
          <br>
          &ensp;c. Design the Question: Phrase the question clearly and concisely, instructing respondents to select the category that best represents their response. For example, "How satisfied are you with our customer service?" with response options listed below.
          <br>
          &ensp;d. Present Response Options: Present the response options clearly and consistently. This can be done through radio buttons, checkboxes, or dropdown menus, depending on the survey platform or format.
          <br>
          &ensp;e. Pilot Testing: Before deploying the survey, conduct a pilot test to ensure that the category scale is well understood by respondents and that the response options cover the range of possible responses adequately.
          <br>
          &ensp;f. Data Analysis Plan: Plan how you will analyze the data collected using the category scale. Depending on your research questions and the type of data collected, you may use descriptive statistics, chi-square tests, or other statistical methods.
          <div class="text-danger fs-4 mt-3">ឧទាហរណ៍</div>
          &ensp;&ensp;យើងមាន ផលិតផល ៣  Label : A  ,  B ,  C 
        <br>
        &ensp;&ensp;រួចអោយអ្នកតេស្ត ផ្ដល់ពិន្ទុ ១ ទៅ ៩ លើ រសជាត់នៃ   A B C ។ លទ្ធផលនិងផ្លាស់ប្តូតាមពិន្ទុសរុបនៃចំនួនអ្នកជ្រើសរើស។
          </div>

      </div>
</div>



<script>
    function click_show_same(){
    document.querySelector(".test-info-same").style.display = "block";
  }
    function close_info_same(){
    document.querySelector(".test-info-same").style.display = "none";
  }
  function click_show_diff(){
    document.querySelector(".test-info-diff").style.display = "block";
  }
  function close_info_diff(){
    document.querySelector(".test-info-diff").style.display = "none";
  }


  function click_show_rank(){
    document.querySelector(".test-info-rank").style.display = "block";
  }
    function close_info_rank(){
    document.querySelector(".test-info-rank").style.display = "none";
  }

  function click_show_rating(){
    document.querySelector(".test-info-rating").style.display = "block";
  }
    function close_info_rating(){
    document.querySelector(".test-info-rating").style.display = "none";
  }
   var product = @JSON($product);
// Refill select Value in select All product
function refill_option(options) {
    var select_value = document.getElementById("select-option");
    select_value.innerHTML = `
    <option value="">Select Product \xA0\xA0  ↓</option>
    `;

    options.forEach(function (optionText) {
        var option = document.createElement("option");
        option.value = JSON.stringify({id: optionText['id'], code: optionText['code'], name: optionText['name'],variant: optionText['variant'], lot: optionText['lot'], category: optionText['category'], track: optionText['track'] });
        option.text = "ID:\xA0" + optionText['id'] + "\xA0\xA0Item Code:\xA0" + optionText['code'] + "\xA0\xA0\xA0Name:\xA0" + optionText['name'] + "\xA0\xA0\xA0Lot:\xA0" + optionText['lot'] + "\xA0\xA0\xA0Category:\xA0" + optionText['category']+"\xA0\xA0\xA0Lot Tracking:\xA0" + optionText['track'];
        select_value.appendChild(option);
    });
}




    refill_option(product)
    var rownum = 0;
    function select_data_change() {
        var selectElement = document.getElementById("select-option");
        var selectedIndex = selectElement.selectedIndex;

        if (selectedIndex !== -1) {
            // Get the selected option's value (JSON string)
            var selectedValue = selectElement.options[selectedIndex].value;

            // Parse the JSON string to get the object
            var selectedData = JSON.parse(selectedValue);

            var product_table_select = document.getElementById("table-select-product");

            if (rownum < 4) {

                if (selectedData != "") {
                    product_table_select.innerHTML += `
                            <tr >
                                <td>${selectedData.id}</td>
                                <td>${selectedData.code}</td>
                                <td>${selectedData.name}</td>
                                <td>${selectedData.variant}</td>
                                <td>${selectedData.lot}</td>
                                <td>${selectedData.category}</td>
                                <td>${selectedData.track}</td>
                                <td><button onclick="removeRow(this,${rownum})">Remove</button></td>
                            </tr>
                        `;

                    rownum += 1;
                    array_product.push(selectedData);

                    var arrayAsString = array_product.map(obj => obj.id).join(',');
                    var product1Input = document.getElementById("product1");
                    product1Input.value = arrayAsString;

                    same_test_option_same(array_product);
                    same_test_option_ranking(array_product);
                    same_test_option_rating(array_product);
                    same_test_option_difference(array_product);
                }

            }
            else {
                document.querySelector("#max-product").style.display = "block";

            }
        } else {
            alert("No option selected");
    }
}


document.querySelector("#search-add-product").addEventListener("keyup", function () {

  var search = this.value.toLowerCase();
  var new_arr_add_product = product.filter(function (val) {

    if(val.name == null){
        val.name = "";

    }

    if(val.code == null){
        val.code = "";
    }
    if(val.description == null){
        val.description = "";
    }
    if(val.category == null){
        val.category = "";
    }
    if(val.lot == null){
        val.lot = "";
    }
    if(val.size == null){
        val.size = "";
    }

    if (
        (val.id.toString().includes(search) && val.id != null) ||
        (val.name.toLowerCase().includes(search) && val.name != null) ||
        (val.code.toLowerCase().includes(search) && val.code != null) ||
        (val.description.toLowerCase().includes(search) && val.description != null) ||
        (val.category.toLowerCase().includes(search) && val.category != null) ||
        (val.lot.toLowerCase().includes(search) && val.lot != null) ||
        (val.size.toLowerCase().includes(search) && val.size != null)
    ) {

        var new_obj = {

            id: val.id,
            variant : val.variant,
            name: val.name,
            code: val.code,
            description: val.description,
            category: val.category,
            lot : val.lot,
            size : val.size
        };
        return new_obj;
    }
});

refill_option(new_arr_add_product)
});















  </script>
@endsection