<div>
    <section class="ccourses">

        <h1 class="cheading text-center p-3 text-light fw-bolder shadow" style="background-color: #8e44ad;"> المطلقات </h1>

        <div class="cbox-container text-end vh-100" style="text-align: right;">
         <div class="card">
           <div class="card-header">
              <div class="row">
                 <div class="col-md-6">
                    <a href="{{route('case.add')}}" class="cbtn float-start w-25 text-decoration-none"> إضافة حالة </a>
                </div>
                 <div class="col-md-6 fw-bolder fs-1">
                     كل الحالات
                 </div>
             </div>
           </div>
           <div class="card-body">
              <!-- <div class="alert alert-success" role="alert">message</div> -->
              <table class="table fw-bolder fs-3 table-bordered  table-responsive">
                 <thead class="table-light">
                    <tr>
                        <th scope="col"> تعديل / حذف / عرض</th>
                       <th scope="col"> السن </th>
                       <th scope="col"> اسم الحالة </th>
                       <th scope="col"> كود الحالة </th>
                       <th scope="col">#</th>
                     </tr>
                 </thead>
                 <tbody>
                    @php
                        $i = ($deforse_cases->currentPage()-1)*$deforse_cases->perPage();
                    @endphp
                    @foreach($deforse_cases as $deforse_case)
                      <tr>
                        <td>
                          <a href="edit.html" class="text-info text-decoration-none"> تعديل </a> /
                          <a href="#" class="text-danger text-decoration-none"> حذف </a> /
                          <a href="{{route('case.details',['case_id'=>$deforse_case->case_id])}}" class="text-success text-decoration-none"> عرض </a>
                        </td>
                        <td> {{$deforse_case->age}} </td>
                        <td> {{$deforse_case->name}} </td>
                        <td> {{$deforse_case->case_id}} </td>
                       <th scope="row"> {{++$i}} </th>
                     </tr>
                    @endforeach
                 </tbody>
               </table>
               {{$deforse_cases->links()}}
           </div>
         </div>
      </div>

     </section>
</div>
