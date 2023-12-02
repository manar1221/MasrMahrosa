<div>
    <section class="ccourses">
        <h1
          class="cheading text-center p-3 text-light fw-bolder shadow"
          style="background-color: #8e44ad"
        >
          الحالات
        </h1>

        <div class="cbox-container text-end vh-100" style="text-align: right">
          <table class="table fw-bolder fs-3 table-bordered table-responsive">
            <thead class="table-light">
              <tr>
                <th scope="col">عرض</th>
                <th scope="col">إجمالي عدد الحالات</th>
                <th scope="col">نوع الحالات</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <a
                    href="{{route('deforsed')}}"
                    class="text-success text-decoration-none"
                  >
                    عرض الكل
                  </a>
                </td>
                <td>{{ $deforse_cases->total() }}</td>
                <th scope="row">مطلقات</th>
              </tr>

              <tr>
                <td>
                  <a href="{{route('aytam')}}" class="text-success text-decoration-none">
                    عرض الكل
                  </a>
                </td>
                <td>{{ $aytam_cases->total() }}</td>
                <th scope="row">ايتام</th>
              </tr>

              <tr>
                <td>
                  <a href="{{route('araml')}}" class="text-success text-decoration-none">
                    عرض الكل
                  </a>
                </td>
                <td>{{ $araml_cases->total() }}</td>
                <th scope="row">ارامل</th>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
</div>
