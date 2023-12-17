<div>
    <section class="ccourses">

        <h1 class="cheading text-center p-3 text-light fw-bolder shadow" style="background-color: #8e44ad;"> الايتام </h1>
        @if (Session::has('message'))
            <div class="alert alert-success fw-blod fs-1" style="text-align: right;" role="alert">{{Session::get('message')}}</div>
        @endif
        <div class="cbox-container text-end vh-100" style="text-align: right;">
           <div class="card">
             <div class="card-header">
                <div class="row">
                   <div class="col-md-6">
                      <a href="{{route('aytam.add')}}" class="cbtn float-start w-25 text-decoration-none"> إضافة حالة </a>
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
                          $i = ($aytam_cases->currentPage()-1)*$aytam_cases->perPage();
                      @endphp
                      @foreach($aytam_cases as $aytam_case)
                        <tr>
                          <td>
                            <a href="{{route('aytam.edit',['aytamcase_id'=>$aytam_case->id])}}" class="text-info text-decoration-none"> تعديل </a> /
                            <a href="{{route('case.details',['case_id'=>$aytam_case->case_id])}}" class="text-success text-decoration-none"> عرض </a> /
                            <a href="#" onclick="deleteConfirmation({{ $aytam_case->id }})" class="text-danger text-decoration-none"> حذف </a>
                          </td>
                          <td> {{$aytam_case->age}} </td>
                          <td> {{$aytam_case->name}} </td>
                          <td> {{$aytam_case->case_id}} </td>
                         <th scope="row"> {{++$i}} </th>
                       </tr>
                      @endforeach
                   </tbody>
                 </table>
                 {{$aytam_cases->links()}}
             </div>
           </div>
        </div>
     </section>

</div>

<div class="modal" id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-3 pt-3">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3"> Do you want to delete this record? </h4>
                        <button type="button" class="cbtn btn btn-secondary fs-4" data-bs-toggle="modal" data-bs-target="#deleteConfirmation">cancel</button>
                        <button type="button"  class="cbtn btn btn-danger fs-4" onclick="deleteCase()">delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function deleteConfirmation(id)
        {
            @this.set('aytam_id',id);
            $('#deleteConfirmation').modal('show');
        }

        function deleteCase()
        {
           @this.call('deleteCase');
           $('#deleteConfirmation').modal('hide');
        }
    </script>
@endpush
