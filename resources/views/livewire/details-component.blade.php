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
           <table class="table fw-bolder fs-3 table-bordered table-responsive">
             <thead class="table-light">
                <tr>
                   <th scope="col">  المهنــة  </th>
                   <th scope="col">  درجة القرابـة  </th>
                   <th scope="col"> السن </th>
                   <th scope="col"> الاسم </th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                   <td> {{$family->Resident_job1}} </td>
                   <td> {{$family->Resident_relate1}} </td>
                   <td> {{$family->Resident_age1}} </td>
                   <td> {{$family->Resident_name1}} </td>
                 </tr>

                 <tr>
                   <td> {{$family->Resident_job2}} </td>
                   <td> {{$family->Resident_relate2}} </td>
                   <td> {{$family->Resident_age2}} </td>
                   <td> {{$family->Resident_name2}} </td>
                 </tr>

                 <tr>
                   <td> {{$family->Resident_job3}} </td>
                   <td> {{$family->Resident_relate3}} </td>
                   <td> {{$family->Resident_age3}} </td>
                   <td> {{$family->Resident_name3}} </td>
                 </tr>

                 <tr>
                   <td> {{$family->Resident_job4}} </td>
                   <td> {{$family->Resident_relate4}} </td>
                   <td> {{$family->Resident_age4}} </td>
                   <td> {{$family->Resident_name4}} </td>
                 </tr>

                 <tr>
                    <td> {{$family->Resident_job5}} </td>
                    <td> {{$family->Resident_relate5}} </td>
                    <td> {{$family->Resident_age5}} </td>
                    <td> {{$family->Resident_name5}} </td>
                  </tr>

                  <tr>
                    <td> {{$family->Resident_job6}} </td>
                    <td> {{$family->Resident_relate6}} </td>
                    <td> {{$family->Resident_age6}} </td>
                    <td> {{$family->Resident_name6}} </td>
                  </tr>

             </tbody>
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
           <table class="table fw-bolder fs-3 table-bordered table-responsive">
             <thead class="table-light">
                <tr>
                   <th scope="col">  احتياجات الطالب  </th>
                   <th scope="col">  المستوى الدراسي راسب -ضعيف- مقبول -جيد- جيد جدا- ممتاز </th>
                   <th scope="col"> المدرسة </th>
                   <th scope="col"> الصف </th>
                   <th scope="col"> الاسم </th>
                 </tr>
             </thead>
             <tbody>
                <tr>
                   <td> {{$family->child1_need}} </td>
                   <td> {{$family->child1_edu_level}} </td>
                   <td> {{$family->child1_school}} </td>
                   <td> {{$family->child1_level}}  </td>
                   <td>  {{$family->child1_name}}  </td>
                 </tr>

                 <tr>
                   <td> {{$family->child2_need}} </td>
                   <td> {{$family->child2_edu_level}} </td>
                   <td> {{$family->child2_school}} </td>
                   <td>  {{$family->child2_level}}  </td>
                   <td>  {{$family->child2_name}}  </td>
                 </tr>

                 <tr>
                   <td> {{$family->child3_need}} </td>
                   <td> {{$family->child3_edu_level}} </td>
                   <td> {{$family->child3_school}} </td>
                   <td>  {{$family->child3_level}}  </td>
                   <td>  {{$family->child3_name}}  </td>
                 </tr>

                 <tr>
                   <td> {{$family->child4_need}} </td>
                   <td> {{$family->child4_edu_level}} </td>
                   <td> {{$family->child4_school}} </td>
                   <td>  {{$family->child4_level}}  </td>
                   <td>  {{$family->child4_name}}  </td>
                 </tr>

                 <tr>
                   <td> {{$family->child5_need}} </td>
                   <td> {{$family->child5_edu_level}} </td>
                   <td> {{$family->child5_school}} </td>
                   <td> {{$family->child5_level}} </td>
                   <td>  {{$family->child5_name}}  </td>
                 </tr>

                 <tr>
                   <td> {{$family->child6_need}} </td>
                   <td> {{$family->child6_edu_level}} </td>
                   <td> {{$family->child6_school}} </td>
                   <td> {{$family->child6_level}} </td>
                   <td>  {{$family->child6_name}}  </td>
                 </tr>

             </tbody>
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
           <table class="table fw-bolder fs-3 table-bordered table-responsive">
             <thead class="table-light">
                <tr>
                   <th scope="col"> الاحتياج </th>
                   <th scope="col">  تشخيص المرض  </th>
                   <th scope="col">  الحالة الصحية  </th>
                   <th scope="col"> الاسم </th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                   <td> {{$family->need1}} </td>
                   <td> {{$family->illness1}} </td>
                   <td> {{$family->health_status1}} </td>
                   <td> {{$family->health_name1}} </td>
                 </tr>

                 <tr>
                   <td> {{$family->need2}} </td>
                   <td> {{$family->illness2}} </td>
                   <td> {{$family->health_status2}} </td>
                   <td> {{$family->health_name2}} </td>
                 </tr>

                 <tr>
                   <td> {{$family->need3}} </td>
                   <td> {{$family->illness3}} </td>
                   <td> {{$family->health_status3}} </td>
                   <td> {{$family->health_name3}} </td>
                 </tr>

                 <tr>
                   <td> {{$family->need4}} </td>
                   <td> {{$family->illness4}} </td>
                   <td> {{$family->health_status4}} </td>
                   <td> {{$family->health_name4}} </td>
                 </tr>

                 <tr>
                    <td> {{$family->need5}} </td>
                    <td> {{$family->illness5}} </td>
                    <td> {{$family->health_status5}} </td>
                    <td> {{$family->health_name5}} </td>
                  </tr>

                  <tr>
                    <td> {{$family->need6}} </td>
                    <td> {{$family->illness6}} </td>
                    <td> {{$family->health_status6}} </td>
                    <td> {{$family->health_name6}} </td>
                  </tr>

             </tbody>
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
