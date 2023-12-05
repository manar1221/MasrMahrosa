<section class="ccourses">

    <h1 class="cheading text-center p-3 text-light fw-bolder shadow" style="background-color: #8e44ad;"> بيانات الحالة </h1>

    <div class="cbox-container text-end vh-100" style="text-align: right;">
       <div class="card">
         <div class="card-body m-5">
            <table class="table fw-bolder fs-3 table-bordered  table-responsive">
                <thead class="table-light">
                   <tr>
                      <th scope="col"> <h2>  {{$case->case_id}} </h2> </th>
                    <th scope="col"> <h2> كود الحالة  </h2> </th>
                    </tr>
                    <tr>
                        <th scope="col"> <h2> {{$case->name}} </h2></th>
                        <th scope="col"> <h2> اسم الحالة </h2> </th>
                    </tr>
                    <tr>
                        <th scope="col"> <h2> {{$case->national_id}} </h2></th>
                        <th scope="col"> <h2>  الرقم القومي </h2> </th>
                    </tr>
                    <tr>
                        <th scope="col"> <h2> {{$case->age}} </h2></th>
                        <th scope="col"> <h2> السن </h2> </th>
                    </tr>
                    <tr>
                        <th scope="col"> <h2> {{$case->phone}} </h2></th>
                        <th scope="col"> <h2> المحمول </h2> </th>
                    </tr>
                    <tr>
                        <th scope="col"> <h2> {{$case->period}} </h2></th>
                        <th scope="col"> <h2> مدة الالتحاق بالمنارة </h2> </th>
                    </tr>
                    <tr>
                        <th scope="col"> <h2> {{$case->address}} </h2></th>
                        <th scope="col"> <h2> العنوان </h2> </th>
                    </tr>
                </thead>
            </table>

            <h1 class="text-center m-5"> المسكن </h1>
           <table class="table fw-bolder fs-3 table-bordered  table-responsive">
            <thead class="table-light">
               <tr>
                  <th scope="col"> <h2>  {{$case->home_add}} </h2> </th>
                <th scope="col"> <h2> المنطقة السكنية  </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->home_status}} </h2></th>
                    <th scope="col"> <h2> نوع السكن </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->home_des}} </h2></th>
                    <th scope="col"> <h2>  وصف السكن </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->room_no}} </h2></th>
                    <th scope="col"> <h2>  عدد الحجرات  </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->bathroom}} </h2></th>
                    <th scope="col"> <h2> موقف دورة المياه </h2> </th>
                </tr>
            </thead>
          </table>

           <h1 class="text-center m-5">  الأجهزة الكهربائية </h1>
           <table class="table fw-bolder fs-3 table-bordered  table-responsive">
            <thead class="table-light">
               <tr>
                  <th scope="col"> ملاحظات </th>
                  <th scope="col"> الحالة </th>
                  <th scope="col"> العدد </th>
                  <th scope="col"> الجهاز </th>
                </tr>
            </thead>
            <tbody>
               <tr>
                  <td> {{$case->gas_stove_note}} </td>
                  <td> {{$case->gas_stove_status}} </td>
                  <td> {{$case->number_of_gas_stove}} </td>
                  <td> بوتاجاز </td>
                </tr>

                <tr>
                  <td> {{$case->washing_machine_note}} </td>
                  <td> {{$case->washing_machine_status}} </td>
                  <td> {{$case->washing_machine_no}} </td>
                  <td> غسالة </td>
                </tr>

                <tr>
                  <td> {{$case->Refrigerator_note}} </td>
                  <td> {{$case->Refrigerator_status}} </td>
                  <td> {{$case->Refrigerator_no}} </td>
                  <td> ثلاجة </td>
                </tr>

               <tr>
                  <td> {{$case->tv_note}} </td>
                  <td> {{$case->tv_status}} </td>
                  <td> {{$case->tv_no}} </td>
                  <td> تلفزيون </td>
                </tr>

                <tr>
                  <td> {{$case->fans_note}} </td>
                  <td> {{$case->fans_status}} </td>
                  <td> {{$case->fans_no}} </td>
                  <td> مراوح </td>
                </tr>

                <tr>
                  <td> {{$case->heater_note}} </td>
                  <td> {{$case->heater_status}} </td>
                  <td> {{$case->heater_no}} </td>
                  <td> سخان </td>
                </tr>

            </tbody>
          </table>

           <h1 class="text-center m-5">   الاثاث </h1>
           <table class="table fw-bolder fs-3 table-bordered table-responsive">
            <thead class="table-light">
               <tr>
                  <th scope="col"> ملاحظات </th>
                  <th scope="col"> مدي الكفاية </th>
                  <th scope="col"> الحالة </th>
                  <th scope="col"> العدد </th>
                  <th scope="col"> البند </th>
                </tr>
            </thead>
            <tbody>
               <tr>
                  <td> {{$case->bed_note}} </td>
                  <td> {{$case->bed_enough}} </td>
                  <td> {{$case->bed_status}} </td>
                  <td> {{$case->bed_no}} </td>
                  <td> السرير </td>
                </tr>

                <tr>
                  <td> {{$case->cupboard_note}} </td>
                  <td> {{$case->cupboard_enough}} </td>
                  <td> {{$case->cupboard_status}} </td>
                  <td> {{$case->cupboard_no}} </td>
                  <td> الدولاب </td>
                </tr>

                <tr>
                  <td> {{$case->living_note}} </td>
                  <td> {{$case->living_enough}} </td>
                  <td> {{$case->living_status}} </td>
                  <td> {{$case->living_no}} </td>
                  <td> الانتريه </td>
                </tr>

                <tr>
                  <td> {{$case->chair_note}} </td>
                  <td> {{$case->chair_enough}} </td>
                  <td> {{$case->chair_status}} </td>
                  <td> {{$case->chair_no}} </td>
                  <td> كرسي </td>
                </tr>

                <tr>
                  <td> {{$case->table_note}} </td>
                  <td> {{$case->table_enough}} </td>
                  <td> {{$case->table_status}} </td>
                  <td> {{$case->table_no}} </td>
                  <td> سفرة </td>
                </tr>

            </tbody>
          </table>

           <h1 class="text-center m-5">  حالة السكن </h1>
           <table class="table fw-bolder fs-3 table-bordered  table-responsive">
            <thead class="table-light">
               <tr>
                  <th scope="col"> ملاحظات </th>
                  <th scope="col"> الحالة </th>
                  <th scope="col"> البند </th>
                </tr>
            </thead>
            <tbody>
               <tr>
                  <td> {{$case->Plumbing_note}} </td>
                  <td> {{$case->Plumbing_status}} </td>
                  <td> السباكة </td>
                </tr>

                <tr>
                  <td> {{$case->elec_note}} </td>
                  <td> {{$case->elec_status}} </td>
                  <td> الكهرباء </td>
                </tr>

                <tr>
                  <td> {{$case->Carpentry_note}} </td>
                  <td> {{$case->Carpentry_status}} </td>
                  <td> النجارة </td>
                </tr>

               <tr>
                  <td> {{$case->Restorations_note}} </td>
                  <td> {{$case->Restorations_status}} </td>
                  <td> الترميمات </td>
                </tr>

            </tbody>
          </table>

           <h1 class="text-center m-5">   الحالة الاجتماعية للأسرة </h1>
           <table class="table fw-bolder fs-3 table-bordered  table-responsive">
            <thead class="table-light">
               <tr>
                  <th scope="col"> <h2>  {{$case->breadwinner}} </h2> </th>
                <th scope="col"> <h2>  عائل الأسرة  </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->mother_status}} </h2></th>
                    <th scope="col"> <h2> الحالة الاجتماعية للام </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->divorce_date}} </h2></th>
                    <th scope="col"> <h2>  تاريخ الطلاق </h2> </th>
                </tr>
            </thead>
          </table>

           <h1 class="text-center m-5">  المقيمين بالسكن وعلاقاتهم </h1>
           <table class="table fw-bolder fs-3 table-bordered  table-responsive">
            <thead class="table-light">
               <tr>
                  <th scope="col"> <h2>  {{$case->Resident_name1}} </h2> </th>
                <th scope="col"> <h2> الاسم </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->Resident_age1}} </h2></th>
                    <th scope="col"> <h2>  السن </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->Resident_relate1}} </h2></th>
                    <th scope="col"> <h2>  درجة القرابـة  </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->Resident_job1}} </h2></th>
                    <th scope="col"> <h2>  المهنــة </h2> </th>
                </tr>
            </thead>
          </table>

           <h1 class="text-center m-5">  الحالة التعليمية </h1>
           <table class="table fw-bolder fs-3 table-bordered  table-responsive">
            <thead class="table-light">
               <tr>
                  <th scope="col"> <h2>  {{$case->edu_level}} </h2> </th>
                <th scope="col"> <h2>   مستوي التعليم للعائل  </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->reed_write_status}} </h2></th>
                    <th scope="col"> <h2> في حالة الامية مدي قدرته علي القراءة والكتابة </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->reed_write_want}} </h2></th>
                    <th scope="col"> <h2> في حال الأمية مدي الرغبة في التعليم </h2> </th>
                </tr>
            </thead>
          </table>

           <h1 class="text-center m-5">  مستوي التعليم للابناء </h1>
           <table class="table fw-bolder fs-3 table-bordered  table-responsive">
            <thead class="table-light">
               <tr>
                  <th scope="col"> <h2>  {{$case->child1_name}} </h2> </th>
                <th scope="col"> <h2> الاسم </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->child1_level}} </h2></th>
                    <th scope="col"> <h2>  الصف </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->child1_school}} </h2></th>
                    <th scope="col"> <h2> المدرسة </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->child1_edu_level}} </h2></th>
                    <th scope="col"> <h2>  المستوى الدراسي راسب -ضعيف- مقبول -جيد- جيد جدا- ممتاز  </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->child1_need}} </h2></th>
                    <th scope="col"> <h2> احتياجات الطالب </h2> </th>
                </tr>
            </thead>
          </table>

           <h1 class="text-center m-5">  الحالة الصحية </h1>
           <table class="table fw-bolder fs-3 table-bordered  table-responsive">
            <thead class="table-light">
               <tr>
                  <th scope="col"> <h2>  {{$case->health_status}} </h2> </th>
                <th scope="col"> <h2>  الحالة الصحية للعائل  </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->treatment}} </h2></th>
                    <th scope="col"> <h2>  دورية صرف العلاج </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->treatment_status}} </h2></th>
                    <th scope="col"> <h2>  كيفية توفير العلاج للأسرة </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->treatment_not_subscribed}} </h2></th>
                    <th scope="col"> <h2>  هل هناك أحد من أفراد الأسرة غير مشترك في التأمين الصحي  </h2> </th>
                </tr>
            </thead>
          </table>

           <h1 class="text-center m-5">  الحالة الصحية للاسرة </h1>
           <table class="table fw-bolder fs-3 table-bordered  table-responsive">
            <thead class="table-light">
               <tr>
                  <th scope="col"> <h2>  {{$case->health_name1}} </h2> </th>
                <th scope="col"> <h2>  الاسم </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->health_status1}} </h2></th>
                    <th scope="col"> <h2>  الحالة الصحية  </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->illness1}} </h2></th>
                    <th scope="col"> <h2>  تشخيص المرض  </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->need1}} </h2></th>
                    <th scope="col"> <h2>   الاحتياج  </h2> </th>
                </tr>
            </thead>
          </table>

           <h1 class="text-center m-5">  الجانب التربوي </h1>
           <table class="table fw-bolder fs-3 table-bordered  table-responsive">
            <thead class="table-light">
               <tr>
                  <th scope="col"> <h2>  {{$case->problem_solve}} </h2> </th>
                <th scope="col"> <h2>   طريقة العائل في التعامل مع المشكلات   </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->child_reward}} </h2></th>
                    <th scope="col"> <h2>طريقة مكافأة الأبناء  </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->help_problem}} </h2></th>
                    <th scope="col"> <h2>  افراد يستعان بهم في حل المشكلات </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->problems}} </h2></th>
                    <th scope="col"> <h2>  هل يوجد مشكلات مع الجيران او الاقارب او اخرين  </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->what_problems}} </h2></th>
                    <th scope="col"> <h2> ماهي المشكلات </h2> </th>
                </tr>
            </thead>
          </table>

           <h1 class="text-center m-5">  الحالة الاقتصادية </h1>
           <table class="table fw-bolder fs-3 table-bordered  table-responsive">
            <thead class="table-light">
               <tr>
                     <h2> :  الإيرادات الشهرية  </h2>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->expense_dad}} </h2></th>
                    <th scope="col"> <h2>   نفقة من الاب  </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->salary}} </h2></th>
                    <th scope="col"> <h2>   راتب </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->manara_help}} </h2></th>
                    <th scope="col"> <h2>   مساعدات المنارة   </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->revenues_total}} </h2></th>
                    <th scope="col"> <h2>  إجمالى  </h2> </th>
                </tr>
            </thead>
          </table>

          <table class="table fw-bolder fs-3 table-bordered  table-responsive">
            <thead class="table-light">
               <tr>
                     <h2 class="mt-5"> :  المصروفات الشهرية  </h2>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->rent}} </h2></th>
                    <th scope="col"> <h2>  إيجار شامل الكهرباءوالماء   </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->tube}} </h2></th>
                    <th scope="col"> <h2>   أنبوبة </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->feed}} </h2></th>
                    <th scope="col"> <h2>    تغذية   </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->transfers}} </h2></th>
                    <th scope="col"> <h2>  انتقالات  </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->expenses_total}} </h2></th>
                    <th scope="col"> <h2>  إجمالى  </h2> </th>
                </tr>
            </thead>
          </table>

          <table class="table fw-bolder fs-3 table-bordered mt-5 table-responsive">
            <thead class="table-light">
                <tr>
                    <th scope="col"> <h2> {{$case->breadwinner_job}} </h2></th>
                    <th scope="col"> <h2>  وظيفة عائل الاسرة   </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->old_projects}} </h2></th>
                    <th scope="col"> <h2>   هل هناك سابقة اقامة مشروعات  </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->project_type}} </h2></th>
                    <th scope="col"> <h2>  في حالة الاجابة بنعم يذكر نوع المشروع   </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->project_want}} </h2></th>
                    <th scope="col"> <h2>   مدي رغبة العائل في اقامة مشروع   </h2> </th>
                </tr>
                <tr>
                    <th scope="col"> <h2> {{$case->project_want_type}} </h2></th>
                    <th scope="col"> <h2>   نوع المشروع المقترح   </h2> </th>
                </tr>
            </thead>
          </table>

         </div>
       </div>
    </div>
 </section>
