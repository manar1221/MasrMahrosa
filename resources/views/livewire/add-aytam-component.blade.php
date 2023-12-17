<section class="ccourses">

    <h1 class="cheading text-center p-3 text-light fw-bolder shadow" style="background-color: #8e44ad;"> المطلقات </h1>

    <div class="cbox-container text-end vh-100" style="text-align: right;">
     <div class="card">
       <div class="card-header">
          <div class="row">
             <div class="col-md-6">
                <a href="{{route('cases')}}" class="cbtn float-start w-25 text-decoration-none">  كل الحالات </a>
            </div>
             <div class="col-md-6 fw-bolder fs-1">
                البيانات الشخصية (الاساسية) لعائل الأسرة
             </div>
         </div>
       </div>
       <div class="card-body">
        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @endif
          <form wire:submit.prevent="addCase">
             <div class="m-5">
                <label for="case_id" class="from-lable fw-bolder fs-3"> كود الحالة </label>
                <input type="text" name="case_id" class="form-control text-end fs-3" placeholder="" wire:model="case_id">
                @error('case_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
             </div>

             <div class="m-5">
                 <label for="name" class="form-label fw-bolder fs-3"> الاسم </label>
                 <input type="text" name="name" class="form-control text-end fs-3" placeholder="" wire:model="name">
                 @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
             </div>

             <div class="m-5">
                <label for="national_id" class="from-lable fw-bolder fs-3"> الرقم القومي </label>
                <input type="text" name="national_id" class="form-control text-end fs-3" placeholder="" wire:model="national_id">
                @error('national_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

             <div class="m-5">
                 <label for="age" class="from-lable fw-bolder fs-3"> السن </label>
                 <input type="text" name="age" class="form-control text-end fs-3" placeholder="" wire:model="age">
                 @error('age')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
             </div>

             <div class="m-5">
                <label for="phone" class="from-lable fw-bolder fs-3"> المحمول </label>
                <input type="text" name="phone" class="form-control text-end fs-3" placeholder="" wire:model="phone">
                @error('phone')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
             </div>

             <div class="m-5">
                <label for="period" class="from-lable fw-bolder fs-3"> مدة الالتحاق بالمنارة </label>
                <input type="text" name="period" class="form-control text-end fs-3" placeholder="" wire:model="period">
                @error('period')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
             </div>

             <div class="m-5">
                 <label for="address" class="from-lable fw-bolder fs-3"> العنوان </label>
                 <textarea class="form-control text-end fs-3" name="address" placeholder="" wire:model="address" ></textarea>
                 @error('address')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
             </div>

             <h1 class="text-center"> المسكن  </h1>

             <div class="m-5">
                <label for="home_add" class="form-lable fw-bolder fs-3"> المنطقة السكنية  </label>
                <select name="home_add" id="" class="form-control text-end fs-3" wire:model="home_add">
                    <option value="مدينة"> مدينة </option>
                    <option value="عشوائية"> عشوائية </option>
                </select>
                @error('home_add')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
             </div>

             <div class="m-5">
                <label for="home_status" class="form-lable fw-bolder fs-3">  نوع السكن   </label>
                <select name="home_status" id="" class="form-control text-end fs-3" wire:model="home_status">
                    <option value="ايجار جديد"> ايجار جديد </option>
                    <option value="ايجار قديم"> ايجار قديم </option>
                    <option value="بيت العائلة"> بيت العائلة </option>
                </select>
                @error('home_status')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
             </div>

             <div class="m-5">
                <label for="home_des" class="form-lable fw-bolder fs-3">  وصف السكن   </label>
                <select name="home_des" id="" class="form-control text-end fs-3" wire:model="home_des">
                    <option value="صحي"> صحي </option>
                    <option value="غير صحي"> غير صحي </option>
                </select>
                @error('home_des')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
             </div>

             <div class="m-5">
                <label for="room_no" class="form-lable fw-bolder fs-3"> عدد الحجرات </label>
                <select name="room_no" id="" class="form-control text-end fs-3" wire:model="room_no">
                    <option value="حجرة واحدة"> حجرة واحدة </option>
                    <option value="حجرتين"> حجرتين </option>
                    <option value="ثلاثة فاكثر"> ثلاثة فاكثر </option>
                </select>
                @error('room_no')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
             </div>

             <div class="m-5">
                <label for="bathroom" class="form-lable fw-bolder fs-3"> موقف دورة المياه  </label>
                <select name="bathroom" id="" class="form-control text-end fs-3" wire:model="bathroom">
                    <option value="خاصة"> خاصة </option>
                    <option value="مشتركة"> مشتركة </option>
                </select>
                @error('bathroom')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
             </div>

             <h1 class="text-center"> محتويات السكن </h1>
             <h1 class="text-end"> : الأجهزة الكهربائية  </h1>
             <div class="d-flex flex-fill">
                <div class="m-5 bg-secondary bg-opacity-25 p-3">
                   <h1> بوتاجاز </h1>
                   <label for="number_of_gas_stove" class="form-lable fw-bolder fs-3"> العدد </label>
                   <select name="number_of_gas_stove" id="" class="form-control text-end fs-3" wire:model="number_of_gas_stove">
                      <option value="0"> 0 </option>
                      <option value="1"> 1 </option>
                      <option value="2"> 2 </option>
                   </select>
                   @error('number_of_gas_stove')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

                   <label for="gas_stove_status" class="form-lable fw-bolder fs-3"> الحالة </label>
                   <select name="gas_stove_status" id="" class="form-control text-end fs-3" wire:model="gas_stove_status">
                      <option value="سليمة"> سليمة  </option>
                      <option value="غير سليمة"> غير سليمة </option>
                   </select>
                   @error('gas_stove_status')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

                   <label for="gas_stove_note" class="form-lable fw-bolder fs-3"> ملاحظات </label>
                   <textarea class="form-control text-end fs-3" name="gas_stove_note" placeholder="" wire:model="gas_stove_note"></textarea>
                   @error('gas_stove_note')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror
                </div>

                <div class="m-5 bg-secondary bg-opacity-25 p-3">
                   <h1> غسالة </h1>
                   <label for="washing_machine_no" class="form-lable fw-bolder fs-3"> العدد </label>
                   <select name="washing_machine_no" id="" class="form-control text-end fs-3" wire:model="washing_machine_no">
                      <option value="0"> 0 </option>
                      <option value="1"> 1 </option>
                      <option value="2"> 2 </option>
                   </select>
                   @error('washing_machine_no')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="washing_machine_status" class="form-lable fw-bolder fs-3"> الحالة </label>
                   <select name="washing_machine_status" id="" class="form-control text-end fs-3" wire:model="washing_machine_status">
                      <option value="سليمة"> سليمة  </option>
                      <option value="غير سليمة"> غير سليمة </option>
                   </select>
                   @error('washing_machine_status')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="washing_machine_note" class="form-lable fw-bolder fs-3"> ملاحظات </label>
                   <textarea class="form-control text-end fs-3" name="washing_machine_note" placeholder="" wire:model="washing_machine_note"></textarea>
                   @error('washing_machine_note')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="m-5 bg-secondary bg-opacity-25 p-3">
                   <h1> ثلاجة </h1>
                   <label for="Refrigerator_no" class="form-lable fw-bolder fs-3"> العدد </label>
                   <select name="Refrigerator_no" id="" class="form-control text-end fs-3" wire:model="Refrigerator_no">
                      <option value="0"> 0 </option>
                      <option value="1"> 1 </option>
                      <option value="2"> 2 </option>
                   </select>
                   @error('Refrigerator_no')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="Refrigerator_status" class="form-lable fw-bolder fs-3"> الحالة </label>
                   <select name="Refrigerator_status" id="" class="form-control text-end fs-3" wire:model="Refrigerator_status">
                      <option value="سليمة"> سليمة  </option>
                      <option value="غير سليمة"> غير سليمة </option>
                   </select>
                   @error('Refrigerator_status')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="Refrigerator_note" class="form-lable fw-bolder fs-3"> ملاحظات </label>
                   <textarea class="form-control text-end fs-3" name="Refrigerator_note" placeholder="" wire:model="Refrigerator_note"></textarea>
                   @error('Refrigerator_note')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="m-5 bg-secondary bg-opacity-25 p-3">
                   <h1> تلفزيون </h1>
                   <label for="tv_no" class="form-lable fw-bolder fs-3"> العدد </label>
                   <select name="tv_no" id="" class="form-control text-end fs-3" wire:model="tv_no">
                      <option value="0"> 0 </option>
                      <option value="1"> 1 </option>
                      <option value="2"> 2 </option>
                   </select>
                   @error('tv_no')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="tv_status" class="form-lable fw-bolder fs-3"> الحالة </label>
                   <select name="tv_status" id="" class="form-control text-end fs-3" wire:model="tv_status">
                      <option value="سليمة"> سليمة  </option>
                      <option value="غير سليمة"> غير سليمة </option>
                   </select>
                   @error('tv_status')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="tv_note" class="form-lable fw-bolder fs-3"> ملاحظات </label>
                   <textarea class="form-control text-end fs-3" name="tv_note" placeholder="" wire:model="tv_note"></textarea>
                   @error('tv_note')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="m-5 bg-secondary bg-opacity-25 p-3">
                   <h1> مراوح </h1>
                   <label for="fans_no" class="form-lable fw-bolder fs-3"> العدد </label>
                   <select name="fans_no" id="" class="form-control text-end fs-3" wire:model="fans_no">
                      <option value="0"> 0 </option>
                      <option value="1"> 1 </option>
                      <option value="2"> 2 </option>
                   </select>
                   @error('fans_no')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="fans_status" class="form-lable fw-bolder fs-3"> الحالة </label>
                   <select name="fans_status" id="" class="form-control text-end fs-3" wire:model="fans_status">
                      <option value="سليمة"> سليمة  </option>
                      <option value="غير سليمة"> غير سليمة </option>
                   </select>
                   @error('fans_status')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="fans_note" class="form-lable fw-bolder fs-3"> ملاحظات </label>
                   <textarea class="form-control text-end fs-3" name="fans_note" placeholder="" wire:model="fans_note"></textarea>
                   @error('fans_note')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="m-5 bg-secondary bg-opacity-25 p-3">
                   <h1> سخان </h1>
                   <label for="heater_no" class="form-lable fw-bolder fs-3"> العدد </label>
                   <select name="heater_no" id="" class="form-control text-end fs-3" wire:model="heater_no">
                      <option value="0"> 0 </option>
                      <option value="1"> 1 </option>
                      <option value="2"> 2 </option>
                   </select>
                   @error('heater_no')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="heater_status" class="form-lable fw-bolder fs-3"> الحالة </label>
                   <select name="heater_status" id="" class="form-control text-end fs-3" wire:model="heater_status">
                      <option value="سليمة"> سليمة  </option>
                      <option value="غير سليمة"> غير سليمة </option>
                   </select>
                   @error('heater_status')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="heater_note" class="form-lable fw-bolder fs-3"> ملاحظات </label>
                   <textarea class="form-control text-end fs-3" name="heater_note" placeholder="" wire:model="heater_note"></textarea>
                   @error('heater_note')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
             </div>

             <h1 class="text-end"> : الاثاث  </h1>
             <div class="d-flex flex-fill">
                <div class="m-5 bg-secondary bg-opacity-25 p-3">
                   <h1> السرير </h1>
                   <label for="bed_no" class="form-lable fw-bolder fs-3"> العدد </label>
                   <select name="bed_no" id="" class="form-control text-end fs-3" wire:model="bed_no">
                      <option value="0"> 0 </option>
                      <option value="1"> 1 </option>
                      <option value="2"> 2 </option>
                   </select>
                   @error('bed_no')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="bed_status" class="form-lable fw-bolder fs-3"> الحالة </label>
                   <select name="bed_status" id="" class="form-control text-end fs-3" wire:model="bed_status">
                      <option value="سليمة"> سليمة  </option>
                      <option value="غير سليمة"> غير سليمة </option>
                   </select>
                   @error('bed_status')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="bed_enough" class="form-lable fw-bolder fs-3"> مدي الكفاية </label>
                   <select name="bed_enough" id="" class="form-control text-end fs-3" wire:model="bed_enough">
                      <option value="كافى"> كافى  </option>
                      <option value="غير كافى"> غير كافى </option>
                   </select>
                   @error('bed_enough')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="bed_note" class="form-lable fw-bolder fs-3"> ملاحظات </label>
                   <textarea class="form-control text-end fs-3" name="bed_note" placeholder="" wire:model="bed_note"></textarea>
                   @error('bed_note')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="m-5 bg-secondary bg-opacity-25 p-3">
                   <h1> الدولاب </h1>
                   <label for="cupboard_no" class="form-lable fw-bolder fs-3"> العدد </label>
                   <select name="cupboard_no" id="" class="form-control text-end fs-3" wire:model="cupboard_no">
                      <option value="0"> 0 </option>
                      <option value="1"> 1 </option>
                      <option value="2"> 2 </option>
                   </select>
                   @error('cupboard_no')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="cupboard_status" class="form-lable fw-bolder fs-3"> الحالة </label>
                   <select name="cupboard_status" id="" class="form-control text-end fs-3" wire:model="cupboard_status">
                      <option value="سليمة"> سليمة  </option>
                      <option value="غير سليمة"> غير سليمة </option>
                   </select>
                   @error('cupboard_status')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="cupboard_enough" class="form-lable fw-bolder fs-3"> مدي الكفاية </label>
                   <select name="cupboard_enough" id="" class="form-control text-end fs-3" wire:model="cupboard_enough">
                      <option value="كافى"> كافى  </option>
                      <option value="غير كافى"> غير كافى </option>
                   </select>
                   @error('cupboard_enough')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="cupboard_note" class="form-lable fw-bolder fs-3"> ملاحظات </label>
                   <textarea class="form-control text-end fs-3" name="cupboard_note" placeholder="" wire:model="cupboard_note"></textarea>
                   @error('cupboard_note')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="m-5 bg-secondary bg-opacity-25 p-3">
                   <h1> الانتريه </h1>
                   <label for="living_no" class="form-lable fw-bolder fs-3"> العدد </label>
                   <select name="living_no" id="" class="form-control text-end fs-3" wire:model="living_no">
                      <option value="0"> 0 </option>
                      <option value="1"> 1 </option>
                      <option value="2"> 2 </option>
                   </select>
                   @error('living_no')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="living_status" class="form-lable fw-bolder fs-3"> الحالة </label>
                   <select name="living_status" id="" class="form-control text-end fs-3" wire:model="living_status">
                      <option value="سليمة"> سليمة  </option>
                      <option value="غير سليمة"> غير سليمة </option>
                   </select>
                   @error('living_status')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="living_enough" class="form-lable fw-bolder fs-3"> مدي الكفاية </label>
                   <select name="living_enough" id="" class="form-control text-end fs-3" wire:model="living_enough">
                      <option value="كافى"> كافى  </option>
                      <option value="غير كافى"> غير كافى </option>
                   </select>
                   @error('living_enough')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="living_note" class="form-lable fw-bolder fs-3"> ملاحظات </label>
                   <textarea class="form-control text-end fs-3" name="living_note" placeholder="" wire:model="living_note"></textarea>
                   @error('living_note')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="m-5 bg-secondary bg-opacity-25 p-3">
                   <h1> كرسي </h1>
                   <label for="chair_no" class="form-lable fw-bolder fs-3"> العدد </label>
                   <select name="chair_no" id="" class="form-control text-end fs-3" wire:model="chair_no">
                      <option value="0"> 0 </option>
                      <option value="1"> 1 </option>
                      <option value="2"> 2 </option>
                   </select>
                   @error('chair_no')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="chair_status" class="form-lable fw-bolder fs-3"> الحالة </label>
                   <select name="chair_status" id="" class="form-control text-end fs-3" wire:model="chair_status">
                      <option value="سليمة"> سليمة  </option>
                      <option value="غير سليمة"> غير سليمة </option>
                   </select>
                   @error('chair_status')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="chair_enough" class="form-lable fw-bolder fs-3"> مدي الكفاية </label>
                   <select name="chair_enough" id="" class="form-control text-end fs-3" wire:model="chair_enough">
                      <option value="كافى"> كافى  </option>
                      <option value="غير كافى"> غير كافى </option>
                   </select>
                   @error('chair_enough')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="chair_note" class="form-lable fw-bolder fs-3"> ملاحظات </label>
                   <textarea class="form-control text-end fs-3" name="chair_note" placeholder="" wire:model="chair_note"></textarea>
                   @error('chair_note')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="m-5 bg-secondary bg-opacity-25 p-3">
                   <h1> سفرة </h1>
                   <label for="table_no" class="form-lable fw-bolder fs-3"> العدد </label>
                   <select name="table_no" id="" class="form-control text-end fs-3" wire:model="table_no">
                      <option value="0"> 0 </option>
                      <option value="1"> 1 </option>
                      <option value="2"> 2 </option>
                   </select>
                   @error('table_no')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="table_status" class="form-lable fw-bolder fs-3"> الحالة </label>
                   <select name="table_status" id="" class="form-control text-end fs-3" wire:model="table_status">
                      <option value="سليمة"> سليمة  </option>
                      <option value="غير سليمة"> غير سليمة </option>
                   </select>
                   @error('table_status')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="table_enough" class="form-lable fw-bolder fs-3"> مدي الكفاية </label>
                   <select name="table_enough" id="" class="form-control text-end fs-3" wire:model="table_enough">>
                      <option value="كافى"> كافى  </option>
                      <option value="غير كافى"> غير كافى </option>
                   </select>
                   @error('table_enough')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="table_note" class="form-lable fw-bolder fs-3"> ملاحظات </label>
                   <textarea class="form-control text-end fs-3" name="table_note" placeholder="" wire:model="table_note"></textarea>
                   @error('table_note')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
             </div>

             <h1 class="text-end"> : حالة السكن  </h1>
             <div class="d-flex flex-fill">
                <div class="m-5 bg-secondary bg-opacity-25 p-3">
                   <h1> السباكة </h1>
                   <label for="Plumbing_status" class="form-lable fw-bolder fs-3"> الحالة </label>
                   <select name="Plumbing_status" id="" class="form-control text-end fs-3" wire:model="Plumbing_status">
                      <option value="سليمة"> سليمة  </option>
                      <option value="غير سليمة"> غير سليمة </option>
                   </select>
                   @error('Plumbing_status')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="Plumbing_note" class="form-lable fw-bolder fs-3"> ملاحظات </label>
                   <textarea class="form-control text-end fs-3" name="Plumbing_note" placeholder="" wire:model="Plumbing_note"></textarea>
                   @error('Plumbing_note')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="m-5 bg-secondary bg-opacity-25 p-3">
                   <h1> الكهرباء </h1>
                   <label for="elec_status" class="form-lable fw-bolder fs-3"> الحالة </label>
                   <select name="elec_status" id="" class="form-control text-end fs-3" wire:model="elec_status">
                      <option value="سليمة"> سليمة  </option>
                      <option value="غير سليمة"> غير سليمة </option>
                   </select>
                   @error('elec_status')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="elec_note" class="form-lable fw-bolder fs-3"> ملاحظات </label>
                   <textarea class="form-control text-end fs-3" name="elec_note" placeholder="" wire:model="elec_note"></textarea>
                   @error('elec_note')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="m-5 bg-secondary bg-opacity-25 p-3">
                   <h1> النجارة  </h1>
                   <label for="Carpentry_status" class="form-lable fw-bolder fs-3"> الحالة </label>
                   <select name="Carpentry_status" id="" class="form-control text-end fs-3" wire:model="Carpentry_status">
                      <option value="سليمة"> سليمة  </option>
                      <option value="غير سليمة"> غير سليمة </option>
                   </select>
                   @error('Carpentry_status')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="Carpentry_note" class="form-lable fw-bolder fs-3"> ملاحظات </label>
                   <textarea class="form-control text-end fs-3" name="Carpentry_note" placeholder="" wire:model="Carpentry_note"></textarea>
                   @error('Carpentry_note')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="m-5 bg-secondary bg-opacity-25 p-3">
                   <h1> الترميمات </h1>
                   <label for="Restorations_status" class="form-lable fw-bolder fs-3"> الحالة </label>
                   <select name="Restorations_status" id="" class="form-control text-end fs-3" wire:model="Restorations_status">
                      <option value="سليمة"> سليمة  </option>
                      <option value="غير سليمة"> غير سليمة </option>
                   </select>
                   @error('Restorations_status')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

                   <label for="Restorations_note" class="form-lable fw-bolder fs-3"> ملاحظات </label>
                   <textarea class="form-control text-end fs-3" name="Restorations_note" placeholder="" wire:model="Restorations_note"></textarea>
                   @error('Restorations_note')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
             </div>

             <h1 class="text-center"> الحالة الاجتماعية للأسرة  </h1>
             <label for="breadwinner" class="form-lable fw-bolder fs-3"> عائل الأسرة </label>
                   <select name="breadwinner" id="" class="form-control text-end fs-3" wire:model="breadwinner">
                      <option value="الام"> الام  </option>
                      <option value="الجدة"> الجدة </option>
                      <option value="الخالة"> الخالة  </option>
                      <option value="العمة"> العمة </option>
                      <option value="اخرين"> اخرين </option>
                   </select>
                   @error('breadwinner')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

             <label for="mother_status" class="form-lable fw-bolder fs-3"> الحالة الاجتماعية للام </label>
                   <select name="mother_status" id="" class="form-control text-end fs-3" placeholder="" wire:model="mother_status">
                      {{-- <option value="ارملة >"ارملة  </option> --}}
                      <option value="مطلقة"> مطلقة </option>
                      <option value="هجر"> هجر </option>
                      <option value="متزوجة"> متزوجة </option>
                      <option value="اخري"> اخري </option>
                   </select>
                   @error('mother_status')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

             <label for="divorce_date" class="form-lable fw-bolder fs-3"> في حالة الطلاق تاريخ الطلاق  </label>
             <input type="date" name="divorce_date" class="form-control text-end fs-3" placeholder="" wire:model="divorce_date">
             @error('divorce_date')
             <p class="text-danger">{{ $message }}</p>
            @enderror

             <h1 class="text-center mt-3">  المقيمين بالسكن وعلاقاتهم   </h1>
             <table class="table fw-bolder fs-3 table-bordered table-responsive">
                <thead class="table-light">
                   <tr>
                      <th scope="col"> <label for="Resident_job1" class="form-lable fw-bolder fs-3">  المهنــة  </label> </th>
                      <th scope="col"> <label for="Resident_relate1" class="form-lable fw-bolder fs-3">  درجة القرابـة  </label> </th>
                      <th scope="col"> <label for="Resident_age1" class="form-lable fw-bolder fs-3">  السن  </label> </th>
                      <th scope="col"> <label for="Resident_name1" class="form-lable fw-bolder fs-3">  الاسم  </label> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>
                            <input type="text" name="Resident_job1" class="form-control text-end fs-3" placeholder="" wire:model="Resident_job1">
                            @error('Resident_job1')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </td>
                      <td>
                            <input type="text" name="Resident_relate1" class="form-control text-end fs-3" placeholder="" wire:model="Resident_relate1">
                            @error('Resident_relate1')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </td>
                      <td>
                            <input type="number" name="Resident_age1" class="form-control text-end fs-3" placeholder="" wire:model="Resident_age1">
                            @error('Resident_age1')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror

                    </td>
                      <td>  <input type="text" name="Resident_name1" class="form-control text-end fs-3" placeholder="" wire:model="Resident_name1">
                        @error('Resident_name1')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </td>
                    </tr>

                    <tr>
                      <td>
                            <input type="text" name="Resident_job2" class="form-control text-end fs-3" placeholder="" wire:model="Resident_job2">
                            @error('Resident_job2')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </td>
                      <td>
                            <input type="text" name="Resident_relate2" class="form-control text-end fs-3" placeholder="" wire:model="Resident_relate2">
                            @error('Resident_relate2')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </td>
                      <td>
                            <input type="number" name="Resident_age2" class="form-control text-end fs-3" placeholder="" wire:model="Resident_age2">
                            @error('Resident_age2')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror

                    </td>
                      <td>  <input type="text" name="Resident_name2" class="form-control text-end fs-3" placeholder="" wire:model="Resident_name2">
                        @error('Resident_name2')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </td>
                    </tr>

                    <tr>
                      <td>
                            <input type="text" name="Resident_job3" class="form-control text-end fs-3" placeholder="" wire:model="Resident_job3">
                            @error('Resident_job3')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </td>
                      <td>
                            <input type="text" name="Resident_relate3" class="form-control text-end fs-3" placeholder="" wire:model="Resident_relate3">
                            @error('Resident_relate3')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </td>
                      <td>
                            <input type="number" name="Resident_age3" class="form-control text-end fs-3" placeholder="" wire:model="Resident_age3">
                            @error('Resident_age3')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror

                    </td>
                      <td>  <input type="text" name="Resident_name3" class="form-control text-end fs-3" placeholder="" wire:model="Resident_name3">
                        @error('Resident_name3')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </td>
                    </tr>

                    <tr>
                      <td>
                            <input type="text" name="Resident_job4" class="form-control text-end fs-3" placeholder="" wire:model="Resident_job4">
                            @error('Resident_job4')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </td>
                      <td>
                            <input type="text" name="Resident_relate4" class="form-control text-end fs-3" placeholder="" wire:model="Resident_relate4">
                            @error('Resident_relate4')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </td>
                      <td>
                            <input type="number" name="Resident_age4" class="form-control text-end fs-3" placeholder="" wire:model="Resident_age4">
                            @error('Resident_age4')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror

                    </td>
                      <td>
                          <input type="text" name="Resident_name4" class="form-control text-end fs-3" placeholder="" wire:model="Resident_name4">
                            @error('Resident_name4')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                     </td>
                    </tr>
                </tbody>
              </table>

             <h1 class="text-center mt-3"> الحالة التعليمية  </h1>
             <label for="edu_level" class="form-lable fw-bolder fs-3"> مستوي التعليم للعائل </label>
                   <select name="edu_level" id="" class="form-control text-end fs-3" wire:model="edu_level">
                      <option value="مؤهل عالي"> مؤهل عالي </option>
                      <option value="شهاده الثانويه العام"> شهاده الثانويه العام </option>
                      <option value="مؤهل متوسط"> مؤهل متوسط </option>
                      <option value="شهادة محو امية"> شهادة محو امية </option>
                      <option value="امية"> امية </option>
                   </select>
                   @error('edu_level')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

             <label for="reed_write_status" class="form-lable fw-bolder fs-3"> في حالة الامية  مدي قدرته علي القراءة والكتابة </label>
                   <select name="reed_write_status" id="" class="form-control text-end fs-3" wire:model="reed_write_status">
                      <option value="تستطيع القراءة  "> تستطيع القراءة  </option>
                      <option value="لا تستطيع القراءة">  لا تستطيع القراءة </option>
                   </select>
                   @error('reed_write_status')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

             <label for="reed_write_want" class="form-lable fw-bolder fs-3"> في حالة الأمية مدي الرغبة في التعليم   </label>
                   <select name="reed_write_want" id="" class="form-control text-end fs-3" wire:model="reed_write_want">
                      <option value="ارغب"> ارغب </option>
                      <option value="لا ارغب"> لا ارغب </option>
                   </select>
                   @error('reed_write_want')
                   <p class="text-danger">{{ $message }}</p>
                  @enderror

             <h1 class="text-center mt-3"> مستوي التعليم للابناء </h1>
             <table class="table fw-bolder fs-3 table-bordered table-responsive">
                <thead class="table-light">
                   <tr>
                      <th scope="col">  <label for="child1_need" class="form-lable fw-bolder fs-3"> احتياجات الطالب </label>  </th>
                      <th scope="col">  <label for="child1_edu_level" class="form-lable fw-bolder fs-3"> المستوى الدراسي
                        راسب -ضعيف- مقبول -جيد- جيد جدا- ممتاز
                         </label>  </th>
                      <th scope="col">  <label for="child1_school" class="form-lable fw-bolder fs-3"> المدرسة </label>  </th>
                      <th scope="col"> <label for="child1_level" class="form-lable fw-bolder fs-3"> الصف </label> </th>
                      <th scope="col"> <label for="child1_name" class="form-lable fw-bolder fs-3"> الاسم </label> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>
                        <input type="text" name="child1_need" class="form-control text-end fs-3" placeholder="" wire:model="child1_need">
                        @error('child1_need')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                      </td>
                      <td>
                        <input type="text" name="child1_edu_level" class="form-control text-end fs-3" placeholder="" wire:model="child1_edu_level">
                            @error('child1_edu_level')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                      </td>
                      <td>
                        <input type="text" name="child1_school" class="form-control text-end fs-3" placeholder="" wire:model="child1_school">
                        @error('child1_school')
                              <p class="text-danger">{{ $message }}</p>
                             @enderror
                        </td>
                      <td>
                        <input type="text" name="child1_level" class="form-control text-end fs-3" placeholder="" wire:model="child1_level">
                        @error('child1_level')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                      </td>
                      <td>
                        <input type="text" name="child1_name" class="form-control text-end fs-3" placeholder="" wire:model="child1_name">
                        @error('child1_name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </td>
                    </tr>

                    <tr>
                      <td>
                        <input type="text" name="child2_need" class="form-control text-end fs-3" placeholder="" wire:model="child2_need">
                        @error('child2_need')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                      </td>
                      <td>
                        <input type="text" name="child2_edu_level" class="form-control text-end fs-3" placeholder="" wire:model="child2_edu_level">
                        @error('child2_edu_level')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                      </td>
                      <td>
                        <input type="text" name="child2_school" class="form-control text-end fs-3" placeholder="" wire:model="child2_school">
                        @error('child2_school')
                              <p class="text-danger">{{ $message }}</p>
                             @enderror
                        </td>
                      <td>
                        <input type="text" name="child2_level" class="form-control text-end fs-3" placeholder="" wire:model="child2_level">
                        @error('child2_level')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                      </td>
                      <td>
                        <input type="text" name="child2_name" class="form-control text-end fs-3" placeholder="" wire:model="child2_name">
                        @error('child2_name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </td>
                    </tr>

                    <tr>
                      <td>
                        <input type="text" name="child3_need" class="form-control text-end fs-3" placeholder="" wire:model="child3_need">
                        @error('child3_need')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                      </td>
                      <td>
                        <input type="text" name="child3_edu_level" class="form-control text-end fs-3" placeholder="" wire:model="child3_edu_level">
                        @error('child3_edu_level')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                      </td>
                      <td>
                        <input type="text" name="child3_school" class="form-control text-end fs-3" placeholder="" wire:model="child3_school">
                        @error('child3_school')
                              <p class="text-danger">{{ $message }}</p>
                             @enderror
                        </td>
                      <td>
                        <input type="text" name="child3_level" class="form-control text-end fs-3" placeholder="" wire:model="child3_level">
                        @error('child3_level')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                      </td>
                      <td>
                        <input type="text" name="child3_name" class="form-control text-end fs-3" placeholder="" wire:model="child3_name">
                        @error('child3_name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </td>
                    </tr>

                    <tr>
                      <td>
                        <input type="text" name="child4_need" class="form-control text-end fs-3" placeholder="" wire:model="child4_need">
                        @error('child4_need')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                      </td>
                      <td>
                        <input type="text" name="child4_edu_level" class="form-control text-end fs-3" placeholder="" wire:model="child4_edu_level">
                        @error('child4_edu_level')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                      </td>
                      <td>
                        <input type="text" name="child4_school" class="form-control text-end fs-3" placeholder="" wire:model="child4_school">
                        @error('child4_school')
                              <p class="text-danger">{{ $message }}</p>
                             @enderror
                        </td>
                      <td>
                        <input type="text" name="child4_level" class="form-control text-end fs-3" placeholder="" wire:model="child4_level">
                        @error('child4_level')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                      </td>
                      <td>
                        <input type="text" name="child4_name" class="form-control text-end fs-3" placeholder="" wire:model="child4_name">
                        @error('child4_name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </td>
                    </tr>

                    <tr>
                       <td>
                        <input type="text" name="child5_need" class="form-control text-end fs-3" placeholder="" wire:model="child5_need">
                        @error('child5_need')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                       </td>
                       <td>
                        <input type="text" name="child5_edu_level" class="form-control text-end fs-3" placeholder="" wire:model="child5_edu_level">
                        @error('child5_edu_level')
                              <p class="text-danger">{{ $message }}</p>
                             @enderror
                        </td>
                       <td>
                        <input type="text" name="child5_school" class="form-control text-end fs-3" placeholder="" wire:model="child5_school">
                        @error('child5_school')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                       </td>
                       <td>
                        <input type="text" name="child5_level" class="form-control text-end fs-3" placeholder="" wire:model="child5_level">
                        @error('child5_level')
                              <p class="text-danger">{{ $message }}</p>
                             @enderror

                        </td>
                       <td>
                         <input type="text" name="child5_name" class="form-control text-end fs-3" placeholder="" wire:model="child5_name">
                        @error('child5_name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </td>
                     </tr>

                     <tr>
                        <td>
                         <input type="text" name="child6_need" class="form-control text-end fs-3" placeholder="" wire:model="child6_need">
                         @error('child6_need')
                                 <p class="text-danger">{{ $message }}</p>
                             @enderror

                        </td>
                        <td>
                         <input type="text" name="child6_edu_level" class="form-control text-end fs-3" placeholder="" wire:model="child6_edu_level">
                         @error('child6_edu_level')
                               <p class="text-danger">{{ $message }}</p>
                              @enderror
                         </td>
                        <td>
                         <input type="text" name="child6_school" class="form-control text-end fs-3" placeholder="" wire:model="child6_school">
                         @error('child6_school')
                                 <p class="text-danger">{{ $message }}</p>
                             @enderror
                        </td>
                        <td>
                         <input type="text" name="child6_level" class="form-control text-end fs-3" placeholder="" wire:model="child6_level">
                         @error('child6_level')
                               <p class="text-danger">{{ $message }}</p>
                              @enderror

                         </td>
                        <td>
                          <input type="text" name="child6_name" class="form-control text-end fs-3" placeholder="" wire:model="child6_name">
                         @error('child6_name')
                                 <p class="text-danger">{{ $message }}</p>
                             @enderror
                         </td>
                      </tr>
                </tbody>
              </table>

             <h1 class="text-center mt-3"> الحالة الصحية </h1>
             <label for="health_status" class="form-lable fw-bolder fs-3"> الحالة  الصحية للعائل </label>
                   <select name="health_status" id="" class="form-control text-end fs-3" wire:model="health_status">
                      <option value="صحة جيدة"> صحة جيدة </option>
                      <option value="اصابات"> اصابات </option>
                      <option value="اعاقات"> اعاقات </option>
                      <option value="مرض مزمن"> مرض مزمن  </option>
                   </select>
                    @error('health_status')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <label for="treatment" class="form-lable fw-bolder fs-3"> دورية صرف العلاج </label>
                   <select name="treatment" id="" class="form-control text-end fs-3" wire:model="treatment">
                      <option value="منتظم شهري"> منتظم شهري </option>
                      <option value="غير منتظم"> غير منتظم </option>
                      <option value="لايوجد"> لايوجد </option>
                   </select>
                    @error('treatment')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <label for="treatment_status" class="form-lable fw-bolder fs-3"> كيفية  توفير العلاج للأسرة </label>
                   <select name="treatment_status" id="" class="form-control text-end fs-3" wire:model="treatment_status">
                      <option value="التامين الصحي"> التامين الصحي </option>
                      <option value="غير منتظم"> غير منتظم </option>
                      <option value="نفقة الدولة"> نفقة الدولة </option>
                      <option value="تبرع"> تبرع </option>
                      <option value="يتم شرائه علي نفقة الام"> يتم شرائه علي نفقة الام </option>
                   </select>
                    @error('treatment_status')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <label for="treatment_not_subscribed" class="form-lable fw-bolder fs-3"> هل هناك أحد من أفراد الأسرة غير مشترك في التأمين الصحي  </label>
                   <select name="treatment_not_subscribed" id="" class="form-control text-end fs-3" wire:model="treatment_not_subscribed">
                      <option value="نعم"> نعم  </option>
                      <option value="لا"> لا  </option>
                   </select>
                    @error('treatment_not_subscribed')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <h1 class="text-center mt-3"> الحالة الصحية للاسرة </h1>
             <table class="table fw-bolder fs-3 table-bordered table-responsive">
                <thead class="table-light">
                   <tr>
                      <th scope="col">  <label for="need1" class="form-lable fw-bolder fs-3"> الاحتياج </label>  </th>
                      <th scope="col">  <label for="illness1" class="form-lable fw-bolder fs-3"> تشخيص المرض </label>  </th>
                      <th scope="col"> <label for="health_status1" class="form-lable fw-bolder fs-3"> الحالة الصحية </label> </th>
                      <th scope="col"> <label for="health_name1" class="form-lable fw-bolder fs-3"> الاسم </label> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>
                        <input type="text" name="need1" class="form-control text-end fs-3" placeholder="" wire:model="need1">
                        @error('need1')
                              <p class="text-danger">{{ $message }}</p>
                             @enderror
                        </td>
                      <td>
                        <input type="text" name="illness1" class="form-control text-end fs-3" placeholder="" wire:model="illness1">
                        @error('illness1')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                      </td>
                      <td>
                        <input type="text" name="health_status1" class="form-control text-end fs-3" placeholder="" wire:model="health_status1">
                        @error('health_status1')
                              <p class="text-danger">{{ $message }}</p>
                             @enderror
                        </td>
                      <td>
                        <input type="text" name="health_name1" class="form-control text-end fs-3" placeholder="" wire:model="health_name1">
                        @error('health_name1')
                              <p class="text-danger">{{ $message }}</p>
                             @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>
                          <input type="text" name="need2" class="form-control text-end fs-3" placeholder="" wire:model="need2">
                          @error('need2')
                                <p class="text-danger">{{ $message }}</p>
                               @enderror
                          </td>
                        <td>
                          <input type="text" name="illness2" class="form-control text-end fs-3" placeholder="" wire:model="illness2">
                          @error('illness2')
                                  <p class="text-danger">{{ $message }}</p>
                              @enderror
                        </td>
                        <td>
                          <input type="text" name="health_status2" class="form-control text-end fs-3" placeholder="" wire:model="health_status2">
                          @error('health_status2')
                                <p class="text-danger">{{ $message }}</p>
                               @enderror
                          </td>
                        <td>
                          <input type="text" name="health_name2" class="form-control text-end fs-3" placeholder="" wire:model="health_name2">
                          @error('health_name2')
                                <p class="text-danger">{{ $message }}</p>
                               @enderror
                          </td>
                      </tr>
                      <tr>
                        <td>
                          <input type="text" name="need3" class="form-control text-end fs-3" placeholder="" wire:model="need3">
                          @error('need3')
                                <p class="text-danger">{{ $message }}</p>
                               @enderror
                          </td>
                        <td>
                          <input type="text" name="illness3" class="form-control text-end fs-3" placeholder="" wire:model="illness3">
                          @error('illness3')
                                  <p class="text-danger">{{ $message }}</p>
                              @enderror
                        </td>
                        <td>
                          <input type="text" name="health_status3" class="form-control text-end fs-3" placeholder="" wire:model="health_status3">
                          @error('health_status3')
                                <p class="text-danger">{{ $message }}</p>
                               @enderror
                          </td>
                        <td>
                          <input type="text" name="health_name3" class="form-control text-end fs-3" placeholder="" wire:model="health_name3">
                          @error('health_name3')
                                <p class="text-danger">{{ $message }}</p>
                               @enderror
                          </td>
                      </tr>
                      <tr>
                        <td>
                          <input type="text" name="need4" class="form-control text-end fs-3" placeholder="" wire:model="need4">
                          @error('need4')
                                <p class="text-danger">{{ $message }}</p>
                               @enderror
                          </td>
                        <td>
                          <input type="text" name="illness4" class="form-control text-end fs-3" placeholder="" wire:model="illness4">
                          @error('illness4')
                                  <p class="text-danger">{{ $message }}</p>
                              @enderror
                        </td>
                        <td>
                          <input type="text" name="health_status4" class="form-control text-end fs-3" placeholder="" wire:model="health_status4">
                          @error('health_status4')
                                <p class="text-danger">{{ $message }}</p>
                               @enderror
                          </td>
                        <td>
                          <input type="text" name="health_name4" class="form-control text-end fs-3" placeholder="" wire:model="health_name4">
                          @error('health_name4')
                                <p class="text-danger">{{ $message }}</p>
                               @enderror
                          </td>
                      </tr>
                </tbody>
              </table>

             <h1 class="text-center mt-3"> الجانب التربوي </h1>
             <label for="problem_solve" class="form-lable fw-bolder fs-3"> طريقة العائل في  التعامل مع المشكلات  </label>
                   <select name="problem_solve" id="" class="form-control text-end fs-3" wire:model="problem_solve">
                      <option value="الضرب"> الضرب </option>
                      <option value="السباب"> السباب </option>
                      <option value="الحوار والمناقشة"> الحوار والمناقشة </option>
                      <option value="اخري"> اخري </option>
                   </select>
                    @error('problem_solve')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <label for="child_reward" class="form-lable fw-bolder fs-3"> طريقة مكافأة الأبناء </label>
                   <select name="child_reward" id="" class="form-control text-end fs-3" wire:model="child_reward">
                      <option value="تشجيع معنوي"> تشجيع معنوي </option>
                      <option value="تشجيع مادي"> تشجيع مادي </option>
                      <option value="لاتكافئ"> لاتكافئ </option>
                      <option value="اخري"> اخري </option>
                   </select>
                    @error('child_reward')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <label for="help_problem" class="form-lable fw-bolder fs-3"> افراد يستعان بهم في حل المشكلات </label>
                   <select name="help_problem" id="" class="form-control text-end fs-3" wire:model="help_problem">
                      <option value="الخال"> الخال </option>
                      <option value="العم"> العم </option>
                      <option value="الجدة"> الجدة </option>
                      <option value="المنارة"> المنارة </option>
                      <option value="اخري"> اخري </option>
                   </select>
                    @error('help_problem')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <label for="problems" class="form-lable fw-bolder fs-3"> هل يوجد مشكلات مع الجيران او الاقارب او اخرين </label>
                   <select name="problems" id="" class="form-control text-end fs-3" wire:model="problems">
                      <option value="نعم"> نعم </option>
                      <option value="لا"> لا </option>
                   </select>
                    @error('problems')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <label for="what_problems" class="form-lable fw-bolder fs-3"> ماهي المشكلات </label>
                   <select name="what_problems" id="" class="form-control text-end fs-3" wire:model="what_problems">
                      <option value="مناوشات"> مناوشات </option>
                      <option value="اخري"> اخري </option>
                      <option value="لايوجد"> لايوجد </option>
                   </select>
                    @error('what_problems')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <h1 class="text-center mt-3"> الحالة الاقتصادية </h1>
             <h1 class="mt-3"> ميزانية الأسرة </h1>
             <h1 class="mt-3"> الإيرادات الشهرية </h1>
             <label for="expense_dad" class="form-lable fw-bolder fs-3" > نفقة من الاب </label>
             <input type="text" name="expense_dad" class="form-control text-end fs-3" placeholder="" wire:model="expense_dad">
              @error('expense_dad')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <label for="salary" class="form-lable fw-bolder fs-3"> راتب </label>
             <input type="text" name="salary" class="form-control text-end fs-3" placeholder="" wire:model="salary">
              @error('salary')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <label for="manara_help" class="form-lable fw-bolder fs-3"> مساعدات المنارة </label>
             <input type="text" name="manara_help" class="form-control text-end fs-3" placeholder="" wire:model="manara_help">
              @error('manara_help')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <label for="revenues_total" class="form-lable fw-bolder fs-3"> إجمالى </label>
             <input type="text" name="revenues_total" class="form-control text-end fs-3" placeholder="" wire:model="revenues_total">
              @error('revenues_total')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <h1 class="mt-3"> المصروفات الشهرية </h1>
             <label for="rent" class="form-lable fw-bolder fs-3"> إيجار شامل الكهرباءوالماء </label>
             <input type="text" name="rent" class="form-control text-end fs-3" placeholder="" wire:model="rent">
              @error('rent')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <label for="tube" class="form-lable fw-bolder fs-3"> أنبوبة </label>
             <input type="text" name="tube" class="form-control text-end fs-3" placeholder="" wire:model="tube">
              @error('tube')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <label for="feed" class="form-lable fw-bolder fs-3"> تغذية  </label>
             <input type="text" name="feed" class="form-control text-end fs-3" placeholder="" wire:model="feed">
              @error('feed')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <label for="transfers" class="form-lable fw-bolder fs-3"> انتقالات   </label>
             <input type="text" name="transfers" class="form-control text-end fs-3" placeholder="" wire:model="transfers">
              @error('transfers')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <label for="expenses_total" class="form-lable fw-bolder fs-3"> إجمالى </label>
             <input type="text" name="expenses_total" class="form-control text-end fs-3" placeholder="" wire:model="expenses_total">
              @error('expenses_total')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <label for="breadwinner_job" class="form-lable fw-bolder fs-3"> وظيفة عائل الاسرة  </label>
             <input type="text" name="breadwinner_job" class="form-control text-end fs-3" placeholder="" wire:model="breadwinner_job">
              @error('breadwinner_job')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <label for="old_projects" class="form-lable fw-bolder fs-3"> هل هناك سابقة اقامة مشروعات </label>
             <select name="old_projects" id="" class="form-control text-end fs-3" wire:model="old_projects">
                <option value="نعم"> نعم </option>
                <option value="لا"> لا  </option>
             </select>
              @error('old_projects')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <label for="project_type" class="form-lable fw-bolder fs-3"> في حالة الاجابة بنعم يذكر نوع المشروع </label>
             <select name="project_type" id="" class="form-control text-end fs-3" wire:model="project_type">
                <option value="بقالة"> بقالة </option>
                <option value="الخياطة"> الخياطة   </option>
                <option value="تقسيط"> تقسيط </option>
                <option value="ماكولات"> ماكولات  </option>
                <option value="اخري"> اخري </option>
             </select>
              @error('project_type')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <label for="project_want" class="form-lable fw-bolder fs-3"> مدي رغبة العائل في اقامة مشروع  </label>
             <select name="project_want" id="" class="form-control text-end fs-3" wire:model="project_want">
                <option value="نعم"> نعم </option>
                <option value="لا"> لا </option>
             </select>
              @error('project_want')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <label for="project_want_type" class="form-lable fw-bolder fs-3"> نوع المشروع المقترح </label>
             <select name="project_want_type" id="" class="form-control text-end fs-3" wire:model="project_want_type">
                <option value="بقالة"> بقالة </option>
                <option value="الخياطة"> الخياطة   </option>
                <option value="تقسيط"> تقسيط </option>
                <option value="ماكولات"> ماكولات  </option>
                <option value="اخري"> اخري </option>
             </select>
              @error('project_want_type')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror

             <button type="submit" class="cbtn btn-primary float-start w-auto"> إضافة </button>
         </form>
       </div>
     </div>
  </div>

 </section>
